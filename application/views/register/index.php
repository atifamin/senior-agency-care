<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Senior Agency Care | Register</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="<?php echo base_url(); ?>/assets/js/main/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/plugins/loaders/blockui.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/plugins/ui/ripple.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="<?php echo base_url(); ?>/assets/js/plugins/forms/wizards/steps.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/plugins/forms/inputs/inputmask.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/plugins/forms/validation/validate.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/plugins/extensions/cookie.js"></script>

	<script src="<?php echo base_url(); ?>/assets/js/app.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/demo_pages/register_form_wizard.js"></script>
	<!-- /theme JS files -->
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="<?php echo base_url(); ?>/assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/demo_pages/form_select2.js"></script>

</head>

<body>

<div class="row" style="margin: 10px 0px; width: 100%;">
	<div class="col-md-12" style="text-align: center;">
		<div class="register_icon" style="width: 70px; height: 70px; border-radius: 50%; border: 3px solid #F37333; margin: 0 auto;">
			<a style="position: relative; top: 20px;" href="#"><i style="color: #F37333; font-size: 24px;" class="icon-people"></i></a>
		</div>
	</div>
</div>



<!-- Wizard with validation -->
<div class="card">
	<div class="card-header" style="text-align: center;">
		<h6>Create Your Agency Account</h6>
	</div>

	<form class="wizard-form steps-validation" action="#" data-fouc>
		<h6>Company Information</h6>
		<fieldset>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Company name: <span class="text-danger">*</span></label>
						<input type="text" name="company_name" class="form-control" placeholder="Add your company name">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>Your position at the company: <span class="text-danger">*</span></label>
						<select name="location" data-placeholder="Select position" class="form-control form-control-select2" data-fouc>
							<option value="">Select position</option>
							<option value="owner">Owner</option>
							<option value="ceo">CEO</option>
							<option value="co_founder">Co-founder</option>
							<option value="manager">Manager</option>
						</select>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Your full name: <span class="text-danger">*</span></label>
						<input type="text" name="full_name" class="form-control" placeholder="Enter your full name">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>Company email address: <span class="text-danger">*</span></label>
						<input type="email" name="email" class="form-control" placeholder="company@email.com">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Phone #:</label>
						<input type="text" name="tel" class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999">
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-8">
							<label>When company was formed:</label>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
	                                    <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
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

								<div class="col-md-6">
									<div class="form-group">
	                                    <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
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
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Our story:</label>
	                    <textarea name="experience-description" rows="4" cols="4" placeholder="Add brief story about your company" class="form-control"></textarea>
	                </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Country:</label>
                        <select name="university-country" data-placeholder="Choose a Country..." class="form-control form-control-select2" data-fouc>
                            <option></option> 
                            <option value="1">United States</option> 
                            <option value="2">France</option> 
                            <option value="3">Germany</option> 
                            <option value="4">Spain</option> 
                        </select>
                    </div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>State:</label>
                        <select name="university-country" data-placeholder="Choose a State..." class="form-control form-control-select2" data-fouc>
                            <option></option> 
                            <option value="1">United States</option> 
                            <option value="2">France</option> 
                            <option value="3">Germany</option> 
                            <option value="4">Spain</option> 
                        </select>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>City:</label>
                        <select name="university-country" data-placeholder="Choose a City..." class="form-control form-control-select2" data-fouc>
                            <option></option> 
                            <option value="1">United States</option> 
                            <option value="2">France</option> 
                            <option value="3">Germany</option> 
                            <option value="4">Spain</option> 
                        </select>
                    </div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Zip:</label>
						<input type="text" name="company_name" class="form-control" placeholder="Add your zip">
					</div>
				</div>
			</div>
		</fieldset>

		<h6>Our Services</h6>
		<fieldset>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Select your personal care services:</label>
						<select data-placeholder="Select your services" multiple="multiple" class="form-control select" data-fouc>
							<option></option>
							<option value="option1">Option 1</option>
							<option value="option1">Option 2</option>
							<option value="option1">Option 3</option>
							<option value="option1">Option 4</option>
							<option value="option1">Option 5</option>
						</select>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>Select housekeeping services:</label>
						<select data-placeholder="Select your services" multiple="multiple" class="form-control select" data-fouc>
							<option></option>
							<option value="option1">Option 1</option>
							<option value="option1">Option 2</option>
							<option value="option1">Option 3</option>
							<option value="option1">Option 4</option>
							<option value="option1">Option 5</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Select sunrise/sunset services:</label>
						<select data-placeholder="Select your services" multiple="multiple" class="form-control select" data-fouc>
							<option>Select </option>
							<option value="option1">Option 1</option>
							<option value="option1">Option 2</option>
							<option value="option1">Option 3</option>
							<option value="option1">Option 4</option>
							<option value="option1">Option 5</option>
						</select>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>Select dementia/alzheimer's Assistance:</label>
						<select data-placeholder="Select your services" multiple="multiple" class="form-control select" data-fouc>
							<option></option>
							<option value="option1">Option 1</option>
							<option value="option1">Option 2</option>
							<option value="option1">Option 3</option>
							<option value="option1">Option 4</option>
							<option value="option1">Option 5</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Select personal assitant services:</label>
						<select data-placeholder="Select your services" multiple="multiple" class="form-control select" data-fouc>
							<option>Select </option>
							<option value="option1">Option 1</option>
							<option value="option1">Option 2</option>
							<option value="option1">Option 3</option>
							<option value="option1">Option 4</option>
							<option value="option1">Option 5</option>
						</select>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>Select post-surgury/maternity Assistance:</label>
						<select data-placeholder="Select your services" multiple="multiple" class="form-control select" data-fouc>
							<option></option>
							<option value="option1">Option 1</option>
							<option value="option1">Option 2</option>
							<option value="option1">Option 3</option>
							<option value="option1">Option 4</option>
							<option value="option1">Option 5</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Respite services:</label>
						<select data-placeholder="Select your services" multiple="multiple" class="form-control select" data-fouc>
							<option>Select </option>
							<option value="option1">Option 1</option>
							<option value="option1">Option 2</option>
							<option value="option1">Option 3</option>
							<option value="option1">Option 4</option>
							<option value="option1">Option 5</option>
						</select>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>Other services:</label>
						<select data-placeholder="Select your services" multiple="multiple" class="form-control select" data-fouc>
							<option></option>
							<option value="option1">Option 1</option>
							<option value="option1">Option 2</option>
							<option value="option1">Option 3</option>
							<option value="option1">Option 4</option>
							<option value="option1">Option 5</option>
						</select>
					</div>
				</div>
			</div>
		</fieldset>

		<h6>Licenses</h6>
		<fieldset>
		<div class="license_view" style="display: none;">
			<div class="row" style="width: 100%;">
				<div class="col-md-12" style="text-align: center;">
					<h6 style="font-size: 14px;">ADD A NEW STATE LICENSE<span><a style="border-radius: 50%; border: 1px solid #CECECE; padding: 6px 8px 5px 8px; position: relative; left: 10px;" href="javascript:;" onclick="addNewLicense()"><i style="font-size: 12px; font-weight: 600; color: #B5B4B4;" class="icon-plus3"></i></a></span></h6>
				</div>
			</div>
			<div class="row" style="width: 100%;">
				<div class="col-md-6 offset-md-1">
					<div class="row" style="margin-top: 50px;">
						<div class="col-md-6">
							<p style="margin-bottom: 0; color: #00bcd4;">Uc#43252345234<span style="position: relative; left: 73px; top: 9px;"><strong style="font-size: 24px; position: relative; top: 2px;">360</strong>Days to expire</span></p>
							<p style="position: relative; bottom: 7px; font-size: 12px; color: #B4B8BA;">Valid until 00/00/2019</p>
						</div>
						<div class="col-md-6 text-right">
							<a style="background-color: #fff; color: #9B9B9B; border: 1px solid #9B9B9B; position: relative; top: 13px;" href="#" class="btn btn-primary pull-right">Edit<i style="position: relative; font-size: 12px; left: 8px;" class="icon-arrow-down15"></i></a>
						</div>
						<div class="col-md-6">
							<a href="#" style="position: relative; top: 16px;"><i style="font-size: 26px; color: #9B9B9B;" class="icon-file-text2"></i></a>
						</div>
						<div class="col-md-6 text-right">
							<a style="background-color: #fff; color: #9B9B9B; border: 1px solid #9B9B9B; position: relative; top: 13px;" href="#" class="btn btn-primary pull-right">Edit<i style="position: relative; font-size: 12px; left: 8px;" class="icon-arrow-down15"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="add_new_license">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>State license #: <span class="text-danger">*</span></label>
						<input type="text" name="full_name" class="form-control" placeholder="Add state license #">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>State where your license recieved:</label>
                        <select name="university-country" data-placeholder="Choose a State..." class="form-control form-control-select2" data-fouc>
                            <option></option> 
                            <option value="1">United States</option> 
                            <option value="2">France</option> 
                            <option value="3">Germany</option> 
                            <option value="4">Spain</option> 
                        </select>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<label>Valid From:</label>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
                                <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                	<option></option>
                                    <option value="January">January</option> 
                                    <option value="...">...</option> 
                                    <option value="December">December</option> 
                                </select>
                            </div>
						</div>

						<div class="col-md-6">
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

				<div class="col-md-3">
					<label>Valid To:</label>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
                                <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                	<option></option>
                                    <option value="January">January</option> 
                                    <option value="...">...</option> 
                                    <option value="December">December</option> 
                                </select>
                            </div>
						</div>

						<div class="col-md-6">
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
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="d-block">Upload License Document(optional):</label>
                        <input name="recommendations" type="file" class="form-input-styled" data-fouc>
                        <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<a style="width: 100%;" href="javascript:;" onclick="viewLicense()" class="btn btn-primary">Submit</a>
				</div>
			</div>
		</div>
		</fieldset>

		<h6>Company Logo & Profile Image</h6>
		<fieldset>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="d-block">Upload your company Logo:</label>
                        <input name="recommendations" type="file" class="form-input-styled" data-fouc>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="d-block">Upload your profile picture:</label>
                        <input name="recommendations" type="file" class="form-input-styled" data-fouc>
                    </div>
				</div>
			</div>
		</fieldset>
	</form>
</div>
<!-- /wizard with validation -->






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

</body>
</html>