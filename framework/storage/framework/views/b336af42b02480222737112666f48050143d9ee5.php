<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo e(ayoubgr::get('app_name')); ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <!-- Bootstrap 3.3.7 -->
 <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/cdn/bootstrap.min.css')); ?>" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/cdn/font-awesome.min.css')); ?>">
  <!-- Ionicons -->
  <link href="<?php echo e(asset('assets/css/cdn/ionicons.min.css')); ?>" rel="stylesheet">
  <!-- Theme style -->
   <link href="<?php echo e(asset('assets/css/AdminLTE.min.css')); ?>" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/cdn/fonts.css')); ?>">
  <style type="text/css">
    body {
      height: auto;
    }
    @media  print{@page  {size: landscape}}
  </style>
</head>
<body onload="window.print();">
<?php ($date_format_setting=(ayoubgr::get('date_format'))?ayoubgr::get('date_format'):'d-m-Y'); ?>

  <div class="wrapper">
  <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
          <span class="logo-lg">
          <img src="<?php echo e(asset('assets/images/'. ayoubgr::get('icon_img') )); ?>" class="navbar-brand" style="margin-top: -15px">
          <?php echo e(ayoubgr::get('app_name')); ?>

          </span>

            <small class="pull-right"> <b><?php echo app('translator')->get('fleet.date'); ?> : </b> <?php echo e(date($date_format_setting)); ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <h3><?php echo app('translator')->get('fleet.expense'); ?> <?php echo app('translator')->get('fleet.report'); ?>&nbsp;<small><?php echo e(date('F', mktime(0, 0, 0, $month_select, 10))); ?>-<?php echo e($year_select); ?></small></h3>

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table table-responsive table-bordered" id="data_table" style="padding-bottom: 35px">
              <thead>
                <tr>
                  <th><?php echo app('translator')->get('fleet.make'); ?></th>
                  <th><?php echo app('translator')->get('fleet.model'); ?></th>
                  <th><?php echo app('translator')->get('fleet.licensePlate'); ?></th>
                  <th><?php echo app('translator')->get('fleet.expenseType'); ?></th>
                  <th><?php echo app('translator')->get('fleet.date'); ?></th>
                  <th><?php echo app('translator')->get('fleet.amount'); ?></th>
                  <th><?php echo app('translator')->get('fleet.note'); ?></th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $expense; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($row->vehicle->maker->make); ?></td>
                  <td><?php echo e($row->vehicle->vehiclemodel->model); ?></td>
                  <td><?php echo e($row->vehicle->license_plate); ?></td>
                  <td>
                    <?php if($row->type == "s"): ?>
                    <?php echo e($row->service->description); ?>

                    <?php else: ?>
                    <?php echo e($row->category->name); ?>

                    <?php endif; ?>
                  </td>
                  <td><?php echo e(date($date_format_setting,strtotime($row->date))); ?></td>
                  <td>
                    <?php echo e(ayoubgr::get('currency')); ?>

                    <?php echo e($row->amount); ?></td>
                  <td><?php echo e($row->comment); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>
<!-- ./wrapper -->
</body>
</html><?php /**PATH C:\xampp\htdocs\Flet\framework\resources\views/reports/print_expense.blade.php ENDPATH**/ ?>