<?php include(APPPATH."views/inc/header.php");?>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="row" style="padding: 12px;">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-5">
							<a href="<?php echo site_url("caregiver/add_caregiver"); ?>" class="btn btn-light legitRipple" style="font-size: 11px;"><i style="margin-right: 10px;" class="icon-users4"></i>Add a caregiver</a>
						</div>
						<span style="margin-top: 17px; margin-right: 14px; font-size: 10px;">OR</span>
						<div class="col-md-5">
							<a href="<?php echo site_url("caregiver/send_invite_to_caregiver"); ?>" class="btn btn-light legitRipple" style="font-size: 11px;"><i class="icon-make-group mr-2"></i>Invite your caregivers</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-4 offset-md-4" style="margin-top: 9px;">
							<h6 style="font-size: 12px; color: #4caf50;">Added<span style="margin-left: 6px;" class="badge badge-success badge-pill">65</span></h6>
						</div>
						<div class="col-md-4" style="margin-top: 9px;">
							<h6 style="font-size: 12px; color: #ff7043;">Pending<span style="margin-left: 6px;" class="badge badge-warning badge-pill">65</span></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<!-- Dropdown list -->
		<div class="card">
			<div class="card-header header-elements-inline" style="border-bottom: 1px solid lightgray; padding-bottom: 0px;">
				<div class="col-md-7" style="text-align: right;">
					<h5>Send an invite to your caregivers</h5>
				</div>
				<div class="header-elements">
					<div class="list-icons" style="position: relative; bottom: 6px;">
                		<a class="list-icons-item" data-action="collapse"></a>
                		<a class="list-icons-item" data-action="reload"></a>
                	</div>
            	</div>
			</div>
			<div class="col-md-9 offset-md-1">
				<form>
					<div class="row" style="padding: 60px 0px;">
						<div class="col-md-3">
							<div class="form-group">
								<label>First Name:</label>
								<input type="text" name="name" class="form-control" placeholder="John Doe">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Last Name:</label>
								<input type="text" name="name" class="form-control" placeholder="John Doe">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Email:</label>
								<input type="email" name="name" class="form-control" placeholder="example@gmail.com">
							</div>
						</div>
						<div class="col-md-3">
							<button style="margin-top: 28px;" type="submit" class="btn btn-primary legitRipple"> Send Invite<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
						</div>
					</div>
				</form>
				<div class="row" style="padding: 15px 0px;">
					<div class="col-md-4">
						<div class="d-flex align-items-center">
							<div class="mr-3">
								<img src="<?php echo base_url(); ?>assets/images/backgrounds/male.jpg" class="rounded-circle" width="40" height="40" alt="">
							</div>
							<div>
								<a href="#" class="text-default font-weight-semibold letter-icon-title">Jeremy Victorino<i style="color: gray; margin-left: 18px; font-size: 13px;" class="icon-pencil5"></i></a>
								<div class="text-muted font-size-sm">Jeremy@gmail.com</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<button style="width: 80%;" type="button" class="btn btn-outline alpha-success text-success-800 border-success-600 legitRipple">Joined</button>
					</div>
					<div class="col-md-3">
						
					</div>
				</div>
				<div class="row" style="padding: 15px 0px;">
					<div class="col-md-4">
						<div class="d-flex align-items-center">
							<div class="mr-3">
								<img src="<?php echo base_url(); ?>assets/images/backgrounds/male.jpg" class="rounded-circle" width="40" height="40" alt="">
							</div>
							<div>
								<a href="#" class="text-default font-weight-semibold letter-icon-title">Jeremy Victorino<i style="color: gray; margin-left: 18px; font-size: 13px;" class="icon-pencil5"></i></a>
								<div class="text-muted font-size-sm">Jeremy@gmail.com</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<button style="width: 80%;" type="button" class="btn btn-outline alpha-danger text-danger-800 border-danger-600 legitRipple">Pending</button>
					</div>
					<div class="col-md-3">
						<button style="width: 80%;" type="submit" class="btn btn-primary legitRipple"> Re-send<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
					</div>
				</div>
				<div class="row" style="padding: 15px 0px;">
					<div class="col-md-4">
						<div class="d-flex align-items-center">
							<div class="mr-3">
								<img src="<?php echo base_url(); ?>assets/images/backgrounds/male.jpg" class="rounded-circle" width="40" height="40" alt="">
							</div>
							<div>
								<a href="#" class="text-default font-weight-semibold letter-icon-title">Jeremy Victorino<i style="color: gray; margin-left: 18px; font-size: 13px;" class="icon-pencil5"></i></a>
								<div class="text-muted font-size-sm">Jeremy@gmail.com</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<button style="width: 80%;" type="button" class="btn btn-outline alpha-danger text-danger-800 border-danger-600 legitRipple">Pending</button>
					</div>
					<div class="col-md-3">
						<button style="width: 80%;" type="submit" class="btn btn-primary legitRipple"> Re-send<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
					</div>
				</div>
				<div class="row" style="padding: 15px 0px;">
					<div class="col-md-4">
						<div class="d-flex align-items-center">
							<div class="mr-3">
								<img src="<?php echo base_url(); ?>assets/images/backgrounds/male.jpg" class="rounded-circle" width="40" height="40" alt="">
							</div>
							<div>
								<a href="#" class="text-default font-weight-semibold letter-icon-title">Jeremy Victorino<i style="color: gray; margin-left: 18px; font-size: 13px;" class="icon-pencil5"></i></a>
								<div class="text-muted font-size-sm">Jeremy@gmail.com</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<button style="width: 80%;" type="button" class="btn btn-outline alpha-danger text-danger-800 border-danger-600 legitRipple">Pending</button>
					</div>
					<div class="col-md-3">
						<button style="width: 80%;" type="submit" class="btn btn-primary legitRipple"> Re-send<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
					</div>
				</div>
				<div class="row" style="padding: 15px 0px;">
					<div class="col-md-4">
						<div class="d-flex align-items-center">
							<div class="mr-3">
								<img src="<?php echo base_url(); ?>assets/images/backgrounds/male.jpg" class="rounded-circle" width="40" height="40" alt="">
							</div>
							<div>
								<a href="#" class="text-default font-weight-semibold letter-icon-title">Jeremy Victorino<i style="color: gray; margin-left: 18px; font-size: 13px;" class="icon-pencil5"></i></a>
								<div class="text-muted font-size-sm">Jeremy@gmail.com</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<button style="width: 80%;" type="button" class="btn btn-outline alpha-danger text-danger-800 border-danger-600 legitRipple">Pending</button>
					</div>
					<div class="col-md-3">
						<button style="width: 80%;" type="submit" class="btn btn-primary legitRipple"> Re-send<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
					</div>
				</div>
			</div>
			<div class="col-md-12" style="text-align: right; padding-top: 15px; padding-bottom: 15px;">
				<button type="submit" class="btn btn-primary legitRipple"> Done<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
			</div>
		</div>
		<!-- /dropdown list -->
	</div>
</div>


<?php include(APPPATH."views/inc/footer.php");?>