<div id="image_cropper_modal" class="modal fade" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Crop Image</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body" id="image_cropper_modal_body"> </div>
    </div>
  </div>
</div>
<script>
function profileImageCropper(){
	$.post("<?php echo site_url("cropper"); ?>").done(function(e){
		$("#image_cropper_modal").modal("show");
		setTimeout(function(){$("#image_cropper_modal_body").html(e);}, 500)
	});
}
</script>