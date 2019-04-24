<?php //print_array($client); ?>


<form id="switch_appointment_form">
  <div class="modal-header">
    <h5 class="modal-title" style="margin: 0 auto; padding-bottom: 25px;"><strong>Switch Caregiver</strong></h5>
    <div>
      <li class="media" style="padding: unset; border: none;">
        <div class="mr-3" style="margin-right: .55rem!important;"> <a href="#"> <img src="<?php echo client_image($client->id); ?>" class="rounded-circle" width="40" height="40" alt=""> </a> </div>
        <div class="media-body">
          <div class="media-title font-weight-semibold" style="font-size: 12px; margin-bottom: 0px !important;"><?php echo $client->first_name." ".$client->last_name; ?></div>
          <span class="text-muted" style="font-size: 12px;">Total Care</span> </div>
      </li>
    </div>
  </div>
  <div class="row" style="padding: 20px;">
      <div class="col-md-12">
        <table class="table">
          <thead>
            <tr>
              <td colspan="3" style="text-align: center;"><?php echo date('l d,Y',strtotime($current_appointment_detail->from)); ?></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo date('D, h:i a',strtotime($current_appointment_detail->from))." - ".date('D, h:i a',strtotime($current_appointment_detail->to));  ?></td>
              <td><span class="fc-event-dot" style="background-color:#546E7A"></span></td><td><img src="<?php echo caregiver_image($current_appointment_detail->caregiver_id); ?>" class="rounded-circle" width="40" height="40" alt=""> <?php echo $caregiver_current->first_name." ".$caregiver_current->last_name; ?> </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  <div class="modal-body" style="padding:0 10%; max-height: 300px; overflow-y: scroll;">
      <div class="row" style="margin-top: 5px">
        <table class="table">
          <tbody>
            <?php if(count($switch_appointment_detail) > 0){
              foreach ($switch_appointment_detail as $switch_appointment) { ?>
            <tr>
              <td><img src="<?php echo caregiver_image($switch_appointment->caregiver_id); ?>" class="rounded-circle" width="40" height="40" alt=""> <?php echo $caregiver_switch->first_name; ?></td>
              <td>
                <p><?php echo date('l d,Y',strtotime($switch_appointment->from)); ?></p>
                <p><?php echo date('D, h:i a',strtotime($switch_appointment->from))." - ".date('D, h:i a',strtotime($switch_appointment->to)); ?></p>
                <p><strong>Client </strong>&nbsp;&nbsp;<?php echo $client->first_name." ".$client->last_name; ?></p>
                </td>
              <td><a href="javascript:;" onclick="switch_appointment(<?php echo $switch_appointment->id; ?>)" class="btn btn-primary legitRipple">Switch</a>
              </td>
            </tr>
            <?php  }
              } ?>
          </tbody>
        </table>
      </div>  
  </div>
  <div class="row" style="text-align: center; margin: 15px 0;">
    <div class="col-md-12">
      <button type="button" class="btn btn-light legitRipple" data-dismiss="modal">Cancal</button>
    </div>
  </div>
</form>

<script type="text/javascript">
  $('.multiselect').multiselect();

  function switch_appointment(id){
    $.post("<?php echo site_url('agency/current_shifts/switch_appointment_shift'); ?>",{from:<?php echo $current_appointment_detail->id; ?>,to:id}).done(function(e){
      $('#switch_caregiver_modal').modal('hide');
      swal({
          title: "Good job!",
          type: 'success',
          html: 'You have Switched appointment successfully',
          allowOutsideClick: false,
        }).then(function() {
          location.reload();
        });
    });
  }
</script> 