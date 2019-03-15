<style>
.select2-container {
	border-bottom: 1px solid #d8d5d5 !important;
	padding-bottom: 2% !important;
}
</style>

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
        <div class="col-md-4">
          <button style="width: 50%;" type="submit" class="btn btn-light legitRipple">Add</button>
        </div>
        <div class="col-md-4" style="text-align: right;">
          <button type="button" class="btn btn-primary legitRipple">Publish Schedule</button>
          <div class="btn-group ml-1">
            <button type="button" class="btn bg-transparent text-success border-success dropdown-toggle" data-toggle="dropdown">Static</button>
            <div class="dropdown-menu dropdown-menu-right"> <a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a> <a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a> <a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a> </div>
          </div>
        </div>
      </div>
    </form>
    <div class="row" style="margin-top: 40px;">
      <div class="col-md-4">
      <a href="javascript:;" data-toggle="modal" data-target="#assign_caregiver_modal">
        <button style="background-color: #f5f5f5; margin-right: 15px;" type="button" class="btn alpha-primary text-primary-800 btn-icon rounded-round ml-2 legitRipple"><i style="color: #555;" class="icon-plus3"></i></button>
        Assign Caregiver to client case</a>
        <div id="caregivers_images_div">
        <?php include(APPPATH."views/agency/scheduling/inc/scheduling/view_assigned_caregivers.php"); ?>
        </div>
        </div>
      <div class="col-md-6"> <a href="javascript:;" data-toggle="modal" data-target="#newschedule">
        <button style="background-color: #f5f5f5; margin-right: 15px;" type="button" class="btn alpha-primary text-primary-800 btn-icon rounded-round ml-2 legitRipple"><i style="color: #555;" class="icon-plus3"></i></button>
        Create new schedule</a> </div>
    </div>
    <!-- <div id="saasnewschedule" class="modal fade" tabindex="-1">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="row" style="text-align: center; padding-top: 10" >
					<div class="col-md-12">
						<strong>Make or edit Client's Schedule</strong>
					</div>
				</div>
				<div class="row">
					<div class="col-md-1" style="text-align: right;">
						<img src="<?php echo base_url(); ?>assets/images/userimg/face14.jpg" style="margin-left: 10px;" class="rounded-circle mr-1" width="25" height="25" alt=""></i>					
					</div>
					<div class="col-md-5" style="text-align: left;">
						<div class="media-title font-weight-semibold">James Alexander</div><br>
						<span class="text-muted">Caregiver</span>
					</div>
				</div>
				<div class="row" style="margin-top: 50px;">
					<div class="offset-md-2 col-md-12">
						<div class="form-group">
						<label>Basic single date picker:</label>
						<div class="input-group">
							<span class="input-group-prepend">
								<span class="input-group-text"><i class="icon-calendar22"></i></span>
							</span>
							<input type="text" class="form-control daterange-single" value="03/18/2013">
						</div>
					</div>
					</div>
				</div>
	      		<div class="modal-body">
	        	</div>
	        	<div class="modal-footer">
	        	</div>
	    	</div>
	  	</div>
	</div> -->
    
    <div id="newschedule" class="modal fade" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <form id="add_client_medication_form">
            <div class="modal-header">
              <h5 class="modal-title" style="margin: 0 auto;">Create a new appointment</h5>
              <div>
                <li class="media">
                  <div class="mr-3" style="margin-right: .55rem!important;"> <a href="#"> <img src="<?php echo base_url(); ?>assets/images/userimg/face10.jpg" class="rounded-circle" width="40" height="40" alt=""> </a> </div>
                  <div class="media-body">
                    <div class="media-title font-weight-semibold" style="font-size: 12px; margin-bottom: 0px !important;">Bastin Miller</div>
                    <span class="text-muted" style="font-size: 12px;">Total Care</span> </div>
                </li>
              </div>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-8 offset-md-2">
                  <div class="form-group"> <strong>Assign caregiver to client schedule</strong>
                    <select class="form-control select-icons" id="therapy_type" onchange="setTherapyType()" data-placeholder="Select the type of appointment" data-fouc>
                      <option></option>
                      <option value="doctor_appointment">Doctor's Appointment</option>
                      <option value="therapy_appointment">Therapy Appointment</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row" id="therapy_doc_name" style="display: none;">
                <div class="col-md-8 offset-md-2">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter doctor's name">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 offset-md-2">
                  <div class="form-group"> <i class="icon-calendar22" style="margin-right: 5px;"></i> <strong>Enter appointment date and time: </strong>
                    <div class="input-group">
                      <div class="input-group">
                        <input type="text" class="form-control daterange-single" value="03/18/2013">
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
                    <input type="text" class="form-control pickatime" placeholder="Caregiver clock in">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-group"> <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-alarm"></i></span> </span>
                    <input type="text" class="form-control pickatime" placeholder="Caregiver clock out">
                  </div>
                </div>
              </div>
              <div class="row" style="margin-top: 20px;">
                <div class="col-md-8 offset-md-2">
                  <div class="form-group pt-2">
                    <div class="form-check">
                      <input type="checkbox" name="is_pets"  data-on-text="On" data-off-text="Off" class="form-check-input-switch" data-size="small" id="client_pets" onchange="" value="0">
                      <strong style="margin-left: 10px;">Set this schedule as running</strong> </div>
                  </div>
                </div>
              </div>
              <div class="row" id="appointment_set_reminder" style="display: none;">
                <div class="col-md-12">
                  <div class="row" id="appointment_set_reminder_doctor" style="display: none;">
                    <div class="col-md-8 offset-md-2">
                      <div class="input-group"> <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-alarm"></i></span> </span>
                        <select class="form-control multiselect" data-fouc>
                          <option value="dr_2.0">2.0 Hrs before appointment</option>
                          <option value="dr_2.5">2.5 Hrs before appointment</option>
                          <option value="dr_3.0">3.0 Hrs before appointment</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row" id="appointment_set_reminder_therapy" style="display: none;">
                    <div class="col-md-8 offset-md-2">
                      <div class="input-group"> <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-alarm"></i></span> </span>
                        <select class="form-control multiselect" data-fouc>
                          <option value="th_30">30 Minutes before appointment</option>
                          <option value="th_1.0">1.0 Hrs before appointment</option>
                          <option value="th_1.5">1.5 Hrs before appointment</option>
                          <option value="th_2.0">2.0 Hrs before appointment</option>
                          <option value="th_3.0">3.0 Hrs before appointment</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="row" id="appointment_set_reminder" style="display: none;">
	                <div class="col-md-8 offset-md-2">
	                    <div class="input-group">
	                        <span class="input-group-prepend">
	                            <span class="input-group-text"><i class="icon-alarm"></i></span>
	                        </span>
	                        <select class="form-control multiselect" data-fouc>
	                            <option value="dr_2.0">2.0 Hrs before appointment</option>
	                            <option value="dr_2.5">2.5 Hrs before appointment</option>
	                            <option value="dr_3.0">3.0 Hrs before appointment</option>
	                        </select>
	                    </div>
	                </div>
	            </div> --> 
            </div>
            <div class="row" style="text-align: center; margin-bottom: 20px;">
              <div class="col-md-12">
                <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in" data-spinner-size="20"> <span class="ladda-label">Save</span> </button>
                <button type="button" class="btn btn-light legitRipple">Cancal</button>
              </div>
            </div>
          </form>
        </div>
      </div>
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
<div id="assign_caregiver_modal" class="modal fade" tabindex="-1" data-backdrop="true">
  <div class="modal-dialog modal-sm">
    <form id="assign_caregiver_form">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" align="center">Assign Caregiver</h6>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <select multiple="multiple" data-placeholder="Select Caregiver..." class="form-control select" data-fouc id="caregivers" name="assisgn_caregivers[]">
              <option></option>
              <?php if(count($caregivers)>0): ?>
              <?php foreach($caregivers as $caregiverKey=>$caregiverVal): ?>
              <option value="<?php echo $caregiverVal->id; ?>"><?php echo $caregiverVal->first_name." ".$caregiverVal->last_name; ?></option>
              <?php endforeach; endif; ?>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn bg-primary spinner-light-card" style="width:100%">Save changes</button>
        </div>
      </div>
    </form>
  </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/plugins/ui/moment/moment.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/ui/fullcalendar/fullcalendar.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/demo_pages/fullcalendar_basic.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/styling/switch.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/anytime.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.date.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.time.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/selects/select2.min.js"></script> 
<script>
$("#caregivers").select2();

$("#assign_caregiver_form").on("submit", function(e){
	loader = CardLoader($(this));
	e.preventDefault();
	formData = new FormData();
	formData.append("caregivers_id", $("#caregivers").val());
	formData.append("client_id", <?php echo $client_id; ?>);
	$.ajax({
		url: '<?php echo site_url("agency/scheduling/assign_caregiver"); ?>',
		type: 'POST',
		data: formData,
		cache: false,
		contentType: false,
		processData: false,
		success: function(e){
			loader.unblock();
			$("#caregivers_images_div").html(e);
		},
		xhr: function () {
			var xhr = new window.XMLHttpRequest();
			xhr.upload.addEventListener("progress", function (evt) {
				if (evt.lengthComputable) {
					var percentComplete = evt.loaded / evt.total;
					percentComplete = parseInt(percentComplete * 100);
					if(percentComplete==100){
						loader.unblock();
					}
				}
			}, false);
			return xhr;
		},
	});
});


/*function assignCaregiver(){
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

}*/
</script> 
