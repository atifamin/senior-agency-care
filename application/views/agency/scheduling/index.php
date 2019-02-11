<?php include(APPPATH."views/agency/inc/header.php");?>


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
								<div class="tab-pane fade active show" id="client_schedule_1">
									client_schedule.
								</div>
								<div class="tab-pane fade active" id="schedule_medication_list_1">
									medication_list
								</div>
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