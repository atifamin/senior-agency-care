<?php include(APPPATH."views/agency/inc/header.php");?>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="row" style="padding: 12px;">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-5">
							<a href="<?php echo site_url("agency/caregiver/add_caregiver"); ?>" class="btn btn-light legitRipple" style="font-size: 11px;"><i style="margin-right: 10px;" class="icon-users4"></i>Add a caregiver</a>
						</div>
						<span style="margin-top: 17px; margin-right: 14px; font-size: 10px;">OR</span>
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
		<!-- Wizard with validation -->
		<div class="card">
			<div class="card-header" style="text-align: center;">
				<h6>Add a new caregiver</h6>
			</div>

			<form class="wizard-form steps-validation" action="#" data-fouc>
				<h6>Profile</h6>
				<fieldset>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>First Name: <span class="text-danger">*</span></label>
								<input type="text" name="company_name" class="form-control" placeholder="Add first name">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Last Name: <span class="text-danger">*</span></label>
								<input type="text" name="company_name" class="form-control" placeholder="Add last name">
							</div>
						</div>
						<div class="col-md-4">
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
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Position at company:</label>
		                        <select name="university-country" data-placeholder="Choose a Country..." class="form-control form-control-select2" data-fouc>
		                            <option></option> 
		                            <option value="caregiver">Caregiver</option> 
		                            <option value="manager">Manager</option>
		                        </select>
		                    </div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="d-block">Upload Caregiver profile image:</label>
		                        <input name="recommendations" type="file" class="form-input-styled " data-fouc>
		                        <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
		                    </div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<label>From:</label>
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
							<label>To:</label>
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
				</fieldset>

				<h6>Contact Information</h6>
				<fieldset>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Phone #:</label>
								<input type="text" name="tel" class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Caregiver email address: <span class="text-danger">*</span></label>
								<input type="email" name="email" class="form-control" placeholder="company@email.com">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Address: <span class="text-danger">*</span></label>
								<input type="text" name="full_name" class="form-control" placeholder="Enter your address">
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
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Caregive emergency contact name:</label>
								<input type="text" name="full_name" class="form-control" placeholder="Enter emergency contact name">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Emergency contact phone #:</label>
								<input type="text" name="tel" class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999">
							</div>
						</div>
					</div>
				</fieldset>

				<h6>Caregiver Certification</h6>
				<fieldset>
					<div class="row">
						<div class="col-md-6">
							<!-- Within a group with checkbox -->
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-prepend">
										<div class="input-group-text">
											<input type="checkbox" class="form-control-styled" checked data-fouc>
										</div>
									</span>

									<select class="form-control multiselect" multiple="multiple" data-fouc>
										<option value="c.n.a">C.N.A Certified Nurse Assistant</option>
										<option value="h.h.a">Home Health Aid</option>
										<option value="r.n">Registered Nurse</option>
									</select>
								</div>									
							</div>
							<!-- /within a group with checkbox -->
						</div>
					</div>
				</fieldset>

				<h6>Valid State License</h6>
				<fieldset>
					<div class="license_view" style="display: none;">
						<div class="row" style="width: 100%;">
							<div class="col-md-12" style="text-align: center;">
								<h6 style="font-size: 14px;">ADD A NEW STATE LICENSE<span><a style="border-radius: 50%; border: 1px solid #CECECE; padding: 6px 8px 5px 8px; position: relative; left: 10px;" href="javascript:;" onclick="addNewLicense()"><i style="font-size: 12px; font-weight: 600; color: #B5B4B4;" class="icon-plus3"></i></a></span></h6>
							</div>
						</div>
						<div class="row" style="width: 100%;">
							<div class="col-md-7 offset-md-1">
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
									<label>Add your caregiver's state license #: <span class="text-danger">*</span></label>
									<input type="text" name="full_name" class="form-control" placeholder="Add state license #">
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
			</form>
		</div>
		<!-- /wizard with validation -->
	</div>
</div>
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