<?php if(count($assignedCargivers)>0){ ?>
<?php foreach($assignedCargivers as $assignedCG){ ?>
<?php $assignedCGIdImage = caregiver_image($assignedCG->caregiver_id); ?>
<ul class="fab-menu fab-menu-top-left" data-fab-toggle="hover" id="assigned_caregiver_row_id_<?php echo $assignedCG->id; ?>">
  <li> <a href=""><img src="<?php echo $assignedCGIdImage; ?>" class="fab-menu-btn rounded-circle" width="42" height="42" alt=""></a>
    <ul class="fab-menu-inner">
      <li>
        <div data-fab-label="Edit"> <a href="javascript:;" class="btn btn-info rounded-round btn-icon btn-float"> <i class="icon-pencil"></i> </a> </div>
      </li>
      <li>
        <div data-fab-label="Remove"> <a href="javascript:;" class="btn btn-danger rounded-round btn-icon btn-float" onclick="delete_assigned_caregiver(<?php echo $assignedCG->id; ?>)"> <i class="icon-bin2"></i> </a> </div>
      </li>
    </ul>
  </li>
</ul>
<?php }} ?>
