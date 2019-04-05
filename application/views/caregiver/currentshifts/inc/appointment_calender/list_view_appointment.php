<?php
$appointment_detail = $this->common_model->listingResultWhere('client_id',$detail->client_id,"client_appointment_calender");
//print_array($appointment_detail);
?>

<table class="table datatable-basic" id="appointment-datatable_caregiver_<?php echo $detail->id; ?>">
  <thead>
    <tr>
        <th>Appointment Type</th>
        <th>Appointment Date</th>
        <th>Time</th>
        <th>Location</th>
        <th>Reminder</th>
        <th class="text-center">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php if (count($appointment_detail)) {
      foreach ($appointment_detail as $value) { ?>
    <tr id="appointment_row_<?php echo $value->id; ?>">
      <td><?php echo $value->appointment_type; ?><br><span class="text-muted"><?php echo $value->doctor_name; ?></span>
      </td>
      <td>
          <span class="text-muted"><?php echo date("d-M-Y",strtotime($value->appointment_date));  ?></span>
      </td>
      <td><span class="text-muted"><?php echo date("H:i:s",strtotime($value->appointment_date));  ?></span></td>
      <td><span class="text-muted"><i class="icon-location3"></i> <?php echo $value->location; ?></span>
      </td>
      <?php if (isset($value->doctor_reminder) && !empty($value->doctor_reminder)) { ?>
        <td><span class="text-muted"><?php foreach (CON_DOCTOR_APPOINTMENT_REMINDER as $dockey => $docvalue) {if($dockey == $value->doctor_reminder){echo $docvalue;}} ?></span></td>
      <?php } ?>
      <?php if (isset($value->theropy_reminder) && !empty($value->theropy_reminder)) { ?>
        <td><span class="text-muted"><?php foreach (CON_THEROPY_APPOINTMENT_REMINDER as $thkey => $thvalue) {if($thkey == $value->theropy_reminder){echo $thvalue;}} ?></span></td>
      <?php } ?>
      <?php if (empty($value->doctor_reminder) && empty($value->theropy_reminder)) { ?>
        <td><span class="text-muted"></span></td>
      <?php  } ?>
      <td class="text-center">
        <div class="list-icons">
          <div class="dropdown">
              <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu9"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a href="javascript:;" class="dropdown-item" onclick="edit_appointment(<?php echo $value->id; ?>)"><i class="icon-square-right"></i> Edit Appointment</a>
                  <a href="javascript:;" class="dropdown-item" onclick="delete_appointment(<?php echo $value->id; ?>)"><i class="icon-bin2"></i> Delete Appointment</a>
                  <a href="#" class="dropdown-item"><i class="icon-square-down"></i>End Appointment</a>
              </div>
          </div>
        </div>
      </td>
    </tr>
  <?php }
    } ?>
  </tbody>
</table>

<script src="<?php echo base_url(); ?>assets/js/plugins/tables/datatables/datatables.min.js"></script> 
<script>
    $('.input_switch_edit').uniform();

$("#appointment-datatable_caregiver_<?php echo $detail->id; ?>").DataTable({
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