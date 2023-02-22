<?php $__env->startSection('extra_css'); ?>

<link rel="stylesheet" href="<?php echo e(asset('assets/colorpicker/la_color_picker.css')); ?>">
<style>
  .inp {
    border: 1px solid #949494;
    border-radius: 3px;
    padding: 10px;
    font-size: 110%;
  }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("breadcrumb"); ?>
<li class="breadcrumb-item"><?php echo e(link_to_route('vehicle-color.index', __('fleet.vehicle_colors'))); ?></li>
<li class="breadcrumb-item active"><?php echo app('translator')->get('fleet.add_vehicle_color'); ?></li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title"><?php echo app('translator')->get('fleet.add_vehicle_color'); ?></h3>
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

        <?php echo Form::open(['route' => 'vehicle-color.store','method'=>'post']); ?>

        <div class="row">
          <div class="form-group col-md-6">
            <?php echo Form::label('color', "Color Name", ['class' => 'form-label']); ?>

            <?php echo Form::text('color', null,['class' => 'form-control','required','id'=>'color1']); ?>

          </div>
        </div>
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="form-group col-md-4">
            <?php echo Form::submit(__('fleet.save'), ['class' => 'btn btn-success']); ?>

          </div>
        </div>
      </div>
      <?php echo Form::close(); ?>

    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/colorpicker/la_color_picker.js')); ?>"></script>
  
  <script>
    // $('.colorpicker').colorpicker({
    //   format: 'hex'
    // });
    // console.log($('.colorpicker').colorpicker());
    // $('#color1').on('change',function(){
      // alert($('#color1').val());
      // $('#color2').val($('#color1').val());
      // $('.colorpicker').colorpicker();
    // });
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Flet\framework\resources\views/vehicle_colors/create.blade.php ENDPATH**/ ?>