<form id="update_appointment">
  <div class="modal-header">
    <h5 class="modal-title" style="margin: 0 auto;"><?php echo date("h:i A", strtotime($result->in_time))." - ".date("h:i A", strtotime($result->out_time)); ?></h5>
    <div>
      <li class="media">
        <div class="mr-3" style="margin-right: .55rem!important;"> <a href="#"> <img src="<?php echo client_image($client->id); ?>" class="rounded-circle" width="40" height="40" alt=""> </a> </div>
        <div class="media-body">
          <div class="media-title font-weight-semibold" style="font-size: 12px; margin-bottom: 0px !important;"><?php echo $client->first_name." ".$client->last_name; ?></div>
          <span class="text-muted" style="font-size: 12px;">Total Care</span> </div>
      </li>
    </div>
  </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="form-group">
          <label><strong>Switch with a caregiver on this case</strong> </label>
          <select class="form-control select" data-fouc name="switch_caregiver" id="edit_caregiver_id1">
            <option>Please Select</option>
            <?php if(count($assignedCargivers)>0){ ?>
            <?php 
			foreach($assignedCargivers as $cg){
				$assignedCG = $this->common_model->listingRow("id",$cg->caregiver_id,"caregiver");
			?>
            <option value="<?php echo $assignedCG->id ?>"><?php echo $assignedCG->first_name." ".$assignedCG->last_name; ?></option>
            <?php }} ?>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="form-group">
          <label><strong>Assign to available caregiver on this case</strong> </label>
          <select class="form-control select" data-fouc name="assign_caregiver" id="edit_caregiver_id2">
            <option>Please Select</option>
            <?php if(count($assignedCargivers)>0){ ?>
            <?php 
			foreach($assignedCargivers as $cg1){
				$assignedCG1 = $this->common_model->listingRow("id",$cg1->caregiver_id,"caregiver");
			?>
            <option value="<?php echo $assignedCG1->id ?>"><?php echo $assignedCG1->first_name." ".$assignedCG1->last_name; ?></option>
            <?php }} ?>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="form-group">
          <label><strong>Assign to any other available caregiver on staff</strong> </label>
          <select class="form-control select" data-fouc name="assign_any_caregiver" id="edit_caregiver_id3">
            <option>Please Select</option>
            <?php if(count($caregivers)>0){ ?>
            <?php  foreach($caregivers as $ca){ ?>
            <option value="<?php echo $ca->id ?>"><?php echo $ca->first_name." ".$ca->last_name; ?></option>
            <?php }} ?>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="form-group pt-2">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input-styled" name="remove_caregiver" data-fouc id="remove_caregiver_checkbox">
              Remove caregiver from this schedule </label>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in" data-spinner-size="20"> <span class="ladda-label">Done</span> </button>
  </div>
</form>
<script>
$("#edit_caregiver_id1, #edit_caregiver_id2, #edit_caregiver_id3").select2();
$("#remove_caregiver_checkbox").uniform();

$("#edit_caregiver_id1").on("change", function(e){
	if($(this).val()=="Please Select"){
		$("#edit_caregiver_id2, #edit_caregiver_id3, #remove_caregiver_checkbox").removeAttr("disabled");
	}else{
		$("#edit_caregiver_id2, #edit_caregiver_id3, #remove_caregiver_checkbox").attr("disabled", "disabled");
	}
});

$("#edit_caregiver_id2").on("change", function(e){
	if($(this).val()=="Please Select"){
		$("#edit_caregiver_id1, #edit_caregiver_id3, #remove_caregiver_checkbox").removeAttr("disabled");
	}else{
		$("#edit_caregiver_id1, #edit_caregiver_id3, #remove_caregiver_checkbox").attr("disabled", "disabled");
	}
});

$("#edit_caregiver_id3").on("change", function(e){
	if($(this).val()=="Please Select"){
		$("#edit_caregiver_id1, #edit_caregiver_id2, #remove_caregiver_checkbox").removeAttr("disabled");
	}else{
		$("#edit_caregiver_id1, #edit_caregiver_id2, #remove_caregiver_checkbox").attr("disabled", "disabled");
	}
});


$("#update_appointment").on("submit", function(e){
	e.preventDefault();
	//loader = CardLoader($("#editschedulediv"));
	$.ajax({
		url: '<?php echo site_url("agency/scheduling/update_appointment"); ?>',
		type: 'POST',
		data: $(this).serialize(),
		cache: false,
		contentType: false,
		processData: false,
		success: function(e){
			//loader.unblock();
		}
	});
});

</script>