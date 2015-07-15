<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>黑色Html5响应式个人博客模板——主题《如影随形》</title>
<meta name="keywords" content="个人博客模板,博客模板,响应式" />
<meta name="description" content="如影随形主题的个人博客模板，神秘、俏皮。" />

<link href="/blog/Public/css/base.css" rel="stylesheet">
<link href="/blog/Public/css/style.css" rel="stylesheet">
<link href="/blog/Public/css/media.css" rel="stylesheet">
<link href="/blog/Public/css/about.css" rel="stylesheet">


<style type="text/css" />

.fangke{float:left;} 
</style>

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
    <h2 class="about_h">您现在的位置是：<a href="/">首页</a>><a href="1/">慢生活</a></h2>
	<div class="about">
      <h2>图片名:<?php echo ($single['name']); ?></h2>
      <ul>
        <img src="/blog/Public/images/<?php echo ($single['bigurl']); ?>" ></img>
      </ul>
      
      
    </div>
    
  </article>
  <aside>
    <div class="rnav">
      <li class="rnav1 "><a href="/"><?php echo ($type['0']['name']); ?></a></li>
      <li class="rnav2 "><a href="/"><?php echo ($type['1']['name']); ?></a></li>
      <li class="rnav3 "><a href="/"><?php echo ($type['2']['name']); ?></a></li>
      <li class="rnav4 "><a href="/"><?php echo ($type['3']['name']); ?></a></li>
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
        <?php if(is_array($newdiary)): $i = 0; $__LIST__ = $newdiary;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$newdiary): $mod = ($i % 2 );++$i;?><li><a href="/blog/index.php/Home/Diary/single/id/<?php echo ($newdiary['id']); ?>"><?php echo ($newdiary['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
      <h2>
        <p>最新评论</p>
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
  <script src="js/silder.js"></script>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
</body>
</html>