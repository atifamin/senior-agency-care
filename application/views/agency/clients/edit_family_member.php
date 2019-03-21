
<?php //print_array($result); ?>

	<div class="modal-content">
		<div class="modal-header bg-primary">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h6 class="modal-title" style="position: absolute;">Edit Family Member</h6>
		</div>

		<div class="modal-body">
		<fieldset id="append_family_member">
				<div class="row">
					<input type="hidden" name="family_member_id" id="family_member_id" value="<?php echo $result->id; ?>">
					<div class="col-md-2 offset-md-1">
						<div class="form-group">
							<label>First Name:</label>
							<input type="text" name="" id="edit_first_name_family" class="form-control" value="<?php echo $result->first_name; ?>">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label>Last Name:</label>
							<input type="text" name="" id="edit_last_name_family" class="form-control" value="<?php echo $result->last_name; ?>">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label>Email:</label>
							<input type="email" name="" id="edit_email_address_family" class="form-control" value="<?php echo $result->email_address; ?>">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label>Phone #:</label>
							<input type="text" name="" id="edit_mobile_number_family" class="form-control" value="<?php echo $result->mobile_number; ?>" data-mask="+99-99-9999-9999" required="required">
						</div>
					</div>
					<div class="col-md-2">
						<a style="margin-top: 28px;" href="javascript:;" onclick="updateFamilyMember()" class="btn btn-primary legitRipple">Update<i style="margin-left: 8px;" class="icon-arrow-right14"></i></a>
					</div>
				</div>
		</fieldset>		
		</div>

		<!-- <div class="modal-footer">
			<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		</div> -->
	</div>

	<script type="text/javascript">
		function updateFamilyMember(){
			var formData = new FormData($(this)[0]);
			$.ajax({
				url:'<?php echo site_url('agency/clients/updateFamilyMember'); ?>',
				type:'post',
				data:formData,
				success: function (e){
					$("#license_row_"+family_member_id+"").replaceWith(data);
				}
			});
		}
	</script>
