<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Senior Agency Care | Register</title>

<!-- Global stylesheets -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/layout.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/components.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/colors.min.css" rel="stylesheet" type="text/css">

<!-- /global stylesheets -->

<!-- Core JS files -->
<script src="<?php echo base_url(); ?>assets/js/main/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/loaders/blockui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/ui/ripple.min.js"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/wizards/steps.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/selects/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/styling/uniform.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/inputs/inputmask.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/validation/validate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/extensions/cookie.js"></script>
<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/register_form_wizard.js"></script>
<!-- /theme JS files -->
<!-- /core JS files -->

<!-- Theme JS files -->
<script src="<?php echo base_url(); ?>assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_select2.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/extra_sweetalert.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/notifications/sweet_alert.min.js"></script>
<!-- Theme JS files -->
<script src="<?php echo base_url(); ?>assets/js/plugins/buttons/spin.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/buttons/ladda.min.js"></script>


<link rel="stylesheet" href="<?php echo base_url(); ?>assets/inputTelPlusMasking/intlTelInput/css/intlTelInput.css">
<script src="<?php echo base_url(); ?>assets/inputTelPlusMasking/intlTelInput/js/intlTelInput.js"></script> 
<script src="<?php echo base_url(); ?>assets/inputTelPlusMasking/intlTelInput/js/utils.js"></script> 
<script src="<?php echo base_url(); ?>assets/inputTelPlusMasking/intlTelInput/js/isValidNumber.js"></script> 
<script src="<?php echo base_url(); ?>assets/inputTelPlusMasking/inputmask/jquery.inputmask.bundle.js"></script> 
<script src="<?php echo base_url(); ?>assets/inputTelPlusMasking/inputmask/inputmask/phone-codes/phone.js"></script> 
<script src="<?php echo base_url(); ?>assets/inputTelPlusMasking/inputmask/inputmask/phone-codes/phone-be.js"></script> 
<script src="<?php echo base_url(); ?>assets/inputTelPlusMasking/inputmask/inputmask/phone-codes/phone-ru.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/app-script.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_multiselect.js"></script>

</head>
<style type="text/css">
#swal2-content {
	padding: 30px 0px !important;
}
.multi_select_box + span {
	border: 1px solid #00bcd4;
	border-radius: 25px;
}
.s1 + span{
  border: 1px solid #00bcd4;
  border-radius: 25px; 
}
</style>
<body>
<script>
$AppMaster = new AppMaster();
</script>
<?php include(APPPATH."views/plugins/ImageCropper/image_cropper_modal.php"); ?>
<div class="container">
  <div class="row" style="margin: 10px 0px; width: 100%;">
    <div class="col-md-12" style="text-align: center;">
      <div class="register_icon" style="width: 70px; height: 70px; border-radius: 50%; border: 3px solid #F37333; margin: 0 auto;"> <a style="position: relative; top: 20px;" href="#"><i style="color: #F37333; font-size: 24px;" class="icon-people"></i></a> </div>
    </div>
  </div>
  
  <!-- Wizard with validation -->
  <div class="card">
    <div class="card-header" style="text-align: center;">
      <h6>Create Your Agency Account</h6>
    </div>
    <form class="wizard-form steps-validation" action="<?php echo site_url("agency/register/insert"); ?>" data-fouc method="POST" enctype="multipart/form-data" id="agency_form">
      <h6><strong>Company Information</strong></h6>
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
              <select name="position" data-placeholder="Select position" class="form-control form-control-select2" data-fouc>
                <option value="">Select position</option>
                <?php foreach(CON_COMPANY_POSITIONS as $posKey=>$posVal): ?>
                <option value="<?php echo $posKey; ?>"><?php echo $posVal; ?></option>
                <?php endforeach; ?>
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
              <input type="email" name="email_address" class="form-control" placeholder="company@email.com">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Country: <span class="text-danger">*</span></label>
              <select name="country_id"  data-placeholder="Choose a Country..." class="form-control form-control-select2" data-fouc onChange="load_states($(this).val())">
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
              <label>State: <span class="text-danger">*</span></label>
              <select name="state_id" data-placeholder="Choose a State..." class="form-control form-control-select2" data-fouc id="states" onChange="load_cities($(this).val())">
                <option></option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Phone #: <span class="text-danger">*</span></label>
              <input type="text" name="phone_number" id="format" class="form-control">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>City: <span class="text-danger">*</span></label>
              <select name="city_id" data-placeholder="Choose a City..." class="form-control form-control-select2" data-fouc id="cities">
                <option></option>
              </select>
            </div>
          </div>
          
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Our story: <span class="text-danger">*</span></label>
              <textarea name="story" rows="4" cols="4" placeholder="Add brief story about your company" class="form-control"></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-8">
                <label>When company was formed: <span class="text-danger">*</span></label>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <select name="company_formed_month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                        <option></option>
                        <?php foreach(CON_MONTHS as $key1=>$val1): ?>
                        <option value="<?php echo $key1; ?>"><?php echo $val1; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <select name="company_formed_year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
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
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Zip: <span class="text-danger">*</span></label>
              <input type="text" name="zipcode" class="form-control" placeholder="Add your zip">
            </div>
          </div>
        </div>
      </fieldset>
      <h6><strong>Our Services</strong></h6>
      <fieldset>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Select your personal care services: <span class="text-danger">*</span></label>
              <select data-placeholder="Select your services" multiple="multiple" class="form-control multiselect-select-all" name="personal_care_services[]" data-fouc>
                <!-- <option></option> -->
                <?php foreach(load_table("personal_care_services") as $PCS): ?>
                <option value="<?php echo $PCS->id; ?>"><?php echo $PCS->name; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Select housekeeping services: <span class="text-danger">*</span></label>
              <select data-placeholder="Select your services" multiple="multiple" class="form-control multiselect-select-all" name="housekeeping_services[]" data-fouc>
                <!-- <option></option> -->
                <?php foreach(load_table("housekeeping_services") as $HKS): ?>
                <option value="<?php echo $HKS->id; ?>"><?php echo $HKS->name; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Select sunrise/sunset services: <span class="text-danger">*</span></label>
              <select data-placeholder="Select your services" multiple="multiple" class="form-control multiselect-select-all" name="sunrise_sunset_services[]" data-fouc>
                <!-- <option>Select </option> -->
                <?php foreach(load_table("sunrise_sunset_services") as $SSS): ?>
                <option value="<?php echo $SSS->id; ?>"><?php echo $SSS->name; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Select dementia/alzheimer's Assistance: <span class="text-danger">*</span></label>
              <select data-placeholder="Select your services" multiple="multiple" class="form-control multiselect-select-all" name="dementia_alzheimer_assistance[]" data-fouc>
                <!-- <option></option> -->
                <?php foreach(load_table("dementia_alzheimer_assistance") as $DAA): ?>
                <option value="<?php echo $DAA->id; ?>"><?php echo $DAA->name; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Select personal assitant services: <span class="text-danger">*</span></label>
              <select data-placeholder="Select your services" multiple="multiple" class="form-control multiselect-select-all" name="personal_assistance_services[]" data-fouc>
                <!-- <option>Select </option> -->
                <?php foreach(load_table("personal_assistance_services") as $PAS): ?>
                <option value="<?php echo $PAS->id; ?>"><?php echo $PAS->name; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Select post-surgury/maternity Assistance: <span class="text-danger">*</span></label>
              <select data-placeholder="Select your services" multiple="multiple" class="form-control multiselect-select-all" name="post_surgery_maternity_services[]" data-fouc>
               <!--  <option></option> -->
                <?php foreach(load_table("post_surgery_maternity_services") as $PSMS): ?>
                <option value="<?php echo $PSMS->id; ?>"><?php echo $PSMS->name; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Respite services: <span class="text-danger">*</span></label>
              <select data-placeholder="Select your services" multiple="multiple" class="form-control multiselect-select-all" name="respite_services[]" data-fouc>
                <!-- <option>Select </option> -->
                <?php foreach(load_table("respite_services") as $RS): ?>
                <option value="<?php echo $RS->id; ?>"><?php echo $RS->name; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Other services: <span class="text-danger">*</span></label>
              <select data-placeholder="Select your services" multiple="multiple" class="form-control multiselect-select-all" name="other_services[]" data-fouc>
                <!-- <option></option> -->
                <?php foreach(load_table("other_services") as $OS): ?>
                <option value="<?php echo $OS->id; ?>"><?php echo $OS->name; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
        </div>
      </fieldset>
      <h6><strong>Licenses</strong></h6>
      <fieldset>
        <div class="license_view">
          <div class="row">
            <div class="col-md-12" align="center">
              <input type="hidden" id="counter" value="1">
              <button type="button" class="btn btn-outline bg-indigo-400 text-indigo-400 border-indigo-400" data-toggle="modal" data-target="#modal_form_license"><i class="icon-plus3"></i> ADD A NEW STATE LICENSE</button>
            </div>
          </div>
          <div id="license_area"></div>
        </div>
      </fieldset>
      <h6><strong>Company Logo & Profile Image</strong></h6>
      <fieldset>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="d-block">Upload your company Logo:</label>
              <input name="media_company_logo" type="file" class="form-input-styled" data-fouc>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Enter Your Password: <span class="text-danger">*</span></label>
              <input type="password" name="password" class="form-control" placeholder="Enter your password">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <div class="row"> 
                <!--<label class="d-block">Upload your profile picture:</label>
              <input name="media_profile_picture" type="file" class="form-input-styled" data-fouc>-->
                <div class="col-md-6">
                  <button type="button" class="btn btn-danger legitRipple" onClick="profileImageCropper()"><i class="icon-file-upload2 mr-2"></i>Upload Profile Picture</button>
                </div>
                <div class="col-md-6">
                  <div id="croppedImageShow" ><img width="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Re-enter Your Password: <span class="text-danger">*</span></label>
              <input type="password" name="re_password" class="form-control" placeholder="Re-enter your password">
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-md-12">
        <div class="progress rounded-round" id="agency_progress" style="display:none">
                <div class="progress-bar bg-warning" style="width:0%"> <span></span> </div>
              </div>
        </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>
<!-- /wizard with validation -->
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
                <input type="text" name="state_license" class="form-control required" placeholder="Add state license #" data-validation="required" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>State where your license recieved: <span class="text-danger">*</span></label>
                <select name="license_recieved_country" data-placeholder="Choose a State..." class="form-control form-control-select2 required" data-fouc required>
                  <option></option>
                  <?php foreach($countries as $count1): ?>
                  <option value="<?php echo $count1->id; ?>"><?php echo $count1->name; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label>Valid From: <span class="text-danger">*</span></label>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <select name="valid_from_month" data-placeholder="Month" class="form-control form-control-select2 required" data-fouc required>
                      <option></option>
                      <?php foreach(CON_MONTHS as $key2=>$val2): ?>
                      <option value="<?php echo $key2; ?>"><?php echo $val2; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <select name="valid_from_year" data-placeholder="Year" class="form-control form-control-select2 required" data-fouc required>
                      <option></option>
                      <?php for($i=2019; $i>=1960; $i--){ ?>
                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <label>Valid To: <span class="text-danger">*</span></label>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <select name="valid_to_month" data-placeholder="Month" class="form-control form-control-select2 required" data-fouc required>
                      <option></option>
                      <?php foreach(CON_MONTHS as $key3=>$val3): ?>
                      <option value="<?php echo $key3; ?>"><?php echo $val3; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <select name="valid_to_year" data-placeholder="Year" class="form-control form-control-select2 required" data-fouc required>
                      <option></option>
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
                <input name="media_license_document" type="file" class="form-input-styled" data-fouc>
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
<div id="modal_edit_form_license_div"></div>

<script type="text/javascript">

/*function addNewLicense(){
	$(".add_new_license").css("display","block");
	$(".license_view").css("display","none");
}
function viewLicense(){
	$(".add_new_license").css("display","none");
	$(".license_view").css("display","block");
}*/
$(document).ready(function(e) {
    inputMask($("#format"), "+99-99-9999-9999");
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
	var selector = $("#format");
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
	$.post("<?php echo site_url("agency/register/load_states"); ?>", {id:id}).done(function(e){
		$("#states").html(e);
	});
}
function load_cities(id){
	$.post("<?php echo site_url("agency/register/load_cities"); ?>", {id:id}).done(function(e){
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
		url: '<?php echo site_url("agency/register/add_new_license_form"); ?>',
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


$("#update_new_license_form").on("submit", function(e){
	//$("#modal_form_license").modal("hide");
	e.preventDefault();
	var formData = new FormData($(this)[0]);
	$.ajax({
		url: '<?php echo site_url("agency/register/update_new_license_form"); ?>',
		type: 'POST',
		data: formData,
		cache: false,
		contentType: false,
		processData: false,
		success: function (e) {
			console.log(e);
			//$("#license_area").append(e);
      /*swal({
        title: 'Good job!',
        text: 'You have successfully added your State License!',
        confirmButtonText: 'Ok',
        type: 'success'
      });*/
		},
		/*xhr: function () {
			var xhr = new window.XMLHttpRequest();
			xhr.upload.addEventListener("progress", function (evt) {
				if (evt.lengthComputable) {
					var percentComplete = evt.loaded / evt.total;
					percentComplete = parseInt(percentComplete * 100);
					$('.myprogress').text(percentComplete + '%');
					$('.myprogress').css('width', percentComplete + '%');
				}
			}, false);
			return xhr;
		},*/
		
	});
	/*swal({
		title: 'Good job!',
		text: 'You clicked the button!',
		type: 'success'
	});*/
});

/*Ladda.bind('.btn-ladda-progress', {
            callback: function(instance) {
                var progress = 0;
                var interval = setInterval(function() {
                    progress = Math.min(progress + Math.random() * 0.1, 1);
                    instance.setProgress(progress);

                    if( progress === 1 ) {
                        instance.stop();
                        clearInterval(interval);
                    }
                }, 200);
            }
        });*/

function delete_license(id){
	var image_data = $("#media_license_document_"+id+"").html();
	if(image_data!=0){
		imageD = JSON.parse(image_data);
		$.post("<?php echo site_url("agency/register/delete_license_doc"); ?>", {id:id, imageD:imageD}).done(function(e){});
	}
	$("#license_row_"+id+"").remove();
}
function edit_license(id){
	var formData = {
		row_id:id,
		state_license:$("#state_license_"+id+"").val(),
		license_recieved_country:$("#license_recieved_country_"+id+"").val(),
		valid_from_month:$("#valid_from_month_"+id+"").val(),
		valid_from_year:$("#valid_from_year_"+id+"").val(),
		valid_to_month:$("#valid_to_month_"+id+"").val(),
		valid_to_year:$("#valid_to_year_"+id+"").val(),
		media_license_document:$("#media_license_document_"+id+"").html()
	};
	$.post("<?php echo site_url("agency/register/edit_license"); ?>", {formData:formData}).done(function(e){
		$("#modal_edit_form_license_div").html(e);
		$("#modal_edit_form_license").modal("show");
	});
}

function add_new_agency(){
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
	
	var formData = new FormData($("#agency_form")[0]);
	formData.append("croppedImage", $AppMaster.profileCropper.blob);
	$.ajax({
		url: '<?php echo site_url("agency/register/register_agency"); ?>',
		type: 'POST',
		data: formData,
		cache: false,
		contentType: false,
		processData: false,
		success: function(e){
		},
		xhr: function () {
			var xhr = new window.XMLHttpRequest();
			xhr.upload.addEventListener("progress", function (evt) {
				if (evt.lengthComputable) {
					var percentComplete = evt.loaded / evt.total;
					percentComplete = parseInt(percentComplete * 100);
					$("#agency_progress > .progress-bar").css('width', percentComplete + '%');
					$("#agency_progress > .progress-bar").html('<span>'+percentComplete+'% Complete</span>');
					if(percentComplete==100){
						window.location = '<?php echo site_url("agency/dashboard"); ?>';
					}
				}
			}, false);
			return xhr;
		},
	});
	/*swal({
		title: 'Good job! Your company profile is now ready. Now lets get ready for business with these few steps.',
		text: 'Now lets get ready for business with these few steps.',
		html: '<img src="http://localhost/senior-agency-care/assets/images/backgrounds/male.jpg" class="rounded-circle" width="40" height="40" alt="">&nbsp&nbsp&nbsp&nbsp<a style="color:#555;" href="#"><strong>Add Cargivers</strong></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp' + '<img src="http://localhost/senior-agency-care/assets/images/backgrounds/male.jpg" class="rounded-circle" width="40" height="40" alt="">&nbsp&nbsp<a style="color:#555;" href="#"><strong>Add Clients</strong></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp' + '<img src="http://localhost/senior-agency-care/assets/images/backgrounds/male.jpg" class="rounded-circle" width="40" height="40" alt="">&nbsp&nbsp<a style="color:#555;" href="#"><strong>Create Schedules</strong></a>',
		confirmButtonText: 'Lets Get Started',
		type: 'success'
	});*/
}

$("#modal_form_license").validate({
  modules : 'logic'
});



</script>

</body>
</html>