<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>周宇的博客</title>
<meta name="keywords" content="个人博客,段亮个人博客," />
<meta name="description" content="" />
<link href="/SIRzhouHome/Public/Home/css/index.css" rel="stylesheet">
<link href="/SIRzhouHome/Public/Home/css/style.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<header>
  <div id="logo"><a href="/"></a></div>
  <nav class="topnav" id="topnav">
      <a href="/SIRzhouHome/index.php/Home/Index/index"><span>首页</span><span class="en">Honme</span></a>
      <a href="/SIRzhouHome/index.php/Home/Index/about"><span>关于我</span><span class="en">About</span></a>
      <a href="/SIRzhouHome/index.php/Home/Riji/index"><span>个人日记</span><span class="en">Diary</span></a>
      <a href="/SIRzhouHome/index.php/Home/Bowen/index"><span>学习痕迹</span><span class="en">Seo</span></a>
       <a href="/SIRzhouHome/index.php/Home/Index/xiangce" target="_Blank"><span>宇的相册</span><span class="en">Photo</span></a>
      <a href="/SIRzhouHome/index.php/Home/Message/index"><span>留言版</span><span class="en">Gustbook</span></a>
  </nav>
</header>
<article class="blogs">
<h1 class="t_nav"><span>可以简单理解为提升网站自然排名、改进用户体验、提高转化率的网站优化行为</span><a href="/" class="n1">网站首页</a><a href="/" class="n2">博文</a></h1>
<div class="bloglist left">
   <!--wz-->
  <?php if(is_array($list)): foreach($list as $key=>$vo): ?><div class="wz">
    <h3><a href="/SIRzhouHome/index.php/Home/Bowen/show/id/<?php echo ($vo["id"]); ?>/user/<?php echo ($vo["username"]); ?>" target="_blank" class="readone"><?php echo ($vo["title"]); ?></a></h3>
    <p class="dateview"><span><?php echo (date("Y-m-d",$vo["edittime"])); ?></span><span>作者：<?php echo ($vo["username"]); ?></span><span>分类：[<a href="/SIRzhouHome/index.php/Home/Bowen/showfen/fid/<?php echo ($vo["fid"]); ?>"><?php echo ($vo["name"]); ?></a>]</span><span>阅读 <?php echo ($vo["view"]); ?></span></p>
    <figure><img src="/SIRzhouHome/Public/Uploads/<?php echo ($vo["pic"]); ?>"></figure>
    <ul>
      <p><?php echo (msubstr(strip_tags($vo["content"]),0,150,'utf-8',true)); ?></p>
      <a title="阅读全文" href="/SIRzhouHome/index.php/Home/Bowen/show/id/<?php echo ($vo["id"]); ?>/user/<?php echo ($vo["username"]); ?>" target="_blank" class="readmore">阅读全文>></a>
    </ul>
    <div class="clear"></div>
    </div><?php endforeach; endif; ?>
   <!--end-->
   <?php echo ($page); ?>
</div>
<!--right-->
<aside class="right">
<div class="news">
    <h3 class="ph">
      <p>精心<span>推荐</span></p>
    </h3>
    <ul class="paih">
    <?php if(is_array($sho)): foreach($sho as $key=>$so): ?><li><a href="/SIRzhouHome/index.php/Home/Bowen/show/id/<?php echo ($so["id"]); ?>/user/<?php echo ($so["username"]); ?>" title="<?php echo ($so["title"]); ?>" target="_blank"><?php echo (msubstr($so["title"],0,18,'utf-8',true)); ?></a></li><?php endforeach; endif; ?>
    </ul>
    </div> 
</aside>
</article>
<footer>
    <p><span>Design By:<a href="http://www.sirzhou.cn" target="_blank">周</a></span><span>网站地图</span><span><a href="/">网站统计</a></span>
  <span>微信表白墙:<a href="http://www.sirzhou.cn/weixin/w/" target="_blank">在这里</a></span>
  </p>
</footer>
<script src="/SIRzhouHome/Public/Home/js/nav.js"></script>
  <!-- Baidu Button BEGIN -->
   
    <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script> 
    <script type="text/javascript" id="bdshell_js"></script> 
    <script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script> 
    <!-- Baidu Button END -->   
</body>
</html>