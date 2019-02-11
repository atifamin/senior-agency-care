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
<script src="<?php echo base_url(); ?>/assets/js/demo_pages/extra_sweetalert.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/plugins/notifications/sweet_alert.min.js"></script>
<!-- Theme JS files -->
<script src="<?php echo base_url(); ?>/assets/js/plugins/buttons/spin.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/plugins/buttons/ladda.min.js"></script>
</head>
<style type="text/css">
#swal2-content {
	padding: 30px 0px !important;
}
.multi_select_box + span {
	border: 1px solid #00bcd4;
	border-radius: 25px;
}
</style>
<body>
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
              <label>Phone #: <span class="text-danger">*</span></label>
              <input type="text" name="phone_number" class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999">
            </div>
          </div>
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
            <div class="form-group">
              <label>Country: <span class="text-danger">*</span></label>
              <select name="country_id" data-placeholder="Choose a Country..." class="form-control form-control-select2" data-fouc onChange="load_states($(this).val())">
                <option></option>
                <?php foreach($countries as $count): ?>
                <option value="<?php echo $count->id; ?>"><?php echo $count->name; ?></option>
                <?php endforeach; ?>
              </select>
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
              <label>City: <span class="text-danger">*</span></label>
              <select name="city_id" data-placeholder="Choose a City..." class="form-control form-control-select2" data-fouc id="cities">
                <option></option>
              </select>
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
              <select data-placeholder="Select your services" multiple="multiple" class="multi_select_box form-control select" name="personal_care_services[]" data-fouc>
                <option></option>
                <?php foreach(load_table("personal_care_services") as $PCS): ?>
                <option value="<?php echo $PCS->id; ?>"><?php echo $PCS->name; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Select housekeeping services: <span class="text-danger">*</span></label>
              <select data-placeholder="Select your services" multiple="multiple" class="multi_select_box form-control select" name="housekeeping_services[]" data-fouc>
                <option></option>
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
              <select data-placeholder="Select your services" multiple="multiple" class="multi_select_box form-control select" name="sunrise_sunset_services[]" data-fouc>
                <option>Select </option>
                <?php foreach(load_table("sunrise_sunset_services") as $SSS): ?>
                <option value="<?php echo $SSS->id; ?>"><?php echo $SSS->name; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Select dementia/alzheimer's Assistance: <span class="text-danger">*</span></label>
              <select data-placeholder="Select your services" multiple="multiple" class="multi_select_box form-control select" name="dementia_alzheimer_assistance[]" data-fouc>
                <option></option>
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
              <select data-placeholder="Select your services" multiple="multiple" class="multi_select_box form-control select" name="personal_assistance_services[]" data-fouc>
                <option>Select </option>
                <?php foreach(load_table("personal_assistance_services") as $PAS): ?>
                <option value="<?php echo $PAS->id; ?>"><?php echo $PAS->name; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Select post-surgury/maternity Assistance: <span class="text-danger">*</span></label>
              <select data-placeholder="Select your services" multiple="multiple" class="multi_select_box form-control select" name="post_surgery_maternity_services[]" data-fouc>
                <option></option>
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
              <select data-placeholder="Select your services" multiple="multiple" class="multi_select_box form-control select" name="respite_services[]" data-fouc>
                <option>Select </option>
                <?php foreach(load_table("respite_services") as $RS): ?>
                <option value="<?php echo $RS->id; ?>"><?php echo $RS->name; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Other services: <span class="text-danger">*</span></label>
              <select data-placeholder="Select your services" multiple="multiple" class="multi_select_box form-control select" name="other_services[]" data-fouc>
                <option></option>
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
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="d-block">Upload your profile picture:</label>
              <input name="media_profile_picture" type="file" class="form-input-styled" data-fouc>
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
                <input type="text" name="state_license" class="form-control required" placeholder="Add state license #">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>State where your license recieved: <span class="text-danger">*</span></label>
                <select name="license_recieved_country" data-placeholder="Choose a State..." class="form-control form-control-select2 required" data-fouc>
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
                    <select name="valid_from_month" data-placeholder="Month" class="form-control form-control-select2 required" data-fouc>
                      <option></option>
                      <?php foreach(CON_MONTHS as $key2=>$val2): ?>
                      <option value="<?php echo $key2; ?>"><?php echo $val2; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <select name="valid_from_year" data-placeholder="Year" class="form-control form-control-select2 required" data-fouc>
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
                    <select name="valid_to_month" data-placeholder="Month" class="form-control form-control-select2 required" data-fouc>
                      <option></option>
                      <?php foreach(CON_MONTHS as $key3=>$val3): ?>
                      <option value="<?php echo $key3; ?>"><?php echo $val3; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <select name="valid_to_year" data-placeholder="Year" class="form-control form-control-select2 required" data-fouc>
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
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="d-block">Upload License Document(optional):</label>
                <input name="media_license_document" type="file" class="form-input-styled" data-fouc>
                <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span> </div>
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
<script type="text/javascript">
/*function addNewLicense(){
	$(".add_new_license").css("display","block");
	$(".license_view").css("display","none");
}
function viewLicense(){
	$(".add_new_license").css("display","none");
	$(".license_view").css("display","block");
}*/
function load_states(id){
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
	var counter = $("#counter").val();
	//$("#modal_form_license").modal("hide");
	e.preventDefault();
	var formData = new FormData($(this)[0]);
	formData.append("counter", counter);
	//document.getElementById("add_new_license_form").reset();
	//formData = $(this).serialize();
	//var formData = new FormData($(this).parents('form')[0]);
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
			console.log(e);
      swal({
        title: 'Good job!',
        text: 'You have successfully added your State License!',
        confirmButtonText: 'Ok',
        type: 'success'
      });
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
	$("#license_row_"+id+"").remove();
}
function edit_license(id){
	
}

function add_new_agency(){
	//var form = $("#agency_form");
	//var formData = form.serialize();
	var formData = new FormData($("#agency_form")[0]);
	$.ajax({
		url: '<?php echo site_url("agency/register/register_agency"); ?>',
		type: 'POST',
		data: formData,
		cache: false,
		contentType: false,
		processData: false,
		success: function (e) {
			console.log(e);
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
		title: 'Good job! Your company profile is now ready. Now lets get ready for business with these few steps.',
		text: 'Now lets get ready for business with these few steps.',
		html: '<img src="http://localhost/senior-agency-care/assets/images/backgrounds/male.jpg" class="rounded-circle" width="40" height="40" alt="">&nbsp&nbsp&nbsp&nbsp<a style="color:#555;" href="#"><strong>Add Cargivers</strong></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp' + '<img src="http://localhost/senior-agency-care/assets/images/backgrounds/male.jpg" class="rounded-circle" width="40" height="40" alt="">&nbsp&nbsp<a style="color:#555;" href="#"><strong>Add Clients</strong></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp' + '<img src="http://localhost/senior-agency-care/assets/images/backgrounds/male.jpg" class="rounded-circle" width="40" height="40" alt="">&nbsp&nbsp<a style="color:#555;" href="#"><strong>Create Schedules</strong></a>',
		confirmButtonText: 'Lets Get Started',
		type: 'success'
	});*/
}
</script>
</body>
</html>