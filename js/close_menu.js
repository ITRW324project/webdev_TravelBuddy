$(document).ready(function(){
	$(".sidebar").addClass("hide");
	$(".itenerary").addClass("opacity1");
});
	
$(".itenerary").click(function(){
	$(".sidebar").removeClass("hide");
	$(".itenerary").removeClass("opacity1");
});
	
$(".close").click(function(){
	$(".sidebar").addClass("hide");
	$(".itenerary").addClass("opacity1");
});
