
<div class="row" style="padding: 15px 0px;">
	<div class="col-md-1 offset-md-2">
		<!-- <input type="hidden" id="edit_counter" value=""> -->
	    <img src="<?php echo base_url(); ?>assets/images/userimg/face5.jpg" class="rounded-circle" width="40" height="40" alt="">
	</div>
	<div class="col-md-3">
	    <a href="#" class="text-default font-weight-semibold letter-icon-title"><?php echo $first_name." ".$last_name; ?></a>
	    <div class="text-muted font-size-sm"><?php echo $email_address; ?>
	    	
	    </div>
	</div>
	<div class="col-md-3">
	    <button type="button" onclick="editFamilyMember('<?php echo $family_id; ?>')" class="btn btn-outline alpha-success text-success-800 border-success-600 legitRipple">Edit<i style="font-size: 10px; margin-left: 20px;" class="icon-arrow-down15"></i></button>
	</div>
</div>