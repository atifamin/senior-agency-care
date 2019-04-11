
<?php //print_array($appointment_detail); ?>

<table class="table datatable-basic" id="appointment-datatable-1">
  <thead>
    <tr>
      <th>Therapy Type</th>
      <th>Appointment Date</th>
      <th>Location</th>
      <th>Set Reminder</th>
      <th>Set to Monthly</th>
      <th class="text-center">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php if (count($appointment_detail)) {
      foreach ($appointment_detail as $detail) { ?>
      
    <tr id="appointment_row_<?php echo $detail->id; ?>">
      <td><?php echo $detail->appointment_type; ?><br>
        <span class="text-muted"><?php echo $detail->doctor_name; ?></span></td>
      <td><span class="text-muted"><?php echo date("d-M-Y",strtotime($detail->appointment_date));  ?></span></td>
      <td><span class="text-muted"><?php echo $detail->location; ?></span></td>
      
      <?php if (isset($detail->doctor_reminder) && !empty($detail->doctor_reminder)) { ?>
        <td><span class="text-muted"><?php foreach (CON_DOCTOR_APPOINTMENT_REMINDER as $dockey => $docvalue) {if($dockey == $detail->doctor_reminder){echo $docvalue;}} ?></span></td>
      <?php } ?>
      <?php if (isset($detail->theropy_reminder) && !empty($detail->theropy_reminder)) { ?>
        <td><span class="text-muted"><?php foreach (CON_THEROPY_APPOINTMENT_REMINDER as $thkey => $thvalue) {if($thkey == $detail->theropy_reminder){echo $thvalue;}} ?></span></td>
      <?php } ?>
      <?php if (empty($detail->doctor_reminder) && empty($detail->theropy_reminder)) { ?>
        <td><span class="text-muted"></span></td>
      <?php  } ?>
      <!-- <td><input type="checkbox" data-on-text="On" data-off-text="Off" class="form-check-input-switch input_switch_edit" checked="" data-size="small"></td> -->
      <td><input type="checkbox" class="form-check-input-switch" data-on-text="On" data-off-text="Off" data-size="small" ></td>
      <td class="text-center"><div class="list-icons">
          <div class="dropdown"> <a href="#" class="list-icons-item" data-toggle="dropdown"> <i class="icon-menu9"></i> </a>
            <div class="dropdown-menu dropdown-menu-right"> <a href="javascript:;" class="dropdown-item" onclick="edit_appointment(<?php echo $detail->id; ?>)"><i class="icon-square-right"></i> Edit Appointment</a> <a href="javascript:;" class="dropdown-item" onclick="delete_appointment(<?php echo $detail->id; ?>)"><i class="icon-bin2"></i> Delete Appointment</a> <a href="#" class="dropdown-item"><i class="icon-square-down"></i> End Appointment</a> </div>
          </div>
        </div></td>
    </tr>
    <?php 
      }
    } ?>
  </tbody>
</table>

<script src="<?php echo base_url(); ?>assets/js/plugins/tables/datatables/datatables.min.js"></script> 
<script>
    $('.form-check-input-switch').bootstrapSwitch();

$("#appointment-datatable-1").DataTable({
  autoWidth: false,
  columnDefs: [{ 
    orderable: false,
    width: 100,
    targets: [ 5 ]
  }],
  dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
  language: {
    search: '<span>Filter:</span> _INPUT_',
    searchPlaceholder: 'Type to filter...',
    lengthMenu: '<span>Show:</span> _MENU_',
    paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
  }
});


</script>