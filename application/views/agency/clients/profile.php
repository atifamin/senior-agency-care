<?php include(APPPATH."views/agency/inc/header.php");?>
<?php //print_array($client_detail); ?>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="row" style="padding: 12px;">
				<div class="col-md-6">
					<div class="row" style="text-align: center;">
						<div class="col-md-5">
							<a href="<?php echo site_url("agency/clients/add_client"); ?>" class="btn btn-light legitRipple" style="font-size: 11px;"><i style="margin-right: 10px;" class="icon-users4"></i>Add a client</a>
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
			<div class="card-body">
				<div class="row" style="margin: 10px 0;">
					<div class="offset-md-1 col-md-10">
						<ul class="nav nav-tabs nav-tabs-top nav-justified">
							
							<li class="nav-item"><a href="#top-justified-tab1" class="nav-link active" data-toggle="tab"><img src="<?php echo client_image($client_detail->id); ?>" class="rounded-circle" width="40" height="40" alt="">&nbsp;&nbsp;&nbsp;&nbsp;<?php if(isset($client_detail->first_name)){ echo $client_detail->first_name." ".$client_detail->last_name;} ?></a></li>
							
							<?php if (isset($client_detail->linked_profile_detail)) { ?>	
							<li class="nav-item"><a href="#top-justified-tab2" class="nav-link" data-toggle="tab"><img src="<?php echo client_image($client_detail->linked_profile_detail->id); ?>" class="rounded-circle" width="40" height="40" alt="">&nbsp;&nbsp;&nbsp;&nbsp;<?php if(isset($client_detail->linked_profile_detail->first_name)){ echo $client_detail->linked_profile_detail->first_name." ".$client_detail->linked_profile_detail->last_name;} ?></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>

				<div class="tab-content">
					<div class="tab-pane fade show active" id="top-justified-tab1">
						
						<div class="row">
							<div class="col-md-12">
								<div class="card-body">
									<ul class="nav nav-tabs nav-tabs-bottom">
										<li class="nav-item" style="padding-right: 25px;"><a href="#client_information1" class="nav-link active" data-toggle="tab">Client Information</a></li>
										<li class="nav-item" style="padding-right: 25px;"><a href="#special_needs1" class="nav-link" data-toggle="tab">Special Needs</a></li>
										<li class="nav-item" style="padding-right: 25px;"><a href="#medical_history" class="nav-link" data-toggle="tab">Medical History</a></li>
										<li class="nav-item" style="padding-right: 25px;"><a href="#family_center1" class="nav-link" data-toggle="tab">Family Center</a></li>
										<li class="nav-item"><a href="#life_directive2" class="nav-link" data-toggle="tab">End of Life Directive</a></li>
										<li class="nav-item" style="right: 3% !important; position: absolute;"><a href="<?php echo site_url("agency/clients/edit_client/".$client_detail->id); ?>"><button class="btn btn-light" style="background-color: #fff;"><i class="icon-google-drive mr-2"></i> Edit Profile</button></a></li>
									</ul>

									<div class="tab-content">
										<div class="tab-pane fade show active" id="client_information1">
											<div class="row" style="margin-top: 20px;">
												<div class="col-md-12">
													<div class="d-flex align-items-center">
														<div class="mr-3">
															<h4><?php //echo $client_detail->first_name." ".$client_detail->last_name; ?></h4>
														</div>
													</div>
												</div>
											</div>
											<div class="row" style="margin-top: 20px;">
												<div class="col-md-12">
													<table>
														<tr>
															<td style="width: 200px;"><strong>Phone:</strong></td>
															<td><span><?php echo $client_detail->mobile_number; ?></span></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Email:</strong></td>
															<td><span><?php if(isset($client_detail->email_address)){echo $client_detail->email_address;} ?></span></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Gender:</strong></td>
															<td><?php echo $client_detail->gender; ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Client From:</strong></td>
															<td><?php if(isset($client_detail->client_from)){ echo $client_detail->client_from;} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Client To:</strong></td>
															<td><?php if(isset($client_detail->client_to)){echo $client_detail->client_to;} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Birthday:</strong></td>
															<td><?php if(isset($client_detail->dob)){echo date("M,d-Y",strtotime($client_detail->dob));} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Level of Care:</strong></td>
															<td><?php if(isset($client_detail->level_care)){echo $client_detail->level_care;} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Client Pets:</strong></td>
															<td><?php if(isset($client_detail->pets_types)){echo $client_detail->pets_types;} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Rate per Hour:</strong></td>
															<td><?php if(isset($client_detail->rate_per_hour)){echo $client_detail->rate_per_hour;} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Rate per Week:</strong></td>
															<td><?php if(isset($client_detail->hours_per_week)){echo $client_detail->hours_per_week;} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Billing Cycle:</strong></td>
															<td><?php if(isset(CON_CLIENT_BILLIBG_CYCLE[$client_detail->billing_cycle])){echo CON_CLIENT_BILLIBG_CYCLE[$client_detail->billing_cycle];} ?></td>
														</tr>
													</table>
												</div>
											</div>
										</div>

										<div class="tab-pane fade" id="special_needs1">
											<div class="row" style="margin-top: 30px;">
												<div class="col-md-12">
													<table>
														<tr>
															<td style="width: 250px;"><strong>Client Dietry requirements:</strong></td>
															<td><span><?php if(isset($client_detail->dietry_requirements)){echo $client_detail->dietry_requirements;} ?></span></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Client Fluid requirements:</strong></td>
															<td><span><?php if(isset($client_detail->fluid_requirements)){echo $client_detail->fluid_requirements;} ?></span></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Medication list:</strong></td>
															<td><?php echo $client_detail->medication_list; ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Allergies list:</strong></td>
															<td><?php if(isset($client_detail->allergies_list)){ echo $client_detail->allergies_list;} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Oxygen Quantity:</strong></td>
															<td><?php if(isset($client_detail->oxygen_quantity)){echo $client_detail->oxygen_quantity;} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Oxygen administered:</strong></td>
															<td><?php if(isset($client_detail->oxygen_administered)){echo $client_detail->oxygen_administered;} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Mobility needs:</strong></td>
															<td><?php if(isset(CON_CLIENT_MOBILITY_NEEDS[$client_detail->mobility_needs])){
																echo CON_CLIENT_MOBILITY_NEEDS[$client_detail->mobility_needs];
															} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Client transportation:</strong></td>
															<td><?php if(isset($client_detail->transportation_requirements)){echo $client_detail->transportation_requirements;} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Client transfer needs:</strong></td>
															<td><?php if(isset($client_detail->transfer_needs)){echo $client_detail->transfer_needs;} ?></td>
														</tr>
													</table>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="medical_history">
											<?php $medical_history = explode(",", $client_detail->medical_history); ?>
											<div class="row" style="margin: 40px 0;">
												<?php foreach (load_table("client_medical_history") as $CMH): ?> 
												<?php if (in_array($CMH->id, $medical_history)) : ?>
												<div class="col-md-4" style="margin-top: 5px 0 ">
													<i class="icon-checkmark3"></i>
													<span style="margin-left: 10px;"><?php echo $CMH->name; ?></span>
												</div>
												<?php endif ?>
											<?php endforeach; ?>
											</div>
										</div>
										<div class="tab-pane fade" id="family_center1">
											<div class="col-md-12"> 
												<!-- Dropdown list -->
												<h5 style="text-align: center;">Send an invite to your clients</h5>
												<div class="col-md-10">
													<form id="send_invite_form" action="<?php echo site_url("agency/clients/add_send_invite"); ?>" method="POST" role="form">
													<input type="hidden" name="client_id" value="<?php echo $client_detail->id; ?>">
													<div class="row" style="padding: 50px 0px;">
														<div class="col-md-2">
														<div class="form-group">
															<label>First Name:</label>
															<input type="text" class="form-control" name="first_name" placeholder="John Doe">
														</div>
														</div>
														<div class="col-md-2">
														<div class="form-group">
															<label>Last Name:</label>
															<input type="text" class="form-control" name="last_name" placeholder="John Doe">
														</div>
														</div>
														<div class="col-md-2">
														<div class="form-group">
															<label>Email:</label>
															<input type="email" class="form-control" name="email_address" placeholder="example@gmail.com">
														</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<label>Phone #:</label>
																<input type="text" name="mobile_number"  class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999">
															</div>
														</div>
														<div class="col-md-2">
														<button style="margin-top: 28px;" type="submit" class="btn btn-primary legitRipple"> Send Invite<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
														</div>
													</div>
													</form>
												<div id="append_send_invite">
													<?php if(count($client_family)>0){ ?>
													<?php foreach($client_family as $row){ ?>
												<div class="row" style="padding: 15px 0px;">
													<div class="col-md-4">
														<div class="d-flex align-items-center">
														<div class="mr-3"> <img src="<?php echo base_url(); ?>assets/images/userimg/face5.jpg" class="rounded-circle" width="40" height="40" alt=""> </div>
														<div> <a href="#" class="text-default font-weight-semibold letter-icon-title"><?php echo $row->first_name." ".$row->last_name; ?></a>
															<div class="text-muted font-size-sm"><?php echo $row->email_address; ?></div>
														</div>
														</div>
													</div>
													<?php if($row->status == "added"){ ?>
													<div class="col-md-3"></div>
													<div class="col-md-3">
														<button style="width: 80%;" type="button" class="btn btn-primary legitRipple" onclick="window.location='<?php echo site_url("agency/clients/send_invite/".$row->id.""); ?>'"> Send Invite<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
													</div>
													<?php } 
													
													if($row->status == "pending"){ 
														?>
													<div class="col-md-3">
														<button style="width: 80%;" type="button" class="btn btn-outline alpha-danger text-danger-800 border-danger-600 legitRipple">Pending</button>
													</div>
													<div class="col-md-3">
														<button style="width: 80%;" type="submit" class="btn btn-primary legitRipple" onclick="resendInvite('<?php echo $row->id; ?>')"> Re-send<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
													</div>
													<?php } 
													
													if($row->status =="joined"){ ?>
													<div class="col-md-3">
														<button style="width: 80%;" type="button" class="btn btn-outline alpha-success text-success-800 border-success-600 legitRipple">Joined</button>
													</div>
													<div class="col-md-3"></div>
													<?php } ?>
													</div>
													<?php }} ?>
												</div>
												<!-- <div class="col-md-12" style="text-align: right; padding-top: 15px; padding-bottom: 15px;">
													<button type="submit" class="btn btn-primary legitRipple"> Done<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
												</div> -->
												</div>
												<!-- /dropdown list --> 
											
											</div>
										</div>
										<div class="tab-pane fade" id="life_directive2">
											<div class="row" style="margin-top: 30px;">
												<div class="col-md-12">
													<table>
														<tr>
															<td style="width: 250px;"><strong>Life Directive document:</strong></td>
															<td><span><a href="<?php if(isset($client_detail->client_document_detail->full_path)){echo base_url().$client_detail->client_document_detail->full_path;} ?>" download><?php if(isset($client_detail->client_document_detail->file_name)){echo $client_detail->client_document_detail->file_name;} ?></a></span></td>
														</tr>
														<tr>
															<td style="width: 250px;"><strong>Client Dietry requirements:</strong></td>
															<td><span><?php echo $client_detail->dietry_requirements; ?></span></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Primary Care Doctor:</strong></td>
															<td><span><?php if(isset($client_detail->pcd_name)){echo $client_detail->pcd_name;} ?></span></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Primary Doctor Contact Info:</strong></td>
															<td><?php if(isset($client_detail->pcd_name)){echo $client_detail->pcd_contact;} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Preferd Hospital:</strong></td>
															<td><?php if(isset($client_detail->prefered_hospital)){ echo $client_detail->prefered_hospital;} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Special Instruction:</strong></td>
															<td><?php if(isset($client_detail->special_instructions)){echo $client_detail->special_instructions;} ?></td>
														</tr>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<?php if (isset($client_detail->linked_profile_detail)) { ?>
						
					<div class="tab-pane fade" id="top-justified-tab2">
						
						<div class="row">
							<div class="col-md-12">
								<div class="card-body">
									<ul class="nav nav-tabs nav-tabs-bottom">
										<li class="nav-item" style="padding-right: 25px;"><a href="#client_information2" class="nav-link active" data-toggle="tab">Client Information</a></li>
										<li class="nav-item" style="padding-right: 25px;"><a href="#special_needs2" class="nav-link" data-toggle="tab">Special Needs</a></li>
										<li class="nav-item" style="padding-right: 25px;"><a href="#medical_history2" class="nav-link" data-toggle="tab">Medical History</a></li>
										<li class="nav-item" style="padding-right: 25px;"><a href="#family_center2" class="nav-link" data-toggle="tab">Family Center</a></li>
										<li class="nav-item"><a href="#life_directive" class="nav-link" data-toggle="tab">End of Life Directive</a></li>
										<li class="nav-item" style="right: 3% !important; position: absolute;"><a href="<?php echo site_url("agency/clients/edit_client/".$client_detail->linked_profile_detail->id); ?>"><button class="btn btn-light" style="background-color: #fff;"><i class="icon-google-drive mr-2"></i> Edit Profile</button></a></li>
									</ul>

									<div class="tab-content">
										<div class="tab-pane fade show active" id="client_information2">
											<div class="row" style="margin-top: 20px;">
												<div class="col-md-12">
													<div class="d-flex align-items-center">
														<div class="mr-3">
															<h4><?php //echo $client_detail->linked_profile_detail->first_name." ".$client_detail->linked_profile_detail->last_name; ?></h4>
														</div>
													</div>
												</div>
											</div>
											<div class="row" style="margin-top: 20px;">
												<div class="col-md-12">
													<table>
														<tr>
															<td style="width: 200px;"><strong>Phone:</strong></td>
															<td><span><?php echo $client_detail->linked_profile_detail->mobile_number; ?></span></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Email:</strong></td>
															<td><span><?php if(isset($client_detail->linked_profile_detail->email_address)){echo $client_detail->linked_profile_detail->email_address;} ?></span></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Gender:</strong></td>
															<td><?php echo $client_detail->linked_profile_detail->gender; ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Client From:</strong></td>
															<td><?php if(isset($client_detail->linked_profile_detail->client_from)){ echo $client_detail->linked_profile_detail->client_from;} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Client To:</strong></td>
															<td><?php if(isset($client_detail->linked_profile_detail->client_to)){echo $client_detail->linked_profile_detail->client_to;} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Birthday:</strong></td>
															<td><?php if(isset($client_detail->linked_profile_detail->dob)){echo date("M,d-Y",strtotime($client_detail->linked_profile_detail->dob));} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Level of Care:</strong></td>
															<td><?php if(isset($client_detail->linked_profile_detail->level_care)){echo $client_detail->linked_profile_detail->level_care;} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Client Pets:</strong></td>
															<td><?php if(isset($client_detail->linked_profile_detail->pets_types)){echo $client_detail->linked_profile_detail->pets_types;} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Rate per Hour:</strong></td>
															<td><?php if(isset($client_detail->linked_profile_detail->rate_per_hour)){echo $client_detail->linked_profile_detail->rate_per_hour;} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Rate per Week:</strong></td>
															<td><?php if(isset($client_detail->linked_profile_detail->hours_per_week)){echo $client_detail->linked_profile_detail->hours_per_week;} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Billing Cycle:</strong></td>
															<td><?php if(isset(CON_CLIENT_BILLIBG_CYCLE[$client_detail->linked_profile_detail->billing_cycle])){echo CON_CLIENT_BILLIBG_CYCLE[$client_detail->linked_profile_detail->billing_cycle];} ?></td>
														</tr>
													</table>
												</div>
											</div>
										</div>

										<div class="tab-pane fade" id="special_needs2">
											<div class="row" style="margin-top: 30px;">
												<div class="col-md-12">
													<table>
														<tr>
															<td style="width: 250px;"><strong>Client Dietry requirements:</strong></td>
															<td><span><?php if(isset($client_detail->linked_profile_detail->dietry_requirements)){echo $client_detail->linked_profile_detail->dietry_requirements;} ?></span></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Client Fluid requirements:</strong></td>
															<td><span><?php if(isset($client_detail->linked_profile_detail->fluid_requirements)){echo $client_detail->linked_profile_detail->fluid_requirements;} ?></span></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Medication list:</strong></td>
															<td><?php echo $client_detail->linked_profile_detail->medication_list; ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Allergies list:</strong></td>
															<td><?php if(isset($client_detail->linked_profile_detail->allergies_list)){ echo $client_detail->linked_profile_detail->allergies_list;} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Oxygen Quantity:</strong></td>
															<td><?php if(isset($client_detail->linked_profile_detail->oxygen_quantity)){echo $client_detail->linked_profile_detail->oxygen_quantity;} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Oxygen administered:</strong></td>
															<td><?php if(isset($client_detail->linked_profile_detail->oxygen_administered)){echo $client_detail->linked_profile_detail->oxygen_administered;} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Mobility needs:</strong></td>
															<td><?php if(isset(CON_CLIENT_MOBILITY_NEEDS[$client_detail->linked_profile_detail->mobility_needs])){
																echo CON_CLIENT_MOBILITY_NEEDS[$client_detail->linked_profile_detail->mobility_needs];
															} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Client transportation:</strong></td>
															<td><?php if(isset($client_detail->linked_profile_detail->transportation_requirements)){echo $client_detail->linked_profile_detail->transportation_requirements;} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Client transfer needs:</strong></td>
															<td><?php if(isset($client_detail->linked_profile_detail->transfer_needs)){echo $client_detail->linked_profile_detail->transfer_needs;} ?></td>
														</tr>
													</table>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="medical_history2">
											<?php $medical_history = explode(",", $client_detail->linked_profile_detail->medical_history); ?>
											<div class="row" style="margin: 40px 0;">
												<?php foreach (load_table("client_medical_history") as $CMH): ?> 
												<?php if (in_array($CMH->id, $medical_history)) : ?>
												<div class="col-md-4" style="margin-top: 5px 0 ">
													<i class="icon-checkmark3"></i>
													<span style="margin-left: 10px;"><?php echo $CMH->name; ?></span>
												</div>
												<?php endif ?>
											<?php endforeach; ?>
											</div>
										</div>
										<div class="tab-pane fade" id="family_center2">
											<div class="col-md-12"> 
												<!-- Dropdown list -->
												<h5 style="text-align: center;">Send an invite to your clients</h5>
												<div class="col-md-9">
													<form id="send_invite_form" action="<?php echo site_url("agency/clients/add_send_invite"); ?>" method="POST" role="form">
													<input type="hidden" name="client_id" value="<?php echo $client_detail->id; ?>">
													<div class="row" style="padding: 50px 0px;">
														<div class="col-md-2">
														<div class="form-group">
															<label>First Name:</label>
															<input type="text" class="form-control" name="first_name" placeholder="John Doe">
														</div>
														</div>
														<div class="col-md-2">
														<div class="form-group">
															<label>Last Name:</label>
															<input type="text" class="form-control" name="last_name" placeholder="John Doe">
														</div>
														</div>
														<div class="col-md-2">
														<div class="form-group">
															<label>Email:</label>
															<input type="email" class="form-control" name="email_address" placeholder="example@gmail.com">
														</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<label>Phone #:</label>
																<input type="text" name="mobile_number"  class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999">
															</div>
														</div>
														<div class="col-md-2">
														<button style="margin-top: 28px;" type="submit" class="btn btn-primary legitRipple"> Send Invite<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
														</div>
													</div>
													</form>
													<div id="append_send_invite">
													<?php if(count($client_family)>0){ ?>
													<?php foreach($client_family as $row){ ?>
													<div class="row" style="padding: 15px 0px;">
													<div class="col-md-4">
														<div class="d-flex align-items-center">
														<div class="mr-3"> <img src="<?php// echo caregiver_image($row->id); ?>" class="rounded-circle" width="40" height="40" alt=""> </div>
														<div> <a href="#" class="text-default font-weight-semibold letter-icon-title"><?php echo $row->first_name." ".$row->last_name; ?></a>
															<div class="text-muted font-size-sm"><?php echo $row->email_address; ?></div>
														</div>
														</div>
													</div>
													<?php if($row->status == "added"){ ?>
													<div class="col-md-3"></div>
													<div class="col-md-3">
														<button style="width: 80%;" type="button" class="btn btn-primary legitRipple" onclick="window.location='<?php echo site_url("agency/clients/send_invite/".$row->id.""); ?>'"> Send Invite<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
													</div>
													<?php } 
													
													if($row->status == "pending"){ 
														?>
													<div class="col-md-3">
														<button style="width: 80%;" type="button" class="btn btn-outline alpha-danger text-danger-800 border-danger-600 legitRipple">Pending</button>
													</div>
													<div class="col-md-3">
														<button style="width: 80%;" type="submit" class="btn btn-primary legitRipple" onclick="resendInvite('<?php echo $row->id; ?>')"> Re-send<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
													</div>
													<?php } 
													
													if($row->status =="joined"){ ?>
													<div class="col-md-3">
														<button style="width: 80%;" type="button" class="btn btn-outline alpha-success text-success-800 border-success-600 legitRipple">Joined</button>
													</div>
													<div class="col-md-3"></div>
													<?php } ?>
													</div>
													<?php }} ?>
												</div>
												<!-- <div class="col-md-12" style="text-align: right; padding-top: 15px; padding-bottom: 15px;">
													<button type="submit" class="btn btn-primary legitRipple"> Done<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
												</div> -->
												</div>
												<!-- /dropdown list --> 
											
											</div>
										</div>
										<div class="tab-pane fade" id="life_directive">
											<div class="row" style="margin-top: 30px;">
												<div class="col-md-12">
													<table>
														<tr>
															<td style="width: 250px;"><strong>Life Directive document:</strong></td>
															<td><span><a href="<?php if(isset($client_detail->client_document_detail->full_path)){echo base_url().$client_detail->client_document_detail->full_path;} ?>" download><?php if(isset($client_detail->client_document_detail->file_name)){echo $client_detail->client_document_detail->file_name;} ?></a></span></td>
														</tr>
														<tr>
															<td style="width: 250px;"><strong>Client Dietry requirements:</strong></td>
															<td><span><?php echo $client_detail->dietry_requirements; ?></span></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Primary Care Doctor:</strong></td>
															<td><span><?php if(isset($client_detail->pcd_name)){echo $client_detail->pcd_name;} ?></span></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Primary Doctor Contact Info:</strong></td>
															<td><?php if(isset($client_detail->pcd_name)){echo $client_detail->pcd_contact;} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Preferd Hospital:</strong></td>
															<td><?php if(isset($client_detail->prefered_hospital)){ echo $client_detail->prefered_hospital;} ?></td>
														</tr>
														<tr>
															<td style="width: 150px;"><strong>Special Instruction:</strong></td>
															<td><?php if(isset($client_detail->special_instructions)){echo $client_detail->special_instructions;} ?></td>
														</tr>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include(APPPATH."views/agency/inc/footer.php");?>

<script>

$('#send_invite_form').submit(function(e) {
	e.preventDefault();
	var form = $(this);
	$.ajax({
		type: 'post',	
        url: '<?php echo site_url("agency/clients/add_send_invite"); ?>',
        dataType: 'html',
        data: form.serialize(),                         
        success: function(data){
			$("#append_send_invite").append(data);
			$("input[name=first_name]").val(" ");
			$("input[name=last_name]").val(" ");
			$("input[name=email_address]").val(" ");
			$("input[name=mobile_number]").val(" ");
        }
     });
});

function resendInvite(id){
	$.ajax({
		type: 'post',	
        url: '<?php echo site_url("agency/clients/send_invite/"); ?>'+id,
        dataType: 'html',                       
        success: function(data){
			swal("Invitation, send");
        }
     });
}
</script>