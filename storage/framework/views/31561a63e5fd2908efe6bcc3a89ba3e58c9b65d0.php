<?php $__env->startSection('content'); ?>

      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>Kabar Berita</strong>
        </div>
        <div class="panel-body">
          <form class="" action="newposting_action" method="post">
            <?php echo e(csrf_field()); ?>

            <label>Kiriman Baru</label>
            <textarea class="form-control" name="description" rows="5"></textarea>

            <input type="submit" class="btn btn-primary btn-sm" value="Kirim">
          </form><hr style="border:1px solid #dadada;">

          <a style="text-decoration: none;font-size:22px;" href="#">Nama</a>
          <p class="textn">
            Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.
          </p>
          <a style="text-decoration: none;" href="#">Sukai <span class="badge">0</span></a> | <a style="text-decoration: none;" href="#">Bagikan</a>
          <hr style="border:1px solid #dadada;">
        </div>
      </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>