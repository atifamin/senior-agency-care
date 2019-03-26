<?php //print_array($result);?>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_checkboxes_radios.js"></script>
<form id="update_vital_report_form" method="post">
  <input type="hidden" name="report_id" value="<?php echo $result->id; ?>">
  <div class="modal-header">
    <h5 class="modal-title" style="margin: 0 auto;">Add Client Vitals</h5>
    <div>
      <li class="media">
        <div class="mr-3" style="margin-right: .55rem!important;"> <a href="#"> <img src="http://localhost/senior-agency-care/assets/images/placeholders/avatar.png" class="rounded-circle" width="40" height="40"> </a> 
        </div>
        <div class="media-body">
          <div class="media-title font-weight-semibold" style="font-size: 12px; margin-bottom: 0px !important;"><?php echo "Adeel Ahmad" ?></div>
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
            <input type="text" name="" class="form-control daterange-time" value="<?php echo $result->from_date; ?>" placeholder="Enter date and time vitals were taken">
          </div>
        </div>
      </div>
    </div>
    <div class="row" style="margin-top: 50px;">
      <div class="col-md-3">
        <div class="form-group pt-2">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" name="is_bloodpressure" value="" class="form-check-input-styled" data-fouc>
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
              <input type="checkbox" name="is_breathing" class="form-check-input-styled" data-fouc>
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
              <input type="checkbox" name="is_pulse" class="form-check-input-styled" data-fouc>
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
              <input type="checkbox" class="form-check-input-styled" data-fouc>
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

<script type="text/javascript">


  $("#update_vital_report_form").on("submit", function(e){
    //e.preventDefault();
    var formData = new FormData($(this)[0]);
    $.ajax({
    url: '<?php echo site_url("agency/scheduling/update_vital_reports"); ?>',
    type: 'POST',
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function(e){
      // alert(e);
      // return false;
      $("#vital_reports_list_view").html(e);
      var form = document.getElementById("update_vital_report_form");
      form.reset();
      $("#edit_vital_reports_modal").modal("hide");
      //loader.unblock();
    }
      
  });

    // e.preventDefault();
    // var formData = new FormData($(this)[0]);
    // console.log(formData);
    // return false;
    // $.ajax({
    //   url: '<?php echo site_url("agency/scheduling/update_vital_reports"); ?>'
    //   type: 'POST',
    //   data: formData,
    //   chache: false,
    //   contentType: false,
    //   processData: false,
    //   success: function(e){
    //     alert(e);
    //     return false;
    //     $("#vital_reports_list_view").html(e);
    //     var form = document.getElementById("update_vital_report_form");
    //     form.reset();
    //     $("#edit_medication_modal").modal("hide");
    //     //loader.unblock(); 
    //   }

    // });
  });

</script>