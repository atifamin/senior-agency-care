<?php include(APPPATH."views/agency/inc/header.php");?>
<script src="<?php echo base_url(); ?>/assets/js/demo_pages/client_form_wizard.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/selects/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_select2.js"></script>
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
							<a href="<?php echo site_url("agency/clients/add_client"); ?>" class="btn btn-light legitRipple" style="font-size: 11px;"><i style="margin-right: 10px;" class="icon-users4"></i>Add a client</a>
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
			<div class="card-header" >
				<div class="row">
					<h4>Is this a single client case or couple</h4>
					<div class="col-md-2">
	                    <select id="linked" class="form-control form-control-select2" onchange="linkedClient($(this).val())" data-fouc>
	                        <option value="0">SINGLE CLIENT</option>
	                        <option value="1">COUPLE CLIENTS</option> 
	                    </select>
	                </div>
	            </div>
			</div>

			<form id="client_information" role="form" enctype="multipart" method="post" class="wizard-form steps-validation" action="#" data-fouc>
				
				<h6><strong>Client Information</strong></h6>
				<fieldset>
					<input type="hidden" name="linked_profile" value="0">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>First Name:</label>
								
								<input type="text" name="first_name" id="first_name" class="form-control" placeholder="Add client first name" required="required">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Last Name:</label>
								<input type="text" name="last_name" id="last_name" class="form-control" placeholder="Add client last name" required="required">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Client phone #:</label>
								<input type="text" name="mobile_number" id="mobile_number" class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Client email address:</label>
								<input type="email" onchange="checkEmailAddress('client')" name="email_address" id="email_address" class="form-control" placeholder="client@email.com" required="required">
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
											<?php 
											$year = date("Y");
											for($i= $year;$i > 1919;$i--){ ?>
												<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
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
											<?php
											$year = date("Y");
											for($i= $year;$i > 1919;$i--){ ?>
												<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
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
									<input type="radio" class="custom-control-input" name="gender" value="male" id="gender" >
									<label class="custom-control-label position-static" for="gender">Male</label>
								</div>

								<div class="custom-control custom-control-right custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" name="gender" value="female" id="female">
									<label class="custom-control-label position-static" for="female">Female</label>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<label>Date of Birth:</label>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
		                                <select name="month" id="month" data-placeholder="Month" class="form-control form-control-select2" data-fouc required="required">
		                                    <option></option> 
		                                    <option value="January">January</option> 
	                                        <option value="Februray">Februray</option>
	                                        <option value="March">March</option>
	                                        <option value="April">April</option>
	                                        <option value="May">May</option>
	                                        <option value="June">June</option>
	                                        <option value="July">July</option>
	                                        <option value="August">August</option>
	                                        <option value="September">September</option>
	                                        <option value="October">October</option>
	                                        <option value="November">November</option>
	                                        <option value="December">December</option> 
		                                </select>
		                            </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
		                                <select name="day" id="day" data-placeholder="Day" class="form-control form-control-select2" data-fouc required="required">
		                                    <option></option> 
		                                    <option value="1">1</option> 
		                                    <option value="2">2</option> 
		                                    <option value="3">3</option>
		                                    <option value="4">4</option>
		                                    <option value="5">5</option>
		                                    <option value="6">6</option>
		                                    <option value="7">7</option>
		                                    <option value="8">8</option>
		                                    <option value="9">9</option>
		                                    <option value="10">10</option>
		                                    <option value="11">11</option>
		                                    <option value="12">12</option>
		                                    <option value="13">13</option>
		                                    <option value="14">14</option>
		                                    <option value="15">15</option>
		                                    <option value="16">16</option>
		                                    <option value="17">17</option>
		                                    <option value="18">18</option>
		                                    <option value="19">19</option>
		                                    <option value="20">20</option>
		                                    <option value="21">21</option>
		                                    <option value="22">22</option>
		                                    <option value="23">23</option>
		                                    <option value="24">24</option>
		                                    <option value="25">25</option>
		                                    <option value="26">26</option>
		                                    <option value="27">27</option>
		                                    <option value="28">28</option>
		                                    <option value="29">29</option>
		                                    <option value="30">30</option>
		                                    <option value="31">31</option>
		                                </select>
		                            </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
		                                <select name="year" id="year" data-placeholder="Year" class="form-control form-control-select2" data-fouc required="required">
		                                    <option></option> 
		                                    <option value="1990">1990</option>
	                                        <option value="1991">1991</option>
	                                        <option value="1992">1992</option>
	                                        <option value="1993">1993</option>
	                                        <option value="1994">1994</option>
	                                        <option value="1995">1995</option>
	                                        <option value="1996">1996</option>
	                                        <option value="1997">1997</option>
	                                        <option value="1998">1998</option>
	                                        <option value="1999">1999</option>
	                                        <option value="2000">2000</option>
	                                        <option value="2001">2001</option>
	                                        <option value="2002">2002</option>
	                                        <option value="2003">2003</option>
	                                        <option value="2004">2004</option>
	                                        <option value="2005">2005</option>
	                                        <option value="2006">2006</option>
	                                        <option value="2007">2007</option>
	                                        <option value="2008">2008</option>
	                                        <option value="2009">2009</option>
	                                        <option value="2010">2010</option>
	                                        <option value="2011">2011</option>
	                                        <option value="2012">2012</option>
	                                        <option value="2013">2013</option>
	                                        <option value="2014">2014</option>
	                                        <option value="2015">2015</option>
	                                        <option value="2016">2016</option> 
	                                        <option value="2017">2017</option> 
	                                        <option value="2018">2018</option> 
	                                        <option value="2019">2019</option> 
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
					                        <option value="1">1</option>
					                        <option value="2">2</option>
					                        <option value="3">3</option>
					                    </select>
				                    </div>
								</div>
								<div class="col-md-6">
									<div class="form-check form-check-switch form-check-switch-left">
										<label>Does client have any pets</label>
										<input type="checkbox" name="is_pets"  data-on-text="Yes" data-off-text="No" class="form-check-input-switch" data-size="small" id="client_pets" onchange="listPets()" value="0">
									</div>
								</div>
								<div class="col-md-12" id="pet_list" style="display: none;">
									<div class="form-group">
										<label>List kinds of pets</label>
										<input type="text" name="pets_types" id="pets_types" class="form-control tokenfield" value="" placeholder="Add multiple kinds(with comma seperated)" data-fouc>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Add client regular rate per hr: </label>
										<input type="text" name="rate_per_hour" id="rate_per_hour" value="" class="form-control touchspin-empty" placeholder="Enter Rate $">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Add client's available hr per week: </label>
										<input type="text" name="hours_per_week" id="hours_per_week" value="" class="form-control touchspin-empty" placeholder="Enter Hours">
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
			                        	<option value="<?php echo $billingkey; ?>"><?php echo $billingvalue; ?></option>
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
									<input type="radio" class="custom-control-input" name="dietry_requirements" value="Regular diet" id="regular_diet">
									<label class="custom-control-label" for="regular_diet">Regular diet</label>
								</div>

								<div class="custom-control custom-radio">
									<input type="radio" class="custom-control-input" name="dietry_requirements" value="Mechanical diet" id="mechanical_diet">
									<label class="custom-control-label" for="mechanical_diet">Mechanical diet</label>
								</div>

								<div class="custom-control custom-radio">
									<input type="radio" class="custom-control-input" name="dietry_requirements" value="Puree diet" id="pure_diet">
									<label class="custom-control-label" for="pure_diet">Puree diet</label>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group pt-2">
								<label class="d-block font-weight-semibold">Fluid requirements</label>
								<div class="custom-control custom-radio">
									<input type="radio" class="custom-control-input" name="fluid_requirements" value="Thin liquids" id="thin_liquid">
									<label class="custom-control-label" for="thin_liquid">Thin liquids</label>
								</div>

								<div class="custom-control custom-radio">
									<input type="radio" class="custom-control-input" name="fluid_requirements" value="Nector thick liquids" id="nector_liquid">
									<label class="custom-control-label" for="nector_liquid">Nector thick liquids</label>
								</div>

								<div class="custom-control custom-radio">
									<input type="radio" class="custom-control-input" name="fluid_requirements" value="Honey thick liquids" id="honey_liquid">
									<label class="custom-control-label" for="honey_liquid">Honey thick liquids</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Client medication list</label>
								<input type="text" name="medication_list" id="medication_list" class="form-control tokenfield" value="" placeholder="Add multiple medication(with comma seperated)" data-fouc>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Client allergies list</label>
								<input type="text" name="allergies_list" id="allergies_list" class="form-control tokenfield" value="" placeholder="Add multiple allergies(with comma seperated)" data-fouc>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-check form-check-switch form-check-switch-left">
								<label class="form-check-label d-flex align-items-center">
									<span style="margin-right: 15px">Does the client recieve oxygen</span>
									<input style="margin-left: 15px;" name="is_oxygen"  type="checkbox" data-on-text="Yes" data-off-text="No" class="form-check-input-switch" data-size="small" onchange="clientOxygen()" id="oxygen_client" value="0">
								</label>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: 10px; display: none;" id="client_oxygen">
						<div class="col-md-6">
							<div class="form-group">
								<label><span class="text-muted">If so, how much oxygen does the client recieve?</span> </label>
								<input type="text" value="" name="oxygen_quantity" id="oxygen_quantity"  class="form-control touchspin-empty" placeholder="Mg">
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: 20px;">
						<div class="col-md-6">
							<div class="form-group">
								<label>When is oxygen administered to the client:</label>
								<input type="text" name="oxygen_administered" id="oxygen_administered" class="form-control" placeholder="Add details how and when oxygen is administered">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-check form-check-switch form-check-switch-left">
								<label class="form-check-label d-flex align-items-center">
									<span style="margin-right: 15px">Does client have mobilty needs?</span>
									<input style="margin-left: 15px;" name="is_mobilty" type="checkbox" data-on-text="Yes" data-off-text="No" class="form-check-input-switch" data-size="small" onchange="clientNeed()" id="need_client" value="0">
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
			                        <?php foreach (CON_CLIENT_MOBILITY_NEEDS as $mobilitykey => $mobilityvalue) { ?>
			                        	<option value="<?php echo $mobilitykey; ?>"><?php echo $mobilityvalue; ?></option>
			                        <?php } ?> 
			                        
			                        
			                    </select>
		                    </div>
						</div>
					</div>
					<div class="row" style="margin-top: 20px;">
						<div class="col-md-6">
							<div class="form-group">
								<label>Add the client transportation requirements</label>
								<input type="text" name="transportation_requirements" id="transportation_requirements" class="form-control" placeholder="Add a detailed description of the clients transportation requirements">
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: 20px;">
						<div class="col-md-6">
							<div class="form-group">
								<label>Add client's transfer needs</label>
								<input type="text" name="transfer_needs" id="transfer_needs" class="form-control" placeholder="Add a detailed description of the clients trasfer needs">
							</div>
						</div>
					</div>
				</fieldset>

				<h6><strong>Family Center</strong></h6>
				<fieldset>
					<div class="row">
						<input type="hidden" id="counter" value="1">
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
								<input type="email" name="" id="email_address_family" onchange="checkEmailAddress('client_family')" class="form-control" placeholder="@gmail.com">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Phone #:</label>
								<input type="text" name="" id="mobile_number_family" class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999" required="required">
							</div>
						</div>
						<div class="col-md-2">
							<a style="margin-top: 28px;" href="javascript:;" onclick="addMoreFamilyMember()" class="btn btn-primary legitRipple">Add<i style="margin-left: 8px;" class="icon-arrow-right14"></i></a>
						</div>
					</div>
					<!-- <div class="row" style="padding: 15px 0px;">
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
					</div> -->
					<!-- <div class="row" style="padding: 15px 0px;">
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
					</div> -->
					<div id="append_family_member"></div>
				</fieldset>
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
								<input type="text" name="pcd_name" id="pcd_name" class="form-control" placeholder="Enter PCD's name">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 offset-md-1">
							<div class="form-group">
								<label>Primary Doctor Contact Info:</label>
								<input type="text" name="pcd_contact" id="pcd_contact" class="form-control" placeholder="Primary Doctor Contact Info" data-mask="+99-99-9999-9999">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 offset-md-1">
							<div class="form-group">
								<label>Enter prefered hospital in case of emergency:</label>
								<div class="form-group form-group-feedback form-group-feedback-left">
									<input type="text" name="prefered_hospital" id="prefered_hospital" class="form-control form-control-sm" placeholder="Enter prefered hospital">
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
								<textarea rows="5" cols="3" name="special_instructions" id="special_instructions" class="form-control" placeholder="Special Instructions"></textarea>
							</div>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
		<!-- /wizard with validation -->
	</div>
</div>
<!--Edit Family Member Modal-->
<div id="edit_familyMemberModal" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h6 class="modal-title" style="position: absolute;">Edit Family Member</h6>
			</div>

			<div class="modal-body">
			<fieldset id="append_family_member">
					<div class="row">
						<input type="hidden" id="edit_counter" value="">
						<div class="col-md-2 offset-md-1">
							<div class="form-group">
								<label>First Name:</label>
								<input type="text" name="" id="edit_first_name_family" class="form-control" placeholder="Add first name">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Last Name:</label>
								<input type="text" name="" id="edit_last_name_family" class="form-control" placeholder="Add last name">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Email:</label>
								<input type="email" name="" id="edit_email_address_family" class="form-control" placeholder="@gmail.com">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Phone #:</label>
								<input type="text" name="" id="edit_mobile_number_family" class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999" required="required">
							</div>
						</div>
						<div class="col-md-2">
							<a style="margin-top: 28px;" href="javascript:;" onclick="updateFamilyMember()" class="btn btn-primary legitRipple">Update<i style="margin-left: 8px;" class="icon-arrow-right14"></i></a>
						</div>
					</div>
			</fieldset>		
			</div>

			<!-- <div class="modal-footer">
				<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div> -->
		</div>
	</div>
</div>

<!--Modal End-->
<!-- Theme JS files -->
	<script src="<?php echo base_url(); ?>assets/js/plugins/forms/tags/tagsinput.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/forms/tags/tokenfield.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/ui/prism.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_tags_input.js"></script>

	<script src="<?php echo base_url(); ?>assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/forms/styling/switch.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_checkboxes_radios.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/forms/inputs/touchspin.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_input_groups.js"></script>
	<!-- /theme JS files -->
<?php include(APPPATH."views/agency/inc/footer.php");?>
<script type="text/javascript">


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

	
	function add_new_agency(){
    //e.preventDefault();
    var file_data = $('#file').prop('files')[0];   
   
    
	//var notify_email =  $("input[name=notify_email]").val();
	var linked_profile =  $("input[name=linked_profile]").val();
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
	//var firstName = $('input[name="firstName"]').val();
	var firstName = new Array();
	var lastName = new Array();
	var emailAddress = new Array();
	var mobileNumber = new Array();
	$('input[name^="firstName"]').each(function() {
		firstName.push($(this).val());
		//alert($(this).val());
	});
	$('input[name^="lastName"]').each(function() {
		lastName.push($(this).val());
		//alert($(this).val());
	});
	$('input[name^="emailAddress"]').each(function() {
		emailAddress.push($(this).val());
		//alert($(this).val());
	});
	$('input[name^="mobileNumber"]').each(function() {
		mobileNumber.push($(this).val());
		//alert($(this).val());
	});
	// var lastName = $('input[name="lastName"]').val();
	// var emailAddress = $('input[name="emailAddress"]').val();
	// var mobileNumber = $('input[name="mobileNumber"]').val();
    var form_data = new FormData();    
    if(file_data){              
    form_data.append('file', file_data);
    }
    
    form_data.append('linked_profile', linked_profile);
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
	form_data.append('firstName', firstName);
	form_data.append('lastName', lastName);
	form_data.append('emailAddress', emailAddress);
	form_data.append('mobileNumber', mobileNumber);
	form_data.append('linked_id', <?php echo $linked_id; ?>);
    $.ajax({
        url: '<?php echo site_url("agency/clients/save_client"); ?>',
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(data){
        	data = JSON.parse(data);
        	var button_text = "Ok";
        	var alert_text = "You have added a client successfully!";
        	if(data.is_linked_profile==1){
				button_text = "Yes! Please Proceed";
				alert_text = "Please Proceed to add next client data.";
        	}
        	swal({
		        title: 'Good job!',
		        text: alert_text,
		        type: 'success',
		        allowOutsideClick: false,
				confirmButtonText:button_text,
		        onClose: function () {
		            if(data.is_linked_profile==1){
						window.location = "<?php echo site_url("agency/clients/add_client?linked="); ?>"+data.linked_with_id+"";
		            }else{
		            	window.location = "<?php echo site_url("agency/clients"); ?>";
		            }
		        }
		    });

			// if(data == 1){
			// 	swal("Client", "added successfully!");
			// 	location.reload();
			// }
        }
     });
    }

	function addMoreFamilyMember(){
		var first_name_family = $("#first_name_family").val();
		if(!first_name_family){
			alert("First Name is required");
			return false;
		}
		var last_name_family = $("#last_name_family").val();
		var email_address_family = $("#email_address_family").val();
		var mobile_number_family = $("#mobile_number_family").val();
		if(!mobile_number_family){
			alert("Mobile Number is required");
			return false;
		}
		var counter = $("#counter").val();
		$.ajax({
		type: 'post',	
        url: '<?php echo site_url("agency/clients/addMoreFamilyMember"); ?>',
        dataType: 'html',
        data: {first_name:first_name_family,last_name:last_name_family,email_address:email_address_family,
		mobile_number:mobile_number_family,counter:counter},                         
        
        success: function(data){
			$("#append_family_member").append(data);
			var count= $("#counter").val();
			count = parseInt(count) + 1;
			$("#counter").val(count);
			$("#first_name_family").val(" ");
			$("#last_name_family").val(" ");
			$("#email_address_family").val(" ");
			$("#mobile_number_family").val(" ");
        }
     });

	}

	function editFamilyMember(counter){
		var first_name_family = $("#first_name_family"+counter+"").val();
		var last_name_family = $("#last_name_family"+counter+"").val();
		var email_address_family = $("#email_address_family"+counter+"").val();
		var mobile_number_family = $("#mobile_number_family"+counter+"").val();
		$("#edit_first_name_family").val(first_name_family);
		$("#edit_last_name_family").val(last_name_family);
		$("#edit_email_address_family").val(email_address_family);
		$("#edit_mobile_number_family").val(mobile_number_family);
		$("#edit_familyMemberModal").modal('show');
		$("#edit_counter").val(counter);
	}

	function updateFamilyMember(){
		var first_name_family = $("#edit_first_name_family").val();
		var last_name_family = $("#edit_last_name_family").val();
		var email_address_family = $("#edit_email_address_family").val();
		var mobile_number_family = $("#edit_mobile_number_family").val();
		var counter = $("#edit_counter").val();
		$.ajax({
		type: 'post',	
        url: '<?php echo site_url("agency/clients/editMoreFamilyMember"); ?>',
        dataType: 'html',
        data: {first_name:first_name_family,last_name:last_name_family,email_address:email_address_family,
		mobile_number:mobile_number_family,counter:counter},                         
        
        success: function(data){
			$("#row_family_member"+counter+"").html(data);
			$("#edit_familyMemberModal").modal("hide");
        }
		});
	}

	function checkEmailAddress(tableName){
		
		if(tableName == 'client'){
		var email_address = $("#email_address").val();
		}else{
			var email_address = $("#email_address_family").val();
		}
		$.ajax({
		type: 'post',	
        url: '<?php echo site_url("agency/clients/checkEmailAddress"); ?>',
        dataType: 'html',
        data: {email_address:email_address,tableName:tableName},                         
        
        success: function(data){
			if(data == 0){
				swal("Email, Already Exists");
				$("#email_address").val(" ");
			}
        }
		});
	}

	function linkedClient(val){
	 	$("input[name=linked_profile]").val(val);
		
	}
</script>