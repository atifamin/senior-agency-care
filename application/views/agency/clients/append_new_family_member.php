
<div class="row" style="padding: 15px 0px;" id="family_member_row_<?php echo $family_id; ?>">
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
	    <div class="btn-group">
        	<button type="button" class="btn btn-outline alpha-success text-success-800 border-success-600 legitRipple dropdown-toggle" data-toggle="dropdown">Change</button>
        	<div class="dropdown-menu dropdown-menu-right">
				<a href="#" onclick="editFamilyMember('<?php echo $family_id; ?>')" class="dropdown-item"><i class="icon-menu7"></i> Edit</a>
				<a href="#" onclick="deleteFamilyMember('<?php echo $family_id; ?>')" class="dropdown-item"><i class="icon-database-remove"></i> Delete</a>
			</div>
		</div>
	</div>
</div>