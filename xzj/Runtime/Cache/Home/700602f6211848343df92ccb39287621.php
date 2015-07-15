<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>黑色Html5响应式个人博客模板——主题《如影随形》</title>
<meta name="keywords" content="个人博客模板,博客模板,响应式" />
<meta name="description" content="如影随形主题的个人博客模板，神秘、俏皮。" />
<link href="/blog1/Public/css/style.css" rel="stylesheet">
<link href="/blog1/Public/css/base.css" rel="stylesheet">
<link href="/blog1/Public/css/index.css" rel="stylesheet">
<link href="/blog1/Public/css/media.css" rel="stylesheet">

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
    <div class="logo"><a href="/blog1/index.php/Home/Index/index" title="到主页"></a></div>
    <nav id="topnav"><a href="/blog1/index.php/Home/Index/index">主页</a><a href="/blog1/index.php/Home/User/index">个人资料</a><a href="/blog1/index.php/Home/Diary/index">个人日志</a><a href="/blog1/index.php/Home/Photo/index">相册</a><a href="/blog1/index.php/Home/Liuyan/index">留言板</a></nav>
  </header>

  <article>
    <div class="banner">
      <ul class="texts">
        <p>The best life is use of willing attitude, a happy-go-lucky life. </p>
        <p>最好的生活是用心甘情愿的态度，过随遇而安的生活。</p>
      </ul>
    </div>
    <div class="bloglist">
      <h2>
        <p><span>推荐</span>文章</p>
      </h2>
	  <?php if(is_array($cxdiary)): $i = 0; $__LIST__ = $cxdiary;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cxdiary): $mod = ($i % 2 );++$i;?><div class="blogs">
        <h3><a href="/">标题：<?php echo ($cxdiary['title']); ?></a></h3>
        <figure><img src="/blog1/Public/Uploads/pic/<?php echo ($cxdiary['photo']); ?>" ></figure>
        <ul class="text">
          <p style="width:400px;height:100px;overflow:hidden;"><?php echo ($cxdiary['content']); ?></p>
          <a href="/blog1/index.php/Home/Diary/single/id/<?php echo ($cxdiary['id']); ?>" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
        </ul>
        <p class="autor"><span>作者：<?php echo ($cxdiary['auth']); ?></span><span>分类：【<a href="/"><?php echo ($cxdiary['name']); ?></a>】</span><span>浏览（<a href="/"><?php echo ($cxdiary['view']); ?></a>）</span><span>评论（<a href="/"><?php echo ($cxdiary['huifu']); ?></a>）</span></p>
        <div class="dateview"><?php echo (date("Y-m-d H:i:s",$cxdiary['time'])); ?></div>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>
	 <?php if(empty($jddiary['title'])): else: ?>
      <div class="blogs">
        <h3><a href="/">标题：<?php echo ($jddiary['title']); ?></a></h3>
        <figure><img src="/blog1/Public/Uploads/pic/<?php echo ($jddiary['photo']); ?>" ></figure>
        <ul class="text">
          <p style="width:400px;height:100px;overflow:hidden;"><?php echo ($jddiary['content']); ?></p>
          <a href="/blog1/index.php/Home/Diary/single/id/<?php echo ($jddiary['id']); ?>" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
        </ul>
        <p class="autor"><span>作者：<?php echo ($jddiary['auth']); ?></span><span>分类：【<a href="/"><?php echo ($jddiary['name']); ?></a>】</span><span>浏览（<a href="/"><?php echo ($jddiary['view']); ?></a>）</span></p>
        <div class="dateview"><?php echo (date("Y-m-d H:i:s",$jddiary['time'])); ?></div>
      </div><?php endif; ?>
	<?php if(empty($rsdiary['title'])): else: ?>
      <div class="blogs">
        <h3><a href="/">标题：<?php echo ($rsdiary['title']); ?></a></h3>
        <figure><img src="/blog1/Public/Uploads/pic/<?php echo ($rsdiary['photo']); ?>" ></figure>
        <ul class="text">
          <p style="width:400px;height:100px;overflow:hidden;"><?php echo ($rsdiary['content']); ?></p>
          <a href="/blog1/index.php/Home/Diary/single/id/<?php echo ($rsdiary['id']); ?>" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
        </ul>
        <p class="autor"><span>作者：<?php echo ($rsdiary['auth']); ?></span><span>分类：【<a href="/"><?php echo ($rsdiary['name']); ?></a>】</span><span>浏览（<a href="/"><?php echo ($rsdiary['view']); ?></a>）</span></p>
        <div class="dateview"><?php echo (date("Y-m-d H:i:s",$rsdiary['time'])); ?></div>
      </div><?php endif; ?>
	<?php if(empty($grdiary['title'])): else: ?>
      <div class="blogs">
        <h3><a href="/">标题：<?php echo ($grdiary['title']); ?></a></h3>
        <figure><img src="/blog1/Public/Uploads/pic/<?php echo ($grdiary['photo']); ?>" ></figure>
        <ul class="text">
          <p style="width:400px;height:100px;overflow:hidden;"><?php echo ($grdiary['content']); ?></p>
          <a href="/blog1/index.php/Home/Diary/single/id/<?php echo ($grdiary['id']); ?>" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
        </ul>
        <p class="autor"><span>作者：<?php echo ($grdiary['auth']); ?></span><span>分类：【<a href="/"><?php echo ($grdiary['name']); ?></a>】</span><span>浏览（<a href="/"><?php echo ($grdiary['view']); ?></a>）</span></p>
        <div class="dateview"><?php echo (date("Y-m-d H:i:s",$grdiary['time'])); ?></div>
      </div><?php endif; ?>
    </div>
  </article>
  <aside>
    <div class="avatar"><a href="/blog1/index.php/Home/User/index"><span>关于徐忠杰</span></a></div>
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
    </div>
    <div class="bdsharebuttonbox"><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
    <div class="tj_news">
      <h2>
        <p class="tj_t1">最新文章</p>
      </h2>
      <ul>
	  <?php if(is_array($newdiary)): $i = 0; $__LIST__ = $newdiary;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$newdiary): $mod = ($i % 2 );++$i;?><li><a href="/blog1/index.php/Home/Diary/single/id/<?php echo ($newdiary['id']); ?>"><?php echo ($newdiary['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
      <h2>
	  
        <p class="tj_t2">推荐文章</p>
		
      </h2>
      <ul>
	  <?php if(is_array($hotdiary)): $i = 0; $__LIST__ = $hotdiary;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hotdiary): $mod = ($i % 2 );++$i;?><li><a href="/blog1/index.php/Home/Diary/single/id/<?php echo ($hotdiary['id']); ?>"><?php echo ($hotdiary['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
	   
	  <h2>
        <p>最新留言</p>
      </h2>
      <ul class="pl_n">
	  <?php if(is_array($huifu)): $i = 0; $__LIST__ = $huifu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$huifu): $mod = ($i % 2 );++$i;?><dl> 
          <dt><img src="/blog1/Public/Uploads/pic/<?php echo ($huifu['user']['bigpic']); ?>"> </dt>
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
          <dt><img src="/blog1/Public/Uploads/pic/<?php echo ($fangke['bigpic']); ?>"> </dt>

        </dl><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
    <!---<div class="links" style="margin-top:130px">
      <h2>
        <p>友情链接</p>
      </h2>
      <ul>
        <li><a href="/">杨青个人博客</a></li>
        <li><a href="/">3DST技术社区</a></li>
      </ul>
    </div>---->
    <div class="copyright" style="margin-top:130px;">
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