<input type="hidden" name="firstName[]" id="first_name_family<?php echo $counter; ?>" value="<?php echo $first_name; ?>">
<input type="hidden" name="lastName[]" id="last_name_family<?php echo $counter; ?>" value="<?php echo $last_name; ?>">
<input type="hidden" name="emailAddress[]" id="email_address_family<?php echo $counter; ?>" value="<?php echo $email_address; ?>">
<input type="hidden" name="mobileNumber[]" id="mobile_number_family<?php echo $counter; ?>" value="<?php echo $mobile_number; ?>">
<div class="col-md-2 offset-md-1">
            <img src="<?php echo base_url(); ?>assets/images/userimg/face5.jpg" class="rounded-circle" width="40" height="40" alt="">
        </div>
        <div class="col-md-3">
            <a href="#" class="text-default font-weight-semibold letter-icon-title"><?php echo $first_name." ".$last_name; ?></a>
            <div class="text-muted font-size-sm"><?php echo $email_address; ?></div>
        </div>
<div class="col-md-3">
    <button type="button" onclick="editFamilyMember('<?php echo $counter; ?>')" class="btn btn-outline alpha-success text-success-800 border-success-600 legitRipple">Edit<i style="font-size: 10px; margin-left: 20px;" class="icon-arrow-down15"></i></button>
</div>