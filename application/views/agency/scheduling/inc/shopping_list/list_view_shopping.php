<?php //print_array($shopping_list_detail); ?>
<table class="table datatable-basic" id="shopping-list-datatable">
  <thead>
    <tr>
      <th>Date Created</th>
      <th>Status</th>
      <th>Shopping Reminder</th>
      <th>Reciepts</th>
      <th class="text-center">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php if (count($shopping_list_detail)>0) {
        foreach ($shopping_list_detail as $detail) { ?>
    <tr id="shopping_list_row_<?php echo $detail->id; ?>">
      <td><span class="text-muted"><?php echo date("M d, Y",strtotime($detail->created_at)); ?></span></td>
      <td><span class="text-muted"><?php echo $detail->status; ?></span></td>
      <td><span class="text-muted">10 Minutes before</span></td>
      <td><a href="javascript:;" onclick="add_recipt(<?php echo $detail->id; ?>)"><i style="font-size: 20px;" class="icon-file-word"></i></a></td>
      <td class="text-center"><div class="list-icons">
          <div class="dropdown"> <a href="#" class="list-icons-item" data-toggle="dropdown"> <i class="icon-menu9"></i> </a>
            <div class="dropdown-menu dropdown-menu-right"> <a href="javascript:;" onclick="edit_shopping(<?php echo $detail->id; ?>)" class="dropdown-item"><i class="icon-square-right"></i> Edit shopping list</a> <a href="javascript:;" onclick="delete_shopping(<?php echo $detail->id; ?>)" class="dropdown-item"><i class="icon-bin2"></i> Delete shopping list</a> <a href="#" class="dropdown-item"><i class="icon-square-down"></i> End shopping list</a> </div>
          </div>
        </div></td>
    </tr>
    <?php   } 
    } ?>
  </tbody>
</table>
<div id="add_recipt_modal" class="modal fade" tabindex="-3">
  <div class="modal-dialog">
    <div class="modal-content" id="shopping_recipt_div">
      <form id="add_shopping_recipt" method="post">
        <div class="modal-header">
          <!-- <div class="col-md-3">
            <select name="status" class="form-control form-control-select2" data-fouc>
                <option value="Pending">Pending</option>
                <option value="Complete">Complete</option> 
            </select>
          </div> -->
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
                 <input type="file" class="form-input-styled" name="file" data-fouc>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="row">
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
            <!--</div>
          </div> -->
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in"  data-spinner-size="20"> <span class="ladda-label">Done</span> </button>
          <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="<?php echo base_url(); ?>assets/js/plugins/tables/datatables/datatables.min.js"></script> 
<script>
  
$("#shopping-list-datatable").DataTable({
  autoWidth: false,
  columnDefs: [{ 
    orderable: false,
    width: 100,
    targets: [ 4 ]
  }],
  dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
  language: {
    search: '<span>Filter:</span> _INPUT_',
    searchPlaceholder: 'Type to filter...',
    lengthMenu: '<span>Show:</span> _MENU_',
    paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
  }
});

function add_recipt(){
  $('#add_recipt_modal').modal('show');
  var formData = new FormData($('#add_shopping_recipt')[0]);
  formData.append('id',id);
  $.ajax({
    url:'<?php echo site_url("agency/scheduling/add_recipt"); ?>',
    type:'post',
    data:formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function(e){
      console.log(e);
      return false;
      loader.unblock();
      swal({
        title: "Good job!",
        type: 'success',
        html: 'You have added shopping list successfully',
        allowOutsideClick: false,
      }).then(function() {
        location.reload();
      });
      $('#').html(e);
      $('#').modal('hide');
    }
  });
}

</script>