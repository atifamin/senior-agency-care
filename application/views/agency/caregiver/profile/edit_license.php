
<form id="update_new_license_form" role="form" enctype="multipart">
  <input type="hidden" id="caregiver_id" value="<?php echo $result->id;?>">
  <div class="modal-header">
    <h5 class="modal-title"><strong>ADD NEW LICENSE</strong></h5>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>State license #: <span class="text-danger">*</span></label>
          <input type="text" name="state_license" id="state_license" class="form-control required" placeholder="Add state license #" data-validation="required" required value="<?php echo $result->state_license; ?>">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label>Valid From:</label>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <select name="valid_from_month" id="valid_from_month" data-placeholder="Month" class="form-control" data-fouc>
                <option value=""></option>
                <?php foreach(CON_MONTHS as $key2=>$val2): ?>
                <option value="<?php echo $key2; ?>" <?php if($result->valid_from_month==$key2){echo 'selected="selected"';} ?>><?php echo $val2; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <select name="valid_from_year" id="valid_from_year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                <option value=""></option>
                <?php for($i=2019; $i>=1960; $i--){ ?>
                <option value="<?php echo $i; ?>" <?php if($result->valid_from_year==$i){echo 'selected="selected"';} ?>><?php echo $i; ?></option>
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
                <option value="<?php echo $key3; ?>" <?php if($result->valid_to_month==$key3){echo 'selected="selected"';} ?>><?php echo $val3; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <select name="valid_to_year" id="valid_to_year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                <option value=""></option>
                <?php for($i=2019; $i<=2029; $i++){ ?>
                <option value="<?php echo $i; ?>" <?php if($result->valid_to_year==$i){echo 'selected="selected"';} ?>><?php echo $i; ?></option>
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
    <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in" data-spinner-size="20"> <span class="ladda-label">Update License</span> </button>
  </div>
</form>
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/selects/select2.min.js"></script>

<script>
$("select").select2({
	minimumResultsForSearch: Infinity
});
</script>
