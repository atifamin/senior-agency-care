<?php //print_array($client); ?>


<form id="update_client_shopping_form" method="post" >
	<input type="hidden" name="shopping_id" value="<?php echo $result->id; ?>">
  <div class="modal-header">
  	<div class="col-md-3">
        <select name="status" class="form-control form-control-select2 edit_form_status" data-fouc>
            <option value="Pending">Pending</option>
            <option value="Complete">Complete</option> 
        </select>
      </div>
    <h5 class="modal-title" style="margin: 0 auto;">Update Shopping List</h5>
    <div>
    	<li class="media" style="padding: unset; border: none;">
			<div class="mr-3" style="margin-right: .55rem!important;">
				<a href="#">
					<img src="<?php echo client_image($client->id); ?>" class="rounded-circle" width="40" height="40" alt="">
				</a>
			</div>
			<div class="media-body">
				<div class="media-title font-weight-semibold" style="font-size: 12px; margin-bottom: 0px !important;"><?php echo $client->first_name." ".$client->last_name; ?></div>
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
				   <input type="file" class="form-input-styled" id="file_input" name="file" value="" data-fouc>
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
							<input type="text" class="form-control border-right-0" id="list_detail_edit" placeholder="Add to my shopping list">
              				<input type="hidden" name="counter" value="1">
							<span class="input-group-append">
								<button class="btn bg-blue" onclick="update_list()" type="button">Add<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
							</span>
						</div>
					</div>
				</div>
      </div>
      <div class="col-md-8 offset-md-1" id="list_detail_edit_div">
      	<?php $detail_list = json_decode($result->list_detail); ?>
      	<?php if (isset($detail_list)) {
	    	foreach ($detail_list as $key=>$value) { ?>
	    <div class="row" style="margin-top: 8px;" id="list_row_<?php echo $key; ?>">
	    	<!-- <input type="hidden" name="list_detail[]" value="<?php echo $value; ?>">
	    	<input type="checkbox" class="form-check-input-styled-check" checked disabled>&nbsp;&nbsp;<?php echo $value; ?>
	    	<a href="javascript:;" onclick="remove(<?php echo $key; ?>)"; style="float:right" class="text-default font-weight-semibold letter-icon-title">
	    		<i style="margin-right: 7px;" class="icon-cross3"></i>Remove</a> -->
	    		<!-- <div class="row"> -->
	    			<div class="col-md-6">
	    				<input type="hidden" name="list_detail[]" value="<?php echo $value; ?>">
	    				<div class="form-group pt-2">
	    					<div class="form-check">
	    						<label class="form-check-label">
	    							<input type="checkbox" class="form-check-input-styled-check" checked disabled>&nbsp;&nbsp;<?php echo $value; ?></label>
	    					</div>
	    				</div> 
	    			</div>
	    			<div class="col-md-6">
	    				<a href="javascript:;" onclick="remove(<?php echo $key; ?>)"; style="float:right; margin-top: 10px;" class="text-default font-weight-semibold letter-icon-title">
	    				<i style="margin-right: 7px;" class="icon-cross3"></i>Remove</a>
	    			</div>
	    </div>

		<?php	}
		}
	    ?>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in"  data-spinner-size="20"> <span class="ladda-label">Done</span> </button>
    <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
  </div>
</form>

<script type="text/javascript">
	function update_list(){
		var counter = $("input[name=counter]").val();
	    var value = $("#list_detail_edit").val();
	    $("#list_detail_edit_div").append('<div class="row" id="list_row_'+counter+'"><div class="col-md-6"  style="margin-top: 3px;"><input type="hidden" name="list_detail[]" value="'+value+'"><div class="form-group pt-2"><div class="form-check"><label class="form-check-label"><input type="checkbox" name="is_pulse" checked class="form-check-input-styled" disabled data-fouc>'+value+'</label></div></div> </div><div class="col-md-6"><a style="float:right; margin-top: 10px;" href="javascript:;" onclick="remove('+counter+')" class="text-default font-weight-semibold letter-icon-title"><i style="margin-right: 7px;" class="icon-cross3"></i>Remove</a></div> ');
	    counter = parseInt(counter)+1;
	    $("input[name=counter]").val(counter);
	    $('.form-check-input-styled').uniform();
	}
	
	function remove(id){
		$("#list_row_"+id+"").remove();
	} 
	

	$('#update_client_shopping_form').on("submit",function(e){
		e.preventDefault();
		loader = CardLoader($("#edit_modal_shopping_list"));
		var formData = new FormData($(this)[0]);
		$.ajax({
			url:'<?php echo site_url('agency/scheduling/update_shopping'); ?>',
			type:'post',
			data:formData,
			cache: false,
			contentType: false,
			processData: false,
			success:function(data){
				$("#shopping_list_view").html(data);
				$("#edit_modal_shopping_list").modal("hide");
				swal({
		          title: "Good job!",
		          type: 'success',
		          html: 'You have updated shopping list successfully',
		          allowOutsideClick: false,
		        }).then(function() {
		          location.reload();
		        });
				loader.unblock();
			}
		});
	});

$('.form-input-styled').uniform();
$('.edit_form_status').uniform();
$(".form-check-input-styled-check").uniform();

</script>