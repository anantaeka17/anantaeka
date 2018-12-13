<?php $__env->startSection('content'); ?>

  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>Add New Werehouse</strong>
        </div>
        <div class="panel-body">
          <form method="post" action="<?php echo e(route('werehouse')); ?>">
              <?php echo e(csrf_field()); ?>

              <div class="form-group">
                <label for="text">Werehouse Name</label>
                <input type="text" id="werehouse_name" name="werehouse_name" class="form-control" placeholder="Werehouse Name">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>Werehouse Table</strong>
        </div>
        <div class="panel-body">
            <table class="table">
              <tr>
                <td>No</td>
                <td>Werehouse Name</td>
                <td>Action</td>
              </tr>
              <?php $no = 0;?>
              <?php $__currentLoopData = $werehouse; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $werehouse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php $no++ ;?>
                <tr>
                  <td><?php echo e($no); ?></td>
                  <td><?php echo e($werehouse->werehouse_name); ?></td>
                  <td>

                    <form action="<?php echo e($werehouse->werehouse_id); ?>" method="post">
                      <a class="btn btn-primary btn-sm" href="werehouse_update/<?php echo e($werehouse->werehouse_id); ?>">Edit</a>
                      <?php echo e(csrf_field()); ?>

                      <input class="btn btn-danger btn-sm" type="submit" name="submit" value="Delete">
                      <input type="hidden" name="_method" value="delete">
                    </form>
                  </td>
                </tr>
            	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>