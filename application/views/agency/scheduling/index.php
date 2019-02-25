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
	.token-input{
		min-width: 100% !important;
	}
	.dataTable thead .sorting_desc:after{
		content: "";
	}
	.navbar-nav-link.active{
		background-color: #E6E6E6 !important;
	}
</style>
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
				 <li class="media font-weight-semibold border-0 py-1">Team leaders</li> 

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
								<div class="tab-pane fade" id="schedule_medication_list_1">
									<div class="row">
										<div class="col-md-12" style="text-align: center;">
											<a href="javascript:;" onclick="addMedication()" data-toggle="modal" data-target="#modal_add_medication">Add a new medication<button style="background-color: #f5f5f5; margin-left: 15px;" type="button" class="btn alpha-primary text-primary-800 btn-icon rounded-round ml-2 legitRipple"><i style="color: #555;" class="icon-plus3"></i></button></a>
										</div>
									</div>
									<div class="row">
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


								<!-- ============//Dietry Needs CLient============== -->

								<div class="tab-pane fade" id="schedule_dietry_needs_1">
									<form>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group pt-2">
													<label class="d-block font-weight-semibold">Select client's dietry requirements</label>
													<div class="custom-control custom-radio">
														<input type="radio" class="custom-control-input" name="client_dietry_requirements" id="regular_diet" checked="">
														<label class="custom-control-label" for="regular_diet">Regular diet</label>
													</div>

													<div class="custom-control custom-radio">
														<input type="radio" class="custom-control-input" name="client_dietry_requirements" id="mechanical_diet">
														<label class="custom-control-label" for="mechanical_diet">Mechanical diet</label>
													</div>

													<div class="custom-control custom-radio">
														<input type="radio" class="custom-control-input" name="client_dietry_requirements" id="pure_diet">
														<label class="custom-control-label" for="pure_diet">Puree diet</label>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group pt-2">
													<label class="d-block font-weight-semibold">Select client's dietry requirements</label>
													<div class="custom-control custom-radio">
														<input type="radio" class="custom-control-input" name="client_fluids_requirements" id="thin_liquids" checked="">
														<label class="custom-control-label" for="thin_liquids">Thin liquids</label>
													</div>

													<div class="custom-control custom-radio">
														<input type="radio" class="custom-control-input" name="client_fluids_requirements" id="honey_thick_liquids">
														<label class="custom-control-label" for="honey_thick_liquids">Honey thick liquids</label>
													</div>

													<div class="custom-control custom-radio">
														<input type="radio" class="custom-control-input" name="client_fluids_requirements" id="nector_thick_liquids">
														<label class="custom-control-label" for="nector_thick_liquids">Nector thick liquids</label>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="d-block font-weight-semibold">List client's known allergies</label>
													<input style="width: 100%;" type="text" class="form-control tokenfield" value="" placeholder="Add multiple client's allergies(with comma seperated)" data-fouc>
												</div>
											</div>
										</div>

										<div style = "text-align: right;"><button type="button" class="btn btn-primary legitRipple">Save<i style="margin-left: 8px;" class="icon-arrow-right14"></i></button>
										</div>

									</form>

								</div>
								<!-- ============//Dietry Needs CLient============== -->


								<!-- ============//Appoitment Callender CLient============== -->
								<div class="tab-pane fade" id="schedule_appiontment_callender_1">
									<div class="row">
										<div class="col-md-12" style="text-align: center;">
											<a href="javascript:;" data-toggle="modal" data-target="#modal_new_appointment">Create new appointment<button style="background-color: #f5f5f5; margin-left: 15px;" type="button" class="btn alpha-primary text-primary-800 btn-icon rounded-round ml-2 legitRipple"><i style="color: #555;" class="icon-plus3"></i></button></a>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<table class="table datatable-basic" id="appointment_datatable">
												<thead>
													<tr>
														<th>Therapy Type</th>
														<th>Appointment Date</th>
														<th>Location</th>
														<th>Set Reminder</th>
														<th>Set to Monthly</th>
														<th class="text-center">Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Doctor's appointment<br><span class="text-muted">Dr. Marvin Cobler</span></td>
														<td><span class="text-muted">Appointment date</span></td>
														<td><span class="text-muted">Location</span></td>
														<td><span class="text-muted">Set reminder</span></td>
														<td>
															<input type="checkbox" data-on-text="On" data-off-text="Off" class="form-check-input-switch" data-size="small">
														</td>
														<td class="text-center">
															<div class="list-icons">
																<div class="dropdown">
																	<a href="#" class="list-icons-item" data-toggle="dropdown">
																		<i class="icon-menu9"></i>
																	</a>

																	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-square-right"></i> Edit Appointment</a>
																		<a href="#" class="dropdown-item"><i class="icon-bin2"></i> Delete Appointment</a>
																		<a href="#" class="dropdown-item"><i class="icon-square-down"></i> End Appointment</a>
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

								<!-- ============//Appoitment Callender CLient============== -->

								<!-- ============//Vital Reporst CLient============== -->
								<div class="tab-pane fade" id="schedule_vital_reports_1">
									<div class="row">
										<div class="col-md-12" style="text-align: center;">
											<a href="javascript:;" data-toggle="modal" data-target="#modal_clients_vital">Add new client vitals<button style="background-color: #f5f5f5; margin-left: 15px;" type="button" class="btn alpha-primary text-primary-800 btn-icon rounded-round ml-2 legitRipple"><i style="color: #555;" class="icon-plus3"></i></button></a>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<table class="table datatable-basic" id="client_vital_datatable">
												<thead>
													<tr>
														<th><i style="margin-right: 8px;" class="icon-man"></i>Blood Pressure</th>
														<th><i style="margin-right: 8px; color: red;" class="icon-heart6"></i>Heart Rate</th>
														<!-- <th><i style="margin-right: 8px; color: red;" class="icon-pulse2"></i>Pulse</th> -->
														<th><i style="margin-right: 8px; color: green;" class="icon-stats-growth2"></i>Temperature</th>
														<th><i style="margin-right: 8px;" class="icon-calendar22"></i>Date Taken</th>
														<th class="text-center">Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><span class="text-muted">Blood Pressure</span></td>
														<td><span class="text-muted">Heart Rate</span></td>
														<!-- <td><span class="text-muted">Pulse</span></td> -->
														<td><span class="text-muted">Temperature</span></td>
														<td><span class="text-muted">Date taken</span></td>
														<td class="text-center">
															<div class="list-icons">
																<div class="dropdown">
																	<a href="#" class="list-icons-item" data-toggle="dropdown">
																		<i class="icon-menu9"></i>
																	</a>

																	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-square-right"></i> Edit Vitals</a>
																		<a href="#" class="dropdown-item"><i class="icon-bin2"></i> Delete Vitals</a>
																		<a href="#" class="dropdown-item"><i class="icon-square-down"></i> End Vitals</a>
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

								<!-- ============//Vital Reporst CLient============== -->


								<!-- ============//Notice Boart CLient============== -->

								<div class="tab-pane fade" id="schedule_notice_board_1">
									<div class="row">
										<div class="col-md-12" style="text-align: center;">
											<label>Date Range: </label>
											<a href="#" class="btn btn-light daterange-predefined legitRipple" style=" font-size: 11px; background-color: #fff !important;"><i class="icon-calendar22 mr-2"></i><span>January 10, 2019 &nbsp; - &nbsp; February 8, 2019</span></a>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<table class="table datatable-responsive" id="notice_board_datatable" style="border: none !important;">
												<thead style="border: none !important;">
													<tr style="border: none !important;">
														<th style="border: none !important;">
															<ul class="nav nav-tabs nav-tabs-bottom">
																<li class="nav-item" style="padding-right: 30px;"><a href="#client_latest_updates" class="nav-link active" data-toggle="tab">Latest Updates</a></li>
																<li class="nav-item" style="padding-right: 30px;"><a href="#client_shifts" class="nav-link" data-toggle="tab">Shifts</a></li>
																<li class="nav-item" style="padding-right: 30px;"><a href="#client_notices" class="nav-link" data-toggle="tab">Client Notices</a></li>
																<li class="nav-item" style="padding-right: 30px;"><a href="#timesheet_payroll" class="nav-link" data-toggle="tab">Timesheet & Payroll</a></li>
																<li class="nav-item"><a href="#client_other" class="nav-link" data-toggle="tab">Other</a></li>
															</ul>
														</th>
													</tr>
												</thead>
												<tbody style="border: none !important;">
													<tr style="border: none !important;">
														<td style="border: none !important; padding: 0;">
															<div class="tab-content">
																<div class="tab-pane fade show active" id="client_latest_updates">
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
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
																			</div>

																			<div class="media-body">
																				<a href="#">David Liner</a> requested refund for a double card charge.
																				<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
																			</div>
																		</li>
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
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
																			</div>

																			<div class="media-body">
																				<a href="#">David Liner</a> requested refund for a double card charge.
																				<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
																			</div>
																		</li>
																		<li class="media" style="border: none !important;">
																			<div class="mr-3">
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
																			</div>

																			<div class="media-body">
																				<a href="#">David Liner</a> requested refund for a double card charge.
																				<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
																			</div>
																		</li>
																	</ul>
																</div>

																<div class="tab-pane fade" id="client_shifts">
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
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
																			</div>

																			<div class="media-body">
																				<a href="#">David Liner</a> requested refund for a double card charge.
																				<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
																			</div>
																		</li>
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
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
																			</div>

																			<div class="media-body">
																				<a href="#">David Liner</a> requested refund for a double card charge.
																				<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
																			</div>
																		</li>
																		<li class="media" style="border: none !important;">
																			<div class="mr-3">
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
																			</div>

																			<div class="media-body">
																				<a href="#">David Liner</a> requested refund for a double card charge.
																				<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
																			</div>
																		</li>
																	</ul>
																</div>
																<div class="tab-pane fade" id="client_notices">
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
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
																			</div>

																			<div class="media-body">
																				<a href="#">David Liner</a> requested refund for a double card charge.
																				<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
																			</div>
																		</li>
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
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
																			</div>

																			<div class="media-body">
																				<a href="#">David Liner</a> requested refund for a double card charge.
																				<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
																			</div>
																		</li>
																		<li class="media" style="border: none !important;">
																			<div class="mr-3">
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
																			</div>

																			<div class="media-body">
																				<a href="#">David Liner</a> requested refund for a double card charge.
																				<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
																			</div>
																		</li>
																	</ul>
																</div>
																<div class="tab-pane fade" id="timesheet_payroll">
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
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
																			</div>

																			<div class="media-body">
																				<a href="#">David Liner</a> requested refund for a double card charge.
																				<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
																			</div>
																		</li>
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
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
																			</div>

																			<div class="media-body">
																				<a href="#">David Liner</a> requested refund for a double card charge.
																				<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
																			</div>
																		</li>
																		<li class="media" style="border: none !important;">
																			<div class="mr-3">
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
																			</div>

																			<div class="media-body">
																				<a href="#">David Liner</a> requested refund for a double card charge.
																				<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
																			</div>
																		</li>
																	</ul>
																</div>
																<div class="tab-pane fade" id="client_other">
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
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
																			</div>

																			<div class="media-body">
																				<a href="#">David Liner</a> requested refund for a double card charge.
																				<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
																			</div>
																		</li>
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
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
																			</div>

																			<div class="media-body">
																				<a href="#">David Liner</a> requested refund for a double card charge.
																				<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
																			</div>
																		</li>
																		<li class="media" style="border: none !important;">
																			<div class="mr-3">
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
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

								<!-- ============//Notice Boart CLient============== -->
								<div class="tab-pane fade" id="schedule_shopping_list_1">
									<div class="row">
										<div class="col-md-12" style="text-align: center;">
											<a href="javascript:;" data-toggle="modal" data-target="#modal_shopping_list">Create new shopping list<button style="background-color: #f5f5f5; margin-left: 15px;" type="button" class="btn alpha-primary text-primary-800 btn-icon rounded-round ml-2 legitRipple"><i style="color: #555;" class="icon-plus3"></i></button></a>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<table class="table datatable-basic" id="shopping_list_datatable">
												<thead>
													<tr>
														<th>Date Created</th>
														<th>Status</th>
														<th>Shopping Reminder</th>
														<th>Reciepts</th>
														<th class="text-center">Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><span class="text-muted">May 03, 2019</span></td>
														<td><span class="text-muted">Complete</span></td>
														<td><span class="text-muted">10 Minutes before</span></td>
														<td><a href="#"><i style="font-size: 20px;" class="icon-file-word"></i></a></td>
														<td class="text-center">
															<div class="list-icons">
																<div class="dropdown">
																	<a href="#" class="list-icons-item" data-toggle="dropdown">
																		<i class="icon-menu9"></i>
																	</a>

																	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-square-right"></i> Edit shopping list</a>
																		<a href="#" class="dropdown-item"><i class="icon-bin2"></i> Delete shopping list</a>
																		<a href="#" class="dropdown-item"><i class="icon-square-down"></i> End shopping list</a>
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
								<div class="tab-pane fade" id="schedule_client_bio_1">
									<div class="row">
										<div class="col-md-12" style="margin: 20px 0px 10px 0px;">
											<p>Client brief bio</p>
										</div>
										<div class="col-md-12" style="margin-top: 5px;">
											<p><strong>Name:  <span>Mr Thomas Crowe</span></strong></p>
										</div>
										<div class="col-md-12" style="margin-top: 5px;">
											<p><strong>Profession:  <span>Doctor</span></strong></p>
										</div>
										<div class="col-md-12" style="margin-top: 5px;">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
										</div>
										<div class="col-md-12" style="margin-top: 5px;">
											<p><strong>Client's typical daily routine:</strong></p>
										</div>
										<div class="col-md-12" style="margin-top: 5px;">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
										</div>
										<div class="col-md-12" style="margin-top: 5px;">
											<p><strong>Likes:</strong></p>
										</div>
										<div class="col-md-12" style="margin-top: 5px;">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
										</div>
										<div class="col-md-12" style="margin-top: 5px;">
											<p><strong>Dislikes:</strong></p>
										</div>
										<div class="col-md-12" style="margin-top: 5px;">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
										</div>
										<div class="col-md-12" style="margin-top: 5px;">
											<p><strong>Hobbies:</strong></p>
										</div>
										<div class="col-md-12" style="margin-top: 5px;">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
										</div>
										<div class="col-md-12" style="margin-top: 5px;">
											<p><strong>Favourite Music:</strong></p>
										</div>
										<div class="col-md-12" style="margin-top: 5px;">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
										</div>
										<div class="col-md-12" style="text-align: right; margin-top: 20px;">
											<a href="javascript:;" data-toggle="modal" data-target="#modal_clients_bio" style="margin-right: 10px;"><i style="color: #555;" class="icon-pencil5"></i></a>
											<a href="javascript:;" onclick="deleteClientBio()"><i style="color: #555;" class="icon-bin"></i></a>
										</div>
									</div>
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
								<!-- ===============Medication List================== -->
								<div class="tab-pane fade" id="schedule_medication_list">
									<div class="row">
										<div class="col-md-12" style="text-align: center;">
											<a href="javascript:;" onclick="addMedication()" data-toggle="modal" data-target="#modal_add_medication">Add a new medication<button style="background-color: #f5f5f5; margin-left: 15px;" type="button" class="btn alpha-primary text-primary-800 btn-icon rounded-round ml-2 legitRipple"><i style="color: #555;" class="icon-plus3"></i></button></a>
										</div>
									</div>
									<div class="row">
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
								<!-- ===============Medication List================== -->

								<!-- ===============Dietry Needs List================== -->
								<div class="tab-pane fade" id="schedule_dietry_needs">
									<form>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group pt-2">
													<label class="d-block font-weight-semibold">Select client's dietry requirements</label>
													<div class="custom-control custom-radio">
														<input type="radio" class="custom-control-input" name="client_dietry_requirements_1" id="regular_diet_1" checked="">
														<label class="custom-control-label" for="regular_diet_1">Regular diet</label>
													</div>

													<div class="custom-control custom-radio">
														<input type="radio" class="custom-control-input" name="client_dietry_requirements_1" id="mechanical_diet_1">
														<label class="custom-control-label" for="mechanical_diet_1">Mechanical diet</label>
													</div>

													<div class="custom-control custom-radio">
														<input type="radio" class="custom-control-input" name="client_dietry_requirements_1" id="pure_diet_1">
														<label class="custom-control-label" for="pure_diet_1">Puree diet</label>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group pt-2">
													<label class="d-block font-weight-semibold">Select client's dietry requirements</label>
													<div class="custom-control custom-radio">
														<input type="radio" class="custom-control-input" name="client_fluids_requirements_1" id="thin_liquids_1" checked="">
														<label class="custom-control-label" for="thin_liquids_1">Thin liquids</label>
													</div>

													<div class="custom-control custom-radio">
														<input type="radio" class="custom-control-input" name="client_fluids_requirements_1" id="honey_thick_liquids_1">
														<label class="custom-control-label" for="honey_thick_liquids_1">Honey thick liquids</label>
													</div>

													<div class="custom-control custom-radio">
														<input type="radio" class="custom-control-input" name="client_fluids_requirements_1" id="nector_thick_liquids_1">
														<label class="custom-control-label" for="nector_thick_liquids_1">Nector thick liquids</label>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="d-block font-weight-semibold">List client's known allergies</label>
													<input style="width: 100%;" type="text" class="form-control tokenfield" value="" placeholder="Add multiple client's allergies(with comma seperated)" data-fouc>
												</div>
											</div>
										</div>

										<div style = "text-align: right;"><button type="button" class="btn btn-primary legitRipple">Save<i style="margin-left: 8px;" class="icon-arrow-right14"></i></button>
										</div>

									</form>
								</div>
								<!-- ================//Dietry Needs================ -->


								<!-- ================//Appointment Calender================ -->
								<div class="tab-pane fade" id="schedule_appiontment_callender">
									<div class="row">
										<div class="col-md-12" style="text-align: center;">
											<a href="javascript:;" data-toggle="modal" data-target="#modal_new_appointment">Create new appointment<button style="background-color: #f5f5f5; margin-left: 15px;" type="button" class="btn alpha-primary text-primary-800 btn-icon rounded-round ml-2 legitRipple"><i style="color: #555;" class="icon-plus3"></i></button></a>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<table class="table datatable-basic" id="appointment_datatable_1">
												<thead>
													<tr>
														<th>Therapy Type</th>
														<th>Appointment Date</th>
														<th>Location</th>
														<th>Set Reminder</th>
														<th>Set to Monthly</th>
														<th class="text-center">Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Doctor's appointment<br><span class="text-muted">Dr. Marvin Cobler</span></td>
														<td><span class="text-muted">Appointment date</span></td>
														<td><span class="text-muted">Location</span></td>
														<td><span class="text-muted">Set reminder</span></td>
														<td>
															<input type="checkbox" data-on-text="On" data-off-text="Off" class="form-check-input-switch" data-size="small">
														</td>
														<td class="text-center">
															<div class="list-icons">
																<div class="dropdown">
																	<a href="#" class="list-icons-item" data-toggle="dropdown">
																		<i class="icon-menu9"></i>
																	</a>

																	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-square-right"></i> Edit Appointment</a>
																		<a href="#" class="dropdown-item"><i class="icon-bin2"></i> Delete Appointment</a>
																		<a href="#" class="dropdown-item"><i class="icon-square-down"></i> End Appointment</a>
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

								<!-- ================//Appointment Calender================ -->


								<!-- ================//Vital Reports================ -->
								<div class="tab-pane fade" id="schedule_vital_reports">
									<div class="row">
										<div class="col-md-12" style="text-align: center;">
											<a href="javascript:;" data-toggle="modal" data-target="#modal_clients_vital">Add new client vitals<button style="background-color: #f5f5f5; margin-left: 15px;" type="button" class="btn alpha-primary text-primary-800 btn-icon rounded-round ml-2 legitRipple"><i style="color: #555;" class="icon-plus3"></i></button></a>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<table class="table datatable-basic" id="client_vital_datatable_1">
												<thead>
													<tr>
														<th><i style="margin-right: 8px;" class="icon-man"></i>Blood Pressure</th>
														<th><i style="margin-right: 8px; color: red;" class="icon-heart6"></i>Heart Rate</th>
														<!-- <th><i style="margin-right: 8px; color: red;" class="icon-pulse2"></i>Pulse</th> -->
														<th><i style="margin-right: 8px; color: green;" class="icon-stats-growth2"></i>Temperature</th>
														<th><i style="margin-right: 8px;" class="icon-calendar22"></i>Date Taken</th>
														<th class="text-center">Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><span class="text-muted">Blood Pressure</span></td>
														<td><span class="text-muted">Heart Rate</span></td>
														<!-- <td><span class="text-muted">Pulse</span></td> -->
														<td><span class="text-muted">Temperature</span></td>
														<td><span class="text-muted">Date taken</span></td>
														<td class="text-center">
															<div class="list-icons">
																<div class="dropdown">
																	<a href="#" class="list-icons-item" data-toggle="dropdown">
																		<i class="icon-menu9"></i>
																	</a>

																	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-square-right"></i> Edit Vitals</a>
																		<a href="#" class="dropdown-item"><i class="icon-bin2"></i> Delete Vitals</a>
																		<a href="#" class="dropdown-item"><i class="icon-square-down"></i> End Vitals</a>
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

								<!-- ================//Vital Reports================ -->

								<!-- ================//Notice Board================ -->
								<div class="tab-pane fade" id="schedule_notice_board">
									<div class="row">
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
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
																			</div>

																			<div class="media-body">
																				<a href="#">David Liner</a> requested refund for a double card charge.
																				<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
																			</div>
																		</li>
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
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
																			</div>

																			<div class="media-body">
																				<a href="#">David Liner</a> requested refund for a double card charge.
																				<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
																			</div>
																		</li>
																		<li class="media" style="border: none !important;">
																			<div class="mr-3">
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
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
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
																			</div>

																			<div class="media-body">
																				<a href="#">David Liner</a> requested refund for a double card charge.
																				<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
																			</div>
																		</li>
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
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
																			</div>

																			<div class="media-body">
																				<a href="#">David Liner</a> requested refund for a double card charge.
																				<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
																			</div>
																		</li>
																		<li class="media" style="border: none !important;">
																			<div class="mr-3">
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
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
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
																			</div>

																			<div class="media-body">
																				<a href="#">David Liner</a> requested refund for a double card charge.
																				<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
																			</div>
																		</li>
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
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
																			</div>

																			<div class="media-body">
																				<a href="#">David Liner</a> requested refund for a double card charge.
																				<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
																			</div>
																		</li>
																		<li class="media" style="border: none !important;">
																			<div class="mr-3">
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
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
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
																			</div>

																			<div class="media-body">
																				<a href="#">David Liner</a> requested refund for a double card charge.
																				<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
																			</div>
																		</li>
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
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
																			</div>

																			<div class="media-body">
																				<a href="#">David Liner</a> requested refund for a double card charge.
																				<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
																			</div>
																		</li>
																		<li class="media" style="border: none !important;">
																			<div class="mr-3">
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
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
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
																			</div>

																			<div class="media-body">
																				<a href="#">David Liner</a> requested refund for a double card charge.
																				<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
																			</div>
																		</li>
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
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
																			</div>

																			<div class="media-body">
																				<a href="#">David Liner</a> requested refund for a double card charge.
																				<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
																			</div>
																		</li>
																		<li class="media" style="border: none !important;">
																			<div class="mr-3">
																				<a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
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
								<!-- ================//Shopping List================ -->
								<div class="tab-pane fade" id="schedule_shopping_list">
									<div class="row">
										<div class="col-md-12" style="text-align: center;">
											<a href="javascript:;" data-toggle="modal" data-target="#modal_shopping_list">Create new shopping list<button style="background-color: #f5f5f5; margin-left: 15px;" type="button" class="btn alpha-primary text-primary-800 btn-icon rounded-round ml-2 legitRipple"><i style="color: #555;" class="icon-plus3"></i></button></a>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<table class="table datatable-basic" id="shopping_list_datatable_1">
												<thead>
													<tr>
														<th>Date Created</th>
														<th>Status</th>
														<th>Shopping Reminder</th>
														<th>Reciepts</th>
														<th class="text-center">Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><span class="text-muted">May 03, 2019</span></td>
														<td><span class="text-muted">Complete</span></td>
														<td><span class="text-muted">10 Minutes before</span></td>
														<td><a href="#"><i style="font-size: 24px;" class="icon-file-word"></i></a></td>
														<td class="text-center">
															<div class="list-icons">
																<div class="dropdown">
																	<a href="#" class="list-icons-item" data-toggle="dropdown">
																		<i class="icon-menu9"></i>
																	</a>

																	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-square-right"></i> Edit shopping list</a>
																		<a href="#" class="dropdown-item"><i class="icon-bin2"></i> Delete shopping list</a>
																		<a href="#" class="dropdown-item"><i class="icon-square-down"></i> End shopping list</a>
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
								<div class="tab-pane fade" id="schedule_client_bio">
									<div class="row">
										<div class="col-md-12" style="margin: 20px 0px 10px 0px;">
											<p>Client brief bio</p>
										</div>
										<div class="col-md-12" style="margin-top: 5px;">
											<p><strong>Name:  <span>Mr Thomas Crowe</span></strong></p>
										</div>
										<div class="col-md-12" style="margin-top: 5px;">
											<p><strong>Profession:  <span>Doctor</span></strong></p>
										</div>
										<div class="col-md-12" style="margin-top: 5px;">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
										</div>
										<div class="col-md-12" style="margin-top: 5px;">
											<p><strong>Client's typical daily routine:</strong></p>
										</div>
										<div class="col-md-12" style="margin-top: 5px;">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
										</div>
										<div class="col-md-12" style="margin-top: 5px;">
											<p><strong>Likes:</strong></p>
										</div>
										<div class="col-md-12" style="margin-top: 5px;">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
										</div>
										<div class="col-md-12" style="margin-top: 5px;">
											<p><strong>Dislikes:</strong></p>
										</div>
										<div class="col-md-12" style="margin-top: 5px;">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
										</div>
										<div class="col-md-12" style="margin-top: 5px;">
											<p><strong>Hobbies:</strong></p>
										</div>
										<div class="col-md-12" style="margin-top: 5px;">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
										</div>
										<div class="col-md-12" style="margin-top: 5px;">
											<p><strong>Favourite Music:</strong></p>
										</div>
										<div class="col-md-12" style="margin-top: 5px;">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
										</div>
										<div class="col-md-12" style="text-align: right; margin-top: 20px;">
											<a href="javascript:;" data-toggle="modal" data-target="#modal_clients_bio" style="margin-right: 10px;"><i style="color: #555;" class="icon-pencil5"></i></a>
											<a href="javascript:;" onclick="deleteClientBio()"><i style="color: #555;" class="icon-bin"></i></a>
										</div>
									</div>
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



<!-- ==========Add Medication Modal============= -->
<div id="modal_add_medication" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="margin: 0 auto;">Add client medication</h5>
        <div>
        	<li class="media">
				<div class="mr-3" style="margin-right: .55rem!important;">
					<a href="#">
						<img src="<?php echo base_url(); ?>assets/images/placeholders/avatar.png" class="rounded-circle" width="40" height="40" alt="">
					</a>
				</div>

				<div class="media-body">
					<div class="media-title font-weight-semibold" style="font-size: 12px; margin-bottom: 0px !important;">Bastin Miller</div>
					<span class="text-muted" style="font-size: 12px;">Total Care</span>
				</div>
			</li>
        </div>
      </div>
      <form id="add_client_medication_form">
        <div class="modal-body">
          <form action="#">
          	<div class="row">
          		<div class="col-md-8 offset-md-2">
          			<div class="form-group">
		              <label>Medication name:</label>
		              <input type="text" name="medication_name" class="form-control" placeholder="What medication is the client taking">
		            </div>
          		</div>
          	</div>
          	<div class="row">
          		<div class="col-md-8 offset-md-2">
          			<div class="form-group">
						<label>Medication dosage in Mg: </label><br><span class="text-muted">Add the required medication dosage</span>
						<input type="text" value="" class="form-control touchspin-empty" placeholder="Mg">
					</div>
          		</div>
          	</div>
          	<div class="row">
          		<div class="col-md-8 offset-md-2">
          			<div class="form-group">
						<label>How many times a day is medication taken: </label><br><span class="text-muted">Add the frequency per day of dosage</span>
						<input type="text" value="" class="form-control touchspin-empty">
					</div>
          		</div>
          	</div>
          	<div class="row">
          		<div class="col-md-8 offset-md-2">
          			<div class="form-group">
						<label>When is the medication taken</label><br><span class="text-muted">Select morning, evening or night</span>
						<select class="form-control select-icons" data-fouc>
							<option></option>
							<option value="morning">Morning</option>
							<option value="evening">Evening</option>
							<option value="night">Night</option>
						</select>
					</div>
          		</div>
          	</div>
          	<div class="row">
          		<div class="col-md-8 offset-md-2">
          			<label>What time is medication taken</label><br><span class="text-muted">Select what time is medication taken</span>
          			<div class="input-group">
						<span class="input-group-prepend">
							<span class="input-group-text"><i class="icon-alarm"></i></span>
						</span>
						<input type="text" class="form-control pickatime" placeholder="select time">
					</div>
          		</div>
          	</div>
          	<div class="row">
          		<div class="col-md-8 offset-md-2">
          			<div class="form-group pt-2">
						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" id="medication_reminder_checkbox" class="form-check-input-styled" data-fouc>
								Set reminder for caregiver
							</label>
						</div>
					</div>
          		</div>
          	</div>
          	<div class="row" id="medication_set_reminder" style="display: none;">
          		<div class="col-md-8 offset-md-2">
          			<span class="text-muted">Create a reminder for caregiver to give medication</span>
          			<div class="input-group">
						<span class="input-group-prepend">
							<span class="input-group-text"><i class="icon-alarm"></i></span>
						</span>
						<input type="text" class="form-control pickatime" placeholder="select time">
					</div>
          		</div>
          	</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in" data-spinner-size="20"> <span class="ladda-label">Done</span> </button> 
        </div>
      </form>
    </div>
  </div>
</div>
<!-- ==========//Add Medication Modal============= -->


<!-- ==========Add Appointment Modal============= -->
<div id="modal_new_appointment" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="margin: 0 auto;">Create a new appointment</h5>
        <div>
        	<li class="media">
				<div class="mr-3" style="margin-right: .55rem!important;">
					<a href="#">
						<img src="<?php echo base_url(); ?>assets/images/placeholders/avatar.png" class="rounded-circle" width="40" height="40" alt="">
					</a>
				</div>

				<div class="media-body">
					<div class="media-title font-weight-semibold" style="font-size: 12px; margin-bottom: 0px !important;">Bastin Miller</div>
					<span class="text-muted" style="font-size: 12px;">Total Care</span>
				</div>
			</li>
        </div>
      </div>
      <form id="add_client_medication_form">
        <div class="modal-body">
          <form action="#">
          	<div class="row">
          		<div class="col-md-8 offset-md-2">
          			<div class="form-group">
						<label>Add appointment type</label>
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
          			<div class="form-group">
						<label>Enter appointment date and time: </label>
						<div class="input-group">
							<span class="input-group-prepend">
								<span class="input-group-text"><i class="icon-alarm"></i></span>
							</span>
							<input type="text" class="form-control daterange-time" value=""> 
						</div>
					</div>
          		</div>
          	</div>
          	<div class="row">
          		<div class="col-md-8 offset-md-2">
          			<div class="form-group">
						<label>Enter appointment location: </label>
						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="text" class="form-control form-control-sm" placeholder="Add appointment location">
							<div class="form-control-feedback form-control-feedback-sm">
								<i class="icon-pin-alt"></i>
							</div>
						</div>
					</div>
          		</div>
          	</div>
          	<div class="row">
          		<div class="col-md-8 offset-md-2">
          			<div class="form-group pt-2">
						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" id="appointment_reminder_checkbox" class="form-check-input-styled" data-fouc>
								Set reminder for caregiver
							</label>
						</div>
					</div>
          		</div>
          	</div>
          	<div class="row" id="appointment_set_reminder" style="display: none;">
          		<div class="col-md-8 offset-md-2">
          			<div class="input-group">
						<span class="input-group-prepend">
							<span class="input-group-text"><i class="icon-alarm"></i></span>
						</span>
						<input type="text" class="form-control pickatime" placeholder="Create reminder for caregiver">
					</div>
          		</div>
          	</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in" data-spinner-size="20"> <span class="ladda-label">Done</span> </button> 
        </div>
      </form>
    </div>
  </div>
</div>
<!-- ==========//Add Appointment Modal============= -->


<!-- ==========Add Vitals Modal============= -->
<div id="modal_clients_vital" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="margin: 0 auto;">Add Client Vitals</h5>
        <div>
        	<li class="media">
				<div class="mr-3" style="margin-right: .55rem!important;">
					<a href="#">
						<img src="<?php echo base_url(); ?>assets/images/placeholders/avatar.png" class="rounded-circle" width="40" height="40" alt="">
					</a>
				</div>

				<div class="media-body">
					<div class="media-title font-weight-semibold" style="font-size: 12px; margin-bottom: 0px !important;">Bastin Miller</div>
					<span class="text-muted" style="font-size: 12px;">Total Care</span>
				</div>
			</li>
        </div>
      </div>
      <form id="add_client_medication_form">
        <div class="modal-body">
          <form action="#">
          	<div class="row">
          		<div class="col-md-8 offset-md-2">
          			<div class="form-group">
						<label>Add date and time vitals were taken: </label>
						<div class="input-group">
							<span class="input-group-prepend">
								<span class="input-group-text"><i class="icon-alarm"></i></span>
							</span>
							<input type="text" class="form-control daterange-time" value="" placeholder="Enter date and time vitals were taken"> 
						</div>
					</div>
          		</div>
          	</div>
          	<div class="row" style="margin-top: 50px;">
          		<div class="col-md-3">
          			<div class="form-group pt-2">
						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input-styled" data-fouc>
								Blood Pressure
							</label>
						</div>
					</div>
          		</div>
          		<div class="col-md-3">
          			<input class="form-control" type="number" name="number" style="position: relative; bottom: 16px;">
          		</div>
          		<div class="col-md-2" style="text-align: center;"><label style="position: relative; top: 9px;">Over</label></div>
          		<div class="col-md-3">
          			<input class="form-control" type="number" name="number" style="position: relative; bottom: 16px;">
          		</div>
          	</div>
          	<div class="row">
          		<div class="col-md-3">
          			<div class="form-group pt-2">
						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input-styled" data-fouc>
								Breathing
							</label>
						</div>
					</div>
          		</div>
          		<div class="col-md-3">
          			<input class="form-control" type="number" name="number" style="position: relative; bottom: 16px;">
          		</div>
          		<div class="col-md-2" style="text-align: center;"><label style="position: relative; top: 9px;">To</label></div>
          		<div class="col-md-3">
          			<input class="form-control" type="number" name="number" style="position: relative; bottom: 16px;">
          		</div>
          	</div>
          	<div class="row">
          		<div class="col-md-3">
          			<div class="form-group pt-2">
						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input-styled" data-fouc>
								Pulse
							</label>
						</div>
					</div>
          		</div>
          		<div class="col-md-3">
          			<input class="form-control" type="number" name="number" style="position: relative; bottom: 16px;">
          		</div>
          		<div class="col-md-2" style="text-align: center;"><label style="position: relative; top: 9px;">To</label></div>
          		<div class="col-md-3">
          			<input class="form-control" type="number" name="number" style="position: relative; bottom: 16px;">
          		</div>
          	</div>
          	<div class="row">
          		<div class="col-md-3">
          			<div class="form-group pt-2">
						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input-styled" data-fouc>
								Temperature
							</label>
						</div>
					</div>
          		</div>
          		<div class="col-md-6">
          			<input class="form-control" type="number" name="number" style="position: relative; bottom: 16px;">
          		</div>
          		<div class="col-md-2"><label style="position: relative; top: 9px;">Farenheight</label></div>
          	</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in" data-spinner-size="20"> <span class="ladda-label">Done</span> </button> 
        </div>
      </form>
    </div>
  </div>
</div>
<!-- ==========//Add Vitals Modal============= -->

<!-- ==========Add Shopping List Modal============= -->
<div id="modal_shopping_list" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="margin: 0 auto;">Add Shopping List</h5>
        <div>
        	<li class="media">
				<div class="mr-3" style="margin-right: .55rem!important;">
					<a href="#">
						<img src="<?php echo base_url(); ?>assets/images/placeholders/avatar.png" class="rounded-circle" width="40" height="40" alt="">
					</a>
				</div>

				<div class="media-body">
					<div class="media-title font-weight-semibold" style="font-size: 12px; margin-bottom: 0px !important;">Bastin Miller</div>
					<span class="text-muted" style="font-size: 12px;">Total Care</span>
				</div>
			</li>
        </div>
      </div>
      <form id="add_client_medication_form">
        <div class="modal-body">
          <form action="#">
          	<div class="row">
          		<div class="col-md-11 offset-md-1">
          			<div class="form-group row">
						<label class="col-md-12"><i class="icon-attachment2" style="margin-right: 10px;"></i>Attach Reciept</label>
						<div class="col-lg-10">
							<input type="file" class="file-input" data-fouc>
						</div>
					</div>
          		</div>
          		<div class="col-md-11 offset-md-1">
					<div class="d-flex align-items-center">
						<div class="mr-3">
							<div class="form-group pt-2">
								<a href="#"><i style="font-size: 30px;" class="icon-file-word"></i></a>
							</div>
						</div>
						<div class="mr-3" style="margin-left: 140px; margin-bottom: 7px;">
							<a href="#" class="text-default font-weight-semibold letter-icon-title"><i style="margin-right: 10px;" class="icon-file-empty"></i>Edit</a>
						</div>
						<div class="mr-3" style="margin-bottom: 7px;">
							<a href="#" class="text-default font-weight-semibold letter-icon-title"><i style="margin-right: 10px;" class="icon-cross3"></i>Remove</a>
						</div>
					</div>
				</div>
          	</div>



          	<div class="row">
          		<div class="col-md-11 offset-md-1">
          			<div class="form-group row">
						<label class="col-md-12">Shopping List</label>
						<div class="col-lg-10">
							<div class="input-group">
								<input type="text" class="form-control border-right-0" placeholder="Add to my shopping list">
								<span class="input-group-append">
									<button class="btn bg-blue" type="button">Add<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
								</span>
							</div>
						</div>
					</div>
          		</div>
          		<div class="col-md-11 offset-md-1">
					<div class="d-flex align-items-center">
						<div class="mr-3">
							<div class="form-group pt-2">
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input-styled" data-fouc>
										Toilet Paper
									</label>
								</div>
							</div>
						</div>
						<div class="mr-3" style="margin-left: 140px; margin-bottom: 7px;">
							<a href="#" class="text-default font-weight-semibold letter-icon-title"><i style="margin-right: 10px;" class="icon-file-empty"></i>Edit</a>
						</div>
						<div class="mr-3" style="margin-bottom: 7px;">
							<a href="#" class="text-default font-weight-semibold letter-icon-title"><i style="margin-right: 10px;" class="icon-cross3"></i>Remove</a>
						</div>
					</div>
				</div>
          	</div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in" data-spinner-size="20"> <span class="ladda-label">Done</span> </button>
          <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- ==========//Add Shopping List Modal============= -->

<!-- ==========Client Bio Modal============= -->
<div id="modal_clients_bio" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="margin: 0 auto;">Edit Client Bio</h5>
        <div>
        	<li class="media">
				<div class="mr-3" style="margin-right: .55rem!important;">
					<a href="#">
						<img src="<?php echo base_url(); ?>assets/images/placeholders/avatar.png" class="rounded-circle" width="40" height="40" alt="">
					</a>
				</div>

				<div class="media-body">
					<div class="media-title font-weight-semibold" style="font-size: 12px; margin-bottom: 0px !important;">Bastin Miller</div>
					<span class="text-muted" style="font-size: 12px;">Total Care</span>
				</div>
			</li>
        </div>
      </div>
      <form id="client_bio_form">
        <div class="modal-body">
          <form action="#">
          	<div class="row">
          		<div class="col-md-6">
		            <div class="form-group">
		              <label>Client name:</label>
		              <input type="text" name="client_name" class="form-control" placeholder="Client Name" value="Mr thomas crowe">
		            </div>
		        </div>
		        <div class="col-md-6">
		            <div class="form-group">
		              <label>Client Profession:</label>
		              <input type="text" name="client_profession" class="form-control" placeholder="Client Profession" value="Doctor">
		            </div>
		        </div>
          	</div>
          	<div class="row">
		        <div class="col-md-12">
		            <div class="form-group">
		              <label>Profession Details:</label>
		              <textarea name="profession_details" rows="3" cols="4" placeholder="Add brief detail about client Profession" class="form-control">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</textarea>
		            </div>
		        </div>
		    </div>
		    <div class="row">
		        <div class="col-md-6">
		            <div class="form-group">
		              <label>Client's daily routine:</label>
		              <textarea name="client_routine" rows="3" cols="4" placeholder="Add brief detail about client routine" class="form-control">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</textarea>
		            </div>
		        </div>
		        <div class="col-md-6">
		            <div class="form-group">
		              <label>Client's likes:</label>
		              <textarea name="client_likes" rows="3" cols="4" placeholder="Add brief detail about client likes" class="form-control">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has .</textarea>
		            </div>
		        </div>
		    </div>
		    <div class="row">
		        <div class="col-md-6">
		            <div class="form-group">
		              <label>Client's dislikes:</label>
		              <textarea name="client_dislikes" rows="3" cols="4" placeholder="Add brief detail about client dislikes" class="form-control">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</textarea>
		            </div>
		        </div>
		        <div class="col-md-6">
		            <div class="form-group">
		              <label>Client's hobbies:</label>
		              <textarea name="client_hobbies" rows="3" cols="4" placeholder="Add brief detail about client hobbies" class="form-control">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</textarea>
		            </div>
		        </div>
		    </div>
		    <div class="row">
		        <div class="col-md-12">
		            <div class="form-group">
		              <label>Client's Favourite Music:</label>
		              <textarea name="client_favourite_music" rows="3" cols="4" placeholder="Add brief detail about client favourite music" class="form-control">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</textarea>
		            </div>
		        </div>
		    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in" data-spinner-size="20"> <span class="ladda-label">Done</span> </button> 
        </div>
      </form>
    </div>
  </div>
</div>
<!-- ==========//Client Bio Modal============= -->



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
	<!-- /theme JS files -->
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