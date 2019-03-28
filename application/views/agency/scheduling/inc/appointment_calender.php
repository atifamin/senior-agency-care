<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/daterangepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/picker_date.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_select2.js"></script>

<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-12" style="text-align: center;"> <a href="javascript:;" data-toggle="modal" data-target="#modal_add_new_appointment">Create new appointment
        <button style="background-color: #f5f5f5; margin-left: 15px;" type="button" class="btn alpha-primary text-primary-800 btn-icon rounded-round ml-2 legitRipple"><i style="color: #555;" class="icon-plus3"></i></button>
        </a> </div>
    </div>
    <div class="row">
      <div class="col-md-12" id="appointment_view">
        <?php include(APPPATH."views/agency/scheduling/inc/appointment_calender/list_view_appointment.php"); ?>
      </div>
    </div>
  </div>
</div>
<div id="modal_add_new_appointment" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="add_client_appointment_form">
        <div class="modal-header">
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
                <select class="form-control select-icons" name="appointment_type" id="therapy_type" onchange="setTherapyType()" data-placeholder="Select the type of appointment" data-fouc>
                  <option></option>
                  <option value="Doctor's Appointment">Doctor's Appointment</option>
                  <option value="Therapy Appointment">Therapy Appointment</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row" id="therapy_doc_name" style="display: none;">
            <div class="col-md-8 offset-md-2">
              <div class="form-group">
                <input type="text" class="form-control" name="doctor_name" placeholder="Enter doctor's name">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="form-group">
                <label>Enter appointment date and time: </label>
                <div class="input-group"> <span class="input-group-prepend"><span class="input-group-text"><i class="icon-alarm"></i></span></span>
                  <input type="text" name="from_date" class="form-control daterange-time" value="">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="form-group">
                <label>Enter appointment location: </label>
                <div class="form-group form-group-feedback form-group-feedback-left">
                  <input type="text" name="location" class="form-control form-control-sm" placeholder="Add appointment location">
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
                    <input type="checkbox" id="appointment_reminder_checkbox" class="form-check-input-styled" data-fouc>
                    Set reminder for caregiver </label>
                </div>
              </div>
            </div>
          </div>
          <div class="row" id="appointment_set_reminder" style="display: none;">
            <div class="col-md-12">
              <div class="row" id="appointment_set_reminder_doctor" style="display: none;">
                <div class="col-md-8 offset-md-2">
                  <div class="input-group"> <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-alarm"></i></span> </span>
                    <select class="form-control multiselect" name="doctor_reminder" data-fouc>
                      <option value="">Select reminder</option>
                      <option value="2.0 Hrs before appointment">2.0 Hrs before appointment</option>
                      <option value="2.5 Hrs before appointment">2.5 Hrs before appointment</option>
                      <option value="3.0 Hrs before appointment">3.0 Hrs before appointment</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row" id="appointment_set_reminder_therapy" style="display: none;">
                <div class="col-md-8 offset-md-2">
                  <div class="input-group"> <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-alarm"></i></span> </span>
                    <select class="form-control multiselect" name="theropy_reminder" data-fouc>
                      <option value="">Select reminder</option>
                      <option value="30 Minutes before appointment">30 Minutes before appointment</option>
                      <option value="1.0 Hrs before appointment">1.0 Hrs before appointment</option>
                      <option value="1.5 Hrs before appointment">1.5 Hrs before appointment</option>
                      <option value="2.0 Hrs before appointment">2.0 Hrs before appointment</option>
                      <option value="3.0 Hrs before appointment">3.0 Hrs before appointment</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in" data-spinner-size="20"><span class="ladda-label">Done</span></button>
        </div>
      </form>
    </div>
  </div>
</div>
<div id="modal_edit_appointment" class="modal fade" tabindex="-2">
  <div class="modal-dialog">
    <div class="modal-content" id="edit_appointment_div">
      
    </div>
  </div>
</div>

<script type="text/javascript">

$('#appointment_reminder_checkbox').click(function(){
    if($(this).prop("checked") == true){
      $("#appointment_set_reminder").css("display","block");
    }
    else if($(this).prop("checked") == false){
        $("#appointment_set_reminder").css("display","none");
    }
});

function setTherapyType(){
  var type = $("#therapy_type").val();
  if(type == "Doctor's Appointment"){
    $("#therapy_doc_name").css("display","block");
    $("#appointment_set_reminder_doctor").css("display","block");
    $("#appointment_set_reminder_therapy").css("display","none");
  }else if (type == "Therapy Appointment"){
    $("#therapy_doc_name").css("display","none");
    $("#appointment_set_reminder_therapy").css("display","block");
    $("#appointment_set_reminder_doctor").css("display","none");
  }
}

$('#add_client_appointment_form').on('submit',function(e){
  e.preventDefault();
  loader = CardLoader($("#add_client_appointment_form"));
  var formData = new FormData($(this)[0]);
  formData.append('client_id',<?php echo $client->id; ?>);
  $.ajax({
      url:'<?php echo site_url("agency/scheduling/add_appointment"); ?>',
      type:'post',
      data:formData,
      cache: false,
      contentType: false,
      processData: false,
      success: function(e){
        loader.unblock();
        $('#appointment_view').html(e);
        $('#modal_add_new_appointment').modal('hide');
      }
    });
});

function edit_appointment(id){
  $.post("<?php echo site_url('agency/scheduling/edit_appointment'); ?>",{id:id}).done(function(e){
    $('#edit_appointment_div').html(e);
    $('#modal_edit_appointment').modal('show');
  });
}

function delete_appointment(id){
  $.post("<?php echo site_url("agency/scheduling/delete_appointment"); ?>",{id:id}).done(
    function(e){
      $('#appointment_row_'+id+'').remove();
      swal("Appointment","Deleted Successfully");
  });
}
</script>
