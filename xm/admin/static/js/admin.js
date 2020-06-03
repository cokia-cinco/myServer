// JavaScript Document
$(function(){
	$("#dc").height($(window).height() - $("#dcHead").height() - $("#dcFooter").height()-6);
	//$(".wrap").height($("#bd").height()-6);
	$("#dcMain").height($(window).height() - $("#dcHead").height() - $("#dcFooter").height() - 6);
	$("#dcLeft").height($(window).height() - $("#dcHead").height() - $("#dcFooter").height() - 6);
})
$(window).resize(function(e) {
    $("#dc").height($(window).height() - $("#dcHead").height() - $("#dcFooter").height()-6);
	//$(".wrap").height($("#bd").height()-6);
	$("#dcMain").height($(window).height() - $("#dcHead").height() - $("#dcFooter").height() - 6);
}).resize();