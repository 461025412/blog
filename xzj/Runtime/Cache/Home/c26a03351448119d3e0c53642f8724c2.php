<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>黑色Html5响应式个人博客模板——主题《如影随形》</title>
<meta name="keywords" content="个人博客模板,博客模板,响应式" />
<meta name="description" content="如影随形主题的个人博客模板，神秘、俏皮。" />
<link href="/blog/Public/css/v3.css" rel="stylesheet">
<link href="/blog/Public/css/button.css" rel="stylesheet">
<link href="/blog/Public/css/base.css" rel="stylesheet">
<link href="/blog/Public/css/style.css" rel="stylesheet">
<link href="/blog/Public/css/media.css" rel="stylesheet">
<style type="text/css" />

.fangke{float:left;} 
</style>
<script type='text/javascript' src='/blog/Public/js/jquery-1.8.3.min.js'></script>
<script type="text/javascript" src="/blog/Public/xheditor/xheditor-1.2.1.min.js">
<script type='text/javascript'>var __module__='/blog/index.php/Home';
var __public__='/blog/Public';</script>
<script type='text/javascript' src='/blog/Public/js/diaryComment.js'></script>


<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<style type="text/css">

</style>
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<div class="ibody">
  <header>
    <h1>如影随形</h1>
    <h2>影子是一个会撒谎的精灵，它在虚空中流浪和等待被发现之间;在存在与不存在之间....</h2>
    <div class="logo"><a href="/blog/index.php/Home/Index/index" title="到主页"></a></div>
    <nav id="topnav"><a href="/blog/index.php/Home/Index/index">主页</a><a href="/blog/index.php/Home/User/index">个人资料</a><a href="/blog/index.php/Home/Diary/index">个人日志</a><a href="/blog/index.php/Home/Photo/index">相册</a><a href="/blog/index.php/Home/Liuyan/index">留言板</a></nav>
  </header>
  <article>
    <h2 class="about_h">您现在的位置是：<a href="/">首页</a>><a href="1/">慢生活</a></h2>
	<div class="left ri">
	<div class="content">
        <h1></h1>
        <div class="jian">
		
		类型：<?php echo ($diary["type"]); ?>&nbsp;&nbsp;发表时间：<?php echo (date("Y-m-d,H:i:s",$diary["time"])); ?>  人气：<?php echo ($diary["view"]); ?><font id="json_hits"></font>&nbsp;&nbsp;&nbsp;&nbsp;<a  href="#comment">我要说几句</a></div>
        <div class="real">

	      <div class="topj" style="line-height:40px;"> 
		  <a  href="/blog/index.php/Home/HomePage/index/id/<?php echo ($user["id"]); ?>" class="topimg">
			<img src="/blog/Public/Uploads/pic/<?php echo ($diary["photo"]); ?>" border="0" height="227" width="185">
		  </a> <div >
			<?php if($user["gender"] == '0'): ?><img src="/blog/Public/images/f2fde8e7d8aa2a10.gif" class="" border="0"><?php else: ?><img src="/blog/Public/images/87197a0d51022068.gif" class="" border="0"><?php endif; ?>
		  <a  style="display:block;margin-top:1px;margin-left:1px;" href="/blog/index.php/Home/HomePage/index/id/<?php echo ($user["id"]); ?>">作者：<?php echo ($diary["auth"]); ?></a></div>
		  <br>
            <span>标题：<?php echo ($diary["title"]); ?>  </span><br>
			
		  </div>
		  <div style="clear:both"></div>
		  <div  style="width:100%;margin-top:10px;" >
			<?php echo ($diary["content"]); ?>
		  </div>
		  </div>
        <div class="comments">
			<ul style="list-style:none;">
			</ul>
		  <a name="comment">
          
		     
        
      

    
   <div style="clear:both;"></div>
  </div>
  </div>
  <div class="bloglist">
	 <div class="bo3 comments">
    <?php if(empty($_SESSION['user'])): ?><div class="fbk">
		    
			<form action='/blog/index.php/Home/Liuyan/inser' method='post' name='form' onsubmit='return doSubmit();'>
			
			
			<div class="texb">
			<span class="zs" id="counter">只有登录了才能留言哦</span>　　　　　　　　　　　　　　　　　　　
			 <span class="zs" id="counter"><a href="/blog/index.php/Home/Guest/register">注册用户</a></span>　　　　　　　　　<span class="zs" id="counter"><a href="/blog/index.php/Home/Guest/login">登录</a></span> 
			 
			</div>
          
		 
			
		    <img src="/blog/Public/images/123.gif" style="margin-left:52px;">
			<hr/>
			<?php else: ?>
			<form action='/blog/index.php/Home/Liuyan/xianshi' method='post' name='form' onsubmit='return doSubmit();'>
			<div class="tex"><textarea  class="xheditor {tools:'simple'}" rows="1" tabindex="1" id="content"   name="content" style="width:60%; height:40px;"></textarea></div>
			 <input name="did" id="did" value="<?php echo ($diary['id']); ?>" type="hidden">
			  <input name="uid" id="uid" value="<?php echo ($diary['uid']); ?>" type="hidden">
			<div class="texb">
			   
			  <input type='submit' id="btn_roll" value='' style="width:80px;height:40px;border:0; background:url(/blog/Public/images/liuyan.jpg) "/>
			</div><?php endif; ?>
			<hr />
		      <ul>
      
	   
  
              <li >
                <div class="lou"> 
				  
				   
                  <div class="weinei1" id=<?php echo ($diary['id']); ?>> 
				  
				 
					<div id="comdiv_adass<?php echo ($diary['id']); ?>" style="display:none ;margin-top:24px;margin-left:-116px;" class="pin">
				<form action='/blog/index.php/Home/WbPerson/insert' method='post' target='myform' >
				  
				  <table style="line-height:25px;" border="0" cellpadding="5" cellspacing="5" width="600px">
				    <tbody><tr>
					  <td id="reply_uid_adas" align="right;" width="100px;"></td>
					  <td width="400px;"><textarea name="comment_362" id="w<?php echo ($diary['id']); ?>" style="width:95%;height:30px;overflow:hidden;"></textarea></td>
					  <td>
					  <a href="javascript:void(0);" class="btn_c2" id="btn_comment_362" onclick="return huiFu1(<?php echo ($diary['huifuid']); ?>,<?php echo ($diary['id']); ?>);"><span>提交回复</span></a>							  
					  </td>
					</tr>
				  </tbody></table>
				</form>
                </div>
				  </div>
				  <?php if(is_array($huifu)): foreach($huifu as $s=>$key2): echo ($key2["ss"]); endforeach; endif; ?>
                  <div style="clear:both"></div>
                  
                </div>
				
                <div style="clear:both"></div>
				
				<!--评论微博-->
               
				
				
				 
                <div style="clear:both"></div>
              </li>
			
			  
              <div style="clear:both"></div>
           
         
		  </ul>
      </div>
	  
     </div>
  </article>
  <aside>
    <div class="rnav">
       <li class="rnav1 "><a href="/blog/index.php/Home/Diary/index/id/<?php echo ($type['0']['id']); ?>"><?php echo ($type['0']['name']); ?></a></li>
      <li class="rnav2 "><a href="/blog/index.php/Home/Diary/index/id/<?php echo ($type['1']['id']); ?>"><?php echo ($type['1']['name']); ?></a></li>
      <li class="rnav3 "><a href="/blog/index.php/Home/Diary/index/id/<?php echo ($type['2']['id']); ?>"><?php echo ($type['2']['name']); ?></a></li>
      <li class="rnav4 "><a href="/blog/index.php/Home/Diary/index/id/<?php echo ($type['3']['id']); ?>"><?php echo ($type['3']['name']); ?></a></li>
    </div>
    <div class="ph_news">
      <h2>
        <p>点击排行</p>
      </h2>
      <ul class="ph_n">
         <?php if(is_array($hotdiary)): $i = 0; $__LIST__ = $hotdiary;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hotdiary): $mod = ($i % 2 );++$i;?><li><a href="/blog/index.php/Home/Diary/single/id/<?php echo ($hotdiary['id']); ?>"><?php echo ($hotdiary['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
      <h2>
        <p>最新文章</p>
      </h2>
      <ul>
        <?php if(is_array($newdiary)): $i = 0; $__LIST__ = $newdiary;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$newdiary): $mod = ($i % 2 );++$i;?><li><a href="/blog/index.php/Home/Diary/single/id/$newdiary['id']"><?php echo ($newdiary['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
      <h2>
        <p>最新留言</p>
      </h2>
      <ul class="pl_n">
	  <?php if(is_array($huifu)): $i = 0; $__LIST__ = $huifu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$huifu): $mod = ($i % 2 );++$i;?><dl> 
          <dt><img src="/blog/Public/Uploads/pic/<?php echo ($huifu['user']['bigpic']); ?>"> </dt>
          <dt> </dt>
          <dd><?php echo ($huifu['user']['name']); ?>
            <time><?php echo (date("Y-m-d H:i:s",$huifu['time'])); ?></time>
          </dd>
          <dd><a href="/"><?php echo ($huifu['huifu']); ?></a></dd>
        </dl><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
       <h2>
        <p>最近访客</p>
      </h2>
      <ul class="pl_n">
        <?php if(is_array($fangke)): $i = 0; $__LIST__ = $fangke;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fangke): $mod = ($i % 2 );++$i;?><dl class="fangke"> 
          <dt><img src="/blog/Public/Uploads/pic/<?php echo ($fangke['bigpic']); ?>"> </dt>

        </dl><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
    <div class="copyright" style="margin-top:130px">
      <ul>
        <p> Design by <a href="/">DanceSmile</a></p>
        <p>蜀ICP备11002373号-1</p>
        </p>
      </ul>
    </div>
  </aside>
 
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
<script type='text/javascript'>
  
	
	
	var userid = null;
	function doHuifu(id){
		
		var div = document.getElementById('comdiv_adass'+id);
		var div1 = document.getElementById("comdiv_adas"+id);
		if(div.style.display == 'none'){
				div.style.display = 'block';
				div1.style.display = 'none';
			}else{
				div.style.display = 'none';
			}
		return false;
	}
	
	
	
	function huiFu(duishuiid,liuyanid,id){
		
		$.ajax({
			url:'/blog/index.php/Home/Diary/insertH',
			type:'post',
			dataType:'json',
			data:{id:duishuiid,content:$('#w'+id).val(),liuyanid:liuyanid},
			success:function(info){
				if(info['error']=='1'){alert('不能对自己留言');
				$('#w'+id).val('');
					$('#comdiv_adass'+id).css('display','none');
				
				exit();}
		         var datawb = "";
					datawb += "<div class='weinei1' style='width:500px;'>"; 
					datawb += "<a href=\"\" target=\"_blank\" class=\"head\" title=\"查看资料\" style=\"height:30px; width:30px\">";
					datawb += "<img src='"+info['photo']+"'";
					datawb += "  border='0' style='height:100px;width:100px;' />";
					datawb += "</a>";
					datawb += "<span class=\"you\"><a href=\"\" title=\"查看TA的微播\"><b>"+info['liuyanzhe']+"</b></a>";
					datawb += "对<a href=''title=\"查看TA的微播\"><b>"+info['beiliuyan']+"</b></a>说：</span>";
					datawb += info['huifu'];
					datawb += "</div>";
					datawb += "<div style=\"clear:both\"></div>";
					
					$('#'+info['diaryid']).after(datawb);
					$('#w'+id).val('');
					$('#comdiv_adass'+id).css('display','none');
				
			}
		});
	}
	function huiFu1(duishuiid,id){
		
		$.ajax({
			url:'/blog/index.php/Home/Diary/insertH',
			type:'post',
			dataType:'json',
			data:{id:duishuiid,content:$('#w'+id).val(),liuyanid:id},
			success:function(info){
				if(info['error']=='1'){alert('不能对自己留言');
				$('#w'+id).val('');
					$('#comdiv_adass'+id).css('display','none');
				
				exit();}
		         var datawb = "";
					datawb += "<div class='weinei1' style='width:500px;'>"; 
					datawb += "<a href=\"\" target=\"_blank\" class=\"head\" title=\"查看资料\" style=\"height:30px; width:30px\">";
					datawb += "<img src='"+info['photo']+"'";
					datawb += " border='0' style='height:50px;width:50px;' />";
					datawb += "<span class=\"you\"><a href=\"\" title=\"查看TA的微播\"><b>"+info['liuyanzhe']+"</b></a>";
					datawb += "对<a href=''title=\"查看TA的微播\"><b>"+info['beiliuyan']+"</b></a>说：</span>";
					datawb += info['huifu'];
					datawb += "</div>";
					datawb += "<div style=\"clear:both\"></div>";
					
					$('#'+info['diaryid']).after(datawb);
					$('#w'+id).val('');
					$('#comdiv_adass'+id).css('display','none');
				
			}
		});
	}
	
function doSubmit(){
			if(0<$('#content').val().length && $('#content').val().length < 140){
				$('.xxoo').empty();
				
				$.ajax({
					url:'/blog/index.php/Home/Diary/insert',
					type:'post',
					dataType:'json',
					data:{content:$('#content').val(),ids:$('#did').val(),uid:$('#uid').val()},
					success:function(info){
						
							
							location.replace('/blog/index.php/Home/Diary/single/id/'+info['tiaozhuanid']);}
						
					
				});
			}
			return false;
		}
</script>
</body>
</html>