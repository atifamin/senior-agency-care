<?php //$caregiver = json_decode($data['caregivers']);
 // print_array($appointment_calender_detail);
// foreach($caregiver as $care){   
// echo "<pre>".$care->id; } ?>
<style>
.fc-list-item-time {
	display: none;
}
.pdfCalendarView{
	padding-top:3%;
}
</style>
<div class="fullcalendar-formats"></div>

<div>
<div id="pdf_view_main" style="display:none">
	<div id="pdf_view">
		
	</div>
	<form action="<?php echo site_url("pdf/Calender_viewPdf/calendar_pdf_view"); ?>" method="POST" target="_blank">
		<input type="hidden" name="client_id" value="<?php echo $client_id; ?>">
		<input type="hidden" name="date" value="" id="calendar_view_week_start_date">
		<div style="text-align: center;">
			<button type="submit" class="btn btn-light legitRipple" name="calendar_pdf_view" value="download"><i class="icon-printer mr-2"></i> Download</button>
			<button type="submit" class="btn btn-light legitRipple" name="calendar_pdf_view" value="email"><i class="icon-file-check mr-2"></i> Email</button>
			<button type="submit" class="btn btn-light legitRipple" name="calendar_pdf_view" value="print"><i class="icon-file-check mr-2"></i> Print</button>
		</div>
	</form>
</div>

<script src="<?php echo base_url(); ?>assets/js/plugins/ui/moment/moment.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/ui/fullcalendar/fullcalendar.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/styling/switch.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/scripts/schedulingCalendar.js?rand=<?php echo rand(); ?>"></script> 
<script>

var events = [
	{
		title: "Test One",
		start: "23:30:00",
		end: "03:45:00",
		dow: [4,5]
	},
]

$('.fullcalendar-formats').fullCalendar({
	/*header: {
		left: 'prev,next today',
		center: 'title,month,listMonth',
		right: 'basicDay,listDay,basicWeek,listWeek'
	},*/
	
	header: {
		left: 'prev,next today',
		center: 'title,month,listMonth,pdfView',
		right: 'month,basicWeek,basicDay'
	},
	views: {
		month: {
			titleFormat: 'LL',
			columnFormat: 'dddd'
		},
		week: {
			titleFormat: 'MMM Do YY',
			columnFormat: 'ddd D'
		},
		day: {
			titleFormat: 'dddd',
			columnFormat: 'dddd'
		}
	},
	customButtons: {
		pdfView: {
			text: 'PDF View',
			click: function() {
				$(".fc-view-container").hide();
				$("#pdf_view_main").show();
			}
		}
	},
	/*buttonText: {
		listMonth: 'List View',
		month: 'Calendar View',
		basicDay: 'Day',
		listDay: 'List Day',
		basicWeek: 'Week',
		listWeek: 'List Week',
	},*/
	buttonText: {
		listMonth: 'List View',
		month: 'Month',
	},
	defaultView: 'listMonth',
	timeFormat: 'h:mm A',
	defaultDate: '<?php echo date("Y-m-d"); ?>',
	draggable: false,
	editable: true,
	events: <?php echo $events; ?>,
	isRTL: $('html').attr('dir') == 'rtl' ? true : false,
	eventRender: function(info, element, view) {
		var viewArray = ["listMonth","listDay","listWeek"];
		if(viewArray.indexOf(view.name)!=-1){
			element.prepend(info.date_data);
			element.find(".fc-list-item-title").html(info.client_data);
			element.append(info.is_recurring);
		}
	},
	eventClick: function(info, element, view){
		var date = info.start._i.split("T");
		if(view.type == "month"){
			$.post("<?php echo site_url('agency/scheduling/calender_shift_view'); ?>",{client_id:<?php echo $client_id; ?>,date:date[0]}).done(function(e){
				
				swal({
					html:e
				});
				return false;
			});
		
			// swal({
			// 	html: '<div class="row"><span class="font-weight-semibold" style="padding-left: 15px;">Wednesday, November 12</span></div><div style="margin-top:12px;"><tr><?php //foreach($client_appointement as $appointment){ ?><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end" style="background-color:#4caf50;border-color:#4caf50"><div class="fc-content"><span class="fc-title" style="float:left;">Mary  Forester Appointement</span><span class="fc-time"><?php //echo date('H:i a',strtotime($appointment->from))." - ".date('H:i a',strtotime($appointment->to));?></span> </div></a></td><?php //} ?><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end" style="background-color:#4caf50;border-color:#4caf50"><div class="fc-content"><span class="fc-title" style="float:left;">Doctor Appointement</span><span class="fc-time">12:00 AM</span> </div></a></td></tr></div>'
			// });
		}
	}
});
var elems = Array.prototype.slice.call(document.querySelectorAll('.is_recurring_checkbox'));
elems.forEach(function(html) {
	new Switchery(html);
	$(".is_recurring_checkbox").on("click", function(e){
		is_recurring_change($(this))
	});
});
var buttonsArray = ["fc-listWeek-button","fc-listMonth-button","fc-listDay-button","fc-today-button","fc-next-button","fc-prev-button", "fc-month-button", "fc-basicWeek-button", "fc-basicDay-button"];
$.each(buttonsArray, function(bk, bv){
	$('.'+bv+'').click(function(){
		$("#pdf_view_main").hide();
		$(".fc-view-container").show();
		var elems = Array.prototype.slice.call(document.querySelectorAll('.is_recurring_checkbox'));
		elems.forEach(function(html) {
			new Switchery(html);
			$(".is_recurring_checkbox").on("click", function(e){
				is_recurring_change($(this))
			});
		});
	});
});



function is_recurring_change(element){
	var is_recurring = 0;
	var months = 0;
	if(element.is(":checked"))
		is_recurring = 1;
	recurring_months(element.attr("appointment-id"), is_recurring);
}


//Loading Calendar Pdf View
var SchCal = new SchedulingCalendar();
SchCal.appointments = <?php echo $data['appointments']; ?>;
SchCal.caregivers = <?php echo $data['caregivers']; ?>;
get_dates(null);
function get_dates(action){
	SchCal.creatPdfView(action);
	$("#pdf_view").html(SchCal.pdfHtml);
}

</script>