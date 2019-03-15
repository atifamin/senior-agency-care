<?php include(APPPATH."views/agency/inc/header.php");?>
<script src="<?php echo base_url(); ?>/assets/js/demo_pages/client_form_wizard.js"></script>
<style type="text/css">
	.token-input{
		min-width: 100% !important;
	}
</style>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="row" style="padding: 12px;">
				<div class="col-md-6">
					<div class="row" style="text-align: center;">
						<div class="col-md-5">
							<a href="<?php echo site_url("agency/clients/add_client"); ?>" class="btn btn-light legitRipple" style="font-size: 11px;"><i style="margin-right: 10px;" class="icon-users4"></i>Edit a client</a>
						</div>
						<!-- <span style="margin: 10px auto; font-size: 10px;">OR</span>
						<div class="col-md-5">
							<a href="<?php echo site_url("agency/caregiver/send_invite_to_caregiver"); ?>" class="btn btn-light legitRipple" style="font-size: 11px;"><i class="icon-make-group mr-2"></i>Invite your caregivers</a>
						</div> -->
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
		<!-- Wizard with validation -->
		<div class="card">
			<div class="card-header" style="text-align: center;">
				<h6>Edit a client</h6>
			</div>

			<form id="client_information" role="form" enctype="multipart" method="post" class="wizard-form steps-validation" action="#" data-fouc>
				<h6><strong>Client Information</strong></h6>
				<fieldset>
                <input type="hidden" id="client_id" value="<?php echo $client->id; ?>">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>First Name:</label>
								<input type="text" name="first_name" id="first_name" class="form-control" value="<?php if(isset($client->first_name)){echo $client->first_name;} ?>" placeholder="Add client first name" required="required">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Last Name:</label>
								<input type="text" name="last_name" id="last_name" class="form-control" value="<?php if(isset($client->last_name)){echo $client->last_name;} ?>" placeholder="Add client last name" required="required">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Client phone #:</label>
								<input type="text" name="mobile_number" id="mobile_number" value="<?php if(isset($client->mobile_number)){echo $client->mobile_number;} ?>" class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Client email address:</label>
								<input type="email" name="email_address" id="email_address" class="form-control" value="<?php if(isset($client->email_address)){echo $client->email_address;} ?>" placeholder="client@email.com" required="required">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<label>Client From:</label>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
		                                <select name="client_from" id="client_from" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
		                                    <option></option> 
											<?php $year = date("Y");
											for($i= $year;$i > 1919;$i--){ ?>
												<option <?php if($client->client_from == $i){echo "selected='selected'";} ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
											<?php } ?>
		                                </select>
		                            </div>
								</div>
							</div>
						</div>

						<div class="col-md-2">
							<label>To:</label>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
		                                <select name="client_to" id="client_to" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
		                                    <option></option> 
		                                    <!-- <option value="1995">1995</option> 
		                                    <option value="...">...</option> 
		                                    <option value="1980">1980</option>  -->
											<?php $year = date("Y");
											for($i= $year;$i > 1919;$i--){ ?>
												<option <?php if($client->client_to == $i){echo "selected='selected'";} ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
											<?php } ?>
		                                </select>
		                            </div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding: 0;">
							<div class="form-group mb-3 mb-md-2">
								<label class="d-block font-weight-semibold">Gender:</label>
								<div class="custom-control custom-control-right custom-radio custom-control-inline">
									<input type="radio" <?php if(isset($client->gender)){ if($client->gender == "male"){echo "checked";}} ?> class="custom-control-input" name="gender" value="male" id="gender" >
									<label class="custom-control-label position-static" for="gender">Male</label>
								</div>

								<div class="custom-control custom-control-right custom-radio custom-control-inline">
									<input type="radio" <?php if(isset($client->gender)){ if($client->gender == "female"){echo "checked";}} ?> class="custom-control-input" name="gender" value="female" id="female">
									<label class="custom-control-label position-static" for="female">Female</label>
								</div>
							</div>
						</div>
                        <?php $date = date("F-d-Y",strtotime($client->dob));
                              $date_array = explode('-', $date);
                              //print_r($date_array);
                         ?>
						<div class="col-md-6">
							<label>Date of Birth:</label>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
		                                <select name="month" id="month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
		                                    
		                                    <option <?php if($date_array[0] == "January"){echo "selected='selected'";} ?> value="January">January</option> 
	                                        <option <?php if($date_array[0] == "Februray"){echo "selected='selected'";} ?> value="Februray">Februray</option>
	                                        <option <?php if($date_array[0] == "March"){echo "selected='selected'";} ?> value="March">March</option>
	                                        <option <?php if($date_array[0] == "April"){echo "selected='selected'";} ?> value="April">April</option>
	                                        <option <?php if($date_array[0] == "May"){echo "selected='selected'";} ?> value="May">May</option>
	                                        <option <?php if($date_array[0] == "June"){echo "selected='selected'";} ?> value="June">June</option>
	                                        <option <?php if($date_array[0] == "July"){echo "selected='selected'";} ?> value="July">July</option>
	                                        <option <?php if($date_array[0] == "August"){echo "selected='selected'";} ?> value="August">August</option>
	                                        <option <?php if($date_array[0] == "September"){echo "selected='selected'";} ?> value="September">September</option>
	                                        <option <?php if($date_array[0] == "October"){echo "selected='selected'";} ?> value="October">October</option>
	                                        <option <?php if($date_array[0] == "November"){echo "selected='selected'";} ?> value="November">November</option>
	                                        <option <?php if($date_array[0] == "December"){echo "selected='selected'";} ?> value="December">December</option> 
		                                </select>
		                            </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
		                                <select name="day" id="day" data-placeholder="Day" class="form-control form-control-select2" data-fouc>
		                                    <option></option> 
		                                    <option <?php if($date_array[1] == "01"){echo "selected='selected'";} ?> value="1">1</option> 
		                                    <option <?php if($date_array[1] == "02"){echo "selected='selected'";} ?> value="2">2</option> 
		                                    <option <?php if($date_array[1] == "03"){echo "selected='selected'";} ?>value="3">3</option>
		                                    <option <?php if($date_array[1] == "04"){echo "selected='selected'";} ?> value="4">4</option>
		                                    <option <?php if($date_array[1] == "05"){echo "selected='selected'";} ?> value="5">5</option>
		                                    <option <?php if($date_array[1] == "06"){echo "selected='selected'";} ?> value="6">6</option>
		                                    <option <?php if($date_array[1] == "07"){echo "selected='selected'";} ?> value="7">7</option>
		                                    <option <?php if($date_array[1] == "08"){echo "selected='selected'";} ?> value="8">8</option>
		                                    <option <?php if($date_array[1] == "09"){echo "selected='selected'";} ?> value="9">9</option>
		                                    <option <?php if($date_array[1] == "10"){echo "selected='selected'";} ?> value="10">10</option>
		                                    <option <?php if($date_array[1] == "11"){echo "selected='selected'";} ?> value="11">11</option>
		                                    <option <?php if($date_array[1] == "12"){echo "selected='selected'";} ?> value="12">12</option>
		                                    <option <?php if($date_array[1] == "13"){echo "selected='selected'";} ?> value="13">13</option>
		                                    <option <?php if($date_array[1] == "14"){echo "selected='selected'";} ?> value="14">14</option>
		                                    <option <?php if($date_array[1] == "15"){echo "selected='selected'";} ?> value="15">15</option>
		                                    <option <?php if($date_array[1] == "16"){echo "selected='selected'";} ?> value="16">16</option>
		                                    <option <?php if($date_array[1] == "17"){echo "selected='selected'";} ?> value="17">17</option>
		                                    <option <?php if($date_array[1] == "18"){echo "selected='selected'";} ?> value="18">18</option>
		                                    <option <?php if($date_array[1] == "19"){echo "selected='selected'";} ?> value="19">19</option>
		                                    <option <?php if($date_array[1] == "20"){echo "selected='selected'";} ?> value="20">20</option>
		                                    <option <?php if($date_array[1] == "21"){echo "selected='selected'";} ?> value="21">21</option>
		                                    <option <?php if($date_array[1] == "22"){echo "selected='selected'";} ?> value="22">22</option>
		                                    <option <?php if($date_array[1] == "23"){echo "selected='selected'";} ?> value="23">23</option>
		                                    <option <?php if($date_array[1] == "24"){echo "selected='selected'";} ?> value="24">24</option>
		                                    <option <?php if($date_array[1] == "25"){echo "selected='selected'";} ?> value="25">25</option>
		                                    <option <?php if($date_array[1] == "26"){echo "selected='selected'";} ?> value="26">26</option>
		                                    <option <?php if($date_array[1] == "27"){echo "selected='selected'";} ?> value="27">27</option>
		                                    <option <?php if($date_array[1] == "28"){echo "selected='selected'";} ?> value="28">28</option>
		                                    <option <?php if($date_array[1] == "29"){echo "selected='selected'";} ?> value="29">29</option>
		                                    <option <?php if($date_array[1] == "30"){echo "selected='selected'";} ?> value="30">30</option>
		                                    <option <?php if($date_array[1] == "31"){echo "selected='selected'";} ?> value="31">31</option>
		                                </select>
		                            </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
		                                <select name="year" id="year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                        <?php
											$year = date("Y");
											for($i= $year;$i > 1919;$i--){ ?>
												<option <?php if($date_array[2] == $i){echo "selected='selected'";} ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
											<?php } ?>
		                                </select>
		                            </div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Add client's level of care</label>
					                    <select name="level_care" id="level_care" data-placeholder="Select" class="form-control form-control-select2" data-fouc>
					                        <option></option>
					                        <option <?php if(isset($client->level_care)){if($client->level_care == 1){echo "selected='selected'";}} ?> value="1">1</option>
					                        <option <?php if(isset($client->level_care)){if($client->level_care == 2){echo "selected='selected'";}} ?> value="2">2</option>
					                        <option <?php if(isset($client->level_care)){if($client->level_care == 3){echo "selected='selected'";}} ?> value="3">3</option>
					                    </select>
				                    </div>
								</div>
								<div class="col-md-6">
									<div class="form-check form-check-switch form-check-switch-left">
										<label>Does client have any pets</label>
										<input type="checkbox" <?php if(isset($client->is_pets)){if($client->is_pets == 1){echo "checked";}} ?> name="is_pets"  data-on-text="Yes" data-off-text="No" class="form-check-input-switch" data-size="small" id="client_pets" onchange="listPets()" value="<?php if($client->is_pets == 1){ echo 1;}else{echo 0;} ?>">
									</div>
								</div>
								<div class="col-md-12" id="pet_list" style="display: none;">
									<div class="form-group">
										<label>List kinds of pets</label>
										<input type="text" name="pets_types" id="pets_types" value="<?php if(isset($client->pets_types)){echo $client->pets_types;} ?>" class="form-control tokenfield" value="" placeholder="Add multiple kinds(with comma seperated)" data-fouc>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Add client regular rate per hr: </label>
										<input type="text" name="rate_per_hour" value="<?php if(isset($client->rate_per_hour)){echo $client->rate_per_hour;} ?>" id="rate_per_hour" value="" class="form-control touchspin-empty" placeholder="Enter Rate $">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Add client's available hr per week: </label>
										<input type="text" name="hours_per_week" id="hours_per_week"  value="<?php if(isset($client->hours_per_week)){echo $client->hours_per_week;} ?>" class="form-control touchspin-empty" placeholder="Enter Hours">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Add billing cycle<span style="margin-left: 10px;">(How often you send invite to your client)</span></label>
			                    <select name="billing_cycle" id="billing_cycle" data-placeholder="Select" class="form-control form-control-select2" data-fouc>
			                        <option></option>
			                        <?php foreach (CON_CLIENT_BILLIBG_CYCLE as $billingkey => $billingvalue) { ?>
			                        	<option value="<?php echo $billingkey; ?>" <?php 
			                        	if ($billingkey == $client->billing_cycle){echo "selected='selected'";} ?>><?php echo $billingvalue; ?></option>
			                        <?php } ?>
			                    </select>
		                    </div>
						</div>
					</div>
				</fieldset>

				<h6><strong>Client Special Needs</strong></h6>
				<fieldset>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group pt-2">
								<label class="d-block font-weight-semibold">Select client's dietry requirements</label>
								<div class="custom-control custom-radio">
									<input type="radio" <?php if(isset($client->dietry_requirements)){if($client->dietry_requirements == "Regular diet"){echo "checked";}} ?> class="custom-control-input" name="dietry_requirements" value="Regular diet" id="regular_diet">
									<label class="custom-control-label" for="regular_diet">Regular diet</label>
								</div>

								<div class="custom-control custom-radio">
									<input type="radio" class="custom-control-input" name="dietry_requirements" <?php if(isset($client->dietry_requirements)){if($client->dietry_requirements == "Mechanical diet"){echo "checked";}} ?> value="Mechanical diet" id="mechanical_diet">
									<label class="custom-control-label" for="mechanical_diet">Mechanical diet</label>
								</div>

								<div class="custom-control custom-radio">
									<input type="radio" class="custom-control-input" name="dietry_requirements" <?php if(isset($client->dietry_requirements)){if($client->dietry_requirements == "Puree diet"){echo "checked";}} ?> value="Puree diet" id="pure_diet">
									<label class="custom-control-label" for="pure_diet">Puree diet</label>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group pt-2">
								<label class="d-block font-weight-semibold">Fluid requirements</label>
								<div class="custom-control custom-radio">
									<input type="radio" class="custom-control-input" name="fluid_requirements" <?php if(isset($client->fluid_requirements)){if($client->fluid_requirements == "Thin liquids"){echo "checked";}} ?> value="Thin liquids" id="thin_liquid">
									<label class="custom-control-label" for="thin_liquid">Thin liquids</label>
								</div>

								<div class="custom-control custom-radio">
									<input type="radio" class="custom-control-input" name="fluid_requirements" <?php if(isset($client->fluid_requirements)){if($client->fluid_requirements == "Nector thick liquids"){echo "checked";}} ?> value="Nector thick liquids" id="nector_liquid">
									<label class="custom-control-label" for="nector_liquid">Nector thick liquids</label>
								</div>

								<div class="custom-control custom-radio">
									<input type="radio" class="custom-control-input" name="fluid_requirements" <?php if(isset($client->fluid_requirements)){if($client->fluid_requirements == "Honey thick liquids"){echo "checked";}} ?> value="Honey thick liquids" id="honey_liquid">
									<label class="custom-control-label" for="honey_liquid">Honey thick liquids</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Client medication list</label>
								<input type="text" name="medication_list" id="medication_list" value="<?php if(isset($client->medication_list)){echo $client->medication_list;} ?>" class="form-control tokenfield" value="" placeholder="Add multiple medication(with comma seperated)" data-fouc>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Client allergies list</label>
								<input type="text" name="allergies_list" id="allergies_list" class="form-control tokenfield" value="<?php if(isset($client->allergies_list)){echo $client->allergies_list;} ?>" placeholder="Add multiple allergies(with comma seperated)" data-fouc>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-check form-check-switch form-check-switch-left">
								<label class="form-check-label d-flex align-items-center">
									<span style="margin-right: 15px">Does the client recieve oxygen</span>
									<input style="margin-left: 15px;" name="is_oxygen" <?php if(isset($client->is_oxygen)){if($client->is_oxygen == 1){echo "checked";}} ?>  type="checkbox" data-on-text="Yes" data-off-text="No" class="form-check-input-switch" data-size="small" onchange="clientOxygen()" id="oxygen_client" value="<?php if($client->is_oxygen == 1){echo 1;}else{echo 0;} ?>">
								</label>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: 10px; display: none;" id="client_oxygen">
						<div class="col-md-6">
							<div class="form-group">
								<label><span class="text-muted">If so, how much oxygen does the client recieve?</span> </label>
								<input type="text" value="<?php if(isset($client->oxygen_quantity)){echo $client->oxygen_quantity;} ?>" name="oxygen_quantity" id="oxygen_quantity"  class="form-control touchspin-empty" placeholder="Mg">
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: 20px;">
						<div class="col-md-6">
							<div class="form-group">
								<label>When is oxygen administered to the client:</label>
								<input type="text" name="oxygen_administered" value="<?php if(isset($client->oxygen_administered)){echo $client->oxygen_administered;} ?>" id="oxygen_administered" class="form-control" placeholder="Add details how and when oxygen is administered">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-check form-check-switch form-check-switch-left">
								<label class="form-check-label d-flex align-items-center">
									<span style="margin-right: 15px">Does client have mobilty needs?</span>
									<input style="margin-left: 15px;" <?php if(isset($client->is_mobilty)){if($client->is_mobilty == 1){echo "checked";}} ?>  name="is_mobilty" type="checkbox" data-on-text="Yes" data-off-text="No" class="form-check-input-switch" data-size="small" onchange="clientNeed()" id="need_client" value="<?php if($client->is_mobilty == 1){echo 1;}else{echo 0;} ?>">
								</label>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: 20px; display: none;" id="client_needs">
						<div class="col-md-4">
							<div class="form-group">
								<label>Add client's mobility needs</label>
			                    <select name="mobility_needs" id="mobility_needs" data-placeholder="Add client's mobility needs" class="form-control form-control-select2" data-fouc>
			                        <option></option>
			                        <option <?php if(isset($client->mobility_needs)){if($client->mobility_needs == 1){echo "selected='selected'";}} ?> value="1">Walking cane</option>
			                        <option <?php if(isset($client->mobility_needs)){if($client->mobility_needs == 2){echo "selected='selected'";}} ?> value="2">Weelchair</option>
			                    </select>
		                    </div>
						</div>
					</div>
					<div class="row" style="margin-top: 20px;">
						<div class="col-md-6">
							<div class="form-group">
								<label>Add the client transportation requirements</label>
								<input type="text" name="transportation_requirements" value="<?php if(isset($client->transportation_requirements)){echo $client->transportation_requirements;} ?>" id="transportation_requirements" class="form-control" placeholder="Add a detailed description of the clients transportation requirements">
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: 20px;">
						<div class="col-md-6">
							<div class="form-group">
								<label>Add client's transfer needs</label>
								<input type="text" name="transfer_needs" value="<?php if(isset($client->transfer_needs)){echo $client->transfer_needs;} ?>" id="transfer_needs" class="form-control" placeholder="Add a detailed description of the clients trasfer needs">
							</div>
						</div>
					</div>
				</fieldset>

				<h6><strong>Family Center</strong></h6>
				<fieldset>
					<div class="row">
						<div class="col-md-2 offset-md-1">
							<div class="form-group">
								<label>First Name:</label>
								<input type="text" name="" id="first_name_family" class="form-control" placeholder="Add first name">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Last Name:</label>
								<input type="text" name="" id="last_name_family" class="form-control" placeholder="Add last name">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Email:</label>
								<input type="email" name="" id="email_address_family" class="form-control" placeholder="@gmail.com">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Phone #:</label>
								<input type="text" name="" id="mobile_number_family" class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999">
							</div>
						</div>
						<div class="col-md-2">
							<a style="margin-top: 28px;" href="javascript:;"  class="btn btn-primary legitRipple">Add<i style="margin-left: 8px;" class="icon-arrow-right14"></i></a>
						</div>
					</div>
					<div class="row" style="padding: 15px 0px;">
						<div class="col-md-3 offset-md-1">
							<div class="d-flex align-items-center">
								<div class="mr-3">
									<img src="<?php echo base_url(); ?>assets/images/userimg/face5.jpg" class="rounded-circle" width="40" height="40" alt="">
								</div>
								<div>
									<a href="#" class="text-default font-weight-semibold letter-icon-title">Margo Baker</a>
									<div class="text-muted font-size-sm">@gmail.com</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<button type="button" class="btn btn-outline alpha-success text-success-800 border-success-600 legitRipple">Edit<i style="font-size: 10px; margin-left: 20px;" class="icon-arrow-down15"></i></button>
						</div>
					</div>
					<div class="row" style="padding: 15px 0px;">
						<div class="col-md-3 offset-md-1">
							<div class="d-flex align-items-center">
								<div class="mr-3">
									<img src="<?php echo base_url(); ?>assets/images/userimg/face17.jpg" class="rounded-circle" width="40" height="40" alt="">
								</div>
								<div>
									<a href="#" class="text-default font-weight-semibold letter-icon-title">Margo Baker</a>
									<div class="text-muted font-size-sm">@gmail.com</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<button type="button" class="btn btn-outline alpha-success text-success-800 border-success-600 legitRipple">Edit<i style="font-size: 10px; margin-left: 20px;" class="icon-arrow-down15"></i></button>
						</div>
					</div>
				</fieldset>
                <?php
                $WhereArray = array(
                    "module_id" => $client->id,
                    "module" => "client"
                );
                $Client_file = $this->common_model->listingMultipleWhereRow("media", $WhereArray); 
                 ?>
				<h6><strong>End of Life Directive</strong></h6>
				<fieldset>
					<div class="row">
						<div class="col-md-6 offset-md-1">
							<div class="form-group">
								<label>Upload End of Life Directive document:</label>
		                        <input name="file" id="file" type="file" class="form-input-styled" data-fouc>
		                        <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
		                    </div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 offset-md-1">
							<div class="form-group">
								<label>Add the Primary Care Doctor:</label>
								<input type="text" value="<?php if(isset($client->pcd_name)){echo $client->pcd_name;} ?>" name="pcd_name" id="pcd_name" class="form-control" placeholder="Enter PCD's name">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 offset-md-1">
							<div class="form-group">
								<label>Primary Doctor Contact Info:</label>
								<input type="text" value="<?php if(isset($client->pcd_contact)){echo $client->pcd_contact;} ?>" name="pcd_contact" id="pcd_contact" class="form-control" placeholder="Primary Doctor Contact Info" data-mask="+99-99-9999-9999">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 offset-md-1">
							<div class="form-group">
								<label>Enter prefered hospital in case of emergency:</label>
								<div class="form-group form-group-feedback form-group-feedback-left">
									<input type="text" value="<?php if(isset($client->prefered_hospital)){echo $client->prefered_hospital;} ?>" name="prefered_hospital" id="prefered_hospital" class="form-control form-control-sm" placeholder="Enter prefered hospital">
									<div class="form-control-feedback form-control-feedback-sm">
										<i class="icon-pin-alt"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 offset-md-1">
							<div class="form-group">
								<label>Enter any special instructions:</label>
								<textarea rows="5" cols="3" name="special_instructions" id="special_instructions" class="form-control" placeholder="Special Instructions"><?php if(isset($client->special_instructions)){echo $client->special_instructions;} ?></textarea>
							</div>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
		<!-- /wizard with validation -->
	</div>
</div>

<!-- Theme JS files -->
	<script src="<?php echo base_url(); ?>assets/js/plugins/forms/tags/tagsinput.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/forms/tags/tokenfield.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/ui/prism.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_tags_input.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_select2.js"></script>

	<script src="<?php echo base_url(); ?>assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/forms/styling/switch.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_checkboxes_radios.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/forms/inputs/touchspin.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_input_groups.js"></script>
	<!-- /theme JS files -->
<?php include(APPPATH."views/agency/inc/footer.php");?>
<script type="text/javascript">
$(document).ready(function(){
    $(".filename").html('<?php echo $Client_file->name; ?>');
    var pets = $("#client_pets").val();
    if(pets == 1){
        $("#pet_list").css("display","block");
    }else{
        $("#pet_list").css("display","none");
    }
    var oxygen = $("#oxygen_client").val();
    if(oxygen == 1){
        $("#client_oxygen").css("display","block");
    }else{
        $("#client_oxygen").css("display","none");
    }
    var needs = $("#need_client").val();
    if(needs == 1){
        $("#client_needs").css("display","block");
    }else{
        $("#client_needs").css("display","none");
    }
});

	function addNewLicense(){
		$(".add_new_license").css("display","block");
		$(".license_view").css("display","none");
	}
	function viewLicense(){
		$(".add_new_license").css("display","none");
		$(".license_view").css("display","block");
	}

	function listPets(){
		var val = $("#client_pets").val();
		if(val == 0){
			$("#client_pets").val(1);
			$("#pet_list").css("display","block");
		}else{
			$("#client_pets").val(0);
			$("#pet_list").css("display","none");
		}
	}

	function clientOxygen(){
		var val = $("#oxygen_client").val();
		if(val == 0){
			$("#oxygen_client").val(1);
			$("#client_oxygen").css("display","block");
		}else{
			$("#oxygen_client").val(0);
			$("#client_oxygen").css("display","none");
		}
	}

	function clientNeed(){
		var val = $("#need_client").val();
		if(val == 0){
			$("#need_client").val(1);
			$("#client_needs").css("display","block");
		}else{
			$("#need_client").val(0);
			$("#client_needs").css("display","none");
		}
	}
    
	//$("#client_information").submit(function(e){
	
	function add_new_agency(){
    //e.preventDefault();
    var file_data = $('#file').prop('files')[0];   
   
    var client_id = $("#client_id").val();
	//var notify_email =  $("input[name=notify_email]").val();
	var first_name =  $("#first_name").val();
    var last_name = $("#last_name").val();
	var mobile_number = $("#mobile_number").val();
    var email_address = $("#email_address").val();
	var client_from = $("#client_from").val();
	var client_to = $("#client_to").val();
	var gender = $("input[name=gender]:checked").val();
	var dob = $("#dob").val();
	var level_care = $("#level_care").val();
	var is_pets = $("#client_pets").val();
	var pets_types = $("#pets_types").val();
	var rate_per_hour = $("#rate_per_hour").val();
	var hours_per_week = $("#hours_per_week").val();
	var billing_cycle = $("#billing_cycle").val();
	var dietry_requirements = $("input[name=dietry_requirements]:checked").val();
	var fluid_requirements = $("input[name=fluid_requirements]:checked").val();
	var medication_list = $("#medication_list").val();
	var allergies_list = $("#allergies_list").val();
	var is_oxygen = $("#oxygen_client").val();
	var oxygen_quantity = $("#oxygen_quantity").val();
	var oxygen_administered = $("#oxygen_administered").val();
	var is_mobilty = $("#need_client").val();
	var mobility_needs = $("#mobility_needs").val();
	var transportation_requirements = $("#transportation_requirements").val();
	var transfer_needs = $("#transfer_needs").val();
	if(file_data){
	var is_directive_document = 1;
	}
	var pcd_name = $("#pcd_name").val();
	var pcd_contact = $("#pcd_contact").val();
	var prefered_hospital = $("#prefered_hospital").val();
	var special_instructions = $("#special_instructions").val();
	var month = $("#month").val();
	var day = $("#day").val();
	var year = $("#year").val();
    var form_data = new FormData();    
    if(file_data){              
    form_data.append('file', file_data);
    }
    form_data.append('client_id', client_id);
    form_data.append('first_name', first_name);
    form_data.append('last_name', last_name);
    form_data.append('email_address', email_address);
	form_data.append('mobile_number', mobile_number);
	form_data.append('client_from', client_from);
	form_data.append('client_to', client_to);
	form_data.append('gender', gender);
	form_data.append('dob', dob);
	form_data.append('level_care', level_care);
	form_data.append('is_pets', is_pets);
	form_data.append('pets_types', pets_types);
	form_data.append('rate_per_hour', rate_per_hour);
	form_data.append('hours_per_week', hours_per_week);
	form_data.append('billing_cycle', billing_cycle);
	form_data.append('dietry_requirements', dietry_requirements);
	form_data.append('fluid_requirements', fluid_requirements);
	form_data.append('medication_list', medication_list);
	form_data.append('allergies_list', allergies_list);
	form_data.append('is_oxygen', is_oxygen);
	form_data.append('oxygen_quantity', oxygen_quantity);
	form_data.append('oxygen_administered', oxygen_administered);
	form_data.append('is_mobilty', is_mobilty);
	form_data.append('mobility_needs', mobility_needs);
	form_data.append('transportation_requirements', transportation_requirements);
	form_data.append('transfer_needs', transfer_needs);
	form_data.append('is_directive_document', is_directive_document);
	form_data.append('pcd_name', pcd_name);
	form_data.append('pcd_contact', pcd_contact);
	form_data.append('prefered_hospital', prefered_hospital);
	form_data.append('special_instructions', special_instructions);
	form_data.append('month', month);
	form_data.append('day', day);
	form_data.append('year', year);
    $.ajax({
        url: '<?php echo site_url("agency/clients/update_client/".$client->id); ?>',
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(data){
			if(data == 1){
				swal("Client", "Updated successfully!");
				location.reload();
			}
        }
     });
    }


</script>