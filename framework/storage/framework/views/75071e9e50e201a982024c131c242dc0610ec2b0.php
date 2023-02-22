<?php $__env->startSection("breadcrumb"); ?>
<li class="breadcrumb-item"><?php echo e(link_to_route('vehicle-model.index', __('fleet.vehicle_models'))); ?></li>
<li class="breadcrumb-item active"><?php echo app('translator')->get('fleet.edit_vehicle_model'); ?></li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title"><?php echo app('translator')->get('fleet.edit_vehicle_model'); ?></h3>
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

      <?php echo Form::open(['route' => ['vehicle-model.update',$vehicle_model->id],'method'=>'PATCH']); ?>

      <?php echo Form::hidden('id',$vehicle_model->id); ?>

     
      <div class="row">
        <div class="form-group col-md-6">
          <?php echo Form::label('make_id',__('fleet.SelectVehicleMake'), ['class' => 'form-label']); ?>

          <select id="make_id" name="make_id" class="form-control" required>
            <option value=""><?php echo app('translator')->get('fleet.SelectVehicleMake'); ?></option>
            <?php $__currentLoopData = $vehicle_makes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle_make): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($vehicle_make->id); ?>" <?php if($vehicle_make->id == $vehicle_model->make_id): ?> selected <?php endif; ?>><?php echo e($vehicle_make->make); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div>
        <div class="form-group col-md-6">
          <?php echo Form::label('model', __('fleet.model'), ['class' => 'form-label']); ?>

          <?php echo Form::text('model', $vehicle_model->model,['class' => 'form-control','required']); ?>

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

<?php $__env->startSection("script"); ?>
<script type="text/javascript">
  $('#make_id').select2({placeholder: "<?php echo app('translator')->get('fleet.SelectVehicleMake'); ?>"});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Flet\framework\resources\views/vehicle_model/edit.blade.php ENDPATH**/ ?>