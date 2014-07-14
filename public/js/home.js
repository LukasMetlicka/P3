$(document).ready(function(){
	$("div").mouseenter(function(){
		$(this).css("background-color","rgba 255 255 255 1");
		$(this).css("color","#fe4b3e");
	});
	$("#contentdiv").mouseleave(function(){
		$(this).css("background-color","#fe4b3e");
		$(this).css("color","rgba 255 255 255 1");
	})
});