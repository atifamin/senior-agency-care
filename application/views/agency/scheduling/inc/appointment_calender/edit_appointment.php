<?php //print_array($result); ?>

<form id="update_client_appointment_form">
  <div class="modal-header">
    <input type="hidden" name="appointment_id" value="<?php echo $result->id; ?>">
    <h5 class="modal-title" style="margin: 5px auto;">Create a new appointment</h5>
    <div>
      <li class="media">
        <div class="mr-3" style="margin-right: .55rem!important;">
          <a href="#">
            <img src="<?php echo client_image($client->id); ?>" class="rounded-circle" width="40" height="40" alt="">
          </a>
        </div>
        <div class="media-body">
          <div class="media-title font-weight-semibold" style="font-size: 12px; margin-bottom: 0px !important;"><?php echo $client->first_name." ".$client->last_name; ?></div>
          <span class="text-muted" style="font-size: 12px;">Total Care</span>
        </div>
      </li>
    </div>
  </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="form-group">
          <label>Add appointment type</label>
          <select class="form-control select-icons edit_select_icons" name="appointment_type" id="therapy_type_edit" data-placeholder="Select the type of appointment" data-fouc>
            <option></option>
            <option <?php if (isset($result->appointment_type)) {if ($result->appointment_type == "Doctor's Appointment") {echo "selected='selected'";}} ?> value="Doctor's Appointment">Doctor's Appointment</option>
            <option <?php if (isset($result->appointment_type)) {if ($result->appointment_type == "Therapy Appointment") {echo "selected = 'selected'";}} ?> value="Therapy Appointment">Therapy Appointment</option>
          </select>
        </div>
      </div>
    </div>
    <?php if (isset($result->appointment_type) && $result->appointment_type == "Doctor's Appointment") { ?> 
    <div class="row" >
      <div class="col-md-8 offset-md-2">
        <div class="form-group">
          <input type="text" class="form-control" value="<?php echo $result->doctor_name; ?>" name="doctor_name" placeholder="Enter doctor's name">
        </div>
      </div>
    </div>
    <?php } ?>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="form-group">
          <label>Enter appointment date and time: </label>
          <div class="input-group"> <span class="input-group-prepend"><span class="input-group-text"><i class="icon-alarm"></i></span></span>
            <input type="text" name="from_date" value="<?php echo date("m/d/Y",strtotime($result->from_date))." - ".date("m/d/Y",strtotime($result->to_date)); ?>" class="form-control daterange-time edit_daterange" value="">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="form-group">
          <label>Enter appointment location: </label>
          <div class="form-group form-group-feedback form-group-feedback-left">
            <input type="text" name="location" value="<?php echo $result->location; ?>" class="form-control form-control-sm" placeholder="Add appointment location">
            <div class="form-control-feedback form-control-feedback-sm"> <i class="icon-pin-alt"></i> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="form-group pt-2">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" id="appointment_reminder_checkbox_edit" class="form-check-input-styled edit_form_check" checked="" data-fouc>
              Set reminder for caregiver </label>
          </div>
        </div>
      </div>
    </div>
    <div class="row" id="appointment_set_reminder_edit">
      <div class="col-md-12">
        
        <?php if (isset($result->appointment_type) && $result->appointment_type == "Doctor's Appointment") { ?>
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="input-group"> <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-alarm"></i></span> </span>
              <select class="form-control multiselect" name="doctor_reminder" data-fouc>
                <option value="">Select reminder</option>
                <?php foreach (CON_DOCTOR_APPOINTMENT_REMINDER as $dockey => $docvalue) { ?>

                <option value="<?php echo $dockey; ?>" <?php if($dockey == $result->doctor_reminder){echo "selected='selected'";} ?>><?php echo $docvalue; ?></option>

                <?php } ?>
              </select>
            </div>
          </div>
        </div>
        <?php } ?>
        
        <?php if (isset($result->appointment_type) && $result->appointment_type == "Therapy Appointment") { ?>
        <div class="row" >
          <div class="col-md-8 offset-md-2">
            <div class="input-group"> <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-alarm"></i></span> </span>
              <select class="form-control multiselect" name="theropy_reminder" data-fouc>
                <option value="">Select reminder</option>
                <?php foreach (CON_THEROPY_APPOINTMENT_REMINDER as $theropykey => $theropyvalue) { ?>

                <option value="<?php echo $theropykey; ?>" <?php if($theropykey == $result->theropy_reminder){echo "selected='selected'";} ?>><?php echo $theropyvalue; ?></option>

                <?php } ?>
              </select>
            </div>
          </div>
        </div>
        <?php } ?>

      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in" data-spinner-size="20"><span class="ladda-label">Done</span></button>
  </div>
</form>

<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/daterangepicker.js"></script>
<script type="text/javascript">

  $('#appointment_reminder_checkbox_edit').click(function(){
    if($(this).prop("checked") == true){
      $("#appointment_set_reminder_edit").css("display","block");
    }
    else if($(this).prop("checked") == false){
        $("#appointment_set_reminder_edit").css("display","none");
    }
});

  $('#update_client_appointment_form').on('submit',function(e){
    e.preventDefault();
    var formData = new FormData($(this)[0]);
    formData.append('client_id',<?php echo $client->id; ?>);
    $.ajax({
      url:'<?php echo site_url('agency/scheduling/update_appointment_calender'); ?>',
      type:'post',
      data:formData,
      cache: false,
      contentType: false,
      processData: false,
      success: function(data){
        console.log(data);
      }
    });
  });

  $('.edit_daterange').daterangepicker();
  $('.edit_select_icons').select2();
  $('.form-check-input-styled').uniform();
  $('.multiselect').multiselect();

</script>