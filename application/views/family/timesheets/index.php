<?php include(APPPATH."views/family/inc/header.php");?>
	
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
		<div class="col-md-2 offset-md-2 text-center">
			<button type="button" class="btn btn-light"><i class="icon-printer mr-2"></i>Print All</button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table" id="timesheet_table">
				<thead>
					<tr>
						<th>Caregiver</th>
						<th>Regular Hours</th>
						<th>Regular Rate</th>
						<th>Holiday/Overtime Hrs</th>
						<th>Holiday/Ovretime Rate</th>
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
									<th style="text-align: center;">Regular hours</th>
									<th style="text-align: center;">Regular rate</th>
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
									<th style="text-align: center;">Regular hours</th>
									<th style="text-align: center;">Regular rate</th>
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
									<th style="text-align: center;">Regular hours</th>
									<th style="text-align: center;">Regular rate</th>
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
			<h5 style="text-align: center;padding:20px; margin-top: 10px; background-color: #80808014;">Time Sheets Total</h5>
			<div class="row">
				<div class="col-md-5">
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
				</div>
			</div>	
			<div style="float: right; margin-top: 10px;">
				<a href="<?php echo site_url("family/time_sheet
				s/view_invoice"); ?>" class="btn btn-primary btn-labeled btn-labeled-left legitRipple" style="float: right;margin-bottom: 10px; margin-right: 17px;"><b><i class="icon-paperplane"></i></b>View Invoice</a>
			</div>
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
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/legacy.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/picker_date.js"></script>



<?php include(APPPATH."views/family/inc/footer.php");?>	