<?php //print_array($vital_report_details); ?>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_checkboxes_radios.js"></script>
<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-12" style="text-align: center;"> <a href="javascript:;" data-toggle="modal" data-target="#modal_clients_vital">Add new client vitals
        <button style="background-color: #f5f5f5; margin-left: 15px;" type="button" class="btn alpha-primary text-primary-800 btn-icon rounded-round ml-2 legitRipple"><i style="color: #555;" class="icon-plus3"></i></button>
        </a> </div>
    </div>
    <div class="row">
      <div class="col-md-12" id="vital_reports_list_view">
        <?php include(APPPATH."views/agency/scheduling/inc/vital_reports/list_view.php"); ?>
      </div>
    </div>
  </div>
</div>
<div id="modal_clients_vital" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="add_vital_report_form" method="post">
        <div class="modal-header">
          <h5 class="modal-title" style="margin: 0 auto;">Add Client Vitals</h5>
          <div>
            <li class="media">
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
                  <input type="text" name="from_date" class="form-control daterange-time" value="" placeholder="Enter date and time vitals were taken">
                </div>
              </div>
            </div>
          </div>
          <div class="row" style="margin-top: 50px;">
            <div class="col-md-3">
              <div class="form-group pt-2">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" name="is_bloodpressure" class="form-check-input-styled" data-fouc>
                    Blood Pressure </label>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <input class="form-control" name="bloodpressure_from" type="number" style="position: relative; bottom: 16px;">
            </div>
            <div class="col-md-2" style="text-align: center;">
              <label style="position: relative; top: 9px;">Over</label>
            </div>
            <div class="col-md-3">
              <input class="form-control" name="bloodpressure_to" type="number" style="position: relative; bottom: 16px;">
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
              <input class="form-control" type="number" name="breathing_from" style="position: relative; bottom: 16px;">
            </div>
            <div class="col-md-2" style="text-align: center;">
              <label style="position: relative; top: 9px;">To</label>
            </div>
            <div class="col-md-3">
              <input class="form-control" type="number" name="breathing_to" style="position: relative; bottom: 16px;">
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
              <input class="form-control" type="number" name="pulse_from" style="position: relative; bottom: 16px;">
            </div>
            <div class="col-md-2" style="text-align: center;">
              <label style="position: relative; top: 9px;">To</label>
            </div>
            <div class="col-md-3">
              <input class="form-control" type="number" name="pulse_to" style="position: relative; bottom: 16px;">
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
              <input class="form-control" type="number" name="temperature" style="position: relative; bottom: 16px;">
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
    </div>
  </div>
</div>

<div id="edit_vital_reports_modal" class="modal fade" tabindex="-2">
  <div class="modal-dialog">
    <div class="modal-content" id="edit_vital_reports_div">
      
    </div>
  </div>
</div>

<script type="text/javascript">

  $("#add_vital_report_form").on("submit", function(e){
    //loader = CardLoader($("#modal_add_medication"));
    e.preventDefault();
    var formData = new FormData($(this)[0]);
    formData.append("client_id", <?php echo $client_id; ?>);
    $.ajax({
      url: '<?php echo site_url("agency/scheduling/add_vital_report"); ?>',
      type: 'POST',
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      success: function(e){
        //loader.unblock();
        //console.log(e);
        $("#vital_reports_list_view").html(e);
        var form = document.getElementById("add_vital_report_form");
        form.reset();
        $("#modal_clients_vital").modal("hide");
        //setTimeout(function(){loader.unblock();}, 5000);
      }
        
    });
  });

  function edit_vital_reports(id){
    // alert(id);
    // return false;
    $.post("<?php echo site_url("agency/scheduling/edit_vital_reports"); ?>", {id:id}).done(function(data){
      $("#edit_vital_reports_div").html(data);
      $("#edit_vital_reports_modal").modal("show");
    });
  }

  function delete_vital_reports(id){
    // alert(id);
    // return false;
    $.post("<?php echo site_url("agency/scheduling/delete_vital_reports"); ?>", {id:id}).done(function(data){
      swal("Client Vital Reports","Reports deleted successfully!");
      $('#table_row_'+id+'').remove();
    });
  }

</script>
