<div class="row">
  <div class="col-md-12">
    <form action="#">
      <div class="row" style="margin-top: 35px;">
        <div class="col-md-4">
          <div class="form-group">
            <div class="form-group form-group-feedback form-group-feedback-left">
              <input type="text" class="form-control form-control-sm" placeholder="Add client current location">
              <div class="form-control-feedback form-control-feedback-sm"> <i class="icon-pin-alt"></i> </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <button style="width: 50%;" type="submit" class="btn btn-light legitRipple">Add</button>
        </div>
      </div>
    </form>
    <div class="row" style="margin-top: 40px;">
      <div class="col-md-12"> <a href="javascript:;" onclick="assignCaregiver()">
        <button style="background-color: #f5f5f5; margin-right: 15px;" type="button" class="btn alpha-primary text-primary-800 btn-icon rounded-round ml-2 legitRipple"><i style="color: #555;" class="icon-plus3"></i></button>
        Assign Caregiver to client case</a> </div>
    </div>
    <div class="row" style="margin-top: 60px;">
      <div class="col-md-12" style="padding: 0;"> 
        <!-- List view -->
        <div class="fullcalendar-list"></div>
        <!-- /list view --> 
      </div>
    </div>
  </div>
</div>

<script src="<?php echo base_url(); ?>assets/js/plugins/ui/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/ui/fullcalendar/fullcalendar.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/fullcalendar_basic.js"></script>
<script>
function assignCaregiver(){
	swal({
		title: 'Assign Caregiver to Client case',
		input: 'select',
		inputOptions: {
			'1': 'Caregiver 1',
			'2': 'Caregiver 2',
			'3': 'Caregiver 3',
			'4': 'Caregiver 4'
		},
		inputClass: 'form-control select-multiselect',
		showCancelButton: true,
		inputValidator: function (value) {
			return !$('.swal2-select.select-multiselect').val().length && 'You need to select atleast one caregiver!'
		},
		inputAttributes: {
			'multiple': 'multiple'
		},
		onOpen: function() {

			// Initialize Multiselect when dialog is opened
			$('.swal2-select.select-multiselect').multiselect();

			// Initialize Uniform for custom checkboxes
			$('.swal2-popup input[type=checkbox]').uniform();
		}
	}).then(function (result) {

		// Display selected values
		swal({
			type: 'success',
			html: 'You selected: ' + JSON.stringify($('.swal2-select.select-multiselect').val())
		});

		// Show another modal if Cancel button is clicked
		if (result.dismiss === 'cancel') {
			swal({
				title: 'Cancelled',
				text: 'You have cancelled the request.',
				type: 'error'
			});
		}
	});
}
</script>    
    
