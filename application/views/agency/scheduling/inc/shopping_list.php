<?php //print_array($shopping_list_detail); ?>

<script src="<?php echo base_url(); ?>assets/js/plugins/uploaders/fileinput/fileinput.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/uploader_bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/client_form_wizard.js"></script>


<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-12" style="text-align: center;"> <a href="javascript:;" data-toggle="modal" data-target="#add_modal_shopping_list">Create new shopping list
        <button style="background-color: #f5f5f5; margin-left: 15px;" type="button" class="btn alpha-primary text-primary-800 btn-icon rounded-round ml-2 legitRipple"><i style="color: #555;" class="icon-plus3"></i></button>
        </a> 
      </div>
    </div>
    <div class="row">
      <div class="col-md-12" id="shopping_list_view">
        <?php include(APPPATH."views/agency/scheduling/inc/shopping_list/list_view_shopping.php"); ?>
      </div>
    </div>
  </div>
</div>


<div id="add_modal_shopping_list" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="add_client_shopping_form" method="post" >
        <div class="modal-header">
          <div class="col-md-3">
            <select name="status" class="form-control form-control-select2" data-fouc>
                <option value="Pending">Pending</option>
                <option value="Complete">Complete</option> 
            </select>
          </div>
          <h5 class="modal-title" style="margin: 0 auto;">Add Shopping List</h5>
          <div>
          	<li class="media">
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
							   <input type="file" class="form-input-styled" name="file" data-fouc>
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
    								<input type="text" class="form-control border-right-0" id="list_detail" placeholder="Add to my shopping list">
                    <input type="hidden" name="counter" value="1">
    								<span class="input-group-append">
    									<button class="btn bg-blue" onclick="add_list()" type="button">Add<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
    								</span>
    							</div>
    						</div>
    					</div>
            </div>
            <div class="col-md-8 offset-md-1" id="list_detail_div">
					    <!-- <div class="d-flex align-items-center">
                <div class="mr-3">
                  <div class="form-group pt-2">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input-styled" data-fouc>hjghjgf
                      </label>
                    </div>
                  </div>
                </div>
                <div class="mr-3" style="margin-bottom: 7px;"><a href="#" class="text-default font-weight-semibold letter-icon-title"><i style="margin-right: 10px;" class="icon-cross3"></i>Remove</a>
                </div>
              </div> -->
				    </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in"  data-spinner-size="20"> <span class="ladda-label">Done</span> </button>
          <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div id="edit_modal_shopping_list" class="modal fade" tabindex="-2">
  <div class="modal-dialog">
    <div class="modal-content" id="edit_shopping_div">
      
    </div>
  </div>
</div>

<script type="text/javascript">

  function add_list(){
    var counter = $("input[name=counter]").val();
    var val = $("#list_detail").val();
    $("#list_detail_div").append('<div class="row" id="list_row_'+counter+'"><div class="col-md-6"  style="margin-top: 3px;"><input type="hidden" name="list_detail[]" value="'+val+'"><div class="form-group pt-2"><div class="form-check"><label class="form-check-label"><input type="checkbox" name="is_pulse" checked class="form-check-input-styled" disabled data-fouc>'+val+'</label></div></div> </div><div class="col-md-6"><a style="float:right; margin-top: 11px;" href="javascript:;" onclick="remove('+counter+')" class="text-default font-weight-semibold letter-icon-title"><i style="margin-right: 7px;" class="icon-cross3"></i>Remove</a></div> ');
    counter = parseInt(counter)+1;
    $("input[name=counter]").val(counter);
    $('.form-check-input-styled').uniform();
  }
  function remove(id){
    $("#list_row_"+id+"").remove();
  }

  $('#add_client_shopping_form').on('submit',function(e){
    e.preventDefault();
    loader = CardLoader($("#add_client_shopping_form"));
    var formData = new FormData($(this)[0]);
    formData.append('client_id',<?php echo $client_id; ?>);
    $.ajax({
      url:'<?php echo site_url("agency/scheduling/add_new_shopping"); ?>',
      type:'post',
      data:formData,
      cache: false,
      contentType: false,
      processData: false,
      success: function(e){
        // console.log(e);
        // return false;
        loader.unblock();
        swal({
          title: "Good job!",
          type: 'success',
          html: 'You have added shopping list successfully',
          allowOutsideClick: false,
        }).then(function() {
          location.reload();
        });
        $('#shopping_list_view').html(e);
        $('#add_modal_shopping_list').modal('hide');
      }
    });
  });
  function edit_shopping(id){
    //alert(id);
    $.post("<?php echo site_url('agency/scheduling/edit_shopping'); ?>", {id:id}).done(function(data){
      $('#edit_shopping_div').html(data);
      $("#edit_modal_shopping_list").modal('show');
    });
  }
  function delete_shopping(id){
    //alert(id);
    $.post("<?php echo site_url('agency/scheduling/delete_shopping'); ?>", {id:id}).done(function(data){
        $("#shopping_list_row_"+id+"").remove();
        swal({
          title: "Good job!",
          type: 'error',
          html: 'You have deleted shopping list successfully',
          allowOutsideClick: false,
        }).then(function() {
          location.reload();
        });
    });
  }



</script>