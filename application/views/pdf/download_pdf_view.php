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
<?php //print_array($date);?>
<div class="header" style="text-align: center; padding-top: 40px; padding-bottom: 40px;">
	<h1 class="modal-title" style="margin: 0 auto;">Calender PDF View</h1>
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
    				echo "<p>".date("h:i A", strtotime($cp->from))." - ".date("h:i A", strtotime($cp->to))."</p>";
    			}
    		endforeach;
    	?>
    	
    </td>
	<?php endforeach; ?>
  </tr>
  <?php } ?>
</table>


<script type="text/javascript">
	$(".cancel-button").click(function(){
		alert();
	})
</script>
</body>
</html>