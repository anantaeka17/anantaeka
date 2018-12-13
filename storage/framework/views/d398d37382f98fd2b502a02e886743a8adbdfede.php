<?php $__env->startSection('content'); ?>

  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>Add New Items</strong>
        </div>
        <div class="panel-body">
          <form method="post" action="<?php echo e(route('item')); ?>">
              <?php echo e(csrf_field()); ?>

              <div class="form-group">
                <label for="text">Items Name</label>
                <input type="text" id="item_name" name="item_name" class="form-control" placeholder="Item Name">
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>Items Table</strong>
        </div>
        <div class="panel-body">
            <table class="table">
              <tr>
                <td>No</td>
                <td>Werehouse Name</td>
                <td>Action</td>
              </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td>

                  </td>
                </tr>
            </table>
        </div>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>