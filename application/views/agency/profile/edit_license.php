<?php //print_array($result->id); ?>
 <div id="modal_edit_license" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><strong>EDIT LICENSE</strong></h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form id="update_new_license_form" method="post" role="form" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>State license #: <span class="text-danger">*</span></label>
                <input type="text" name="state_license" class="form-control required" placeholder="Add state license #" value="<?php echo $result->state_license; ?>">
                <input type="hidden" name="agency_license_id" id="agency_license_id" value="<?php echo $result->id; ?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>State where your license recieved: <span class="text-danger">*</span></label>
                <select name="license_recieved_country" data-placeholder="Choose a State..." class="form-control form-control-select2 required" data-fouc>
                  <option></option>
                  <?php foreach($countries as $count1): ?>
                  <option value="<?php echo $count1->id; ?>" <?php if($count1->id==$result->license_recieved_country){echo 'selected="selected"';} ?>><?php echo $count1->name; ?></option>
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
                      <option value="<?php echo $key2; ?>" <?php if($key2==$result->valid_from_month){echo 'selected="selected"';} ?>><?php echo $val2; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <select name="valid_from_year" data-placeholder="Year" class="form-control form-control-select2 required" data-fouc>
                      <option></option>
                      <?php for($i=2019; $i>=1960; $i--){ ?>
                      <option value="<?php echo $i; ?>" <?php if($i==$result->valid_from_year){echo 'selected="selected"';} ?>><?php echo $i; ?></option>
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
                      <option value="<?php echo $key3; ?>" <?php if($key3==$result->valid_to_month){echo 'selected="selected"';} ?>><?php echo $val3; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <select name="valid_to_year" data-placeholder="Year" class="form-control form-control-select2 required" data-fouc>
                      <option></option>
                      <?php for($i=2019; $i<=2029; $i++){ ?>
                      <option value="<?php echo $i; ?>" <?php if($i==$result->valid_to_year){echo 'selected="selected"';} ?>><?php echo $i; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <textarea style="display:none" name="media_license_document"><?php echo $result->media_license_document; ?></textarea>
                <!-- <input type="hidden" name="row_id" value="<?php //echo $result->id; ?>" /> -->
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
          <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in" data-spinner-size="20"> <span class="ladda-label">Update License</span> </button>
        </div>
      </form>
    </div>
  </div>
</div> 
<script>
$(".form-control-select2").select2();
</script>
<script>
$("#update_new_license_form").on("submit", function(e){
  e.preventDefault();
  var form = $(this);
  var agency_license_id = $('#agency_license_id').val();
  $.ajax({
    url: '<?php echo site_url("agency/profile/update_license_form"); ?>',//+agency_license_id,
    type: 'POST',
    data: form.serialize(),
    dataType:'html',
    success: function (data) {
      //alert(data);
      if(data == 1){
      swal({
        title: 'Good job!',
        text: 'You clicked the button!',
        type: 'success'
      });
      $("#modal_edit_license").modal('hide');
      $("#license_area").append(data);
    }
    $.post("<?php echo site_url("agency/profile/edit_agency_license_row/") ?>",{id:agency_license_id}).done(function(e){
        $("license_row_"+agency_license_id+"").html(e);
    });

    }
  });
  /*swal({
    title: 'Good job!',
    text: 'You clicked the button!',
    type: 'success'
  });*/
});
</script>