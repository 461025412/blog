<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台用户登录操作</title>
<link href="/blog1/Public/dwz/themes/css/login.css" rel="stylesheet" type="text/css" />
<script src="/blog1/Public/dwz/js/jquery-1.7.1.js" type="text/javascript"></script>
<script language="JavaScript">
<!--
function fleshVerify(type){ 
	//重载验证码
	var timenow = new Date().getTime();
	if (type){
		$('#verifyImg').attr("src", '/blog1/index.php/Admin/Login/getCode/adv/1/'+timenow);
	}else{
		$('#verifyImg').attr("src", '/blog1/index.php/Admin/Login/getCode/'+timenow);
	}
}
//-->
</script>
</head>
<body>
<div id="login">
	<div id="login_header">
		<h1 class="login_logo">
			<a href="/blog1/index.php"><img src="/blog1/Public/dwz/themes/default/images/login_logo.gif" /></a>
		</h1>
		<div class="login_headerContent">
			<div class="navList">
				<ul>
					<li><a href="#">设为首页</a></li>
					<li><a href="#">升级说明</a></li>
					<li><a href="#">反馈</a></li>
					<li><a href="#">帮助</a></li>
				</ul>
			</div>
			<h2 class="login_title"><img src="/blog1/Public/dwz/themes/default/images/login_title.png" /></h2>
		</div>
	</div>
	<div id="login_content">
		<div class="loginForm">
			<form method="post" action="/blog1/index.php/Admin/Login/login">
				<p>
					<label>帐 &nbsp; 号：</label>
					<input type="text" name="username" size="20" class="login_input" />
				</p>
				<p>
					<label>密 &nbsp; 码：</label>
					<input type="password" name="userpwd" size="20" class="login_input" />
				</p>
				<p>
					<label>验&nbsp;证&nbsp;码：</label>
					<input type="text" name="verify" size="10" class="login_input"  />

				</p>
				<p>
					<img id="verifyImg" src="/blog1/index.php/Admin/Login/getCode" onclick="fleshVerify()" >

				</p>
		
				<!--<p>
					<label>验证码：</label>
					<input class="code" name="verify" type="text" size="5" />
					<span><img id="verifyImg" SRC="/blog1/index.php/Admin/Login/getCode" onClick="fleshVerify()" border="0" alt="点击刷新验证码" style="cursor:pointer" align="absmiddle"></span>
				</p>-->
				<div class="login_bar" style="padding-left: 80px;">
					<input class="sub" type="submit" value=" " />
				</div>
				<p>
					<label>&nbsp;</label>
					<span style="color:red"><?php echo ($errorInfo); ?></span>
				</p>
			</form>
		</div>
		<div class="login_banner"><img src="/blog1/Public/dwz/themes/default/images/login_banner.jpg" /></div>
		<div class="login_main">
			<!--<ul class="helpList">
				<li><a href="#">下载驱动程序</a></li>
				<li><a href="#">如何安装密钥驱动程序？</a></li>
				<li><a href="#">忘记密码怎么办？</a></li>
				<li><a href="#">为什么登录失败？</a></li>
			</ul>-->
			<div class="login_inner">
				<p>测试账号(用户名/密码)</p>
				<p>管理员：admin/admin</p>
			</div>
		</div>
	</div>
	<div id="login_footer">
		Copyright &copy; 2009 <<?php echo (C("COMPANY")); ?>> Inc. All Rights Reserved.
	</div>
</div>

</body>
</html>