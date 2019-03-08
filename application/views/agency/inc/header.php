<?php
	$profile_image = agency_image($this->agency_id);
	$profile_detail = agency_Detail($this->agency_id);
	$urlSeg2 = $this->uri->segment(2);
	$urlSeg3 = $this->uri->segment(3);
	//print_array($profile_detail);
	//print_array($profile_detail);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Senior Care Agency</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->
	
<!-- Core JS files -->
	<!-- Core JS files -->
	<script src="<?php echo base_url(); ?>assets/js/main/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/loaders/blockui.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/ui/ripple.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="<?php echo base_url(); ?>assets/js/plugins/forms/wizards/steps.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/forms/inputs/inputmask.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/forms/validation/validate.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/extensions/cookie.js"></script>

	<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
	<!-- /theme JS files -->
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="<?php echo base_url(); ?>assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
	<!-- <script src="<?php echo base_url(); ?>assets/js/demo_pages/form_select2.js"></script> -->
	<script src="<?php echo base_url();?>assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="<?php echo base_url();?>assets/js/demo_pages/form_multiselect.js"></script>
	<script src="<?php echo base_url();?>assets/js/demo_pages/extra_sweetalert.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/notifications/sweet_alert.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/app-script.js"></script>

</head>
<style type="text/css">
	.sidebar-user-material .sidebar-user-material-body{
		background:url('<?php echo base_url();?>assets/images/backgrounds/user_bg3.jpg') center center no-repeat !important;
		background-size:cover;
	}
</style>
<body>
<script>
$AppMaster = new AppMaster();
</script>



	<!-- Top Nav -->
	<?php include(APPPATH."views/agency/inc/top_nav.php"); ?>

	<!-- Page content -->
	<div class="page-content">

	<!-- Side Bar Menu -->
	<?php include(APPPATH."views/agency/inc/side_bar.php"); ?>
		<?php if($this->session->flashdata("success")): ?>
        <div class="alert alert-success border-0 alert-dismissible" align="center">
        	<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
        <?php echo $this->session->flashdata("success"); ?>
        </div>
  		<?php endif; ?>
        <?php if($this->session->flashdata("error")): ?>
        <div class="alert alert-danger border-0 alert-dismissible">
  			<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
 		<?php echo $this->session->flashdata("error"); ?>
 		</div>
  		<?php endif; ?>
