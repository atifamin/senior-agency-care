<?php include(APPPATH."views/agency/inc/header.php");?>
<?php $months = CON_MONTHS; ?>
<?//php print_array($detail);?>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="row" style="padding: 12px;">
				<div class="col-md-6">
					<div class="row" style="text-align: center;">
						<div class="col-md-5">
							<a href="<?php echo site_url("agency/caregiver/add_caregiver"); ?>" class="btn btn-light legitRipple" style="font-size: 11px;"><i style="margin-right: 10px;" class="icon-users4"></i>Add a caregiver</a>
						</div>
						<span style="margin: 10px auto; font-size: 10px;">OR</span>
						<div class="col-md-5">
							<a href="<?php echo site_url("agency/caregiver/send_invite_to_caregiver"); ?>" class="btn btn-light legitRipple" style="font-size: 11px;"><i class="icon-make-group mr-2"></i>Invite your caregivers</a>
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
	    <div class="card card-body border-top-1 border-top-primary" style="border-top: none;">
	      <div class="text-center">
	        <h6 class="mb-0 font-weight-semibold">Please Complete Your Profile</h6>
	        <p class="mb-3 text-muted">You need to complete your profile minimum of 70% to access this application.</p>
	      </div>
	      <div class="progress rounded-round" style="border: none;">
	        <div class="progress-bar progress-bar-striped bg-<?php if(profile_completion_percentage($this->agency_id)<73){echo "danger";}else{echo "success";} ?>" style="width: <?php echo profile_completion_percentage($this->agency_id); ?>%"> <span><?php echo profile_completion_percentage($this->agency_id); ?>%Complete</span>
	        </div>
	      </div>
	    </div>
	</div>
	<div class="col-md-12">
		<!-- Dropdown list -->
		<div class="card">
			<!-- <div class="card"> -->
			<!-- <div class="card-header header-elements-inline">
					<div style="width: 100%; text-align: center;">
						<div class="btn-group">
	                    	<button style="margin-right: 10px;" type="button" class="btn btn-light dropdown-toggle legitRipple filter" data-toggle="dropdown">Filter</button>
	                    	<div class="dropdown-menu dropdown-menu-right filter">
								<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Filter</a>
								<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Filter</a>
							</div>

							<div class="btn-group">
		                    	<button style="margin-right: 20px;" type="button" class="btn btn-light dropdown-toggle legitRipple filter" data-toggle="dropdown">Sort</button>
		                    	<div class="dropdown-menu dropdown-menu-right filter">
									<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Sort</a>
									<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Sort</a>
								</div>
							</div>
						</div>
					</div>
				<div class="header-elements">
					<div class="form-group form-group-feedback form-group-feedback-right">
						<input type="text" class="form-control form-control-sm" placeholder="Search">
						<div class="form-control-feedback form-control-feedback-lg">
							<i style="font-size: 12px; color: lightgray;" class="icon-search4"></i>
						</div>
					</div>
            	</div>
			</div> -->

			<div class="card-body">
				<ul class="media-list">
					<!-- <li class="media font-weight-semibold py-1">Team leaders</li> -->

					<li class="media">
						<div class="mr-3">
							<a href="#">
								<img src="<?php echo "detail"; ?>" class="rounded-circle" width="40" height="40" alt="">
							</a>
						</div>

						<div class="media-body">
							<div class="media-title font-weight-semibold"><?php echo $detail->first_name." ".$detail->last_name;?></div>
							<span class="text-muted"><?php echo ucfirst($detail->position);?></span>
						</div>

						<div class="align-self-center ml-3" style="margin-right: 1.25rem!important;">
							<span class="badge badge-light badge-striped badge-striped-right border-right-success" style="color: #4caf50;">Profile Completed</span>
						</div>
						<div class="align-self-center ml-3">
							<div class="list-icons">
		                    	<div class="list-icons-item dropdown">
		                    		<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>

		                    		<div class="dropdown-menu dropdown-menu-right">
		                    			<a href="<?php echo site_url("agency/caregiver/edit/".$detail->id.""); ?>" class="dropdown-item"><i class="icon-google-drive"></i> Edit</a>
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
				<!-- <div class="col-md-10">
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
				</div> -->
				<div class="row">
					<div class="col-md-12">

						<div class="card-body">
							<ul class="nav nav-tabs nav-tabs-bottom">
								<li class="nav-item" style="padding-right: 30px;"><a href="#caregive_profile" class="nav-link active" data-toggle="tab">Profile</a></li>
								<li class="nav-item" style="padding-right: 30px;"><a href="#contact_information" class="nav-link" data-toggle="tab">Contact Information<span style="font-size: 9px; color: #ff7043; margin-left: 4px;"><i style="margin-right: 2px; color: #555;" class="icon-exclamation"></i>Incomplete</span></a></li>
								<li class="nav-item" style="padding-right: 30px;"><a href="#caregiver_certification" class="nav-link" data-toggle="tab">Certifications</a></li>
								<li class="nav-item"><a href="#valid_state_license" class="nav-link" data-toggle="tab">Valid State License</a></li>
							</ul>

							<div class="tab-content">
								<div class="tab-pane fade show active" id="caregive_profile">
									<div class="row" style="margin-top: 20px;">
										<div class="col-md-12">
											<div class="d-flex align-items-center">
												<div class="mr-3">
													<h4><?php echo $detail->first_name." ".$detail->last_name;?></h4>
												</div>
											</div>
										</div>
									</div>
									<div class="row" style="margin-top: 20px;">
										<div class="col-md-12">
											<table>
												<tr>
													<td style="width: 150px;"><strong>First Name:</strong></td>
													<td><?php echo $detail->first_name; ?></td>
												</tr>
												<tr>
													<td style="width: 150px;"><strong>Last Name:</strong></td>
													<td><?php echo $detail->last_name;?></td>
												</tr>
												<tr>
													<td style="width: 150px;"><strong>Gender:</strong></td>
													<td><?php echo ucfirst($detail->gender);?></td>
												</tr>
												<tr>
													<td style="width: 150px;"><strong>Position:</strong></td>
													<td><?php echo ucfirst($detail->position);?></td>
												</tr>
												<tr>
													<td style="width: 150px;"><strong>Profile Image:</strong></td>
													<td><img src="<?php echo caregiver_image($detail->id) ;?>" class="rounded-circle" width="36" height="36" alt=""></td>
												</tr>
											</table>
										</div>
									</div>
								</div>

								<div class="tab-pane fade" id="contact_information">
									<div class="tab-pane fade show active" id="caregive_profile">
									<div class="row" style="margin-top: 20px;">
										<div class="col-md-12">
											<div class="d-flex align-items-center">
												<div class="mr-3">
													<h4><?php echo $detail->first_name." ".$detail->last_name;?></h4>
												</div>
											</div>
										</div>
									</div>
									<div class="row" style="margin-top: 20px;">
										<div class="col-md-12">
											<table>
												<tr>
													<td style="width: 150px;"><strong>Email address:</strong></td>
													<td><?php echo $detail->email; ?></td>
												</tr>
												<tr>
													<td style="width: 150px;"><strong>Phone:</strong></td>
													<td><?php echo $detail->phone_number;?></td>
												</tr>
												<tr>
													<td style="width: 150px;"><strong>Address:</strong></td>
													<td><?php echo $detail->address;?></td>
												</tr>
												<tr>
													<td style="width: 150px;"><strong>City:</strong></td>
													<td><?php echo $detail->city_id;?></td>
												</tr>
												<tr>
													<td style="width: 150px;"><strong>State:</strong></td>
													<td><?php echo $detail->state_id;?></td>
												</tr>
												<tr>
													<td style="width: 150px;"><strong>Country:</strong></td>
													<td><?php echo $detail->country_id;?></td>
												</tr>
												<tr>
													<td style="width: 150px;"><strong>Zipcode:</strong></td>
													<td><?php echo $detail->zipcode;?></td>
												</tr>
												<tr>
													<td style="width: 150px;"><strong>Emergency Contact Name:</strong></td>
													<td><?php echo $detail->emergency_contact_name;?></td>
												</tr>
												<tr>
													<td style="width: 150px;"><strong>Emergency COntact Number:</strong></td>
													<td><?php echo $detail->emergency_contact_number;?></td>
												</tr>
											</table>
										</div>
									</div>
								</div>
								</div>
								<div class="tab-pane fade" id="caregiver_certification">
									<div class="row" style="margin-bottom: 20px;">
										<div class="col-md-6">
											<strong>My Certifications</strong>
										</div>
									</div>
									<?php 
									$caregiver_certifications = json_decode($detail->caregiver_certifications); 
									foreach (CON_CAREGIVER_CERTIFICATIONS as $key =>$value) { ?>
										<span class="bg-dark py-1 px-2 rounded" style=""><span><?php echo $value; ?></span></span>
								<?php	} 
								// <span class="bg-dark py-1 px-2 rounded"><span class="text-white">C.N.A Certified Nurse Assistant</span></span>
									?>
								</div>
								<div class="tab-pane fade" id="valid_state_license">
								    <strong>Valid State Liscence:</strong>
								    <?php if(isset($detail->license) && count($detail->license)>0){ ?>
									<?php foreach($detail->license as $licenseKey=>$licenseVal){ ?>
									<div class="card" style="margin-bottom:5%">
				                        <div class="card-header">
				                            <h4 class="card-title"><strong><?php echo $licenseVal->state_license; ?></strong></h4>
				                        </div>
				                        <div class="card-body">
			                          	<p><strong>From:</strong>&nbsp;&nbsp;<?php echo $months[$licenseVal->valid_from_month].", ".$licenseVal->valid_from_year; ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong>To:</strong>&nbsp;&nbsp;<?php echo $months[$licenseVal->valid_to_month].", ".$licenseVal->valid_to_year; ?></p>
			                          	<?php if(isset($licenseVal->license_document) && count($licenseVal->license_document)>0){ ?>
			                          	<p><strong>Documents</strong></p>
			                          
			                          	<a href="<?php echo base_url($licenseVal->license_document->full_path); ?>" download><?php echo $licenseVal->license_document->name; ?></a>
			                          	<?php } ?>
			                          	</div>
                        			</div><?php }?><?php }?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /tabs with bottom line -->
			</div>
		</div>
		<!-- /dropdown list -->
</div>

<script src="<?php echo base_url();?>assets/js/demo_pages/components_progress.js"></script>
<?php include(APPPATH."views/agency/inc/footer.php");?>