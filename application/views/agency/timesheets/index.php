<?php
include(APPPATH."views/agency/inc/header.php");?>


<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="row" style="margin-top: 40px;">
				<div class="col-md-4 offset-md-4" style="text-align: center;">
					<div class="input-group">
						<span class="input-group-prepend">
							<span class="input-group-text"><h5 style="font-size: 15px; font-weight: 500;">Week ending</h5>
							</span>
						</span>
						<input type="text" class="form-control daterange-basic" value="03/18/2013 - 03/23/2013">
				    </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table datatable-basic">
						<thead>
							<tr>
								<th>Clients</th>
								<th>Billing Cycle</th>
								<th>Totsl Worked Hours</th>
								<th>Total Weekly Pay</th>
								<th>Assigned Caregiver</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php if (count($clients) > 0) {
								foreach ($clients as $client_detail) {  ?>
							<tr>
								<td><span><strong style="font-weight: 400;"><?php echo $client_detail->first_name." ".$client_detail->last_name; ?></strong></span>
								</td>
								<td><span><strong style="font-weight: 400;"><?php foreach (CON_CLIENT_BILLIBG_CYCLE as $key => $value) {
									if ($key == $client_detail->billing_cycle) {
										echo $value;
									} } ?></strong></span>
								</td>
								<td><span><strong style="font-weight: 400;">40</strong></span>
								</td>
								<td><span><strong style="font-weight: 400;">500</strong></span>
								</td>
								<td>
									<li class="media" style="list-style: none;">
										<div class="mr-3">
											<?php if (count($client_detail->caregivers) > 0) {
												foreach ($client_detail->caregivers as $caregiver) { ?>
												<a href="#">
												<img src="<?php echo caregiver_image($caregiver->id); ?>" class="rounded-circle" width="40" height="40" alt="">
											</a>
											<?php } } ?>
										</div>
									</li>
								</td>
								<td class="text-center">
									<div class="align-self-center ml-3">
										<div class="list-icons">
					                    	<div class="list-icons-item dropdown">
					                    		<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-menu9"></i></a>

					                    		<div class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-158px, -116px, 0px);">
							                    	<a href="<?php echo site_url("agency/time_sheets/view_timesheets/".$client_detail->id.""); ?>" class="dropdown-item"><i class="icon-menu7"></i>View Timesheets</a>
					                    		</div>
					                    	</div>
				                    	</div>
									</div>
								</td>
							</tr>		
							<?php }
								}  ?>
							
							<!-- <tr>
								<td><span><strong style="font-weight: 400;">Maxewell M</strong></span>
								</td>
								<td><span><strong style="font-weight: 400;">Monthly</strong></span>
								</td>
								<td><span><strong style="font-weight: 400;">40</strong></span>
								</td>
								<td><span><strong style="font-weight: 400;">500</strong></span>
								</td>
								<td>
									<li class="media" style="list-style: none;">
										<div class="mr-3">
											<a href="#">
												<img src="<?php echo base_url(); ?>assets/images/userimg/face17.jpg" class="rounded-circle" width="40" height="40" alt="">
											</a>
											<a href="#">
												<img src="<?php echo base_url(); ?>assets/images/userimg/face18.jpg" class="rounded-circle" width="40" height="40" alt="">
											</a>
										</div>
									</li>
								</td>
								<td class="text-center">
									<div class="align-self-center ml-3">
										<div class="list-icons">
					                    	<div class="list-icons-item dropdown">
					                    		<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-menu9"></i></a>

					                    		<div class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-158px, -116px, 0px);">
							                    	<a href="<?php echo site_url("agency/time_sheets/view_timesheets"); ?>" class="dropdown-item"><i class="icon-menu7"></i>View Timesheets</a>
					                    		</div>
					                    	</div>
				                    	</div>
									</div>
								</td>
							</tr> -->
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>



	<script src="<?php echo base_url(); ?>assets/js/demo_pages/datatables_basic.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo_pages/datatables_responsive.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/ui/moment/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/pickers/daterangepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/anytime.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.date.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.time.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/legacy.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/notifications/jgrowl.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo_pages/picker_date.js"></script>



<?php include(APPPATH."views/agency/inc/footer.php");?>