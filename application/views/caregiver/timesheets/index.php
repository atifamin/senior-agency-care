<?php
include(APPPATH."views/caregiver/inc/header.php");?>
	

	<!-- <div class="row">
		<div class="col-md-12">
			<li class="media">
				<div class="mr-3">
					<span>Today</span>
				</div>

				<div class="media-body" style="text-align: center;">
					<div class="media-title font-weight-semibold"><button type="button" class="btn btn-danger daterange-ranges"><i class="icon-calendar22 mr-2"></i><span></span></button></div>
				</div>

				<div class="align-self-center ml-3">
					<div class="list-icons list-icons-extended">
                    	<a href=""><i class="icon-pie-chart5 pull-right" style="margin-top: 10px;"></i></a>
                	</div>
				</div>
			</li>
		</div>
	</div> -->
	<div class="row border" style="padding-top: 5px;">
		<div class="col-md-1" style="text-align: center;">
		<p style="margin-top: 10px;">Today</p>
		</div>
		<div class="col-md-10" style="text-align: center;">
			<p>Select Dates <button type="button" class="btn btn-danger daterange-ranges"><i class="icon-calendar22 mr-2"></i><span></span></button></p>
		</div>
		<div class="col-md-1" style="text-align: center;">
			<a href=""><i class="icon-pie-chart5" style="margin-top: 10px;"></i></a>
		</div>
	</div>
	<div class="row" style="margin-top: 5px;">
		<div class="offset-md-2 col-md-3">
			<div class="card" style="padding: 12px;">
				<div class="row">
					<div class="col-md-8 text-center">
						<h2>$5345</h2>
						<p>Total December Earning</p>
					</div>
					<div class="col-md-2 text-center">
						<i class="icon-coins icon-2x" style="color: #339ef4; margin: 20px 0 0 25px;"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="offset-md-1 col-md-3">
			<div class="card" style="padding: 12px;">
				<div class="row">
					<div class="col-md-8 text-center">
						<h2>$1250</h2>
						<p>Weekly Average Earning</p>
					</div>
					<div class="col-md-2 text-center">
						<i class="icon-cash4 icon-2x" style="color: #339ef4; margin: 20px 0 0 25px;"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="row" style="margin-top: 40px;">
			<div class="col-md-4 offset-md-4" style="text-align: center;">
				<div class="form-group">
					<label style="font-size: 15px; font-weight: 500;">Week ending</label>
					<button style="background-color: #ffffff;" type="button" class="btn btn-light daterange-predefined">
						<i class="icon-calendar22 mr-2"></i>
						<span></span>
					</button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table" id="timesheet_table">
					<thead>
						<tr>
							<th>Client</th>
							<th>Worked Hours</th>
							<th>Hourly Wage</th>
							<th>Overtime Hrs</th>
							<th>Holiday Pay Hrs</th>
							<th>Total Weekly Pay</th>
							<th>View Timesheet</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><span><strong style="font-weight: 400;">Maxewell M</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">40</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">25</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">0</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">0</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">500</strong></span>
							</td>
							<td class="text-center">
								<div class="align-self-center ml-3">
                                    <a href="#" class="text-default" data-toggle="collapse"
                                        data-target="#james1"><i class="icon-menu7"></i>
                                    </a>
                                </div>
							</td>
						</tr>
						<tr>
							<td colspan="7" style="padding: 0;">

								<div class="collapse" id="james1">
									<div class="row">
										<div class="col-md-12 text-center" style="background-color:#f9f6f6;">
											<h4> Time Sheets</h4>
										</div>
									</div>
									<div class="table-responsive" style="padding: 10px;">
							<table style="background-color: #fff;" class="table table-bordered">
								<thead>
									<tr style="background-color: #f9f6f6;">
										<th style="text-align: center;">Day</th>
										<th style="text-align: center;">Dates</th>
										<th style="text-align: center;">Time On</th>
										<th style="text-align: center;">Time Off</th>
										<th style="text-align: center;">No of Hours Worked</th>
										<th style="text-align: center;">Rate</th>
										<th style="text-align: center;">Holiday/Overtime Pay</th>
										<th style="text-align: center;">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td colspan="6">
										</td>
										<td>Total</td>
										<td>$4,444</td>
									</tr>
								</tbody>
							</table>
							<div style="float: right; margin-top: 10px;">
								<button type="button" class="btn btn-default"><i class="icon-file-check mr-2"></i>Download</button>
								<button type="button" class="btn btn-default"><i class="icon-file-check mr-2"></i>Email</button>
								<button type="button" class="btn btn-default"><i class="icon-printer mr-2"></i>Print</button>
							</div>
							</div>
							</div>
							</td>
						</tr>
						<tr>
							<td><span><strong style="font-weight: 400;">Maxewell M</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">40</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">25</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">0</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">0</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">500</strong></span>
							</td>
							<td class="text-center">
								<div class="align-self-center ml-3">
                                    <a href="#" class="text-default" data-toggle="collapse"
                                        data-target="#james2"><i class="icon-menu7"></i>
                                    </a>
                                </div>
							</td>
						</tr>
						<tr>
							<td colspan="7" style="padding: 0;">

								<div class="collapse" id="james2">
									<div class="row">
										<div class="col-md-12 text-center" style="background-color:#f9f6f6;">
											<h4> Time Sheets</h4>
										</div>
									</div>
									<div class="table-responsive" style="padding: 10px;">
							<table style="background-color: #fff;" class="table table-bordered">
								<thead>
									<tr style="background-color: #f9f6f6;">
										<th style="text-align: center;">Day</th>
										<th style="text-align: center;">Dates</th>
										<th style="text-align: center;">Time On</th>
										<th style="text-align: center;">Time Off</th>
										<th style="text-align: center;">No of Hours Worked</th>
										<th style="text-align: center;">Rate</th>
										<th style="text-align: center;">Holiday/Overtime Pay</th>
										<th style="text-align: center;">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td colspan="6">
										</td>
										<td>Total</td>
										<td>$4,444</td>
									</tr>
								</tbody>
							</table>
							<div style="float: right; margin-top: 10px;">
								<button type="button" class="btn btn-default"><i class="icon-file-check mr-2"></i>Download</button>
								<button type="button" class="btn btn-default"><i class="icon-file-check mr-2"></i>Email</button>
								<button type="button" class="btn btn-default"><i class="icon-printer mr-2"></i>Print</button>
							</div>
							</div>
							</div>
							</td>
						</tr>
						<tr>
							<td><span><strong style="font-weight: 400;">Maxewell M</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">40</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">25</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">0</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">0</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">500</strong></span>
							</td>
							<td class="text-center">
								<div class="align-self-center ml-3">
                                    <a href="#" class="text-default" data-toggle="collapse"
                                        data-target="#james3"><i class="icon-menu7"></i>
                                    </a>
                                </div>
							</td>
						</tr>
						<tr>
							<td colspan="7" style="padding: 0;">

								<div class="collapse" id="james3">
									<div class="row">
										<div class="col-md-12 text-center" style="background-color:#f9f6f6;">
											<h4> Time Sheets</h4>
										</div>
									</div>
									<div class="table-responsive" style="padding: 10px;">
							<table style="background-color: #fff;" class="table table-bordered">
								<thead>
									<tr style="background-color: #f9f6f6;">
										<th style="text-align: center;">Day</th>
										<th style="text-align: center;">Dates</th>
										<th style="text-align: center;">Time On</th>
										<th style="text-align: center;">Time Off</th>
										<th style="text-align: center;">No of Hours Worked</th>
										<th style="text-align: center;">Rate</th>
										<th style="text-align: center;">Holiday/Overtime Pay</th>
										<th style="text-align: center;">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td colspan="6">
										</td>
										<td>Total</td>
										<td>$4,444</td>
									</tr>
								</tbody>
							</table>
							<div style="float: right; margin-top: 10px;">
								<button type="button" class="btn btn-default"><i class="icon-file-check mr-2"></i>Download</button>
								<button type="button" class="btn btn-default"><i class="icon-file-check mr-2"></i>Email</button>
								<button type="button" class="btn btn-default"><i class="icon-printer mr-2"></i>Print</button>
							</div>
							</div>
							</div>
							</td>
						</tr>
						<tr>
							<td><span><strong style="font-weight: 400;">Maxewell M</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">40</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">25</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">0</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">0</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">500</strong></span>
							</td>
							<td class="text-center">
								<div class="align-self-center ml-3">
                                    <a href="#" class="text-default" data-toggle="collapse"
                                        data-target="#james4"><i class="icon-menu7"></i>
                                    </a>
                                </div>
							</td>
						</tr>
						<tr>
							<td colspan="7" style="padding: 0;">

								<div class="collapse" id="james4">
									<div class="row">
										<div class="col-md-12 text-center" style="background-color:#f9f6f6;">
											<h4> Time Sheets</h4>
										</div>
									</div>
									<div class="table-responsive" style="padding: 10px;">
							<table style="background-color: #fff;" class="table table-bordered">
								<thead>
									<tr style="background-color: #f9f6f6;">
										<th style="text-align: center;">Day</th>
										<th style="text-align: center;">Dates</th>
										<th style="text-align: center;">Time On</th>
										<th style="text-align: center;">Time Off</th>
										<th style="text-align: center;">No of Hours Worked</th>
										<th style="text-align: center;">Rate</th>
										<th style="text-align: center;">Holiday/Overtime Pay</th>
										<th style="text-align: center;">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td colspan="6">
										</td>
										<td>Total</td>
										<td>$4,444</td>
									</tr>
								</tbody>
							</table>
							<div style="float: right; margin-top: 10px;">
								<button type="button" class="btn btn-default"><i class="icon-file-check mr-2"></i>Download</button>
								<button type="button" class="btn btn-default"><i class="icon-file-check mr-2"></i>Email</button>
								<button type="button" class="btn btn-default"><i class="icon-printer mr-2"></i>Print</button>
							</div>
							</div>
							</div>
							</td>
						</tr>
					</tbody>
				</table>
				</div>
				
				<div class="offset-md-9 col-md-3" style="padding: 20px;">
					<span class="pull-right">$2,500</span><p>Gross Weekly Total</p>
					<span class="pull-right">$320</span><p>Minus agency fess @15%</p>
					<span class="pull-right"><b>$2,180</b></span><p><b>Net Total</b></p>
				</div>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="row" style="margin-top: 40px;">
			<div class="col-md-4 offset-md-4" style="text-align: center;">
				<div class="form-group">
					<label style="font-size: 15px; font-weight: 500;">Week ending</label>
					<button style="background-color: #ffffff;" type="button" class="btn btn-light daterange-predefined">
						<i class="icon-calendar22 mr-2"></i>
						<span></span>
					</button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table" id="timesheet_table">
					<thead>
						<tr>
							<th>Client</th>
							<th>Worked Hours</th>
							<th>Hourly Wage</th>
							<th>Overtime Hrs</th>
							<th>Holiday Pay Hrs</th>
							<th>Total Weekly Pay</th>
							<th>View Timesheet</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><span><strong style="font-weight: 400;">Maxewell M</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">40</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">25</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">0</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">0</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">500</strong></span>
							</td>
							<td class="text-center">
								<div class="align-self-center ml-3">
                                    <a href="#" class="text-default" data-toggle="collapse"
                                        data-target="#james1"><i class="icon-menu7"></i>
                                    </a>
                                </div>
							</td>
						</tr>
						<tr>
							<td colspan="7" style="padding: 0;">

								<div class="collapse" id="james1">
									<div class="row">
										<div class="col-md-12 text-center" style="background-color:#f9f6f6;">
											<h4> Time Sheets</h4>
										</div>
									</div>
									<div class="table-responsive" style="padding: 10px;">
							<table style="background-color: #fff;" class="table table-bordered">
								<thead>
									<tr style="background-color: #f9f6f6;">
										<th style="text-align: center;">Day</th>
										<th style="text-align: center;">Dates</th>
										<th style="text-align: center;">Time On</th>
										<th style="text-align: center;">Time Off</th>
										<th style="text-align: center;">No of Hours Worked</th>
										<th style="text-align: center;">Rate</th>
										<th style="text-align: center;">Holiday/Overtime Pay</th>
										<th style="text-align: center;">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td colspan="6">
										</td>
										<td>Total</td>
										<td>$4,444</td>
									</tr>
								</tbody>
							</table>
							<div style="float: right; margin-top: 10px;">
								<button type="button" class="btn btn-default"><i class="icon-file-check mr-2"></i>Download</button>
								<button type="button" class="btn btn-default"><i class="icon-file-check mr-2"></i>Email</button>
								<button type="button" class="btn btn-default"><i class="icon-printer mr-2"></i>Print</button>
							</div>
							</div>
							</div>
							</td>
						</tr>
						<tr>
							<td><span><strong style="font-weight: 400;">Maxewell M</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">40</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">25</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">0</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">0</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">500</strong></span>
							</td>
							<td class="text-center">
								<div class="align-self-center ml-3">
                                    <a href="#" class="text-default" data-toggle="collapse"
                                        data-target="#james2"><i class="icon-menu7"></i>
                                    </a>
                                </div>
							</td>
						</tr>
						<tr>
							<td colspan="7" style="padding: 0;">

								<div class="collapse" id="james2">
									<div class="row">
										<div class="col-md-12 text-center" style="background-color:#f9f6f6;">
											<h4> Time Sheets</h4>
										</div>
									</div>
									<div class="table-responsive" style="padding: 10px;">
							<table style="background-color: #fff;" class="table table-bordered">
								<thead>
									<tr style="background-color: #f9f6f6;">
										<th style="text-align: center;">Day</th>
										<th style="text-align: center;">Dates</th>
										<th style="text-align: center;">Time On</th>
										<th style="text-align: center;">Time Off</th>
										<th style="text-align: center;">No of Hours Worked</th>
										<th style="text-align: center;">Rate</th>
										<th style="text-align: center;">Holiday/Overtime Pay</th>
										<th style="text-align: center;">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td colspan="6">
										</td>
										<td>Total</td>
										<td>$4,444</td>
									</tr>
								</tbody>
							</table>
							<div style="float: right; margin-top: 10px;">
								<button type="button" class="btn btn-default"><i class="icon-file-check mr-2"></i>Download</button>
								<button type="button" class="btn btn-default"><i class="icon-file-check mr-2"></i>Email</button>
								<button type="button" class="btn btn-default"><i class="icon-printer mr-2"></i>Print</button>
							</div>
							</div>
							</div>
							</td>
						</tr>
						<tr>
							<td><span><strong style="font-weight: 400;">Maxewell M</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">40</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">25</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">0</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">0</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">500</strong></span>
							</td>
							<td class="text-center">
								<div class="align-self-center ml-3">
                                    <a href="#" class="text-default" data-toggle="collapse"
                                        data-target="#james3"><i class="icon-menu7"></i>
                                    </a>
                                </div>
							</td>
						</tr>
						<tr>
							<td colspan="7" style="padding: 0;">

								<div class="collapse" id="james3">
									<div class="row">
										<div class="col-md-12 text-center" style="background-color:#f9f6f6;">
											<h4> Time Sheets</h4>
										</div>
									</div>
									<div class="table-responsive" style="padding: 10px;">
							<table style="background-color: #fff;" class="table table-bordered">
								<thead>
									<tr style="background-color: #f9f6f6;">
										<th style="text-align: center;">Day</th>
										<th style="text-align: center;">Dates</th>
										<th style="text-align: center;">Time On</th>
										<th style="text-align: center;">Time Off</th>
										<th style="text-align: center;">No of Hours Worked</th>
										<th style="text-align: center;">Rate</th>
										<th style="text-align: center;">Holiday/Overtime Pay</th>
										<th style="text-align: center;">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td colspan="6">
										</td>
										<td>Total</td>
										<td>$4,444</td>
									</tr>
								</tbody>
							</table>
							<div style="float: right; margin-top: 10px;">
								<button type="button" class="btn btn-default"><i class="icon-file-check mr-2"></i>Download</button>
								<button type="button" class="btn btn-default"><i class="icon-file-check mr-2"></i>Email</button>
								<button type="button" class="btn btn-default"><i class="icon-printer mr-2"></i>Print</button>
							</div>
							</div>
							</div>
							</td>
						</tr>
						<tr>
							<td><span><strong style="font-weight: 400;">Maxewell M</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">40</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">25</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">0</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">0</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">500</strong></span>
							</td>
							<td class="text-center">
								<div class="align-self-center ml-3">
                                    <a href="#" class="text-default" data-toggle="collapse"
                                        data-target="#james4"><i class="icon-menu7"></i>
                                    </a>
                                </div>
							</td>
						</tr>
						<tr>
							<td colspan="7" style="padding: 0;">

								<div class="collapse" id="james4">
									<div class="row">
										<div class="col-md-12 text-center" style="background-color:#f9f6f6;">
											<h4> Time Sheets</h4>
										</div>
									</div>
									<div class="table-responsive" style="padding: 10px;">
							<table style="background-color: #fff;" class="table table-bordered">
								<thead>
									<tr style="background-color: #f9f6f6;">
										<th style="text-align: center;">Day</th>
										<th style="text-align: center;">Dates</th>
										<th style="text-align: center;">Time On</th>
										<th style="text-align: center;">Time Off</th>
										<th style="text-align: center;">No of Hours Worked</th>
										<th style="text-align: center;">Rate</th>
										<th style="text-align: center;">Holiday/Overtime Pay</th>
										<th style="text-align: center;">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td colspan="6">
										</td>
										<td>Total</td>
										<td>$4,444</td>
									</tr>
								</tbody>
							</table>
							<div style="float: right; margin-top: 10px;">
								<button type="button" class="btn btn-default"><i class="icon-file-check mr-2"></i>Download</button>
								<button type="button" class="btn btn-default"><i class="icon-file-check mr-2"></i>Email</button>
								<button type="button" class="btn btn-default"><i class="icon-printer mr-2"></i>Print</button>
							</div>
							</div>
							</div>
							</td>
						</tr>
					</tbody>
				</table>
				</div>
				
				<div class="offset-md-9 col-md-3" style="padding: 20px;">
					<span class="pull-right">$2,500</span><p>Gross Weekly Total</p>
					<span class="pull-right">$320</span><p>Minus agency fess @15%</p>
					<span class="pull-right"><b>$2,180</b></span><p><b>Net Total</b></p>
				</div>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="row" style="margin-top: 40px;">
			<div class="col-md-4 offset-md-4" style="text-align: center;">
				<div class="form-group">
					<label style="font-size: 15px; font-weight: 500;">Week ending</label>
					<button style="background-color: #ffffff;" type="button" class="btn btn-light daterange-predefined">
						<i class="icon-calendar22 mr-2"></i>
						<span></span>
					</button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table" id="timesheet_table">
					<thead>
						<tr>
							<th>Client</th>
							<th>Worked Hours</th>
							<th>Hourly Wage</th>
							<th>Overtime Hrs</th>
							<th>Holiday Pay Hrs</th>
							<th>Total Weekly Pay</th>
							<th>View Timesheet</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><span><strong style="font-weight: 400;">Maxewell M</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">40</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">25</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">0</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">0</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">500</strong></span>
							</td>
							<td class="text-center">
								<div class="align-self-center ml-3">
                                    <a href="#" class="text-default" data-toggle="collapse"
                                        data-target="#james1"><i class="icon-menu7"></i>
                                    </a>
                                </div>
							</td>
						</tr>
						<tr>
							<td colspan="7" style="padding: 0;">

								<div class="collapse" id="james1">
									<div class="row">
										<div class="col-md-12 text-center" style="background-color:#f9f6f6;">
											<h4> Time Sheets</h4>
										</div>
									</div>
									<div class="table-responsive" style="padding: 10px;">
							<table style="background-color: #fff;" class="table table-bordered">
								<thead>
									<tr style="background-color: #f9f6f6;">
										<th style="text-align: center;">Day</th>
										<th style="text-align: center;">Dates</th>
										<th style="text-align: center;">Time On</th>
										<th style="text-align: center;">Time Off</th>
										<th style="text-align: center;">No of Hours Worked</th>
										<th style="text-align: center;">Rate</th>
										<th style="text-align: center;">Holiday/Overtime Pay</th>
										<th style="text-align: center;">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td colspan="6">
										</td>
										<td>Total</td>
										<td>$4,444</td>
									</tr>
								</tbody>
							</table>
							<div style="float: right; margin-top: 10px;">
								<button type="button" class="btn btn-default"><i class="icon-file-check mr-2"></i>Download</button>
								<button type="button" class="btn btn-default"><i class="icon-file-check mr-2"></i>Email</button>
								<button type="button" class="btn btn-default"><i class="icon-printer mr-2"></i>Print</button>
							</div>
							</div>
							</div>
							</td>
						</tr>
						<tr>
							<td><span><strong style="font-weight: 400;">Maxewell M</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">40</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">25</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">0</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">0</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">500</strong></span>
							</td>
							<td class="text-center">
								<div class="align-self-center ml-3">
                                    <a href="#" class="text-default" data-toggle="collapse"
                                        data-target="#james2"><i class="icon-menu7"></i>
                                    </a>
                                </div>
							</td>
						</tr>
						<tr>
							<td colspan="7" style="padding: 0;">

								<div class="collapse" id="james2">
									<div class="row">
										<div class="col-md-12 text-center" style="background-color:#f9f6f6;">
											<h4> Time Sheets</h4>
										</div>
									</div>
									<div class="table-responsive" style="padding: 10px;">
							<table style="background-color: #fff;" class="table table-bordered">
								<thead>
									<tr style="background-color: #f9f6f6;">
										<th style="text-align: center;">Day</th>
										<th style="text-align: center;">Dates</th>
										<th style="text-align: center;">Time On</th>
										<th style="text-align: center;">Time Off</th>
										<th style="text-align: center;">No of Hours Worked</th>
										<th style="text-align: center;">Rate</th>
										<th style="text-align: center;">Holiday/Overtime Pay</th>
										<th style="text-align: center;">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td colspan="6">
										</td>
										<td>Total</td>
										<td>$4,444</td>
									</tr>
								</tbody>
							</table>
							<div style="float: right; margin-top: 10px;">
								<button type="button" class="btn btn-default"><i class="icon-file-check mr-2"></i>Download</button>
								<button type="button" class="btn btn-default"><i class="icon-file-check mr-2"></i>Email</button>
								<button type="button" class="btn btn-default"><i class="icon-printer mr-2"></i>Print</button>
							</div>
							</div>
							</div>
							</td>
						</tr>
						<tr>
							<td><span><strong style="font-weight: 400;">Maxewell M</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">40</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">25</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">0</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">0</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">500</strong></span>
							</td>
							<td class="text-center">
								<div class="align-self-center ml-3">
                                    <a href="#" class="text-default" data-toggle="collapse"
                                        data-target="#james3"><i class="icon-menu7"></i>
                                    </a>
                                </div>
							</td>
						</tr>
						<tr>
							<td colspan="7" style="padding: 0;">

								<div class="collapse" id="james3">
									<div class="row">
										<div class="col-md-12 text-center" style="background-color:#f9f6f6;">
											<h4> Time Sheets</h4>
										</div>
									</div>
									<div class="table-responsive" style="padding: 10px;">
							<table style="background-color: #fff;" class="table table-bordered">
								<thead>
									<tr style="background-color: #f9f6f6;">
										<th style="text-align: center;">Day</th>
										<th style="text-align: center;">Dates</th>
										<th style="text-align: center;">Time On</th>
										<th style="text-align: center;">Time Off</th>
										<th style="text-align: center;">No of Hours Worked</th>
										<th style="text-align: center;">Rate</th>
										<th style="text-align: center;">Holiday/Overtime Pay</th>
										<th style="text-align: center;">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td colspan="6">
										</td>
										<td>Total</td>
										<td>$4,444</td>
									</tr>
								</tbody>
							</table>
							<div style="float: right; margin-top: 10px;">
								<button type="button" class="btn btn-default"><i class="icon-file-check mr-2"></i>Download</button>
								<button type="button" class="btn btn-default"><i class="icon-file-check mr-2"></i>Email</button>
								<button type="button" class="btn btn-default"><i class="icon-printer mr-2"></i>Print</button>
							</div>
							</div>
							</div>
							</td>
						</tr>
						<tr>
							<td><span><strong style="font-weight: 400;">Maxewell M</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">40</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">25</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">0</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">0</strong></span>
							</td>
							<td><span><strong style="font-weight: 400;">500</strong></span>
							</td>
							<td class="text-center">
								<div class="align-self-center ml-3">
                                    <a href="#" class="text-default" data-toggle="collapse"
                                        data-target="#james4"><i class="icon-menu7"></i>
                                    </a>
                                </div>
							</td>
						</tr>
						<tr>
							<td colspan="7" style="padding: 0;">

								<div class="collapse" id="james4">
									<div class="row">
										<div class="col-md-12 text-center" style="background-color:#f9f6f6;">
											<h4> Time Sheets</h4>
										</div>
									</div>
									<div class="table-responsive" style="padding: 10px;">
							<table style="background-color: #fff;" class="table table-bordered">
								<thead>
									<tr style="background-color: #f9f6f6;">
										<th style="text-align: center;">Day</th>
										<th style="text-align: center;">Dates</th>
										<th style="text-align: center;">Time On</th>
										<th style="text-align: center;">Time Off</th>
										<th style="text-align: center;">No of Hours Worked</th>
										<th style="text-align: center;">Rate</th>
										<th style="text-align: center;">Holiday/Overtime Pay</th>
										<th style="text-align: center;">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td style="background-color: #f9f6f6; text-align: center;">Monday</td>
										<td style="padding: 4px; width: 110px;">
											<div class="input-group">
												<a href="javascript:;" class="form-control" data-toggle="modal" data-target="#time_sheet" style="border: none; text-align: center;">2/25/2019 <i style="margin-left: 10px; position:relative; font-size: 14px;" class="icon-arrow-down5"></i></a>
											</div>
										</td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px; text-align: center;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="padding: 4px; width: 110px;"><div class="input-group">
											<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
											<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
										</div></td>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">26</td>
										<td style="text-align: center;">0</td>
										<td style="text-align: center;">$234</td>
									</tr>
									<tr>
										<td colspan="6">
										</td>
										<td>Total</td>
										<td>$4,444</td>
									</tr>
								</tbody>
							</table>
							<div style="float: right; margin-top: 10px;">
								<button type="button" class="btn btn-default"><i class="icon-file-check mr-2"></i>Download</button>
								<button type="button" class="btn btn-default"><i class="icon-file-check mr-2"></i>Email</button>
								<button type="button" class="btn btn-default"><i class="icon-printer mr-2"></i>Print</button>
							</div>
							</div>
							</div>
							</td>
						</tr>
					</tbody>
				</table>
				</div>
				
				<div class="offset-md-9 col-md-3" style="padding: 20px;">
					<span class="pull-right">$2,500</span><p>Gross Weekly Total</p>
					<span class="pull-right">$320</span><p>Minus agency fess @15%</p>
					<span class="pull-right"><b>$2,180</b></span><p><b>Net Total</b></p>
				</div>
			</div>
		</div>
	</div>

<!-- ================Time Sheets Modal============-->

<div id="time_sheet" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="margin: 0 auto;">Request an edit your time sheet from your manager</h5>
                <div>
                    <li class="media">
                        <div class="mr-3" style="margin-right: .55rem!important;">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>assets/images/userimg/face22.jpg"
                                     class="rounded-circle" width="40" height="40" alt="">
                            </a>
                        </div>

                        <div class="media-body">
                            <div class="media-title font-weight-semibold"
                                 style="font-size: 12px; margin-bottom: 0px !important;">Bastin Miller
                            </div>
                            <span class="text-muted" style="font-size: 12px;">Total Care</span>
                        </div>
                    </li>
                </div>
            </div>
            <form id="add_time_sheet">
                <div class="modal-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-7 offset-md-1">
                                <div class="input-group">
									<span class="input-group-prepend">
										<span class="input-group-text"><i class="icon-calendar22"></i> <b> &nbsp;&nbsp;Shift date</b></span>
									</span>
								</div>
								<input type="text" class="form-control daterange-single" value="03/18/2013">
                            </div>
                        </div>
                        <div class="row" style="padding-top: 20px;">
                        	<div class="col-md-3 offset-md-1">
                        		<label><b>Shift times</b> </label><br>
                        	</div>
                        </div>
                        <div class="row">
                        	<div class="col-md-2 offset-md-1">
                           		<div class="form-group">
                                    <span
                                        class="input-group-text"><i class="icon-alarm"></i>&nbsp;&nbsp;Caregiver clock in</span>
                                        <input type="text" class="form-control pickatime" placeholder="select time">
                                </div>
                            </div>
                            <div class="col-md-2 offset-md-1">
                           		<div class="form-group">
                                    <span
                                        class="input-group-text"><i class="icon-alarm"></i>&nbsp;&nbsp;Caregiver clock out</span>
                                        <input type="text" class="form-control pickatime" placeholder="select time">
                                </div>
                            </div>
                            <div class="col-md-6">
		                    	<li class="media" style="position: relative;top: 10px; width: 75%;margin: 0 auto;">
									<div class="mr-3">
										<span>@ Regular rate $29/Hr</span>
									</div>
									<div class="media-body" style="text-align: center;">
										<span>=</span>
									</div>
									<div class="align-self-center ml-3">
										<span>$120</span>
									</div>
								</li>
		                    </div>
                        </div>

                        <div class="row" style="margin-top: 15px;">
		                	<div class="col-md-4 offset-md-1">
		                		<p>&nbsp;&nbsp;<b>Overtime hours worked</b></p>
		                   		<div class="input-group">
									<span class="input-group-prepend">
										<span class="input-group-text"><i class="icon-alarm">&nbsp;</i></span>
									</span>
									<input type="text" value="" class="form-control touchspin-empty">
								</div>
		                    </div>
		                    <div class="col-md-7">
		                    	<li class="media" style="position: relative;top: 35px; width: 80%;margin: 0 auto;">
									<div class="mr-3">
										<span>@Rate29/Hr</span>
									</div>

									<div class="media-body" style="text-align: center;">
										<span>=</span>
									</div>

									<div class="align-self-center ml-3">
										<span>$1600</span>
									</div>
								</li>
		                    </div>
		                </div>
		                <div class="row" style="margin-top: 40px;">
		                	<div class="col-md-4 offset-md-1">
		                		<p>&nbsp;&nbsp;<b>Holiday hours worked</b></p>
		                   		<div class="input-group">
									<span class="input-group-prepend">
										<span class="input-group-text"><i class="icon-alarm">&nbsp;</i></span>
									</span>
									<input type="text" value="" class="form-control touchspin-empty">
								</div>
		                    </div>
		                    <div class="col-md-7">
		                    	<li class="media" style="position: relative;top: 35px; width: 80%;margin: 0 auto;">
									<div class="mr-3">
										<span>@Rate29/Hr</span>
									</div>

									<div class="media-body" style="text-align: center;">
										<span>=</span>
									</div>

									<div class="align-self-center ml-3">
										<span>$1600</span>
									</div>
								</li>
		                    </div>
		                </div>
		                <div class="row" style="margin-top: 15px;">
		                	<div class="col-md-6">
		                    </div>
		                    <div class="col-md-6">
		                    	<li class="media" style="position: relative;width: 78%;margin: 30px auto;">
									<div class="mr-3">
										<span><b>Total</b></span>
									</div>

									<div class="media-body" style="text-align: center;">
										<span><b>=</b></span>
									</div>

									<div class="align-self-center ml-3">
										<span><b>$4500</b></span>
									</div>
								</li>
		                    </div>
		                </div>
                    </form>   
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in"
                            data-spinner-size="20"><span class="ladda-label">Done</span></button>
                </div>
            </form>
        </div>
    </div>
</div>

	<script src="<?php echo base_url(); ?>assets/js/demo_pages/datatables_basic.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/forms/styling/switch.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_checkboxes_radios.js"></script>

	<script src="<?php echo base_url(); ?>assets/js/demo_pages/datatables_responsive.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/ui/moment/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/pickers/daterangepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/anytime.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.date.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.time.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_input_groups.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/forms/inputs/touchspin.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/legacy.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/notifications/jgrowl.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo_pages/picker_date.js"></script>



<?php include(APPPATH."views/caregiver/inc/footer.php");?>