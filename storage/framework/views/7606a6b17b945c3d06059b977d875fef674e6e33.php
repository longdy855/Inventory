<!DOCTYPE html>
<html>
<head>
	<title>Inventory On Hand</title>
</head>
<body>

	<div class="logo">
		<!-- <img width="150px" src="<?php echo e(url('images/logo.png')); ?>"> -->
	</div>
	<div style="font-size: 14px;line-height: 20px;">
		Due Date: <?php echo e(date('Y-m-d')); ?><br/>

		From Date: <?php echo e($_REQUEST['from_date']); ?><br/>

		To Date: <?php echo e($_REQUEST['to_date']); ?> <br/>

		Branch: <?php echo e($Branch); ?>

	</div>
	<div><center><h2>Transered Item</h2></center></div>
	<table id="example1" class="table table-bordered table-striped dataTable">
		<thead>
			<tr>
			<td><?php echo trans('report/transfer_item.entry_no'); ?></td>
			<td><?php echo trans('report/transfer_item.entry_transfer_no'); ?></td>
			<td><?php echo trans('report/transfer_item.entry_from_branch'); ?></td>
			<th><?php echo trans('report/transfer_item.entry_to_branch'); ?></th>
			<th><?php echo trans('report/transfer_item.entry_name'); ?></th>
			<th><?php echo trans('report/transfer_item.entry_unit'); ?></th>
			<th><?php echo trans('report/transfer_item.entry_qty'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1;?>
			<?php foreach($transferItems as $row): ?>
			<tr>
				<td><?php echo e($i); ?></td>
				<td><?php echo e($row->transfer_no); ?></td>
				<td><?php echo e($row->from_branch_name); ?></td>
				<td><?php echo e($row->to_branch_name); ?></td>
				<td><?php echo e($row->item_name); ?></td>
				<td><?php echo e($row->unit_name); ?></td>
				<td><?php echo e($row->transfer_qty); ?></td>
			</tr>
			<?php $i++;?>
			<?php endforeach; ?>
		</tbody>
	</table>

	<style type="text/css">
	html body{font-family: arial;}


		table.table-bordered.dataTable {
    border-collapse: separate !important;
}	table.dataTable {
    clear: both;
    margin-top: 6px !important;
    margin-bottom: 6px !important;
    max-width: none !important;
}

table.table {
    font-size: 13px;
}
.table-bordered {
    border: 1px solid #ddd;
}
.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px;
}
table {
    background-color: transparent;
}
table {
    border-spacing: 0;
    border-collapse: collapse;
}

.table-striped > tbody > tr:nth-of-type(2n+1) {
    background-color: #f9f9f9;
}

table.table-bordered tbody th, table.table-bordered tbody td {
    border-left-width: 0;
    border-bottom-width: 0;
}
.table-bordered > tbody > tr > td, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > td, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > thead > tr > th {
    border: 1px solid #ddd;
        border-bottom-width: 1px;
        border-left-width: 1px;
}
.table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
}
	</style>

	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>