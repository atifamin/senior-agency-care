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
      <td><a href="javascript:;" onclick="edit_recipt(<?php echo $detail->id; ?>)"><i style="font-size: 20px;" class="icon-file-word"></i></a></td>
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

// function add_recipt(){
//   $('#add_recipt_modal').modal('show');
//   var formData = new FormData($('#add_shopping_recipt')[0]);
//   formData.append('id',id);
//   $.ajax({
//     url:'<?php //echo site_url("agency/scheduling/add_recipt"); ?>',
//     type:'post',
//     data:formData,
//     cache: false,
//     contentType: false,
//     processData: false,
//     success: function(e){
//       console.log(e);
//       return false;
//       loader.unblock();
//       swal({
//         title: "Good job!",
//         type: 'success',
//         html: 'You have added shopping list successfully',
//         allowOutsideClick: false,
//       }).then(function() {
//         location.reload();
//       });
//       $('#').html(e);
//       $('#').modal('hide');
//     }
//   });
// }

</script>