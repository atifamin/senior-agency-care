<?php include(APPPATH."views/family/inc/header.php"); ?>
<?php //$months = CON_MONTHS; ?>
<?PHP //print_array($profile_detail); ?>
<?PHP  //print_array($profile_image); ?>
<style type="text/css">
#swal2-content {
  padding: 30px 0px !important;
}
.multi_select_box + span {
  border: 1px solid #00bcd4;
  border-radius: 25px;
}
</style>

<div class="card">
<!--   <div class="card-header" style="text-align: center;">
    <h6>Update Your Family Account</h6>
  </div> -->
  <form class="wizard-form steps-validation" data-fouc method="POST" enctype="multipart/form-data" id="family_form">
    <input type="hidden" name="family_id" value="<?php echo $profile_detail->id; ?>" />
    <h6><strong>Update Family Information</strong></h6>
    <fieldset>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>First name: <span class="text-danger">*</span></label>
            <input type="text" name="First_name" class="form-control" placeholder="Add your First name" value="<?php echo $profile_detail->first_name; ?>">
          </div>
        </div>
     
      </div>
      <div class="row">
          <div class="col-md-6">
          <div class="form-group">
            <label>Last name: <span class="text-danger">*</span></label>
            <input type="text" name="Last_name" class="form-control" placeholder="Add your Last name" value="<?php echo $profile_detail->last_name; ?>">
          </div>
        </div>
     
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Email Address: <span class="text-danger">*</span></label>
            <input type="text" name="email_address" class="form-control" placeholder="Add your Email Address" value="<?php echo $profile_detail->email_address; ?>">
          </div>
        </div>
   
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Mobile Number: <span class="text-danger">*</span></label>
            <input type="text" name="mobile_number" class="form-control" placeholder="Add your Mobile Number" value="<?php echo $profile_detail->mobile_number; ?>">
          </div>
        </div>
   
      </div>
      <div class="row"> 
        <!--<label class="d-block">Upload your profile picture:</label>
              <input name="media_profile_picture" type="file" class="form-input-styled" data-fouc>-->
        <div class="col-md-6">
              <div class="row">
          <div class="col-md-6">
            <button type="button" class="btn btn-danger legitRipple" onClick="profileImageCropper()"><i class="icon-file-upload2 mr-2"></i>Upload Profile Picture</button>
          </div>
          <div class="col-md-6">
            <div id="croppedImageShow" ><img width="100"></div>
          </div>
          </div>
        </div>
        <div class="col-md-6"> 
        <?php if(isset($profile_detail->profile->media_profile_picture_detail)){ ?>
        <img src="<?php echo base_url($profile_detail->profile->media_profile_picture_detail->full_path); ?>" width="100">
        
        <?php } ?>
         </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="progress rounded-round" id="family_progress" style="display:none">
            <div class="progress-bar bg-warning" style="width:0%"> <span></span> </div>
          </div>
        </div>
      </div>
    </fieldset>
  </form>
</div>


<!-- Theme JS files --> 

<script src="<?php echo base_url(); ?>assets/js/demo_pages/agency_profile_wizard.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/selects/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_select2.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/buttons/spin.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/buttons/ladda.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>

<script type="text/javascript">


function update_agency_profile(){
  var formData = new FormData($("#family_form")[0]);
  formData.append("croppedImageShow", $AppMaster.profileCropper.blob);

  $.ajax({
    url: '<?php echo site_url("family/profile/update_family_profile"); ?>',
    type: 'POST',
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function(e){
      console.log(e);
      return false;
    },
    xhr: function () {
      var xhr = new window.XMLHttpRequest();
      xhr.upload.addEventListener("progress", function (evt) {
        if (evt.lengthComputable) {
          var percentComplete = evt.loaded / evt.total;
          percentComplete = parseInt(percentComplete * 100);
          $("#family_progress > .progress-bar").css('width', percentComplete + '%');
          $("#family_progress > .progress-bar").html('<span>'+percentComplete+'% Complete</span>');
          if(percentComplete==100){
            swal({
              title: 'Good job!',
              text: 'You have successfully updated your profile!',
              confirmButtonText: 'Ok',
              type: 'success'
            }).then(function() {
              location.reload();
            });
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

</script>
<?php include(APPPATH."views/family/inc/footer.php"); ?>
