<?php $__env->startSection("breadcrumb"); ?>
<li class="breadcrumb-item"><?php echo e(link_to_route('vehicle-make.index', __('fleet.make'))); ?></li>
<li class="breadcrumb-item active"><?php echo app('translator')->get('fleet.edit_vehicle_make'); ?></li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title"><?php echo app('translator')->get('fleet.edit_vehicle_make'); ?></h3>
      </div>

      <div class="card-body">
        <?php if(count($errors) > 0): ?>
          <div class="alert alert-danger">
            <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>
        <?php endif; ?>

      <?php echo Form::open(['route' => ['vehicle-make.update',$vehicle_make->id],'method'=>'PATCH','files'=>true]); ?>

      <?php echo Form::hidden('id',$vehicle_make->id); ?>

      <?php echo Form::hidden('edit',1); ?>


      <div class="row">
        <div class="form-group col-md-6">
          <?php echo Form::label('make', __('fleet.make'), ['class' => 'form-label']); ?>

          <?php echo Form::text('make', $vehicle_make->make,['class' => 'form-control','required']); ?>

        </div>
        <div class="col-md-6">
          <div class="form-group">
            <?php echo Form::label('image', __('fleet.picture'), ['class' => 'form-label']); ?>

            <?php if($vehicle_make->image): ?> <a href="<?php echo e(url('uploads/'.$vehicle_make->image)); ?>" target="blank">View</a> <?php endif; ?>
            <br>
            <?php echo Form::file('image',null,['class' => 'form-control']); ?>

          </div>
        </div>
     </div>
      <div class="form-group">
        <?php echo Form::submit(__('fleet.update'), ['class' => 'btn btn-warning']); ?>

      </div>
      <?php echo Form::close(); ?>

      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Flet\framework\resources\views/vehicle_make/edit.blade.php ENDPATH**/ ?>