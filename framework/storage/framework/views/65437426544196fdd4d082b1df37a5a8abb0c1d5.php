<?php $__env->startSection("breadcrumb"); ?>
<li class="breadcrumb-item active"><?php echo app('translator')->get('fleet.reviews'); ?></li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">
          <?php echo app('translator')->get('fleet.reviews'); ?>
        </h3>
      </div>

      <div class="card-body table-responsive">
        <table class="table" id="data_table">
          <thead class="thead-inverse">
            <tr>
              <th><?php echo app('translator')->get('fleet.user'); ?></th>
              <th><?php echo app('translator')->get('fleet.booking_id'); ?></th>
              <th><?php echo app('translator')->get('fleet.ratings'); ?></th>
              <th><?php echo app('translator')->get('fleet.review'); ?></th>
            </tr>
          </thead>
          <tbody>
          <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($review->user->name); ?></td>
              <td><?php echo e($review->booking_id); ?></td>
              <td>
              <?php ($flot=ltrim(($review->ratings - floor($review->ratings)),"0.")); ?>
              <?php for($i=1;$i<=$review->ratings;$i++): ?>
              <i class="fa fa-star"></i>
              <?php endfor; ?>
              <?php if($flot>0 && $review->ratings<5): ?>
              <i class="fa fa-star-half"></i>
              <?php endif; ?>
              </td>
              <td><?php echo e($review->review_text); ?></td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Flet\framework\resources\views/reviews.blade.php ENDPATH**/ ?>