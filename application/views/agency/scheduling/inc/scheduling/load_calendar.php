<style>
.fc-list-item-time{display:none;}
</style>
<div class="fullcalendar-formats"></div>
<script src="<?php echo base_url(); ?>assets/js/plugins/ui/moment/moment.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/ui/fullcalendar/fullcalendar.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/styling/switch.min.js"></script>
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
		center: 'title,month,listMonth',
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
});
var elems = Array.prototype.slice.call(document.querySelectorAll('.is_recurring_checkbox'));
elems.forEach(function(html) {
	new Switchery(html);
	html.onchange = function(e) {
		is_recurring = 0;
		if($(this).is(':checked')){
			is_recurring = 1;
		}
		change_is_recurring_status($(this).attr("id"), is_recurring);
	}
});
var buttonsArray = ["fc-listWeek-button","fc-listMonth-button","fc-listDay-button","fc-today-button","fc-next-button","fc-prev-button"];
$.each(buttonsArray, function(bk, bv){
	$('.'+bv+'').click(function(){
		var elems = Array.prototype.slice.call(document.querySelectorAll('.is_recurring_checkbox'));
		elems.forEach(function(html) {
			new Switchery(html);
			html.onchange = function(e) {
				is_recurring = 0;
				if($(this).is(':checked')){
					is_recurring = 1;
				}
				change_is_recurring_status($(this).attr("id"), is_recurring);
			}
		});
	});
});
</script>