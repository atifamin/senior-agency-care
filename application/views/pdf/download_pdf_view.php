<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  text-align: center;;
}
.caregiver_td{
	text-align: left;
}

</style>
</head>
<body>
<?php //print_array($first_date);?>
  <div class="row">
    <div class="col-md-12">
      <div class="">
        <img src="<?php echo base_url();?>assets/images/logo_demo.png" class="mb-3 mt-2" alt="" style="width: 120px;">
        <ul class="list list-unstyled mb-0" style="list-style: none;">
          <li>2269 Elba Lane</li>
          <li>Paris, France</li>
          <li>888-555-2311</li>
        </ul>
      </div>
    </div>
  </div>
<div class="header" style="text-align: center; padding-top: 40px; padding-bottom: 40px;">
  <div>
    <h2 class="modal-title" style="margin: 0 auto;"><?php echo $client->first_name." ".$client->last_name;?>&nbsp;Schedule</h2>
  </div>
	<div class="row" style="text-align: center; margin-top: 10px;">
    <div class="col-md-12">
      <button type="button" class="btn btn-light daterange-predefined legitRipple">
        <i class="icon-calendar22 mr-2"></i><!-- <?php echo date("d-M-Y",strtotime($value->from_date));  ?> -->
        <span><?php echo date("F d,Y",strtotime($first_date))." - ".date("F d,Y",strtotime($first_date)); ?></span>
      </button>
    </div>
</div>
</div>

<table>
  <tr>
    <th>Caregiver</th>
    <?php foreach($rawDates as $key1=>$val1): ?>
    <th><?php echo date("l", strtotime($val1)) ?></th>
	<?php endforeach; ?>
  </tr>
  <?php foreach ($caregivers as $caregiver) { ?>
  <tr>
    <td class="caregiver_td"><?php echo $caregiver->first_name." ".$caregiver->last_name;?></td>
    <?php foreach($rawDates as $key1=>$val1): ?>
    <td>
    	<?php
    		foreach($client_appointements as $cp):
    			if($cp->caregiver_id==$caregiver->id && date("Y-m-d", strtotime($cp->from))==$val1){
    				echo "<p>".date("h:i A", strtotime($cp->from))." <br> ".date("h:i A", strtotime($cp->to))."</p>";
    			}
    		endforeach;
    	?>
    	
    </td>
	<?php endforeach; ?>
  </tr>
  <?php } ?>
</table>

<script src="<?php echo base_url(); ?>assets/css/icons/icomoon/styles.css"></script>

<script type="text/javascript">
	$(".cancel-button").click(function(){
		alert();
	})
</script>
</body>
</html>