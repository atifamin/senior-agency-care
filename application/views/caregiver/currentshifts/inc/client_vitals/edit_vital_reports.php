<?php //print_array($result);?>
<script src="http://localhost/senior-agency-care/assets/js/plugins/forms/styling/uniform.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_checkboxes_radios.js"></script>
<form id="update_vital_report_form" method="post">
  <input type="hidden" name="report_id" value="<?php echo $result->id; ?>">
  <div class="modal-header">
    <h5 class="modal-title" style="margin: 0 auto;">Edit Client Vitals</h5>
    <div>
      <li class="media" style="padding: unset; border: none;">
        <div class="mr-3" style="margin-right: .55rem!important;"> <a href="#"> <img src="<?php echo client_image($client->id); ?>" class="rounded-circle" width="40" height="40"> </a> 
        </div>
        <div class="media-body">
          <div class="media-title font-weight-semibold" style="font-size: 12px; margin-bottom: 0px !important;"><?php echo $client->first_name." ".$client->last_name; ?></div>
          <span class="text-muted" style="font-size: 12px;">Client</span> </div>
      </li>
    </div>
  </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="form-group">
          <label>Add date and time vitals were taken: </label>
          <div class="input-group"> <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-alarm"></i></span> </span>
            <input type="text" name="from_date" id="anytime_change_edit_caregiver_<?php echo $result->id; ?>" value="<?php echo date("F jS H:s", strtotime($result->from_date));?>" class="form-control" placeholder="Enter date and time">
          </div>
        </div>
      </div>
    </div>
    <div class="row" style="margin-top: 50px;">
      <div class="col-md-3">
        <div class="form-group pt-2">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" name="is_bloodpressure" value="<?php echo $result->is_bloodpressure; ?>" <?php if(!empty($result->is_bloodpressure) && $result->is_bloodpressure == 1){echo 'checked="checked"';} ?> class="form-check-input-styled" data-fouc>
              Blood Pressure </label>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <input class="form-control" name="bloodpressure_from" type="number" value="<?php echo $result->bloodpressure_from; ?>" style="position: relative; bottom: 16px;">
      </div>
      <div class="col-md-2" style="text-align: center;">
        <label style="position: relative; top: 9px;">Over</label>
      </div>
      <div class="col-md-3">
        <input class="form-control" name="bloodpressure_to" type="number" value="<?php echo $result->bloodpressure_to; ?>" style="position: relative; bottom: 16px;">
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="form-group pt-2">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" name="is_breathing" value="<?php echo $result->is_breathing; ?>" <?php if(!empty($result->is_breathing) && $result->is_breathing == 1){echo 'checked="checked"';} ?> class="form-check-input-styled" data-fouc>
              Breathing </label>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <input class="form-control" type="number" name="breathing_from" value="<?php echo $result->breathing_from; ?>" style="position: relative; bottom: 16px;">
      </div>
      <div class="col-md-2" style="text-align: center;">
        <label style="position: relative; top: 9px;">To</label>
      </div>
      <div class="col-md-3">
        <input class="form-control" type="number" name="breathing_to" value="<?php echo $result->breathing_to; ?>" style="position: relative; bottom: 16px;">
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="form-group pt-2">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" name="is_pulse" value="<?php echo $result->is_pulse; ?>" <?php if(!empty($result->is_pulse) && $result->is_pulse == 1){echo 'checked="checked"';} ?> class="form-check-input-styled" data-fouc>
              Pulse </label>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <input class="form-control" type="number" name="pulse_from" value="<?php echo $result->pulse_from; ?>" style="position: relative; bottom: 16px;">
      </div>
      <div class="col-md-2" style="text-align: center;">
        <label style="position: relative; top: 9px;">To</label>
      </div>
      <div class="col-md-3">
        <input class="form-control" type="number" name="pulse_to" value="<?php echo $result->pulse_to; ?>" style="position: relative; bottom: 16px;">
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="form-group pt-2">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" name="is_temprature" <?php if(!empty($result->is_temprature) && $result->is_temprature == 1){echo 'checked="checked"';} ?> class="form-check-input-styled edit_form_checkbox" data-fouc>
              Temperature </label>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <input class="form-control" type="number" name="temperature" value="<?php echo $result->temperature; ?>" style="position: relative; bottom: 16px;">
      </div>
      <div class="col-md-2">
        <label style="position: relative; top: 9px;">Farenheight</label>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in" data-spinner-size="20"> <span class="ladda-label">Done</span> </button>
  </div>
</form>

  <script src="<?php echo base_url(); ?>assets/js/plugins/ui/moment/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/plugins/pickers/daterangepicker.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/plugins/pickers/anytime.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.date.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.time.js"></script>

<script type="text/javascript">

  $(".form-check-input-styled").uniform();

  $('#anytime_change_edit_caregiver_<?php echo $result->id; ?>').AnyTime_picker({
    format: '%M %D %H:%i',
  });


  $('#update_vital_report_form').on("submit",function(e){
    e.preventDefault();
    //loader = CardLoader($("#update_vital_report_form"));
    var formData = new FormData($(this)[0]);
    $.ajax({
      url:'<?php echo site_url('agency/scheduling/update_vital_reports'); ?>',
      type:'post',
      data:formData,
      cache: false,
      contentType: false,
      processData: false,
      success:function(e){
          // console.log(e);
          // return false;
        $("#vital_reports_list_view").html(e);
        var form = document.getElementById("update_vital_report_form");
        form.reset();
        $("#edit_vital_reports_modal").modal("hide");
        swal({
          title: "Good job!",
          type: 'success',
          html: 'You have updated dietry needs successfully',
          allowOutsideClick: false,
        }).then(function() {
          location.reload();
        });
        loader.unblock();
      }
    });
  });

</script>