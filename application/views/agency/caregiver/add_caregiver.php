<?php include(APPPATH."views/agency/inc/header.php");?>
<script src="<?php echo base_url(); ?>/assets/js/demo_pages/caregiver_form_wizard.js"></script>


<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="row" style="padding: 12px;">
        <div class="col-md-6">
          <div class="row" style="text-align: center;">
            <div class="col-md-5"> <a href="<?php echo site_url("agency/caregiver/add_caregiver"); ?>" class="btn btn-light legitRipple" style="font-size: 11px;"><i style="margin-right: 10px;" class="icon-users4"></i>Add a caregiver</a> </div>
            <span style="margin: 10px auto; font-size: 10px;">OR</span>
            <div class="col-md-5"> <a href="<?php echo site_url("agency/caregiver/send_invite_to_caregiver"); ?>" class="btn btn-light legitRipple" style="font-size: 11px;"><i class="icon-make-group mr-2"></i>Invite your caregivers</a> </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top: 9px;">
              <h6 style="font-size: 12px; color: #4caf50;">Added<span style="margin-left: 6px;" class="badge badge-success badge-pill"><?php echo $total_added_profiles; ?></span></h6>
            </div>
            <div class="col-md-4" style="margin-top: 9px;">
              <h6 style="font-size: 12px; color: #ff7043;">Pending<span style="margin-left: 6px;" class="badge badge-warning badge-pill"><?php echo $total_pending_profiles; ?></span></h6>
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
      <form class="wizard-form steps-validation" action="#" data-fouc id="caregiver_form">
        <h6><strong>Profile</strong></h6>
        <fieldset>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>First Name: <span class="text-danger">*</span></label>
                <input type="text" required="required" name="first_name" class="form-control" placeholder="Add first name">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Last Name: <span class="text-danger">*</span></label>
                <input type="text" name="last_name" class="form-control" placeholder="Add last name">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mb-3 mb-md-2">
                <label class="d-block font-weight-semibold">Gender:</label>
                <div class="custom-control custom-control-right custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" name="gender" id="custom_radio_inline_right_checked" checked="" value="male">
                  <label class="custom-control-label position-static" for="custom_radio_inline_right_checked">Male</label>
                </div>
                <div class="custom-control custom-control-right custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" name="gender" id="custom_radio_inline_right_unchecked" value="female">
                  <label class="custom-control-label position-static" for="custom_radio_inline_right_unchecked">Female</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Position at company:</label>
                <select name="position" data-placeholder="Choose a Position..." class="form-control select-search-basic" data-fouc>
                  <option></option>
                  <?php foreach(CON_CAREGIVER_POSITIONS as $positionKey=>$positionVal): ?>
                  <option value="<?php echo $positionKey; ?>"><?php echo $positionVal; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <!-- <label class="d-block">Upload Caregiver profile image:</label>
                <input name="profile_pic" type="file" class="form-input-styled " data-fouc>
                <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>  -->
                
                <button type="button" class="btn btn-danger legitRipple" onClick="profileImageCropper()"><i class="icon-file-upload2 mr-2"></i>Upload Profile Picture</button>
                <div id="croppedImageShow" ><img width="100"></div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <label>From:</label>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <select name="from_month" data-placeholder="Month" class="form-control select-search-basic" data-fouc>
                      <option></option>
                      <?php foreach(CON_MONTHS as $key1=>$val1): ?>
                      <option value="<?php echo $key1; ?>"><?php echo $val1; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <select name="from_year" data-placeholder="Year" class="form-control select-search-basic" data-fouc>
                      <option></option>
                      <?php for($i=2019; $i>=1960; $i--){ ?>
                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
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
                    <select name="to_month" data-placeholder="Month" class="form-control select-search-basic" data-fouc>
                      <option></option>
                      <?php foreach(CON_MONTHS as $key2=>$val2): ?>
                      <option value="<?php echo $key2; ?>"><?php echo $val2; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <select name="to_year" data-placeholder="Year" class="form-control select-search-basic" data-fouc>
                      <option></option>
                      <?php for($i=2019; $i>=1960; $i--){ ?>
                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
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
                <label>Caregiver email address: <span class="text-danger">*</span></label>
                <input type="email" name="email" required="required" class="form-control" placeholder="company@email.com">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Address: <span class="text-danger">*</span></label>
                <input type="text" name="address" class="form-control" placeholder="Enter your address">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Country:</label>
                <select name="country_id" data-placeholder="Choose a Country..." class="form-control select-search" data-fouc onChange="load_states($(this).val())">
                  <option></option>
                  <?php $phone_format = array(); ?>
                  <?php foreach($countries as $count): ?>
                  <?php
                  $phone_format[] = (object)array(
                      "id"=>$count->id,
                      "phoneformat"=>$count->phoneformat,
                      "phonecode"=>$count->phonecode,
                  );
                  ?>
                  <option value="<?php echo $count->id; ?>"><?php echo $count->name; ?></option>
                  <?php endforeach; ?>
                </select>
                <textarea id="phone_format" style="display: none;"><?php echo json_encode($phone_format); ?></textarea>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>State:</label>
                <select name="state_id" data-placeholder="Choose a State..." class="form-control select-search" data-fouc id="states" onChange="load_cities($(this).val())">
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>City:</label>
                <select name="city_id" data-placeholder="Choose a City..." class="form-control select-search" data-fouc id="cities">
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Phone #:</label>
                <input type="text" name="phone_number" id="format" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Zip:</label>
                <input type="text" name="zipcode" class="form-control" placeholder="Add your zip">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Caregive emergency contact name:</label>
                <input type="text" name="emergency_contact_name" class="form-control" placeholder="Enter emergency contact name">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Emergency contact phone #:</label>
                <input type="text" name="emergency_contact_number" class="form-control" id="format1">
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
                <div class="row" style="margin-bottom: 20px; margin-top: 5px;">
                  <div class="col-md-12">
                    <strong>Select caregiver's certifications</strong>
                  </div>
                </div>
                <select data-placeholder="Select Certifications" name="caregiver_certifications[]" multiple="multiple" class="form-control select" data-fouc>
                    <optgroup label="">
                      <?php foreach(CON_CAREGIVER_CERTIFICATIONS as $cgCertificationsKey => $cgCertificationsVal): ?>
                        <option value="<?php echo $cgCertificationsKey; ?>" selected><?php echo $cgCertificationsVal; ?></option>
                        <?php endforeach; ?>
                      <!-- <option value="AZ" selected="">C.N.A Certified Nurse Assistant</option>
                      <option value="ID" selected="">Home Health Aid</option>
                      <option value="WY" selected="">Registered Nurse</option> -->
                    </optgroup>
                  </select>
                <!-- <div class="input-group"> <span class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="checkbox" class="form-control-styled" checked data-fouc>
                  </div>
                  </span>
                  <select class="form-control multiselect" multiple="multiple" data-fouc>
                    <?php foreach(CON_CAREGIVER_CERTIFICATIONS as $cgCertificationsKey=>$cgCertificationsVal): ?>
                    <option value="<?php echo $cgCertificationsKey; ?>"><?php echo $cgCertificationsVal; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div> -->
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
            <div id="license_area"></div>
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
                    <select name="valid_from_month" id="valid_from_month" data-placeholder="Month" class="form-control select-search-basic" data-fouc>
                      <option value=""></option>
                      <?php foreach(CON_MONTHS as $key2=>$val2): ?>
                      <option value="<?php echo $key2; ?>"><?php echo $val2; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <select name="valid_from_year" id="valid_from_year" data-placeholder="Year" class="form-control select-search-basic" data-fouc>
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
                    <select name="valid_to_month" id="valid_to_month" data-placeholder="Month" class="form-control select-search-basic" data-fouc>
                      <option value=""></option>
                      <?php foreach(CON_MONTHS as $key3=>$val3): ?>
                      <option value="<?php echo $key3; ?>"><?php echo $val3; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <select name="valid_to_year" id="valid_to_year" data-placeholder="Year" class="form-control select-search-basic" data-fouc>
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
          <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in" data-spinner-size="20"> <span class="ladda-label">Add New License</span> </button>
        </div>
      </form>
    </div>
  </div>
</div>

<div id="edit_license_modal" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content" id="edit_license_modal_dialog">
    <div class="modal-header">
        <h5 class="modal-title"><strong>ADD NEW LICENSE</strong></h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form id="edit_new_license_form" enctype="multipart/form-data">
                        <input type="hidden" id="edit_counter">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>State license #: <span class="text-danger">*</span></label>
                <input type="text" name="state_license" id="state_license_edit" class="form-control required" placeholder="Add state license #" data-validation="required" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label>Valid From:</label>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <select name="valid_from_month" id="valid_from_month_edit" data-placeholder="Month" class="form-control select-search-basic" data-fouc>
                      <option value=""></option>
                      <?php foreach(CON_MONTHS as $key2=>$val2): ?>
                      <option value="<?php echo $key2; ?>"><?php echo $val2; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <select name="valid_from_year" id="valid_from_year_edit" data-placeholder="Year" class="form-control select-search-basic" data-fouc>
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
                    <select name="valid_to_month" id="valid_to_month_edit" data-placeholder="Month" class="form-control select-search-basic" data-fouc>
                      <option value=""></option>
                      <?php foreach(CON_MONTHS as $key3=>$val3): ?>
                      <option value="<?php echo $key3; ?>"><?php echo $val3; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <select name="valid_to_year" id="valid_to_year_edit" data-placeholder="Year" class="form-control select-search-basic" data-fouc>
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
                <input name="media_license_document" type="file" id="media_license_document_edit" class="form-input-styled" data-fouc>
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
          <button type="button" onclick="update_license()" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in" data-spinner-size="20"> <span class="ladda-label">Update License</span> </button>
        </div>
      </form>
      
    </div>
  </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/selects/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_select2.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>

<script type="text/javascript">
function addNewLicense(){
	$(".add_new_license").css("display","block");
	$(".license_view").css("display","none");
}
function viewLicense(){
	$(".add_new_license").css("display","none");
	$(".license_view").css("display","block");
}
$(document).ready(function(e) {
    inputMask($("#format,#format1"), "+99-99-9999-9999")
});

function inputMask(selector, format){
  selector.val("");
  var im = new Inputmask(""+format+"");
  im.opts.placeholder = "_"
  im.opts.clearMaskOnLostFocus = false;
  im.opts.showMaskOnFocus = false;
  im.mask(selector);
}

function change_phone_masking(id){
  var selector = $("#format,#format1");
  var phone_format = JSON.parse($("#phone_format").html());
  var country_number_format = "";
  var country_code = "";
  $.each(phone_format, function(k, v){
    if(v.id==id){
     country_number_format = v.phoneformat;
     country_code = v.phonecode;
    }
  });
  final_country_code = "";
  if(country_code.length==1)
    final_country_code = "+9";
  if(country_code.length==2)
    final_country_code = "+99";
  if(country_code.length==3)
    final_country_code = "+999";
  if(country_code.length==4)
    final_country_code = "+9999";
    
  var final_format = final_country_code+"-"+country_number_format;
  inputMask(selector, final_format);
}
function load_states(id){
  change_phone_masking(id);
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

function add_new_caregiver(){
	var password = $("input[name=password]").val();
	var re_password = $("input[name=re_password]").val();
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
		url: '<?php echo site_url("agency/caregiver/register_caregiver"); ?>',
		type: 'POST',
		data: formData,
		cache: false,
		contentType: false,
		processData: false,
		success: function(e){
			if(e=="email_exists"){
				swal({
					title: 'Error!',
					text: 'This email is already exists!',
					type: 'error'
				});
			}
			
			if(e=="success"){
				window.location = '<?php echo site_url("agency/caregiver/add_caregiver"); ?>';
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


function edit_license(id){
  
  var state_license = $("#state_license_"+id+"").val();
  var valid_from_month = $("#valid_from_month_"+id+"").val();
  var valid_from_year = $("#valid_from_year_"+id+"").val();
  var valid_to_month = $("#valid_to_month_"+id+"").val();
  var valid_to_year = $("#valid_to_year_"+id+"").val();
  console.log(valid_from_year);
  //var media_license_document = $("#media_license_document_"+id+"").val();
  //alert(media_license_document);
  //$('#file').prop('files')[0];
  //var counter = id;
  //alert(state_license);
  $("#state_license_edit").val(state_license);
  $("#valid_from_month_edit").select2("val",valid_from_month);
  $("#valid_from_year_edit").val(valid_from_year).trigger('change');
  $("#valid_to_month_edit").select2("val",valid_to_month);
  $("#valid_to_year_edit").val(valid_to_year).trigger('change');
  //$("#media_license_document_edit").val(media_license_document);
  $("#edit_counter").val(id);
  $("#edit_license_modal").modal('show');
}

function update_license(){
  var state_license = $("#state_license_edit").val();
  var valid_from_month = $("#valid_from_month_edit").val();
  var valid_from_year = $("#valid_from_year_edit").val();
  var valid_to_month = $("#valid_to_month_edit").val();
  var valid_to_year = $("#valid_to_year_edit").val();
  var media_license_document = $("#media_license_document_edit").prop('files')[0];
  var counter = $("#edit_counter").val();
  var form_data = new FormData(); 
  form_data.append('state_license', state_license);
  form_data.append('valid_from_month', valid_from_month);
  form_data.append('valid_from_year', valid_from_year);
	form_data.append('valid_to_month', valid_to_month);
	form_data.append('valid_to_year', valid_to_year);
  form_data.append('media_license_document', media_license_document);
  form_data.append('counter', counter);
  $.ajax({
		url: '<?php echo site_url("agency/caregiver/update_new_license_form"); ?>',
		type: 'POST',
		data: form_data,
		cache: false,
		contentType: false,
		processData: false,
		success: function (e) {
			$("#license_row_"+counter+"").html(e);
      $("#edit_license_modal").modal('hide');
		}
  });
}


</script>


<?php include(APPPATH."views/agency/inc/footer.php");?>
