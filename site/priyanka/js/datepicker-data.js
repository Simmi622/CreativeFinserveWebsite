$(document).ready(function() {           
		$("#datetime").datepicker({ picker: "<button>Select</button>", applyrule: rule });
		$("#endtime").datepicker({ picker: "<button>Select</button>", applyrule: rule });
		$("#s-date").datepicker({ picker: "<img src='images/calendar/calendar-icon.png' alt='Select Start Date' class='cal-cursor' title='Select Start Date' align='top'/>" });
		$("#search-from").datepicker({ picker: "<img src='images/datepicker-icon.png' alt='Select Start Date' class='cal-cursor' title='Select Start Date' align='top'/>" });
		$("#search-to").datepicker({ picker: "<img src='images/datepicker-icon.png' alt='Select End Date' class='cal-cursor' title='Select End Date' align='top'/>" });
		$("#e-date").datepicker({ picker: "<img src='images/calendar/calendar-icon.png' alt='Select End Date' class='cal-cursor' title='Select End Date' align='top'/>" });
		$("#select-date").datepicker({ picker: "<img src='images/datepicker-icon.png' alt='Select Date' class='cal-cursor' title='Select Date' align='top'/>" });
		$("#select-date-2").datepicker({ picker: "<img src='images/datepicker-icon.png' alt='Select Date' class='cal-cursor' title='Select Date' align='top'/>" });
		$("#email-reminder").datepicker({ picker: "<img src='images/calendar/calendar-icon.png' alt='Select Date' class='cal-cursor' title='Select Date' align='top'/>" });
		$("#hdobj").datepicker({ 
			picker: "#handler",  //this should be a hidden
			onReturn:function(d){
				alert(d.Format("M/d, yyyy"));
				$("#target").html(d.Format("M/d, yyyy"));
			} 
		});
		function rule(id) {
			if (id == 'datetime') {
				var v = $("#endtime").val();
				if (v == "") {
					return null;
				}
				else {
					var d = v.match(/^(\d{1,4})(-|\/|.)(\d{1,2})\2(\d{1,2})$/);
					if (d != null) {
						var nd = new Date(parseInt(d[1], 10), parseInt(d[3], 10) - 1, parseInt(d[4], 10));
						return { enddate: nd };
					}
					else {
						return null;
					}
				}
			}
			else {
				var v = $("#datetime").val();
				if (v == "") {
					return null;
				}
				else {
					var d = v.match(/^(\d{1,4})(-|\/|.)(\d{1,2})\2(\d{1,2})$/);
					if (d != null) {
						var nd = new Date(parseInt(d[1], 10), parseInt(d[3], 10) - 1, parseInt(d[4], 10));
						return { startdate: nd };
					}
					else {
						return null;
					}
				}
	
			}
		}
});