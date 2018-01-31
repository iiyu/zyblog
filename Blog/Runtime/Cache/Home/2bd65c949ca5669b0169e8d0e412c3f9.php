<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>个人日记-周宇博客</title>
<meta name="keywords" content="个人博客,周宇个人博客，周宇" />
<meta name="description" content="" />
<link href="/SIRzhouHome/Public/Home/css/index.css" rel="stylesheet">
<link href="/SIRzhouHome/Public/Home/css/ty.css" rel="stylesheet">
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
<div class="moodlist">
  <h1 class="t_nav"><span>记忆着曾经那些点点滴滴的往事！</span><a href="/SIRzhouHome/index.php/Home/Index/index" class="n1">网站首页</a><a href="/SIRzhouHome/index.php/Home/Riji/index" class="n2">个人日记</a></h1>
  <div class="bloglist">
  <?php if(is_array($arr)): foreach($arr as $key=>$vo): ?><ul class="arrow_box">
     <div class="sy">
      <p><?php echo ($vo["content"]); ?></p>
      </div>
      <span class="dateview"><?php echo (date("Y-m-d",$vo["ctime"])); ?></span>
    </ul><?php endforeach; endif; ?>
  </div>
</div>
<footer>
    <p><span>Design By:<a href="http://www.sirzhou.cn" target="_blank">周</a></span><span>网站地图</span><span><a href="/">网站统计</a></span>
  <span>微信表白墙:<a href="http://www.sirzhou.cn/weixin/w/" target="_blank">在这里</a></span>
  </p>
</footer>
<script src="/SIRzhouHome/Public/Home/js/nav.js"></script>
</body>
</html>