
<?php include(APPPATH."views/agency/inc/header.php");?>
<style type="text/css">
	.dataTables_length{
		display: none;
	}
	.datatable-scroll-wrap{
		min-height: 200px;
	}
</style>
<div class="row">
	<div class="col-md-12">
		<!-- Dropdown list -->
		<div class="card">
			<div class="card-header header-elements-inline" style="padding-bottom: 0px;">
				<div style="margin: 0 auto;">
					<h1 class="card-title" style="margin-bottom:0px;"> <i class="icon-alarm mr-3 icon-2x"></i> <span class="currentTime" style="font-size:42px;"></span> </h1>
			    	<p style="margin-left: 65px; font-size: 13px;"><span style="padding-right: 15px;">hours</span><span style="padding-right: 15px;">minutes</span><span>seconds</span><span class="ml-1">AM/PM</span></p>
				</div>
			    <div class="header-elements">
					<div class="list-icons">
		        		<a class="list-icons-item" data-action="collapse"></a>
		        		<a class="list-icons-item" data-action="reload"></a>
		        		<a class="list-icons-item" data-action="remove"></a>
		        	</div>
		    	</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-12" style="text-align: center;">
						<h4>
							<span style="font-size: 13px; font-weight: 500; margin-right: 15px;"><?php echo date("l"); ?></span><?php echo date("F d, Y"); ?> 
						</h4>
					</div>
				</div>
				<div class="row" style="margin-top: 35px;">
					<div class="col-md-12" style="text-align: center;">

						<h5 style="font-weight: 500; margin-bottom: 0;">Current Shifts</h5>

					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<table class="table datatable-basic"  id="client_view_sheets_datatable">
							<thead>
								<tr>
									<th>Shift Time</th>
									<th>Client</th>
									<th>Caregiver</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php if(count($client_current_shifts) > 0){
								foreach ($client_current_shifts as $current_shifts) { ?>
								<tr>
									<td><span class="text-muted"><?php echo date("h:i a",strtotime($current_shifts->from))." - ".date("h:i a",strtotime($current_shifts->to)); ?></span>
										<i class="icon-primitive-dot mr-3 icon-2x" style="color: #546E7A; font-size: 18px; float: right;"></i>
									</td>
									<td>
										<li class="media">
											<div class="mr-3">
												<a href="#">
													<img src="<?php echo client_image($current_shifts->client_id); ?>" class="rounded-circle" width="40" height="40" alt="">
												</a>
											</div>

											<div class="media-body" style="margin-top: 10px;">
												<div class="media-title font-weight-semibold"><?php echo $current_shifts->client_name; ?></div>
											</div>
										</li>
									</td>
									<td>
										<li class="media">
											<div class="mr-3">
												<a href="#">
													<img src="<?php echo caregiver_image($current_shifts->caregiver_id); ?> " class="rounded-circle" width="40" height="40" alt="">
												</a>
											</div>
											<div class="media-body" style="margin-top: 10px;">
												<div class="media-title font-weight-semibold"><?php echo $current_shifts->caregiver_name; ?></div>
											</div>
										</li>
									</td>												
									<td class="text-center">
										<div class="list-icons">
											<div class="dropdown">
												<a href="#" class="list-icons-item" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="javascript:;" onclick="edit_shift(<?php echo $current_shifts->id; ?>,1)" class="dropdown-item"><i class="icon-square-right"></i> Switch Schedule</a>
													<a href="javascript:;" onclick="edit_shift(<?php echo $current_shifts->id; ?>,0)" class="dropdown-item"><i class="icon-square-down"></i> Edit</a>
													<a href="javascript:;" onclick="delete_shift(<?php echo $current_shifts->id; ?>)" class="dropdown-item"><i class=" icon-bin2"></i> Remove</a>
												</div>
											</div>
										</div>
									</td> 
								</tr>
								<?php }
								} ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="card-body">
				<div class="row" style="margin-top: 35px;">
					<div class="col-md-12" style="text-align: center;">
						<h5 style="font-weight: 500; margin-bottom: 0;">Upcomming Shifts</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<table class="table datatable-basic" id="client_upcomming_shifts_datatable">
							<thead>
								<tr>
									<th>Shift Time</th>
									<th>Client</th>
									<th>Caregiver</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php if (count($client_upcomming_shifts) > 0) {
									foreach ($client_upcomming_shifts as $upcomming_shifts) { ?>
									<tr>
										<td><span class="text-muted"><?php echo date("h:i a",strtotime($upcomming_shifts->from))." - ".date("h:i a",strtotime($upcomming_shifts->to)); ?></span>
											<i class="icon-primitive-dot mr-3 icon-2x" style="color: #00BCD4; font-size: 18px; float: right;"></i>
										</td>
										<td>
											<li class="media">
												<div class="mr-3">
													<a href="#">
														<img src="<?php echo client_image($upcomming_shifts->client_id); ?>" class="rounded-circle" width="40" height="40" alt="">
													</a>
												</div>

												<div class="media-body" style="margin-top: 10px;">
													<div class="media-title font-weight-semibold"><?php echo $upcomming_shifts->client_name; ?></div>
												</div>
											</li>
										</td>
										<td>
											<li class="media">
												<div class="mr-3">
													<a href="#">
														<img src="<?php echo caregiver_image($upcomming_shifts->caregiver_id); ?>" class="rounded-circle" width="40" height="40" alt="">
													</a>
												</div>
												<div class="media-body" style="margin-top: 10px;">
													<div class="media-title font-weight-semibold"><?php echo $upcomming_shifts->caregiver_name; ?>
													</div>
												</div>
											</li>
										</td>
										<td class="text-center">
											<div class="list-icons">
												<div class="dropdown">
													<a href="#" class="list-icons-item" data-toggle="dropdown">
														<i class="icon-menu9"></i>
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-square-right"></i> View Current Shift</a>
													</div>
												</div>
											</div>
										</td>
									</tr>
								<?php }
								} ?>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="edit_switch_modal" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content" id="edit_switch_div"> 

    </div>
  </div>
</div>
<div id="switch_caregiver_modal" class="modal fade" tabindex="-2">
  <div class="modal-dialog">
    <div class="modal-content" id="switch_caregiver_div"> 

    </div>
  </div>
</div>


	<script src="<?php echo base_url(); ?>assets/js/demo_pages/datatables_basic.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo_pages/datatables_responsive.js"></script>

<?php include(APPPATH."views/agency/inc/footer.php");?>

<script type="text/javascript">
	
$('#client_view_sheets_datatable').DataTable({
	autoWidth: false,
    responsive: true,
    columnDefs: [{ 
        orderable: false
    }],
    dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
    language: {
        search: '<span>Filter:</span> _INPUT_',
        searchPlaceholder: 'Type to filter...',
        lengthMenu: '<span>Show:</span> _MENU_',
        paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
    }
});

$('#client_upcomming_shifts_datatable').DataTable({
	autoWidth: false,
    responsive: true,
    columnDefs: [{ 
        orderable: false
    }],
    dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
    language: {
        search: '<span>Filter:</span> _INPUT_',
        searchPlaceholder: 'Type to filter...',
        lengthMenu: '<span>Show:</span> _MENU_',
        paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
    }
});

setInterval(function(){
$(".currentTime").html(moment().format('LTS'));
}, 1000);

function delete_shift(id){
	var warning_text = "You won't be able to revert this!";
	swal({
		title: 'Are you sure?',
		text: warning_text,
		type: 'warning',
		showCancelButton: true,
		confirmButtonText: 'Yes, delete it!',
		cancelButtonText: 'No, cancel!',
		confirmButtonClass: 'btn btn-success',
		cancelButtonClass: 'btn btn-danger',
		buttonsStyling: false
	}).then(function (Confirm) {
		if(Confirm.value){
			//loader = CardLoader($("#full_calendar_view"));
			$.post("<?php echo site_url("agency/current_shifts/delete_shift"); ?>",{id:id}).done(function(data){
				//loader.unblock();
				swal({
					title: 'Success',
					text: "You have deleted View Shift successfully!",
					type: 'success',
					showCancelButton: false,
					confirmButtonText: 'OK',
					cancelButtonText: 'No, cancel!',
					confirmButtonClass: 'btn btn-success',
					cancelButtonClass: 'btn btn-danger',
					allowOutsideClick: false,
					buttonsStyling: false
				}).then(function (Confirm) {
					if(Confirm.value){
						location.reload();
					}
				});
				/*swal(
					'Deleted!',
					'Appointement has been deleted.',
					'success'
				);*/
			});
		}else{
			swal(
				'Cancelled',
				'Shift is safe :)',
				'error'
			);
		}
	});
	}

function edit_shift(id,is_switch){
	$.post('<?php echo site_url('agency/current_shifts/swicth_schedule'); ?>',{id:id,is_switch}).done(function(e){
		$('#edit_switch_modal').modal('show');
		$('#edit_switch_div').html(e);
	});
	}

</script>