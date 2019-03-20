<?php if(count($assignedCargivers)>0){ ?>
<?php foreach($assignedCargivers as $assignedCG){ ?>
<?php $assignedCGIdImage = caregiver_image($assignedCG->caregiver_id); ?>
<div class="list-icons" id="assigned_caregiver_row_id_<?php echo $assignedCG->id; ?>"> <a href="javascript:;" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $assignedCGIdImage; ?>" class="rounded-circle" width="42" height="42" alt=""></a>
  <div class="dropdown-menu dropdown-menu-right"> <a href="javascript:;" class="dropdown-item" onclick="delete_assigned_caregiver(<?php echo $assignedCG->id; ?>)">Delete</a> </div>
</div>
<?php }} ?>
