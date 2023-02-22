<table class="table" id="ajax_table">
  <thead class="thead-inverse">
    <tr>
      <th>
        <?php if($today->count() > 0): ?>
          <input type="checkbox" id="chk_all">
        <?php endif; ?>
      </th>
      <th><?php echo app('translator')->get('fleet.make'); ?></th>
      <th><?php echo app('translator')->get('fleet.model'); ?></th>
      <th><?php echo app('translator')->get('fleet.licensePlate'); ?></th>
      <th><?php echo app('translator')->get('fleet.incomeType'); ?></th>
      <th><?php echo app('translator')->get('fleet.date'); ?></th>
      <th><?php echo app('translator')->get('fleet.amount'); ?></th>
      <th><?php echo app('translator')->get('fleet.mileage'); ?> (<?php echo e(ayoubgr::get('dis_format')); ?>)</th>
      <th><?php echo app('translator')->get('fleet.delete'); ?></th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $today; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <tr>
      <td>
        <input type="checkbox" name="ids[]" value="<?php echo e($row->id); ?>" class="checkbox" id="chk<?php echo e($row->id); ?>" onclick='checkcheckbox();'>
      </td>
      <td><?php echo e($row->vehicle->maker->make); ?></td>
      <td><?php echo e($row->vehicle->vehiclemodel->model); ?></td>
      <td><?php echo e($row->vehicle->license_plate); ?></td>
      <td><?php echo e($row->category->name); ?></td>
      <td><?php echo e(date(ayoubgr::get('date_format'),strtotime($row->date))); ?></td>
      <td><?php echo e(ayoubgr::get('currency')); ?> <?php echo e($row->amount); ?></td>
      <td><?php echo e($row->mileage); ?></td>
      <td>
        <?php echo Form::open(['url' => 'admin/income/'.$row->id,'method'=>'DELETE','class'=>'form-horizontal','id'=>'form_'.$row->id]); ?>

          <?php echo Form::hidden("id",$row->id); ?>

        <button type="button" class="btn btn-danger delete" data-id="<?php echo e($row->id); ?>" title="<?php echo app('translator')->get('fleet.delete'); ?>"><span class="fa fa-times" aria-hidden="true"></span></button>
        <?php echo Form::close(); ?>

      </td>
    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
  <tfoot>
    <tr>
      <th>
        <?php if($today->count() > 0): ?>
          <button class="btn btn-danger" id="bulk_delete" data-toggle="modal" data-target="#bulkModal" disabled title="<?php echo app('translator')->get('fleet.delete'); ?>" ><i class="fa fa-trash"></i></button>
        <?php endif; ?>
      </th>
      <th><?php echo app('translator')->get('fleet.make'); ?></th>
      <th><?php echo app('translator')->get('fleet.model'); ?></th>
      <th><?php echo app('translator')->get('fleet.licensePlate'); ?></th>
      <th><?php echo app('translator')->get('fleet.incomeType'); ?></th>
      <th><?php echo app('translator')->get('fleet.date'); ?></th>
      <th><?php echo app('translator')->get('fleet.amount'); ?></th>
      <th><?php echo app('translator')->get('fleet.mileage'); ?> (<?php echo e(ayoubgr::get('dis_format')); ?>)</th>
      <th><?php echo app('translator')->get('fleet.delete'); ?></th>
    </tr>
  </tfoot>
</table>


<script type="text/javascript">
  $("#total_today").empty();
  $("#total_today").html("<?php echo e(ayoubgr::get('currency').' '. $total); ?>");
  $('#ajax_table tfoot th').each( function () {
    if($(this).index() != 0){
      var title = $(this).text();
      $(this).html( '<input type="text" placeholder="'+title+'" />' );
    }
  });

  var ajax_table = $('#ajax_table').DataTable({
    "language": {
        "url": '<?php echo e(asset("assets/datatables/")."/".__("fleet.datatable_lang")); ?>',
     },

    columnDefs: [ { orderable: false, targets: [0] } ],
     // individual column search
    "initComplete": function() {
        ajax_table.columns().every(function () {
          var that = this;
          $('input', this.footer()).on('keyup change', function () {
              that.search(this.value).draw();
          });
        });
      }
  });
    $('input[type="checkbox"]').on('click',function(){
    $('#bulk_delete').removeAttr('disabled');
  });

  $('#bulk_delete').on('click',function(){
    // console.log($( "input[name='ids[]']:checked" ).length);
    if($( "input[name='ids[]']:checked" ).length == 0){
      $('#bulk_delete').prop('type','button');
        new PNotify({
            title: 'Failed!',
            text: "<?php echo app('translator')->get('fleet.delete_error'); ?>",
            type: 'error'
          });
        $('#bulk_delete').attr('disabled',true);
    }
    if($("input[name='ids[]']:checked").length > 0){
      // var favorite = [];
      $.each($("input[name='ids[]']:checked"), function(){
          // favorite.push($(this).val());
          $("#bulk_hidden").append('<input type=hidden name=ids[] value='+$(this).val()+'>');
      });
      // console.log(favorite);
    }
  });


  $('#chk_all').on('click',function(){
    if(this.checked){
      $('.checkbox').each(function(){
        $('.checkbox').prop("checked",true);
      });
    }else{
      $('.checkbox').each(function(){
        $('.checkbox').prop("checked",false);
      });
    }
  });

  // Checkbox checked
  function checkcheckbox(){
    // Total checkboxes
    var length = $('.checkbox').length;
    // Total checked checkboxes
    var totalchecked = 0;
    $('.checkbox').each(function(){
        if($(this).is(':checked')){
            totalchecked+=1;
        }
    });
    // console.log(length+" "+totalchecked);
    // Checked unchecked checkbox
    if(totalchecked == length){
        $("#chk_all").prop('checked', true);
    }else{
        $('#chk_all').prop('checked', false);
    }
  }
</script><?php /**PATH C:\xampp\htdocs\Flet\framework\resources\views/income/ajax_income.blade.php ENDPATH**/ ?>