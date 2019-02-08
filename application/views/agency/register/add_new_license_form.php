<div class="row" style="width: 100%;" id="license_row_<?php echo $post['counter']; ?>">
  <div class=" offset-md-1 col-md-6">
    <div class="row" style="margin-top: 50px;">
      <div class="col-md-6">
        <p style="margin-bottom: 0; color: #00bcd4;">Uc#43252345234<span style="position: relative; left: 73px; top: 9px;"><strong style="font-size: 24px; position: relative; top: 2px;">360</strong>Days to expire</span></p>
        <p style="position: relative; bottom: 7px; font-size: 12px; color: #B4B8BA;">Valid until 00/00/2019</p>
      </div>
      <div class="col-md-6 text-right">
        <div class="btn-group ml-1">
          <button type="button" class="btn bg-transparent text-slate-600 border-slate dropdown-toggle" data-toggle="dropdown">Edit</button>
          <div class="dropdown-menu dropdown-menu-right"> <a href="javascript:;" class="dropdown-item"><i class="icon-database-edit2"></i> Edit</a> <a href="javascript:;" class="dropdown-item"><i class="icon-bin2"></i> Delete</a> </div>
        </div>
      </div>
    </div>
  </div>
  <input type="hidden" name="state_license[]" value="<?php echo $post['state_license']; ?>"/>
  <input type="hidden" name="license_recieved_country[]" value="<?php echo $post['license_recieved_country']; ?>"/>
  <input type="hidden" name="valid_from_month[]" value="<?php echo $post['valid_from_month']; ?>"/>
  <input type="hidden" name="valid_from_year[]" value="<?php echo $post['valid_from_year']; ?>"/>
  <input type="hidden" name="valid_to_month[]" value="<?php echo $post['valid_to_month']; ?>"/>
  <input type="hidden" name="valid_to_year[]" value="<?php echo $post['valid_to_year']; ?>"/>
  <input type="hidden" name="media_license_document[]" value="<?php echo $file['tmp_name']; ?>"/>
</div>
