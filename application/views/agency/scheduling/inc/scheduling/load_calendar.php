<?php //print_array(json_decode($data['appointments'])); ?>
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
<div id="pdf_view" style="display:none">
  
</div>
<script src="<?php echo base_url(); ?>assets/js/plugins/ui/moment/moment.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/ui/fullcalendar/fullcalendar.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/styling/switch.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/scripts/schedulingCalendar.js"></script> 
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
				$("#pdf_view").show();
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
		if(view.type=="month"){
			swal({
				title: '<i>HTML</i> <u>example</u>',
				html: 'You can use <strong>bold text</strong>, ' + '<a href="http://demo.interface.club">links</a> ' + 'and other <span class="text-warning">HTML tags</span>'
			});
		}
		/*alert('Event: ' + info.event.title);
    	alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
    	alert('View: ' + info.view.type);*/
		
    	//change the border color just for fun
    	//info.el.style.borderColor = 'red';
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
		$("#pdf_view").hide();
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