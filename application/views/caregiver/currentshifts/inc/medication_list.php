<?php $client = $this->common_model->listingRow('id',$detail->client_id,'client'); ?>
<?php //print_array($client); ?>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12" style="text-align: center;">
                <a href="javascript:;" data-toggle="modal"  data-target="#modal_add_medication_<?php echo $detail->id; ?>">Add a new medication
                    <button style="background-color: #f5f5f5; margin-left: 15px;" type="button" class="btn alpha-primary text-primary-800 btn-icon rounded-round ml-2 legitRipple"> <i style="color: #555;" class="icon-plus3"></i>
                    </button>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" id="medication_list_view_<?php echo $detail->id; ?>">
                <?php include(APPPATH."views/caregiver/currentshifts/inc/medication_list/list_view.php"); ?>
            </div>
        </div>
    </div>
</div> 


<!-- ==========Add Medication Modal============= -->
<div id="modal_add_medication_<?php echo $detail->id; ?>" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="add_client_medication_form_<?php echo $detail->id; ?>" method="post">
        <input type="hidden" name="client_id" value="<?php echo $detail->client_id; ?>">
        <input type="hidden" name="agency_id" value="<?php echo $detail->agency_id; ?>">
        <div class="modal-header">
          <h5 class="modal-title" style="margin: 0 auto;">Add client medication</h5>
          <div>
            <li class="media" style="padding: unset; border: none;">
              <div class="mr-3" style="margin-right: .55rem!important;"> <a href="#"> <img src="<?php echo client_image($client->id); ?>" class="rounded-circle" width="40" height="40" alt=""> </a> </div>
              <div class="media-body">
                <div class="media-title font-weight-semibold" style="font-size: 12px; margin-bottom: 0px !important;"><?php echo $client->first_name." ".$client->last_name; ?></div>
                <span class="text-muted" style="font-size: 12px;">Total Care</span> </div>
            </li>
          </div>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="form-group">
                <label>Medication name:</label>
                <input type="text" name="medication_name" class="form-control" placeholder="What medication is the client taking">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="form-group">
                <label>Medication dosage in Mg: </label>
                <br>
                <span class="text-muted">Add the required medication dosage</span>
                <input type="text" value="" name="medication_dosage" class="form-control touchspin-empty" placeholder="Mg">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="form-group">
                <label>How many times a day is medication taken: </label>
                <br>
                <span class="text-muted">Add the frequency per day of dosage</span>
                <input type="text" value="" name="how_many_times_day" class="form-control touchspin-empty">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="form-group">
                <label>When is the medication taken</label>
                <br>
                <span class="text-muted">Select morning, evening or night</span>
                <select class="form-control multiselect" multiple="multiple" name="day_period_time[]" data-fouc>
                  <?php foreach (CON_CLIENT_DAY_SHIFTS as $daykey => $dayvalue) { ?>
                  <option value="<?php echo $dayvalue; ?>"><?php echo $dayvalue; ?></option>

                  <?php } ?>
                  <!-- <option value="Evening">Evening</option>
                  <option value="Night">Night</option> -->
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <label>What time is medication taken</label>
              <br>
              <span class="text-muted">Select what time is medication taken</span>
              <div class="input-group"> <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-alarm"></i></span> </span>
                <input type="text" name="day_time" class="form-control pickatime" placeholder="select time">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="form-group pt-2">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" name="is_caregiver_reminder" id="medication_reminder_checkbox" class="form-check-input-styled" data-fouc>
                    Set reminder for caregiver </label>
                </div>
              </div>
            </div>
          </div>
          <div class="row" id="medication_set_reminder" style="display: none;">
            <div class="col-md-8 offset-md-2"> <span class="text-muted">Create a reminder for caregiver to give medication</span>
              <div class="input-group"> <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-alarm"></i></span> </span>
                <input type="text" name="is_caregiver_reminder" class="form-control pickatime" placeholder="select time">
              </div>
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

<!-- <div id="edit_medication_modal_<?php echo $detail->id; ?>" class="modal fade" tabindex="-2">
  <div class="modal-dialog">
    <div class="modal-content" id="edit_medication_div_<?php echo $detail->id; ?>">
      
    </div>
  </div>
</div> -->
<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_checkboxes_radios.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/inputs/touchspin.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_input_groups.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/anytime.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.date.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.time.js"></script>
<script type="text/javascript">
    $('#medication_reminder_checkbox').click(function(){
      if($(this).prop("checked") == true){
          $("#medication_set_reminder").css("display","block");
      }
      else if($(this).prop("checked") == false){
          $("#medication_set_reminder").css("display","none");
      }
    });

    $('#add_client_medication_form_<?php echo $detail->id; ?>').on('submit',function(e){
      e.preventDefault();
      loader = CardLoader($("#add_client_medication_form_<?php echo $detail->id; ?>"));
      var formData = new FormData($(this)[0]);
      $.ajax({
        url: '<?php echo site_url("caregiver/current_shifts/add_new_medication"); ?>',
        type: 'POST',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(e){
          // console.log(e);
          // return false;
          loader.unblock();
          //$("#medication_list_view_<?php echo $detail->id; ?>").html(e);
          // var form = document.getElementById("add_client_medication_form_<?php echo $detail->id; ?>");
          // form.reset();
          $("#modal_add_medication_<?php echo $detail->id; ?>").modal("hide");
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

    
    
    function delete_medication(id){
      $.post("<?php echo site_url("caregiver/current_shifts/delete_medication"); ?>", {id:id}).done(function(data){
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
    function edit_medication(id){
      $.post("<?php echo site_url("caregiver/current_shifts/edit_medication"); ?>", {id:id}).done(function(data){
        $('#update_modal_content').html(data);
        $('#update_modal').modal('show');
      });
    }
</script>