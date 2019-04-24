<script src="<?php echo base_url(); ?>assets/js/plugins/forms/styling/uniform.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/selects/select2.min.js"></script>

<form id="update_client_appointement">
	<input type="hidden" name="caregiver_id" value="<?php echo $result->caregiver_id; ?>" />
	<input type="hidden" name="appointment_id" value="<?php echo $result->id; ?>" />
  	<div class="modal-header">
      <h5 class="modal-title" style="margin: 0 auto;"><?php echo date("h:i A", strtotime($result->from))." - ".date("h:i A", strtotime($result->to)); ?></h5>
      <div>
        <li class="media" style="padding: unset;border: none;">
          <div class="mr-3" style="margin-right: .55rem!important;"> <a href="#"> <img src="<?php echo client_image($client->id); ?>" class="rounded-circle" width="40" height="40" alt=""> </a> </div>
          <div class="media-body">
            <div class="media-title font-weight-semibold" style="font-size: 12px; margin-bottom: 0px !important;"><?php echo $client->first_name." ".$client->last_name; ?></div>
            <span class="text-muted" style="font-size: 12px;">Total Care</span> </div>
        </li>
      </div>
    </div>
    <div class="modal-body">
      <div class="row">
	      <div class="col-md-10 offset-md-1" id="error_message">
	      
	      </div>
      </div>
      <?php if ($is_switch == 1) { ?>
      	<div class="row">
        	<div class="col-md-10 offset-md-1">
	          	<div class="form-group">
	            	<label><strong>Switch with a caregiver on this case</strong> </label>
	            	<select class="form-control select" data-fouc name="switch_caregiver" id="edit_caregiver_1">
	              	<option>Please Select</option>
	              	<?php if(count($assignedCargivers)>0){ ?>
	              	<?php 
	  				foreach($assignedCargivers as $cg){
	  					if($result->caregiver_id!=$cg->caregiver_id){
	  					$assignedCG = $this->common_model->listingRow("id",$cg->caregiver_id,"caregiver");
	  				?>
	              	<option value="<?php echo $assignedCG->id ?>"><?php echo $assignedCG->first_name." ".$assignedCG->last_name; ?></option>
	              	<?php }}} ?>
	            	</select>
	          	</div>
        	</div>
      	</div>
  		<?php }elseif ($is_switch == 0) { ?>

	    <div class="row">
	    	<div class="col-md-10 offset-md-1">
	          <div class="form-group">
	            <label><strong>Assign to available caregiver on this case</strong> </label>
	            <select class="form-control select" data-fouc name="assign_caregiver" id="edit_caregiver_2">
	              <option>Please Select</option>
	              <?php if(count($assignedCargivers)>0){ ?>
	              <?php 
	  			foreach($assignedCargivers as $cg1){
	  				if($result->caregiver_id!=$cg1->caregiver_id){
	  				$assignedCG1 = $this->common_model->listingRow("id",$cg1->caregiver_id,"caregiver");
	  			?>
	              <option value="<?php echo $assignedCG1->id ?>"><?php  echo $assignedCG1->first_name." ".$assignedCG1->last_name; ?></option>
	              <?php }}} ?>
	            </select>
	          </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-md-10 offset-md-1">
	          <div class="form-group">
	            <label><strong>Assign to any other available caregiver on staff</strong> </label>
	            <select class="form-control select" data-fouc name="assign_any_caregiver" id="edit_caregiver_3">
	              <option>Please Select</option>
	              <?php if(count($caregivers)>0){ ?>
	              <?php foreach($caregivers as $ca){ ?>
	              <?php if($result->caregiver_id!=$ca->id){ ?>
	              <option value="<?php echo $ca->id ?>"><?php echo $ca->first_name." ".$ca->last_name; ?></option>
	              <?php }}} ?>
	            </select>
	          </div>
	        </div>
	    </div>
      <?php } ?>
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="form-group pt-2">
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input-styled" name="remove_caregiver" data-fouc id="remove_caregiver_checkbox1" disabled="disabled">
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



<script type="text/javascript">
	$("#edit_caregiver_1, #edit_caregiver_2, #edit_caregiver_3").select2();
	$("#remove_caregiver_checkbox1").uniform();

$("#edit_caregiver_1").on("change", function(e){
	if($(this).val()=="Please Select"){
		$("#edit_caregiver_2, #edit_caregiver_3").removeAttr("disabled");
	}else{
		$("#edit_caregiver_2, #edit_caregiver_3").attr("disabled", "disabled");
	}
});

$("#edit_caregiver_2").on("change", function(e){
	if($(this).val()=="Please Select"){
		$("#edit_caregiver_1, #edit_caregiver_3").removeAttr("disabled");
	}else{
		$("#edit_caregiver_1, #edit_caregiver_3").attr("disabled", "disabled");
	}
});

$("#edit_caregiver_3").on("change", function(e){
	if($(this).val()=="Please Select"){
		$("#edit_caregiver_1, #edit_caregiver_2").removeAttr("disabled");
	}else{
		$("#edit_caregiver_1, #edit_caregiver_2").attr("disabled", "disabled");
	}
});

	$('#update_client_appointement').on('submit',function(e){
		e.preventDefault();
		loader = CardLoader($("#update_client_appointement"));
		var formData = new FormData($(this)[0]);
		$.ajax({
			url: '<?php echo site_url("agency/current_shifts/update_client_appointement"); ?>',
			type: 'POST',
			data: formData,
			cache: false,
			contentType: false,
			processData: false,
			success: function(e){
      		loader.unblock();
      		// $('#switch_caregiver_modal').modal('show');
      		// $('#switch_caregiver_div').html(e);
	       //  $('#edit_switch_modal').modal('hide');
	       //   console.log(e);
	       //    return false;
      			var data = JSON.parse(e);
	      		if(data.type="success"){
	        		if(data.action=="switch"){
	          			$('#switch_caregiver_modal').modal('show');
	          			$('#edit_switch_modal').modal('hide');
	          			$('#switch_caregiver_div').html(JSON.parse(data.text));
	        		}else if(data.action=="assign"){
	          			location.reload();
	        		}
	      		}
	      		return false;
	      		if (data.type="error"){
			        $("#error_message").html('<div class="alert" style="box-shadow: none;padding: 0;" align="center"><div class="swal2-icon swal2-error swal2-animate-error-icon" style="display: flex;"><span class="swal2-x-mark"><span class="swal2-x-mark-line-left"></span><span class="swal2-x-mark-line-right"></span></span></div>'+data.text+'</div>');
			    }
      		}
      	});
	});

</script>