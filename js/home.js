$(document).ready(function () {
			$('#left_pane').hide();
			
})		;
		
$('#hover_me').click(function () {
	$('#left_pane').toggle("fold");
	$('.hidden_menu').toggle();
	$('.hover_me_details').toggle();
			 
});

$('#menu1').click(function () {
	
	$('.page2,.page3,.page4').css('visibility','hidden').hide();
	$('.page1').css('visibility','visible').show();
	$('#event_day1').css('visibility','hidden').hide();
	$('#event_day2').css('visibility','hidden').hide();
	
});
/*
$('#menu2').click(function () {
	
	$('.page1,.page3,.page4').css('visibility','hidden');
	$('.page2').css('visibility','visible');
	$('.page2_container').css('-webkit-animation','appear 2s');
	$('#event_day1').css('visibility','hidden');
	$('#event_day2').css('visibility','hidden');
	
	
});*/
$('#menu2').on('click',function () {
	$('.page1,.page3,.page4').css('visibility','hidden').hide();
	$('.page2').css('visibility','visible').show();
	$('.page2_container').css('-webkit-animation','appear 1s').css('-moz-animation','appear 1s').css('-o-animation','appear 1s');
	$('#event_day1').css('visibility','hidden').hide();
	$('#event_day2').css('visibility','hidden').hide();
});

$('#menu3').click(function () {
	
	$('.page1,.page2,.page4').css('visibility','hidden').hide();
	$('.page3').css('visibility','visible').show();
	$('#event_day1').css('visibility','visible').show();
	$('.page3_container').css('-webkit-animation','appear 1s').css('-moz-animation','appear 1s').css('-o-animation','appear 1s');
	
});
$('#menu4').click(function () {
	
	$('.page2,.page3,.page1').css('visibility','hidden').hide();
	$('.page4').css('visibility','visible').show();
	$('.page4_container').css('-webkit-animation','appear 1s').css('-moz-animation','appear 1s').css('-o-animation','appear 1s');
	$('#event_day1').css('visibility','hidden').hide();
	$('#event_day2').css('visibility','hidden').hide();
	
});


