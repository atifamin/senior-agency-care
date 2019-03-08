<?php $client = $this->common_model->listingRow("id",$client_id,"client_family"); ?>
<div class="row" style="padding: 15px 0px;">
    <div class="col-md-4">
        <div class="d-flex align-items-center">
        <div class="mr-3"> <img src="<?php// echo caregiver_image($row->id); ?>" class="rounded-circle" width="40" height="40" alt=""> </div>
        <div> <a href="#" class="text-default font-weight-semibold letter-icon-title"><?php echo $client->first_name." ".$client->last_name; ?><i style="color: gray; margin-left: 18px; font-size: 13px;" class="icon-pencil5"></i></a>
            <div class="text-muted font-size-sm"><?php echo $client->email_address; ?></div>
        </div>
        </div>
    </div>
    <?php if($client->status == "added"){ ?>
    <div class="col-md-3"></div>
    <div class="col-md-3">
        <button style="width: 80%;" type="button" class="btn btn-primary legitRipple" onclick="window.location='<?php echo site_url("agency/clients/send_invite/".$client->id.""); ?>'"> Send Invite<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
    </div>
    <?php } 
    
    if($client->status == "pending"){ 
        ?>
    <div class="col-md-3">
        <button style="width: 80%;" type="button" class="btn btn-outline alpha-danger text-danger-800 border-danger-600 legitRipple">Pending</button>
    </div>
    <div class="col-md-3">
        <button style="width: 80%;" type="submit" class="btn btn-primary legitRipple" onclick="resendInvite('<?php echo $client->id; ?>')"> Re-send<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
    </div>
    <?php } 
    
    if($client->status =="joined"){ ?>
    <div class="col-md-3">
        <button style="width: 80%;" type="button" class="btn btn-outline alpha-success text-success-800 border-success-600 legitRipple">Joined</button>
    </div>
    <div class="col-md-3"></div>
    <?php } ?>
    </div>
   
</div>

</div>