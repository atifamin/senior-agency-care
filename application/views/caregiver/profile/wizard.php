<?php include(APPPATH."views/caregiver/inc/header.php"); ?>
<script src="<?php echo base_url(); ?>/assets/js/demo_pages/caregiver_form_edit_wizard.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/selects/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_select2.js"></script> 
<script src="<?php echo base_url();?>assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
<?php //print_array($states); ?>
<?php $months = CON_MONTHS; ?>
<div class="row">
  <div class="col-md-12">
    <div class="card card-body border-top-1 border-top-primary">
      <div class="text-center">
        <h6 class="mb-0 font-weight-semibold">Please Complete Your Profile</h6>
        <p class="mb-3 text-muted">You need to complete your profile minimum of 70% to access this application.</p>
      </div>
      <div class="progress rounded-round">
        <div class="progress-bar progress-bar-striped bg-<?php if(profile_completion_percentage($this->caregiver_id)<73){echo "danger";}else{echo "success";} ?>" style="width: <?php echo profile_completion_percentage($this->caregiver_id); ?>%"> <span><?php echo profile_completion_percentage($this->caregiver_id); ?>% Complete</span> </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12"> 
    <!-- Wizard with validation -->
    <div class="card">
      <form class="wizard-form steps-validation" action="#" data-fouc id="caregiver_form">
       <input type="hidden" name="caregiver_id" value="<?php echo $caregiver->id; ?>">
        <h6><strong>Profile</strong></h6>
        <fieldset>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>First Name: <span class="text-danger">*</span></label>
                <input type="text" name="first_name" class="form-control" placeholder="Add first name" value="<?php echo $caregiver->first_name; ?>">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Last Name: <span class="text-danger">*</span></label>
                <input type="text" name="last_name" class="form-control" placeholder="Add last name" value="<?php echo $caregiver->last_name; ?>">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mb-3 mb-md-2">
                <label class="d-block font-weight-semibold">Gender:</label>
                <div class="custom-control custom-control-right custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" name="gender" id="custom_radio_inline_right_checked" <?php if($caregiver->gender=="male"){echo 'checked=""';} ?> value="male">
                  <label class="custom-control-label position-static" for="custom_radio_inline_right_checked">Male</label>
                </div>
                <div class="custom-control custom-control-right custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" name="gender" id="custom_radio_inline_right_unchecked" <?php if($caregiver->gender=="female"){echo 'checked=""';} ?> value="female">
                  <label class="custom-control-label position-static" for="custom_radio_inline_right_unchecked">Female</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Position at company:</label>
                <select name="position" data-placeholder="Choose a Position..." id="form_control_select1" class="form-control form-control-select2" data-fouc>
                  <option></option>
                  <?php foreach(CON_CAREGIVER_POSITIONS as $positionKey=>$positionVal): ?>
                  <option value="<?php echo $positionKey; ?>" <?php if($caregiver->position==$positionKey){echo 'selected="selected"';} ?>><?php echo $positionVal; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <!-- <label class="d-block">Upload Caregiver profile image:</label>
                <input name="profile_pic" type="file" class="form-input-styled " data-fouc>
                <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span> </div> -->
                <div class="col-md-6">
                  <button type="button" class="btn btn-danger legitRipple" onClick="profileImageCropper()"><i class="icon-file-upload2 mr-2"></i>Upload Profile Picture</button>
                </div>
                <div class="col-md-6">
                  <div id="croppedImageShow" ><img width="100" class="rounded-circle" src="<?php echo caregiver_image($caregiver->id) ;?>"></div>
                </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <label>From:</label>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <select name="from_month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                      <option></option>
                      <?php foreach(CON_MONTHS as $key1=>$val1): ?>
                      <option value="<?php echo $key1; ?>"<?php if($caregiver->from_month == $key1){echo 'selected="selected"';}?>><?php echo $val1; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <select name="from_year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                      <option></option>
                      <?php for($i=2019; $i>=1960; $i--){ ?>
                      <option value="<?php echo $i; ?>"<?php if($caregiver->from_year == $i){echo 'selected="selected"';}?>><?php echo $i; ?></option>
                      <?php } ?>
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
                    <select name="to_month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                      <option></option>
                      <?php foreach(CON_MONTHS as $key2=>$val2): ?>
                      <option value="<?php echo $key2; ?>"<?php if($caregiver->to_month == $key2){echo'selected="selected"';}?>><?php echo $val2; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <select name="to_year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                      <option></option>
                      <?php for($i=2019; $i>=1960; $i--){ ?>
                      <option value="<?php echo $i; ?>"<?php if($caregiver->to_year == $i){echo'selected="selected"';}?>><?php echo $i; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </fieldset>
        <h6><strong>Contact Information</strong></h6>
        <fieldset>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Phone #:</label>
                <input type="text" name="phone_number" class="form-control" value="<?php echo $caregiver->phone_number?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Caregiver email address: <span class="text-danger">*</span></label>
                <input type="email" name="email" class="form-control" value="<?php echo $caregiver->email;?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Address: <span class="text-danger">*</span></label>
                <input type="text" name="address" class="form-control" value="<?php echo $caregiver->address; ?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Country:</label>
                <select name="country_id" data-placeholder="Choose a State..." class="form-control form-control-select2" data-fouc onChange="load_states($(this).val())">
                  <option></option>
                  <?php foreach($countries as $count): ?>
                  <option <?php if($caregiver->country_id == $count->id) {echo 'selected="selected"';}?> value="<?php echo $count->id; ?>"><?php echo $count->name; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>State:</label>
                <select name="state_id" data-placeholder="Choose a State..." class="form-control form-control-select2" data-fouc id="states" onChange="load_cities($(this).val())">
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>City:</label>
                <select name="city_id" data-placeholder="Choose a City..." class="form-control form-control-select2" data-fouc id="cities">
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Zip:</label>
                <input type="text" name="zipcode" class="form-control" value="<?php echo $caregiver->zipcode;?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Caregiver emergency contact name:</label>
                <input type="text" name="emergency_contact_name" class="form-control" value="<?php echo $caregiver->emergency_contact_name;?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Emergency contact phone #:</label>
                <input type="text" name="emergency_contact_number" class="form-control" value="<?php echo $caregiver->emergency_contact_number;?>">
              </div>
            </div>
          </div>
        </fieldset>
        <h6><strong>Caregiver Certification</strong></h6>
        <fieldset>
          <div class="row">
            <div class="col-md-6"> 
              <!-- Within a group with checkbox -->
              <div class="form-group">
                <label>Multiple select</label>
                <select multiple="multiple" class="form-control select" data-fouc name="caregiver_certifications[]">
                  <?php
                    // $caregiver_certifications = "";
                    // if(count(json_decode($caregiver->caregiver_certifications))>0)
                      $caregiver_certifications = json_decode($caregiver->caregiver_certifications); 
                  ?>
                  <?php foreach (CON_CAREGIVER_CERTIFICATIONS as $key => $value) { ?>
                    <option value="<?php echo $key; ?>" <?php if (in_array($key,$caregiver_certifications)) {echo "selected='selected'";} ?>><?php echo $value; ?></option>
                  <?php } ?>
                </select>
              </div>
              <!-- /within a group with checkbox --> 
            </div>
          </div>
        </fieldset>
        <h6><strong>Valid State License</strong></h6>
        <fieldset>
          <div class="license_view" style="margin-bottom: 30px;">
            <div class="row" style="margin-bottom: 30px;">
              <div class="col-md-12" align="center">
                <input type="hidden" id="counter" value="1">
                <button type="button" class="btn btn-outline bg-indigo-400 text-indigo-400 border-indigo-400" data-toggle="modal" data-target="#modal_form_license"><i class="icon-plus3"></i> ADD A NEW STATE LICENSE</button>
              </div>
            </div>
            <div id="license_area">
              <div class="offset-2 col-md-8" id="license_row">
                <?php if(isset($caregiver->license) && count($caregiver->license)>0){
                  foreach($caregiver->license as $licenseKey=>$licenseVal){ ?>
                   <div class="row" id="row_<?php echo $licenseVal->id; ?>" style="margin-top: 50px;">
                    <div class="col-md-8">
                      <div class="row">
                        <div class="col-md-6 text-center">
                          <p style="margin-bottom: 0; color: #00bcd4;"><?php echo $licenseVal->state_license; ?>
                          <p style="position: relative; font-size: 12px; color: #B4B8BA;">Valid until <?php echo $months[$licenseVal->valid_to_month].", ".$licenseVal->valid_to_year; ?></p>
                        </div>
                        <div class="col-md-6 text-center">
                          <span style="position: relative; color: #00bcd4"><strong style="font-size: 24px; position: relative; top: 2px;">
                            <?php $fromDate = date("Y-m-d"); $toDate = date("".$licenseVal->valid_to_year."-".$licenseVal->valid_to_month."-d"); $difference = $this->common_model->dateDifferanceTwoDates($fromDate, $toDate); echo $difference['days'];?>
                          </strong>&nbsp;Days to expire</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 text-center">
                      <div class="btn-group ml-1">
                        <button type="button" class="btn bg-transparent text-slate-600 border-slate dropdown-toggle" data-toggle="dropdown">Edit</button>
                        <div class="dropdown-menu dropdown-menu-right"> <a href="javascript:;" class="dropdown-item" data-toggle="modal" data-target="modal_edit_license" onclick="edit_license('<?php echo $licenseVal->id; ?>')"><i class="icon-database-edit2"></i> Edit</a> <a href="javascript:;" class="dropdown-item" onclick="delete_license('<?php echo $licenseVal->id; ?>')"><i class="icon-bin2"></i> Delete</a> </div>
                      </div>
                    </div>
                  </div>
                <?php }} ?>
              </div>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
    <!-- /wizard with validation --> 
  </div>
</div>
<div id="modal_form_license" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><strong>ADD NEW LICENSE</strong></h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form id="add_new_license_form" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>State license #: <span class="text-danger">*</span></label>
                <input type="text" name="state_license" id="state_license" class="form-control required" placeholder="Add state license #" data-validation="required" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label>Valid From:</label>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <select name="valid_from_month" id="valid_from_month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                      <option value=""></option>
                      <?php foreach(CON_MONTHS as $key2=>$val2): ?>
                      <option value="<?php echo $key2; ?>"><?php echo $val2; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <select name="valid_from_year" id="valid_from_year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                      <option value=""></option>
                      <?php for($i=2019; $i>=1960; $i--){ ?>
                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <label>Valid To:</label>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <select name="valid_to_month" id="valid_to_month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                      <option value=""></option>
                      <?php foreach(CON_MONTHS as $key3=>$val3): ?>
                      <option value="<?php echo $key3; ?>"><?php echo $val3; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <select name="valid_to_year" id="valid_to_year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                      <option value=""></option>
                      <?php for($i=2019; $i<=2029; $i++){ ?>
                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="d-block">Upload License Document(optional):</label>
                <input name="media_license_document" type="file" id="media_license_document" class="form-input-styled" data-fouc>
                <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span> </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="progress rounded-round" id="license_progress" style="display:none">
                <div class="progress-bar bg-warning" style="width:0%"> <span></span> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
          <button type="submit"  class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in" data-spinner-size="20"> <span class="ladda-label">Add New License</span> </button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="<?php echo base_url(); ?>/assets/js/plugins/forms/selects/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>


<!-- <script src="<?php echo base_url(); ?>/assets/js/demo_pages/caregiver_form_edit_wizard.js"></script> -->
<script type="text/javascript">

function addNewLicense(){
	$(".add_new_license").css("display","block");
	$(".license_view").css("display","none");
}
function viewLicense(){
	$(".add_new_license").css("display","none");
	$(".license_view").css("display","block");
}
function load_states(id){
	$.post("<?php echo site_url("agency/caregiver/load_states"); ?>", {id:id}).done(function(e){
		$("#states").html(e);
	});
}
function load_cities(id){
	$.post("<?php echo site_url("agency/caregiver/load_cities"); ?>", {id:id}).done(function(e){
		$("#cities").html(e);
	});
}
$("#add_new_license_form").on("submit", function(e){
	$("#license_progress").show();
	var counter = $("#counter").val();
	e.preventDefault();
	var formData = new FormData($(this)[0]);
	formData.append("counter", counter);
	$.ajax({
		url: '<?php echo site_url("agency/caregiver/add_new_license_form"); ?>',
		type: 'POST',
		data: formData,
		cache: false,
		contentType: false,
		processData: false,
		success: function (e) {
			counter++;
			$("#counter").val(counter);
			$("#license_area").append(e);
		},
		xhr: function () {
			var xhr = new window.XMLHttpRequest();
			xhr.upload.addEventListener("progress", function (evt) {
				if (evt.lengthComputable) {
					var percentComplete = evt.loaded / evt.total;
					percentComplete = parseInt(percentComplete * 100);
					$("#license_progress > .progress-bar").css('width', percentComplete + '%');
					$("#license_progress > .progress-bar").html('<span>'+percentComplete+'% Complete</span>');
					if(percentComplete==100){
						$("#license_progress > .progress-bar").css('width', '0%');
						$("#license_progress > .progress-bar").html('<span>0% Complete</span>');
						$("#license_progress").hide();
						$("#modal_form_license").modal("hide");
						swal({
						  title: 'Good job!',
						  text: 'You have successfully added your State License!',
						  confirmButtonText: 'Ok',
						  type: 'success'
						});
					}
				}
			}, false);
			return xhr;
		},
		
	});
});

function delete_license(id){
	var image_data = $("#media_license_document_"+id+"").html();
	if(image_data!=0){
		imageD = JSON.parse(image_data);
		$.post("<?php echo site_url("agency/caregiver/delete_license_doc"); ?>", {id:id, imageD:imageD}).done(function(e){});
	}
	$("#license_row_"+id+"").remove();
}

function update_caregiver(){
	var password = $("input[name=password]").val();
  var re_password = $("input[name=re_password]").val();
  var caregiver_id = $("input[name=caregiver_id]").val();
	if(password!=re_password){
		swal({
			title: 'Error!',
			text: 'You password does not match!',
			type: 'error'
		});
		return false;
	}
	
  var formData = new FormData($("#caregiver_form")[0]);
  formData.append("croppedImage", $AppMaster.profileCropper.blob);
	$.ajax({
		url: '<?php echo site_url("agency/caregiver/update"); ?>',
		type: 'POST',
		data: formData,
		cache: false,
		contentType: false,
		processData: false,
		success: function(e){
			// if(e=="email_exists"){
			// 	swal({
			// 		title: 'Error!',
			// 		text: 'This email is already exists!',
			// 		type: 'error'
			// 	});
			// }
			
			if(e=="success"){
				window.location = '<?php echo site_url("caregiver/profile/wizard/"); ?>'+caregiver_id;
			}
		},
		xhr: function () {
			var xhr = new window.XMLHttpRequest();
			xhr.upload.addEventListener("progress", function (evt) {
				if (evt.lengthComputable) {
					var percentComplete = evt.loaded / evt.total;
					percentComplete = parseInt(percentComplete * 100);
					$("#agency_progress > .progress-bar").css('width', percentComplete + '%');
					$("#agency_progress > .progress-bar").html('<span>'+percentComplete+'% Complete</span>');
					/*if(percentComplete==100){
						window.location = '<?php echo site_url("agency/dashboard"); ?>';
					}*/
				}
			}, false);
			return xhr;
		},
	});
	return false;
	/*swal({
		title: 'Good job! Your company profile is now ready. Now lets get ready for business with these few steps.',
		text: 'Now lets get ready for business with these few steps.',
		html: '<img src="http://localhost/senior-agency-care/assets/images/userimg/face12.jpg" class="rounded-circle" width="40" height="40" alt="">&nbsp&nbsp&nbsp&nbsp<a style="color:#555;" href="#"><strong>Add Cargivers</strong></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp' + '<img src="http://localhost/senior-agency-care/assets/images/userimg/face22.jpg" class="rounded-circle" width="40" height="40" alt="">&nbsp&nbsp<a style="color:#555;" href="#"><strong>Add Clients</strong></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp' + '<img src="http://localhost/senior-agency-care/assets/images/userimg/face10.jpg" class="rounded-circle" width="40" height="40" alt="">&nbsp&nbsp<a style="color:#555;" href="#"><strong>Create Schedules</strong></a>',
		confirmButtonText: 'Lets Get Started',
		type: 'success'
	});*/
}


</script>
<?php include(APPPATH."views/caregiver/inc/footer.php"); ?>
