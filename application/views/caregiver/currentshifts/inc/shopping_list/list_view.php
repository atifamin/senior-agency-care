<?php //print_array($detail);
$shopping_list_detail = $this->common_model->listingResultWhere('client_id',$detail->client_id,"client_shopping_list");?>
<?php //print_array($shopping_list_detail); ?>
<table class="table datatable-basic" id="shopping-list-datatable-current-shift_<?php echo $detail->id; ?>">
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
        foreach ($shopping_list_detail as $value) { ?>
    <tr id="shopping_list_row_<?php echo $detail->id; ?>">
      <td><span class="text-muted"><?php echo date("M d, Y",strtotime($value->created_at)); ?></span></td>
      <td><span class="text-muted"><?php echo $value->status; ?></span></td>
      <td><span class="text-muted">10 Minutes before</span></td>
      <td><a href="#"><i style="font-size: 20px;" class="icon-file-word"></i></a></td>
      <td class="text-center"><div class="list-icons">
          <div class="dropdown"> <a href="#" class="list-icons-item" data-toggle="dropdown"> <i class="icon-menu9"></i> </a>
            <div class="dropdown-menu dropdown-menu-right"> <a href="javascript:;" onclick="edit_shopping(<?php echo $value->id; ?>)" class="dropdown-item"><i class="icon-square-right"></i> Edit shopping list</a> <a href="javascript:;" onclick="delete_shopping(<?php echo $value->id; ?>)" class="dropdown-item"><i class="icon-bin2"></i> Delete shopping list</a> <a href="#" class="dropdown-item"><i class="icon-square-down"></i> End shopping list</a> </div>
          </div>
        </div></td>
    </tr>
    <?php   } 
    } ?>
  </tbody>
</table>

<script src="<?php echo base_url(); ?>assets/js/plugins/tables/datatables/datatables.min.js"></script> 
<script>
  
$("#shopping-list-datatable-current-shift_<?php echo $detail->id; ?>").DataTable({
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


</script> 