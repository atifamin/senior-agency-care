<form id="update_client_appointement_form">
<input type="hidden" name="appointement_id" value="<?php echo $appointement_id; ?>" />
  <div class="modal-header">
    <h3 class="modal-title" style="margin: 0 auto;padding:4% 0"><strong>Create A New Appointment</strong></h3>
    <div>
      <li class="media">
        <div class="mr-3" style="margin-right: .55rem!important;"> <a href="#"> <img src="<?php echo base_url("assets/images/placeholders/avatar.png"); ?>" class="rounded-circle" width="40" height="40" alt=""> </a> </div>
        <div class="media-body">
          <div class="media-title font-weight-semibold" style="font-size: 12px; margin-bottom: 0px !important;"><?php echo $relationshipDetails->first_name." ".$relationshipDetails->last_name; ?></div>
          <span class="text-muted" style="font-size: 12px;">Total Care</span> </div>
      </li>
    </div>
  </div>
  <div class="modal-body" style="padding:0 10%;">
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label><strong>Assign caregiver to client schedule</strong></label>
          <select class="form-control select" data-fouc id="caregiver_id" name="caregiver_id">
            <option>Please Select</option>
            <?php if(count($assignedCargivers)>0){ ?>
            <?php 
				  foreach($assignedCargivers as $cg){
					  $assignedCG = $this->common_model->listingRow("id",$cg->caregiver_id,"caregiver");
				
			?>
            <option value="<?php echo $assignedCG->id; ?>" <?php if($assignedCG->id==$result->caregiver_id){echo 'selected="selected"';} ?>><?php echo $assignedCG->first_name." ".$assignedCG->last_name; ?></option>
            <?php }} ?>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group"> <i class="icon-calendar22" style="margin-right: 5px;"></i> <strong>Enter appointment date and time: </strong>
          <div class="input-group">
            <div class="input-group">
              <input type="text" class="form-control" id="appointment_picker_edit" value="<?php echo date("m/d/Y", strtotime($result->date)); ?>" name="date" autocomplete="off">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row" style="text-align: center; padding-bottom: 5px;">
      <div class="col-md-12"> <strong>Assign time to schedule</strong> </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="input-group"> <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-alarm"></i></span> </span>
          <input type="text" class="form-control pickatime" placeholder="Caregiver clock in" name="in_time"  value="<?php echo $result->in_time; ?>"  />
        </div>
      </div>
      <div class="col-md-6">
        <div class="input-group"> <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-alarm"></i></span> </span>
          <input type="text" class="form-control pickatime" placeholder="Caregiver clock out" name="out_time" value="<?php echo $result->out_time; ?>">
        </div>
      </div>
    </div>
    <div class="row" style="margin-top: 20px;">
      <div class="col-md-8 offset-md-2">
        <div class="form-group pt-2">
          <div class="form-check form-check-switchery">
            <label class="form-check-label">
              <input type="checkbox" name="is_recurring" <?php if($result->is_recurring==1){echo 'checked';} ?> class="form-check-input-switchery" data-fouc id="is_recurring_edit" value="1">
              <strong>Set this schedule as recurring</strong> </label>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row" style="text-align: center; margin-bottom: 20px;">
    <div class="col-md-12">
      <button type="button" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in" data-spinner-size="20" onclick="update_client_appointement_form()"> <span class="ladda-label">Save</span> </button>
      <button type="button" class="btn btn-light legitRipple" data-dismiss="modal">Cancal</button>
    </div>
  </div>
</form>
<script>
new Switchery(document.querySelector('#is_recurring_edit'));
$('.pickatime').pickatime();
$("#caregivers, #caregiver_id").select2();
$('#appointment_picker_edit').datepicker({
	clearBtn:true,
});

</script>