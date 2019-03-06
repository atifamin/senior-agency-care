<?php include(APPPATH."views/agency/inc/header.php"); ?>
<?php $months = CON_MONTHS; ?>
<?PHP //print_array($profile_detail); ?>
<?PHP //print_array($cities); ?>
<style type="text/css">
#swal2-content {
	padding: 30px 0px !important;
}
.multi_select_box + span {
	border: 1px solid #00bcd4;
	border-radius: 25px;
}
</style>

<div class="container"> 
  <!-- <div class="row" style="margin: 10px 0px; width: 100%;">
    <div class="col-md-12" style="text-align: center;">
      <div class="register_icon" style="width: 70px; height: 70px; border-radius: 50%; border: 3px solid #F37333; margin: 0 auto;"> <a style="position: relative; top: 20px;" href="#"><i style="color: #F37333; font-size: 24px;" class="icon-people"></i></a> </div>
    </div>
  </div> --> 
  
  <!-- Wizard with validation -->
  <div class="card">
    <div class="card-header" style="text-align: center;">
      <h6>Update Your Agency Account</h6>
    </div>
    <form class="wizard-form steps-validation" action="<?php echo site_url(""); ?>" data-fouc method="POST" enctype="multipart/form-data" id="agency_form">
      <h6><strong>Company Information</strong></h6>
      <fieldset>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Company name: <span class="text-danger">*</span></label>
              <input type="text" name="company_name" class="form-control" placeholder="Add your company name" value="<?php echo $profile_detail->company_name; ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Your position at the company:</label>
              <select name="position" data-placeholder="Select position" class="form-control form-control-select2" data-fouc>
                <option></option>
                <?php foreach(CON_COMPANY_POSITIONS as $posKey=>$posVal): ?>
                <option value="<?php echo $posKey; ?>"<?php if($profile_detail->position==$posKey){echo 'selected="selected"';} ?> ><?php echo $posVal; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Your full name: <span class="text-danger">*</span></label>
              <input type="text" name="full_name" class="form-control" value="<?php echo $profile_detail->full_name; ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Company email address: <span class="text-danger">*</span></label>
              <input type="email" name="email_address" class="form-control" value="<?php echo $profile_detail->email_address; ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Phone #: <span class="text-danger">*</span></label>
              <input type="text" name="phone_number" class="form-control" value="<?php echo $profile_detail->phone_number; ?>" data-mask="+99-99-9999-9999">
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
                        <option value="<?php echo $key1; ?>"<?php if ($profile_detail->profile->company_formed_month == $key1){echo 'selected="selected"';} ?>><?php echo $val1; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <select name="company_formed_year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                        <option></option>
                        <?php for($i=2019; $i>=1960; $i--){ ?>
                        <option <?php if($profile_detail->profile->company_formed_year == $i){echo 'selected="selected"';} ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
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
              <textarea name="story" rows="4" cols="4" class="form-control"><?php echo $profile_detail->profile->story;?></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Country: <span class="text-danger">*</span></label>
              <select name="country_id" data-placeholder="Choose a Country..." class="form-control form-control-select2" data-fouc onChange="load_states($(this).val())">
                <option></option>
                <?php foreach ($countries as $count): ?>
                <option <?php if ($profile_detail->profile->country_id == $count->id) {echo 'selected="selected"';} ?> value="<?php echo $count->id; ?>"><?php echo $count->name; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>State: <span class="text-danger">*</span></label>
              <select name="state_id" data-placeholder="Choose a State..." class="form-control form-control-select2" data-fouc id="states" onChange="load_cities($(this).val())">
                <option></option>
                <?php foreach ($states as $state):?>
                <option <?php if($profile_detail->profile->state_id == $state->id){echo 'selected="selected"';} ?> value="<?php echo $state->id; ?>"><?php echo $state->name; ?></option>
                <?php endforeach; ?>
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
                <?php foreach ($cities as $city): ?>
                <option <?php if($profile_detail->profile->city_id == $city->id){echo 'selected="selected"';} ?> value="<?php echo $city->id; ?>"><?php echo $city->name;?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Zip: <span class="text-danger">*</span></label>
              <input type="text" name="zipcode" class="form-control" value="<?php echo $profile_detail->profile->zipcode; ?>">
            </div>
          </div>
        </div>
      </fieldset>
      <h6><strong>Our Services</strong></h6>
      <fieldset>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <?php
              $personal_care_services = json_decode($profile_detail->profile->personal_care_services);
              ?>
              <label>Select your personal care services:</label>
              <select data-placeholder="Select your services" multiple="multiple" class="multi_select_box form-control select" name="personal_care_services[]" data-fouc>
                <option></option>
                <?php foreach(load_table("personal_care_services") as $PCS): ?>
                <option value="<?php echo $PCS->id; ?>" <?php if(in_array($PCS->id, $personal_care_services)){echo 'selected="selected"';} ?>><?php echo $PCS->name; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Select housekeeping services: <span class="text-danger">*</span></label>
              <select data-placeholder="Select your services" multiple="multiple" class="multi_select_box form-control select" name="housekeeping_services[]" data-fouc>
                <?php $housekeeping_services = json_decode($profile_detail->profile->housekeeping_services); ?>
                <option></option>
                <?php foreach(load_table("housekeeping_services") as $HKS): ?>
                <option value="<?php echo $HKS->id; ?>" <?php if (in_array($HKS->id, $housekeeping_services)) {echo 'selected="selected"';} ?>><?php echo $HKS->name; ?></option>
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
                <?php $sunrise_sunset_services = json_decode($profile_detail->profile->sunrise_sunset_services); ?>
                <option>Select </option>
                <?php foreach(load_table("sunrise_sunset_services") as $SSS): ?>
                <option value="<?php echo $SSS->id; ?>"<?php if (in_array($SSS->id, $sunrise_sunset_services)){echo 'selected="selected"';} ?>><?php echo $SSS->name; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Select dementia/alzheimer's Assistance: <span class="text-danger">*</span></label>
              <select data-placeholder="Select your services" multiple="multiple" class="multi_select_box form-control select" name="dementia_alzheimer_assistance[]" data-fouc>
                <?php $dementia_alzheimer_assistance = json_decode($profile_detail->profile->dementia_alzheimer_assistance); ?>
                <option></option>
                <?php foreach(load_table("dementia_alzheimer_assistance") as $DAA): ?>
                <option value="<?php echo $DAA->id; ?>"<?php if (in_array($DAA->id, $dementia_alzheimer_assistance)){echo 'selected="selected"';} ?>><?php echo $DAA->name; ?></option>
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
                <?php $personal_assistance_services = json_decode($profile_detail->profile->personal_assistance_services); ?>
                <option>Select </option>
                <?php foreach(load_table("personal_assistance_services") as $PAS): ?>
                <option value="<?php echo $PAS->id; ?>"<?php if (in_array($PAS->id, $personal_assistance_services)){echo 'selected="selected"';} ?> ><?php echo $PAS->name; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Select post-surgury/maternity Assistance: <span class="text-danger">*</span></label>
              <select data-placeholder="Select your services" multiple="multiple" class="multi_select_box form-control select" name="post_surgery_maternity_services[]" data-fouc>
                <?php $post_surgery_maternity_services = json_decode($profile_detail->profile->post_surgery_maternity_services); ?>
                <option></option>
                <?php foreach(load_table("post_surgery_maternity_services") as $PSMS): ?>
                <option value="<?php echo $PSMS->id; ?>"<?php if (in_array($PSMS->id, $post_surgery_maternity_services)){echo 'selected="selected"';} ?>><?php echo $PSMS->name; ?></option>
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
                <?php $respite_services = json_decode($profile_detail->profile->respite_services); ?>
                <option>Select </option>
                <?php foreach(load_table("respite_services") as $RS): ?>
                <option value="<?php echo $RS->id; ?>"<?php if (in_array($RS->id, $respite_services)){echo 'selected="selected"';} ?>><?php echo $RS->name; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Other services: <span class="text-danger">*</span></label>
              <select data-placeholder="Select your services" multiple="multiple" class="multi_select_box form-control select" name="other_services[]" data-fouc>
                <?php $other_services = json_decode($profile_detail->profile->other_services); ?>
                <option></option>
                <?php foreach(load_table("other_services") as $OS): ?>
                <option value="<?php echo $OS->id; ?>"<?php if (in_array($OS->id, $other_services)){echo 'selected="selected"';} ?>><?php echo $OS->name; ?></option>
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
          <div id="license_area">
            <div class="row" style="width: 100%;" id="license_row">
              <div class=" offset-md-1 col-md-7">
                <?php
              if(isset($profile_detail->license) && count($profile_detail->license)>0){
              foreach($profile_detail->license as $licenseKey=>$licenseVal){ ?>
                <div class="row" style="margin-top: 50px;">
                  <div class="col-md-7">
                    <p style="margin-bottom: 0; color: #00bcd4;"><?php echo $licenseVal->state_license; ?><span style="position: relative; left: 55px; top: 9px;"><strong style="font-size: 24px; position: relative; top: 2px;">
                      <?php
                  $fromDate = date("Y-m-d");
                  $toDate = date("".$licenseVal->valid_to_year."-".$licenseVal->valid_to_month."-d");
                  $difference = $this->common_model->dateDifferanceTwoDates($fromDate, $toDate);
                    echo $difference['days'];
                  ?>
                      </strong>&nbsp;Days to expire</span></p>
                    <p style="position: relative; bottom: 7px; font-size: 12px; color: #B4B8BA;">Valid until <?php echo $months[$licenseVal->valid_to_month].", ".$licenseVal->valid_to_year; ?></p>
                  </div>
                  <div class="col-md-5 text-center" style="margin-top: 15px;">
                    <div class="btn-group ml-1">
                      <button type="button" class="btn bg-transparent text-slate-600 border-slate dropdown-toggle" data-toggle="dropdown">Edit</button>
                      <div class="dropdown-menu dropdown-menu-right"> <a href="javascript:;" class="dropdown-item" onclick="edit_license()"><i class="icon-database-edit2"></i> Edit</a> <a href="javascript:;" class="dropdown-item" onclick="delete_license()"><i class="icon-bin2"></i> Delete</a> </div>
                    </div>
                  </div>
                </div>
                <?php }} ?>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </fieldset>
      <h6><strong>Company Logo & Profile Image</strong></h6>
      <fieldset>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="d-block">Upload your company Logo:</label>
              <input name="media_company_logo" type="file" value="<?php echo $profile_detail->profile->media_company_logo; ?>" class="form-input-styled" data-fouc>
            </div>
          </div>
<<<<<<< HEAD
          <!-- <div class="col-md-6">
=======
          <!--<div class="col-md-6">
>>>>>>> df7a2601031b35baaafcfd9a67864bc5895c1cfd
            <div class="form-group">
              <label>Enter Your Password: <span class="text-danger">*</span></label>
              <input type="password" name="password" class="form-control" value="">
            </div>
<<<<<<< HEAD
          </div> -->
=======
          </div>-->
>>>>>>> df7a2601031b35baaafcfd9a67864bc5895c1cfd
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="d-block">Upload your profile picture:</label>
              <input name="media_profile_picture" type="file"  class="form-input-styled" data-fouc>
            </div>
          </div>
<<<<<<< HEAD
          <!-- <div class="col-md-6">
=======
          <!--<div class="col-md-6">
>>>>>>> df7a2601031b35baaafcfd9a67864bc5895c1cfd
            <div class="form-group">
              <label>Re-enter Your Password: <span class="text-danger">*</span></label>
              <input type="password" name="re_password" class="form-control" value="">
            </div>
<<<<<<< HEAD
          </div> -->
=======
          </div>-->
>>>>>>> df7a2601031b35baaafcfd9a67864bc5895c1cfd
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
<!-- =====Add License Model=====-->
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
<div id="modal_edit_form_license_div"> </div>

<!-- Theme JS files --> 

<script src="<?php echo base_url(); ?>assets/js/demo_pages/register_form_wizard.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_select2.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/buttons/spin.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/buttons/ladda.min.js"></script> 
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
  $("#license_progress").show();
  var counter = $("#counter").val();
  e.preventDefault();
  var formData = new FormData($(this)[0]);
  formData.append("counter", counter);
  $.ajax({
    url: '<?php echo site_url("agency/profile/add_new_license_form"); ?>',
    type: 'POST',
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (e) {
      counter++;
      $("#counter").val(counter);
      $("#license_area").append(e);
     }
    // ,
  //   xhr: function () {
  //     var xhr = new window.XMLHttpRequest();
  //     xhr.upload.addEventListener("progress", function (evt) {
  //       if (evt.lengthComputable) {
  //         var percentComplete = evt.loaded / evt.total;
  //         percentComplete = parseInt(percentComplete * 100);
  //         $("#license_progress > .progress-bar").css('width', percentComplete + '%');
  //         $("#license_progress > .progress-bar").html('<span>'+percentComplete+'% Complete</span>');
  //         if(percentComplete==100){
  //           $("#modal_form_license").modal("hide");
  //           swal({
  //             title: 'Good job!',
  //             text: 'You have successfully added your State License!',
  //             confirmButtonText: 'Ok',
  //             type: 'success'
  //           });
  //         }
  //       }
  //     }, false);
  //     return xhr;
  //   },
    
  // });
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
  $.post("<?php echo site_url("agency/Profile/edit_license"); ?>", {formData:formData}).done(function(e){
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
  $.ajax({
    url: '<?php echo site_url("agency/"); ?>',
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