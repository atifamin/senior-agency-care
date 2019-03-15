<?php if(count($assignedCargivers)>0){ ?>
<?php foreach($assignedCargivers as $assignedCG){ ?>
<?php $assignedCGIdImage = caregiver_image($assignedCG->caregiver_id); ?>
<div class="list-icons"> <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $assignedCGIdImage; ?>" class="rounded-circle" width="42" height="42" alt=""></a>
  <div class="dropdown-menu dropdown-menu-right"> <a href="#" class="dropdown-item">Delete</a> </div>
</div>
<?php }} ?>
