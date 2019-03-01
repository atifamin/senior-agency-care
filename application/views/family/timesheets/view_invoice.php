<?php include(APPPATH."views/family/inc/header.php");?>


<div class="row">
	<div class="col-md-12">
		<div class="card">
			<!-- ============Invoice Start================ -->
			<div class="card-body">
				<div class="row">
					<div class="col-md-4">
						<h5> Static Invoice </h5>
					</div>
					<div class="col-md-8" style="text-align: right;letter-spacing: 5px;">
						<button type="button" class="btn btn-light legitRipple" style="font-size:
						 9px;">View Timesheets</button>
						 <button type="button" class="btn btn-light legitRipple" style="font-size: 9px;"><i class="icon-file-empty mr-1"></i> Save</button>
						<button type="button" class="btn btn-light legitRipple" style="font-size: 10px;"><i class="icon-printer mr-1"></i> Print</button>
					</div>
				</div>
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
									<li>Due Date: <span class="font-weight-semibold">May 12, 2015</span></li>
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
			                <td>40</td>
			                <td>25</td>
			                <td>30</td>
			                <td>40</td>
			                <td>$3,990</td>
			            </tr>
			            <tr>
			                <td>Carl Swan</td>
			                <td>40</td>
			                <td>25</td>
			                <td>30</td>
			                <td>40</td>
			                <td>$3,990</td>
			            </tr>
			            <tr>
			                <td>Carl Swan</td>
			                <td>40</td>
			                <td>25</td>
			                <td>30</td>
			                <td>40</td>
			                <td>$3,990</td>
			            </tr>
			        </tbody>
			    </table>
			</div>

			<div class="card-body">
				<div class="row" style="text-align: right;">
					<div class="col-md-8">
						<h6>Total Due:</h6>
					</div>
				</div>
				<div class="d-md-flex flex-md-wrap">
					<div class="pt-2 mb-3 wmin-md-400 ml-auto">
						<div class="table-responsive">
							<table class="table">
								<tbody>
									<tr>
										<th>Subtotal:</th>
										<td class="text-right">$7,000</td>
									</tr>
									<tr>
										<th>Tax: (25%)</th>
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
<!-- ============Invoice End================ -->
		</div>
	</div>
</div>

<?php include(APPPATH."views/family/inc/footer.php");?>