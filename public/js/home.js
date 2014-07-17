$(document).ready(function(){
	$('.title').hide();
	$(".title").fadeIn(1200);
	
	//hides all divs
	$('#ipsum').hide();
	$('#user').hide();
	$('#password').hide();
	
	$('#clip').hide();
	$('#devdocs').hide();
	$('#php').hide();
	
	$('#laravel').hide();
	$('#github').hide();
	$('#distractions').hide();
	
	//polinates page
	$('#ipsum').delay(800).slideDown(1200);
	$('#user').delay(1200).slideDown(1200);
	$('#password').delay(2400).slideDown(1200);
	
	$('#clip').delay(1800).slideDown(1200);
	$('#devdocs').delay(1000).slideDown(1200);
	$('#php').delay(2200).slideDown(1200);
	
	$('#laravel').delay(1600).slideDown(1200);
	$('#github').delay(2000).slideDown(1200);
	$('#distractions').delay(1400).slideDown(1200);
	
});