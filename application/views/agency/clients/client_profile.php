<?php include(APPPATH."views/agency/inc/header.php");?>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="row" style="padding: 12px;">
				<div class="col-md-6">
					<div class="row" style="text-align: center;">
						<div class="col-md-5">
							<a href="<?php echo site_url("agency/clients/add_client"); ?>" class="btn btn-light legitRipple" style="font-size: 11px;"><i style="margin-right: 10px;" class="icon-users4"></i>Add a client</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-4 offset-md-4" style="margin-top: 9px;">
							<h6 style="font-size: 12px; color: #4caf50;">Added<span style="margin-left: 6px;" class="badge badge-success badge-pill">65</span></h6>
						</div>
						<div class="col-md-4" style="margin-top: 9px;">
							<h6 style="font-size: 12px; color: #ff7043;">Pending<span style="margin-left: 6px;" class="badge badge-warning badge-pill">65</span></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<!-- Dropdown list -->
		<div class="card">
			<div class="card-header header-elements-inline">
					<div style="width: 100%; text-align: center;">
						<div class="btn-group">
	                    	<button style="margin-right: 10px;" type="button" class="btn btn-light dropdown-toggle legitRipple filter" data-toggle="dropdown">Filter</button>
	                    	<div class="dropdown-menu dropdown-menu-right filter">
								<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Filter</a>
								<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Filter</a>
							</div>

							<div class="btn-group">
		                    	<button style="margin-right: 20px;" type="button" class="btn btn-light dropdown-toggle legitRipple filter" data-toggle="dropdown">Sort</button>
		                    	<div class="dropdown-menu dropdown-menu-right filter">
									<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Sort</a>
									<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Sort</a>
								</div>
							</div>
						</div>
					</div>
				<div class="header-elements">
					<div class="form-group form-group-feedback form-group-feedback-right">
						<input type="text" class="form-control form-control-sm" placeholder="Search">
						<div class="form-control-feedback form-control-feedback-lg">
							<i style="font-size: 12px; color: lightgray;" class="icon-search4"></i>
						</div>
					</div>
            	</div>
			</div>

			<div class="card-body">
				<ul class="media-list">
					<!-- <li class="media font-weight-semibold py-1">Team leaders</li> -->

					<li class="media">
						<div class="mr-3">
							<a href="#">
								<img src="<?php echo base_url(); ?>assets/images/userimg/face12.jpg" class="rounded-circle" width="40" height="40" alt="">
							</a>
						</div>

						<div class="media-body">
							<div class="media-title font-weight-semibold"><?php if(isset($client->first_name)){ echo $client->first_name." ".$client->last_name;} ?></div>
							<span class="text-muted">Development</span>
						</div>

						<div class="align-self-center ml-3" style="margin-right: 1.25rem!important;">
							<span class="badge badge-light badge-striped badge-striped-right border-right-success" style="color: #4caf50;">Profile Completed</span>
						</div>
						<div class="align-self-center ml-3">
							<div class="list-icons">
		                    	<div class="list-icons-item dropdown">
		                    		<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>

		                    		<div class="dropdown-menu dropdown-menu-right">
				                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#call"><i class="icon-phone2"></i> Make a call</a>
				                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#chat"><i class="icon-comment"></i> Start chat</a>
				                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#video"><i class="icon-video-camera"></i> Video call</a>
		                    		</div>
		                    	</div>
	                    	</div>
						</div>
					</li>
				</ul>
				<div class="row">
					<div class="col-md-12">

						<div class="card-body">
							<ul class="nav nav-tabs nav-tabs-bottom">
								<li class="nav-item" style="padding-right: 30px;"><a href="#client_information" class="nav-link active" data-toggle="tab">Client Information</a></li>
								<li class="nav-item" style="padding-right: 30px;"><a href="#special_needs" class="nav-link" data-toggle="tab">Special Needs</a></li>
								<li class="nav-item" style="padding-right: 30px;"><a href="#family_center" class="nav-link" data-toggle="tab">Family Center</a></li>
								<li class="nav-item"><a href="#life_directive" class="nav-link" data-toggle="tab">End of Life Directive</a></li>
							</ul>

							<div class="tab-content">
								<div class="tab-pane fade show active" id="client_information">
									<div class="row" style="margin-top: 20px;">
										<div class="col-md-12">
											<div class="d-flex align-items-center">
												<div class="mr-3">
													<h4>Cathy Peter</h4>
												</div>
												<div>
													<a href="#" class="text-default font-weight-semibold letter-icon-title"><i style="margin-right: 10px;" class="icon-file-empty"></i>Edit</a>
												</div>
											</div>
										</div>
									</div>
									<div class="row" style="margin-top: 20px;">
										<div class="col-md-12">
											<table>
												<tr>
													<td style="width: 150px;"><strong>Gender:</strong></td>
													<td><?php if(isset($client->gender)){echo $client->gender;} ?></td>
												</tr>
												<tr>
													<td style="width: 150px;"><strong>Phone:</strong></td>
													<td><span style="color: #3f51b5;"><?php if(isset($client->mobile_number)){echo $client->mobile_number;} ?></span></td>
												</tr>
												<tr>
													<td style="width: 150px;"><strong>Email:</strong></td>
													<td><span style="color: #3f51b5;"><?php if(isset($client->email_address)){echo $client->email_address;} ?></span></td>
												</tr>
												<tr>
													<td style="width: 150px;"><strong>Client From:</strong></td>
													<td><?php if(isset($client->client_from)){ echo $client->client_from;} ?></td>
												</tr>
												<tr>
													<td style="width: 150px;"><strong>Birthday:</strong></td>
													<td><?php if(isset($client->dob)){echo date("M,d-Y",strtotime($client->dob));} ?></td>
												</tr>
											</table>
										</div>
									</div>
								</div>

								<div class="tab-pane fade" id="special_needs">
									Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
								</div>
								<div class="tab-pane fade" id="family_center">
								<!--CODE COPIED START-->


								<div class="col-md-12"> 
									<!-- Dropdown list -->
									<div class="card">
									<div class="card-header header-elements-inline" style="border-bottom: 1px solid lightgray; padding-bottom: 0px;">
										<div class="col-md-7" style="text-align: right;">
										<h5>Send an invite to your clients</h5>
										</div>
										<div class="header-elements">
										<div class="list-icons" style="position: relative; bottom: 6px;"> <a class="list-icons-item" data-action="collapse"></a> <a class="list-icons-item" data-action="reload"></a> </div>
										</div>
									</div>
									<div class="col-md-9 offset-md-1">
										<form id="send_invite_form" action="<?php echo site_url("agency/clients/add_send_invite"); ?>" method="POST" role="form">
										<input type="hidden" name="client_id" value="<?php echo $client->id; ?>">
										<div class="row" style="padding: 60px 0px;">
											<div class="col-md-2">
											<div class="form-group">
												<label>First Name:</label>
												<input type="text" class="form-control" name="first_name" placeholder="John Doe">
											</div>
											</div>
											<div class="col-md-2">
											<div class="form-group">
												<label>Last Name:</label>
												<input type="text" class="form-control" name="last_name" placeholder="John Doe">
											</div>
											</div>
											<div class="col-md-2">
											<div class="form-group">
												<label>Email:</label>
												<input type="email" class="form-control" name="email_address" placeholder="example@gmail.com">
											</div>
											</div>
											<div class="col-md-2">
												<div class="form-group">
													<label>Phone #:</label>
													<input type="text" name="mobile_number"  class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999">
												</div>
											</div>
											<div class="col-md-2">
											<button style="margin-top: 28px;" type="submit" class="btn btn-primary legitRipple"> Send Invite<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
											</div>
										</div>
										</form>
										<div id="append_send_invite">
										<?php if(count($client_family)>0){ ?>
										<?php foreach($client_family as $row){ ?>
										<div class="row" style="padding: 15px 0px;">
										<div class="col-md-4">
											<div class="d-flex align-items-center">
											<div class="mr-3"> <img src="<?php// echo caregiver_image($row->id); ?>" class="rounded-circle" width="40" height="40" alt=""> </div>
											<div> <a href="#" class="text-default font-weight-semibold letter-icon-title"><?php echo $row->first_name." ".$row->last_name; ?><i style="color: gray; margin-left: 18px; font-size: 13px;" class="icon-pencil5"></i></a>
												<div class="text-muted font-size-sm"><?php echo $row->email_address; ?></div>
											</div>
											</div>
										</div>
										<?php if($row->status == "added"){ ?>
										<div class="col-md-3"></div>
										<div class="col-md-3">
											<button style="width: 80%;" type="button" class="btn btn-primary legitRipple" onclick="window.location='<?php echo site_url("agency/clients/send_invite/".$row->id.""); ?>'"> Send Invite<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
										</div>
										<?php } 
										
										if($row->status == "pending"){ 
											?>
										<div class="col-md-3">
											<button style="width: 80%;" type="button" class="btn btn-outline alpha-danger text-danger-800 border-danger-600 legitRipple">Pending</button>
										</div>
										<div class="col-md-3">
											<button style="width: 80%;" type="submit" class="btn btn-primary legitRipple" onclick="resendInvite('<?php echo $row->id; ?>')"> Re-send<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
										</div>
										<?php } 
										
										if($row->status =="joined"){ ?>
										<div class="col-md-3">
											<button style="width: 80%;" type="button" class="btn btn-outline alpha-success text-success-800 border-success-600 legitRipple">Joined</button>
										</div>
										<div class="col-md-3"></div>
										<?php } ?>
										</div>
										<?php }} ?>
									</div>
									<!-- <div class="col-md-12" style="text-align: right; padding-top: 15px; padding-bottom: 15px;">
										<button type="submit" class="btn btn-primary legitRipple"> Done<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
									</div> -->
									</div>
									<!-- /dropdown list --> 
								</div>
								</div>







								<!--CODE COPIED END-->
									
								</div>
								<div class="tab-pane fade" id="life_directive">
									Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /tabs with bottom line -->
			</div>
		</div>
		<!-- /dropdown list -->
</div>

<?php include(APPPATH."views/agency/inc/footer.php");?>

<script>

$('#send_invite_form').submit(function(e) {
	e.preventDefault();
	var form = $(this);
	$.ajax({
		type: 'post',	
        url: '<?php echo site_url("agency/clients/add_send_invite"); ?>',
        dataType: 'html',
        data: form.serialize(),                         
        success: function(data){
			$("#append_send_invite").append(data);
			$("input[name=first_name]").val(" ");
			$("input[name=last_name]").val(" ");
			$("input[name=email_address]").val(" ");
			$("input[name=mobile_number]").val(" ");
        }
     });
});

function resendInvite(id){
	$.ajax({
		type: 'post',	
        url: '<?php echo site_url("agency/clients/send_invite/"); ?>'+id,
        dataType: 'html',                       
        success: function(data){
			swal("Invitation, send");
        }
     });
}
</script>