

<div class="row" id="license_row_<?php echo $result->id; ?>" style="padding: 15px 0px;">
	<div class="col-md-1 offset-md-2">
		<!-- <input type="hidden" id="edit_counter" value=""> -->
	    <img src="<?php echo base_url(); ?>assets/images/userimg/face5.jpg" class="rounded-circle" width="40" height="40" alt="">
	</div>
	<div class="col-md-3">
	    <a href="#" class="text-default font-weight-semibold letter-icon-title"><?php echo $result->first_name." ".$result->last_name; ?></a>
	    <div class="text-muted font-size-sm"><?php echo $result->email_address; ?>
	    	
	    </div>
	</div>
	<div class="col-md-3">
	    <button type="button" onclick="editFamilyMember('<?php echo $result->id; ?>')" class="btn btn-outline alpha-success text-success-800 border-success-600 legitRipple">Edit<i style="font-size: 10px; margin-left: 20px;" class="icon-arrow-down15"></i></button>
	</div>
</div>