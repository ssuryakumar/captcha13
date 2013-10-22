
$('#day1_link').click(function(){
	$('#event_day2').hide();
	$('#event_day1').css('visibility','visible').css('-webkit-animation-name','load').css('-webkit-animation-duration','0.5s').
	css('-moz-animation-name','load').css('-moz-animation-duration','0.5s').css('-o-animation-name','load').css('-o-animation-duration','0.5s');
	$('#event_day2').css('visibility','hidden').css('-webkit-animation-name','load').css('-webkit-animation-duration','0.5s').
	css('-moz-animation-name','load').css('-moz-animation-duration','0.5s').css('-o-animation-name','load').css('-o-animation-duration','0.5s');;
	$('#day1_link').css('color','black');
		$('#day2_link').css('color','white');
});

$('#day2_link').click(function () {

	$('#event_day2').show();
	$('#day2_link').css('color','black');
		$('#day1_link').css('color','white');
	$('#event_day2').css('visibility','visible').css('-webkit-animation-name','load').css('-webkit-animation-duration','0.5s').
	css('-moz-animation-name','load').css('-moz-animation-duration','0.5s').css('-o-animation-name','load').css('-o-animation-duration','0.5s');
	$('#event_day1').css('visibility','hidden');
});

