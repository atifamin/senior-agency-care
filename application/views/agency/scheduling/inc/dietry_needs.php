<?php //print_array($dietry_needs_detail->dietry_requirements); ?>

<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_input_groups.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/tags/tagsinput.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/tags/tokenfield.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_tags_input.js"></script>
<style>
.token-input {
	min-width: 100% !important;
}
</style>

<div class="row" id="view_dietry">
  <div class="col-md-12" style="margin: 15px 0px 0px 10px;">
    <a href="javascript:;" class="btn btn-light" id="edit_client_dietry" style="background-color: #fff; float: right;margin-right: 15px;"><i class="icon-google-drive mr-2"></i> Edit</a>
    <label class="d-block font-weight-semibold">Client's dietry requirements</label>
    <p><?php if(isset($dietry_needs_detail->dietry_requirements)){foreach (CON_CLIENT_DIETRY_REQUIREMENT as $dietkey => $dietvalue){if($dietkey == $dietry_needs_detail->dietry_requirements) {echo $dietvalue;}}}  ?></p>

  </div>
  <div class="col-md-12" style="margin: 15px 0px 0px 10px;">
    <label class="d-block font-weight-semibold">Client's fluid requirements</label>
    <p><?php if(isset($dietry_needs_detail->fluid_requirements)){foreach (CON_CLIENT_FLUID_REQUIREMENT as $flukey => $fluvalue){if($flukey == $dietry_needs_detail->fluid_requirements) {echo $fluvalue;}}}  ?></p>
  </div>
  <div class="col-md-12" style="margin: 15px 0px 30px 10px;">
    <label class="d-block font-weight-semibold">List client's known food and medication allergies</label>
    <p><?php if(count($dietry_needs_detail)>0){echo $dietry_needs_detail->allergies_list;} ?></p>
  </div>
</div>

<div class="row" id="edit_dietry" style="display: none;">
  <div class="col-md-12">
    <form id="client_dietry_needs">
        <input type="hidden" name="dietry_needs_id" value="<?php if(count($dietry_needs_detail)){echo $dietry_needs_detail->id;} ?>">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group pt-2">
              <label class="d-block font-weight-semibold">Select client's dietry requirements</label>
              <?php foreach (CON_CLIENT_DIETRY_REQUIREMENT as $deitry_key => $dietry_value) { 
                  ?>
              <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" name="dietry_requirements" value="<?php echo $deitry_key; ?>" id="deitry_<?php echo $deitry_key; ?>" <?php if(count($dietry_needs_detail)>0 && $deitry_key == $dietry_needs_detail->dietry_requirements){echo 'checked';} ?> >
                <label class="custom-control-label" for="deitry_<?php echo $deitry_key; ?>"><?php echo $dietry_value; ?></label>
              </div>
               <?php  } ?>

            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group pt-2">
              <label class="d-block font-weight-semibold">Select client's fluid requirements</label>
              <?php foreach (CON_CLIENT_FLUID_REQUIREMENT as $fluidkey => $fluidvalue) { ?>
              <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" name="fluid_requirements"  value="<?php echo $fluidkey; ?>" id="fluid_<?php echo $fluidkey; ?>" <?php if(count($dietry_needs_detail)>0 && $fluidkey == $dietry_needs_detail->fluid_requirements){echo 'checked';} ?>>
                <label class="custom-control-label" for="fluid_<?php echo $fluidkey; ?>"><?php echo $fluidvalue; ?></label>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="d-block font-weight-semibold">List client's known allergies</label>

              <input style="width: 100%;" type="text" name="allergies_list" class="form-control tokenfield" value="<?php if(count($dietry_needs_detail)>0){echo $dietry_needs_detail->allergies_list;} ?>" placeholder="Add multiple client's allergies(with comma seperated)" data-fouc>
            </div>
          </div>
        </div>
        <div style = "text-align: right;">
          <button type="button" class="btn btn-primary legitRipple" onclick="client_dietry_needs()" >Save<i style="margin-left: 8px;" class="icon-arrow-right14"></i></button>
        </div>
    </form>
  </div>
</div>

 

<script type="text/javascript">
  
  $('#edit_client_dietry').click(function(){
    $("#edit_dietry").show();
    $('#view_dietry').hide();
  });

  function client_dietry_needs(){
    var formData = new FormData($('#client_dietry_needs')[0]);
    formData.append('client_id',<?php echo $client_id; ?>)
    $.ajax({
      url:'<?php echo site_url('agency/scheduling/add_client_dietry_needs'); ?>',
      type:'post',
      data:formData,
      cache: false,
      contentType: false,
      processData: false,
      success: function(data){
        // console.log(data);
        // return false;
        //$('#deitry_needs_row_').html(data);
        swal({
          title: "Good job!",
          type: 'success',
          html: 'You have updated dietry needs successfully',
          allowOutsideClick: false,
        }).then(function() {
          location.reload();
        });
      }
    });
  }

  
</script>