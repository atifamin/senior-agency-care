<?php //print_array($shopping_list_detail); ?>
<table class="table datatable-basic" id="shopping_list_datatable">
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
      <td><span class="text-muted"><?php echo $detail->created_at; ?></span></td>
      <td><span class="text-muted">Complete</span></td>
      <td><span class="text-muted">10 Minutes before</span></td>
      <td><a href="#"><i style="font-size: 20px;" class="icon-file-word"></i></a></td>
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