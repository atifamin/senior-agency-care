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
      <div class="card-header header-elements-inline" style="border-bottom: 1px solid lightgray; padding-bottom: 0px;">
        <div class="col-md-7" style="text-align: right;">
          <h5>Send an invite to your caregivers</h5>
        </div>
        <div class="header-elements">
          <div class="list-icons" style="position: relative; bottom: 6px;"> <a class="list-icons-item" data-action="collapse"></a> <a class="list-icons-item" data-action="reload"></a> </div>
        </div>
      </div>
      <div class="col-md-9 offset-md-1">
        <form action="<?php echo site_url("agency/caregiver/add_send_invite"); ?>" method="POST">
          <div class="row" style="padding: 60px 0px;">
            <div class="col-md-3">
              <div class="form-group">
                <label>First Name:</label>
                <input type="text" class="form-control" name="first_name" placeholder="John Doe">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Last Name:</label>
                <input type="text" class="form-control" name="last_name" placeholder="John Doe">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" name="email" placeholder="example@gmail.com">
              </div>
            </div>
            <div class="col-md-3">
              <button style="margin-top: 28px;" type="submit" class="btn btn-primary legitRipple"> Send Invite<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
            </div>
          </div>
        </form>
        <?php if(count($result)>0){ ?>
        <?php foreach($result as $row){ ?>
        <div class="row" style="padding: 15px 0px;">
          <div class="col-md-4">
            <div class="d-flex align-items-center">
              <div class="mr-3"> <img src="<?php echo caregiver_image($row->id); ?>" class="rounded-circle" width="40" height="40" alt=""> </div>
              <div> <a href="#" class="text-default font-weight-semibold letter-icon-title"><?php echo $row->first_name." ".$row->last_name; ?><i style="color: gray; margin-left: 18px; font-size: 13px;" class="icon-pencil5"></i></a>
                <div class="text-muted font-size-sm"><?php echo $row->email; ?></div>
              </div>
            </div>
          </div>
          <?php if($row->status=="added"){ ?>
          <div class="col-md-3"></div>
          <div class="col-md-3">
            <button style="width: 80%;" type="button" class="btn btn-primary legitRipple" onclick="window.location='<?php echo site_url("agency/caregiver/send_invite/".$row->id.""); ?>'"> Send Invite<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
          </div>
          <?php } ?>
          <?php if($row->status=="pending"){ ?>
          <div class="col-md-3">
            <button style="width: 80%;" type="button" class="btn btn-outline alpha-danger text-danger-800 border-danger-600 legitRipple">Pending</button>
          </div>
          <div class="col-md-3">
            <button style="width: 80%;" type="submit" class="btn btn-primary legitRipple" onclick="window.location='<?php echo site_url("agency/caregiver/send_invite/".$row->id.""); ?>'"> Re-send<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
          </div>
          <?php } ?>
          <?php if($row->status=="joined"){ ?>
          <div class="col-md-3">
            <button style="width: 80%;" type="button" class="btn btn-outline alpha-success text-success-800 border-success-600 legitRipple">Joined</button>
          </div>
          <div class="col-md-3"></div>
          <?php } ?>
        </div>
        <?php }} ?>
      </div>
      <div class="col-md-12" style="text-align: right; padding-top: 15px; padding-bottom: 15px;">
        <button type="submit" class="btn btn-primary legitRipple"> Done<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
      </div>
    </div>
    <!-- /dropdown list --> 
  </div>
</div>
<?php include(APPPATH."views/agency/inc/footer.php");?>
