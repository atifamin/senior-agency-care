<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_input_groups.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/tags/tagsinput.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/tags/tokenfield.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_tags_input.js"></script>
<style>
.token-input {
	min-width: 100% !important;
}
</style>
<div class="row">
  <div class="col-md-12">
    <form id="client_dietry_needs">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group pt-2">
            <label class="d-block font-weight-semibold">Select client's dietry requirements</label>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" name="dietry_requirements" id="regular_diet" value="Regular diet">
              <label class="custom-control-label" for="regular_diet">Regular diet</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" name="dietry_requirements" id="mechanical_diet" value="Mechanical diet">
              <label class="custom-control-label" for="mechanical_diet">Mechanical diet</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" name="dietry_requirements" id="pure_diet" value="Puree diet">
              <label class="custom-control-label" for="pure_diet">Puree diet</label>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group pt-2">
            <label class="d-block font-weight-semibold">Select client's fluid requirements</label>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" name="fluid_requirements" id="thin_liquids" value="Thin liquids">
              <label class="custom-control-label" for="thin_liquids">Thin liquids</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" name="fluid_requirements" id="honey_thick_liquids" value="Honey thick liquids">
              <label class="custom-control-label" for="honey_thick_liquids">Honey thick liquids</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" name="fluid_requirements" id="nector_thick_liquids" value="Nector thick liquids">
              <label class="custom-control-label" for="nector_thick_liquids">Nector thick liquids</label>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="d-block font-weight-semibold">List client's known allergies</label>
            <input style="width: 100%;" type="text" name="allergies_list" class="form-control tokenfield" value="" placeholder="Add multiple client's allergies(with comma seperated)" data-fouc>
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
        swal('Dietry Needs','Added Successfuly');
      }
    });
  }
   // $("#client_dietry_needs").on("submit", function(e){

   //    var formData = new FormData($('#client_dietry_needs')[0]);
   //    formData.append("client_id", <?php echo $client_id; ?>);
   //      $.ajax({
   //        url:'<?php //echo site_url('agency/scheduling/add_client_dietry_needs'); ?>',
   //        type:'post',
   //        data:formData,
   //        cache: false,
   //        contentType: false,
   //        processData: false,
   //        success: function(data){
   //         swal('Dietry Needs','Added Successfuly');
   //        }
   //      });
   //  });

</script>