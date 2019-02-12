<div class="row" style="width: 100%;" id="license_row_<?php echo $post['counter']; ?>">
  <div class=" offset-md-1 col-md-6">
    <div class="row" style="margin-top: 50px;">
      <div class="col-md-6">
        <p style="margin-bottom: 0; color: #00bcd4;"><?php echo $post['state_license']; ?><span style="position: relative; left: 73px; top: 9px;"><strong style="font-size: 24px; position: relative; top: 2px;"><?php echo $expiryDays; ?></strong>&nbsp;Days to expire</span></p>
        <p style="position: relative; bottom: 7px; font-size: 12px; color: #B4B8BA;">Valid until <?php echo "30/".$post['valid_to_month']."/".$post['valid_to_year']."" ?></p>
      </div>
      <div class="col-md-6 text-right">
        <div class="btn-group ml-1">
          <button type="button" class="btn bg-transparent text-slate-600 border-slate dropdown-toggle" data-toggle="dropdown">Edit</button>
          <div class="dropdown-menu dropdown-menu-right"> <a href="javascript:;" class="dropdown-item" onclick="edit_license(<?php echo $post['counter']; ?>)"><i class="icon-database-edit2"></i> Edit</a> <a href="javascript:;" class="dropdown-item" onclick="delete_license(<?php echo $post['counter']; ?>)"><i class="icon-bin2"></i> Delete</a> </div>
        </div>
      </div>
    </div>
  </div>
  <input type="hidden" name="state_license[]" id="state_license_<?php echo $post['counter']; ?>" value="<?php echo $post['state_license']; ?>"/>
  <input type="hidden" name="license_recieved_country[]" id="license_recieved_country_<?php echo $post['counter']; ?>" value="<?php echo $post['license_recieved_country']; ?>"/>
  <input type="hidden" name="valid_from_month[]" id="valid_from_month_<?php echo $post['counter']; ?>" value="<?php echo $post['valid_from_month']; ?>"/>
  <input type="hidden" name="valid_from_year[]" id="valid_from_year_<?php echo $post['counter']; ?>" value="<?php echo $post['valid_from_year']; ?>"/>
  <input type="hidden" name="valid_to_month[]" id="valid_to_month_<?php echo $post['counter']; ?>" value="<?php echo $post['valid_to_month']; ?>"/>
  <input type="hidden" name="valid_to_year[]" id="valid_to_year_<?php echo $post['counter']; ?>" value="<?php echo $post['valid_to_year']; ?>"/>
  <textarea style="display:none" name="media_license_document[]" id="media_license_document_<?php echo $post['counter']; ?>"><?php echo json_encode($file); ?></textarea>
</div>
