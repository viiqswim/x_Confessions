$(document).ready(function(){
	$("div#authorText").hide();
	$("div#imageText").hide();
	
	$("button1#button1").click(function()
	{
		$("div#authorText").slideToggle("slow");
	});
	
	$("button2#button2").click(function()
	{
		$("div#imageText").slideToggle("slow");
	});
});
