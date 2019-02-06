<?php include(APPPATH."views/inc/header.php");?>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="row" style="padding: 12px;">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-5">
							<a href="<?php echo site_url("caregiver/add_caregiver"); ?>" class="btn btn-light legitRipple" style="font-size: 11px;"><i style="margin-right: 10px;" class="icon-users4"></i>Add a caregiver</a>
						</div>
						<span style="margin-top: 17px; margin-right: 14px; font-size: 10px;">OR</span>
						<div class="col-md-5">
							<a href="#" class="btn btn-light legitRipple" style="font-size: 11px;"><i class="icon-make-group mr-2"></i>Invite your caregivers</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-4 offset-md-4" style="margin-top: 9px;">
							<h6 style="font-size: 12px; color: #4caf50;">Added<span style="margin-left: 6px;" class="badge badge-success badge-pill">65</span></h6>
						</div>
						<div class="col-md-4" style="margin-top: 9px;">
							<h6 style="font-size: 12px; color: #ff7043;">Pending<span style="margin-left: 6px;" class="badge badge-warning badge-pill">65</span></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<!-- Dropdown list -->
		<div class="card">
			<div class="card-header header-elements-inline">
				<div class="col-md-7" style="text-align: right;">
					<button type="button" class="btn btn-light dropdown-toggle legitRipple" data-toggle="dropdown" style="margin-right: 30px; font-size: 11px;">Filter</button>
					<button type="button" class="btn btn-light dropdown-toggle legitRipple" data-toggle="dropdown" style="font-size: 11px;">Sort</button>
				</div>
				<div class="header-elements">
					<div class="form-group form-group-feedback form-group-feedback-right" style="margin-right: 60px;">
						<input type="text" class="form-control form-control-sm" placeholder="Search">
						<div class="form-control-feedback form-control-feedback-lg">
							<i style="font-size: 12px; color: lightgray;" class="icon-search4"></i>
						</div>
					</div>
					<div class="list-icons" style="position: relative; bottom: 6px;">
                		<a class="list-icons-item" data-action="collapse"></a>
                		<a class="list-icons-item" data-action="reload"></a>
                	</div>
            	</div>
			</div>

			<div class="card-body">
				<ul class="media-list">
					<!-- <li class="media font-weight-semibold py-1">Team leaders</li> -->

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

						<div class="align-self-center ml-3" style="margin-right: 1.25rem!important;">
							<span class="badge badge-light badge-striped badge-striped-right border-right-success" style="color: #4caf50;">Profile Completed</span>
						</div>
						<div class="align-self-center ml-3">
							<div class="list-icons">
		                    	<div class="list-icons-item dropdown">
		                    		<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>

		                    		<div class="dropdown-menu dropdown-menu-right">
				                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#call"><i class="icon-phone2"></i> Make a call</a>
				                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#chat"><i class="icon-comment"></i> Start chat</a>
				                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#video"><i class="icon-video-camera"></i> Video call</a>
		                    		</div>
		                    	</div>
	                    	</div>
						</div>
					</li>
				</ul>
				<!-- Profile Section -->
				<div class="col-md-10">
					<div class="row" style="margin-top: 80px;">
						<div class="col-md-3" style="text-align: center;">
							<h6 style="font-size: 12px;">Profile</h6>
						</div>
						<div class="col-md-3" style="text-align: center;">
							<h6 style="font-size: 12px;">Contact Information<span style="font-size: 9px; color: #ff7043; margin-left: 4px;"><i style="margin-right: 2px; color: #555;" class="icon-exclamation"></i>Incomplete</span></h6>
						</div>
						<div class="col-md-3" style="text-align: center;">
							<h6 style="font-size: 12px;">Certifications</h6>
						</div>
						<div class="col-md-3" style="text-align: center;">
							<h6 style="font-size: 12px;">Valid State License</h6>
						</div>
						<div class="progress-bar bg-indigo-400" style="width: 25%; height: 2px; background-color: #d81b60;">
							<span class="sr-only">90% Complete</span>
						</div>
					</div>
					<div class="row" style="margin-top: 20px;">
						<div class="col-md-12">
							<div class="d-flex align-items-center">
								<div class="mr-3">
									<h4>Cathy Peter</h4>
								</div>
								<div>
									<a href="#" class="text-default font-weight-semibold letter-icon-title"><i style="margin-right: 20px;" class="icon-file-empty"></i>Edit</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: 20px;">
						<div class="col-md-3">
							<table>
								<tr>
									<td><strong>First Name:</strong></td>
									<td>Lucy</td>
								</tr>
								<tr>
									<td><strong>Last Name:</strong></td>
									<td>Fernato</td>
								</tr>
								<tr>
									<td><strong>Gender:</strong></td>
									<td>Female</td>
								</tr>
								<tr>
									<td><strong>Position:</strong></td>
									<td>Caregiver</td>
								</tr>
								<tr>
									<td><strong>Profile Image:</strong></td>
									<td><img src="<?php echo base_url();?>assets/images/placeholders/avatar.png" class="rounded-circle" width="36" height="36" alt=""></td>
								</tr>
							</table>
						</div>
						<div class="col-md-3" style="text-align: center;">
							<table>
								<tr>
									<td></td>
									<td></td>
								</tr>
							</table>
						</div>
						<div class="col-md-3" style="text-align: center;">
							<table>
								<tr>
									<td></td>
									<td></td>
								</tr>
							</table>
						</div>
						<div class="col-md-3" style="text-align: center;">
							<table>
								<tr>
									<td></td>
									<td></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /dropdown list -->
</div>

<script src="<?php echo base_url();?>assets/js/demo_pages/components_progress.js"></script>
<?php include(APPPATH."views/inc/footer.php");?>