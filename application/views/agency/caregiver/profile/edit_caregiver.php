<?php include(APPPATH."views/agency/inc/header.php");?>
<style>
.select2-container{
  border-bottom: 1px solid #eeeded;
}
</style>
<?php $months = CON_MONTHS; ?>

<?php //print_array($detail);
//print_array($result); ?>


<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="row" style="padding: 12px;">
        <div class="col-md-6">
          <div class="row" style="text-align: center;">
            <div class="col-md-5"> <a href="<?php echo site_url("agency/caregiver/add_caregiver"); ?>" class="btn btn-light legitRipple" style="font-size: 11px;"><i style="margin-right: 10px;" class="icon-users4"></i>Add Caregiver</a> </div>
            <span style="margin: 10px auto; font-size: 10px;">OR</span>
            <div class="col-md-5"> <a href="<?php echo site_url("agency/caregiver/send_invite_to_caregiver"); ?>" class="btn btn-light legitRipple" style="font-size: 11px;"><i class="icon-make-group mr-2"></i>Invite your caregivers</a> </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <!-- <div class="col-md-4 offset-md-4" style="margin-top: 9px;">
              <h6 style="font-size: 12px; color: #4caf50;">Added<span style="margin-left: 6px;" class="badge badge-success badge-pill"><?php echo $total_added_profiles; ?></span></h6>
            </div>
            <div class="col-md-4" style="margin-top: 9px;">
              <h6 style="font-size: 12px; color: #ff7043;">Pending<span style="margin-left: 6px;" class="badge badge-warning badge-pill"><?php echo $total_pending_profiles; ?></span></h6>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12"> 
    <!-- Wizard with validation -->
    <div class="card">
      <div class="card-header" style="text-align: center;">
        <h6>Edit caregiver</h6>
      </div>
      <form class="wizard-form steps-validation" action="<?php echo site_url("agency/caregiver/update"); ?>" method="post" enctype="multipart" data-fouc id="caregiver_form">
        <input type="hidden" name="caregiver_id" value="<?php echo $detail->id; ?>">
        <h6><strong>Profile</strong></h6>
        <fieldset>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>First Name: <span class="text-danger">*</span></label>
                <input type="text" name="first_name" class="form-control" placeholder="Add first name" value="<?php echo $detail->first_name;?>">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Last Name: <span class="text-danger">*</span></label>
                <input type="text" name="last_name" class="form-control" placeholder="Add last name" value="<?php echo $detail->last_name;?>">
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
                <select name="position" data-placeholder="Choose a Position..." id="form-control-select1selectt" class="form-control select-search-basic" data-fouc>
                  <option></option>
                  <?php foreach(CON_CAREGIVER_POSITIONS as $positionKey=>$positionVal): ?>
                  <option value="<?php echo $positionKey; ?>"<?php if($detail->position == $positionKey){echo 'selected="selected"';}?>><?php echo $positionVal; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <!-- <label class="d-block">Upload Caregiver profile image:</label>
                <input name="profile_pic" type="file" class="form-input-styled" data-fouc>
                <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span> -->
                <button type="button" class="btn btn-danger legitRipple" onClick="profileImageCropper()"><i class="icon-file-upload2 mr-2"></i>Upload Profile Picture</button>
                <div id="croppedImageShow" ><img class="rounded-circle" src="<?php echo caregiver_image($detail->id) ;?>" width="100"></div>
                <!-- <img src="<?php //echo caregiver_image($detail->id) ;?>" class="rounded-circle" width="100" height="100"  > -->
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
                      <option value="<?php echo $key1; ?>"<?php if($detail->from_month == $key1){echo 'selected="selected"';}?>><?php echo $val1; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <select name="from_year" data-placeholder="Year" class="form-control select-search-basic" data-fouc>
                      <option></option>
                      <?php for($i=2019; $i>=1960; $i--){ ?>
                      <option value="<?php echo $i; ?>"<?php if($detail->from_year == $i){echo 'selected="selected"';}?>><?php echo $i; ?></option>
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
                      <option value="<?php echo $key2; ?>"<?php if($detail->to_month){echo 'selected="selected"';}?>><?php echo $val2; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <select name="to_year" data-placeholder="Year" class="form-control select-search-basic" data-fouc>
                      <option></option>
                      <option value="present">Present</option>
                      <?php for($i=2019; $i>=1960; $i--){ ?>
                      <option value="<?php echo $i; ?>"<?php if($detail->to_year == $i){echo 'selected="selected"';}?>><?php echo $i; ?></option>
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
                <input type="email" name="email" class="form-control" placeholder="company@email.com" value="<?php echo $detail->email; ?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Address: <span class="text-danger">*</span></label>
                <input type="text" name="address" class="form-control" placeholder="Enter your address" value="<?php echo $detail->address; ?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Country:</label>
                <select name="country_id" data-placeholder="Choose a State..." class="form-control select-search" data-fouc onChange="load_states($(this).val())">
                  <option></option>
                  <?php foreach($countries as $count): ?>
                  <option <?php if($detail->country_id == $count->id) {echo 'selected="selected"';}?> value="<?php echo $count->id; ?>"><?php echo $count->name; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>State:</label>
                <select name="state_id" data-placeholder="Choose a State..." class="form-control select-search" data-fouc id="states" onChange="load_cities($(this).val())">
                  <option></option>
                  <?php foreach($states as $stat): ?>
                  <option <?php if($detail->state_id == $stat->id) {echo 'selected="selected"';}?> value="<?php echo $stat->id; ?>"><?php echo $stat->name; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>City:</label>
                <select name="city_id" data-placeholder="Choose a City..." class="form-control select-search" data-fouc id="cities">
                  <?php $phone_format = array(); ?>
                  <?php foreach($cities as $cit): ?>
                  <?php
                  $phone_format[] = (object)array(
                      "id"=>$count->id,
                      "phoneformat"=>$count->phoneformat,
                      "phonecode"=>$count->phonecode,
                  );
                  ?>
                  <option <?php if($detail->city_id == $cit->id) {echo 'selected="selected"';}?> value="<?php echo $cit->id; ?>"><?php echo $cit->name; ?></option>
                  <?php endforeach; ?>
                </select>
                <textarea id="phone_format" style="display: none;"><?php echo json_encode($phone_format); ?></textarea>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Phone #:</label>
                <input type="text" name="phone_number" class="form-control" id="format" value="<?php echo $detail->phone_number; ?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Zip:</label>
                <input type="text" name="zipcode" class="form-control" placeholder="Add your zip" value="<?php echo $detail->zipcode; ?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Caregiver emergency contact name:</label>
                <input type="text" name="emergency_contact_name" class="form-control" placeholder="Enter emergency contact name" value="<?php echo $detail->emergency_contact_name;?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Emergency contact phone #:</label>
                <input type="text" name="emergency_contact_number" class="form-control" id="format1" value="<?php echo $detail->emergency_contact_number;?>">
              </div>
            </div>
          </div>
        </fieldset>
        <h6><strong>Caregiver Certification</strong></h6>
        <fieldset>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Multiple select</label>
                <select multiple="multiple" class="form-control select" data-fouc name="caregiver_certifications[]">
                  <?php
                    $caregiver_certifications = "";
                    if(count(json_decode($detail->caregiver_certifications))>0)
                      $caregiver_certifications = json_decode($detail->caregiver_certifications); 
                  ?>
                  <?php foreach (CON_CAREGIVER_CERTIFICATIONS as $key =>$value) { ?>
                    <option value="<?php echo $key; ?>"  <?php if(!empty($caregiver_certifications) && in_array($key, $caregiver_certifications)){echo 'selected="selected"';} ?>><?php echo $value; ?></option>
                  <?php } ?>
                </select>
              </div>
              <!-- Within a group with checkbox -->
              <!-- <div class="form-group">
                 <div class="input-group"> <span class="input-group-prepend">
                  <select data-placeholder="Select Certifications" id="caregiver_certifications" name="caregiver_certifications[]" multiple="multiple" class="form-control select" data-fouc>
                    <optgroup label="">
                       <?php 
                  $caregiver_certifications = json_decode($detail->caregiver_certifications); 
                  foreach (CON_CAREGIVER_CERTIFICATIONS as $key =>$value) { ?>
                    <option value="<?php echo $key; ?>"  <?php if(in_array($key, $caregiver_certifications)){echo 'selected="selected"';} ?>><?php echo $value; ?></option>
                    
                <?php } 
                // <span class="bg-dark py-1 px-2 rounded"><span class="text-white">C.N.A Certified Nurse Assistant</span></span>
                  ?>

                      </optgroup>
                  </select>
                  
                </div>
              </div> -->
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
                
                  <?php if(isset($detail->license) && count($detail->license)>0){
                    foreach($detail->license as $licenseKey=>$licenseVal){ ?>
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
      <form id="add_new_license_form" role="form" enctype="multipart">
        <input type="hidden" id="caregiver_id" value="<?php echo $detail->id;?>">
        <!-- <input type="hidden" id="license_id" value="<?php echo $detail->license[0]->id; ?>"> -->
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
                <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span></div>
            </div>
          </div>
          <!-- <div class="row">
            <div class="col-md-12">
              <div class="progress rounded-round" id="license_progress" style="display:none">
                <div class="progress-bar bg-warning" style="width:0%"> <span></span> </div>
              </div>
            </div>
          </div>
        </div> -->
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
      
      
    </div>
  </div>
</div>
<script src="<?php echo base_url(); ?>/assets/js/demo_pages/caregiver_form_edit_wizard.js"></script> 
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
    inputMask($("#format"), "+99-99-9999-9999")
    inputMask($("#format1"), "+99-99-9999-9999")
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
  console.log(final_format);
  return false;
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
  e.preventDefault();
	var fileData = $("#media_license_document").prop("files")[0];
	var formData = new FormData();
  // var id = $("#id").val();
  var caregiver_id = $("#caregiver_id").val();
  // var license_id = $('#license_id').val();
  // alert(license_id);
  var state_license = $("#state_license").val();
  var valid_from_month = $("#valid_from_month").val();
  var valid_from_year = $("#valid_from_year").val();
  var valid_to_month = $("#valid_to_month").val();
  var valid_to_year = $("#valid_to_year").val();
  var media_license_document = $("#media_license_document").val();

  // formData.append("id",id);
  formData.append("caregiver_id",caregiver_id);
  formData.append("state_license",state_license);
  formData.append("valid_from_month",valid_from_month);
  formData.append("valid_from_year",valid_from_year);
  formData.append("valid_to_month",valid_to_month);
  formData.append("valid_to_year",valid_to_year);
  formData.append("media_license_document",fileData);

	$.ajax({
		url: '<?php echo site_url("agency/caregiver/add_new_license"); ?>',
		type: 'POST',
    dataType: 'text',
		data: formData,
		cache: false,
		contentType: false,
		processData: false,
		success: function (e) {
       //alert(e);
      if (e) {
        swal({
		  title: 'License Added Sucessfully',
		  text: 'You have successfully added a valid State License!',
		  confirmButtonText: 'Ok',
		  type: 'success'
		});
		//swal("License","added successfully");
        $("#modal_form_license").modal("hide");
		 $("#license_row").append(e);

      }
     //$("#modal_form_license").modal('hide');
		}
	});
});

function delete_license(id){
	//alert(id);
  $.ajax({
    type:'post',
    url:'<?php echo site_url("agency/caregiver/delete_license"); ?>',
    data:{id:id},
    dataType:'html',
    success:function(data){
      $("#row_"+id+"").remove();
      //alert(data);
    }

  });

  }

function edit_license(id) {
  $.ajax({
    type:'post',
    url:'<?php echo site_url("agency/caregiver/edit_license"); ?>',
    data:{id:id},
    dataType:'html',
    success:function(data){
      $('#edit_license_modal_dialog').html(data);
      $('#edit_license_modal').modal('show');
    }
  });
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
  //formData.append("caregiver_certifications", $("#caregiver_certifications").val());
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
				window.location = '<?php echo site_url("agency/caregiver/edit/"); ?>'+caregiver_id;
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
<?php include(APPPATH."views/agency/inc/footer.php");?>
