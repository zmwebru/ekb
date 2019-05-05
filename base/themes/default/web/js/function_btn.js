// JavaScript Document
$(document).ready(function() {

		//var page_parent = document.referrer;

		var clickDisabled = false;

	$(".widget_circle").click(function() {
	      if (clickDisabled)
	         return;

			$("#widget").toggleClass("active");

			//window.parent.postMessage("mssgwidgetShow", '*');

	      clickDisabled = true;
	      setTimeout(function(){clickDisabled = false;}, 500);
	}); 
}); 