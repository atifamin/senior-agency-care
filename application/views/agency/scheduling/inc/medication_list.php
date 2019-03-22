<?php //print_array($result); ?>

<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-12" style="text-align: center;"> <a href="javascript:;" data-toggle="modal" data-target="#modal_add_medication">Add a new medication
        <button style="background-color: #f5f5f5; margin-left: 15px;" type="button" class="btn alpha-primary text-primary-800 btn-icon rounded-round ml-2 legitRipple"><i style="color: #555;" class="icon-plus3"></i></button>
        </a> </div>
    </div>
    <div class="row">
      <div class="col-md-12" id="medication_list_view">
        <?php include(APPPATH."views/agency/scheduling/inc/medication_list/list_view.php"); ?>
      </div>
    </div>
  </div>
</div>
<div id="modal_add_medication" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="add_client_medication_form" action="<?php echo site_url('agency/scheduling/add_medication'); ?>" method="post">
        <div class="modal-header">
          <h5 class="modal-title" style="margin: 0 auto;">Add client medication</h5>
          <div>
            <li class="media">
              <input type="hidden" name="client_id" id="client_id" value="<?php echo $client_id; ?>">
              <div class="mr-3" style="margin-right: .55rem!important;"> <a href="#"> <img src="<?php echo base_url(); ?>assets/images/userimg/face22.jpg" class="rounded-circle" width="40" height="40" alt=""> </a> </div>
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
                <!-- <input type="text" value="" name="medication_dosage" class="form-control touchspin-empty" placeholder="Mg"> -->
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
                <!-- <select class="form-control select-icons" name="day_period_time" data-fouc>
                  <option value="morning">Morning</option>
                  <option value="evening">Evening</option>
                  <option value="night">Night</option>
                </select> -->
                <select name="day_period_time" data-placeholder="Select" class="form-control form-control-select2" data-fouc>
                  <option></option>
                  <option value="morning">Morning</option>
                  <option value="evening">Evening</option>
                  <option value="night">Night</option>
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
                <input type="text" class="form-control pickatime" placeholder="select time">
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
<div id="edit_medication_modal" class="modal fade" tabindex="-2">
  <div class="modal-dialog">
    <div class="modal-content" id="edit_medication_div">
      
    </div>
  </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/styling/uniform.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/styling/switch.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_checkboxes_radios.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/inputs/touchspin.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_input_groups.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/tags/tagsinput.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/tags/tokenfield.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/ui/prism.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_tags_input.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/selects/select2.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_select2.js"></script> 
<script>

$("#add_client_medication_form").on("submit", function(e){
	loader = CardLoader($("#modal_add_medication"));
	e.preventDefault();
	var formData = new FormData($(this)[0]);
	formData.append("client_id", <?php echo $client_id; ?>);
	$.ajax({
		url: '<?php echo site_url("agency/scheduling/add_new_medication"); ?>',
		type: 'POST',
		data: formData,
		cache: false,
		contentType: false,
		processData: false,
		success: function(e){
			$("#medication_list_view").html(e);
			var form = document.getElementById("add_client_medication_form");
			form.reset();
			$("#modal_add_medication").modal("hide");
			//setTimeout(function(){loader.unblock();}, 5000);
		}
			
	});
});

function edit_medication(id){
	$.post("<?php echo site_url("agency/scheduling/edit_medication"); ?>", {id:id}).done(function(data){
		$("#edit_medication_div").html(data);
		$("#edit_medication_modal").modal("show");
	});
}



</script>