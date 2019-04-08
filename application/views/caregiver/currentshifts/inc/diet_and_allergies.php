 
<?php $dietry_needs = $this->common_model->listingRow('client_id',$detail->client_id,"client_dietry_needs"); ?>
<?php //print_array($dietry_needs); ?>

<style>
.token-input {
    min-width: 100% !important;
}
</style>

<div class="row" id="view_dietry_<?php echo $detail->id; ?>" >
  <div class="col-md-12" style="margin: 15px 0px 0px 10px;">
    <a href="javascript:;" class="btn btn-light" id="edit_client_dietry_<?php echo $detail->id; ?>" style="background-color: #fff; float: right;margin-right: 15px;"><i class="icon-google-drive mr-2"></i> Edit</a>
    <label class="d-block font-weight-semibold">Client's dietry requirements</label>
    <p><?php foreach (CON_CLIENT_DIETRY_REQUIREMENT as $dietkey => $dietvalue){if (isset($dietry_needs->dietry_requirements) && $dietkey == $dietry_needs->dietry_requirements) {echo $dietvalue;}}  ?></p>

  </div>
  <div class="col-md-12" style="margin: 15px 0px 0px 10px;">
    <label class="d-block font-weight-semibold">Client's fluid requirements</label>
    <p><?php foreach (CON_CLIENT_FLUID_REQUIREMENT as $flukey => $fluvalue){if (isset($dietry_needs->dietry_requirements) && $flukey == $dietry_needs->fluid_requirements) {echo $fluvalue;}}  ?></p>
  </div>
  <div class="col-md-12" style="margin: 15px 0px 30px 10px;">
    <label class="d-block font-weight-semibold">List client's known food and medication allergies</label>
    <p><?php if(count($dietry_needs)>0){echo $dietry_needs->allergies_list;} ?></p>
  </div>
</div>

<div class="row" id="edit_dietry_<?php echo $detail->id; ?>" style="display: none;">
  <div class="col-md-12">
    <form id="client_dietry_needs_<?php echo $detail->id; ?>" method="post">
        <input type="hidden" name="dietry_needs_id" value="<?php if(count($dietry_needs)){echo $dietry_needs->id;} ?>">
        <input type="hidden" name="agency_id" value="<?php echo $detail->agency_id; ?>">
        <input type="hidden" name="client_id" value="<?php echo $detail->client_id; ?>">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group pt-2">
              <label class="d-block font-weight-semibold">Select client's dietry requirements</label>
              <?php foreach (CON_CLIENT_DIETRY_REQUIREMENT as $deitry_key => $dietry_value) { 
                  ?>
              <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" name="dietry_requirements" value="<?php echo $deitry_key; ?>" id="deitry_<?php echo $deitry_key; ?>" <?php if(count($dietry_needs)>0 && $deitry_key == $dietry_needs->dietry_requirements){echo 'checked';} ?> >
                <label class="custom-control-label" for="deitry_<?php echo $deitry_key; ?>"><?php echo $dietry_value; ?></label>
              </div>
               <?php  } ?>

            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group pt-2">
              <label class="d-block font-weight-semibold">Select client's fluid requirements</label>
              <?php foreach (CON_CLIENT_FLUID_REQUIREMENT as $fluid_key => $fluid_value) { ?>
              <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" name="fluid_requirements"  value="<?php echo $fluid_key; ?>" id="fluid_<?php echo $fluid_key; ?>" <?php if(count($dietry_needs)>0 && $fluid_key == $dietry_needs->fluid_requirements){echo 'checked';} ?>>
                <label class="custom-control-label" for="fluid_<?php echo $fluid_key; ?>"><?php echo $fluid_value; ?></label>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="d-block font-weight-semibold">List client's known allergies</label>

              <input style="width: 100%;" type="text" name="allergies_list" class="form-control tokenfield" value="<?php if(count($dietry_needs)>0){echo $dietry_needs->allergies_list;} ?>" placeholder="Add multiple client's allergies(with comma seperated)" data-fouc>
            </div>
          </div>
        </div>
        <div style = "text-align: right;">
          <button type="submit" class="btn btn-primary legitRipple">Save<i style="margin-left: 8px;" class="icon-arrow-right14"></i></button>
        </div>
    </form>
  </div>
</div>

 

<script type="text/javascript">
  
  $('#edit_client_dietry_<?php echo $detail->id; ?>').click(function(){
    $("#edit_dietry_<?php echo $detail->id; ?>").show();
    $('#view_dietry_<?php echo $detail->id; ?>').hide();
  });

  $('#client_dietry_needs_<?php echo $detail->id; ?>').on('submit',function(e){
    e.preventDefault();
    loader = CardLoader($("#edit_dietry_<?php echo $detail->id; ?>"));
    var formData = new FormData($(this)[0]);
    $.ajax({
      url:'<?php echo site_url('caregiver/current_shifts/add_client_dietry_needs'); ?>',
      type:'post',
      data:formData,
      cache: false,
      contentType: false,
      processData: false,
      success: function(data){
        // console.log(data);
        // return false;
        loader.unblock();
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
  });

  
</script>

