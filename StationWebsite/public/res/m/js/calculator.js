/*点击窗口弹出*/
function pop(obj) {
	$(obj).show();
	$("#tchu").fadeIn(100);
}

/*点击窗口消失*/
function remove(obj) {
	$("#tchu").hide();
	$(obj).hide();
}
$(function(){
	$("#close").click(function(){
		$("#tchu").hide();
		$(".xb1").hide();
		$(".xb2").hide();
		$(".xb3").hide();
		$(".xb4").hide();
		$("body").removeClass("overHide");
		/*$(".tc_bottom").empty();*/
	});
})

//设置字体
function pays(obj,clsName) {
		var len = obj.toString().length;
		if (len>12) { 
			$(clsName).css("font-size","14px");
		// alert(len);
	}else {
		$(clsName).css("font-size","18px");
	}
}


//最多输入13位数字
function number(obj){
	$(obj).bind('input propertychange',function(){ //添加监听input值的改变事件
	   var tvalmum;
	     //统计input输入字段的长度
	   tvalnum = $(this).val().length;
	   //如果大于13个字直接进行字符串截取
	   if(tvalnum>13){          
	     var tval = $(this).val();        
	     tval = tval.substring(0,13);        
	     $(this).val(tval);
	     alert('最多输入13位数字！'); 
	   }
	   
	    var num = $(this).val();
	    num = num.replace(/\.{2,}/g,'.');
	    $(this).val(num);
	    
	    var str = num.toString().split('.');
	    var len =str[1].length;
	    if (len>2) {
	    	num = Math.floor(num * 100) / 100;
	    	$(this).val(num);
	    	alert('最多输入2位小数！');
	    }
	});
}
$(function(){
	number("#payMoney");
	number("#payM");
	number("#bPay");
})


/*百分数提取数字*/
function toPoint(percent){  //
    var str=percent.replace("%","");
    str=(str*10000)/(10000*100);
    return str;  
} 

/*垫付计算器*/
function dfu(obj) {
	 var idx1 = $("#xb1 li.active").find("input").val();
 	 var idx2 = $("#xb2 li.active").find("input").val();
 	 
 	 if($(obj).is(".active") ){ 
 		if ((idx1 == 3) && (idx2 == 1)) { 
	          $("#payCharge").val("1.30%");
	 	   }else if ((idx1 == 3) && (idx2 == 2)) {
	 	   	$("#payCharge").val("1.95%");
	 	   }else if ((idx1 == 3) && (idx2 == 3)) {
	 	   	$("#payCharge").val("2.60%");
	 	   }else if ((idx1 == 3) && (idx2 == 4)) {
	 	   	$("#payCharge").val("3.25%");
	 	   }else if ((idx1 == 3) && (idx2 == 5)) {
	 	   	$("#payCharge").val("3.90%");
	 	   }else if (((idx1 == 2) && (idx2 == 1)) || ((idx1 == 1) && (idx2 == 1))) { 
	 	   	$("#payCharge").val("1.45%");
	 	   }else if (((idx1 == 2) && (idx2 == 2)) || ((idx1 == 1) && (idx2 == 2))) { 
	 	   	$("#payCharge").val("2.175%");
	 	   }else if (((idx1 == 2) && (idx2 == 3)) || ((idx1 == 1) && (idx2 == 3))) { 
	 	   	$("#payCharge").val("2.90%");
	 	   }else if (((idx1 == 2) && (idx2 == 4)) || ((idx1 == 1) && (idx2 == 4))) { 
	 	   	$("#payCharge").val("3.625%");
	 	   }else if (((idx1 == 2) && (idx2 == 5)) || ((idx1 == 1) && (idx2 == 5))) { 
	 	   	$("#payCharge").val("4.35%");
	 	   }
 	 }else{
 		$("#payCharge").val("");
 	 }
}


$(function(){
	$("#payType").click(function(){
		pop(".xb1");
		tp();
	});
	
	$(".xb1 .tc_k").click(function(){
	     if($(this).is(".active")){
	    	 $(this).removeClass("active");
		     $("#payType").val("");
	     }else{ 
	       $(this).addClass("active");
	       $(this).siblings(".tc_k").removeClass("active");   
	       var txt = $(this).find(".p_lil").html();
		     $("#payType").val(txt);
		 
	     }
	     remove(".xb1");
	     dfu(".xb1 .tc_k");
    });
	
	
	$("#payTime").click(function(){
		pop(".xb2");
		tp();
	});
	$(".xb2 .tc_k").click(function(){
		
	     if($(this).is(".active")){
	    	 $(this).removeClass("active");
		     $("#payTime").val("");
	     }else{ 
	       $(this).addClass("active");
	       $(this).siblings(".tc_k").removeClass("active");   
	       var txt = $(this).find(".p_lil").html();
		     $("#payTime").val(txt);
		     
	    }
	     remove(".xb2");   
	     dfu(".xb2 .tc_k");
   });
	
	/*计算*/
	$("#calculate").click(function(){
		$(".c1").show();
		var idx1 = $("#payMoney").val();
	    var idx2 = $("#payTime").val();
		var idx3 = $("#payType").val();
		var idx4 = $("#payCharge").val();
	    var idxs1 = $("#xb1 li.active").find("input").val();
 	    var idxs2 = $("#xb2 li.active").find("input").val();
		if(idx1 == "") {
	    	alert("请输入金额！");
	    	$(".payDs").html("");
	    	$(".payAll").html("");
	    	$(".payAd").html("");
	    }else if (idx3 == "") {
	    	alert("请选择垫付类型");
	    	$(".payDs").html("");
	    	$(".payAll").html("");
	    	$(".payAd").html("");
	    }else if (idx2 == "") {
	    	
	    	alert("请选择垫付时长");
	    	$(".payDs").html("");
	    	$(".payAll").html("");
	    	$(".payAd").html("");
	    }else if($("#payCharge").val() == "") {
	 		$(".payDs").html("");
	    	$(".payAll").html("");
	    	$(".payAd").html("");
	    }
		
		 var price =idx2.replace(/[^0-9]/g, "");//日期中提出数字
		 if((idx1 != "") && (idx2!="") && (idx4!="")){
			    var pay2 = idx1*toPoint(idx4);
			    var pay1 = idx1*toPoint(idx4)/price;//每天只需
			    var pay3 = idx1*0.3;
			    var pay5 = idx1*0.3*toPoint(idx4);
			    var pay4 = idx1*0.3*toPoint(idx4)/price;
			
			    pay1 =pay1.toFixed(2);
			    pay2 =pay2.toFixed(2);
			    pay3 =pay3.toFixed(2);
			    pay4 =pay4.toFixed(2);
			    pay5 =pay5.toFixed(2);

		    }
		 
	 		 if( (idxs1 == 1)|| (idxs1 == 3) ){
			    	/*$("#payDay").text(pay1);*/
			    	$(".c_p").hide();
			    	$(".payDs").html(pay1);
			    	$(".payAll").html(pay2);
			    	
			    }else if( idxs1 == 2) {
			    	$(".c_p").show();
			    	$(".payAd").html(pay3);
			    	$(".payDs").html(pay4);	
					$(".payAll").html(pay5);
			    }else if( (idxs1 == "") || (idxs2 == "") || (idx1 == "") || (idx4 =="")){ 
			    	$(".payDs").html("");
			    	$(".payAll").html("");
			    	$(".payAd").html("");
			    }

	})
	
});

/*退税计算器*/
$(function(){
	$("#payR").click(function(){
		pop(".xb3");
		$("body").addClass("overHide");
		tp();
	});
	$(".xb3 .tc_k").click(function(){
	     if($(this).is(".active")){
	    	 $(this).removeClass("active");
		     $("#payR").val("");
	     }else{ 
	       $(this).addClass("active");
	       $(this).siblings(".tc_k").removeClass("active");   
	       var txt = $(this).find(".p_lil").html();
		     $("#payR").val(txt);
		 
	     }
     remove(".xb3");

   });
	
	$("#calculate1").click(function(){
		$(".c2").show();
		var idx1 = $("#payM").val();
		var idx2 = $("#xb3 li.active").find("input").val();
		var pay1 = idx1/1.16*toPoint(idx2);
		pay1 = pay1.toFixed(2);
		if(idx1 == "") {
	    	alert("请输入开票金额！");
	    	$(".tRate").html("");
	    	
	    }else if (idx2 == "") {
	    	alert("请选择退税率");
	    	$(".tRate").html("");
	    }else if ((idx1 != "") && (idx2!="")){
	    	$(".tRate").html(pay1);
	    }
		
	})
});

/*出口计算器*/
function ck(obj) {
	 var idx1 = $("#xb4 li.active").find("input").val();
	 
	 if($(obj).is(".active") ){ 
		if (idx1 == 1) { 
	          $("#fRate").val("4.5  分/美金");
	 	   }else if ((idx1 == 3) || (idx1 == 2)) {
	 	   	$("#fRate").val("6  分/美金");
	 	   }
	 }else{
		$("#fRate").val("");
	 }
}
function toPoints(percent){  //百分数提取数字
    var str=percent.replace("  分/美金","");
    return str;  
}
$(function() {
	$("#payTp").click(function(){
		pop(".xb4");
		tp();
	});
	$(".xb4 .tc_k").click(function(){
	     if($(this).is(".active")){
	    	 $(this).removeClass("active");
		     $("#payTp").val("");
	     }else{ 
	       $(this).addClass("active");
	       $(this).siblings(".tc_k").removeClass("active");   
	       var txt = $(this).find(".p_lil").html();
		     $("#payTp").val(txt);
		 
	     }
     remove(".xb4");
     ck(".xb4 .tc_k")
   });

	$("#calculate3").click(function(){
		$(".c3").show();
		var idx1 = $("#bPay").val();
		var idx2 = $("#fRate").val();
		var pay1 = idx1*toPoints(idx2)*0.01;
		pay1 = pay1.toFixed(2);
		if(idx1 == "") {
	    	alert("请输入报关金额！");
	    	$(".tdRate").html("");
	    	
	    }else if (idx2 == "") {
	    	alert("请选择出口类型");
	    	$(".tdRate").html("");
	    }else if ((idx1 != "") && (idx2!="")){
	    	$(".tdRate").html(pay1);
	    }
		
	});
});
function tp() {
	var h = document.documentElement.clientHeight;
	var h1 = $(".tach").height();

	if( h < h1 ){
		$(".tach").addClass("tps");
		
	}else {
		$(".tach").removeClass("tps");
	}
}