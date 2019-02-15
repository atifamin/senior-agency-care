<?php include(APPPATH."views/agency/inc/header.php");?>
<script src="<?php echo base_url(); ?>/assets/js/demo_pages/client_wizard.js"></script>
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
			<div class="card-header" style="text-align: center;">
				<h6>Add a new client</h6>
			</div>

			<form class="wizard-form steps-validation" action="#" data-fouc>
				<h6><strong>Client Information</strong></h6>
				<fieldset>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>First Name:</label>
								<input type="text" name="company_name" class="form-control" placeholder="Add client first name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Last Name:</label>
								<input type="text" name="company_name" class="form-control" placeholder="Add client last name">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Client phone #:</label>
								<input type="text" name="tel" class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Client email address:</label>
								<input type="email" name="email" class="form-control" placeholder="client@email.com">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<label>Client From:</label>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
		                                <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
		                                    <option></option> 
		                                    <option value="1995">1995</option> 
		                                    <option value="...">...</option> 
		                                    <option value="1980">1980</option> 
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
		                                <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
		                                    <option></option> 
		                                    <option value="1995">1995</option> 
		                                    <option value="...">...</option> 
		                                    <option value="1980">1980</option> 
		                                </select>
		                            </div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="padding: 0;">
							<div class="form-group mb-3 mb-md-2">
								<label class="d-block font-weight-semibold">Gender:</label>
								<div class="custom-control custom-control-right custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" name="custom-inline-radio-right" id="custom_radio_inline_right_checked" checked="">
									<label class="custom-control-label position-static" for="custom_radio_inline_right_checked">Male</label>
								</div>

								<div class="custom-control custom-control-right custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" name="custom-inline-radio-right" id="custom_radio_inline_right_unchecked">
									<label class="custom-control-label position-static" for="custom_radio_inline_right_unchecked">Female</label>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<label>Date of Birth:</label>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
		                                <select name="education-to-year" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
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
		                                <select name="education-to-year" data-placeholder="Day" class="form-control form-control-select2" data-fouc>
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
		                                <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
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
				</fieldset>

				<h6><strong>Client Special Needs</strong></h6>
				<fieldset>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group pt-2">
								<label class="d-block font-weight-semibold">Select client's dietry requirements</label>
								<div class="custom-control custom-radio">
									<input type="radio" class="custom-control-input" name="client_dietry_requirements" id="regular_diet" checked>
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
								<label class="d-block font-weight-semibold">Fluid requirements</label>
								<div class="custom-control custom-radio">
									<input type="radio" class="custom-control-input" name="fluid_requirements" id="thin_liquid" checked>
									<label class="custom-control-label" for="thin_liquid">Thin liquids</label>
								</div>

								<div class="custom-control custom-radio">
									<input type="radio" class="custom-control-input" name="fluid_requirements" id="nector_liquid">
									<label class="custom-control-label" for="nector_liquid">Nector thick liquids</label>
								</div>

								<div class="custom-control custom-radio">
									<input type="radio" class="custom-control-input" name="fluid_requirements" id="honey_liquid">
									<label class="custom-control-label" for="honey_liquid">Honey thick liquids</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Client medication list</label>
								<input type="text" class="form-control tokenfield" value="" placeholder="Add multiple medication(with comma seperated)" data-fouc>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Client allergies list</label>
								<input type="text" class="form-control tokenfield" value="" placeholder="Add multiple allergies(with comma seperated)" data-fouc>
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
								<input type="text" name="company_name" class="form-control" placeholder="Add first name">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Last Name:</label>
								<input type="text" name="company_name" class="form-control" placeholder="Add last name">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Email:</label>
								<input type="email" name="company_name" class="form-control" placeholder="@gmail.com">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Phone #:</label>
								<input type="text" name="tel" class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999">
							</div>
						</div>
						<div class="col-md-2">
							<a style="margin-top: 28px;" href="javascript:;" class="btn btn-primary legitRipple">Add<i style="margin-left: 8px;" class="icon-arrow-right14"></i></a>
						</div>
					</div>
					<div class="row" style="padding: 15px 0px;">
						<div class="col-md-3 offset-md-1">
							<div class="d-flex align-items-center">
								<div class="mr-3">
									<img src="<?php echo base_url(); ?>assets/images/backgrounds/male.jpg" class="rounded-circle" width="40" height="40" alt="">
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
									<img src="<?php echo base_url(); ?>assets/images/backgrounds/male.jpg" class="rounded-circle" width="40" height="40" alt="">
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

				<h6><strong>End of Life Directive</strong></h6>
				<fieldset>
					<div class="row">
						<div class="col-md-6 offset-md-1">
							<div class="form-group">
								<label>Upload End of Life Directive document:</label>
		                        <input name="recommendations" type="file" class="form-input-styled" data-fouc>
		                        <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
		                    </div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 offset-md-1">
							<div class="form-group">
								<label>Add the Primary Care Doctor:</label>
								<input type="text" name="company_name" class="form-control" placeholder="Enter PCD's name">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 offset-md-1">
							<div class="form-group">
								<label>Primary Doctor Contact Info:</label>
								<input type="text" name="tel" class="form-control" placeholder="Primary Doctor Contact Info" data-mask="+99-99-9999-9999">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 offset-md-1">
							<div class="form-group">
								<label>Enter prefered hospital in case of emergency:</label>
								<div class="form-group form-group-feedback form-group-feedback-left">
									<input type="text" class="form-control form-control-sm" placeholder="Enter prefered hospital">
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
								<textarea rows="5" cols="3" class="form-control" placeholder="Special Instructions"></textarea>
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
</script>