
<?php //print_array($state_license); ?>
<div class="row" id="license_row" style="margin-top: 10px; text-align: center;">
  <div class="offset-md-1 col-md-4"><?php echo $state_license; ?></div>
  <div class="col-md-4">
    
    <?php
  $fromDate = date("Y-m-d");
  $toDate = date("".$valid_to_year."-".$valid_to_month."-d");
  $difference = $this->common_model->dateDifferanceTwoDates($fromDate, $toDate);
    echo $difference['days'];
  ?>
  <?php echo $valid_to_month.", ".$valid_to_year; ?>
  </div>
  <div class="col-md-3">
    <button type="button" class="btn bg-transparent text-slate-600 border-slate dropdown-toggle" data-toggle="dropdown">Edit</button>
      <div class="dropdown-menu dropdown-menu-right"> <a href="javascript:;" class="dropdown-item" onclick="edit_license()"><i class="icon-database-edit2"></i> Edit</a> <a href="javascript:;" class="dropdown-item" onclick="delete_license()"><i class="icon-bin2"></i> Delete</a> 
  </div>
</div>
</div>