 
<?php $__env->startSection('content'); ?>
  <!-- header -->
  <?php echo $__env->make('admin.common.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <form novalidate="" action="#" id="demo-form2" data-parsley-validate="" class="">
    
    <!-- main-container -->
    <div class="main_container">
      <!-- col-md-3 -->
      <div class="col-md-3 left_col">
       <?php echo $__env->make('admin.common.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
      <div style="min-height: 650px;" class="right_col" role="main">
        <div class="row">
          <div class="clearfix"></div>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <?php echo $__env->make('admin.common.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="x_panel">
              <div class="x_title">
                <div class="row">
                  <h2><i class="fa fa-wa fa-flag"></i> <?php echo trans('setup_mgr/item_status.entry_title'); ?></h2>
                  <div class="row">
                    <span class="pull-right">
                      <a data-original-title="<?php echo trans('common.create'); ?>"  data-toggle="tooltip" data-placement="top" href='<?php echo e(url('admin/setup_mgr/item_status/create')); ?>' class="btn btn-primary" name="submit"><i class="fa fa-wa fa-plus"></i> <span class="hidden-xs"><?php echo trans('common.create'); ?></span></a>
                    </span>
                  </div>
                  <!-- include('admin.common.tool_box') -->
                  <div class="clearfix"></div>
                </div>
              </div>

              <!-- row -->
              <div class="row">
                <!-- x_content -->
                <div class="x_content">
                  <table id="example1" class="table table-bordered table-striped dataTable">
                    <thead>
                      <tr>
                        <th><?php echo trans('setup_mgr/item_status.no'); ?></th>
                        <th><?php echo trans('setup_mgr/item_status.item_status'); ?></th>
                        <th><?php echo trans('setup_mgr/item_status.status'); ?></th>
                        <th><?php echo trans('common.action'); ?></th>
                      </tr>
                    </thead>
                    <tbody>
                    
                    <?php $i = 1;?>
                      <?php foreach($item_status as $item_status): ?>
                        <tr>
                          <td><?php echo($i); ?></td>
                          <td><?php echo e($item_status->name); ?></td>
                          <td>
                            <?php if($item_status->is_active==1): ?>
                              <span class="label label-success"><?php echo trans('setup_mgr/item_status.active'); ?></span>
                            <?php else: ?>
                              <span class="label label-danger"><?php echo trans('setup_mgr/item_status.inactive'); ?></span>
                            <?php endif; ?>
                          </td>
                          <td>
                            <center>
                              <a href="<?php echo e(route('admin.setup_mgr.item_status.show',$item_status->id)); ?>" class="btn btn-xs btn-info" data-original-title="<?php echo trans('setup_mgr/item_status.show'); ?>"  data-toggle="tooltip" data-placement="top"><i class="fa fa-info"></i></a>                         
                              <a href="<?php echo e(route('admin.setup_mgr.item_status.edit',$item_status->id)); ?>" class="btn btn-xs btn-primary" data-original-title="<?php echo trans('setup_mgr/item_status.edit'); ?>" data-toggle="tooltip" data-placement="top"><i class="fa fa-pencil"></i></a>
                              <a href="<?php echo e(route('admin.setup_mgr.item_status.destroy',$item_status->id)); ?>" class="btn btn-xs btn-danger" title="<?php echo trans('setup_mgr/item_status.delete'); ?>" data-method="delete" data-confirm="<?php echo trans('setup_mgr/item_status.are_you_sure'); ?>" data-original-title="<?php echo trans('setup_mgr/item_status.delete'); ?>"  data-toggle="tooltip" data-placement="top"><i class="fa fa-trash"></i></a>
                            </center>
                          </td>
                          
                        </tr>
                        
                       <?php $i++; ?>

                     <?php endforeach; ?>
                    
                    </tbody>
                    
                  </table>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- footer content -->
        <?php echo $__env->make('admin.common.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- /footer content -->
      </div>
      <!-- /page content -->
    </div>

  </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.common.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>