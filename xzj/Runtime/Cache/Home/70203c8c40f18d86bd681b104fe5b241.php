<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>黑色Html5响应式个人博客模板——主题《如影随形》</title>
<meta name="keywords" content="个人博客模板,博客模板,响应式" />
<meta name="description" content="如影随形主题的个人博客模板，神秘、俏皮。" />
<link href="/blog/Public/css/base.css" rel="stylesheet">
<link href="/blog/Public/css/about.css" rel="stylesheet">
<link href="/blog/Public/css/media.css" rel="stylesheet">
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
    <div class="logo"><a href="/blog/index.php/Home/Index/index" title="到主页"></a></div>
    <nav id="topnav"><a href="/blog/index.php/Home/Index/index">主页</a><a href="/blog/index.php/Home/User/index">个人资料</a><a href="/blog/index.php/Home/Diary/index">个人日志</a><a href="/blog/index.php/Home/Photo/index">相册</a><a href="/blog/index.php/Home/Liuyan/index">留言板</a></nav>
  </header>
  <article>
    <h3 class="about_h">您现在的位置是：<a href="/">首页</a>><a href="1/">个人资料</a></h3>
    <div class="about">
      <h2>Just about me</h2>
      <ul>
        <p><?php echo ($user['introduce']); ?></p>
      </ul>
      <h2>基本信息</h2>
      <ul class="blog_a">
        <p>姓  名：<?php echo ($user['name']); ?>
        <p>性  别：<?php echo ($user['gender']); ?>
        <p>爱  好：<?php echo ($user['aihao']); ?></p>
        <p>现  居：<?php echo ($user['xianju']); ?></p>
		<p>喜欢的歌手：<?php echo ($user['singer']); ?>
        <p>希  望：<?php echo ($user['hope']); ?>
      </ul>
    </div>
  </article>
  <aside>
    <div class="avatar"><a href="/blog/index.php/Home/User/index"><span>关于徐忠杰</span></a></div>
    <div class="topspaceinfo">
      
      <p style="font-family: 'Microsoft Yahei',Arial,Helvetica,sans-serif;
    font-size:14px;color:black;">站在时间的长轴上，以一个变量堆积的现在的自己，回首望去，真想对过去残缺、自卑的自己说一句：谢谢你，那时没有选择放弃...</p>
    </div>
    <div class="about_c">
      <p>网名：<?php echo ($user['wangming']); ?></p>
      <p>职业：<?php echo ($user['zhiye']); ?> </p>
      <p>籍贯：<?php echo ($user['jiguan']); ?></p>
      <p>电话：<?php echo ($user['phone']); ?></p>
      <p>邮箱：<?php echo ($user['email']); ?></p>
      <p> 
        <!--以下是QQ邮件列表订阅嵌入代码--><a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=sISGgYCChYSBgvDBwZ7T390" style="text-decoration:none;"><img src="http://rescdn.qqmail.com/zh_CN/htmledition/images/function/qm_open/ico_mailme_22.png"/></a></p>
    </div>
  </aside>
  <script src="js/silder.js"></script>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
</body>
</html>