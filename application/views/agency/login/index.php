<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Senior Agency Care | Login</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="<?php echo base_url(); ?>/assets/js/main/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="<?php echo base_url(); ?>/assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/demo_pages/form_layouts.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/demo_pages/form_checkboxes_radios.js"></script>
	<!-- /theme JS files -->

</head>
<style type="text/css">
	body{
		background-image: url("assets/images/backgrounds/background.jpg");
		background-repeat: no-repeat;
		background-size: 100% 100%;
	}
</style>
<body>
	
	<div class="row" style="width: 100%;">
		<div class="col-md-4 offset-md-4" style="margin-top: 90px;">
			<div class="col-md-12" style="width: 80%; margin: 0 auto;">
				<div class="card" style="border-radius: 8px;">
					<div class="card-header">
						<div class="row" style="margin: 20px 0px 25px 0px;">
							<div class="col-md-4 offset-md-4" style="text-align: center;">
								<div class="login_icon" style="width: 70px; height: 70px; border-radius: 50%; border: 3px solid #F37333;">
									<a style="position: relative; top: 20px;" href="#"><i style="color: #F37333; font-size: 24px;" class="icon-people"></i></a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12" style="text-align: center;">
								<h5 class="card-title">Login to your Account</h5>
								<span style="color: #B3B3B3;">Your Credentials</span>
							</div>
						</div>
					</div>

					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<form action="<?php echo site_url("agency/dashboard"); ?>">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i style="color: gray;" class="icon-user"></i></span>
											</span>
											<input type="text" name="username" class="form-control" placeholder="Username">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i style="color: gray;" class="icon-lock"></i></span>
											</span>
											<input type="password" name="password" class="form-control" placeholder="Password">
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-6">
												<div class="form-check">
													<label class="form-check-label" style="font-size: 11px; color: #828181;">
														<input type="checkbox" class="form-check-input-styled" data-fouc>
														Remember
													</label>
												</div>
											</div>
											<div class="col-md-6" style="text-align: right;">
												<a style="font-size: 11px;" href="#">Forgot Password?</a>
											</div>
										</div>
									</div>

									<div class="form-group">
										<button type="submit" class="btn btn-primary" style="width: 100%;">Sign In <i style="margin-left: 6px; font-size: 13px;" class="icon-circle-right2"></i></button>
									</div>

									<div class="form-group">
										<div class="row">
											<div class="col-md-3" style="padding-right: 0;"><hr></div>
											<div class="col-md-6" style="text-align: center;"><span style="font-size: 11px; position: relative; top: 9px; color: #B3B3B3;">Don't have an account?</span></div>
											<div class="col-md-3" style="padding-left: 0;"><hr></div>
										</div>
									</div>

									<div class="form-group">
										<a style="width: 100%; color: #828181; background-color: #F6F5F5; border: 1px solid lightgray;" href="<?php echo base_url("agency/register"); ?>" class="btn btn-primary">Sign up</a>
									</div>

									<div class="form-group" style="text-align: center;">
										<p style="color: #B3B3B3; font-size: 12px;">By continuing, you're confirming that you've read our <span><a href="#">Terms & Conditions</a></span> and <span><a href="#">Cookie Policy</a></span></p>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>