<!-- Main sidebar -->
		<div class="sidebar sidebar-light sidebar-main sidebar-expand-md" style="background-color:white;">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				<span class="font-weight-semibold">Navigation</span>
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user-material">
					<div class="sidebar-user-material-body">
						<div class="card-body text-center">
							<a href="#">
								<img src="<?php echo $profile_image; ?>" class="img-fluid rounded-circle shadow-1 mb-3" width="80" height="80" alt="">
							</a>
							<h6 class="mb-0 text-white text-shadow-dark"><?php echo $profile_detail->full_name; ?></h6>
							<span class="font-size-sm text-white text-shadow-dark" style="text-transform:uppercase;"><?php echo ucwords($profile_detail->position); ?></span>
						</div>
													
						<div class="sidebar-user-material-footer">
							<a href="#user-nav" class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle <?php if($urlSeg2=="profile" || $urlSeg2=="messaging"){echo 'collapsed';} ?>" data-toggle="collapse" <?php if($urlSeg2=="profile" || $urlSeg2=="messaging"){echo 'aria-expanded="true"';} ?>><span>My Account</span></a>
						</div>
					</div>

					<div class="collapse <?php if($urlSeg2=="profile" || $urlSeg2=="messaging"){echo 'show';} ?>" id="user-nav">
						<ul class="nav nav-sidebar">
							<li class="nav-item">
								<a href="<?php echo site_url("agency/profile"); ?>" class="nav-link <?php if($urlSeg2=="profile" && $urlSeg3==""){echo 'active';} ?>" >
									<i class="icon-user-plus"></i>
									<span>My profile</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="icon-coins"></i>
									<span>My balance</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo site_url("agency/messaging"); ?>" class="nav-link <?php if($urlSeg2=="messaging"){echo 'active';} ?>">
									<i class="icon-comment-discussion"></i>
									<span>Messages</span>
									<span class="badge bg-teal-400 badge-pill align-self-center ml-auto">58</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo site_url("agency/profile/wizard/".$this->agency_id.""); ?>" class="nav-link <?php if($urlSeg2=="profile" && $urlSeg3=="wizard"){echo 'active';} ?>">
									<i class="icon-cog5"></i>
									<span>Account settings</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo site_url("agency/auth/logout"); ?>" class="nav-link">
									<i class="icon-switch2"></i>
									<span>Logout</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs" align="center">Main Navigation</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="<?php echo site_url("agency/dashboard"); ?>" class="nav-link <?php if($urlSeg2=="dashboard"){echo 'active';} ?>">
								<i class="icon-home4"></i> <span>Notice Board</span>
							</a>
						</li>
                        <li class="nav-item">
							<a href="<?php echo site_url("agency/current_shifts"); ?>" class="nav-link <?php if($urlSeg2=="current_shifts"){echo 'active';} ?>">
								<i class="icon-copy"></i> <span>Current Shift</span>
							</a>
						</li>
						<li class="nav-item nav-item-submenu <?php if($urlSeg2=="caregiver"){echo 'nav-item-expanded nav-item-open';} ?>">
							<a href="#" class="nav-link <?php if($urlSeg2=="caregiver"){echo 'active';} ?>"><i class="icon-color-sampler"></i> <span>Caregivers</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="<?php echo site_url("agency/caregiver"); ?>" class="nav-link <?php if($urlSeg3==""){echo 'active';} ?>">View Caregivers</a></li>
								<li class="nav-item"><a href="<?php echo site_url("agency/caregiver/add_caregiver"); ?>" class="nav-link <?php if($urlSeg3=="add_caregiver"){echo 'active';} ?>">Add Caregivers</a></li>
								<li class="nav-item"><a href="<?php echo site_url("agency/caregiver/send_invite_to_caregiver"); ?>" class="nav-link <?php if($urlSeg3=="send_invite_to_caregiver"){echo 'active';} ?>">Invite Caregivers</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu <?php if($urlSeg2=="clients"){echo 'nav-item-expanded nav-item-open';} ?>">
							<a href="#" class="nav-link <?php if($urlSeg2=="clients"){echo 'active';} ?>"><i class="icon-color-sampler"></i> <span>Clients</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="<?php echo site_url("agency/clients"); ?>" class="nav-link <?php if($urlSeg3==""){echo 'active';} ?>">View Clients</a></li>
								<li class="nav-item"><a href="<?php echo site_url("agency/clients/add_client"); ?>" class="nav-link <?php if($urlSeg3=="add_client"){echo 'active';} ?>">Add Clients</a></li>
							</ul>
						</li>
                        <li class="nav-item">
							<a href="<?php echo site_url("agency/scheduling"); ?>" class="nav-link <?php if($urlSeg2=="scheduling"){echo 'active';} ?>">
								<i class="icon-stack"></i> <span>Scheduling</span>
							</a>
						</li>
                        <li class="nav-item">
							<a href="<?php echo site_url("agency/time_sheets"); ?>" class="nav-link <?php if($urlSeg2=="time_sheets"){echo 'active';} ?>">
								<i class="icon-list-unordered"></i> <span>Time Sheets</span>
							</a>
						</li>
                        <li class="nav-item">
							<a href="<?php echo site_url("agency/invoices"); ?>" class="nav-link <?php if($urlSeg2=="invoices"){echo 'active';} ?>">
								<i class="icon-width"></i> <span>Invoices</span>
							</a>
						</li>
                        <li class="nav-item">
							<a href="<?php echo site_url("agency/payroll"); ?>" class="nav-link <?php if($urlSeg2=="payroll"){echo 'active';} ?>">
								<i class="icon-copy"></i> <span>Payroll</span>
							</a>
						</li>
                        <li class="nav-item">
							<a href="<?php echo site_url("agency/messaging"); ?>" class="nav-link <?php if($urlSeg2=="messaging"){echo 'active';} ?>">
								<i class="icon-color-sampler"></i> <span>Massaging Centre</span>
							</a>
						</li>
                        <li class="nav-item">
							<a href="<?php echo site_url("agency/reports"); ?>" class="nav-link <?php if($urlSeg2=="reports"){echo 'active';} ?>">
								<i class="icon-stack"></i> <span>Incident Reports</span>
							</a>
						</li>
                        <li class="nav-item">
							<a href="javascript:;" class="nav-link <?php if($urlSeg2==""){echo 'active';} ?>">
								<i class="icon-list-unordered"></i> <span>Job Recruitment</span>
							</a>
						</li>

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->
	<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - <?php echo $heading; ?></h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<!-- <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
								<i class="icon-bars-alt text-pink-300"></i>
								<span>Statistics</span>
							</a> -->
							<a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
								<i class="icon-calculator text-pink-300"></i>
								<span>Invoices</span>
							</a>
							<a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
								<i class="icon-calendar5 text-pink-300"></i>
								<span>Schedule</span>
							</a>
						</div>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="<?php echo site_url("agency/dashboard"); ?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active"><?php echo $breadcrumb; ?></span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="breadcrumb justify-content-center">
							<a href="#" class="breadcrumb-elements-item">
								<i class="icon-comment-discussion mr-2"></i>
								Support
							</a>

							<div class="breadcrumb-elements-item dropdown p-0">
								<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear mr-2"></i>
									Settings
								</a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
									<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
									<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
								</div>
							</div>
						</div>
					</div>
				</div>
                
			</div>
            <div class="progress mb-3" style="height: 0.375rem;display:none">
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 72%">
									<span class="sr-only">72% Complete</span>
								</div>
							</div>
			<!-- /page header -->

			<div class="content">
				