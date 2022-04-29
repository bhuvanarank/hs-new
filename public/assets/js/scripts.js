(function () {

	
	scheduler.locale.labels.section_location = 'Location';
	scheduler.locale.labels.section_noofslots = 'No of slots';
	scheduler.locale.labels.section_usertype = 'User type';
	scheduler.locale.labels.section_ratesoption = 'Rates option';
	scheduler.locale.labels.section_gmrate = 'Greet & Meet';
	scheduler.locale.labels.section_prrate = 'Park & Ride';
	scheduler.locale.labels.section_time = 'Date';
	scheduler.xy.scale_height = 30;
	scheduler.config.details_on_create = true;
	scheduler.config.details_on_dblclick = true;
	scheduler.config.prevent_cache = true;
	scheduler.config.show_loading = true;
	scheduler.config.xml_date = "%Y-%m-%d %H:%i";

	var roomsArr = scheduler.serverList("room");
	var parkTimeArr = scheduler.serverList("parkTime");
	var parkTypeArr = scheduler.serverList("parkType");
	var bookingStatusesArr = scheduler.serverList("bookingStatus");
	var userType = [{"key":"1","id":"1","value":"1","label":"B2C"},{"key":"2","id":"2","value":"2","label":"Agents"}];
	var ratesOption = [{"key":"1","id":"1","value":"1","label":"Weekly"},{"key":"2","id":"2","value":"2","label":"Monthly"},{"key":"3","id":"3","value":"3","label":"Week days rates"},{"key":"4","id":"4","value":"4","label":"Week end rates"}];
	var locations = [{"key":"1","id":"1","value":"1","label":"Chennai"},{"key":"2","id":"2","value":"2","label":"Madhurai"}];

	scheduler.config.lightbox.sections = [
		{map_to: "location", name: "location", type: "multiselect",options: locations},
		{map_to: "noofslots", name: "noofslots", type: "textarea", height: 24},
		{map_to: "user_type", name: "usertype", type: "multiselect", options: userType },
		{map_to: "rates_option", name: "ratesoption", type: "radio", options: ratesOption},
		{map_to: "gm_rate", name: "gmrate", type: "textarea", height: 24},
		{map_to: "pr_rate", name: "prrate", type: "textarea", height: 24},
		// {map_to: "status", name: "status", type: "radio", options: scheduler.serverList("bookingStatus")},
		// {map_to: "is_paid", name: "is_paid", type: "checkbox", checked_value: true, unchecked_value: false},
		{map_to: "time", name: "time", type: "calendar_time"}
	];

	scheduler.locale.labels.timeline_tab = 'Timeline';

	scheduler.createTimelineView({
		fit_events: true,
		name: "timeline",
		y_property: "room",
		render: 'bar',
		x_unit: "day",
		x_date: "%d",
		x_size: 45,
		dy: 52,
		event_dy: "full",
		section_autoheight: false,
		round_position: true,

		y_unit: scheduler.serverList("currentRooms"),
		second_scale: {
			x_unit: "month",
			x_date: "%F %Y"
		}
	});

	function findInArray(array, key) {
		for (var i = 0; i < array.length; i++) {
			if (key == array[i].key)
				return array[i];
		}
		return null;
	}

	function getparkTime(key) {
		return findInArray(parkTimeArr, key).label;
	}

	function getparkType(key) {
		// console.log(key+'####');
		return findInArray(parkTypeArr, key);
	}
	function getRoom(key) {
		return findInArray(roomsArr, key);
	}
	function getuserType(key) {
		console.log(key+'####');
		return findInArray(userType, key).label;
	}
	scheduler.templates.timeline_scale_label = function (key, label, section) {
		var parkTypeStatus = getparkType(section.status);
		// var parkType = {"key":"3","label":"Park & Ride"};
		// console.log(JSON.stringify(section.status+'##@@'));
		// alert(JSON.stringify(scheduler.serverList("parkTime")));
		return ["<div class='timeline_item_separator'></div>",
			"<div class='timeline_item_cell'>" + parkTypeStatus.label + "</div>",
			"<div class='timeline_item_separator'></div>",
			"<div class='timeline_item_cell'>"+getparkTime(section.type)+"</div>"].join("");

	};

	scheduler.date.timeline_start = scheduler.date.month_start;
	scheduler.date.add_timeline = function (date, step) {
		return scheduler.date.add(date, step, "month");
	};
	
	scheduler.attachEvent("onBeforeViewChange", function (old_mode, old_date, mode, date) {
		var year = date.getFullYear();
		var month = (date.getMonth() + 1);
		var d = new Date(year, month, 0);
		var daysInMonth = d.getDate();
		scheduler.matrix["timeline"].x_size = daysInMonth;
		return true;
	});

	scheduler.templates.event_class = function (start, end, event) {
		return "event_" + (event.status || "");
	};

	function getBookingStatus(key) {
		var bookingStatus = findInArray(bookingStatusesArr, key);
		return !bookingStatus ? '' : bookingStatus.label;
	}

	function getPaidStatus(isPaid) {
		return isPaid ? "paid" : "not paid";
	}

	// var eventDateFormat = scheduler.date.date_to_str("%d %M %Y");
	// scheduler.templates.event_bar_text = function (start, end, event) {
		
	// 	var paidStatus = getPaidStatus(event.is_paid);
	// 	var startDate = eventDateFormat(start);
	// 	var endDate = eventDateFormat(end);
	// 	// return [event.text + "<br />",
	// 	// 	startDate + " - " + endDate,
	// 	// 	"<div class='booking_status booking-option'>" + getBookingStatus(event.status) + "</div>",
	// 	// 	"<div class='booking_paid booking-option'>" + paidStatus + "</div>"].join("");
	// 	return ["A"+ event.noofslots + "<br/><hr style='margin-left: -10px;margin-top: 7px;margin-bottom: 5px;'>R"+event.gm_rate].join("");

	// };

	scheduler.templates.tooltip_text = function (start, end, event) {
		var room = getRoom(event.room) || {label: ""};
	    if(event.room==1){
	      var rate=event.p_prrate;
	    }else if(event.room==2){
	      var rate=event.op_prrate;
	    }else if(event.room==3){
	      var rate=event.p_mgrate;
	    }else if(event.room==4){
	      var rate=event.op_mgrate;
	    }else{
	      var rate="";
	    }
		var html = [];
		html.push("Availability: <b>" + event.noofslots + "</b>");
		html.push("Rate: <b>" + rate + "</b>");
		html.push("From: <b>" + eventDateFormat(start) + "</b>");
		html.push("To: <b>" + eventDateFormat(end) + "</b>");
		// html.push("Time: <b>" + event.from_time +"-"+ event.to_time + "</b>");
		// html.push(getBookingStatus(event.status) + ", " + getPaidStatus(event.is_paid));
		return html.join("<br>")
	};

	scheduler.templates.lightbox_header = function (start, end, ev) {
		var formatFunc = scheduler.date.date_to_str('%d.%m.%Y');
		return formatFunc(start) + " - " + formatFunc(end);
	};

	scheduler.attachEvent("onEventCollision", function (ev, evs) {
		for (var i = 0; i < evs.length; i++) {
			if (ev.room != evs[i].room) continue;
			dhtmlx.message({
				type: "error",
				text: "Rate is already updated for this date."
			});
		}
		return true;
	});


	scheduler.addMarkedTimespan({days: [0, 6], zones: "fullday", css: "timeline_weekend"});

	window.updateSections = function updateSections(value) {
		var currentRoomsArr = [];
		// console.log(value+'$$');
		if (value == 'all') {
			scheduler.updateCollection("currentRooms", roomsArr.slice());
			return true;
		}
		for (var i = 0; i < 10; i++) {
			if (value == roomsArr[i].type) {
				currentRoomsArr.push(roomsArr[i]);
			}
		}
		scheduler.updateCollection("currentRooms", currentRoomsArr);
	};

	scheduler.attachEvent("onXLE", function () {
		updateSections("all");
		// console.log(parkTimeArr.length+'$##');
		var select = document.getElementById("room_filter");
		var selectHTML = ["<option value='all'>All</option>"];
		for (var i = 1; i < parkTimeArr.length + 1; i++) {
			selectHTML.push("<option value='" + i + "'>" + getparkTime(i) + "</option>");
		}
		// select.innerHTML = selectHTML.join("");
	});

	scheduler.attachEvent("onEventSave", function (id, ev, is_new) {
		// if (!ev.text) {
		// 	dhtmlx.alert("Text must not be empty");
		// 	return false;
		// }
		return true;
	});

})();

function init() {
	var date = new Date();
	var year = date.getFullYear();
	var month = (date.getMonth() + 1);
	scheduler.init('scheduler_here', new Date(year, month, 0), "timeline");
	scheduler.load("./data.php", "json");
	window.dp = new dataProcessor("./data.php");
	dp.init(scheduler);


	(function () {
		var element = document.getElementById("scheduler_here");
		var top = scheduler.xy.nav_height + 1 + 1;// first +1 -- blank space upper border, second +1 -- hardcoded border length
		var height = scheduler.xy.scale_height;
		var width = scheduler.matrix.timeline.dx;
		var header = document.createElement("div");
		header.className = "collection_label";
		header.style.position = "absolute";
		header.style.top = top + "px";
		header.style.width = width + "px";
		header.style.height = height + "px";

		var descriptionHTML = "<div class='timeline_item_separator'></div>" +
			"<div class='timeline_item_cell'>Parking Type</div>" +
			"<div class='timeline_item_separator'></div>" +
			"<div class='timeline_item_cell'>Timing</div>";
		header.innerHTML = descriptionHTML;
		element.appendChild(header);
	})();
}
