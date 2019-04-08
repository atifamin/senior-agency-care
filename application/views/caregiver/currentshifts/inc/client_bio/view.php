<?php //print_array($detail); ?>
<?php $client_bio = $this->common_model->listingRow('client_id',$detail->client_id,'client_bio'); 
  $client = $this->common_model->listingRow('agency_id',$detail->agency_id,'client');
?>

<?php //print_array($client); ?>

<div class="col-md-12">
  <div class="row">
    <?php if(count($client_bio)>0){ ?>
    <div class="col-md-12" style="margin: 20px 0px 10px 0px;">
      <p>Client brief bio</p>
    </div>
    <div class="col-md-12" style="margin-top: 5px;">
      <p><strong>Name: <span><?php echo $client->first_name." ".$client->last_name; ?></span></strong></p>
    </div>
    <div class="col-md-12" style="margin-top: 5px;">
      <p><strong>Profession:</strong></p>
    </div>
    <div class="col-md-12" style="margin-top: 5px;">
      <?php if(count($client_bio)>0){ echo $client_bio->profession; } ?>
    </div>
    <div class="col-md-12" style="margin-top: 5px;">
      <p><strong>Client's typical daily routine:</strong></p>
    </div>
    <div class="col-md-12" style="margin-top: 5px;">
      <?php if(count($client_bio)>0){ echo $client_bio->daily_routines; } ?>
    </div>
    <div class="col-md-12" style="margin-top: 5px;">
      <p><strong>Likes:</strong></p>
    </div>
    <div class="col-md-12" style="margin-top: 5px;">
      <?php if(count($client_bio)>0){ echo $client_bio->likes; } ?>
    </div>
    <div class="col-md-12" style="margin-top: 5px;">
      <p><strong>Dislikes:</strong></p>
    </div>
    <div class="col-md-12" style="margin-top: 5px;">
      <?php if(count($client_bio)>0){ echo $client_bio->dislikes; } ?>
    </div>
    <div class="col-md-12" style="margin-top: 5px;">
      <p><strong>Hobbies:</strong></p>
    </div>
    <div class="col-md-12" style="margin-top: 5px;">
      <?php if(count($client_bio)>0){ echo $client_bio->hobbies; } ?>
    </div>
    <div class="col-md-12" style="margin-top: 5px;">
      <p><strong>Favourite Music:</strong></p>
    </div>
    <div class="col-md-12" style="margin-top: 5px;">
      <?php if(count($client_bio)>0){ echo $client_bio->music; } ?>
    </div>
    <?php }else{ ?>
    <div class="col-md-12" style="margin-top: 5px;" align="center">
      <h3>No Client Bio Added Yet.</h3>
    </div>
    <?php } ?>
    <div class="col-md-12" style="text-align: right; margin-top: 20px;"> <a href="javascript:;" data-toggle="modal" data-target="#modal_clients_bio_<?php echo $detail->id; ?>" style="margin-right: 10px;"><i style="color: #555;" class="icon-pencil5"></i></a>
      <?php if(count($client_bio)>0){ ?>
      <a href="javascript:;" onclick="deleteClientBio(<?php echo $client_bio->id; ?>)"><i style="color: #555;" class="icon-bin"></i></a>
      <?php } ?>
    </div>
  </div>
</div>
<div id="modal_clients_bio_<?php echo $detail->id; ?>" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="client_bio_form_<?php echo $detail->id; ?>">
        <input type="hidden" name="client_id" value="<?php echo $detail->client_id; ?>" >
        <input type="hidden" name="agency_id" value="<?php echo $detail->agency_id; ?>" >
        <input type="hidden" name="client_bio_id" value="<?php if(count($client_bio)>0){ echo $client_bio->id; } ?>" />
        <div class="modal-header">
          <h5 class="modal-title" style="margin: 0 auto;">Edit Client Bio</h5>
          <div>
            <li class="media" style="padding: unset; border: none;">
              <div class="mr-3" style="margin-right: .55rem!important;"> <a href="#"> <img src="<?php echo client_image($client->id); ?>" class="rounded-circle" width="40" height="40" alt=""> </a> </div>
              <div class="media-body">
                <div class="media-title font-weight-semibold" style="font-size: 12px; margin-bottom: 0px !important;"><?php echo $client->first_name." ".$client->last_name; ?></div>
                <span class="text-muted" style="font-size: 12px;">Total Care</span> </div>
            </li>
          </div>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Client name:</label>
                <input type="text" name="client_name" disabled="disabled" class="form-control" placeholder="Client Name" value="<?php echo $client->first_name." ".$client->last_name; ?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Client Profession:</label>
                <input type="text" name="profession" class="form-control" placeholder="Client Profession" value="<?php if(count($client_bio)>0){ echo $client_bio->profession; } ?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Profession Details:</label>
                <textarea name="details" rows="3" cols="4" placeholder="Add brief detail about client Profession" class="form-control"><?php if(count($client_bio)>0){ echo $client_bio->details; } ?>
                </textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Client's daily routine:</label>
                <textarea name="daily_routines" rows="3" cols="4" placeholder="Add brief detail about client routine" class="form-control"><?php if(count($client_bio)>0){ echo $client_bio->daily_routines; } ?>
                </textarea>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Client's likes:</label>
                <textarea name="likes" rows="3" cols="4" placeholder="Add brief detail about client likes" class="form-control"><?php if(count($client_bio)>0){ echo $client_bio->likes; } ?>
                </textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Client's dislikes:</label>
                <textarea name="dislikes" rows="3" cols="4" placeholder="Add brief detail about client dislikes" class="form-control"><?php if(count($client_bio)>0){ echo $client_bio->dislikes; } ?>
                </textarea>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Client's hobbies:</label>
                <textarea name="hobbies" rows="3" cols="4" placeholder="Add brief detail about client hobbies" class="form-control"><?php if(count($client_bio)>0){ echo $client_bio->hobbies; } ?>
                </textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Client's Favourite Music:</label>
                <textarea name="music" rows="3" cols="4" placeholder="Add brief detail about client favourite music" class="form-control"><?php if(count($client_bio)>0){ echo $client_bio->music; } ?>
                </textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in" data-spinner-size="20"> <span class="ladda-label">Done</span> </button>
        </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
function deleteClientBio(id){
  $.post("<?php echo site_url("caregiver/current_shifts/delete_client_bio");?>", {id:id}).done(function(data){
    //$("#client_bio_area").html(data);
    swal({
      title: "Good job!",
      type: 'error',
      html: 'You have deleted client bio successfully',
      allowOutsideClick: false,
    }).then(function() {
      location.reload();
    });
    // $('#client_bio_row'+id+'').remove();
  });
// swal({
//       title: 'Are you sure?',
//       text: 'You will not be able to recover clients bio data!',
//       type: 'warning',
//       showCancelButton: true,
//       confirmButtonText: 'Yes, delete it!'
//   });
}

$("#client_bio_form_<?php echo $detail->id; ?>").on("submit", function(e){
	$("#modal_clients_bio_<?php echo $detail->id; ?>").modal("hide");
	loader = CardLoader($("#client_bio_form_<?php echo $detail->id; ?>"));
	e.preventDefault();
	var formData = new FormData($(this)[0]);
	$.ajax({
		url: '<?php echo site_url("caregiver/current_shifts/client_bio_form"); ?>',
		type: 'POST',
		data: formData,
		cache: false,
		contentType: false,
		processData: false,
		success: function(e){
			loader.unblock();
			//$("#client_bio_area_<?php echo $detail->id; ?>").html(e);
			swal({
        title: "Good job!",
        type: 'success',
        html: 'You have updated client bio successfully',
        allowOutsideClick: false,
      }).then(function() {
        location.reload();
      });
			//$(".modal-backdrop").remove();
		}
	});
});
</script>
