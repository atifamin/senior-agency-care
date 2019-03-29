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
        <div id="caregivers_images_div" style="margin: 3% 0 0 2%;">
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
            <div class="col-md-8 offset-md-2" style="display:none;" id="recurring_month_div">
              <div class="form-group">
                <label><strong>Please define recurring months</strong></label>
                <select class="form-control select" data-fouc name="recurring_months">
                  <?php for($i=1; $i<=24; $i++): ?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?><?php if($i==1){echo " Month";}else{echo " Months";} ?></option>
                  <?php endfor; ?>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="row" style="text-align: center; margin-bottom: 20px;">
          <div class="col-md-12">
            <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in" data-spinner-size="20"> <span class="ladda-label">Save</span> </button>
            <button type="button" class="btn btn-light legitRipple" data-dismiss="modal">Cancal</button>
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
function setSwitchery(switchElement, checkedBool) {
    if((checkedBool && !switchElement.isChecked()) || (!checkedBool && switchElement.isChecked())) {
        switchElement.setPosition(true);
        switchElement.handleOnchange(true);
    }
}

$('#appointment_picker').datepicker({
	multidate: true,
	clearBtn:true,
});
new Switchery(document.querySelector('#is_recurring'));
$("#is_recurring").on("change", function(){
	if($(this).is(":checked")==false)
		$("#recurring_month_div").hide();
	
	if($(this).is(":checked")==true)
		$("#recurring_month_div").show();
});

$("#caregivers, #caregiver_id, select[name=recurring_months]").select2();

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
			location.reload();
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
	if($("input[name=in_time]").val()==$("input[name=out_time]").val()){
		swal({
			type: 'error',
			html: 'In time and Out date cannot be same',
		});
		return false;
	}
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
			var data = JSON.parse(e);
			if(data.type=="error"){
				var title = 'Followings are datetime where this caregiver is already assinged some other appointment.<br><ul>';
				var message = '<ul class="media-list">';
				$.each(data.error_detail, function(k, v){
					message += '<li class="media"><div class="row" style="width:100% !important;"><div class="col-md-6"><strong>From: </strong>'+v.from+'</div><div class="col-md-6"><strong>To: </strong>'+v.to+'</div></div></li>';
				});
				message += '</ul>';
				swal({
					type: 'error',
					title: title,
					html: message
				});
			}else{
				swal({
					type: 'success',
					html: 'You have added an appointement successfully',
				});
			}
			$("#newschedule").modal("hide");
			load_calendar(<?php echo $client_id; ?>);
		},
		xhr: function () {
			var xhr = new window.XMLHttpRequest();
			xhr.upload.addEventListener("progress", function (evt) {
				if (evt.lengthComputable) {
					var percentComplete = evt.loaded / evt.total;
					percentComplete = parseInt(percentComplete * 100);
					if(percentComplete==100){}
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

/*function update_client_appointement_form(){
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
};*/


function recurring_months(id, is_recurring){
	if(is_recurring==0){
		change_is_recurring_status(id, is_recurring, 0);
		return false;
	}
	swal({
		title: 'Select Recurring Months',
		input: 'select',
		inputOptions: {
			'': '',
			'1': '1 Month',
			'2': '2 Months',
			'3': '3 Months',
			'4': '4 Months',
			'5': '5 Months',
			'6': '6 Months',
			'7': '7 Months',
			'8': '8 Months',
			'9': '9 Months',
			'10': '10 Months',
			'11': '11 Months',
			'12': '12 Months',
			'13': '13 Months',
			'14': '14 Months',
			'15': '15 Months',
			'16': '16 Months',
			'17': '17 Months',
			'18': '18 Months',
			'19': '19 Months',
			'20': '20 Months',
			'21': '21 Months',
			'22': '22 Months',
			'23': '23 Months',
			'24': '24 Months'
		},
		inputClass: 'form-control select-single',
		showCancelButton: false,
		allowOutsideClick: false,
		inputValidator: function (value) {
			return new Promise(function (resolve) {
				resolve();
			});
		},
		inputAttributes: {
			'data-placeholder': 'Select Recurring Months'
		},
		onOpen: function() {

			// Initialize Select2
			$('.swal2-select.select-single').select2({
				minimumResultsForSearch: Infinity
			});
		}
	}).then(function (result) {
		if (result.value) {
			change_is_recurring_status(id, is_recurring, result.value);
		}
	});
}

function change_is_recurring_status(appointement_id, is_recurring, months){
	loader = CardLoader($("#full_calendar_view"));
	$.post("<?php echo site_url("agency/scheduling/change_is_recurring_status"); ?>",{client_id:<?php echo $client_id; ?>, appointement_id:appointement_id, is_recurring:is_recurring,months:months}).done(function(data){
		location.reload();
		
	});
}

function delete_appointement(appointement_id, parent_id, is_recurring){
	if(parent_id==0){
		swal({
			type: 'error',
			html: 'You cannot delete the main recurring appointment.',
		});
		return false;
	}
	var warning_text = "You won't be able to revert this!";
	if(is_recurring==1){
		warning_text = "This appointment is recurring appointment, You won't be able to revert this!";
	}
	swal({
		title: 'Are you sure?',
		text: warning_text,
		type: 'warning',
		showCancelButton: true,
		confirmButtonText: 'Yes, delete it!',
		cancelButtonText: 'No, cancel!',
		confirmButtonClass: 'btn btn-success',
		cancelButtonClass: 'btn btn-danger',
		buttonsStyling: false
	}).then(function (Confirm) {
		if(Confirm.value){
			loader = CardLoader($("#full_calendar_view"));
			$.post("<?php echo site_url("agency/scheduling/delete_appointement"); ?>",{appointement_id:appointement_id}).done(function(data){
				load_calendar(<?php echo $client_id; ?>);
				loader.unblock();
				swal(
					'Deleted!',
					'Appointement has been deleted.',
					'success'
				);
			});
		}else{
			swal(
				'Cancelled',
				'Appointement is safe :)',
				'error'
			);
		}
	});
}


function setSwitchery(switchElement, checkedBool) {
	if (checkedBool && !switchElement.checked) { // switch on if not on
		$(switchElement).trigger('click').attr("checked", "checked");
	} else if (!checkedBool && switchElement.checked) { // switch off if not off
		$(switchElement).trigger('click').removeAttr("checked");
	}
}



</script> 
