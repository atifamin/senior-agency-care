<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Senior Care Agency - Register</title>

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
<script src="<?php echo base_url(); ?>assets/js/main/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/loaders/blockui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/ui/ripple.min.js"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/styling/uniform.min.js"></script>
<script src="<?php echo base_url(); ?>assets/assets/js/app.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/login.js"></script>
<!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->

<!-- /main navbar --> 

<!-- Page content -->
<div class="page-content"> 
  
  <!-- Main content -->
  <div class="content-wrapper"> 
    
    <!-- Content area -->
    <div class="content d-flex justify-content-center align-items-center" style="background-image:url(<?php echo base_url("assets/images/backgrounds/background.jpg"); ?>)"> 
      
      <!-- Registration form -->
      <form action="<?php echo site_url("caregiver/auth/register"); ?>" class="flex-fill" method="POST">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="card mb-0">
              <div class="card-body">
                <div class="text-center mb-3"> <i class="icon-plus3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3 mt-1"></i>
                  <h5 class="mb-0">Create account</h5>
                  <span class="d-block text-muted">All fields are required</span> </div>
                
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group form-group-feedback form-group-feedback-right">
                      <input type="text" class="form-control" placeholder="First name" value="<?php echo $caregiver->first_name; ?>">
                      <div class="form-control-feedback"> <i class="icon-user-check text-muted"></i> </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group form-group-feedback form-group-feedback-right">
                      <input type="text" class="form-control" placeholder="Second name" value="<?php echo $caregiver->last_name; ?>">
                      <div class="form-control-feedback"> <i class="icon-user-check text-muted"></i> </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group form-group-feedback form-group-feedback-right">
                      <input type="password" name="password" class="form-control" placeholder="Create password">
                      <div class="form-control-feedback"> <i class="icon-user-lock text-muted"></i> </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group form-group-feedback form-group-feedback-right">
                      <input type="password" class="form-control" placeholder="Repeat password">
                      <div class="form-control-feedback"> <i class="icon-user-lock text-muted"></i> </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group form-group-feedback form-group-feedback-right">
                      <input type="email" name="email" class="form-control" placeholder="Your email" value="<?php echo $caregiver->email; ?>">
                      <div class="form-control-feedback"> <i class="icon-mention text-muted"></i> </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-input-styled" checked data-fouc>
                      Accept <a href="#">terms of service</a> </label>
                  </div>
                </div>
                <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i class="icon-plus3"></i></b> Create account</button>
              </div>
            </div>
          </div>
        </div>
      </form>
      <!-- /registration form --> 
      
    </div>
    <!-- /content area --> 
    
    
  </div>
  <!-- /main content --> 
  
</div>
<!-- /page content -->

</body>
</html>
