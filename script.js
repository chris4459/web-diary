$(document).ready(function() {
	$('.fc-day.fc-widget-content.fc-mon.fc-past').hover(
		function(){
		        $(this).addClass('active');
		    },
		function(){
		        $(this).removeClass('active');
		}
	);

	$('.fc-day.fc-widget-content.fc-mon.fc-future').hover(
		function(){
		        $(this).addClass('active');
		    },
		function(){
		        $(this).removeClass('active');
		}
	);
});