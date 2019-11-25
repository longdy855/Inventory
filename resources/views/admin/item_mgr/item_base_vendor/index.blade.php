@extends('admin.common.layout') 
@section('content')
  <!-- header -->
  @include('admin.common.header')
  <!-- main-container -->
  <div class="main_container">
    <!-- col-md-3 -->
    <div class="col-md-3 left_col">
      @include('admin.item_mgr.item_base_vendor.sidebar')
    </div>
    <!-- top navigation -->
    <div class="top_nav">
      <div class="nav_menu">
        <nav class="" role="navigation">
          <div class="nav toggle" style="margin-bottom:10px;">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
        </nav>
      </div>
    </div><!-- /top navigation -->
    <!-- page content -->
    <!-- page content -->
      <div class="right_col" role="main">
        <!-- row -->
        <div class="row">
          <!-- col-sm-4 -->
          <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="row">
                <div class="x_title">
                  <h2><i class="fa fa-wa fa-list"></i> Item Listing</h2>
                  <div class="clearfix"></div>
                </div>
                <ul class="list-unstyled top_profiles scroll-view">
                  <?php $i=1;?>
                  @if(isset($items))
                  @foreach($items as $item)
                    <?php 
                      if($i%2==0){
                        $class="border-aero";
                      }else{
                        $class="border-green";
                      }
                    ?>
                    <li class="media event">
                      <div class="media-body">
                        <a class="title" href="#">{{$item->name}}</a>
                        <!-- <p><strong>Code. </strong> {{$item->item_code}} </p> -->
                        <p> <small>Code : {{$item->item_code}}</small></p>
                      </div>
                    </li>
                    <?php $i++;?>
                  @endforeach
                  @endif
                </ul>
              </div>
            </div>
          </div>

          <!-- col-md-8 col-xs-8 -->
          <div class="col-md-9 col-xs-9">
            <div class="x_panel">
              <div class="x_title">
                <h2><i class="fa fa-list"></i> History Price of Items</h2>
                <div class="clearfix"></div>
              </div>
              <div class="bg-title"><i class="fa fa-wa fa-info-circle"></i> Item Information</div>
              <form class="form-horizontal">
                <div class="form-group">
                  <div class="col-sm-6">
                    <label for="middle-name" class="control-label col-md-4 col-sm-4 col-xs-12">Item Code <span class="validate_label_red">*</span></label>
                    <div class="col-md-7 col-sm-7 col-xs-12 ">
                      <input class="form-control" placeholder="Item Code" name="item_code" type="text">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label class="col-sm-5 control-label">Item Name</label>
                    <div class="col-sm-7"><input type="text" class="form-control" placeholder="Item Name" name=""></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="form-group">
                  <div class="col-sm-6">
                    <label class="control-label col-sm-4">Vendor Code</label>
                    <div class="col-sm-7"><input placeholder="Vendor Code" class="form-control" type="text" placeholder="" name=""></div>
                  </div>
                  <div class="col-sm-6">
                    <label class="control-label col-sm-5">Vendor Name</label>
                    <div class="col-sm-7"><input placeholder="Vendor Name" class="form-control" type="text" placeholder="" name=""></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </form>
              <!-- </div> -->
                <div class="bg-title"><i class="fa fa-wa fa-info-circle"></i> Item Price</div>

                <form class="form-horizontal">
                  <div class="form-group">
                    <div class="col-sm-6">
                      <label class="control-label col-sm-4">Price</label>
                      <div class="col-sm-7"><input class="form-control" type="text" placeholder="Price" name=""></div>
                    </div>
                    <div class="col-sm-6">
                      <label class="control-label col-sm-5">Start Date</label>
                      <div class="col-sm-7"><input class="form-control" type="text" placeholder="Start Date" name=""></div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </form>
                
                <div class="bg-title">
                  <i class="fa fa-wa fa-info-circle"></i> History Exchange Rate
                  <div class="pull-right">
                    <button class="btn btn-xs btn-success"><i class="fa fa-wa fa-save"></i> Save</button>
                    <button class="btn btn-xs btn-primary"><i class="fa fa-wa fa-plus"></i> New</button>
                    <button class="btn btn-xs btn-danger"><i class="fa fa-wa fa-trash"></i> Delete</button>
                  </div>
                </div>

                <table id="example1" class="table table-bordered table-striped dataTable">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Category</th>
                      <th>Code</th>
                      <th>Item</th>
                    </tr>
                  </thead>

                  <tbody>
                    {{-- @foreach($ItemBaseStores as $ItemBaseStore)
                      <tr class="even pointer">
                        <td><input type="checkbox" value="{{$ItemBaseStore->ib_id}}" class="flat" name=""></td>
                        <td>{{$ItemBaseStore->item_name}}</td>
                        <td>{{$ItemBaseStore->branch_name}}</td>
                        <td>{{$ItemBaseStore->net_price}}</td>
                      </tr>
                    @endforeach --}}
                  </tbody>

                </table>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <!-- footer content -->
        @include('admin.common.footer')
        <!-- /footer content -->
      </div>
    <!-- /page content -->
  </div>

  <script type="text/javascript">
    // autocompleteGetItem
    function autocompleteGetItem(attribute_row) {
      $('input[name=\'item_attribute[' + attribute_row + '][item_id]\']').autocomplete({
        'source': function(request, response) {
          $.ajax({
            url: '{{url('')}}/admin/getItem?filter_name='+request,
            dataType: 'json',
            success: function(json) {
              response($.map(json, function(item) {
                return {
                  label: item.name,
                  value: item.id
                }
              }));
            }
          });
        },
        'select': function(item) {
          $('input[name=\'item_attribute[' + attribute_row + '][item_id]\']').val(item['label']);
          $('input[name=\'item_attribute_hidden[' + attribute_row + '][item_id]\']').val(item['value']);
        }
      });
    }
  </script>

@endsection