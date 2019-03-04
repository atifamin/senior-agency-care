<?php include(APPPATH."views/family/inc/header.php");?>


<!-- <div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-4">
								<h6><span style="margin-right: 7px;"><i class="icon-arrow-left52"></i></span>Invoices</h6>
							</div>
							<div class="col-md-8" style="text-align: center;">
								Set Invoicing periods to:<button style="margin-left: 10px;" type="button" class="btn btn-light legitRipple">Weekly <i style="margin-left: 5px;" class="icon-arrow-down22"></i></button>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="row">
							<div class="col-md-12">
								<div class="alert alert-warning alert-dismissible" style="padding: 5px !important;">You have not linked your bank account. You need to link your bank account to recieve and send funds<br><a href="#" class="alert-link">Link your bank account here!</a>
							    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->

<div class="row">
	<div class="col-md-12">
		<div class="alert alert-warning alert-dismissible" style="padding: 5px !important;">You have not linked your bank account. You need to link your bank account to recieve and send funds.<a style="margin-left: 10px;" href="javascript:;" data-toggle="modal" data-target="#bank_account_modal" class="alert-link">Link your bank account here!</a>
	    </div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body" style="text-align: center;">
				<strong>Set Invoicing periods to:</strong><button style="margin-left: 10px;" type="button" class="btn btn-light legitRipple" data-toggle="modal" data-target="#invoicing_period_modal">Weekly <i style="margin-left: 5px;" class="icon-arrow-down22"></i></button>
			</div>
		</div>
	</div>
</div>
<div class="row">
<div class="col-md-12">
<!-- Inner container -->
<div class="d-flex align-items-start flex-column flex-md-row">

	<!-- Left content -->
	<div class="w-100 order-2 order-md-1">

		<!-- Filter toolbar -->
		<div class="navbar navbar-expand-lg navbar-light navbar-component rounded">
			<div class="text-center d-lg-none w-100">
				<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-filter">
					<i class="icon-unfold mr-2"></i>
					Filters
				</button>
			</div>

			<div class="navbar-collapse collapse" id="navbar-filter">
				<span class="navbar-text mr-3">
					Filter:
				</span>

				<ul class="navbar-nav flex-wrap">
					<li class="nav-item dropdown">
						<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
							<i class="icon-sort-time-asc mr-2"></i>
							By date
						</a>

						<div class="dropdown-menu">
							<a href="#" class="dropdown-item">Show all</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">Today</a>
							<a href="#" class="dropdown-item">Yesterday</a>
							<a href="#" class="dropdown-item">This week</a>
							<a href="#" class="dropdown-item">This month</a>
							<a href="#" class="dropdown-item">This year</a>
						</div>
					</li>

					<li class="nav-item dropdown">
						<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
							<i class="icon-sort-amount-desc mr-2"></i>
							By status
						</a>

						<div class="dropdown-menu">
							<a href="#" class="dropdown-item">Show all</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">Open</a>
							<a href="#" class="dropdown-item">On hold</a>
							<a href="#" class="dropdown-item">Resolved</a>
							<a href="#" class="dropdown-item">Closed</a>
							<a href="#" class="dropdown-item">Duplicate</a>
							<a href="#" class="dropdown-item">Invalid</a>
							<a href="#" class="dropdown-item">Wontfix</a>
						</div>
					</li>

					<li class="nav-item dropdown">
						<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
							<i class="icon-sort-numeric-asc mr-2"></i>
							By priority
						</a>

						<div class="dropdown-menu">
							<a href="#" class="dropdown-item">Show all</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">Highest</a>
							<a href="#" class="dropdown-item">High</a>
							<a href="#" class="dropdown-item">Normal</a>
							<a href="#" class="dropdown-item">Low</a>
						</div>
					</li>
				</ul>

				<span class="navbar-text mr-3 ml-lg-auto">
					Sorting:
				</span>

				<ul class="navbar-nav flex-wrap">
					<li class="nav-item">
						<a href="#" class="navbar-nav-link active">
							<i class="icon-sort-alpha-asc"></i>
							<span class="d-lg-none ml-2">Ascending</span>
						</a>
					</li>

					<li class="nav-item">
						<a href="#" class="navbar-nav-link">
							<i class="icon-sort-alpha-desc"></i>
							<span class="d-lg-none ml-2">Descending</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- /filter toolbar -->


		<!-- Invoice grid -->
		<div class="row">
			<div class="col-lg-6">
				<div class="card border-left-3 border-left-danger rounded-left-0">
					<div class="card-body">
						<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
							<div>
								<h6 class="font-weight-semibold">Leonardo Fellini</h6>
								<ul class="list list-unstyled mb-0">
									<li>Invoice #: <a href="#">0028</a></li>
									<li>Issued on: <span class="font-weight-semibold">2018/01/25</span></li>
								</ul>
							</div>

							<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
								<h6 class="font-weight-semibold">$8,750</h6>
								<ul class="list list-unstyled mb-0">
									<li>Method: <span class="font-weight-semibold">SWIFT</span></li>
									<li class="dropdown">
										Status: &nbsp;
										<a href="#" class="badge bg-danger-400 align-top dropdown-toggle" data-toggle="dropdown">Overdue</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item active"><i class="icon-alert"></i> Overdue</a>
											<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
											<a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
											<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
						<span>
							<span class="badge badge-mark border-danger mr-2"></span>
							Due:
							<span class="font-weight-semibold">2018/02/25</span>
						</span>

						<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
							<li class="list-inline-item">
								<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
							</li>
							<li class="list-inline-item dropdown">
								<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
									<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
									<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="card border-left-3 border-left-success rounded-left-0">
					<div class="card-body">
						<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
							<div>
								<h6 class="font-weight-semibold">Rebecca Manes</h6>
								<ul class="list list-unstyled mb-0">
									<li>Invoice #: <a href="#">0027</a></li>
									<li>Issued on: <span class="font-weight-semibold">2018/02/24</span></li>
								</ul>
							</div>

							<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
								<h6 class="font-weight-semibold">$5,100</h6>
								<ul class="list list-unstyled mb-0">
									<li>Method: <span class="font-weight-semibold">Paypal</span></li>
									<li class="dropdown">
										Status: &nbsp;
										<a href="#" class="badge bg-success-400 align-top dropdown-toggle" data-toggle="dropdown">Paid</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
											<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
											<a href="#" class="dropdown-item active"><i class="icon-checkmark3"></i> Paid</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
											<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
						<span>
							<span class="badge badge-mark border-success mr-2"></span>
							Due:
							<span class="font-weight-semibold">2018/03/24</span>
						</span>

						<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
							<li class="list-inline-item">
								<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
							</li>
							<li class="list-inline-item dropdown">
								<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
									<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
									<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-6">
				<div class="card border-left-3 border-left-blue rounded-left-0">
					<div class="card-body">
						<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
							<div>
								<h6 class="font-weight-semibold">James Alexander</h6>
								<ul class="list list-unstyled mb-0">
									<li>Invoice #: <a href="#">0026</a></li>
									<li>Issued on: <span class="font-weight-semibold">2018/02/23</span></li>
								</ul>
							</div>

							<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
								<h6 class="font-weight-semibold">$12,500</h6>
								<ul class="list list-unstyled mb-0">
									<li>Method: <span class="font-weight-semibold">SWIFT</span></li>
									<li class="dropdown">
										Status: &nbsp;
										<a href="#" class="badge bg-blue-400 align-top dropdown-toggle" data-toggle="dropdown">Pending</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
											<a href="#" class="dropdown-item active"><i class="icon-alarm"></i> Pending</a>
											<a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
											<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
						<span>
							<span class="badge badge-mark border-blue mr-2"></span>
							Due:
							<span class="font-weight-semibold">2018/03/23</span>
						</span>

						<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
							<li class="list-inline-item">
								<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
							</li>
							<li class="list-inline-item dropdown">
								<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
									<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
									<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="card border-left-3 border-left-grey rounded-left-0">
					<div class="card-body">
						<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
							<div>
								<h6 class="font-weight-semibold">Jeremy Victorino</h6>
								<ul class="list list-unstyled mb-0">
									<li>Invoice #: <a href="#">0025</a></li>
									<li>Issued on: <span class="font-weight-semibold">2018/02/22</span></li>
								</ul>
							</div>

							<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
								<h6 class="font-weight-semibold">$1,950</h6>
								<ul class="list list-unstyled mb-0">
									<li>Method: <span class="font-weight-semibold">Skrill</span></li>
									<li class="dropdown">
										Status: &nbsp;
										<a href="#" class="badge bg-grey-300 align-top dropdown-toggle" data-toggle="dropdown">On hold</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
											<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
											<a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item active"><i class="icon-spinner2 spinner"></i> On hold</a>
											<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
						<span>
							<span class="badge badge-mark border-grey mr-2"></span>
							Due:
							<span class="font-weight-semibold">2018/03/22</span>
						</span>

						<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
							<li class="list-inline-item">
								<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
							</li>
							<li class="list-inline-item dropdown">
								<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
									<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
									<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-6">
				<div class="card border-left-3 border-left-slate rounded-left-0">
					<div class="card-body">
						<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
							<div>
								<h6 class="font-weight-semibold">Margo Baker</h6>
								<ul class="list list-unstyled mb-0">
									<li>Invoice #: <a href="#">0024</a></li>
									<li>Issued on: <span class="font-weight-semibold">2018/02/21</span></li>
								</ul>
							</div>

							<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
								<h6 class="font-weight-semibold">$2,000</h6>
								<ul class="list list-unstyled mb-0">
									<li>Method: <span class="font-weight-semibold">Paypal</span></li>
									<li class="dropdown">
										Status: &nbsp;
										<a href="#" class="badge bg-slate-400 align-top dropdown-toggle" data-toggle="dropdown">Canceled</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
											<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
											<a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
											<a href="#" class="dropdown-item active"><i class="icon-cross2"></i> Canceled</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
						<span>
							<span class="badge badge-mark border-slate mr-2"></span>
							Due:
							<span class="font-weight-semibold">2018/03/21</span>
						</span>

						<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
							<li class="list-inline-item">
								<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
							</li>
							<li class="list-inline-item dropdown">
								<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
									<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
									<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="card border-left-3 border-left-danger rounded-left-0">
					<div class="card-body">
						<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
							<div>
								<h6 class="font-weight-semibold">Beatrix Diaz</h6>
								<ul class="list list-unstyled mb-0">
									<li>Invoice #: <a href="#">0023</a></li>
									<li>Issued on: <span class="font-weight-semibold">2018/02/20</span></li>
								</ul>
							</div>

							<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
								<h6 class="font-weight-semibold">$750</h6>
								<ul class="list list-unstyled mb-0">
									<li>Method: <span class="font-weight-semibold">Payoneer</span></li>
									<li class="dropdown">
										Status: &nbsp;
										<a href="#" class="badge bg-danger-400 align-top dropdown-toggle" data-toggle="dropdown">Overdue</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item active"><i class="icon-alert"></i> Overdue</a>
											<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
											<a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
											<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
						<span>
							<span class="badge badge-mark border-danger mr-2"></span>
							Due:
							<span class="font-weight-semibold">2018/03/20</span>
						</span>

						<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
							<li class="list-inline-item">
								<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
							</li>
							<li class="list-inline-item dropdown">
								<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
									<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
									<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
<!-- /invoice grid -->


<!-- Pagination -->
<div class="d-flex justify-content-center mt-3 mb-3">
	<ul class="pagination">
		<li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-small-right"></i></a></li>
		<li class="page-item active"><a href="#" class="page-link">1</a></li>
		<li class="page-item"><a href="#" class="page-link">2</a></li>
		<li class="page-item"><a href="#" class="page-link">3</a></li>
		<li class="page-item"><a href="#" class="page-link">4</a></li>
		<li class="page-item"><a href="#" class="page-link">5</a></li>
		<li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-small-left"></i></a></li>
	</ul>
</div>
<!-- /pagination -->

</div>
<!-- /left content -->


	<!-- Right sidebar component -->
	<div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right border-0 shadow-0 order-1 order-md-2 sidebar-expand-md">

		<!-- Sidebar content -->
		<div class="sidebar-content">

			<!-- Invoice actions -->
			<div class="card">
				<div class="card-header bg-transparent header-elements-inline">
					<span class="text-uppercase font-size-sm font-weight-semibold">Actions</span>
					<div class="header-elements">
						<div class="list-icons">
	                		<a class="list-icons-item" data-action="collapse"></a>
                		</div>
            		</div>
				</div>

				<div class="card-body">
					<div class="row">
						<div class="col">
							<!-- <button type="button" class="btn bg-purple-300 btn-block btn-float">
								<i class="icon-archive icon-2x"></i>
								<span>Archive</span>
							</button> -->
							<a href="<?php echo site_url("family/invoices/archive");?>" class="btn bg-purple-300 btn-block btn-float"><i class="icon-archive icon-2x"></i>
								<span>Archive</span></a>
						</div>
						
						<div class="col">
							<a href="<?php echo site_url("family/invoices/statistics"); ?>" class="btn bg-warning-400 btn-block btn-float"><i class="icon-stats-bars icon-2x"></i>
								<span>Statistics</span></a>
							<!-- <button type="button" class="btn bg-warning-400 btn-block btn-float">
								<i class="icon-stats-bars icon-2x"></i>
								<span>Statistics</span>
							</button> -->
						</div>
					</div>
				</div>
			</div>
			<!-- /invoice actions -->


			<!-- Latest updates -->
			<div class="card">
				<div class="card-header bg-transparent header-elements-inline">
					<span class="text-uppercase font-size-sm font-weight-semibold">Latest updates</span>
					<div class="header-elements">
						<div class="list-icons">
	                		<a class="list-icons-item" data-action="collapse"></a>
                		</div>
            		</div>
				</div>

				<div class="card-body">
					<ul class="media-list">
						<li class="media">
							<div class="mr-3">
								<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon">
									<i class="icon-checkmark3"></i>
								</a>
							</div>

							<div class="media-body">
								<a href="#">Richard Vango</a> paid invoice #0020
								<div class="text-muted font-size-sm">4 minutes ago</div>
							</div>
						</li>

						<li class="media">
							<div class="mr-3">
								<a href="#" class="btn bg-transparent border-slate text-slate rounded-round border-2 btn-icon">
									<i class="icon-infinite"></i>
								</a>
							</div>
							
							<div class="media-body">
								Status of invoice <a href="#">#0029</a> has been changed to "On hold"
								<div class="text-muted font-size-sm">36 minutes ago</div>
							</div>
						</li>

						<li class="media">
							<div class="mr-3">
								<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon">
									<i class="icon-checkmark3"></i>
								</a>
							</div>

							<div class="media-body">
								<a href="#">Chris Arney</a> paid invoice #0031 with Paypal
								<div class="text-muted font-size-sm">2 hours ago</div>
							</div>
						</li>

						<li class="media">
							<div class="mr-3">
								<a href="#" class="btn bg-transparent border-danger text-danger rounded-round border-2 btn-icon">
									<i class="icon-cross2"></i>
								</a>
							</div>
							
							<div class="media-body">
								Invoice <a href="#">#0041</a> has been canceled
								<div class="text-muted font-size-sm">Mar 18, 18:36</div>
							</div>
						</li>

						<li class="media">
							<div class="mr-3">
								<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon">
									<i class="icon-plus3"></i>
								</a>
							</div>
							
							<div class="media-body">
								New invoice #0029 has been sent to <a href="#">Beatrix Diaz</a>
								<div class="text-muted font-size-sm">Dec 12, 05:46</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<!-- /latest updates -->

		</div>
		<!-- /sidebar content -->

	</div>
	<!-- /right sidebar component -->

</div>
<!-- /inner container -->
</div>
</div>



<!-- Modal with invoice -->
<div id="invoice" class="modal fade">
	<div class="modal-dialog modal-full">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"></h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<div class="card-body">
				<div class="row">
					<div class="col-sm-6">
						<div class="mb-4">
							<img src="<?php echo base_url();?>assets/images/logo_demo.png" class="mb-3 mt-2" alt="" style="width: 120px;">
 							<ul class="list list-unstyled mb-0">
								<li>2269 Elba Lane</li>
								<li>Paris, France</li>
								<li>888-555-2311</li>
							</ul>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="mb-4">
							<div class="text-sm-right">
								<h4 class="text-primary mb-2 mt-md-2">Invoice #49029</h4>
								<ul class="list list-unstyled mb-0">
									<li>Date: <span class="font-weight-semibold">January 12, 2015</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="d-md-flex flex-md-wrap">
					<div class="mb-4 mb-md-2">
						<span class="text-muted">Invoice To:</span>
							<ul class="list list-unstyled mb-0">
							<li><h5 class="my-2">Rebecca Manes</h5></li>
							<li><span class="font-weight-semibold">Normand axis LTD</span></li>
							<li>3 Goodman Street</li>
							<li>London E1 8BF</li>
							<li>United Kingdom</li>
							<li>888-555-2311</li>
							<li><a href="#">rebecca@normandaxis.ltd</a></li>
						</ul>
					</div>

					<div class="mb-2 ml-auto">
						<span class="text-muted">Payment Details:</span>
						<div class="d-flex flex-wrap wmin-md-400">
							<ul class="list list-unstyled mb-0">
								<li style="margin-top: 10px;"><h5 class="my-2">Total Due:</h5></li>
								<li style="margin-top: 10px;">Bank name:</li>
								<li style="margin-top: 10px;">Country:</li>
								<li style="margin-top: 10px;"><strong>Paid on: January 20, 2019</strong></li>
							</ul>

							<ul class="list list-unstyled text-right mb-0 ml-auto">
								<li style="margin-top: 10px;"><h5 class="font-weight-semibold my-2">$8,750</h5></li>
								<li style="margin-top: 10px;"><span class="font-weight-semibold">Profit Bank Europe</span></li>
								<li style="margin-top: 10px;">United Kingdom</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="text-align: center;">
					<h6 style="padding: 15px; border: 1px solid #E8E7E3; background-color: #F9F8F7;">Week Ending: <span>Novemebr 01, 2018 - November 07, 2018</span></h6>
				</div>
			</div>
			<div class="table-responsive">
			    <table class="table table-lg">
			        <thead>
			            <tr>
			                <th>Caregiver</th>
			                <th>Regular Hours</th>
			                <th>Regular Rate</th>
			                <th>Holiday/Overtime Hrs</th>
			                <th>Holiday/Overtime Rate</th>
			                <th>Total</th>
			            </tr>
			        </thead>
			        <tbody>
			            <tr>
			                <td>Carl Swan</td>
			                <td>80</td>
			                <td>80</td>
			                <td>0</td>
			                <td>30</td>
			                <td>$3,990</td>
			            </tr>
			            <tr>
			                <td>Carl Swan</td>
			                <td>80</td>
			                <td>80</td>
			                <td>0</td>
			                <td>30</td>
			                <td>$3,990</td>
			            </tr>
			            <tr>
			                <td>Carl Swan</td>
			                <td>80</td>
			                <td>80</td>
			                <td>45*6</td>
			                <td>30</td>
			                <td>$3,990</td>
			            </tr>
			        </tbody>
			    </table>
			</div>

			<div class="card-body">
				<div class="d-md-flex flex-md-wrap">
					<!-- <div class="pt-2 mb-3">
						<h6 class="mb-3">Authorized person</h6>
						<div class="mb-3">
							<img src="<?php echo base_url();?>assets/images/signature.png" width="150" alt="">
						</div>

						<ul class="list-unstyled text-muted">
							<li>Eugene Kopyov</li>
							<li>2269 Elba Lane</li>
							<li>Paris, France</li>
							<li>888-555-2311</li>
						</ul>
					</div> -->

					<div class="pt-2 mb-3 wmin-md-400 ml-auto">
						<h6 class="mb-3">Total due</h6>
						<div class="table-responsive">
							<table class="table">
								<tbody>
									<tr>
										<th>Subtotal:</th>
										<td class="text-right">$7,000</td>
									</tr>
									<tr>
										<th>Tax: <span class="font-weight-normal">(25%)</span></th>
										<td class="text-right">$1,750</td>
									</tr>
									<tr>
										<th>Total:</th>
										<td class="text-right text-primary"><h5 class="font-weight-semibold">$8,750</h5></td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="text-right mt-3">
							<button type="button" class="btn btn-primary btn-labeled btn-labeled-left"><b><i class="icon-paperplane"></i></b> Pay Invoice Now</button>
						</div>
					</div>
				</div>
			</div>

			<div class="card-footer">
				<span class="text-muted">Thank you for using Maven Healthcare Solutions. This invoice can be paid directly via your bank account transfer, paypal or bank card. Once the payment has gone through it will be marked as paid and you will recieve a confirmation notice here on the app and one sent to you via email. For all fees associated with paying directly from your bank please click <span style="color: blue;">here</span> for more informaion. If you have any further questions regarding invoicing or billing please feel free to eamil us at <span style="color: blue">support@mavenhealthcare.com</span>.</span>
			</div>

			<div class="modal-footer bg-transparent">
				<button type="button" class="btn btn-light legitRipple">View Timesheet</button>
				<button type="button" class="btn btn-light legitRipple"><i style="margin-right: 8px;" class="icon-printer"></i>Print</button>
				<button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- /modal with invoice -->

<!-- ==========Add Invoicing Period Modal============= -->
<div id="invoicing_period_modal" class="modal fade" tabindex="-1">
  <div class="modal-dialog" style="margin-top: 280px;">
    <div class="modal-content" style="padding: 30px 0px;">
      <div class="modal-header">
        <h5 class="modal-title" style="margin: 0 auto;">Set Invoicing Periods Intervals</h5>
      </div>
      <form id="">
        <div class="row" style="padding: 0px 20px; margin-top: 20px;">
        	<div class="col-md-8 offset-md-2">
        		<div class="form-group">
					<select data-placeholder="Select Invoicing Period" class="form-control select" data-fouc>
						<option></option>
						<option value="week">Week</option>
						<option value="month">Monthly</option>
						<option value="bi-weekly">bi-weekly</option>
					</select>
				</div>
        	</div>
        </div>
        <div class="row">
        	<div class="col-md-12" style="text-align: center;  margin-top: 30px;">
        		<h5 class="modal-title">Select start date for invoicing period</h5>
        	</div>
        </div>
        <div class="row" style="padding: 0px 20px; margin-top: 20px;">
        	<div class="col-md-8 offset-md-2">
        		<div class="input-group">
					<span class="input-group-prepend">
						<span class="input-group-text"><i class="icon-calendar22"></i></span>
					</span>
					<input type="text" class="form-control daterange-single" value="">
				</div>
        	</div>
        </div>
        <div class="modal-footer" style="margin-top: 20px;">
          <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in" data-spinner-size="20"> <span class="ladda-label">Ok</span> </button>
          <button type="button" class="btn btn-light legitRipple" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- ==========//Add Invoicing Period Modal============= -->

<!-- ==========Add Bank Account Modal============= -->
<div id="bank_account_modal" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content" style="padding: 20px;">
      <div class="modal-header">
        <h5 class="modal-title" style="color: #ff8c00; margin: 0 auto;">Link your bank account for invoicing & payrol</h5>
      </div>
      <div class="row" style="margin-top: 30px;">
      	<div class="col-md-12">
      		<p>Link your bank account and begin recieving payments for your client's invoices directly to your bank account using ACH payments. Its quick, easy and safe. Stop writing payment checks one by one to all your caregivers and use one touch system for payroll processing.</p>
      		<p>Our safe and secure payment processing system is powered by <span style="font-weight: 500; color: #2196f3;">Stripe Payments</span>. Stripe is a trusted PCI complaint company that provised online and mobile payment solutions.</p>
      	</div>
      </div>
      <div class="row">
      	<div class="col-md-12" style="text-align: center;">
      		<h4>How to get started</h4>
      	</div>
      </div>
      <div class="row" style="margin-top: 30px;">
      	<div class="col-md-10 offset-md-1">
      		<li class="media">
				<div class="mr-3">
					<a href="#">
						<i style="font-size: 40px; color: #FA6630;" class="icon-library2"></i>
					</a>
				</div>

				<div class="media-body">
					<div class="media-title font-weight-semibold">Link your bank account</div>
					<span class="text-muted">Get started by verifying and linking your bank account to the secure Stripe Payments PCI complaint system</span>
				</div>
			</li>
			<li class="media">
				<div class="mr-3">
					<a href="#">
						<i style="font-size: 40px; color: #FA6630;" class="icon-users"></i>
					</a>
				</div>

				<div class="media-body">
					<div class="media-title font-weight-semibold">Send invoices to your client's & process your caregivers payroll</div>
					<span class="text-muted">Forget creating tedious invoices of your clients or writing checks to your caregivers and use our easy one touch system for Invoicing and Payroll</span>
				</div>
			</li>
			<li class="media">
				<div class="mr-3">
					<a href="#">
						<i style="font-size: 40px; color: #FA6630;" class="icon-coin-dollar"></i>
					</a>
				</div>

				<div class="media-body">
					<div class="media-title font-weight-semibold">Recieve & send funds  directly to your bank account</div>
					<span class="text-muted">Get funds deposited to your bank account directly from your clients. Automate payments to your clients</span>
				</div>
			</li>
      	</div>
      </div>
        <div class="modal-footer" style="margin-top: 20px;">
        	<div class="row" style="width: 100%;">
        		<div class="col-md-8" style="margin-top: 10px;">
          			<button type="submit" class="btn bg-primary" style="background-color: #ff8c00 !important; width: 100%; padding: 12px;"> Link your bank account</button>
          		</div>
        		<div class="col-md-4" style="margin-top: 10px;">
         			<button type="button" class="btn btn-light legitRipple" data-dismiss="modal" style="padding: 12px;">I'll do this later</button>
         		</div>
        	</div>
        </div>
    </div>
  </div>
</div>
<!-- ==========//Add Bank Account Modal============= -->
<script src="<?php echo base_url();?>assets/js/demo_pages/invoice_grid.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/ui/moment/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/pickers/daterangepicker.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/pickers/anytime.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/pickers/pickadate/picker.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/pickers/pickadate/picker.date.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/pickers/pickadate/picker.time.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/pickers/pickadate/legacy.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/notifications/jgrowl.min.js"></script>
<script src="<?php echo base_url();?>assets/js/demo_pages/picker_date.js"></script>
<?php include(APPPATH."views/family/inc/footer.php");?>