<?php //print_array($appointment_detail[0]->from); ?>


<div class="row">
	<span class="font-weight-semibold" style="padding-left: 15px;"><?php echo date("l, F d",strtotime($appointment_detail[0]->from)); ?></span>
</div>
<div style="margin-top:12px;">
	<?php foreach ($appointment_detail as $detail) {  ?>
	
	<tr>
		<td class="fc-event-container">
			<a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end" style="background-color:#2196f3;border-color:#2196f3">
				<div class="fc-content">
					<span class="fc-title" style="float:left;"><?php echo $detail->caregiver_name; ?></span><span class="fc-time"><?php echo date('H:i a',strtotime($detail->from))." - ".date('H:i a',strtotime($detail->to));?></span> 
				</div>
			</a>
		</td>
	</tr>
	<?php } ?>
	<?php foreach ($appointment_calender_detail as $cal_detail) { ?>
	
	<tr>
		<td class="fc-event-container">
			<a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end" style="background-color:#2196f3;border-color:#2196f3">
				<div class="fc-content">
					<span class="fc-title" style="float:left;"><?php echo $cal_detail->appointment_type; ?></span>
					<span class="fc-time"><?php echo date("H:i a",strtotime($cal_detail->appointment_date)); ?></span> 
				</div>
			</a>
		</td>
	</tr>
	<?php  } ?>
</div>