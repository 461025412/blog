//设置提示消息弹出
function proMess($message){
	var box = $("#pro_box");
	var left = ($(window).width()-$("#pro_box").width())/2+$(window).scrollLeft();
	var top = 80+$(window).scrollTop();
	
	$("#message_ceng").fadeTo('fast',0.3).css({width:$(document).width(),height:$(document).height()});
	$("#pro_mess b").html($message);
	box.css({left:left,top:top}).show();
	setTimeout(function(){$("#message_ceng").css({display:"none"});box.fadeOut(1000);},1500);
}