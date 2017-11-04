// This is the Database of Upcoming Events
// Please Edit with Care.
//
// 8 Fields (surrounded by brackets[]) are used for EACH event:
// 	["Recurring", "Month", "Day", "Year", "StartTime", "EndTime", "Name", "Description"]
// 	Each event field must be be surrounded by quotation marks followed by a comma ("",) EXCEPT the "Description" field.
//	The "Description" field is surrounded by quotation marks only ("").
//
// Each event has a comma after the closing bracket IF another event is below it on the next line down.
//	Note: The last event in this file should NOT have a comma after the closing bracket
//
// The Recurring field uses:
//	"D" = Daily; "W" = Weekly; "M" = Monthly; "Y" = Yearly; "F" = Floating Holiday
//
// One Time only events should leave the Recurring field blank
//	(ex. "")
//
// Daily events do NOT require that anything be in the Month Day and Year fields
//	Everything in the Month Day and Year fields will be ignored
//
// Weekly events should have the day of the week field set to 1 - 7
//	1=Sunday, 2=Monday, 3=Tuesday, 4=Wednesday, 5=Thurday, 6=Friday, 7=Saturday
//
// "F"loating events uses:
//	the Month field for the Month.
//	the Day field as the Cardinal Occurrence
//		1=1st, 2=2nd, 3=3rd, 4=4th, 5=5th, 6=6th occurrence of the day listed next
//	the Year field as the Day of the week the event/holiday falls on
//		1=Sunday, 2=Monday, 3=Tuesday, 4=Wednesday, 5=Thurday, 6=Friday, 7=Saturday
//	example: "F",	"1",	"3",	"2", = Floating holiday in January on the 3rd Monday of that month.
//
//	Note: Easter has it's own special formula so Please don't change anything related to Easter below
//
// "Y"early events are specific dates that never change - the Year field is ignored
//	example - Christmas is: "12","25","",
events = new Array(
	["Y",	"1",	"1",	"2017",	"1:00 AM",	"12:00 PM",	"New Year's Day",	"Happy New Year!"],
	["Y",	"1",	"3",	"2017",	"12:00 AM",	"2:00 PM",	"Meeting with the Board of Directors",	"A general meeting with the collective board of directors will be held today at 12 AM in the conference room."],
	["Y",	"2",	"2",	"2017",	"11:00 AM",	"3:00 PM",	"Sales Pitch",	"Meeting with the sales team at 11 AM in the auditorium."],
	["Y",	"2",	"15",	"2017",	"9:00 AM",	"3:00 PM",	"Marketing Revision",	"Revising the company's marketing goals and projections."],
	["Y",	"2",	"27",	"2017",	"2:00 PM",	"4:00 PM",	"Meeting with the shareholders",	"Taking place in the grand hall, starting at 2 PM."],
	["F",	"3",	"0",	"0",	"1:00 AM",	"12:59 PM",	"Easter",	"Happy Easter!"],
	["Y",	"3",	"17",	"2017",	"8:00 AM",	"4:00 PM",	"UI Redesign",	"Refreshing our look and debugging."],
	["Y",	"3",	"22",	"2017",	"11:00 AM",	"3:00 PM",	"Sales Pitch",	"Meeting with the sales team at 11 AM in the auditorium."],
	["Y",	"4",	"2",	"2017",	"9:00 AM",	"3:00 PM",	"Marketing Revision",	"Revising the company's marketing goals and projections."],
	["Y",	"5",	"24",	"2017",	"12:00 AM",	"3:00 PM",	"Meeting with the Board of Directors",	"A general meeting with the collective board of directors will be held today at 12 AM in the conference room."],
	["Y",	"5",	"4",	"2017",	"2:00 PM",	"4:00 PM",	"Meeting with the shareholders",	"Taking place in the grand hall, starting at 2 PM."],
	["Y",	"6",	"1",	"2017",	"8:00 AM",	"4:00 PM",	"UI Redesign",	"Refreshing our look and debugging."],
	["Y",	"6",	"14",	"2017",	"11:00 AM",	"2:00 PM",	"Sales Pitch",	"Meeting with the sales team at 11 AM in the auditorium."],
	["Y",	"6",	"26",	"2017",	"2:00 PM",	"4:00 PM",	"Meeting with the shareholders",	"Taking place in the grand hall, starting at 2 PM."],
	["Y",	"7",	"7",	"2017",	"12:00 AM",	"4:00 PM",	"Meeting with the Board of Directors",	"A general meeting with the collective board of directors will be held today at 12 AM in the conference room."],
	["Y",	"9",	"8",	"2017",	"1:00 AM",	"12:59 PM",	"Independence Day",	"Happy Independence Day!"],
	["Y",	"10",	"2",	"2017",	"12:00 AM",	"4:00 PM",	"Marketing Revision",	"Revising the company's marketing goals and projections."],
	["Y",	"10",	"30",	"2017",	"9:00 AM",	"2:00 PM",	"UI Redesign",	"Refreshing our look and debugging."],
	["Y",	"11",	"13",	"2017",	"12:00 AM",	"3:00 PM",	"Meeting with the Board of Directors",	"A general meeting with the collective board of directors will be held today at 12 AM in the conference room."],
	["Y",	"11",	"3",	"2017",	"11:00 AM",	"3:00 PM",	"Sales Pitch",	"Meeting with the sales team at 11 AM in the auditorium."],
	["Y",	"12",	"22",	"2017",	"12:00 AM",	"4:00",	"NYE Party",	"Good year everyone!"]
// Please omit the final comma after the ] from the last line above unless you are going to add another event at this time.
);




