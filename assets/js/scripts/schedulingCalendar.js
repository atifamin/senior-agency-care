function SchedulingCalendar() {
	this.offsetWeekDays = 0;
	this.wkStart;
	this.wkEnd;
	this.totalWeekDays;
	this.pdfHtml;
	this.weekArray = {0:'Sunday',1:'Monday',2:'Tuesday',3:'Wednesday',4:'Thursday',5:'Friday',6:'Saturday'};
	this.monthsArray = {0:'January', 1:'February', 2:'March', 3:'April', 4:'May', 5:'June', 6:'July', 7:'August', 8:'September', 9:'October', 10:'November', 11:'December'};
	this.appointments;
	this.caregivers;
}


SchedulingCalendar.prototype.pdfViewInit = function (appointments) {
	this.creatPdfView;
}

SchedulingCalendar.prototype.creatPdfView = function (action) {
	console.log("sdf");
	this.totalWeekDays = this.weekdays(action);
	
	var	div			= document.createElement("div"),
		tableDiv	= document.createElement("div"),
		table		= document.createElement("table"),
		thead		= document.createElement("thead"),
		tbody		= document.createElement("tbody"),
		dateBtn		= document.createElement("button"),
		dateBtni	= document.createElement("i"),
		dateBtnspan	= document.createElement("span"),
		nextBtn		= document.createElement("button"),
		prevBtn		= document.createElement("button"),
		btnDiv		= document.createElement("div"),
		nextBtnspan = document.createElement("span"),
		prveBtnspan = document.createElement("span");
	
	btnDiv = document.createElement("div");
	div.setAttribute("style", "text-align:center");
	div.setAttribute("class", "pdfCalendarView");
	
	dateBtn.setAttribute("class", "btn btn-light daterange-predefined legitRipple");
	
	nextBtn.setAttribute("class", "fc-button fc-state-default");
	nextBtn.setAttribute("id", "pdfViewNextBtn");
	nextBtnspan.setAttribute("class", "fc-icon fc-icon-right-single-arrow");
	nextBtn.appendChild(nextBtnspan);
	
	prevBtn.setAttribute("class", "fc-button fc-state-default");
	prevBtn.setAttribute("id", "pdfViewPreviousBtn");
	prveBtnspan.setAttribute("class", "fc-icon fc-icon-left-single-arrow");
	prevBtn.appendChild(prveBtnspan);
	
	dateBtni.setAttribute("class", "icon-calendar22 mr-2");
	
	var fromDate = new Date(this.wkStart);
	var toDate = new Date(this.wkEnd);
	var from = this.monthsArray[fromDate.getMonth()]+" "+fromDate.getDate()+", "+fromDate.getFullYear();
	var to = this.monthsArray[toDate.getMonth()]+" "+toDate.getDate()+", "+toDate.getFullYear();
	
	
	dateBtnspan.innerHTML = ''+from+' &nbsp; - &nbsp; '+to+'';
	dateBtn.appendChild(dateBtni);
	dateBtn.appendChild(dateBtnspan);
	
	btnDiv.appendChild(dateBtn);
	//nextBtn.appendChild(nextBtnspan);
	//prevBtn.appendChild(prveBtnspan);
	btnDiv.prepend(prevBtn);
	btnDiv.append(nextBtn);
	
	table.setAttribute("class", "table");
	tableDiv.setAttribute("class", "table-responsive");
	
	var thr = document.createElement('tr');
	thr.appendChild(document.createElement('th')).innerHTML = 'Caregiver';
	var i = 0;
	while(i<this.totalWeekDays.length){
		var day = this.weekArray[this.totalWeekDays[i].getDay()],
			month = this.monthsArray[this.totalWeekDays[i].getMonth()],
			date = this.totalWeekDays[i].getDate(),
			year = this.totalWeekDays[i].getFullYear();
		th = thr.appendChild(document.createElement('th'));
		th.innerHTML = "<p>"+day+"</p>"+"<p>"+month+" "+date+", "+year+"</p>";
		i++;
	}
	
	var tc = 0;
	while(tc<this.caregivers.length){
		//this.getAppointmentsByDateAndCaregiver('2019-04-05')
		var tbr = document.createElement('tr');
		var caregiver_name = this.caregivers[tc].first_name+' '+this.caregivers[tc].last_name;
		tbr.appendChild(document.createElement('td')).innerHTML = caregiver_name;
		var i = 0;
		while(i<this.totalWeekDays.length){
			td = tbr.appendChild(document.createElement('td'));
			
			var cdate = this.totalWeekDays[i].getFullYear()+"-"+(this.totalWeekDays[i].getMonth()+1)+"-"+this.totalWeekDays[i].getDate();
			var v = this.getAppointmentsByDateAndCaregiver(cdate, this.caregivers[tc].id);
			
			var dateHtml = '';
			$.each(v, function(kk, vv){
				dateHtml += '<p>'+vv.format_date+'</p>';
			});
			td.innerHTML = dateHtml;
			i++;
		}
		tbody.appendChild(tbr);
		tc++;
	}
	
	thead.appendChild(thr);
	table.appendChild(thead);
	table.appendChild(tbody);
	tableDiv.appendChild(table);
	div.appendChild(tableDiv);
	div.prepend(btnDiv);
	this.pdfHtml = div;
	
	nextBtn.onclick = function(){ get_dates("next") };
	prevBtn.onclick = function(){ get_dates("previous") };
	return div;
}

SchedulingCalendar.prototype.weekdays = function (action) {
	if(action!=null)
		this.offsetWeekDays = action == 'previous' ? this.offsetWeekDays-7 : this.offsetWeekDays+7 ;
	
	var dt = new Date(); // current date of week
	dt.setDate(dt.getDate() + this.offsetWeekDays);
	
	var currentWeekDay = dt.getDay();
	var lessDays = currentWeekDay == 0 ? 6 : currentWeekDay - 1;
	var wkStart = new Date(new Date(dt).setDate(dt.getDate() - lessDays));
	var wkEnd = new Date(new Date(wkStart).setDate(wkStart.getDate() + 6));
	
	var i = wkStart;
	var weekdays = [];
	weekdays.push(new Date(wkStart.setDate(wkStart.getDate())));
	while(i<wkEnd){
		weekdays.push(i);
		i = new Date(i.setDate(i.getDate() + 1));
		if(wkStart==wkEnd){
			return false;
		}
	}
	this.wkStart = weekdays[0];
	this.wkEnd = weekdays[weekdays.length - 1];
	return weekdays;
}

SchedulingCalendar.prototype.getAppointmentsByDateAndCaregiver = function (date, caregiver_id) {
	var app = this.appointments;
	var careApp = [];
	$.each(app, function(k, v){
		var db_date = new Date(v.from).getFullYear()+"-"+(new Date(v.from).getMonth()+1)+"-"+new Date(v.from).getDate();
		var comp_date = new Date(date).getFullYear()+"-"+(new Date(date).getMonth()+1)+"-"+new Date(date).getDate();
		if(db_date==comp_date && app[k].caregiver_id==caregiver_id)
			careApp.push(app[k]);
	});
	
	return careApp;
}

function get_dates(action){
	SchCal.creatPdfView(action);
	$("#pdf_view").html(SchCal.pdfHtml);
}

/*document.getElementById("pdfViewNextBtn").click(function(){
	this.creatPdfView("next");
});
document.getElementById("pdfViewPreviousBtn").click(function(){
	this.creatPdfView("previous");
});*/