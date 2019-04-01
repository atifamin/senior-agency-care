<?php //print_array($client);?>

<form id="update_medication_list" action="" method="post">
  <input type="hidden" name="medication_id" value="<?php echo $result->id; ?>" />
  <div class="modal-header">
    <h5 class="modal-title" style="margin: 0 auto;">Edit Client's Medication</h5>
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
      <div class="col-md-8 offset-md-2">
        <div class="form-group">
          <label>Medication name:</label>
          <input type="text" name="medication_name" class="form-control" placeholder="What medication is the client taking" value="<?php echo $result->medication_name; ?>">
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
          <input type="text" name="medication_dosage" class="form-control touchspin-basic edit_touchspin" placeholder="Mg" value="<?php echo $result->medication_dosage; ?>">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="form-group">
          <label>How many times a day is medication taken: </label>
          <br>
          <span class="text-muted">Add the frequency per day of dosage</span>
          <input type="text" value="<?php echo $result->how_many_times_day; ?>" name="how_many_times_day" class="form-control touchspin-basic edit_touchspin" >
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="form-group">
          <label>When is the medication taken</label>
          <br>
          <span class="text-muted">Select morning, evening or night</span>
          <select class="form-control multiselect edit_multiselect"  multiple="multiple" name="day_period_time[]" data-fouc>
            <?php $day_period_time = json_decode($result->day_period_time); ?>
            <?php foreach (CON_CLIENT_DAY_SHIFTS as $daykey => $dayvalue) { ?>
              <option value="<?php echo $dayvalue; ?>" <?Php if(in_array($dayvalue, $day_period_time)){ echo "selected='selected'";} ?> ><?php echo $dayvalue; ?></option>
            <?php } ?>
           
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
          <input type="text" name="day_time" class="form-control pickatime edit_time" value="<?php echo $result->day_time; ?>">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="form-group pt-2">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" name="is_caregiver_reminder" id="medication_reminder_checkbox_1" class="form-check-input-styled" checked="" data-fouc>
              Set reminder for caregiver </label>
          </div>
        </div>
      </div>
    </div>
    <div class="row" id="medication_set_reminder_1">
      <div class="col-md-8 offset-md-2"> <span class="text-muted">Create a reminder for caregiver to give medication</span>
        <div class="input-group"> <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-alarm"></i></span> </span>
          <input type="text" class="form-control pickatime edit_time" name="is_caregiver_reminder" value="<?php echo $result->is_caregiver_reminder; ?>">
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in" data-spinner-size="20"> <span class="ladda-label">Done</span> </button>
  </div>
</form>


<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_checkboxes_radios.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/inputs/touchspin.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.date.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.time.js"></script>

<script>
$("#update_medication_list").on("submit", function(e){
	loader = CardLoader($("#edit_medication_modal"));
	e.preventDefault();
	var formData = new FormData($(this)[0]);
	$.ajax({
		url: '<?php echo site_url("agency/scheduling/update_medication_list"); ?>',
		type: 'POST',
		data: formData,
		cache: false,
		contentType: false,
		processData: false,
		success: function(e){
      // alert(e);
			$("#medication_list_view").html(e);
			var form = document.getElementById("update_medication_list");
			form.reset();
			$("#edit_medication_modal").modal("hide");
      swal({
          title: "Good job!",
          type: 'success',
          html: 'You have updated medication list successfully',
          allowOutsideClick: false,
        }).then(function() {
          window.location = "<?php site_url('agency/scheduling/view'); ?>";
        });
			loader.unblock();
		}
			
	});
});

$('#medication_reminder_checkbox_1').click(function(){
  if ($(this).prop('checked') == true) {
    $('#medication_set_reminder_1').css('display','block');
  }
  else{
    $('#medication_set_reminder_1').css('display','none');
  }
});

$('.edit_multiselect').multiselect();
$('.form-check-input-styled').uniform();
$('.edit_time').pickatime();
$('.edit_touchspin').TouchSpin();

</script>