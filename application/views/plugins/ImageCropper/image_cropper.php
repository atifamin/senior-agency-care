<script src="<?php echo base_url(); ?>assets/js/plugins/media/cropper.min.js"></script>
<style>
.preview {
	border-radius: 100px !important;
}
</style>
<div class="row">
  <div class="col-md-9">
    <div class="image-cropper-container mb-3"> <img src="<?php echo base_url(); ?>assets/images/placeholders/placeholder.jpg" alt="" class="profileCropper" id="profile-cropper-image"> </div>
    <div class="form-group profile-cropper-toolbar">
      <label class="font-weight-semibold">Toolbar:</label>
      <div class="btn-group btn-group-justified">
        <div class="btn-group">
          <button type="button" class="btn bg-blue btn-icon" data-method="setDragMode" data-option="move" title="Move"> <span class="icon-move"></span> </button>
        </div>
        <div class="btn-group">
          <button type="button" class="btn bg-blue btn-icon" data-method="setDragMode" data-option="crop" title="Crop"> <span class="icon-crop2"></span> </button>
        </div>
        <div class="btn-group">
          <button type="button" class="btn bg-blue btn-icon" data-method="move" data-option="-10" data-second-option="0" title="Move Left"> <span class="icon-arrow-left13"></span> </button>
        </div>
        <div class="btn-group">
          <button type="button" class="btn bg-blue btn-icon" data-method="move" data-option="10" data-second-option="0" title="Move Right"> <span class="icon-arrow-right14"></span> </button>
        </div>
        <div class="btn-group">
          <button type="button" class="btn bg-blue btn-icon" data-method="move" data-option="0" data-second-option="-10" title="Move Up"> <span class="icon-arrow-up13"></span> </button>
        </div>
        <div class="btn-group">
          <button type="button" class="btn bg-blue btn-icon" data-method="move" data-option="0" data-second-option="10" title="Move Down"> <span class="icon-arrow-down132"></span> </button>
        </div>
      </div>
    </div>
    <div class="form-group profile-cropper-toolbar">
      <div class="btn-group btn-group-justified">
        <div class="btn-group">
          <button type="button" class="btn bg-blue btn-icon" data-method="zoom" data-option="0.1" title="Zoom In"> <span class="icon-zoomin3"></span> </button>
        </div>
        <div class="btn-group">
          <button type="button" class="btn bg-blue btn-icon" data-method="zoom" data-option="-0.1" title="Zoom Out"> <span class="icon-zoomout3"></span> </button>
        </div>
        <div class="btn-group">
          <button type="button" class="btn bg-blue btn-icon" data-method="rotate" data-option="-45" title="Rotate Left"> <span class="icon-rotate-ccw3"></span> </button>
        </div>
        <div class="btn-group">
          <button type="button" class="btn bg-blue btn-icon" data-method="rotate" data-option="45" title="Rotate Right"> <span class="icon-rotate-cw3"></span> </button>
        </div>
        <div class="btn-group">
          <button type="button" class="btn bg-blue btn-icon" data-method="scaleX" data-option="-1" title="Flip Horizontal"> <span class="icon-flip-vertical4"></span> </button>
        </div>
        <div class="btn-group">
          <button type="button" class="btn bg-blue btn-icon" data-method="scaleY" data-option="-1" title="Flip Vertical"> <span class="icon-flip-vertical3"></span> </button>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="input-group file-caption-main">
        <div class="input-group-btn input-group-append" style="margin-left:0px;">
          <button type="button" tabindex="500" title="Clear selected files" class="btn btn-default btn-secondary fileinput-remove fileinput-remove-button legitRipple" onclick="clearCropper()"><i class="icon-cross2 font-size-base mr-2"></i> <span class="hidden-xs">Remove</span></button>
          <button type="button" tabindex="500" title="Abort ongoing upload" class="btn btn-default btn-secondary kv-hidden fileinput-cancel fileinput-cancel-button legitRipple"><i class="glyphicon glyphicon-ban-circle"></i> <span class="hidden-xs">Cancel</span></button>
          <button type="button" tabindex="500" title="Upload selected files" class="btn btn-default btn-secondary fileinput-upload fileinput-upload-button legitRipple" onclick="download_cropped_image()"><i class="icon-file-upload2 mr-2"></i> <span class="hidden-xs">Upload</span></button>
          <div tabindex="500" class="btn btn-primary btn-file legitRipple"><i class="icon-file-plus mr-2"></i> <span class="hidden-xs">Browse</span>
            <input type="file" class="file-input-preview" data-show-remove="true" data-fouc="" id="inputImage">
          </div>
          <button type="button" tabindex="500" class="btn btn-default btn-light btn-secondary fileinput-upload fileinput-upload-button legitRipple" style="border: 1px solid #777777;" onclick="cancelCropper()"><i class="icon-cross2 font-size-base mr-2"></i> <span class="hidden-xs">Cancel</span></button>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="mb-3 text-center">
      <div class="eg-preview d-md-flex justify-content-md-center align-items-md-center text-center">
        <div class="preview preview-lg d-md-inline-block mt-3 mx-auto mr-md-0 mt-md-0 ml-md-3 overflow-hidden rounded"></div>
      </div>
    </div>
  </div>
</div>
<script>
function clearCropper(){
	$("#image_cropper_modal").modal("hide");
	$("#image_cropper_modal_body").html("");
}
function cancelCropper(){
	$("#image_cropper_modal").modal("hide");
	$("#image_cropper_modal_body").html("");
}
/*var $cropper = $('.profileCropper'),
	$image = $('#profile-cropper-image'),
	$download = $('#download'),
	$dataX = $('#dataX'),
	$dataY = $('#dataY'),
	$dataHeight = $('#dataHeight'),
	$dataWidth = $('#dataWidth'),
	$dataScaleX = $('#dataScaleX'),
	$dataScaleY = $('#dataScaleY'),
	options = {
		aspectRatio: 1,
		preview: '.preview',
		crop: function (e) {
			$dataX.val(Math.round(e.x));
			$dataY.val(Math.round(e.y));
			$dataHeight.val(Math.round(e.height));
			$dataWidth.val(Math.round(e.width));
			$dataScaleX.val(e.scaleX);
			$dataScaleY.val(e.scaleY);
		}
	};

// Initialize cropper with options
$cropper.cropper(options);

// Cropper toolbar
$('.profile-cropper-toolbar').on('click', '[data-method]', function () {
	var $this = $(this),
		data = $this.data(),
		$target,
		result;
	if ($image.data('cropper') && data.method) {
		data = $.extend({}, data);
		if (typeof data.target !== 'undefined') {
			$target = $(data.target);
			if (typeof data.option === 'undefined') {
				data.option = JSON.parse($target.val());
			}
		}
		result = $image.cropper(data.method, data.option, data.secondOption);
	}
});*/

var $image = $("#profile-cropper-image");
$($image).cropper({
	aspectRatio: 1,
	preview: ".preview",
	done: function(data) {
		// Output the result data for cropping image.
	}
});


var $inputImage = $("#inputImage");
if (window.FileReader) {
	$inputImage.change(function() {
		var fileReader = new FileReader(),
				files = this.files,
				file;

		if (!files.length) {
			return;
		}

		file = files[0];

		if (/^image\/\w+$/.test(file.type)) {
			fileReader.readAsDataURL(file);
			fileReader.onload = function () {
				$inputImage.val("");
				$image.cropper("reset", true).cropper("replace", this.result);
			};
		} else {
			showMessage("Please choose an image file.");
		}
	});
} else {
	$inputImage.addClass("hide");
}


/*$("#download").click(function() {
	var result = $image.cropper("getCroppedCanvas");
	var ImageURL = result.toDataURL('image/jpeg');
	var block = ImageURL.split(";");
	var contentType = block[0].split(":")[1];// In this case "image/gif"
	var realData = block[1].split(",")[1];
	var blob = b64toBlob(realData, contentType);
	return blob;
});*/

function download_cropped_image(){
	var result = $image.cropper("getCroppedCanvas");
	var ImageURL = result.toDataURL('image/jpeg');
	var block = ImageURL.split(";");
	var contentType = block[0].split(":")[1];// In this case "image/gif"
	var realData = block[1].split(",")[1];
	var blob = b64toBlob(realData, contentType);
	$AppMaster.profileCropper.blob = blob;
	$("#image_cropper_modal").modal("hide");
	$("#croppedImageShow > img").css("border-radius", "100px");
	$("#croppedImageShow > img").attr("src", ImageURL);
	$("#croppedImageShow").show();
}

			
			
function b64toBlob(b64Data, contentType, sliceSize) {
	contentType = contentType || '';
	sliceSize = sliceSize || 512;
	
	var byteCharacters = atob(b64Data);
	var byteArrays = [];
	
	for (var offset = 0; offset < byteCharacters.length; offset += sliceSize) {
		var slice = byteCharacters.slice(offset, offset + sliceSize);
	
		var byteNumbers = new Array(slice.length);
		for (var i = 0; i < slice.length; i++) {
			byteNumbers[i] = slice.charCodeAt(i);
		}
	
		var byteArray = new Uint8Array(byteNumbers);
	
		byteArrays.push(byteArray);
	}
	
	var blob = new Blob(byteArrays, {type: contentType});
	return blob;
}

</script>