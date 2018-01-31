<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>周宇博客</title>
<meta name="keywords" content="个人博客,段亮个人博客" />
<link href="/SIRzhouHome/Public/Home/css/index.css" rel="stylesheet">
<link href="/SIRzhouHome/Public/Home/css/new.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
</head>
<body>
<header>
  <div id="logo"><a href="/"></a></div>
  <nav class="topnav" id="topnav">
      <a href="/SIRzhouHome/index.php/Home/Index/index"><span>首页</span><span class="en">Honme</span></a>
      <a href="/SIRzhouHome/index.php/Home/Index/about"><span>关于我</span><span class="en">About</span></a>
      </a><a href="/SIRzhouHome/index.php/Home/Riji/index"><span>个人日记</span><span class="en">Diary</span></a>
      <a href="/SIRzhouHome/index.php/Home/Bowen/index"><span>学习痕迹</span><span class="en">Seo</span></a>
      <a href="/SIRzhouHome/index.php/Home/Index/xiangce" target="_Blank"><span>宇的相册</span><span class="en">Photo</span></a>
      <a href="/SIRzhouHome/index.php/Home/Message/index"><span>留言版</span><span class="en">Gustbook</span></a>
  </nav>
</header>
<article class="blogs">
  <h1 class="t_nav"><span>您当前的位置：<a href="/SIRzhouHome/index.php/Home/Index/index">首页</a>&nbsp;&gt;&nbsp;<a href="">文章</a></span><a href="/SIRzhouHome/index.php/Home/Index/index" class="n1">网站首页</a><a href="" class="n2">文章</a></h1>
  <div class="index_about">
    <p class="box_c"><span class="d_time">发布时间：<?php echo (date("Y-m-d",$res["ctime"])); ?></span><span>编辑 <?php echo ($name); ?></span></p>
    <ul class="infos">
      <?php echo ($res["content"]); ?>
    </ul>
    <div>
      <img src="<?php echo ($res["pic"]); ?>" alt="">
    </div>
    <div class="keybq">
    <p><span>关键字词</span>：爱情,犯错,原谅,分手</p>
    
    </div>
    <div class="ad"> </div>
    <div class="nextinfo">
    <?php if(($preshow["content"]) == "不存在"): ?><p>上一篇：<?php echo ($preshow["content"]); ?>
      <?php else: ?>
          <p>上一篇：<a href="/SIRzhouHome/index.php/Home/Shijuhua/show/id/<?php echo ($preshow["id"]); ?>"><?php echo (msubstr(strip_tags($preshow["content"]),0,10,'utf-8',true)); ?></a></p><?php endif; ?>
      <?php if(($nextshow["content"]) == "不存在"): ?><p>下一篇：<?php echo ($nextshow["content"]); ?>
      <?php else: ?>
          <p>下一篇：<a href="/SIRzhouHome/index.php/Home/Shijuhua/show/id/<?php echo ($nextshow["id"]); ?>"><?php echo (msubstr(strip_tags($nextshow["content"]),0,10,'utf-8',true)); ?></a></p><?php endif; ?>    
    </div>
    <div class="otherlink">
      <h2>相关文章</h2>
      <ul>
        <li><a href="#" title="相遇就是缘分">相遇就是缘分</a></li>
        <li><a href="#" title="相遇就是缘分">相遇就是缘分</a></li>
        <li><a href="#" title="相遇就是缘分">相遇就是缘分</a></li>
        <li><a href="#" title="世上最美好的爱情">世上最美好的爱情</a></li>
        <li><a href="#" title="爱情没有永远，地老天荒也走不完">爱情没有永远，地老天荒也走不完</a></li>
        <li><a href="#" title="爱情的背叛者">爱情的背叛者</a></li>
      </ul>
    </div>
  </div>
</article>
<footer>
    <p><span>Design By:<a href="http://www.sirzhou.cn" target="_blank">周</a></span><span>网站地图</span><span><a href="/">网站统计</a></span>
  <span>微信表白墙:<a href="http://www.sirzhou.cn/weixin/w/" target="_blank">在这里</a></span>
  </p>
</footer>
<script src="js/nav.js"></script>
</body>
</html>