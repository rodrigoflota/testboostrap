// JavaScript Document
  $(function() {
    $( "#fecha" ).datepicker();
  });
  
  $('#hora').datetimepicker({
	datepicker:false,
	format:'H:i',
	step:5
});

$('#hora').timepicker({
	hourGrid: 4,
	minuteGrid: 10,
	timeFormat: 'hh:mm tt'
});