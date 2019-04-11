<?php //print_array($file_data); ?>
  
<form id="add_shopping_recipt" method="post">
  <input type="hidden" name="module_id" value="<?php echo $result->id; ?>">
  <div class="modal-header">
    <h5 class="modal-title" style="margin: 0 auto;">Add Recipts</h5>
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
           <input type="file" class="form-input-styled edit_recipt" name="file" data-fouc>
          </div>
        </div>
      </div>
    </div>
    <?php if (count($file_data)) {
        foreach ($file_data as $file_detail) {  ?>
    <div class="row" id="list_recipt_div">
      <div class="col-md-7 offset-md-1" >
        <div class="d-flex align-items-center">
          <div class="mr-3">
            <div class="form-group pt-2">
              <div class="form-check">
                <label class="form-check-label">
                  <i style="font-size: 20px;" class="icon-file-word icon-2x"></i>
                  &nbsp;<?php echo $file_detail->name; ?>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3" style="margin-top: 8px;">
        <div class="d-flex align-items-center">
          <div class="mr-3"><a href="javascript:;" onclick="remove(<?php echo $file_detail->id; ?>)" class="text-default font-weight-semibold letter-icon-title"><i style="margin-right: 10px;" class="icon-cross3"></i>Remove</a>
          </div>
        </div>
      </div> 
    </div>
    <?php  }
      } ?>
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in"  data-spinner-size="20"> <span class="ladda-label">Done</span> </button>
    <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
  </div>
</form>

<script type="text/javascript">
  $('.edit_recipt').uniform();

  function remove(id){
    $.post("<?php echo site_url('agency/scheduling/delete_recipt'); ?>",{id:id}).done(function(e){
      $('#list_recipt_div').remove();
    });
  }

  $('#add_shopping_recipt').on('submit',function(e){
    e.preventDefault();
    loader = CardLoader($("#add_shopping_recipt"));
    var formData = new FormData($(this)[0]);
    $.ajax({
      url:'<?php echo site_url("agency/scheduling/add_recipt"); ?>',
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
          html: 'You have added recipt successfully',
          allowOutsideClick: false,
        }).then(function() {
          location.reload();
        });
        // $('#shopping_list_view').html(e);
        $('#edit_shopping_recipt_modal').modal('hide');
      }
    });
  });

</script>
    