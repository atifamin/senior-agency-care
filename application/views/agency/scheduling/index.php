<?php include(APPPATH."views/agency/inc/header.php");?>


<div class="row">
	<div class="col-md-12">
		<div class="card" style="padding: 15px 10px;">
			<div class="row">
				<div class="col-md-4">
					<div class="btn-group">
						<a href="#" class="btn btn-light legitRipple"><i class="icon-arrow-left22"></i></a>
						<a href="#" class="btn btn-light legitRipple"><i class="icon-arrow-right22"></i></a>
						<a style="margin-left: 12px; font-size: 12px;" href="#" class="btn btn-light legitRipple">Today</a>
					</div>
				</div>
				<div class="col-md-4">
					<a href="#" class="btn btn-light daterange-predefined legitRipple"><i class="icon-calendar22 mr-2"></i><span>January 10, 2019 &nbsp; - &nbsp; February 8, 2019</span></a>
				</div>
				<div class="col-md-4">
					<div class="btn-group" style="float: right;">
						<a style="font-size: 12px;" href="#" class="btn btn-light legitRipple">Month</a>
						<a style="font-size: 12px;" href="#" class="btn btn-light legitRipple">Week</a>
						<a style="font-size: 12px;" href="#" class="btn btn-light legitRipple">Day</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ===============Clients Not Scheduled=============== -->
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="row">
				<div class="col-md-4 offset-md-4" style="margin-top: 9px; text-align: center;">
					<h6 style="font-size: 12px; color: #FEA024;">Clients not scheduled<span style="margin-left: 6px;" class="badge badge-warning badge-pill">65</span></h6>
				</div>
				<div class="col-md-4">
					<div class="form-group form-group-feedback form-group-feedback-left" style="margin-right: 20px; width: 140px; float: right;margin-bottom: 0;">
						<input type="text" class="form-control form-control-sm" placeholder="Search">
						<div class="form-control-feedback form-control-feedback-lg">
							<i style="font-size: 12px; color: lightgray;" class="icon-search4"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="margin-top: 40px;">
				<div class="col-md-12">
					<div id="accordion-default">
						<div class="card-header">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<a href="#">
											<img src="<?php echo base_url(); ?>assets/images/placeholders/avatar.png" class="rounded-circle" width="40" height="40" alt="">
										</a>
									</div>
									<div class="media-body">
										<div class="media-title font-weight-semibold">James Alexander</div>
										<span class="text-muted">Development</span>
									</div>
									<div class="align-self-center ml-3">
										<a class="collapsed text-default" data-toggle="collapse" href="#profile_accordian"><i class="icon-paragraph-justify3"></i></a>
									</div>
								</li>
							</ul>
						</div>

						<div id="profile_accordian" class="collapse" data-parent="#accordion-default">
							<div class="card-body">
								<!-- Basic tabs -->
								<div class="row">
									<div class="col-md-12">
										<div class="card-body">
											<ul class="nav nav-tabs" style="background-color: #EFEEED;">
												<li class="nav-item"><a style="font-size: 11px; padding: 0.425rem 1.0rem;" href="#client_scheduling" class="nav-link active" data-toggle="tab"><i style="margin-right: 10px;" class="icon-calendar22"></i>Scheduling</a></li>

												<li class="nav-item"><a style="font-size: 11px; padding: 0.425rem 1.0rem;" href="#client_medication" class="nav-link" data-toggle="tab">Medication List</a></li>

												<li class="nav-item"><a style="font-size: 11px; padding: 0.425rem 1.0rem;" href="#dietry_needs" class="nav-link" data-toggle="tab">Dietry Needs</a></li>

												<li class="nav-item"><a style="font-size: 11px; padding: 0.425rem 1.0rem;" href="#appiontment_callender" class="nav-link" data-toggle="tab">Appointment Callender</a></li>

												<li class="nav-item"><a style="font-size: 11px; padding: 0.425rem 1.0rem;" href="#vital_reports" class="nav-link" data-toggle="tab">Vital Reports</a></li>

												<li class="nav-item"><a style="font-size: 11px; padding: 0.425rem 1.0rem;" href="#notice_board" class="nav-link" data-toggle="tab">Notice Board</a></li>

												<li class="nav-item"><a style="font-size: 11px; padding: 0.425rem 1.0rem;" href="#shopping_list" class="nav-link" data-toggle="tab">Shopping List</a></li>

												<li class="nav-item"><a style="font-size: 11px; padding: 0.425rem 1.0rem;" href="#client_bio" class="nav-link" data-toggle="tab">Client Bio</a></li>
											</ul>

											<div class="tab-content">
												<div class="tab-pane fade show active" id="client_scheduling">
													Client Scheduling Tab.
												</div>

												<div class="tab-pane fade" id="client_medication">
													Client Medication Tab.
												</div>

												<div class="tab-pane fade" id="dietry_needs">
													Dietry Needs Tab.
												</div>

												<div class="tab-pane fade" id="appiontment_callender">
													Appointment Callender Tab.
												</div>

												<div class="tab-pane fade" id="vital_reports">
													Vital Reports Tab.
												</div>

												<div class="tab-pane fade" id="notice_board">
													Notice Board Tab.
												</div>

												<div class="tab-pane fade" id="shopping_list">
													Shopping List Tab.
												</div>

												<div class="tab-pane fade" id="client_bio">
													Client Bio Tab.
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /basic tabs -->
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="row" style="margin-top: 20px;">
				<div class="col-md-12">
					<div id="accordion-default">
						<div class="card-header">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<a href="#">
											<img src="<?php echo base_url(); ?>assets/images/placeholders/avatar.png" class="rounded-circle" width="40" height="40" alt="">
										</a>
									</div>
									<div class="media-body">
										<div class="media-title font-weight-semibold">David Johns</div>
										<span class="text-muted">Employee</span>
									</div>
									<div class="align-self-center ml-3">
										<a class="collapsed text-default" data-toggle="collapse" href="#profile_accordian_1"><i class="icon-paragraph-justify3"></i></a>
									</div>
								</li>
							</ul>
						</div>

						<div id="profile_accordian_1" class="collapse" data-parent="#accordion-default">
							<div class="card-body">
								<!-- Basic tabs -->
								<div class="row">
									<div class="col-md-12">
										<div class="card-body">
											<ul class="nav nav-tabs" style="background-color: #EFEEED;">
												<li class="nav-item"><a style="font-size: 11px; padding: 0.425rem 1.0rem;" href="#client_scheduling_1" class="nav-link active" data-toggle="tab"><i style="margin-right: 10px;" class="icon-calendar22"></i>Scheduling</a></li>

												<li class="nav-item"><a style="font-size: 11px; padding: 0.425rem 1.0rem;" href="#client_medication_1" class="nav-link" data-toggle="tab">Medication List</a></li>

												<li class="nav-item"><a style="font-size: 11px; padding: 0.425rem 1.0rem;" href="#dietry_needs_1" class="nav-link" data-toggle="tab">Dietry Needs</a></li>

												<li class="nav-item"><a style="font-size: 11px; padding: 0.425rem 1.0rem;" href="#appiontment_callender_1" class="nav-link" data-toggle="tab">Appointment Callender</a></li>

												<li class="nav-item"><a style="font-size: 11px; padding: 0.425rem 1.0rem;" href="#vital_reports_1" class="nav-link" data-toggle="tab">Vital Reports</a></li>

												<li class="nav-item"><a style="font-size: 11px; padding: 0.425rem 1.0rem;" href="#notice_board_1" class="nav-link" data-toggle="tab">Notice Board</a></li>

												<li class="nav-item"><a style="font-size: 11px; padding: 0.425rem 1.0rem;" href="#shopping_list_1" class="nav-link" data-toggle="tab">Shopping List</a></li>

												<li class="nav-item"><a style="font-size: 11px; padding: 0.425rem 1.0rem;" href="#client_bio_1" class="nav-link" data-toggle="tab">Client Bio</a></li>
											</ul>

											<div class="tab-content">
												<div class="tab-pane fade show active" id="client_scheduling_1">
													Client Scheduling Tab.
												</div>

												<div class="tab-pane fade" id="client_medication_1">
													Client Medication Tab.
												</div>

												<div class="tab-pane fade" id="dietry_needs_1">
													Dietry Needs Tab.
												</div>

												<div class="tab-pane fade" id="appiontment_callender_1">
													Appointment Callender Tab.
												</div>

												<div class="tab-pane fade" id="vital_reports_1">
													Vital Reports Tab.
												</div>

												<div class="tab-pane fade" id="notice_board_1">
													Notice Board Tab.
												</div>

												<div class="tab-pane fade" id="shopping_list_1">
													Shopping List Tab.
												</div>

												<div class="tab-pane fade" id="client_bio_1">
													Client Bio Tab.
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /basic tabs -->
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- ====================Clients Not Schedueled End======================= -->


<!-- ====================Clients Schedueled Start======================= -->

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="row">
				<div class="col-md-4 offset-md-4" style="margin-top: 9px; text-align: center;">
					<h6 style="font-size: 12px; color: #4caf50;">Scheduled Clients<span style="margin-left: 6px;" class="badge badge-success badge-pill">65</span></h6>
				</div>
				<div class="col-md-4">
					<div class="form-group form-group-feedback form-group-feedback-left" style="margin-right: 20px; width: 140px; float: right;margin-bottom: 0;">
						<input type="text" class="form-control form-control-sm" placeholder="Search">
						<div class="form-control-feedback form-control-feedback-lg">
							<i style="font-size: 12px; color: lightgray;" class="icon-search4"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="margin-top: 40px;">
				<div class="col-md-12">
					<div id="accordion-default">
						<div class="card-header">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<a href="#">
											<img src="<?php echo base_url(); ?>assets/images/placeholders/avatar.png" class="rounded-circle" width="40" height="40" alt="">
										</a>
									</div>
									<div class="media-body">
										<div class="media-title font-weight-semibold">James Alexander</div>
										<span class="text-muted">Development</span>
									</div>
									<div class="align-self-center ml-3">
										<a class="collapsed text-default" data-toggle="collapse" href="#completed_profile_accordian"><i class="icon-paragraph-justify3"></i></a>
									</div>
								</li>
							</ul>
						</div>

						<div id="completed_profile_accordian" class="collapse" data-parent="#accordion-default">
							<div class="card-body">
								Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ====================Clients Schedueled End======================= -->


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
<?php include(APPPATH."views/agency/inc/footer.php");?>