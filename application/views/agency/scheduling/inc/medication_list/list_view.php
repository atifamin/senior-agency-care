<?php //print_array($client); ?>
<div class="datatable-scroll">
  <table class="table" id="main-datatable">
    <thead>
      <tr>
        <th>Medication</th>
        <th><i style="margin-right: 8px;" class="icon-aid-kit"></i>Qty of Medication</th>
        <th><i style="margin-right: 8px;" class="icon-menu7"></i>Times taken a day</th>
        <th><i style="margin-right: 8px;" class="icon-alarm"></i>When to take medication</th>
        <th><i style="margin-right: 8px;" class="icon-calendar3"></i>Time of day</th>
        <th><i style="margin-right: 8px;" class="icon-alarm"></i>Reminder</th>
        <th class="text-center">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php if(count($medication_detail)>0){
                foreach ($medication_detail as $value) { ?>
      <tr id="table_row_<?php echo $value->id; ?>">
        <td><span class="text-muted"><?php echo $value->medication_name; ?></span></td>
        <td><span class="text-muted"><?php echo $value->medication_dosage; ?></span></td>
        <td><span class="text-muted"><?php echo $value->how_many_times_day; ?></span></td>
        <td><span class="text-muted"><?php echo $value->day_period_time ; ?></span></td>
        <td><span class="text-muted"><?php echo $value->day_time; ?></span></td>
        <td><span class="text-muted"><?php echo $value->is_caregiver_reminder; ?></span></td>
        <td class="text-center"><div class="list-icons">
            <div class="dropdown"> <a href="#" class="list-icons-item" data-toggle="dropdown"> <i class="icon-menu9"></i> </a>
              <div class="dropdown-menu dropdown-menu-right"> <a href="javascript:;" onclick="edit_medication(<?php echo $value->id; ?>)" class="dropdown-item"><i class="icon-square-right"></i> Edit Medication</a> <a href="javascript:;" onclick="delete_medication(<?php echo $value->id; ?>)" class="dropdown-item"><i class="icon-bin2"></i> Delete Medication</a> <a href="#" class="dropdown-item"><i class="icon-square-down"></i> End Medication</a> <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a> </div>
            </div>
          </div></td>
      </tr>
      <?php }
          } ?>
    </tbody>
  </table>
</div>
<script src="<?php echo base_url(); ?>assets/js/plugins/tables/datatables/datatables.min.js"></script> 
<script>
  
$("#main-datatable").DataTable({
	autoWidth: false,
	columnDefs: [{ 
		orderable: false,
		width: 100,
		targets: [ 6 ]
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