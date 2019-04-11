<?php //print_array($client);?>
<div class="datatable-scroll">
	<table class="table" id="main-datatable_1">
      <thead>
        <tr>
          <th><i style="margin-right: 8px;" class="icon-man"></i>Blood Pressure</th>
          <th><i style="margin-right: 8px; color: red;" class="icon-heart6"></i>Heart Rate</th>
          <th><i style="margin-right: 8px; color: red;" class="icon-pulse2"></i>Pulse</th>
          <th><i style="margin-right: 8px; color: green;" class="icon-stats-growth2"></i>Temperature</th>
          <th><i style="margin-right: 8px;" class="icon-calendar22"></i>Date Taken</th>
          <th class="text-center">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php if(count($vital_report_details)>0){
            foreach ($vital_report_details as $value) { ?>
        <tr id="table_row_<?php echo $value->id; ?>">
          <td><span class="text-muted"><?php echo $value->bloodpressure_from." - ".$value->bloodpressure_to; ?></span></td>
          <td><span class="text-muted"><?php echo $value->breathing_from." - ".$value->breathing_to; ?></span></td>
          <td><span class="text-muted"><?php echo $value->pulse_from." - ".$value->pulse_to; ?></span></td>
          <td><span class="text-muted"><?php echo $value->temperature; ?></span></td>
          <td><span class="text-muted"><?php echo date("d-M-Y",strtotime($value->from_date));  ?></span></td>
          <td class="text-center"><div class="list-icons">
              <div class="dropdown"> <a href="#" class="list-icons-item" data-toggle="dropdown"> <i class="icon-menu9"></i> </a>
                <!-- <div class="dropdown-menu dropdown-menu-right"> <a href="javascript:;" onclick="edit_vital_reports(<?php
                $value->id; ?>)" class="dropdown-item"><i class="icon-square-right"></i> Edit Vitals Report</a> <a href="#" class="dropdown-item"><i class="icon-bin2"></i> Delete Vital Report</a> <a href="#" class="dropdown-item"><i class="icon-square-down"></i> End Vital Report</a> </div>
              </div> -->
              <div class="dropdown-menu dropdown-menu-right"> <a href="javascript:;" onclick="edit_vital_reports(<?php echo $value->id; ?>)" class="dropdown-item"><i class="icon-square-right"></i> Edit vitals</a> <a href="javascript:;" onclick="delete_vital_reports(<?php echo $value->id; ?>)" class="dropdown-item"><i class="icon-bin2"></i> Delete vital records</a><a href="<?php echo site_url("pdf/VitalReportsPdf/export_vital_reports_to_pdf/".$value->id.""); ?>" class="dropdown-item"><i class="icon-file-pdf"></i> Export to pdf</a> </div>
            </div></td>
        </tr>
        <?php }
      } ?>
      </tbody>
    </table>
</div>

 <script src="<?php echo base_url(); ?>assets/js/plugins/tables/datatables/datatables.min.js"></script> 

<script type="text/javascript">

$("#main-datatable_1").DataTable({
	autoWidth: false,
	columnDefs: [{ 
		orderable: false,
		width: 100,
		targets: [ 5 ]
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