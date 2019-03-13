<div class="col-md-8">
<div class="row">
    <div class="col-md-6 text-center">
    <p style="margin-bottom: 0; color: #00bcd4;"><?php echo $state_license; ?>
    <p style="position: relative; font-size: 12px; color: #B4B8BA;">Valid until <?php echo $valid_to_month.", ".$valid_to_year; ?></p>
    </div>
    <div class="col-md-6 text-center">
    <span style="position: relative; color: #00bcd4"><strong style="font-size: 24px; position: relative; top: 2px;">
        <?php $fromDate = date("Y-m-d"); $toDate = date("".$valid_to_year."-".$valid_to_month."-d"); $difference = $this->common_model->dateDifferanceTwoDates($fromDate, $toDate); echo $difference['days'];?>
    </strong>&nbsp;Days to expire</span>
    </div>
</div>
</div>
<div class="col-md-4 text-center">
<div class="btn-group ml-1">
    <button type="button" class="btn bg-transparent text-slate-600 border-slate dropdown-toggle" data-toggle="dropdown">Edit</button>
    <div class="dropdown-menu dropdown-menu-right"> <a href="javascript:;" class="dropdown-item" data-toggle="modal" data-target="modal_edit_license" onclick="edit_license('<?php echo $id; ?>')"><i class="icon-database-edit2"></i> Edit</a> 
    <a href="javascript:;" class="dropdown-item" onclick="delete_license('<?php echo $id; ?>')"><i class="icon-bin2"></i> Delete</a> </div>
</div>
</div>