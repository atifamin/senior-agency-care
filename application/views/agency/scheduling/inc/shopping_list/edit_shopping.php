<?php //print_array($result->list_detail); ?>


<form id="update_client_shopping_form" method="post" >
	<input type="hidden" name="shopping_id" value="<?php echo $result->id; ?>">
  <div class="modal-header">
    <h5 class="modal-title" style="margin: 0 auto;">Update Shopping List</h5>
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
				   <input type="file" class="form-input-styled" id="file_input" name="file" data-fouc>
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
              				<input type="hidden" name="count" value="1">
							<span class="input-group-append">
								<button class="btn bg-blue" onclick="update_list()" type="button">Add<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
							</span>
						</div>
					</div>
				</div>
      </div>
      <div class="col-md-8 offset-md-1" id="list_detail_edit_div">
      	<?php $detail_list = json_decode($result->list_detail); ?>
	    <?php foreach ($detail_list as $key=>$value) { ?>
	    <!-- <div class="d-flex align-items-center">
	        <div class="mr-3">
	          <div class="form-group pt-2">
	            <div class="form-check">
	              <label class="form-check-label">
	                <input type="checkbox" class="form-check-input-styled" data-fouc><?php echo $value; ?>
	              </label>
	            </div>
	          </div>
	        </div>
	        <div class="mr-3" style="margin-bottom: 7px;"><a href="#" class="text-default font-weight-semibold letter-icon-title"><i style="margin-right: 10px;" class="icon-cross3"></i>Remove</a>
	        </div>
	    </div> -->

	    <div style="margin-top: 8px;">
	    	<?php echo $value; ?>
	    	<a href="#" style="float:right" class="text-default font-weight-semibold letter-icon-title">
	    		<i style="margin-right: 7px;" class="icon-cross3"></i>Remove</a>
	    </div>

		<?php	}
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
		var count = $("input[name=count]").val();
	    var value = $("#list_detail_edit").val();
	    $("#list_detail_edit_div").append('<div id="list_row_'+count+'" style="margin-top: 8px;"><input type="hidden" name="list_detail[]" value="'+value+'" >'+value+'<a style="float:right" href="javascript:;" onclick="remove('+count+')" class="text-default font-weight-semibold letter-icon-title"><i style="margin-right: 7px;" class="icon-cross3"></i>Remove</a></div> ');
	    count = parseInt(count)+1;
	    $("input[name=count]").val(count);
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
				loader.unblock();
			}
		});
	});


</script>