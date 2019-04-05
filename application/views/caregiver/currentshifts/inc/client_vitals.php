<?php //print_array($detail); ?>
<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-12" style="text-align: center;">
        <a href="javascript:;" data-toggle="modal" data-target="#modal_clients_vital_<?php echo $detail->id; ?>">Add new client vitals
            <button style="background-color: #f5f5f5; margin-left: 15px;" type="button" class="btn alpha-primary text-primary-800 btn-icon rounded-round ml-2 legitRipple"><i style="color: #555;" class="icon-plus3"></i>
            </button>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12" id="vital_reports_view_<?php echo $detail->id; ?>">
        <?php include (APPPATH."views/caregiver/currentshifts/inc/client_vitals/list_view.php"); ?>
      </div>
    </div>
  </div>
</div>

<!-- ==========Add Vitals Modal============= -->
<div id="modal_clients_vital_<?php echo $detail->id; ?>" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="add_vital_reports_form<?php echo $detail->id; ?>" method="post">
        <input type="hidden" name="client_id" value="<?php echo $detail->client_id; ?>">
        <input type="hidden" name="agency_id" value="<?php echo $detail->agency_id; ?>">
        <div class="modal-header">
          <h5 class="modal-title" style="margin: 0 auto;">Add Client Vitals</h5>
          <div>
            <li class="media">
              <div class="mr-3" style="margin-right: .55rem!important;"> <a href="#"> <img src="<?php echo base_url(); ?>assets/images/userimg/face5.jpg" class="rounded-circle" width="40" height="40" alt=""> </a> </div>
              <div class="media-body">
                <div class="media-title font-weight-semibold" style="font-size: 12px; margin-bottom: 0px !important;">Bastin Miller</div>
                <span class="text-muted" style="font-size: 12px;">Total Care</span> </div>
            </li>
          </div>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="form-group">
                <label>Add date and time vitals were taken: </label>
                <div class="input-group"> <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-alarm"></i></span> </span>
                  <input type="text"  name="from_date" class="form-control daterange-time" value="" placeholder="Enter date and time vitals were taken">
                </div>
              </div>
            </div>
          </div>
          <div class="row" style="margin-top: 50px;">
            <div class="col-md-3">
              <div class="form-group pt-2">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" name="is_bloodpressure" value="1" class="form-check-input-styled" data-fouc>
                    Blood Pressure </label>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <input class="form-control" type="number" name="bloodpressure_from" style="position: relative; bottom: 16px;">
            </div>
            <div class="col-md-2" style="text-align: center;">
              <label style="position: relative; top: 9px;">Over</label>
            </div>
            <div class="col-md-3">
              <input class="form-control" type="number" name="bloodpressure_to" style="position: relative; bottom: 16px;">
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group pt-2">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" name="is_breathing" value="1" class="form-check-input-styled" data-fouc>
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
                    <input type="checkbox" name="is_pulse" value="1" class="form-check-input-styled" data-fouc>
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
                    <input type="checkbox" name="is_temprature" value="1" class="form-check-input-styled" data-fouc>
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


<script type="text/javascript">

  $('#add_vital_reports_form<?php echo $detail->id; ?>').on('submit',function(e){
    // alert(e);
    // return false;
    e.preventDefault();
    loader = CardLoader($("#add_vital_reports_form<?php echo $detail->id; ?>"));
    var formData = new FormData($(this)[0]);
    $.ajax({
      url: '<?php echo site_url("caregiver/current_shifts/add_vital_report"); ?>',
      type: 'POST',
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      success: function(e){
        // console.log(e);
        // return false;
        loader.unblock();
        //$("#vital_reports_view_<?php echo $detail->id; ?>").html(e);
        // var form = document.getElementById("add_client_medication_form_<?php echo $detail->id; ?>");
        // form.reset();
        $("#modal_clients_vital_<?php echo $detail->id; ?>").modal("hide");
        swal({
            title: "Good job!",
            type: 'success',
            html: 'You have added medication list successfully',
            allowOutsideClick: false,
          }).then(function() {
            location.reload();
          });
        //setTimeout(function(){loader.unblock();}, 5000);
      }
        
    });

  });

  function edit_vital_reports(id){
    $.post("<?php echo site_url("caregiver/current_shifts/edit_vital_reports"); ?>", {id:id}).done(function(data){
      $("#update_modal_content").html(data);
      $("#update_modal").modal("show");
    });
  }

  function delete_vital_reports(id){
    $.post("<?php echo site_url("caregiver/current_shifts/delete_vital_reports"); ?>", {id:id}).done(function(data){
      swal({
        title: "Good job!",
        type: 'error',
        html: 'You have deleted medication list successfully',
        allowOutsideClick: false,
      }).then(function() {
        //location.reload();
      });
      $('#table_row_'+id+'').remove();
    });
  }

</script>