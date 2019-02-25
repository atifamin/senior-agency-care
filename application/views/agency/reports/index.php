<?php include(APPPATH."views/agency/inc/header.php");?>

<div class="row">
	<div class="col-md-12">
		<h6>Reports</h6>
	</div>
</div>


<!-- Colored tabs -->
<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs nav-tabs-solid bg-teal-400 border-0">
			<li class="nav-item"><a href="#revenue_reports" class="nav-link active" data-toggle="tab">Revenue Reports</a></li>
			<li class="nav-item"><a href="#transactions" class="nav-link" data-toggle="tab">Transactions</a></li>
		</ul>

		<div class="tab-content">
			<div class="tab-pane fade show active" id="revenue_reports">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<button type="button" class="btn btn-light daterange-predefined">
								<i class="icon-calendar22 mr-2"></i>
								<span></span>
							</button>
							<span style="margin-left: 10px;">Select Date</span>

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<!-- Single line chart -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Revenue Report</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="chart-container">
									<div class="chart" id="dimple-line-horizontal-single"></div>
								</div>
							</div>
						</div>
						<!-- /single line chart -->
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<!-- Multiple line chart -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Invoices Recieved vs Processed Payroll</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="chart-container">
									<div class="chart" id="dimple-line-horizontal-multiple"></div>
								</div>
							</div>
						</div>
						<!-- /multiple line chart -->
					</div>
				</div>
			</div>

			<div class="tab-pane fade" id="transactions">
				<div class="card">
					<div class="card-header bg-transparent header-elements-inline">
						<h6 class="card-title">Transactions</h6>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                	</div>
	                	</div>
					</div>

					<table class="table table-lg invoice-archive">
						<thead>
							<tr>
								<th>#</th>
								<th>Period</th>
				                <th>Issued to</th>
				                <th>Status</th>
				                <th>Issue date</th>
				                <th>Due date</th>
				                <th>Amount</th>
				                <th class="text-center">Actions</th>
				            </tr>
						</thead>
						<tbody>
							<tr>
								<td>#0025</td>
								<td>February 2015</td>
				                <td>
				                	<h6 class="mb-0">
				                		<a href="#">Rebecca Manes</a>
				                		<span class="d-block font-size-sm text-muted">Payment method: Skrill</span>
			                		</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold" selected>On hold</option>
				                		<option value="pending">Pending</option>
				                		<option value="paid">Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	April 18, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-success">Paid on Mar 16, 2015</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$17,890 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $4,890</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice_modal"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0024</td>
								<td>February 2015</td>
				                <td>
				                	<h6 class="mb-0">
				                		<a href="#">James Alexander</a>
				                		<span class="d-block font-size-sm text-muted">Payment method: Wire transfer</span>
			                		</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending">Pending</option>
				                		<option value="paid" selected>Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	April 17, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-warning">5 days</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$2,769 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $2,839</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice_modal"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0023</td>
								<td>February 2015</td>
				                <td>
				                	<h6 class="mb-0">
				                		<a href="#">Jeremy Victorino</a>
				                		<span class="d-block font-size-sm text-muted">Payment method: Payoneer</span>
			                		</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending">Pending</option>
				                		<option value="paid" selected>Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	April 17, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-primary">27 days</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$1,500 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $1,984</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice_modal"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0022</td>
								<td>January 2015</td>
				                <td>
				                	<h6 class="mb-0">
				                		<a href="#">Margo Baker</a>
				                		<span class="d-block font-size-sm text-muted">Payment method: Paypal</span>
			                		</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending">Pending</option>
				                		<option value="paid">Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel" selected>Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	January 15, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-primary">12 days</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$4,580 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $992</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice_modal"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0021</td>
								<td>January 2015</td>
				                <td>
				                	<h6 class="mb-0">
				                		<a href="#">Beatrix Diaz</a>
				                		<span class="d-block font-size-sm text-muted">Payment method: Paypal</span>
			                		</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue" selected>Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending">Pending</option>
				                		<option value="paid">Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	January 10, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-danger">- 3 days</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$7,990 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $1,294</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice_modal"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0020</td>
								<td>January 2015</td>
				                <td>
				                	<h6 class="mb-0">
				                		<a href="#">Richard Vango</a>
				                		<span class="d-block font-size-sm text-muted">Payment method: Wire transfer</span>
			                		</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending">Pending</option>
				                		<option value="paid">Paid</option>
				                		<option value="invalid" selected>Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	January 10, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-secondary">On hold</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$12,120 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $3,278</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice_modal"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0019</td>
								<td>January 2015</td>
				                <td>
				                	<h6 class="mb-0">
				                		<a href="#">Will Baker</a>
				                		<span class="d-block font-size-sm text-muted">Payment method: Paypal</span>
			                		</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold" selected>On hold</option>
				                		<option value="pending">Pending</option>
				                		<option value="paid">Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	December 26, 2014
			                	</td>
				                <td>
				                	<span class="badge badge-success">Paid on Feb 25, 2015</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$5,390 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $2,880</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice_modal"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0018</td>
								<td>January 2015</td>
				                <td>
				                	<h6 class="mb-0">
				                		<a href="#">Joseph Mills</a>
				                		<span class="d-block font-size-sm text-muted">Payment method: Skrill</span>
			                		</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending" selected>Pending</option>
				                		<option value="paid">Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	June 17, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-secondary">On hold</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$10,280 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $2,190</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice_modal"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>
				        </tbody>
		            </table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /colored tabs -->





<!-- Modal with invoice -->
<div id="invoice_modal" class="modal fade">
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
			                <th>Hours Worked</th>
			                <th>Holiday/Overtime</th>
			                <th>Hourly Rate</th>
			                <th>Total</th>
			            </tr>
			        </thead>
			        <tbody>
			            <tr>
			                <td>Carl Swan</td>
			                <td>80</td>
			                <td>0</td>
			                <td>30</td>
			                <td>$3,990</td>
			            </tr>
			            <tr>
			                <td>Carl Swan</td>
			                <td>80</td>
			                <td>0</td>
			                <td>30</td>
			                <td>$3,990</td>
			            </tr>
			            <tr>
			                <td>Carl Swan</td>
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
							<button type="button" class="btn btn-primary btn-labeled btn-labeled-left"><b><i class="icon-paperplane"></i></b> Send invoice</button>
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



<script src="<?php echo base_url(); ?>assets/js/plugins/ui/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/daterangepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/anytime.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.date.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.time.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/legacy.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/notifications/jgrowl.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/picker_date.js"></script>

<!-- ========Line Chart Script======== -->
<script src="<?php echo base_url(); ?>assets/js/plugins/visualization/d3/d3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/visualization/dimple/dimple.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/charts/dimple/lines/line_horizontal_single.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/charts/dimple/lines/line_horizontal_multiple.js"></script>
<!-- ========Line Chart Script======== -->

<script src="<?php echo base_url(); ?>assets/js/plugins/tables/datatables/datatables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/invoice_archive.js"></script>
<?php include(APPPATH."views/agency/inc/footer.php");?>