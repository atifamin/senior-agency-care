<?php
include(APPPATH."views/agency/inc/header.php");?>
<style type="text/css">
	.datatable-footer{
		display: none;
	}

	.sorting_disabled{
		width: 150px !important;
	}
</style>
<div class="row">
	<div class="col-md-12">
		<div class="card"> 
			<div class="row" style="padding: 2%;">
				<div class="col-md-3 offset-md-4">
					<div class="input-group">
						<span class="input-group-prepend">
						<span class="input-group-text"><i class="icon-calendar22"></i></span>
						</span>
						<input type="text" class="form-control daterange-basic" value="01/01/2015 - 01/31/2015">
					</div>
				</div>
				<div class="col-md-3" style="margin-top: 20px">
					<h6 style="font-size: 14px; color: #4caf50; float: left;">Approved<span style="margin-left: 6px;" class="badge badge-success badge-pill">65</span></h6>
						<h6 style="font-size: 14px; color: #ff7043; float: right;">Pending<span style="margin-left:6px;" class="badge badge-warning badge-pill">65</span></h6>
				</div>
			</div>
			<!-- <div class="row" style="padding-left: 59%; padding-right: 12%;">
				<div class="col-md-4 offset-md-4" style="margin-top: 9px;">
					<h6 style="font-size: 12px; color: #4caf50;">Added<span style="margin-left: 6px;" class="badge badge-success badge-pill">65</span></h6>
				</div>
				<div class="col-md-4" style="margin-top: 9px;">
					<h6 style="font-size: 12px; color: #ff7043;">Pending<span style="margin-left: 6px;" class="badge badge-warning badge-pill">65</span></h6>
				</div>
			</div> -->
			<table class="table datatable-basic">
				<thead>
					<tr>
						<th colspan="3" style="width: 50%;">Name</th>
						<th>Total Weekly Pay</th>
						<th>Assigned Caregivers</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php if (count($clients) > 0) {
						foreach ($clients as $client_data) { ?>
							<tr>
						<td><span><strong style="font-weight: 400;"><?php echo $client_data->first_name." ".$client_data->last_name; ?></strong></span>
						</td>
						<td></span>
						</td>
						<td><span><strong style="font-weight: 400;"></strong></span>
						</td>
						<td><span><strong style="font-weight: 400;">500</strong></span>
						</td>
						<td><span><strong style="font-weight: 400;">
							<?php if (count($client_data->caregivers)) {
								foreach ($client_data->caregivers as $caregiver_data) { ?>
								<a href="#">
									<img src="<?php echo caregiver_image($caregiver_data->id); ?>" class="rounded-circle" width="40" height="40" alt="">
								</a>
							<?php	}
							} ?>
							</strong></span>
						</td>
						<td class="text-center">
							<div class="list-icons">
								<div class="dropdown">
									<a href="#" class="list-icons-item" data-toggle="dropdown" aria-expanded="false">
										<i class="icon-menu9"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-167px, 18px, 0px);">
										<a href="#" class="dropdown-item"><i class="icon-square-right"></i> Edit Time Sheets</a>
										<a href="#" class="dropdown-item"><i class="icon-bin2"></i> Delete Time Sheets</a>
										<a href="#" class="dropdown-item"><i class="icon-square-down"></i> End Time Sheets</a>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<?php 	//}
					//} ?>
					
				</tbody>
			</table>
			<?php if (count($client_data->caregivers)) {
					foreach ($client_data->caregivers as $caregiver_data) { ?>
			<li style="list-style: none; margin-top: 20px;">
				<div style="list-style: none; background-color: #eee"class="media">
					<div class="align-self-center ml-3">
						<a href="#" class="text-default" data-toggle="collapse" data-target="#row_<?php echo $caregiver_data->id; ?>" aria-expanded="true"><i class="icon-menu7"></i> <strong> Assigned Caregiver </strong>
						</a>
					</div>
					<div class="media-body" style="padding-left: 34px; padding-bottom: 10px; padding-top: 10px;">
						<div class="media-title font-weight-semibold">
							<a href="#">
								<img src="<?php echo caregiver_image($caregiver_data->id); ?>" class="rounded-circle" width="40" height="40" alt="">
							</a> <?php echo $caregiver_data->first_name." ".$caregiver_data->last_name; ?>
						</div>
					</div>
				</div>
			</li>
			<div class="row">
				<div class="col-md-12">
					<table class="table datatable-basic">
						<thead>
							<tr>
								<th>Name</th>
								<th>Worked Hours</th>
								<th>Hourly Wage</th>
								<th>Overtime Hrs</th>
								<th>Holiday Pay Hrs</th>
								<th>Total Weekly Pay</th>
								<th style="text-align: right;">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><span><strong style="font-weight: 400;">Roland R</strong></span>
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
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown" aria-expanded="false">
												<i class="icon-menu9" style="padding-left: 180px"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-167px, 18px, 0px);">
												<a href="#" class="dropdown-item"><i class="icon-square-right"></i> Edit Time Sheets</a>
												<a href="#" class="dropdown-item"><i class="icon-bin2"></i> Delete Time Sheets</a>
												<a href="#" class="dropdown-item"><i class="icon-square-down"></i> End Time Sheets</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="collapse show" id="row_<?php echo $caregiver_data->id; ?>" style="">
				<div class="table-responsive"  style="padding: 2%; ">
					<table style="background-color: #fff;" class="table table-bordered">
						<thead>
							<tr style="background-color: #eee;">
								<th style="text-align: center;">Day</th>
								<th style="text-align: center;" style="text-align: center;">Dates</th>
								<th style="text-align: center;">Time On</th>
								<th style="text-align: center;">Time Off</th>
								<th style="text-align: center;">Regular hours</th>
								<th style="text-align: center;">Regular rate</th>
								<th style="text-align: center;">Holiday/Overtime</th>
								<th style="text-align: center;">Holiday/Overtime Pay</th>
								<th style="text-align: center;">Total</th>
							</tr>
						</thead>
						<tbody>

							<tr>
								<td style="background-color: #eee; text-align: center;">Monday</td>
								<td style="padding: 4px; width: 110px; text-align: center;">2/25/2019</td>

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
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">234</td>
							</tr>

							<tr>
								<td style="background-color: #eee; text-align: center;">Tuesday</td>
								<td style="padding: 4px; width: 110px; text-align: center;">2/25/2019</td>

								<td style="padding: 4px; width: 110px;"><div class="input-group">
									<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
									<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
								</div></td>
								<td style="padding: 4px; width: 110px;"><div class="input-group">
									<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
									<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
								</div></td>
								<td style="text-align: center;">6</td>
								<td style="text-align: center;">26</td>
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">234</td>
							</tr>
							<tr>
								<td style="background-color: #eee; text-align: center;">Wednesday</td>
								<td style="padding: 4px; width: 110px; text-align: center;">2/25/2019</td>

								<td style="padding: 4px; width: 110px;"><div class="input-group">
									<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
									<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
								</div></td>
								<td style="padding: 4px; width: 110px;"><div class="input-group">
									<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
									<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
								</div></td>
								<td style="text-align: center;">6</td>
								<td style="text-align: center;">26</td>
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">234</td>
							</tr>
							
							<tr>
								<td style="background-color: #eee; text-align: center;">Thursday</td>
								<td style="padding: 4px; width: 110px; text-align: center;">2/25/2019</td>

								<td style="padding: 4px; width: 110px;"><div class="input-group">
									<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
									<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
								</div></td>
								<td style="padding: 4px; width: 110px;"><div class="input-group">
									<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
									<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
								</div></td>
								<td style="text-align: center;">6</td>
								<td style="text-align: center;">26</td>
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">234</td>
							</tr>

							<tr>
								<td style="background-color: #eee; text-align: center;">Friday</td>
								<td style="padding: 4px; width: 110px; text-align: center;">2/25/2019</td>

								<td style="padding: 4px; width: 110px;"><div class="input-group">
									<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
									<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
								</div></td>
								<td style="padding: 4px; width: 110px;"><div class="input-group">
									<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
									<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
								</div></td>
								<td style="text-align: center;">6</td>
								<td style="text-align: center;">26</td>
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">234</td>
							</tr>

							<tr>
								<td style="background-color: #eee; text-align: center;">Saturday</td>
								<td style="padding: 4px; width: 110px; text-align: center;">2/25/2019</td>

								<td style="padding: 4px; width: 110px;"><div class="input-group">
									<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
									<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
								</div></td>
								<td style="padding: 4px; width: 110px;"><div class="input-group">
									<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
									<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
								</div></td>
								<td style="text-align: center;">6</td>
								<td style="text-align: center;">26</td>
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">234</td>
							</tr>

							<tr>
								<td style="background-color: #eee; text-align: center;">Sunday</td>
								<td style="padding: 4px; width: 110px; text-align: center;">2/25/2019</td>

								<td style="padding: 4px; width: 110px;"><div class="input-group">
									<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
									<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
								</div></td>
								<td style="padding: 4px; width: 110px;"><div class="input-group">
									<input type="text" class="form-control pickatime" style=" border: none; text-align: center;" value="<?php echo date('h:i a'); ?>">
									<i style="position: relative; top: 13px; font-size: 14px;" class="icon-arrow-down5"></i>
								</div></td>
								<td style="text-align: center;">6</td>
								<td style="text-align: center;">26</td>
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">234</td>
							</tr>
							<tr>
								<td colspan="7">
									<div class="form-check">
										<label class="form-check-label">
											<input type="checkbox" class="form-check-input-styled" data-fouc>
											I certified that the information provided is truthfull and accuarte
										</label>
									</div>
								</td>
								<td>Total</td>
								<td>$4,444</td>
							</tr>
						</tbody>
					</table>
					<div style="float: right; margin-top: 10px;"><button type="button" class="btn btn-primary legitRipple" style="background-color: #8ceaff; border-color: #31c6ff; color: #0829a2;">Save Timesheet</button>
					</div>
				</div>
			</div>
			<?php } } ?>
			
			<?php 	}
					} ?>

			<!-- <li style="list-style: none; margin-top: 20px;">
				<div style="list-style: none; background-color: #eee"class="media">
					<div class="align-self-center ml-3">
						<a href="#" class="text-default" data-toggle="collapse" data-target="#james2" aria-expanded="true"><i class="icon-menu7"></i> <strong> Assigned Caregiver </strong>
						</a>
					</div>
					<div class="media-body" style="padding-left: 34px; padding-bottom: 10px; padding-top: 10px;">
						<div class="media-title font-weight-semibold">
							<a href="#">
								<img src="<?php echo base_url(); ?>assets/images/userimg/face3.jpg" class="rounded-circle" width="40" height="40" alt="">
							</a>Jordan Sparks
						</div>
					</div>
				</div>
			</li>
			<div class="row">
				<div class="col-md-12">
					<table class="table datatable-basic">
						<thead>
							<tr>
								<th>Name</th>
								<th>Worked Hours</th>
								<th>Hourly Wage</th>
								<th>Overtime Hrs</th>
								<th>Holiday Pay Hrs</th>
								<th>Total Weekly Pay</th>
								<th style="width: 8%; text-align: right;">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><span><strong style="font-weight: 400;">Roland R</strong></span>
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
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown" aria-expanded="false">
												<i class="icon-menu9" style="padding-left: 180px"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-167px, 18px, 0px);">
												<a href="#" class="dropdown-item"><i class="icon-square-right"></i> Edit Time Sheets</a>
												<a href="#" class="dropdown-item"><i class="icon-bin2"></i> Delete Time Sheets</a>
												<a href="#" class="dropdown-item"><i class="icon-square-down"></i> End Time Sheets</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="collapse show" id="james2" style="">
				<div class="table-responsive"  style="padding: 2%; ">
					<table style="background-color: #fff;" class="table table-bordered">
						<thead>
							<tr style="background-color: #eee;">
								<th style="text-align: center;">Day</th>
								<th style="text-align: center;" style="text-align: center;">Dates</th>
								<th style="text-align: center;">Time On</th>
								<th style="text-align: center;">Time Off</th>
								<th style="text-align: center;">Regular hours</th>
								<th style="text-align: center;">Regular rate</th>
								<th style="text-align: center;">Holiday/Overtime</th>
								<th style="text-align: center;">Holiday/Overtime Pay</th>
								<th style="text-align: center;">Total</th>
							</tr>
						</thead>
						<tbody>

							<tr>
								<td style="background-color: #eee;">Monday</td>
								<td style="padding: 4px; width: 110px; text-align: center;">2/25/2019</td>

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
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">234</td>
							</tr>
							<tr>
								<td style="background-color: #eee; text-align: center;">Monday</td>
								<td style="padding: 4px; width: 110px; text-align: center;">2/25/2019</td>

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
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">234</td>
							</tr>
							<tr>
								<td style="background-color: #eee; text-align: center;">Tuesday</td>
								<td style="padding: 4px; width: 110px; text-align: center;">2/25/2019</td>

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
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">234</td>
							</tr>
							<tr>
								<td style="background-color: #eee; text-align: center;">Wednesday</td>
								<td style="padding: 4px; width: 110px; text-align: center;">2/25/2019</td>

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
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">234</td>
							</tr>
							<tr>
								<td style="background-color: #eee; text-align: center;">Thursday</td>
								<td style="padding: 4px; width: 110px; text-align: center;">2/25/2019</td>

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
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">234</td>
							</tr>
							<tr>
								<td style="background-color: #eee; text-align: center;">Friday</td>
								<td style="padding: 4px; width: 110px; text-align: center;">2/25/2019</td>

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
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">234</td>
							</tr>
							<tr>
								<td style="background-color: #eee; text-align: center;">Saturday</td>
								<td style="padding: 4px; width: 110px; text-align: center;">2/25/2019</td>

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
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">234</td>
							</tr>
							<tr>
								<td style="background-color: #eee; text-align: center;">Sunday</td>
								<td style="padding: 4px; width: 110px; text-align: center;">2/25/2019</td>

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
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">234</td>
							</tr>

							<tr>
								<td colspan="7">
									<div class="form-check">
										<label class="form-check-label">
											<input type="checkbox" class="form-check-input-styled" data-fouc>
											I certified that the information provided is truthfull and accuarte
										</label>
									</div>
								</td>
								<td>Total</td>
								<td>$4,444</td>
							</tr>
						</tbody>
					</table>
					<div style="float: right; margin-top: 10px;"><button type="button" class="btn btn-primary legitRipple" style="background-color: #8ceaff; border-color: #31c6ff; color: #0829a2;">Save Timesheet</button>
					</div>
				</div>
			</div>
			<li style="list-style: none; margin-top: 20px;">
				<div style="list-style: none; background-color: #eee"class="media">
					<div class="align-self-center ml-3">
						<a href="#" class="text-default" data-toggle="collapse" data-target="#james3" aria-expanded="true"><i class="icon-menu7"></i> <strong> Assigned Caregiver </strong>
						</a>
					</div>
					<div class="media-body" style="padding-left: 34px; padding-bottom: 10px; padding-top: 10px;">
						<div class="media-title font-weight-semibold">
							<a href="#">
								<img src="<?php echo base_url(); ?>assets/images/userimg/face4.jpg" class="rounded-circle" width="40" height="40" alt="">
							</a>Collin Powell
						</div>
					</div>
				</div>
			</li>
			<div class="row">
				<div class="col-md-12">
					<table class="table datatable-basic">
						<thead>
							<tr>
								<th>Name</th>
								<th>Worked Hours</th>
								<th>Hourly Wage</th>
								<th>Overtime Hrs</th>
								<th>Holiday Pay Hrs</th>
								<th>Total Weekly Pay</th>
								<th style="width: 8%; text-align: right;">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><span><strong style="font-weight: 400;">Roland R</strong></span>
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
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown" aria-expanded="false">
												<i class="icon-menu9" style="padding-left: 180px"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-167px, 18px, 0px);">
												<a href="#" class="dropdown-item"><i class="icon-square-right"></i> Edit Time Sheets</a>
												<a href="#" class="dropdown-item"><i class="icon-bin2"></i> Delete Time Sheets</a>
												<a href="#" class="dropdown-item"><i class="icon-square-down"></i> End Time Sheets</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="collapse show" id="james3" style="">
				<div class="table-responsive"  style="padding: 2%; ">
					<table style="background-color: #fff;" class="table table-bordered">
						<thead>
							<tr style="background-color: #eee;">
								<th style="text-align: center;">Day</th>
								<th style="text-align: center;" style="text-align: center;">Dates</th>
								<th style="text-align: center;">Time On</th>
								<th style="text-align: center;">Time Off</th>
								<th style="text-align: center;">Regular hours</th>
								<th style="text-align: center;">Regular rate</th>
								<th style="text-align: center;">Holiday/Overtime</th>
								<th style="text-align: center;">Holiday/Overtime Pay</th>
								<th style="text-align: center;">Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="background-color: #eee; text-align: center;">Monday</td>
								<td style="padding: 4px; width: 110px; text-align: center;">2/25/2019</td>

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
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">234</td>
							</tr>
							<tr>
								<td style="background-color: #eee; text-align: center;">Tuesday</td>
								<td style="padding: 4px; width: 110px; text-align: center;">2/25/2019</td>

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
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">234</td>
							</tr>
							<tr>
								<td style="background-color: #eee; text-align: center;">Wednesday</td>
								<td style="padding: 4px; width: 110px; text-align: center;">2/25/2019</td>

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
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">234</td>
							</tr>
							<tr>
								<td style="background-color: #eee; text-align: center;">Thursday</td>
								<td style="padding: 4px; width: 110px; text-align: center;">2/25/2019</td>

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
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">234</td>
							</tr>
							<tr>
								<td style="background-color: #eee; text-align: center;">Friday</td>
								<td style="padding: 4px; width: 110px; text-align: center;">2/25/2019</td>

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
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">234</td>
							</tr>
							<tr>
								<td style="background-color: #eee; text-align: center;">Saturday</td>
								<td style="padding: 4px; width: 110px; text-align: center;">2/25/2019</td>

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
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">234</td>
							</tr>
							<tr>
								<td style="background-color: #eee; text-align: center;">Sunday</td>
								<td style="padding: 4px; width: 110px; text-align: center;">2/25/2019</td>

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
								<td style="text-align: center;">0</td>
								<td style="text-align: center;">234</td>
							</tr>
							<tr>
								<td colspan="6">
									<div class="form-check">
										<label class="form-check-label">
											<input type="checkbox" class="form-check-input-styled" data-fouc>
											I certified that the information provided is truthfull and accuarte
										</label>
									</div>
								</td>
								<td>Total</td>
								<td>$ 4,444</td>
							</tr>
						</tbody>
					</table>
					<div style="float: right; margin-top: 10px;"><button type="button" class="btn btn-primary legitRipple" style="background-color: #8ceaff; border-color: #31c6ff; color: #0829a2;">Save Timesheet</button>
					</div>
				</div>
			</div> -->
			<h5 style="text-align: center;padding:20px; background-color: #80808014;">Time Sheets Total</h5>
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
				<a href="<?php echo site_url("agency/time_sheets/invoice"); ?>" class="btn btn-primary btn-labeled btn-labeled-left legitRipple" style="float: right;margin-bottom: 10px; margin-right: 17px;"><b><i class="icon-paperplane"></i></b>Create Invoice</a>
			</div>
		</div>
	</div>
</div>


	<script src="<?php echo base_url(); ?>assets/js/demo_pages/datatables_basic.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo_pages/datatables_responsive.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/forms/styling/switch.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_checkboxes_radios.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/ui/moment/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/daterangepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/anytime.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.date.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.time.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/legacy.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/notifications/jgrowl.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo_pages/picker_date.js"></script>


<?php
include(APPPATH."views/agency/inc/footer.php");?>
