<?php $__env->startSection('content'); ?>

  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>Update Werehouse</strong>
        </div>
        <div class="panel-body">
          <form method="post" action="<?php echo e(route('updatewerehouse', $werehouse->werehouse_id)); ?>">
              <?php echo e(csrf_field()); ?>

              <div class="form-group">
                <label for="text">Werehouse Name</label>
                <input type="text" id="werehouse_name" name="werehouse_name" value="<?php echo e($werehouse->werehouse_name); ?>" class="form-control" placeholder="Werehouse Name">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>

  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>