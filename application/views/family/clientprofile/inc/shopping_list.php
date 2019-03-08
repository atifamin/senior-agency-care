<script src="<?php echo base_url(); ?>assets/js/plugins/uploaders/fileinput/fileinput.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo_pages/uploader_bootstrap.js"></script>
<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-12" style="text-align: center;"> <a href="javascript:;" data-toggle="modal" data-target="#modal_shopping_list">Create new shopping list
        <button style="background-color: #f5f5f5; margin-left: 15px;" type="button" class="btn alpha-primary text-primary-800 btn-icon rounded-round ml-2 legitRipple"><i style="color: #555;" class="icon-plus3"></i></button>
        </a> </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <table class="table datatable-basic" id="shopping_list_datatable">
          <thead>
            <tr>
              <th>Date Created</th>
              <th>Status</th>
              <th>Shopping Reminder</th>
              <th>Reciepts</th>
              <th class="text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><span class="text-muted">May 03, 2019</span></td>
              <td><span class="text-muted">Complete</span></td>
              <td><span class="text-muted">10 Minutes before</span></td>
              <td><a href="#"><i style="font-size: 20px;" class="icon-file-word"></i></a></td>
              <td class="text-center"><div class="list-icons">
                  <div class="dropdown"> <a href="#" class="list-icons-item" data-toggle="dropdown"> <i class="icon-menu9"></i> </a>
                    <div class="dropdown-menu dropdown-menu-right"> <a href="#" class="dropdown-item"><i class="icon-square-right"></i> Edit shopping list</a> <a href="#" class="dropdown-item"><i class="icon-bin2"></i> Delete shopping list</a> <a href="#" class="dropdown-item"><i class="icon-square-down"></i> End shopping list</a> </div>
                  </div>
                </div></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<div id="modal_shopping_list" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="add_client_medication_form">
      <div class="modal-header">
        <h5 class="modal-title" style="margin: 0 auto;">Add Shopping List</h5>
        <div>
        	<li class="media">
				<div class="mr-3" style="margin-right: .55rem!important;">
					<a href="#">
						<img src="<?php echo base_url(); ?>assets/images/userimg/face20.jpg" class="rounded-circle" width="40" height="40" alt="">
					</a>
				</div>

				<div class="media-body">
					<div class="media-title font-weight-semibold" style="font-size: 12px; margin-bottom: 0px !important;">Bastin Miller</div>
					<span class="text-muted" style="font-size: 12px;">Total Care</span>
				</div>
			</li>
        </div>
      </div>
      
        <div class="modal-body">
          	<div class="row">
          		<div class="col-md-11 offset-md-1">
          			<div class="form-group row">
						<label class="col-md-12"><i class="icon-attachment2" style="margin-right: 10px;"></i>Attach Reciept</label>
						<div class="col-lg-10">
							<input type="file" class="file-input" data-fouc>
						</div>
					</div>
          		</div>
          		<div class="col-md-11 offset-md-1">
					<div class="d-flex align-items-center">
						<div class="mr-3">
							<div class="form-group pt-2">
								<a href="#"><i style="font-size: 30px;" class="icon-file-word"></i></a>
							</div>
						</div>
						<div class="mr-3" style="margin-left: 140px; margin-bottom: 7px;">
							<a href="#" class="text-default font-weight-semibold letter-icon-title"><i style="margin-right: 10px;" class="icon-file-empty"></i>Edit</a>
						</div>
						<div class="mr-3" style="margin-bottom: 7px;">
							<a href="#" class="text-default font-weight-semibold letter-icon-title"><i style="margin-right: 10px;" class="icon-cross3"></i>Remove</a>
						</div>
					</div>
				</div>
          	</div>



          	<div class="row">
          		<div class="col-md-11 offset-md-1">
          			<div class="form-group row">
						<label class="col-md-12">Shopping List</label>
						<div class="col-lg-10">
							<div class="input-group">
								<input type="text" class="form-control border-right-0" placeholder="Add to my shopping list">
								<span class="input-group-append">
									<button class="btn bg-blue" type="button">Add<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
								</span>
							</div>
						</div>
					</div>
          		</div>
          		<div class="col-md-11 offset-md-1">
					<div class="d-flex align-items-center">
						<div class="mr-3">
							<div class="form-group pt-2">
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input-styled" data-fouc>
										Toilet Paper
									</label>
								</div>
							</div>
						</div>
						<div class="mr-3" style="margin-left: 140px; margin-bottom: 7px;">
							<a href="#" class="text-default font-weight-semibold letter-icon-title"><i style="margin-right: 10px;" class="icon-file-empty"></i>Edit</a>
						</div>
						<div class="mr-3" style="margin-bottom: 7px;">
							<a href="#" class="text-default font-weight-semibold letter-icon-title"><i style="margin-right: 10px;" class="icon-cross3"></i>Remove</a>
						</div>
					</div>
				</div>
          	</div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in" data-spinner-size="20"> <span class="ladda-label">Done</span> </button>
          <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>
  