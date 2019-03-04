<?php include(APPPATH."views/family/inc/header.php");?>

<style type="text/css">
	.datatable-scroll-wrap{
		margin-bottom: 40px;
	}
</style>

<div class="card">
	<div class="card-header header-elements-inline border-bottom" style="padding-bottom: 0px;">
		<h5>Notice Board</h5>
	    <div class="header-elements">
			<div class="list-icons">
        		<a class="list-icons-item" data-action="reload"></a>
        	</div>
    	</div>
	</div>
	<div class="row" style=" padding-top: 20px;">
		<div class="col-md-12" style="text-align: center;">
			<label>Date Range: </label>
			<a href="#" class="btn btn-light daterange-predefined legitRipple" style=" font-size: 11px; background-color: #fff !important;"><i class="icon-calendar22 mr-2"></i><span>January 10, 2019 &nbsp; - &nbsp; February 8, 2019</span></a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table datatable-responsive" id="notice_board_datatable_1" style="border: none !important;">
				<thead style="border: none !important;">
					<tr style="border: none !important;">
						<th style="border: none !important;">
							<ul class="nav nav-tabs nav-tabs-bottom">
								<li class="nav-item" style="padding-right: 30px;"><a href="#client_latest_updates_1" class="nav-link active" data-toggle="tab">Latest Updates</a></li>
								<li class="nav-item" style="padding-right: 30px;"><a href="#client_shifts_1" class="nav-link" data-toggle="tab">Shifts</a></li>
								<li class="nav-item" style="padding-right: 30px;"><a href="#client_notices_1" class="nav-link" data-toggle="tab">Client Notices</a></li>
								<li class="nav-item" style="padding-right: 30px;"><a href="#timesheet_payroll_1" class="nav-link" data-toggle="tab">Timesheet & Payroll</a></li>
								<li class="nav-item"><a href="#client_other_1" class="nav-link" data-toggle="tab">Other</a></li>
							</ul>
						</th>
					</tr>
				</thead>
				<tbody style="border: none !important;">
					<tr style="border: none !important;">
						<td style="border: none !important; padding: 0;">
							<div class="tab-content">
								<div class="tab-pane fade show active" id="client_latest_updates_1">
									<ul class="media-list">
										<li class="media" style="border: none !important;">
											<div class="mr-3">
												<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
											</div>

											<div class="media-body">
												<a href="#">David Liner</a> requested refund for a double card charge.
												<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
											</div>
										</li>
										<li class="media" style="border: none !important;">
											<div class="mr-3">
												<a href="#" class="btn btn-outline bg-pink-400 border-pink-400 text-pink-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-infinite"></i></a>
											</div>

											<div class="media-body">
												<a href="#">David Liner</a> requested refund for a double card charge.
												<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
											</div>
										</li>
										<li class="media" style="border: none !important;">
											<div class="mr-3">
												<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-cash3"></i></a>
											</div>

											<div class="media-body">
												<a href="#">David Liner</a> requested refund for a double card charge.
												<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
											</div>
										</li>
										<li class="media" style="border: none !important;">
											<div class="mr-3">
												<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-cash3"></i></a>
											</div>

											<div class="media-body">
												<a href="#">David Liner</a> requested refund for a double card charge.
												<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
											</div>
										</li>
										<li class="media" style="border: none !important;">
											<div class="mr-3">
												<a href="#" class="btn btn-outline bg-success-400 border-success-400 text-success-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-checkmark3"></i></a>
											</div>

											<div class="media-body">
												<a href="#">David Liner</a> requested refund for a double card charge.
												<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="tab-pane fade" id="client_shifts_1">
									<ul class="media-list">
										<li class="media" style="border: none !important;">
											<div class="mr-3">
												<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
											</div>

											<div class="media-body">
												<a href="#">David Liner</a> requested refund for a double card charge.
												<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
											</div>
										</li>
										<li class="media" style="border: none !important;">
											<div class="mr-3">
												<a href="#" class="btn btn-outline bg-pink-400 border-pink-400 text-pink-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-infinite"></i></a>
											</div>

											<div class="media-body">
												<a href="#">David Liner</a> requested refund for a double card charge.
												<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
											</div>
										</li>
										<li class="media" style="border: none !important;">
											<div class="mr-3">
												<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-cash3"></i></a>
											</div>

											<div class="media-body">
												<a href="#">David Liner</a> requested refund for a double card charge.
												<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
											</div>
										</li>
										<li class="media" style="border: none !important;">
											<div class="mr-3">
												<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-cash3"></i></a>
											</div>

											<div class="media-body">
												<a href="#">David Liner</a> requested refund for a double card charge.
												<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
											</div>
										</li>
										<li class="media" style="border: none !important;">
											<div class="mr-3">
												<a href="#" class="btn btn-outline bg-success-400 border-success-400 text-success-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-checkmark3"></i></a>
											</div>

											<div class="media-body">
												<a href="#">David Liner</a> requested refund for a double card charge.
												<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="tab-pane fade" id="client_notices_1">
									<ul class="media-list">
										<li class="media" style="border: none !important;">
											<div class="mr-3">
												<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
											</div>

											<div class="media-body">
												<a href="#">David Liner</a> requested refund for a double card charge.
												<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
											</div>
										</li>
										<li class="media" style="border: none !important;">
											<div class="mr-3">
												<a href="#" class="btn btn-outline bg-pink-400 border-pink-400 text-pink-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-infinite"></i></a>
											</div>

											<div class="media-body">
												<a href="#">David Liner</a> requested refund for a double card charge.
												<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
											</div>
										</li>
										<li class="media" style="border: none !important;">
											<div class="mr-3">
												<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-cash3"></i></a>
											</div>

											<div class="media-body">
												<a href="#">David Liner</a> requested refund for a double card charge.
												<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
											</div>
										</li>
										<li class="media" style="border: none !important;">
											<div class="mr-3">
												<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-cash3"></i></a>
											</div>

											<div class="media-body">
												<a href="#">David Liner</a> requested refund for a double card charge.
												<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
											</div>
										</li>
										<li class="media" style="border: none !important;">
											<div class="mr-3">
												<a href="#" class="btn btn-outline bg-success-400 border-success-400 text-success-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-checkmark3"></i></a>
											</div>

											<div class="media-body">
												<a href="#">David Liner</a> requested refund for a double card charge.
												<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="tab-pane fade" id="timesheet_payroll_1">
									<ul class="media-list">
										<li class="media" style="border: none !important;">
											<div class="mr-3">
												<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
											</div>

											<div class="media-body">
												<a href="#">David Liner</a> requested refund for a double card charge.
												<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
											</div>
										</li>
										<li class="media" style="border: none !important;">
											<div class="mr-3">
												<a href="#" class="btn btn-outline bg-pink-400 border-pink-400 text-pink-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-infinite"></i></a>
											</div>

											<div class="media-body">
												<a href="#">David Liner</a> requested refund for a double card charge.
												<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
											</div>
										</li>
										<li class="media" style="border: none !important;">
											<div class="mr-3">
												<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-cash3"></i></a>
											</div>

											<div class="media-body">
												<a href="#">David Liner</a> requested refund for a double card charge.
												<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
											</div>
										</li>
										<li class="media" style="border: none !important;">
											<div class="mr-3">
												<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-cash3"></i></a>
											</div>

											<div class="media-body">
												<a href="#">David Liner</a> requested refund for a double card charge.
												<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
											</div>
										</li>
										<li class="media" style="border: none !important;">
											<div class="mr-3">
												<a href="#" class="btn btn-outline bg-success-400 border-success-400 text-success-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-checkmark3"></i></a>
											</div>

											<div class="media-body">
												<a href="#">David Liner</a> requested refund for a double card charge.
												<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="tab-pane fade" id="client_other_1">
									<ul class="media-list">
										<li class="media" style="border: none !important;">
											<div class="mr-3">
												<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
											</div>

											<div class="media-body">
												<a href="#">David Liner</a> requested refund for a double card charge.
												<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
											</div>
										</li>
										<li class="media" style="border: none !important;">
											<div class="mr-3">
												<a href="#" class="btn btn-outline bg-pink-400 border-pink-400 text-pink-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-infinite"></i></a>
											</div>

											<div class="media-body">
												<a href="#">David Liner</a> requested refund for a double card charge.
												<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
											</div>
										</li>
										<li class="media" style="border: none !important;">
											<div class="mr-3">
												<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-cash3"></i></a>
											</div>

											<div class="media-body">
												<a href="#">David Liner</a> requested refund for a double card charge.
												<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
											</div>
										</li>
										<li class="media" style="border: none !important;">
											<div class="mr-3">
												<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-cash3"></i></a>
											</div>

											<div class="media-body">
												<a href="#">David Liner</a> requested refund for a double card charge.
												<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
											</div>
										</li>
										<li class="media" style="border: none !important;">
											<div class="mr-3">
												<a href="#" class="btn btn-outline bg-success-400 border-success-400 text-success-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-checkmark3"></i></a>
											</div>

											<div class="media-body">
												<a href="#">David Liner</a> requested refund for a double card charge.
												<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>


	<script src="<?php echo base_url(); ?>assets/js/plugins/extensions/jquery_ui/touch.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/ui/moment/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/daterangepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/anytime.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.date.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.time.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/legacy.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/notifications/jgrowl.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo_pages/picker_date.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo_pages/components_collapsible.js"></script>

	<script src="<?php echo base_url(); ?>assets/js/plugins/ui/fullcalendar/fullcalendar.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo_pages/fullcalendar_basic.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo_pages/datatables_basic.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo_pages/datatables_responsive.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/forms/styling/switch.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/forms/inputs/touchspin.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_input_groups.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/forms/tags/tagsinput.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/forms/tags/tokenfield.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_tags_input.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/ui/prism.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_checkboxes_radios.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/uploaders/fileinput/plugins/purify.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/uploaders/fileinput/fileinput.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo_pages/uploader_bootstrap.js"></script>

<?php include(APPPATH."views/family/inc/footer.php");?>

<script type="text/javascript">
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

	function addMedication(){
		
	}


$('#appointment_datatable, #appointment_datatable_1, #shopping_list_datatable, #shopping_list_datatable_1, #client_vital_datatable, #client_vital_datatable_1').DataTable({
    columnDefs: [{ 
        orderable: true,
        targets: [ 3 ]
    }],
    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
    language: {
        search: '<span>Filter:</span> _INPUT_',
        searchPlaceholder: 'Type to filter...',
        lengthMenu: '<span>Show:</span> _MENU_',
        paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
    }
});

$('#notice_board_datatable, #notice_board_datatable_1').DataTable({
	autoWidth: false,
    responsive: true,
    columnDefs: [{ 
        orderable: false
    }],
    dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
    language: {
        search: '<span>Filter:</span> _INPUT_',
        searchPlaceholder: 'Type to filter...',
        lengthMenu: '<span>Show:</span> _MENU_',
        paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
    }
});

function deleteClientBio(){
	swal({
        title: 'Are you sure?',
        text: 'You will not be able to recover clients bio data!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!'
    });
}

$('#medication_reminder_checkbox').click(function(){
    if($(this).prop("checked") == true){
    	$("#medication_set_reminder").css("display","block");
    }
    else if($(this).prop("checked") == false){
        $("#medication_set_reminder").css("display","none");
    }
});

$('#appointment_reminder_checkbox').click(function(){
    if($(this).prop("checked") == true){
    	$("#appointment_set_reminder").css("display","block");
    }
    else if($(this).prop("checked") == false){
        $("#appointment_set_reminder").css("display","none");
    }
});


function setTherapyType(){
	var type = $("#therapy_type").val();
	if(type == "doctor_appointment"){
		$("#therapy_doc_name").css("display","block");
	}else{
		$("#therapy_doc_name").css("display","none");
	}
}
</script>