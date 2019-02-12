<?php include(APPPATH."views/agency/inc/header.php");?>
<style type="text/css">
	.navbar-nav-link.active{
		background-color: #fff !important;
	}
	.sorting_disabled{
		width: auto !important;
	}
	.dataTable thead .sorting:before{
		content: "";
	}
	.dataTable thead .sorting:after{
		content: "";
	}
	.dataTable thead .sorting_asc:after{
		content: "";
	}
	.dataTable thead{
		font-size: 12px;
	}
	.swal2-popup .swal2-content{
		text-align: left;
	}
</style>
<div class="form-group">
									<label>Value attribute is not set: <span class="text-muted">applying settings.initval</span></label>
									<input type="text" value="" class="form-control touchspin-set-value">
								</div>
<div class="row">
	<div class="col-md-12">
		<div class="card" style="padding: 10px 10px;">
			<div class="row">
				<div class="col-md-3" style="text-align: center; margin: 5px 0px;">
					<div class="btn-group">
						<a href="#" class="btn btn-light legitRipple"><i class="icon-arrow-left22"></i></a>
						<a href="#" class="btn btn-light legitRipple"><i class="icon-arrow-right22"></i></a>
						<a style="margin-left: 12px; font-size: 12px;" href="#" class="btn btn-light legitRipple">Today</a>
					</div>
				</div>
				<div class="col-md-6" style="text-align: center; margin: 5px 0px;">
					<a href="#" class="btn btn-light daterange-predefined legitRipple"><i class="icon-calendar22 mr-2"></i><span>January 10, 2019 &nbsp; - &nbsp; February 8, 2019</span></a>
				</div>
				<div class="col-md-3" style="text-align: center; margin: 5px 0px;">
					<div class="btn-group">
						<a style="font-size: 12px;" href="#" class="btn btn-light legitRipple">Month</a>
						<a style="font-size: 12px;" href="#" class="btn btn-light legitRipple">Week</a>
						<a style="font-size: 12px;" href="#" class="btn btn-light legitRipple">Day</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- =====================Clients Not Schedueled Starts======================= -->
<div class="row">
	<div class="col-md-12">

		<!-- Custom handle -->
		<div class="card">
			<div class="card-header bg-white header-elements-sm-inline" style="background-color: #fafafa!important; padding: 6px 6px 6px 6px;">
				<h6 style="font-size: 12px; color: #FEA024; margin: 0 auto; text-align: center;">Clients not scheduled<span style="margin-left: 6px;" class="badge badge-warning badge-pill">65</span></h6>
				<div class="header-elements">
					<form action="#">
						<div class="form-group-feedback form-group-feedback-left">
							<input type="text" class="form-control form-control-sm" placeholder="Search">
							<div class="form-control-feedback form-control-feedback-lg">
								<i style="font-size: 12px; color: lightgray;" class="icon-search4"></i>
							</div>
						</div>
					</form>
				</div>
			</div>

			<ul class="media-list media-list-linked">
				<!-- <li class="media font-weight-semibold border-0 py-1">Team leaders</li> -->

				<li>
					<div class="media">
						<div class="mr-3"><img src="<?php echo base_url(); ?>assets/images/placeholders/avatar.png" class="rounded-circle" width="40" height="40" alt=""></div>
						<div class="media-body">
							<div class="media-title font-weight-semibold">James Alexander</div>
							<span class="text-muted">Caregiver</span>
						</div>
						<div class="align-self-center ml-3">
							<a href="#" class="text-default" data-toggle="collapse" data-target="#james3">
								<i class="icon-menu7"></i>
							</a>
						</div>
					</div>

					<div class="collapse" id="james3">
							<!-- <div class="card-header bg-white header-elements-sm-inline" style="text-align: center; background-color: #fafafa !important;">
								<h4 style="margin: 0 auto;">Client's Profile</h4>
							</div> -->
						<div class="pb-1">
							<div class="navbar navbar-expand-xl navbar-light navbar-component rounded-top mb-0">
								<div class="navbar-collapse" id="navbar-demo-light">
									<ul class="nav navbar-nav" style="width: 100%; background-color: #fafafa!important;">
										<li class="nav-item dropdown" style="font-size: 11px;">
											<a style="padding: .875rem 0.4rem !important;" href="#client_schedule_1" class="navbar-nav-link active" data-toggle="tab">
												<i style="padding-right: 10px;" class="icon-calendar3"></i>
												Schedule
											</a>
										</li>
										<li class="nav-item dropdown" style="font-size: 11px;">
											<a style="padding: .875rem 0.4rem !important;" href="#schedule_medication_list_1" class="navbar-nav-link" data-toggle="tab">
												<i style="padding-right: 10px;" class="icon-gear"></i>
												Medication List
											</a>
										</li>
										<li class="nav-item dropdown" style="font-size: 11px;">
											<a style="padding: .875rem 0.4rem !important;" href="#schedule_dietry_needs_1" class="navbar-nav-link" data-toggle="tab">
												<i style="padding-right: 10px;" class="icon-collaboration"></i>
												Dietry Needs
											</a>
										</li>
										<li class="nav-item dropdown" style="font-size: 11px;">
											<a style="padding: .875rem 0.4rem !important;" href="#schedule_appiontment_callender_1" class="navbar-nav-link" data-toggle="tab">
												<i style="padding-right: 10px;" class="icon-users4"></i>
												Appointment Callender
											</a>
										</li>
										<li class="nav-item dropdown" style="font-size: 11px;">
											<a style="padding: .875rem 0.4rem !important;" href="#schedule_vital_reports_1" class="navbar-nav-link" data-toggle="tab">
												<i style="padding-right: 10px;" class="icon-collaboration"></i>
												Vital Reports
											</a>
										</li>
										<li class="nav-item dropdown" style="font-size: 11px;">
											<a style="padding: .875rem 0.4rem !important;" href="#schedule_notice_board_1" class="navbar-nav-link" data-toggle="tab">
												<i style="padding-right: 10px;" class="icon-collaboration"></i>
												Notice Board
											</a>
										</li>
										<li class="nav-item dropdown" style="font-size: 11px;">
											<a style="padding: .875rem 0.4rem !important;" href="#schedule_shopping_list_1" class="navbar-nav-link" data-toggle="tab">
												<i style="padding-right: 10px;" class="icon-vcard"></i>
												Shopping List
											</a>
										</li>
										<li class="nav-item dropdown" style="font-size: 11px;">
											<a style="padding: .875rem 0.4rem !important;" href="#schedule_client_bio_1" class="navbar-nav-link" data-toggle="tab">
												<i style="padding-right: 10px;" class="icon-users4"></i>
												Client Bio
											</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="card card-body border-top-0 rounded-0 rounded-bottom tab-content">
								<!-- ============Schedule CLient============== -->
								<div class="tab-pane fade active show" id="client_schedule_1">
									<form action="#">
										<div class="row" style="margin-top: 35px;">
											<div class="col-md-4">
												<div class="form-group">
													<div class="form-group form-group-feedback form-group-feedback-left">
														<input type="text" class="form-control form-control-sm" placeholder="Add client current location">
														<div class="form-control-feedback form-control-feedback-sm">
															<i class="icon-pin-alt"></i>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<button style="width: 50%;" type="submit" class="btn btn-light legitRipple">Add</button>
											</div>
										</div>
									</form>

									<div class="row" style="margin-top: 40px;">
										<div class="col-md-12">
											<a href="javascript:;" onclick="assignCaregiver()"><button style="background-color: #f5f5f5; margin-right: 15px;" type="button" class="btn alpha-primary text-primary-800 btn-icon rounded-round ml-2 legitRipple"><i style="color: #555;" class="icon-plus3"></i></button>Assign Caregiver to client case</a>
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

								<!-- ============//Schedule CLient============== -->


								<!-- ============Medication CLient============== -->
								<div class="tab-pane fade active" id="schedule_medication_list_1">
									<div class="row">
										<div class="col-md-12" style="text-align: center;">
											<a href="javascript:;" onclick="addMedication()" data-toggle="modal" data-target="#modal_add_medication"><button style="background-color: #f5f5f5; margin-right: 15px;" type="button" class="btn alpha-primary text-primary-800 btn-icon rounded-round ml-2 legitRipple"><i style="color: #555;" class="icon-plus3"></i></button>Add a new medication</a>
										</div>
										<div class="col-md-12">
											<table class="table datatable-basic">
												<thead>
													<tr>
														<th>Medication</th>
														<th><i style="margin-right: 8px;" class="icon-aid-kit"></i>Qty of Medication</th>
														<th><i style="margin-right: 8px;" class="icon-menu7"></i>Times taken a day</th>
														<th><i style="margin-right: 8px;" class="icon-alarm"></i>When to take medication</th>
														<th><i style="margin-right: 8px;" class="icon-calendar3"></i>Time of day</th>
														<th><i style="margin-right: 8px;" class="icon-alarm"></i>Reminder</th>
														<th class="text-center">Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><span class="text-muted">Add Med</span></td>
														<td><span class="text-muted">Add Qty</span></td>
														<td><span class="text-muted">Add Time</span></td>
														<td><span class="text-muted">Add when to take medicine</span></td>
														<td><span class="text-muted">Add time of day</span></td>
														<td><span class="text-muted">Set reminder</span></td>
														<td class="text-center">
															<div class="list-icons">
																<div class="dropdown">
																	<a href="#" class="list-icons-item" data-toggle="dropdown">
																		<i class="icon-menu9"></i>
																	</a>

																	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-square-right"></i> Edit Medication</a>
																		<a href="#" class="dropdown-item"><i class="icon-bin2"></i> Delete Medication</a>
																		<a href="#" class="dropdown-item"><i class="icon-square-down"></i> End Medication</a>
																		<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td><span class="text-muted">Add Med</span></td>
														<td><span class="text-muted">Add Qty</span></td>
														<td><span class="text-muted">Add Time</span></td>
														<td><span class="text-muted">Add when to take medicine</span></td>
														<td><span class="text-muted">Add time of day</span></td>
														<td><span class="text-muted">Set reminder</span></td>
														<td class="text-center">
															<div class="list-icons">
																<div class="dropdown">
																	<a href="#" class="list-icons-item" data-toggle="dropdown">
																		<i class="icon-menu9"></i>
																	</a>

																	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-square-right"></i> Edit Medication</a>
																		<a href="#" class="dropdown-item"><i class="icon-bin2"></i> Delete Medication</a>
																		<a href="#" class="dropdown-item"><i class="icon-square-down"></i> End Medication</a>
																		<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td><span class="text-muted">Add Med</span></td>
														<td><span class="text-muted">Add Qty</span></td>
														<td><span class="text-muted">Add Time</span></td>
														<td><span class="text-muted">Add when to take medicine</span></td>
														<td><span class="text-muted">Add time of day</span></td>
														<td><span class="text-muted">Set reminder</span></td>
														<td class="text-center">
															<div class="list-icons">
																<div class="dropdown">
																	<a href="#" class="list-icons-item" data-toggle="dropdown">
																		<i class="icon-menu9"></i>
																	</a>

																	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-square-right"></i> Edit Medication</a>
																		<a href="#" class="dropdown-item"><i class="icon-bin2"></i> Delete Medication</a>
																		<a href="#" class="dropdown-item"><i class="icon-square-down"></i> End Medication</a>
																		<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>

								<!-- ============//Medication CLient============== -->
								<div class="tab-pane fade active" id="schedule_dietry_needs_1">
									dietry_needs
								</div>
								<div class="tab-pane fade active" id="schedule_appiontment_callender_1">
									appiontment_callender
								</div>
								<div class="tab-pane fade active" id="schedule_vital_reports_1">
									vital_reports
								</div>
								<div class="tab-pane fade active" id="schedule_notice_board_1">
									notice_board
								</div>
								<div class="tab-pane fade active" id="schedule_shopping_list_1">
									shopping_list
								</div>
								<div class="tab-pane fade active" id="schedule_client_bio_1">
									client_bio
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<!-- /custom handle -->
		
	</div>
</div>



<!-- =====================Clients Schedueled Starts======================= -->
<div class="row">
	<div class="col-md-12">

		<!-- Custom handle -->
		<div class="card">
			<div class="card-header bg-white header-elements-sm-inline" style="background-color: #fafafa!important; padding: 6px 6px 6px 6px;">
				<h6 style="font-size: 12px; color: #4caf50; margin: 0 auto; text-align: center;">Scheduled Clients<span style="margin-left: 6px;" class="badge badge-success badge-pill">65</span></h6>
				<div class="header-elements">
					<form action="#">
						<div class="form-group-feedback form-group-feedback-left">
							<input type="text" class="form-control form-control-sm" placeholder="Search">
							<div class="form-control-feedback form-control-feedback-lg">
								<i style="font-size: 12px; color: lightgray;" class="icon-search4"></i>
							</div>
						</div>
					</form>
				</div>
			</div>

			<ul class="media-list media-list-linked">
				<!-- <li class="media font-weight-semibold border-0 py-1">Team leaders</li> -->

				<li>
					<div class="media">
						<div class="mr-3"><img src="<?php echo base_url(); ?>assets/images/placeholders/avatar.png" class="rounded-circle" width="40" height="40" alt=""></div>
						<div class="media-body">
							<div class="media-title font-weight-semibold">James Alexander</div>
							<span class="text-muted">Development</span>
						</div>
						<div class="align-self-center ml-3">
							<a href="#" class="text-default" data-toggle="collapse" data-target="#james2">
								<i class="icon-menu7"></i>
							</a>
						</div>
					</div>

					<div class="collapse" id="james2">
							<!-- <div class="card-header bg-white header-elements-sm-inline" style="text-align: center; background-color: #fafafa !important;">
								<h4 style="margin: 0 auto;">Client's Profile</h4>
							</div> -->
						<div class="pb-1">
							<div class="navbar navbar-expand-xl navbar-light navbar-component rounded-top mb-0">
								<div class="navbar-collapse" id="navbar-demo-light">
									<ul class="nav navbar-nav" style="width: 100%; background-color: #fafafa!important;">
										<li class="nav-item dropdown" style="font-size: 11px;">
											<a style="padding: .875rem 0.4rem !important;" href="#client_schedule" class="navbar-nav-link active" data-toggle="tab">
												<i style="padding-right: 10px;" class="icon-calendar3"></i>
												Schedule
											</a>
										</li>
										<li class="nav-item dropdown" style="font-size: 11px;">
											<a style="padding: .875rem 0.4rem !important;" href="#schedule_medication_list" class="navbar-nav-link" data-toggle="tab">
												<i style="padding-right: 10px;" class="icon-gear"></i>
												Medication List
											</a>
										</li>
										<li class="nav-item dropdown" style="font-size: 11px;">
											<a style="padding: .875rem 0.4rem !important;" href="#schedule_dietry_needs" class="navbar-nav-link" data-toggle="tab">
												<i style="padding-right: 10px;" class="icon-collaboration"></i>
												Dietry Needs
											</a>
										</li>
										<li class="nav-item dropdown" style="font-size: 11px;">
											<a style="padding: .875rem 0.4rem !important;" href="#schedule_appiontment_callender" class="navbar-nav-link" data-toggle="tab">
												<i style="padding-right: 10px;" class="icon-users4"></i>
												Appointment Callender
											</a>
										</li>
										<li class="nav-item dropdown" style="font-size: 11px;">
											<a style="padding: .875rem 0.4rem !important;" href="#schedule_vital_reports" class="navbar-nav-link" data-toggle="tab">
												<i style="padding-right: 10px;" class="icon-collaboration"></i>
												Vital Reports
											</a>
										</li>
										<li class="nav-item dropdown" style="font-size: 11px;">
											<a style="padding: .875rem 0.4rem !important;" href="#schedule_notice_board" class="navbar-nav-link" data-toggle="tab">
												<i style="padding-right: 10px;" class="icon-collaboration"></i>
												Notice Board
											</a>
										</li>
										<li class="nav-item dropdown" style="font-size: 11px;">
											<a style="padding: .875rem 0.4rem !important;" href="#schedule_shopping_list" class="navbar-nav-link" data-toggle="tab">
												<i style="padding-right: 10px;" class="icon-vcard"></i>
												Shopping List
											</a>
										</li>
										<li class="nav-item dropdown" style="font-size: 11px;">
											<a style="padding: .875rem 0.4rem !important;" href="#schedule_client_bio" class="navbar-nav-link" data-toggle="tab">
												<i style="padding-right: 10px;" class="icon-users4"></i>
												Client Bio
											</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="card card-body border-top-0 rounded-0 rounded-bottom tab-content">
								<div class="tab-pane fade active show" id="client_schedule">
									client_schedule.
								</div>
								<div class="tab-pane fade active" id="schedule_medication_list">
									medication_list
								</div>
								<div class="tab-pane fade active" id="schedule_dietry_needs">
									dietry_needs
								</div>
								<div class="tab-pane fade active" id="schedule_appiontment_callender">
									appiontment_callender
								</div>
								<div class="tab-pane fade active" id="schedule_vital_reports">
									vital_reports
								</div>
								<div class="tab-pane fade active" id="schedule_notice_board">
									notice_board
								</div>
								<div class="tab-pane fade active" id="schedule_shopping_list">
									shopping_list
								</div>
								<div class="tab-pane fade active" id="schedule_client_bio">
									client_bio
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<!-- /custom handle -->
		
	</div>
</div>




<div id="modal_add_medication" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="margin: 0 auto;">Add client medication</h5>
      </div>
      <form id="add_client_medication_form">
        <div class="modal-body">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in" data-spinner-size="20"> <span class="ladda-label">Done</span> </button> 
        </div>
      </form>
    </div>
  </div>
</div>



	<script src="<?php echo base_url(); ?>/assets/js/plugins/extensions/jquery_ui/touch.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/plugins/ui/moment/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/plugins/pickers/daterangepicker.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/plugins/pickers/anytime.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/plugins/pickers/pickadate/picker.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/plugins/pickers/pickadate/picker.date.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/plugins/pickers/pickadate/picker.time.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/plugins/pickers/pickadate/legacy.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/plugins/notifications/jgrowl.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/demo_pages/picker_date.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/demo_pages/components_collapsible.js"></script>
	<!-- /theme JS files -->
	<script src="<?php echo base_url(); ?>/assets/js/plugins/ui/fullcalendar/fullcalendar.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/demo_pages/fullcalendar_basic.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/demo_pages/datatables_basic.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/demo_pages/datatables_responsive.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/plugins/forms/inputs/touchspin.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/demo_pages/form_input_groups.js"></script>
	<!-- /theme JS files -->
<?php include(APPPATH."views/agency/inc/footer.php");?>

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
</script>