var ceng=null;
$(function(){
	/*
	var touserid = null;
	var comid = null;
	//为回复按钮添加点击事件
	$('.comment_reply').live("click",function(){
		var comment_reply = $(this);
		comid = comment_reply.parent().attr('id');
		touserid = comment_reply.parent().attr('name');
		$.ajax({
			url:__module__+'/DiaryReply/select',
			type:'post',
			dataType:'json',
			async:false,
			data:{touserid:touserid},
			success:function(data){
				if(data=='false'){
				
					proMess('不可以对自己回复');
					$("div[name='text_reply']").css({display:'none'});
					return;
				}
				if(data=='true'){
					
					$("div[name='text_reply']").css({display:"none"});
					comment_reply.parent().parent().parent().children("div[name='text_reply']").css({display:"block"});
				}
			}
		});

	});
	
	*/
	
	//添加回复
	$('.reply_but').live("click",function(){
		var reply = $(this);
		var content = reply.siblings('textarea').val();
		if(content.length==0){
			proMess('回复内容不能为空');
			return;
		}
		$.ajax({
			url:__module__+'/DiaryReply/add',
			type:'post',
			dataType:'json',
			data:{comid:comid,touserid:touserid,content:content},
			success:function(data){
				if(data=='false'){
					proMess('回复失败');
					return;
				}
				info = "<span class='comment_span' typeid='"+data.id+"' id="+data.comid+" name="+data.cmuserid+"><a target='_blank' href='"+__module__+"/HomePage/index/id/"+data.cmuserid+"'><b>"+data.fromusername+"</b></a>回复<a target='_blank' href='"+__module__+"/HomePage/index/id/"+data.touserid+"'><b>"+data.tousername+"</b></a>说:&nbsp;"+data.content+"&nbsp;&nbsp;<a href='javascript:void(0)' class='comment_reply'>回复</a>&nbsp;&nbsp;<a href='javascript:void(0);' style='display:none;width:50px;' name='reply_con' class='comment_del'>删除</a></span><br/>";
				reply.parent().siblings("div[class='reply_content']").append(info);
				$("div[name='text_reply']").css({display:'none'});
			}
		});
	});
	});
	
	//执行当前用户的回复消息删除
	

//显示评论内容
function showComment(){
	var diaryid = $("#diaryid").val();
	$.ajax({
		url:__module__+'/Diary/index',
		type:'post',
		dataType:'json',
		data:{diaryid:diaryid},
		success:function(data){
			
			var comment = "";
			if(data==null){
				return;
			}
			for(var i=0;i<data.length;i++){
				ceng = i+1;
				comment += "<li style='line-height:30px;' class='comli'>";
				comment += "<div><span class='comment_span' id="+data[i].id+" name="+data[i].cmuserid+"><a target='_blank' href='"+__module__+"/HomePage/index/id/"+data[i].cmuserid+"'><b>"+data[i].username+"</b></a>说：&nbsp;"+data[i].content+"&nbsp;&nbsp;<a href='javascript:void(0)' class='comment_reply'>回复</a>&nbsp;&nbsp;<a href='javascript:void(0);' style='display:none;width:50px;' name='comment_con' class='comment_del'>删除</a></span></div>";
				comment += "<div class='jilou'><span>"+data[i].cmtime+"</span>&nbsp;&nbsp;<label>"+(i+1)+"楼</label></div>";
				comment += "<div class='reply_content' style='margin-left:50px;'>";
				if(data[i].reply!==null){
					var reply = data[i].reply;
					for(var j=0;j<reply.length;j++){
						comment += "<span class='comment_span' typeid='"+reply[j].id+"' id="+reply[j].comid+" name="+reply[j].cmuserid+"><a target='_blank' href='"+__module__+"/HomePage/index/id/"+reply[j].cmuserid+"'><b>"+reply[j].fromusername+"</b></a>回复<a target='_blank' href='"+__module__+"/HomePage/index/id/"+reply[j].touserid+"'><b>"+reply[j].tousername+"</b></a>说：&nbsp;"+reply[j].content+"&nbsp;<a href='javascript:void(0)' class='comment_reply'>回复</a>&nbsp;&nbsp;<a href='javascript:void(0);' style='display:none;width:50px;' name='reply_con' class='comment_del'>删除</a></span><br/>";
					}
				}
				comment += "</div>";
				comment += "<div style='width:100%;padding-left:50px;display:none;' name='text_reply'><textarea style='resize:none;width:50%;height:80px;'/></textarea><button class='reply_but'>提交</button></div>";
				comment += "<div style='clear:both'></div></li>";
			}
			comment += "<div style='clear:both'></div>";
			$(".comments ul").prepend(comment);
		}
	});
}



//执行用户评论
function addComment(){
	var codeInput = $("#checkcode");
	var code = $("#checkcode").val();
	if(code.length==0){
		alert("验证码不能为空");
		return;
	}
	var res = null;
	$.ajax({
		url:__module__+'/Diary/checkCode',
		type:'post',
		dataType:'json',
		data:{code:code},
		async:false,
		success:function(data){
			if(data=='false'){
				alert('验证码不正确');
				refeshCode();
				codeInput.val("");
				res = false;
				return;
			}
			refeshCode();
			codeInput.val("");
			res = true;
		}
	});
	if(res==false){
		return;
	}
	var content = $("#commentcontent").val();
	if(content.length==0){
		proMess("评论内容不能为空");
		return;
	}
	var diaryid = $("#diaryid").val();
	$.ajax({
		url:__module__+'/Diary/add',
		type:'post',
		dataType:'json',
		data:{diaryid:diaryid,content:content},
		success:function(info){
			
			if(info=='false'){
				alert('评论失败');
				return;
			};
			var comment = "";
			comment += "<li class='comli' style='line-height:30px;'>";
			comment += "<div><span class='comment_span' typeid="+info.id+" id="+info.id+" name="+info['cmuserid']+"><a target='_blank' href='"+__module__+"/HomePage/index/id/"+info.cmuserid+"'><b>"+info.username+"</b></a>说："+info.content+"&nbsp;&nbsp;<a href='javascript:void(0)' class='comment_reply'>回复</a>&nbsp;&nbsp;<a href='javascript:void(0);' style='display:none;width:50px;' name='comment_con' class='comment_del'>删除</a></span></div>";
			comment += "<div class='jilou'><span>"+info.cmtime+"</span>&nbsp;&nbsp;<label>"+(ceng+1)+"楼</label></div>";
			comment += "<div class='reply_content' style='margin-left:50px;'>";
			comment += "</div>";
			comment += "<div style='width:100%;padding-left:50px;display:none;' name='text_reply'><textarea style='resize:none;width:50%;height:80px;'/></textarea><button class='reply_but'>提交</button></div>";
			comment += "<div style='clear:both'></div></li>";
			ceng = ceng+1;
			
			$(".comments ul").append(comment);
			$("#commentcontent").val("");
		}
	});
	
}


