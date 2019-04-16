<!DOCTYPE html>
<html>
<head>
<meta>
<title></title>
<style>
div{
	text-align: center;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style>
</head>

<body>

<div class="header" style="text-align: center; padding-top: 40px; padding-bottom: 40px;">
	<h1 class="modal-title" style="margin: 0 auto;">Calender PDF View</h1>
</div>

<div>
	<table>
	  <tr>
	    <td>Caregiver</td>
	    <td>Monday</td>
	    <td>Tuesday</td>
	    <td>Wednesday</td>
	    <td>Thursday</td>
	    <td>Friday</td>
	    <td>Saturday</td>
	    <td>Sunday</td>
	  </tr>
	  <tr>
	    <td>Caregiver1</td>
	    <td><?php //echo $result->medication_dosage; ?></td>
	  </tr>
	</table>
</div>
	
  <!-- <div class="col-md-8 offset-md-2">
    <div style="text-align: center;">
      <p style="font-size: 17px;">Medication Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $result->medication_name; ?></p>
      <p style="font-size: 15px;">Medication Dosage: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $result->medication_dosage; ?>&nbsp;Mg</p>
      <p style="font-size: 15px;">Medication taken in a Day: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $result->how_many_times_day; ?></p>
       <p style="font-size: 15px;">Medication time: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php $day_period_time = json_decode($result->day_period_time); ?>
            <?php foreach (CON_CLIENT_DAY_SHIFTS as $daykey => $dayvalue) { ?>
             <?Php if(in_array($dayvalue, $day_period_time)){echo $dayvalue;} ?> 
            <?php } ?></p> -->
  
</body>
</html>
