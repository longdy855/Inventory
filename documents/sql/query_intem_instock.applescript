DECLARE @branchid int
,@itemid int
,@startdate datetime
,@enddate datetime
,@item_category_id int
,@BeginDate DateTime
, @PurchaseStartDate DateTime
, @PurchaseEndDate DateTime
, @TransferStartDate DateTime
, @TransferEndDate DateTime
, @AdjustStartDate DateTime
, @AdjustEndDate DateTime
, @SellStartDate Datetime
, @SellendDate DATETIME
------
set @StartDate = '08-01-2010'
set @EndDate = '08-24-2010'
set @itemID=0
set @BranchID=1
set @item_category_id =0
set @PurchaseStartDate = @StartDate
set @PurchaseEndDate = @EndDate
set @TransferStartDate = @StartDate
set @TransferEndDate = @EndDate
set @AdjustStartDate = @StartDate
set @AdjustEndDate = @EndDate
set @SellStartDate = @StartDate
set @SellendDate = @EndDate
SELECT @BeginDate = ISNULL((SELECT Max(date) FROM tblActualInventory WHERE date <= @StartDate), @StartDate)

--//EndRegion Parameter
--//######################

--//Region Get the list of Item with unit convert name
--//##################################################
IF OBJECT_ID ('tempdb.#tblTemp') IS NOT NULL DROP Table #tblTemp
IF OBJECT_ID ('tempdb.#tblTmp1') IS NOT NULL DROP Table #tblTmp1
IF OBJECT_ID ('tempdb.#tblTmp2')IS NOT NULL DROP TABLE #tblTmp2
IF OBJECT_ID ('tempdb.#tblTmp2')IS NOT NULL DROP TABLE #TmpNewItemList
               
SELECT DISTINCT ti.item_id AS [item_id]
,ti.item_code
,ti.item_name AS [item_name]
,tu.unit_name_sing AS [unit]
,ti.unit_id 
--,tru.unit_id1 AS inv_unit_id
--,(SELECT tu2.unit_name_sing FROM tblUnit tu2 WHERE tu2.unit_id=tru.unit_id1)AS unit_name
,b.branch_name 
,b.branch_id 
,ti.reorder_qty 
,ti.item_category_id 
,ic.item_category_name AS item_category_name
--,isnull(tru.qty1,1) AS qty1
--,isnull(tru.qty2,1) AS qty2
INTO #tblTemp
FROM tblItem ti
INNER JOIN tblItemCategory ic ON ic.item_category_id=ti.item_category_id
INNER JOIN tblUnit tu ON ti.unit_id = tu.unit_id
--INNER JOIN trelUnitConvertion tru ON tru.item_id=ti.item_id
INNER JOIN tblItemBaseBranch itb ON itb.item_id = ti.item_id
INNER JOIN trelUserBranchLogPermission ubl ON ubl.branch_id = itb.branch_id
INNER JOIN tblBranch b ON b.branch_id = itb.branch_id 
WHERE ti.is_active = 1
AND itb.is_active='true'
AND (itb.branch_id = @BranchID OR @BranchID = 0)
AND (ti.item_id= @itemID or @itemID = 0)
AND (ti.item_category_id = @item_category_id OR @item_category_id = 0)
Order BY ti.item_name 

SELECT  tm.item_id AS [item_id]
,tm.item_code
,tm.item_name AS [item_name]
,tu.unit_name_sing AS [unit]
,tru.unit_id1 AS unit_id
--,tm.inv_unit_id
--,tm.unit_name
,tm.branch_name
,tm.branch_id
,tm.reorder_qty 
,tm.item_category_id
,tm.item_category_name
--, tm.qty1
--, tm.qty2
INTO #tblTmp1
FROM trelUnitConvertion tru
INNER  JOIN #tblTemp tm ON tm.item_id=tru.item_id
INNER JOIN tblUnit tu ON tu.unit_id=tru.unit_id1
ORDER BY tm.item_name

SELECT DISTINCT tm.item_id AS [item_id]
,tm.item_code
,tm.item_name AS [item_name]
,tu.unit_name_sing AS [unit]
,tru.unit_id2 AS unit_id
--,tm.inv_unit_id
--,tm.unit_name
,tm.branch_name
,tm.branch_id
,tm.reorder_qty 
,tm.item_category_id
,tm.item_category_name
--, tm.qty1
--, tm.qty2
INTO #tblTmp2
FROM trelUnitConvertion tru
INNER  JOIN #tblTemp tm ON tm.item_id=tru.item_id
INNER JOIN tblUnit tu ON tu.unit_id=tru.unit_id2
ORDER BY tm.item_name

SELECT * INTO #TmpNewItemList FROM #tblTemp
UNION 
SELECT * FROM #tblTmp1
UNION 
SELECT * FROM #tblTmp2
--//EndRegion Get the list of Item with unit convert name
--//########################################################
---------------------------------------------------------------

--//Region Get The convert from item inventory unit to the convert unit
--//       Get the smallest unit convert
--//###################################################################
ALTER TABLE #TmpNewItemList ADD QtyConvert float
UPDATE #TmpNewItemList
SET QtyConvert = 1

UPDATE #TmpNewItemList
SET QtyConvert = ISNULL(TrCon.QtyConvert, 1)
FROM #TmpNewItemList TI
, (
	SELECT TI.item_id
	, TI.unit_id
	, QtyConvert = isnull(Tru.Qty1,1)
	FROM #TmpNewItemList TI LEFT OUTER JOIN trelInvUnitConvertion Tru ON TI.item_id = Tru.item_id
	WHERE TI.unit_id = Tru.unit_id1
	UNION
	SELECT TI.item_id
	, TI.unit_id
	, QtyConvert = isnull(Tru.Qty2,1)
	FROM #TmpNewItemList TI LEFT OUTER JOIN trelInvUnitConvertion Tru ON TI.item_id = Tru.item_id
	WHERE TI.unit_id = Tru.unit_id2
   )TrCon
WHERE TI.item_id = TrCon.item_id
AND TI.unit_id = TrCon.unit_id

--Get The Smallest Convert Unit
ALTER TABLE #TmpNewItemList ADD QtyConvert_Smallest float
UPDATE #TmpNewItemList
SET QtyConvert_Smallest = ISNULL(SM.Smallest, 1)
FROM #TmpNewItemList TI
, (SELECT item_id, Smallest = Max(ISNULL(QtyConvert, 1))
	FROM #TmpNewItemList 
	GROUP BY item_id
	)SM
WHERE TI.item_id = SM.item_id

--Get The Convert From every unit to the smallest unit
ALTER TABLE #TmpNewItemList ADD QtyConvert_UnitTo_Smallest float
UPDATE #TmpNewItemList
SET QtyConvert_UnitTo_Smallest = ISNULL(QtyConvert_Smallest, 1) / ISNULL(QtyConVert, 1)
--//EndRegion Get The convert from item inventory unit to the convert unit
--//       Get the smallest unit convert
--//#########################################################################
--------------------------------------------------------------------------------

--//Region Get Begining Balance Information
--//#######################################
ALTER TABLE #TmpNewItemList ADD BeginingInvUnitID int
ALTER TABLE #TmpNewItemList ADD BeginingInvQty float

UPDATE #TmpNewItemList
SET BeginingInvUnitID = Ac.unit_id
, BeginingInvQty = Ac.qty
FROM #TmpNewItemList TI
, (SELECT Ac.item_id
	, Ac.unit_id
	, qty = SUM(ISNULL(Ac.qty, 0))
	, Ac.branch_id
	FROM tblActualInventory Ac 
	WHERE ISNULL(Ac.qty, 0) >= 0
	AND CONVERT(VARCHAR, Ac.Date, 112) = CONVERT(VARCHAR, @BeginDate, 112)
	--and convert(VARCHAR,Ac.Date,112) = convert(VARCHAR,@previewdate,112)
	AND (Ac.branch_id = @BranchID OR @BranchID = 0)
	AND (Ac.item_id = @itemId OR @itemId = 0)
	GROUP BY Ac.branch_id, Ac.item_id, Ac.unit_id
	)Ac
WHERE TI.item_id = Ac.item_id
AND TI.unit_id = Ac.unit_id
AND TI.branch_id = Ac.branch_id

--//EndRegion Get Begining Balance Information
--//#############################################
----------------------------------------------------

--//Region Get Purchase Information
--//###############################
ALTER TABLE #TmpNewItemList ADD PurchaseUnitID int
ALTER TABLE #TmpNewItemList ADD PurchaseQty float
ALTER TABLE #TmpNewItemList ADD PurchaseTotalCost float

UPDATE #TmpNewItemList
SET PurchaseUnitID = P.Unit_id
, PurchaseQty = P.Qty
, PurchaseTotalCost = P.TotalCost
FROM #TmpNewItemList TI
, ( SELECT distinct PD.item_id
	, PD.Unit_id
	, Qty = SUM(ISNULL(PD.Qty, 0))
	, TotalCost = SUM(ISNULL(PD.Qty, 0) * ISNULL(PD.Price, 0))
	, PD.branch_id
	FROM tblPurchaseInvoice P INNER JOIN trelPurchaseInvoiceDetail PD ON P.pi_id = PD.pi_id
	WHERE CONVERT(VARCHAR, P.pi_date, 112) BETWEEN CONVERT(VARCHAR, @PurchaseStartDate, 112) AND CONVERT(VARCHAR, @PurchaseEndDate, 112)
	--where convert(VARCHAR,P.pi_date,112) = convert(VARCHAR,@previewdate,112)
--	AND ( P.po_id IS NULL
--	   OR (P.po_id IS NOT NULL AND P.is_cancel = 0)
--		)
	AND (PD.branch_id = @BranchID OR @BranchID = 0)
	AND (PD.item_id = @itemID OR @itemID = 0)	
   AND P.is_delete = 0
GROUP BY PD.branch_id, PD.item_id, PD.Unit_id
	)P
WHERE TI.item_id = P.item_id
AND TI.Unit_ID = P.Unit_ID
AND TI.branch_id = P.branch_id
--//EndRegion Get Purchase Information
--//#####################################
--------------------------------------------

--//Region Get Transfer Information
--//###############################
ALTER TABLE #TmpNewItemList ADD TransferOutUnitID int
ALTER TABLE #TmpNewItemList ADD TransferOutQty float
ALTER TABLE #TmpNewItemList ADD TransferOutTotalCost float

UPDATE #TmpNewItemList
SET TransferOutUnitID = Tr.unit_id
, TransferOutQty = Tr.Qty
, TransferOutTotalCost = Tr.TotalCost
FROM #TmpNewItemList TI
, (SELECT TD.Item_id
	, TD.unit_id
	, Qty = SUM(ISNULL(TD.Qty, 0))
	, TotalCost = SUM(ISNULL(TD.Qty, 0) * ISNULL(TD.Price, 0))
	, T.from_branch_id
	FROM tbltransfer T INNER JOIN tblTransferDetail TD ON T.transfer_id = TD.transfer_id
	WHERE CONVERT(VARCHAR, T.transfer_date, 112) BETWEEN CONVERT(VARCHAR, @TransferStartDate, 112) AND CONVERT(VARCHAR, @TransferEndDate, 112)
	--where convert(VARCHAR,T.transfer_date,112) = convert(VARCHAR,@previewdate,112)
	AND T.is_transfered = 1
	AND (T.from_branch_id = @BranchID OR @BranchID = 0)
	AND (TD.item_id = @itemId OR @itemID = 0)
	GROUP BY T.from_branch_id, TD.item_id, TD.unit_id
	)Tr
WHERE TI.item_id = Tr.item_id
AND TI.unit_id = Tr.Unit_id
AND TI.branch_id = Tr.from_branch_id
--//EndRegion Get Transfer Information
--//#####################################
--------------------------------------------

--//Region Get Receive from transfer Information (Transfer In)
--//###########################################################
ALTER TABLE #TmpNewItemList ADD TransferInUnitID int
ALTER TABLE #TmpNewItemList ADD TransferInQty float
ALTER TABLE #TmpNewItemList ADD TransferInTotalCost float

UPDATE #TmpNewItemList
SET TransferINUnitID = Tr.unit_id
, TransferINQty = Tr.Qty
, TransferINTotalCost = Tr.TotalCost
FROM #TmpNewItemList TI
, (SELECT TD.Item_id
	, TD.unit_id
	, Qty = SUM(ISNULL(TD.Qty, 0))
	, TotalCost = SUM(ISNULL(TD.Qty, 0) * ISNULL(TD.Price, 0))
	, T.to_branch_id
	FROM tbltransfer T INNER JOIN tblTransferDetail TD ON T.transfer_id = TD.transfer_id
	WHERE CONVERT(VARCHAR, T.transfer_date, 112) BETWEEN CONVERT(VARCHAR, @TransferStartDate, 112) AND CONVERT(VARCHAR, @TransferEndDate, 112)
	--where convert(VARCHAR, T.transfer_date,112) = convert(VARCHAR,@previewdate,112)
	AND T.is_received = 1
	AND (T.to_branch_id = @BranchID OR @BranchID = 0)
	AND (TD.item_id = @itemID OR @itemID = 0)
	GROUP BY T.to_branch_id, TD.item_id, TD.unit_id
	)Tr
WHERE TI.item_id = Tr.item_id
AND TI.unit_id = Tr.Unit_id
AND Ti.branch_id = Tr.to_branch_id
--//EndRegion Get Receive from transfer Information (Transfer In)
--//###############################################################
----------------------------------------------------------------------

--//Region Get Adjust Plus Information
--//##################################
ALTER TABLE #TmpNewItemList ADD AdjustPlusUnitID int
ALTER TABLE #TmpNewItemList ADD AdjustPlusQty float

UPDATE #TmpNewItemList
SET AdjustPlusUnitID = AJ.Act_unit_id
, AdjustPlusQty = AJ.Act_adjust_qty
FROM #TmpNewItemList TI
, (SELECT AJ.item_id
	, AJ.Act_unit_id
	, Act_adjust_qty = SUM(ISNULL(AJ.Act_adjust_qty, 0))
	, AJ.branch_id
	FROM tblAdjustment AJ 
	WHERE ISNULL(AJ.Act_adjust_qty, 0) > 0
	AND CONVERT(VARCHAR, AJ.Adjustment_date, 112) BETWEEN CONVERT(VARCHAR, @AdjustStartDate, 112) AND CONVERT(VARCHAR, @AdjustEndDate, 112)
	--and convert(VARCHAR,AJ.Adjustment_date,112) = convert(VARCHAR,@previewdate,112)
	AND (AJ.branch_id = @BranchID OR @BranchID = 0)
	AND (AJ.item_id = @itemID OR @itemID = 0)
	GROUP BY AJ.branch_id, AJ.item_id, AJ.Act_unit_id
	)Aj
WHERE TI.item_id = AJ.item_id
AND TI.unit_id = Aj.act_unit_id
AND TI.branch_id = AJ.branch_id
--//EndRegion Get Adjust Plus Information
--//########################################
-----------------------------------------------

--//Region Get Adjust Minus Information
--//###################################
ALTER TABLE #TmpNewItemList ADD AdjustMinusUnitID int
ALTER TABLE #TmpNewItemList ADD AdjustMinusQty float

UPDATE #TmpNewItemList
SET AdjustMinusUnitID = AJ.Act_unit_id
, AdjustMinusQty = AJ.Act_adjust_qty
FROM #TmpNewItemList TI
, (SELECT AJ.item_id
	, AJ.Act_unit_id
	, Act_adjust_qty = SUM(ISNULL(AJ.Act_adjust_qty, 0))
	, AJ.branch_id
	FROM tblAdjustment AJ 
	WHERE ISNULL(AJ.Act_adjust_qty, 0) < 0
	AND CONVERT(VARCHAR, AJ.Adjustment_date, 112) BETWEEN CONVERT(VARCHAR, @AdjustStartDate, 112) AND CONVERT(VARCHAR, @AdjustEndDate, 112)
	--and convert(VARCHAR,AJ.Adjustment_date,112) = convert(VARCHAR,@previewdate,112)
	AND (AJ.branch_id = @BranchID OR @BranchID = 0)
	AND (AJ.item_id = @itemID OR @ItemID = 0)
	GROUP BY AJ.branch_id, AJ.item_id, AJ.Act_unit_id
	)Aj
WHERE TI.item_id = AJ.item_id
AND TI.unit_id = Aj.act_unit_id
AND TI.branch_id = AJ.branch_id
--//EndRegion Get Adjust Minus Information
--//######################################
---------------------------------------------

--//Region Get Recieve from vendor
--//###############################
ALTER TABLE #TmpNewItemList ADD ReceiveUnitID int
ALTER TABLE #TmpNewItemList ADD ReceiveQty float

UPDATE #TmpNewItemList
SET ReceiveUnitID = RF.unit_id
, ReceiveQty = RF.Qty
FROM #TmpNewItemList TI
, (SELECT RFD.item_id
	, RFD.unit_id
	, RF.Branch_id
	, Qty = SUM(ISNULL(RFD.Qty, 0))
	FROM tblReceiveFromVendor RF 
   INNER JOIN tblReceiveFromVendorDetail RFD ON RFD.Receive_id = RF.Receive_id
	WHERE CONVERT(VARCHAR, RF.Re_Date, 112) BETWEEN CONVERT(VARCHAR, @StartDate, 112) AND CONVERT(VARCHAR, @EndDate, 112)
	--where convert(VARCHAR,RF.Re_Date,112) = convert(VARCHAR,@previewdate,112)
	AND (RF.Branch_id = @BranchID OR @BranchID = 0)
	AND (RFD.item_id = @itemId OR @itemID = 0)
	GROUP BY RF.Branch_id, RFD.Item_id, RFD.Unit_id,RF.Branch_id
	)RF
WHERE TI.item_id = RF.item_id
AND TI.unit_id = RF.unit_id
AND TI.branch_id = RF.Branch_id
--//EndRegion Get Recieve from vendor
--//#####################################
-------------------------------------------------

--//Region Get Change Item In 
--//###############################
ALTER TABLE #TmpNewItemList ADD ChangeItemInUnitID int
ALTER TABLE #TmpNewItemList ADD ChangeItemInQty float

UPDATE #TmpNewItemList
SET ChangeItemInUnitID = CH.From_Unit_id
,ChangeItemInQty = CH.Qty
FROM #TmpNewItemList TI
, (SELECT CI.From_item_code
	, CI.From_unit_id
	, CI.Branch_id
	, Qty = SUM(ISNULL(CI.From_Qty, 0))
	FROM tblChangeItem CI 
	WHERE CONVERT(VARCHAR, CI.Change_date, 112) BETWEEN CONVERT(VARCHAR, @StartDate, 112) AND CONVERT(VARCHAR, @EndDate, 112)
	--where convert(VARCHAR,CI.Change_date,112) = convert(VARCHAR,@previewdate,112)
	AND (CI.Branch_id = @BranchID OR @BranchID = 0)
	--AND (RF.item_id = @itemId OR @itemID = 0)
	--AND CI.From_item_code=TI.From_item_code
	AND CI.From_item_status <> 'damage'
	GROUP BY CI.Branch_id, CI.From_unit_id, CI.From_item_code
	)CH
WHERE TI.item_code = CH.From_item_code
AND TI.unit_id = CH.From_unit_id
AND TI.branch_id = CH.Branch_id
--//EndRegion Get Change Item in
--//#####################################
----------------------------------------------------------------

--//Region Get Return To vendor
--//###############################
ALTER TABLE #TmpNewItemList ADD ReturnUnitID int
ALTER TABLE #TmpNewItemList ADD ReturnQty float

UPDATE #TmpNewItemList
SET ReturnUnitID = RT.Unit_id
, ReturnQty = RT.Qty
FROM #TmpNewItemList TI
, (SELECT RTVD.item_id
	, RTVD.unit_id
	, RTV.Branch_id
	, Qty = SUM(ISNULL(RTVD.Qty, 0))
	FROM tblReturnToVendor RTV
	INNER JOIN tblReturnToVendorDetail RTVD ON RTVD.Return_id = RTV.Return_id
	WHERE CONVERT(VARCHAR, RTV.Re_Date, 112) BETWEEN CONVERT(VARCHAR, @StartDate, 112) AND CONVERT(VARCHAR, @EndDate, 112)
	--where convert(VARCHAR,RTV.Re_Date,112) = convert(VARCHAR,@previewdate,112)
	AND (RTV.Branch_id = @BranchID OR @BranchID = 0)
	AND (RTVD.item_id = @itemId OR @itemID = 0)
	GROUP BY RTV.Branch_id, RTVD.item_id, RTVD.unit_id
	)RT
WHERE TI.item_id = RT.Item_id
AND TI.unit_id = RT.Unit_id
AND TI.branch_id = RT.Branch_id
--//EndRegion Get Return To vendor
--//#####################################
-------------------------------------------------

--//Region Get Change Item Out 
--//###############################
ALTER TABLE #TmpNewItemList ADD ChangeItemOutUnitID int
ALTER TABLE #TmpNewItemList ADD ChangeItemOutQty float

UPDATE #TmpNewItemList
SET ChangeItemOutUnitID = CH.To_Unit_id
,ChangeItemOutQty = CH.Qty
FROM #TmpNewItemList TI
, (SELECT CI.To_item_code
	, CI.To_unit_id
	, CI.Branch_id
	, Qty = SUM(ISNULL(CI.To_Qty, 0))
	FROM tblChangeItem CI 
	WHERE CONVERT(VARCHAR, CI.Change_date, 112) BETWEEN CONVERT(VARCHAR, @StartDate, 112) AND CONVERT(VARCHAR, @EndDate, 112)
	--where convert(VARCHAR,CI.Change_date,112) = convert(VARCHAR,@previewdate,112)
	AND (CI.Branch_id = @BranchID OR @BranchID = 0)
	--AND (RF.item_id = @itemId OR @itemID = 0)
	--AND CI.To_item_code=TI.To_item_code
	--AND CI.From_item_status <> 'damage'
	GROUP BY CI.Branch_id, CI.To_unit_id, CI.To_item_code
	)CH
WHERE TI.item_code = CH.To_item_code
AND TI.unit_id = CH.To_unit_id
AND TI.branch_id = CH.Branch_id
--//EndRegion Get Change Item Out
--//#####################################
------------------------------------------------------

--//Region Get Lost Information
--//###################################
ALTER TABLE #TmpNewItemList ADD LostUnitID int
ALTER TABLE #TmpNewItemList ADD LostQty float

UPDATE #TmpNewItemList
SET LostUnitID = AJ.Act_unit_id
, LostQty = AJ.Lost_qty
FROM #TmpNewItemList TI
, (SELECT AJ.item_id
	, AJ.Act_unit_id
	, Lost_qty = SUM(ISNULL(AJ.lost_qty, 0))
	, AJ.branch_id
	FROM tblAdjustment AJ 
	WHERE CONVERT(VARCHAR, AJ.Adjustment_date, 112) BETWEEN CONVERT(VARCHAR, @AdjustStartDate, 112) AND CONVERT(VARCHAR, @AdjustEndDate, 112)
	--where convert(VARCHAR,AJ.Adjustment_date,112) = convert(VARCHAR,@previewdate,112)
	AND (AJ.branch_id = @BranchID OR @BranchID = 0)
	AND (AJ.item_id = @itemID OR @ItemID = 0)
	GROUP BY AJ.branch_id, AJ.item_id, AJ.Act_unit_id
	)Aj
WHERE TI.item_id = AJ.item_id
AND TI.unit_id = Aj.act_unit_id
AND TI.branch_id = AJ.branch_id
--//EndRegion Get Lost Information
--//######################################
---------------------------------------------

--//Region Get Damage Information
--//###################################
ALTER TABLE #TmpNewItemList ADD DamageUnitID int
ALTER TABLE #TmpNewItemList ADD DamageQty float

UPDATE #TmpNewItemList
SET DamageUnitID = AJ.Act_unit_id
, DamageQty = AJ.Damage_qty
FROM #TmpNewItemList TI
, (SELECT AJ.item_id
	, AJ.Act_unit_id
	, Damage_qty = SUM(ISNULL(AJ.damage_qty, 0))
	, AJ.branch_id
	FROM tblAdjustment AJ 
	WHERE CONVERT(VARCHAR, AJ.Adjustment_date, 112) BETWEEN CONVERT(VARCHAR, @AdjustStartDate, 112) AND CONVERT(VARCHAR, @AdjustEndDate, 112)
	--where convert(VARCHAR,AJ.Adjustment_date,112) = convert(VARCHAR,@previewdate,112)
	AND (AJ.branch_id = @BranchID OR @BranchID = 0)
	AND (AJ.item_id = @itemID OR @ItemID = 0)
	GROUP BY AJ.branch_id, AJ.item_id, AJ.Act_unit_id
	)Aj
WHERE TI.item_id = AJ.item_id
AND TI.unit_id = Aj.act_unit_id
AND TI.branch_id = AJ.branch_id
--//EndRegion Get Damage Information
--//######################################
---------------------------------------------

--//Region Get Change Item In 
--//###############################
ALTER TABLE #TmpNewItemList ADD ChangeItemDamageUnitID int
ALTER TABLE #TmpNewItemList ADD ChangeItemDamageQty float

UPDATE #TmpNewItemList
SET ChangeItemDamageUnitID = CH.From_Unit_id
,ChangeItemDamageQty = CH.Qty
FROM #TmpNewItemList TI
, (SELECT CI.From_item_code
	, CI.From_unit_id
	, CI.Branch_id
	, Qty = SUM(ISNULL(CI.From_Qty, 0))
	FROM tblChangeItem CI 
	WHERE CONVERT(VARCHAR, CI.Change_date, 112) BETWEEN CONVERT(VARCHAR, @StartDate, 112) AND CONVERT(VARCHAR, @EndDate, 112)
	--where convert(VARCHAR,CI.Change_date,112) = convert(VARCHAR,@previewdate,112)
	AND (CI.Branch_id = @BranchID OR @BranchID = 0)
	--AND (RF.item_id = @itemId OR @itemID = 0)
	--AND CI.From_item_code=TI.From_item_code
	AND CI.From_item_status = 'damage'
	GROUP BY CI.Branch_id, CI.From_unit_id, CI.From_item_code
	)CH
WHERE TI.item_code = CH.From_item_code
AND TI.unit_id = CH.From_unit_id
AND TI.branch_id = CH.Branch_id
--//EndRegion Get Change Item in
--//#####################################
----------------------------------------------------------------

--//Region Get Request Out item
--//###########################
ALTER TABLE #TmpNewItemList ADD RequestOutUnitID int
ALTER TABLE #TmpNewItemList ADD RequestOutQty float

UPDATE #TmpNewItemList
SET RequestOutUnitID = RQ.unit_id
, RequestOutQty = RQ.Qty
FROM #TmpNewItemList TI
, (SELECT ITL.item_id
	, RQD.unit_id
	, Qty = SUM(ISNULL(RQD.qty, 0))
	, RQM.brand_id as branch_id
	FROM tblRequestOut RQM INNER JOIN tblRequestOut_Detail RQD ON RQM.req_id = RQD.req_id
	INNER JOIN #TmpNewItemList ITL ON RQD.item_code = ITL.item_code
	WHERE CONVERT(VARCHAR, RQM.req_date, 112) BETWEEN CONVERT(VARCHAR, @SellStartDate, 112) AND CONVERT(VARCHAR, @SellEndDate, 112) 
	--where convert(VARCHAR,RQM.req_date,112) = convert(VARCHAR,@previewdate,112)
	AND RQM.IsStockOut = 1
	AND (RQM.brand_id = @BranchID OR @BranchID = 0)
	AND (ITL.item_id = @itemID OR @ItemID = 0)
	GROUP BY RQM.brand_id, ITL.item_id, RQD.unit_id
	)RQ
WHERE TI.item_id = RQ.item_id
AND TI.unit_id = RQ.unit_id
AND TI.branch_id = RQ.branch_id
--//End Region Get Request Out item
--//###########################
----------------------------------------------------------------

--//Region Get Return In item
--//#########################
ALTER TABLE #TmpNewItemList ADD ReturnInUnitID int
ALTER TABLE #TmpNewItemList ADD ReturnInQty float

UPDATE #TmpNewItemList
SET ReturnInUnitID = RRT.unit_id
, ReturnInQty = RRT.Qty
FROM #TmpNewItemList TI
, (SELECT RT.item_id
	, RT.unit_id
	, Qty = SUM(ISNULL(RT.return_qty, 0))
	, RT.branch_id 
	FROM tblReturnIn RT 
	WHERE CONVERT(VARCHAR, RT.order_date, 112) BETWEEN CONVERT(VARCHAR, @SellStartDate, 112) AND CONVERT(VARCHAR, @SellEndDate, 112) 
	--where convert(VARCHAR,RT.order_date,112) = convert(VARCHAR,@previewdate,112)
	AND RT.isStockIn = 1
	AND (RT.branch_id = @BranchID OR @BranchID = 0)
	AND (RT.item_id = @itemID OR @ItemID = 0)
	GROUP BY RT.branch_id, RT.item_id, RT.unit_id
	)RRT
WHERE TI.item_id = RRT.item_id
AND TI.unit_id = RRT.unit_id
AND TI.branch_id = RRT.branch_id
--//End Region Get Return In item
--//#############################
----------------------------------------------------------------


--//Region Get Sell Information
--//###################################
ALTER TABLE #TmpNewItemList ADD SellUnitID int
ALTER TABLE #TmpNewItemList ADD SellQty float

UPDATE #TmpNewItemList
SET SellUnitID = SI.unit_id
, SellQty = SI.Qty
FROM #TmpNewItemList TI
, (SELECT SI.item_id
	, SI.unit_id
	, Qty = SUM(ISNULL(SI.sale_qty, 0) + ISNULL(SI.void_qty, 0))
	, SI.branch_id
	FROM tblSaleItem_Master SM RIGHT JOIN tblSaleItem SI ON SM.sale_item_master_id = SI.sale_item_master_id
	WHERE CONVERT(VARCHAR, SI.sale_date, 112) BETWEEN CONVERT(VARCHAR, @SellStartDate, 112) AND CONVERT(VARCHAR, @SellEndDate, 112) 
	--where convert(VARCHAR,SI.sale_date,112) = convert(VARCHAR,@previewdate,112)
	--AND SM.is_void = 0
	AND (SI.branch_id = @BranchID OR @BranchID = 0)
	AND (SI.item_id = @itemID OR @ItemID = 0)
	GROUP BY SI.branch_id, SI.item_id, SI.unit_id
	)SI
WHERE TI.item_id = SI.item_id
AND TI.unit_id = SI.unit_id
AND TI.branch_id = SI.branch_id
--//EndRegion Get Sell Information
--//#########################################
------------------------------------------------

--//Region Get Void Sell Information
--//###################################
ALTER TABLE #TmpNewItemList ADD VoidSellUnitID int
ALTER TABLE #TmpNewItemList ADD VoidSellQty float

UPDATE #TmpNewItemList
SET VoidSellUnitID = SI.unit_id
, VoidSellQty = SI.Qty
FROM #TmpNewItemList TI
, (SELECT SI.item_id
	, SI.unit_id
	, Qty = SUM(ISNULL(SI.void_qty, 0))
	, SI.branch_id
	FROM tblSaleItem_Master SM RIGHT JOIN tblSaleItem SI ON SM.sale_item_master_id = SI.sale_item_master_id
	WHERE CONVERT(VARCHAR, SI.sale_date, 112) BETWEEN CONVERT(VARCHAR, @SellStartDate, 112) AND CONVERT(VARCHAR, @SellEndDate, 112) 
	--where convert(VARCHAR,SI.sale_date,112) = convert(VARCHAR,@previewdate,112)
	AND SI.void_qty >= 1
	AND (SI.branch_id = @BranchID OR @BranchID = 0)
	AND (SI.item_id = @itemID OR @itemID = 0)
	GROUP BY SI.branch_id, SI.item_id, SI.unit_id
	)SI
WHERE TI.item_id = SI.item_id
AND TI.unit_id = SI.unit_id
AND TI.branch_id = SI.branch_id
--//EndRegion Get Adjust Minus Information
--//#########################################
------------------------------------------------

--//Region Get Actual Inventory Information
--//#######################################
ALTER TABLE #TmpNewItemList ADD ActualInvUnitID int
ALTER TABLE #TmpNewItemList ADD ActualInvQty float

UPDATE #TmpNewItemList
SET ActualInvUnitID = Ac.unit_id
, ActualInvQty = Ac.qty
FROM #TmpNewItemList TI
, (SELECT Ac.item_id
	, Ac.unit_id
	, qty = SUM(ISNULL(Ac.qty, 0))
	, Ac.branch_id
	FROM tblActualInventory Ac 
	WHERE ISNULL(Ac.qty, 0) >= 0
	AND CONVERT(VARCHAR, Ac.Date, 112) = CONVERT(VARCHAR, @EndDate, 112)
	--and convert(VARCHAR,Ac.Date,112) = convert(VARCHAR,@previewdate,112)
	AND (Ac.branch_id = @BranchID OR @BranchID = 0)
	AND (Ac.item_id = @itemID OR @ItemID = 0)
	GROUP BY Ac.branch_id, Ac.item_id, Ac.unit_id
	)Ac
WHERE TI.item_id = Ac.item_id
AND TI.unit_id = Ac.unit_id
AND TI.branch_id = Ac.branch_id
--//EndRegion Get Actual Inventory Information
--//##########################################
-------------------------------------------------

--//Region Convert All Qty to the inventory item unit
--//       Convert All Qty to the smallest unit
--//###########################################
ALTER TABLE #TmpNewItemList ADD BeginingInvQty_InvUnit float
ALTER TABLE #TmpNewItemList ADD PurchaseQty_InvUnit float
ALTER TABLE #TmpNewItemList ADD TransferOutQty_InvUnit float
ALTER TABLE #TmpNewItemList ADD TransferInQty_InvUnit float
ALTER TABLE #TmpNewItemList ADD AdjustPlusQty_InvUnit float
ALTER TABLE #TmpNewItemList ADD AdjustMinusQty_InvUnit float
ALTER TABLE #TmpNewItemList ADD SellQty_InvUnit float
ALTER TABLE #TmpNewItemList ADD VoidSellQty_InvUnit float
ALTER TABLE #TmpNewItemList ADD ActualQty_InvUnit float
ALTER TABLE #TmpNewItemList ADD RecieveQty_InvUnit float
ALTER TABLE #TmpNewItemList ADD ChangeItemInQty_InvUnit float
ALTER TABLE #TmpNewItemList ADD ReturnQty_InvUnit float
ALTER TABLE #TmpNewItemList ADD ChangeItemOutQty_InvUnit float
ALTER TABLE #TmpNewItemList ADD LostQty_InvUnit float
ALTER TABLE #TmpNewItemList ADD DamageQty_InvUnit float
ALTER TABLE #TmpNewItemList ADD ChangeItemDamageQty_InvUnit float
ALTER TABLE #TmpNewItemList ADD RequestOutQty_InvUnit float
ALTER TABLE #TmpNewItemList ADD ReturnInQty_InvUnit float


--ALTER TABLE #TmpNewItemList ADD reorder_qty float

ALTER TABLE #TmpNewItemList ADD BeginingInvQty_Smallest float
ALTER TABLE #TmpNewItemList ADD PurchaseQty_Smallest float
ALTER TABLE #TmpNewItemList ADD TransferOutQty_Smallest float
ALTER TABLE #TmpNewItemList ADD TransferInQty_Smallest float
ALTER TABLE #TmpNewItemList ADD AdjustPlusQty_Smallest float
ALTER TABLE #TmpNewItemList ADD AdjustMinusQty_Smallest float
ALTER TABLE #TmpNewItemList ADD SellQty_Smallest float
ALTER TABLE #TmpNewItemList ADD VoidSellQty_Smallest float
ALTER TABLE #TmpNewItemList ADD ActualQty_Smallest float
ALTER TABLE #TmpNewItemList ADD RecieveQty_Smallest float
ALTER TABLE #TmpNewItemList ADD ChangeItemInQty_Smallest float
ALTER TABLE #TmpNewItemList ADD ReturnQty_Smallest float
ALTER TABLE #TmpNewItemList ADD ChangeItemOutQty_Smallest float
ALTER TABLE #TmpNewItemList ADD LostQty_Smallest float
ALTER TABLE #TmpNewItemList ADD DamageQty_Smallest float
ALTER TABLE #TmpNewItemList ADD ChangeItemDamageQty_Smallest float
ALTER TABLE #TmpNewItemList ADD RequestOutQty_Smallest float
ALTER TABLE #TmpNewItemList ADD ReturnInQty_Smallest float


UPDATE #TmpNewItemList
SET BeginingInvQty_InvUnit = ISNULL(BeginingInvQty, 0) / ISNULL(Qtyconvert, 1)
, PurchaseQty_InvUnit = ISNULL(PurchaseQty, 0) / ISNULL(Qtyconvert, 1)
, TransferOutQty_InvUnit = ISNULL(TransferOutQty, 0) / ISNULL(Qtyconvert, 1)
, TransferInQty_InvUnit = ISNULL(TransferInQty, 0) / ISNULL(Qtyconvert, 1)
, AdjustPlusQty_InvUnit = ISNULL(AdjustPlusQty, 0) / ISNULL(Qtyconvert, 1)
, AdjustMinusQty_InvUnit = ISNULL(AdjustMinusQty, 0) / ISNULL(Qtyconvert, 1)
, SellQty_InvUnit = ISNULL(SellQty, 0) / ISNULL(Qtyconvert, 1)
, VoidSellQty_InvUnit = ISNULL(VoidSellQty, 0) / ISNULL(Qtyconvert, 1)
, RecieveQty_InvUnit = ISNULL(ReceiveQty, 0) / ISNULL(Qtyconvert, 1)
, ChangeItemInQty_InvUnit = ISNULL(ChangeItemInQty, 0) / ISNULL(Qtyconvert, 1)
, ReturnQty_InvUnit = ISNULL(ReturnQty, 0) / ISNULL(Qtyconvert, 1)
, ChangeItemOutQty_InvUnit = ISNULL(ChangeItemOutQty, 0) / ISNULL(Qtyconvert, 1)
, LostQty_InvUnit = ISNULL(LostQty, 0) / ISNULL(Qtyconvert, 1)
, DamageQty_InvUnit = ISNULL(DamageQty, 0) / ISNULL(Qtyconvert, 1)
, ChangeItemDamageQty_InvUnit = ISNULL(ChangeItemDamageQty, 0) / ISNULL(Qtyconvert, 1)
, RequestOutQty_InvUnit = ISNULL(RequestOutQty, 0) / ISNULL(Qtyconvert, 1)
, ReturnInQty_InvUnit = ISNULL(ReturnInQty, 0) / ISNULL(Qtyconvert, 1)



UPDATE #TmpNewItemList
SET BeginingInvQty_Smallest = ISNULL(BeginingInvQty_InvUnit, 0) * ISNULL(QtyConvert_Smallest, 0)
, PurchaseQty_Smallest = ISNULL(PurchaseQty_InvUnit, 0) * ISNULL(QtyConvert_Smallest, 0)
, TransferOutQty_Smallest = ISNULL(TransferOutQty_InvUnit, 0) * ISNULL(QtyConvert_Smallest, 0)
, TransferInQty_Smallest = ISNULL(TransferInQty_InvUnit, 0) * ISNULL(QtyConvert_Smallest, 0)
, AdjustPlusQty_Smallest = ISNULL(AdjustPlusQty_InvUnit, 0) * ISNULL(QtyConvert_Smallest, 0)
, AdjustMinusQty_Smallest = ISNULL(AdjustMinusQty_InvUnit, 0) * ISNULL(QtyConvert_Smallest, 0)
, SellQty_Smallest = ISNULL(SellQty_InvUnit, 0) * ISNULL(QtyConvert_Smallest, 0)
, VoidSellQty_Smallest = ISNULL(VoidSellQty_InvUnit, 0) * ISNULL(QtyConvert_Smallest, 0)
, ActualQty_Smallest = ISNULL(ActualQty_InvUnit, 0) * ISNULL(QtyConvert_Smallest, 0)
, RecieveQty_Smallest = ISNULL(RecieveQty_InvUnit, 0) / ISNULL(Qtyconvert_Smallest, 0)
, ChangeItemInQty_Smallest = ISNULL(ChangeItemInQty_InvUnit, 0) / ISNULL(Qtyconvert_Smallest, 0)
, ReturnQty_Smallest = ISNULL(ReturnQty_InvUnit, 0) / ISNULL(Qtyconvert_Smallest, 0)
, ChangeItemOutQty_Smallest = ISNULL(ChangeItemOutQty_InvUnit, 0) / ISNULL(Qtyconvert_Smallest, 0)
, LostQty_Smallest = ISNULL(LostQty_InvUnit, 0) / ISNULL(Qtyconvert_Smallest, 0)
, DamageQty_Smallest = ISNULL(DamageQty_InvUnit, 0) / ISNULL(Qtyconvert_Smallest, 0)
, ChangeItemDamageQty_Smallest = ISNULL(ChangeItemDamageQty_InvUnit, 0) / ISNULL(Qtyconvert_Smallest, 0)
, RequestOutQty_Smallest = ISNULL(RequestOutQty_InvUnit, 0) / ISNULL(Qtyconvert_Smallest, 0)
, ReturnInQty_Smallest = ISNULL(ReturnInQty_InvUnit, 0) / ISNULL(Qtyconvert_Smallest, 0)


--//Region Convert All Qty to the inventory item unit
--//       Convert All Qty to the smallest unit
--//################################################
---------------------------------------------------------

--//Region Calculate The Expected Balance by following the convert unit
--//###################################################################
ALTER TABLE #TmpNewItemList ADD ExspectedQty_Smallest_EveryUnit float
ALTER TABLE #TmpNewItemList ADD ExspectedItemQty_Smallest float
ALTER TABLE #TmpNewItemList ADD ExspectedQty int

--//Start calculate the expected balance base on each unit
UPDATE #TmpNewItemList
SET ExspectedQty_Smallest_EveryUnit = (
							--//Stock In
							ISNULL(BeginingInvQty_Smallest, 1) + 
							ISNULL(PurchaseQty_Smallest, 1) + 
							ISNULL(TransferInQty_Smallest, 1) + 
							ISNULL(AdjustPlusQty_Smallest, 1) + 
							ISNULL(RecieveQty_Smallest, 1) +
							ISNULL(ChangeItemInQty_Smallest,1) + 
							ISNULL(VoidSellQty_Smallest, 1) +
							ISNULL(ReturnInQty_Smallest, 1) 
							)
							-
							(
							--//Stock Out
							ISNULL(TransferOutQty_Smallest, 1) + 
							ISNULL((AdjustMinusQty_Smallest), 1) + 
							ISNULL((SellQty_Smallest), 1) +
							ISNULL(ReturnQty_Smallest,1) +
							ISNULL(ChangeItemOutQty_Smallest,1) +
							ISNULL(LostQty_Smallest,1) +
							ISNULL(DamageQty_Smallest,1) +
							isnull(ChangeItemDamageQty_Smallest,1) +
							ISNULL(RequestOutQty_Smallest, 1) 
							)
							
							

--//Start calculate the expected balance base on item unit
UPDATE #TmpNewItemList
SET ExspectedItemQty_Smallest = T.ExspectedQty_Smallest_EveryUnit
FROM #TmpNewItemList TI
, (SELECT item_id
	, branch_id
	, ExspectedQty_Smallest_EveryUnit = SUM(ISNULL(ExspectedQty_Smallest_EveryUnit,1))
	FROM #TmpNewItemList
	GROUP BY branch_id, item_id
	)T
WHERE TI.item_id = T.item_id
AND TI.branch_id = T.branch_id

--//Loop branch by branch
--//#####################
DECLARE @NewBranchLoopID int
, @OldBranchLoopID int
SELECT @NewBranchLoopID = 0
, @OldBranchLoopID = 0

WHILE (1 = 1)
BEGIN
	SELECT TOP 1 @NewBranchLoopID = branch_id
	FROM #TmpNewItemList
	WHERE branch_id > @NewBranchLoopID
	GROUP BY branch_id
	ORDER BY branch_id

	IF (@OldBranchLoopID < @NewBranchLoopID)
	BEGIN
		DECLARE @NewItemID int
		, @OldItemID int

		SELECT @NewItemID = 0
		, @OldItemID = 0

		WHILE (1 = 1)
		BEGIN
			--//Loop one item_id by one item_id
			--//###############################
			SELECT TOP 1 @NewItemID = item_id
			FROM #TmpNewItemList
			WHERE item_id > @NewItemID
			AND branch_id = @NewBranchLoopID
			GROUP BY branch_id, item_id
			ORDER BY item_id

			IF (@OldItemID < @NewItemID)
			BEGIN

				DECLARE @NewQtyConvert Float
				, @OldQtyConvert Float
				, @MaxQtyConvert Float
				, @Unit_id int

				, @ExspectedItemQty_Smallest Float
				, @QtyConvert_UnitTo_Smallest Float
				, @Calculation int
				, @TotalCalculation Int

				SELECT @NewQtyConvert = 0
				, @OldQtyConvert = 0
				, @Calculation = 0
				, @TotalCalculation = 0

				SELECT @MaxQtyConvert = QtyConvert_Smallest
				FROM #TmpNewItemList
				WHERE item_id = @NewItemID
				AND branch_id = @NewBranchLoopID

				WHILE (1 = 1)
				BEGIN
					--//Incase of no have convert unit
					--//##############################
					IF ((SELECT COUNT(item_id) 
							FROM #TmpNewItemList 
							WHERE item_id = @NewItemID
							AND branch_id = @NewBranchLoopID) 
							= 1)
					BEGIN
							SELECT TOP 1 @NewQtyConvert = QtyConvert
							, @Unit_id = unit_id
							, @ExspectedItemQty_Smallest = ExspectedItemQty_Smallest
							, @QtyConvert_UnitTo_Smallest = QtyConvert_UnitTo_Smallest
							FROM #TmpNewItemList
							WHERE item_id = @NewItemID
							AND branch_id = @NewBranchLoopID
							ORDER BY QtyConvert

							SELECT @Calculation = (ISNULL(@ExspectedItemQty_Smallest, 0) - ISNULL(@TotalCalculation, 0)) / @QtyConvert_UnitTo_Smallest
							SELECT @TotalCalculation = ISNULL(@TotalCalculation, 0) + (ISNULL(@Calculation, 0) * @QtyConvert_UnitTo_Smallest)

							UPDATE #TmpNewItemList
							SET ExspectedQty = @Calculation
							WHERE item_id = @NewItemID
							AND unit_id = @Unit_id
							AND branch_id = @NewBranchLoopID
							BREAK;
					END	
								
					--//Incase of many convert unit
					--//#########################	
					ELSE
					BEGIN
						SELECT TOP 1 @NewQtyConvert = QtyConvert
						, @Unit_id = unit_id
						, @ExspectedItemQty_Smallest = ExspectedItemQty_Smallest
						, @QtyConvert_UnitTo_Smallest = QtyConvert_UnitTo_Smallest
						FROM #TmpNewItemList
						WHERE item_id = @NewItemID
						AND QtyConvert > @NewQtyConvert
						AND branch_id = @NewBranchLoopID
						ORDER BY QtyConvert

						IF (@OldQtyConvert < @NewQtyConvert)
						BEGIN
							SELECT @Calculation = (@ExspectedItemQty_Smallest - @TotalCalculation) / @QtyConvert_UnitTo_Smallest
							SELECT @TotalCalculation = @TotalCalculation + (@Calculation * @QtyConvert_UnitTo_Smallest)

							UPDATE #TmpNewItemList
							SET ExspectedQty = @Calculation
							WHERE item_id = @NewItemID
							AND unit_id = @Unit_id
							AND branch_id = @NewBranchLoopID

							SELECT @OldQtyConvert = @NewQtyConvert
						END
						ELSE BEGIN BREAK; END
					END
				END --END OF SECOND TIME WHILE
				SELECT @OldItemID = @NewItemID
			END --END OF IF (@OldItemID <> @NewItemID)
			ELSE BEGIN BREAK; END
		END --END OF FIRST TIME WHILE Code
	SELECT @OldBranchLoopID = @NewBranchLoopID
	END --End of Branch condition
	ELSE BEGIN BREAK; END
END --End of Loop branch
--//EndRegion Calculate The Expected Balance by following the convert unit
--//#########################################################################
--------------------------------------------------------------------------------

--//Region Calculate The End Margin Balance by following the convert unit
--//###################################################################
--ALTER TABLE #TmpNewItemList ADD EndMarginItemQty_Smallest float
ALTER TABLE #TmpNewItemList ADD EndMarginQty int

UPDATE #TmpNewItemList
SET EndMarginQty = ISNULL(ExspectedQty, 0) - ISNULL(ActualInvQty, 0)
--//EndRegion Calculate The End Magine Balance by following the convert unit
--//#########################################################################
--------------------------------------------------------------------------------

--//Region last Entry date
--//######################
ALTER TABLE #TmpNewItemList ADD LastEntryDate DateTime
UPDATE #TmpNewItemList
SET LastEntryDate = CONVERT(VARCHAR, @BeginDate, 112)
--SET LastEntryDate = convert(VARCHAR,@previewdate,112)
--//End Region last Entry date
--//#############################
------------------------------------

--//Region Calculate Cost
--//#####################
ALTER TABLE #TmpNewItemList ADD BeginingInvCost float
ALTER TABLE #TmpNewItemList ADD CostAverage Float
ALTER TABLE #TmpNewItemList ADD CostAverage_samllest Float

DECLARE @SmallerBeginDate datetime

	--//Loop branch by branch
	--//#####################
	SELECT @NewBranchLoopID = 0
	, @OldBranchLoopID = 0

	WHILE (1 = 1)
	BEGIN
		SELECT TOP 1 @NewBranchLoopID = branch_id
		FROM #TmpNewItemList
		WHERE branch_id > @NewBranchLoopID
		GROUP BY branch_id
		ORDER BY branch_id

		IF (@OldBranchLoopID < @NewBranchLoopID)
		BEGIN
			SELECT @SmallerBeginDate = ISNULL((SELECT Max(date) FROM tblActualInventory WHERE date < @BeginDate AND branch_id = @NewBranchLoopID), @StartDate)

			--//Incase of no have begining balance
			If CONVERT(VARCHAR, @SmallerBeginDate, 112) = CONVERT(VARCHAR, @StartDate, 112)
			--if convert(VARCHAR,@previewdate,112) = convert(VARCHAR,@previewdate,112)
			BEGIN
				UPDATE #TmpNewItemList
				SET CostAverage_samllest = C.CostAverage_samllest
				FROM #TmpNewItemList TI
				, ( SELECT item_id
					, branch_id
					, CostAverage_samllest = SUM(ISNULL(PurchaseTotalCost, 0) + ISNULL(TransferInTotalCost, 0))
											 /
											 CASE WHEN ISNULL(SUM(ISNULL(PurchaseQty_Smallest, 0) +  ISNULL(TransferInQty_Smallest , 0)), 1) = 0 THEN 1
												  ELSE ISNULL(SUM(ISNULL(PurchaseQty_Smallest, 0) +  ISNULL(TransferInQty_Smallest , 0)), 1)
												  END
					FROM #TmpNewItemList
					WHERE (item_id = @itemid OR @itemid = 0) 
					AND branch_id = @NewBranchLoopID
					GROUP BY branch_id, item_id
				   )C
				WHERE TI.item_id = C.item_id
				AND TI.branch_id = C.branch_id

				UPDATE #TmpNewItemList
				SET CostAverage = CostAverage_samllest * QtyConvert_UnitTo_Smallest
				WHERE branch_id = @NewBranchLoopID

			END

			IF CONVERT(VARCHAR, @SmallerBeginDate, 112) < CONVERT(VARCHAR, @BeginDate, 112)
			--if convert(VARCHAR,@previewdate,112) = convert(VARCHAR,@previewdate,112)
			BEGIN
				--//Get Begining Cost
				UPDATE #TmpNewItemList
				SET BeginingInvCost = C.Cost 
				FROM #TmpNewItemList TI
				, ( SELECT distinct Ac.item_id
					, branch_id
					, Cost
					FROM tblActualInventory Ac 
					WHERE CONVERT(VARCHAR, Ac.Date, 112) = CONVERT(VARCHAR, @BeginDate, 112)
					--where convert(VARCHAR,Ac.Date,112) = convert(VARCHAR,@previewdate,112)
					AND (item_id = @itemid OR @itemid = 0)
					AND branch_id = @NewBranchLoopID
				   )C
				WHERE Ti.item_id = C.item_id
				AND Ti.branch_id = C.branch_id

				--//Calculate Cost Average
				UPDATE #TmpNewItemList
				SET CostAverage_samllest = C.CostAverage_samllest
				FROM #TmpNewItemList TI
				, ( SELECT item_id
					, branch_id
					, CostAverage_samllest = SUM(((ISNULL(BeginingInvCost, 0) / ISNULL(QtyConvert_UnitTo_Smallest, 1)) * ISNULL(BeginingInvQty_Smallest , 0))  + ISNULL(PurchaseTotalCost, 0) + ISNULL(TransferInTotalCost, 0))
											 /
											 CASE WHEN ISNULL(SUM(ISNULL(BeginingInvQty_Smallest , 0) + ISNULL(PurchaseQty_Smallest, 0) +  ISNULL(TransferInQty_Smallest , 0)), 1) = 0 THEN 1
												  ELSE ISNULL(SUM(ISNULL(BeginingInvQty_Smallest , 0) + ISNULL(PurchaseQty_Smallest, 0) +  ISNULL(TransferInQty_Smallest , 0)), 1)
												  END
					FROM #TmpNewItemList
					WHERE (item_id = @itemid OR @itemid = 0) 
					AND branch_id = @NewBranchLoopID
					GROUP BY branch_id, item_id
				   )C
				WHERE TI.item_id = C.item_id
				AND TI.branch_id = C.branch_id

				UPDATE #TmpNewItemList
				SET CostAverage = CostAverage_samllest * QtyConvert_UnitTo_Smallest
				WHERE branch_id = @NewBranchLoopID
			END
		SELECT @OldBranchLoopID = @NewBranchLoopID
		END --End of Branch condition
		ELSE BEGIN BREAK; END
	END --End of Loop branch

--//EndRegion Calculate Cost
--//###########################
----------------------------------


SELECT distinct TI.item_id 
, item = TI.item_name
, Unit_cost = ISNULL(TI.CostAverage, 0) * 1.0
, unit = TI.Unit	--Convert unit name
, TI.reorder_qty
, expected_close = ISNULL(TI.ExspectedQty, 0) * 1.0
, opening_stock = ISNULL(TI.BeginingInvQty, 0) * 1.0
, purchase = ISNULL(TI.PurchaseQty, 0) * 1.0
, tranfer_in = ISNULL(TI.TransferInQty, 0) * 1.0
, adjust_plus = ISNULL(TI.AdjustPlusQty, 0) * 1.0
, RecieveQTY=ISNULL(TI.ReceiveQty,0)
, ChangeItemInQty=ISNULL(TI.ChangeItemInQty,0)
, ReturnInQty = ISNULL(TI.ReturnInQty, 0)

, sale_qty = ISNULL(TI.SellQty, 0) * 1.0
, void_qty = ISNULL(TI.VoidSellQty, 0) * 1.0
, tranfer_out = ISNULL(TI.TransferOutQty, 0) * 1.0 
, adjust_minus = ISNULL(TI.AdjustMinusQty, 0) * 1.0
, ChangeItemOutQty=ISNULL(TI.ChangeItemOutQty,0)
, ReturnToVendor=ISNULL(TI.ReturnQty,0)
, LostQty=ISNULL(TI.LostQty,0)
, DamageQty=ISNULL(TI.DamageQty,0) + ISNULL(TI.ChangeItemDamageQty,0)
, RequestOutQty = ISNULL(TI.RequestOutQty, 0)

, comp_qty = 0.0
, waste_qty = 0.0
, actual_usage = 0.0
, actual_close = ISNULL(TI.ActualInvQty, 0) * 1.0
, end_margin = ISNULL(TI.EndMarginQty, 0) * 1.0
, last_inventory_entry = TI.LastEntryDate
, company_name = ''
, TI.branch_name
, TI.branch_id
, Address = ''
, price = ISNULL(TI.CostAverage, 0) * ISNULL(TI.ExspectedQty, 0) * 1.0
, TI.item_code
, No = 0
, TI.item_category_id
, inv_qty = 0.0
, convert_qty = 0.0
, inv_unit_name = ''
, convert_unit_name = ''
FROM #TmpNewItemList TI
, tblItem I
, tblUnit U
WHERE TI.item_id = I.item_id
AND I.unit_id = U.unit_id
ORDER BY TI.item_name, TI.unit, TI.branch_name

DROP TABLE #tblTemp
DROP TABLE #tblTmp1
DROP TABLE #tblTmp2
DROP TABLE #TmpNewItemList

IF OBJECT_ID ('tempdb.#tblTemp') IS NOT NULL DROP Table #tblTemp
IF OBJECT_ID ('tempdb.#tblTmp1') IS NOT NULL DROP Table #tblTmp1
IF OBJECT_ID ('tempdb.#tblTmp2')IS NOT NULL DROP TABLE #tblTmp2
IF OBJECT_ID ('tempdb.#tblTmp2')IS NOT NULL DROP TABLE #TmpNewItemList



select * from #TmpNewItemList

DROP TABLE #tblTemp
DROP TABLE #TmpNewItemList
DROP TABLE #tblTmp1
DROP TABLE #tblTmp2