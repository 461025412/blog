<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>黑色Html5响应式个人博客模板——主题《如影随形》</title>
<meta name="keywords" content="个人博客模板,博客模板,响应式" />
<meta name="description" content="如影随形主题的个人博客模板，神秘、俏皮。" />
<link href="/blog/Public/css/v3.css" rel="stylesheet">
<link href="/blog/Public/css/base.css" rel="stylesheet">
<link href="/blog/Public/css/index.css" rel="stylesheet">
<link href="/blog/Public/css/media.css" rel="stylesheet">
<script type='text/javascript' src='/blog/Public/js/jquery-1.8.3.min.js'></script>
<script type='text/javascript' > var __module__="/blog/index.php/Home";
var __public__="/blog/Public";</script>
<script type='text/javascript' src='/blog/Public/js/checkReg.js'></script>
<script type='text/javascript' src='/blog/Public/js/myAjax.js'></script>

<script type='text/javascript' src='/blog/Public/js/promessage.js'></script>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<div class="ibody">
  
    <header>
    <h1>如影随形</h1>
    <h2>影子是一个会撒谎的精灵，它在虚空中流浪和等待被发现之间;在存在与不存在之间....</h2>
    <div class="logo"><a href="/"></a></div>
    <nav id="topnav"><a href="/blog/index.php/Home/Index/index">主页</a><a href="/blog/index.php/Home/User/index">个人资料</a><a href="/blog/index.php/Home/Diary/index">个人日志</a><a href="/blog/index.php/Home/Photo/index">相册</a><a href="/blog/index.php/Home/Liuyan/index">留言板</a></nav>
  </header>

  <article>
    <div class="banner">
      <ul class="texts">
        <p>The best life is use of willing attitude, a happy-go-lucky life. </p>
        <p>最好的生活是用心甘情愿的态度，过随遇而安的生活。</p>
      </ul>
    </div>
    <div class="bloglist">
	<form method="post" action="/blog/index.php/Home/Guest/login" name="register_form" onsubmit="return checkSubmit()" id="register_form">
        <div class="form_box">
          
          
		  <div class="reg_tips_center">账号信息 带*号必填</div>
          <div id="div_email" class="form_li">
            <label><font color="red">*</font> 昵　　称：</label>
            <input name="name" id="name" onblur="ajaxInfo('name')" class="w1" maxlength="16" type="text">  <span id="tip_name"></span>
			<br><font color="#999999">长度3-16个字符，1个汉字=2个字符
			<br>格式由26个字母，数字，汉字，下横线，中横线组成。</font>
		  </div>
          <div class="form_li">
            <label><font color="red">*</font> 登录密码：</label>
            <input name="password" id="password" onblur="checkPassWord()" class="w1" type="password"> <font id="tip_password" color="#999999">长度6-16个字符</font>
          </div>
          
		    <div class="form_li">
                <label><font color="red">*</font> 验&nbsp;证&nbsp;码&nbsp;：</label>
                <input id="checkcodes" name="verify" class="w2" maxlength="8" type="text" /><img id="getCode" onclick="refeshCode()" src="/blog/index.php/Home/Guest/getCode" style="position:relative;top:12px;" />
                <!-- /blog/index.php/Home/Guest/getCode -->
                
                 <div style="margin-top:10px;">
                <a href="javascript:void(0);" onclick="refeshCode()" id="refeshCode" > 换一张</a>
                
                
                <!-- document.getElementById('code').src='/blog/index.php/Home/Guest/getCode' -->
                <span id="tip_checkcodes"><font color="#999999">请输入验证码</font></span>
                <!--<span id="tip_checkcode"><?php echo ($verifyInfo); ?></span>-->
            </div>
			</div>
			
    
	

          <div class="form_li">
           
            <div class="tijiao"> 
			  <a class="btn_a1" id="a_register_submit" style="pointer:hand;">
              <!-- <button class="button_register" style="pointer:hand;" type="button" onclick="return checkreg();">免费注册</button> -->

                <input type="submit" value="登录" style="width:113px;border:none;background:url(/blog/Public/images/001.jpg) no-repeat;" />
              </a> 
          </div>

          
          
          </div>
        </div>
      </form>
     </div>
  </article>
  <aside>
    <div class="avatar"><a href="about.html"><span>关于杨青</span></a></div>
    <div class="topspaceinfo">
      <h1>执子之手，与子偕老</h1>
      <p>于千万人之中，我遇见了我所遇见的人....</p>
    </div>
    <div class="about_c">
      <p>网名：<?php echo ($user['wangming']); ?></p>
      <p>职业：<?php echo ($user['zhiye']); ?> </p>
      <p>籍贯：<?php echo ($user['jiguan']); ?></p>
      <p>电话：<?php echo ($user['phone']); ?></p>
      <p>邮箱：<?php echo ($user['email']); ?></p>
    </div>
    <div class="bdsharebuttonbox"><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
    <div class="tj_news">
      <h2>
        <p class="tj_t1">最新文章</p>
      </h2>
      <ul>
	  <?php if(is_array($newdiary)): $i = 0; $__LIST__ = $newdiary;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$newdiary): $mod = ($i % 2 );++$i;?><li><a href="/blog/index.php/Home\Diary\single\id\".$newdiary['id']><?php echo ($newdiary['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
      <h2>
	  
        <p class="tj_t2">推荐文章</p>
		
      </h2>
      <ul>
	  <?php if(is_array($hotdiary)): $i = 0; $__LIST__ = $hotdiary;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hotdiary): $mod = ($i % 2 );++$i;?><li><a href="/blog/index.php/Home\Diary\single\id\".$hotdiary['id']><?php echo ($hotdiary['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
    <div class="links">
      <h2>
        <p>友情链接</p>
      </h2>
      <ul>
        <li><a href="/">杨青个人博客</a></li>
        <li><a href="/">3DST技术社区</a></li>
      </ul>
    </div>
    <div class="copyright">
      <ul>
        <p> Design by <a href="/">DanceSmile</a></p>
        <p>蜀ICP备11002373号-1</p>
        </p>
      </ul>
    </div>
  </aside>
  <script src="js/silder.js"></script>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
 <script type="text/javascript">
 function ajaxInfo(item){
                
                if(item == "name"){
                    var notice = '昵称';
                    var verify = $("#"+item).val().match(/^([\u4E00-\uFA29]|[\uE7C7-\uE7F3]|[a-zA-Z0-9]){3,16}$/);
					//var verify = $("#"+item).val().match(/^[\w-_]{3,16}$/);
                }else{
                    var notice = '邮箱';
                    var verify = $("#"+item).val().match(/^[_.0-9a-z-]+@([0-9a-z][0-9a-z-]+.)+[a-z]{2,3}$/);
                }
                
                if($("#"+item).val().length == 0){
                    $("#tip_"+item).css('color', 'red').html(notice+"不能为空!");
                    return false;
                }else if(verify == null){
                    $("#tip_"+item).css('color', 'red').html(notice+"格式不正确");
                    return false;            
                }
               
               

            }

            

function checkVerify() {
	var inputCode = $('#checkcodes');
	var noticeInfo = $('#tip_checkcodes');
	
	var ss;
	var data = "ver="+inputCode.val();
	myAjax(__module__+'/Guest/verify', 'post', 'text', data, function(data){
		if(data=='true'){
			noticeInfo.html("<img src='"+__public__+"/images/ok.gif' />");
			ss = true;
			
			
		}else{
			
			noticeInfo.html("<font color='red'>验证码不正确!</font>");
			ss = false;
		}
	}, false);
	
	
	return ss;
}
function refeshCode(){
    document.getElementById('getCode').src = getCode.src+'/rand/'+Math.random();
}
          function checkPassWord() {
    //验证密码
	
    if($("#password").val().length == 0){
        $("#tip_password").css('color', 'red').html('密码不能为空!');
        return false;
    }else if($("#password").val().match(/^[\@A-Za-z0-9\!\#\$\%\^\&\*\.\~]{6,16}$/) == null){
        $("#tip_password").css('color', 'red').html('密码格式不正确!');
        return false;
    }
    $("#tip_password").css('color', 'green').html('密码合格!');
    return true;
}

function checkSubmit() {
	
	
    //注册提交验证
    return checkVerify()&&checkPassWord()&&ajaxInfo(name);}


        </script>
</body>
</html>