
<?php //print_array($appointment_detail); ?>

<table class="table datatable-basic" id="appointment_datatable_1">
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
      <td><span class="text-muted"><?php echo date("d-M-Y",strtotime($detail->from_date))." to ".date("d-M-Y",strtotime($detail->to_date));  ?></span></td>
      <td><span class="text-muted"><?php echo $detail->location; ?></span></td>
      
      <?php if (isset($detail->doctor_reminder) && !empty($detail->doctor_reminder)) { ?>
        <td><span class="text-muted"><?php echo $detail->doctor_reminder; ?></span></td>
      <?php } ?>
      <?php if (isset($detail->theropy_reminder) && !empty($detail->theropy_reminder)) { ?>
        <td><span class="text-muted"><?php echo $detail->theropy_reminder; ?></span></td>
      <?php } ?>
      <?php if (empty($detail->doctor_reminder) && empty($detail->theropy_reminder)) { ?>
        <td><span class="text-muted"></span></td>
      <?php  } ?>
      <td><input type="checkbox" data-on-text="On" data-off-text="Off" class="form-check-input-switch" data-size="small"></td>
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