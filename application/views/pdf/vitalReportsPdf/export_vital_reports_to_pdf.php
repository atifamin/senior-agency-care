<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
	<h1 class="modal-title" style="margin: 0 auto;">Client's Vital Reports</h1>
</div>

<div>
	<table>
	  <tr>
	    <td>Add date and time where vitals taken</td>
	    <td><?php echo date("F jS H:s", strtotime($result->from_date));?></td>
	  </tr>
	  <tr>
	    <td>Bloodpressure from</td>
	    <td><?php echo $result->bloodpressure_from; ?></td>
	  </tr>
	  <tr>
	    <td>Bloodpressure to</td>
	    <td><?php echo $result->bloodpressure_to; ?></td>
	  </tr>
	  <tr>
	    <td>Breathing from</td>
	    <td><?php echo $result->breathing_from; ?></td>
	  </tr>
	  <tr>
	    <td>Breathing to</td>
	    <td><?php echo $result->breathing_to; ?></td>
	  </tr>
	  <tr>
	    <td>Pulse from</td>
	    <td><?php echo $result->pulse_from; ?></td>
	  </tr>
	  <tr>
	    <td>Pulse to</td>
	    <td><?php echo $result->pulse_to; ?></td>
	  </tr>
	  <tr>
	    <td>Temprature</td>
	    <td><?php echo $result->temperature; ?>&nbsp;Farenheit</td>
	  </tr>
	</table>
</div>
</body>
</html>
