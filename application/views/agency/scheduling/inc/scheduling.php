<style>
#select_caregiver > .select2-container {
	border-bottom: 1px solid #d8d5d5 !important;
	padding-bottom: 2% !important;
}
</style>
<link href="<?php echo base_url(); ?>assets/js/plugins/pickers/bootstrap-datepicker/dist/css/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" />
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/styling/switchery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/styling/switch.min.js"></script>
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
      <div class="col-md-4" id="assign_caregivers_div"> <a href="javascript:;" onclick="load_assign_caregiver(<?php echo $client_id; ?>)">
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
    <div class="row" style="margin-top: 60px;">
      <div class="col-md-12" style="padding: 0;" id="full_calendar_view"></div>
    </div>
  </div>
</div>
<div id="newschedule" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="add_client_appointement_form">
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
                  <option value="<?php echo $assignedCG->id ?>"><?php echo $assignedCG->first_name." ".$assignedCG->last_name; ?></option>
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
                    <input type="text" class="form-control" id="appointment_picker" value="<?php echo date("m/d/Y"); ?>" name="dates" autocomplete="off">
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
                <input type="text" class="form-control pickatime" placeholder="Caregiver clock in" name="in_time">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-group"> <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-alarm"></i></span> </span>
                <input type="text" class="form-control pickatime" placeholder="Caregiver clock out" name="out_time">
              </div>
            </div>
          </div>
          <div class="row" style="margin-top: 20px;">
            <div class="col-md-8 offset-md-2">
              <div class="form-group pt-2">
                <div class="form-check form-check-switchery">
                  <label class="form-check-label">
                    <input type="checkbox" name="is_recurring" class="form-check-input-switchery" data-fouc id="is_recurring" value="1">
                    <strong>Set this schedule as recurring</strong> </label>
                </div>
              </div>
            </div>
          </div>
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
<div id="editschedule" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content" id="editschedulediv">
      
    </div>
  </div>
</div>
<div id="assign_caregiver_modal" class="modal fade" tabindex="-1" data-backdrop="true">
  <div class="modal-dialog modal-sm">
    <form id="assign_caregiver_form">
      <div class="modal-content" id="assign_caregiver_data"> </div>
    </form>
  </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/plugins/ui/moment/moment.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/styling/switch.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/anytime.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.date.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.time.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/selects/select2.min.js"></script> 
<script>
$('#appointment_picker').datepicker({
	multidate: true,
	clearBtn:true,
});
new Switchery(document.querySelector('#is_recurring'));
$("#caregivers, #caregiver_id").select2();

function load_assign_caregiver(client_id){
	loader = CardLoader($("#assign_caregivers_div"));
	$.post("<?php echo site_url("agency/scheduling/load_assign_caregiver"); ?>", {client_id:client_id}).done(function(data){
		$("#assign_caregiver_data").html(data);
		$("#assign_caregiver_modal").modal("show");
		loader.unblock();
	});
}

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
			$("#assign_caregiver_modal").modal("hide");
		},
		xhr: function () {
			var xhr = new window.XMLHttpRequest();
			xhr.upload.addEventListener("progress", function (evt) {
				if (evt.lengthComputable) {
					var percentComplete = evt.loaded / evt.total;
					percentComplete = parseInt(percentComplete * 100);
					if(percentComplete==100){
						loader.unblock();
						$("#assign_caregiver_modal").modal("hide");
					}
				}
			}, false);
			return xhr;
		},
	});
});

function delete_assigned_caregiver(id){
	loader = CardLoader($("#assign_caregivers_div"));
	$.post("<?php echo site_url("agency/scheduling/delete_assigned_caregiver"); ?>", {id:id}).done(function(data){
		$("#assigned_caregiver_row_id_"+id+"").remove();
		loader.unblock();
	});
}


$("#add_client_appointement_form").on("submit", function(e){
	loader = CardLoader($(this));
	e.preventDefault();
	formData = new FormData($("#add_client_appointement_form")[0]);
	formData.append("agency_id", <?php echo $agency_id; ?>);
	formData.append("client_id", <?php echo $client_id; ?>);
	$.ajax({
		url: '<?php echo site_url("agency/scheduling/add_client_appointement"); ?>',
		type: 'POST',
		data: formData,
		cache: false,
		contentType: false,
		processData: false,
		success: function(e){
			loader.unblock();
			$("#caregivers_images_div").html(e);
			$("#newschedule").modal("hide");
			swal({
				type: 'success',
				html: 'You have added an appointement successfully',
			});
			load_calendar(<?php echo $client_id; ?>);
		},
		xhr: function () {
			var xhr = new window.XMLHttpRequest();
			xhr.upload.addEventListener("progress", function (evt) {
				if (evt.lengthComputable) {
					var percentComplete = evt.loaded / evt.total;
					percentComplete = parseInt(percentComplete * 100);
					if(percentComplete==100){
						loader.unblock();
						$("#newschedule").modal("hide");
						swal({
							type: 'success',
							html: 'You have added an appointement successfully',
						});
					}
				}
			}, false);
			return xhr;
		},
	});
});

$(document).ready(function(e) {
    load_calendar(<?php echo $client_id; ?>);
});

function load_calendar(client_id){
	loader = CardLoader($("#full_calendar_view"));
	$.post("<?php echo site_url("agency/scheduling/load_calendar"); ?>",{client_id:client_id}).done(function(data){
		$("#full_calendar_view").html(data);
		loader.unblock();
	});
}

function edit_client_schedule(id){
	loader = CardLoader($("#full_calendar_view"));
	$.post("<?php echo site_url("agency/scheduling/edit_client_schedule"); ?>",{client_id:<?php echo $client_id; ?>, id:id}).done(function(data){
		$("#editschedulediv").html(data);
		$("#editschedule").modal("show");
		loader.unblock();
	});
}

function update_client_appointement_form(){
	loader = CardLoader($("#update_client_appointement_form"));
	formData = new FormData($("#update_client_appointement_form")[0]);
	formData.append("agency_id", <?php echo $agency_id; ?>);
	formData.append("client_id", <?php echo $client_id; ?>);
	$.ajax({
		url: '<?php echo site_url("agency/scheduling/update_client_appointement_form"); ?>',
		type: 'POST',
		data: formData,
		cache: false,
		contentType: false,
		processData: false,
		success: function(e){
			loader.unblock();
			$("#caregivers_images_div").html(e);
			$("#editschedule").modal("hide");
			load_calendar(<?php echo $client_id; ?>);
			swal({
				type: 'success',
				html: 'You have updated an appointement successfully',
			});
			load_calendar(<?php echo $client_id; ?>);
		},
		xhr: function () {
			var xhr = new window.XMLHttpRequest();
			xhr.upload.addEventListener("progress", function (evt) {
				if (evt.lengthComputable) {
					var percentComplete = evt.loaded / evt.total;
					percentComplete = parseInt(percentComplete * 100);
					if(percentComplete==100){
						loader.unblock();
						$("#editschedule").modal("hide");
						load_calendar(<?php echo $client_id; ?>);
						swal({
							type: 'success',
							html: 'You have updated an appointement successfully',
						});
					}
				}
			}, false);
			return xhr;
		},
	});
};

</script> 
