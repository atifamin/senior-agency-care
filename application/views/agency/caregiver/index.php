<?php include(APPPATH."views/agency/inc/header.php");?>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="row" style="padding: 12px;">
        <div class="col-md-6">
          <div class="row" style="text-align: center;">
            <div class="col-md-5"> <a href="<?php echo site_url("agency/caregiver/add_caregiver"); ?>" class="btn btn-light legitRipple" style="font-size: 11px;"><i style="margin-right: 10px;" class="icon-users4"></i>Add a caregiver</a> </div>
            <span style="margin: 10px auto; font-size: 10px;">OR</span>
            <div class="col-md-5"> <a href="<?php echo site_url("agency/caregiver/send_invite_to_caregiver"); ?>" class="btn btn-light legitRipple" style="font-size: 11px;"><i class="icon-make-group mr-2"></i>Invite your caregivers</a> </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top: 9px;">
              <h6 style="font-size: 12px; color: #4caf50;">Added<span style="margin-left: 6px;" class="badge badge-success badge-pill"><?php echo $total_added_profiles; ?></span></h6>
            </div>
            <div class="col-md-4" style="margin-top: 9px;">
              <h6 style="font-size: 12px; color: #ff7043;">Pending<span style="margin-left: 6px;" class="badge badge-warning badge-pill"><?php echo $total_pending_profiles; ?></span></h6>
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
            <div class="dropdown-menu dropdown-menu-right filter"> <a href="#" class="dropdown-item"><i class="icon-menu7"></i> Filter</a> <a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Filter</a> </div>
            <div class="btn-group">
              <button style="margin-right: 20px;" type="button" class="btn btn-light dropdown-toggle legitRipple filter" data-toggle="dropdown">Sort</button>
              <div class="dropdown-menu dropdown-menu-right filter"> <a href="#" class="dropdown-item"><i class="icon-menu7"></i> Sort</a> <a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Sort</a> </div>
            </div>
          </div>
        </div>
        <div class="header-elements">
          <div class="form-group form-group-feedback form-group-feedback-right">
            <input type="text" class="form-control form-control-sm" placeholder="Search">
            <div class="form-control-feedback form-control-feedback-lg"> <i style="font-size: 12px; color: lightgray;" class="icon-search4"></i> </div>
          </div>
        </div>
      </div>
      
      <div class="card-body">
        <ul class="media-list">
          <!-- <li class="media font-weight-semibold py-1">Team leaders</li> -->
          <?php if(count($result)>0){ ?>
          <?php foreach($result as $row){ ?>
          <li class="media">
            <div class="mr-3"> <a href="#"> <img src="<?php echo caregiver_image($row->id); ?>" class="rounded-circle" width="40" height="40" alt=""> </a> </div>
            <div class="media-body">
              <div class="media-title font-weight-semibold"><?php echo $row->first_name." ".$row->last_name; ?></div>
              <span class="text-muted"><?php echo ucfirst($row->position); ?></span> </div>
            <div class="align-self-center ml-3">
              <?php if($row->status=="added"){ ?>
              <span class="badge badge-light badge-striped badge-striped-right border-right-success" style="color: #4caf50;">Profile Completed</span>
              <?php }elseif($row->status=="pending"){ ?>
              <span class="badge badge-light badge-striped badge-striped-right border-right-warning" style="color: #ff7043;">Pending</span>
              <?php } ?>
            </div>
            <div class="align-self-center ml-3">
              <div class="list-icons">
                <div class="list-icons-item dropdown"> <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>
                  <div class="dropdown-menu dropdown-menu-right"> <a href="<?php echo site_url("agency/caregiver/profile/".$row->id.""); ?>" class="dropdown-item"><i class="icon-file-eye"></i>View Profile</a> <a href="#" class="dropdown-item" data-toggle="modal" data-target="#video"><i class="icon-video-camera"></i> Video call</a> </div>
                </div>
              </div>
            </div>
          </li>
          <?php }}else{ ?>
          <li class="media">
            <div class="row">
              <div class="col-md-12">
                <p>No Caregiver Found....</p>
              </div>
            </div>
          </li>
          <?php } ?>
          
        </ul>
      </div>
    </div>
    <!-- /dropdown list --> 
  </div>
</div>
<?php include(APPPATH."views/agency/inc/footer.php");?>
