<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>周宇个人博客</title>
<meta name="keywords" content="个人博客模板,博客模板" />
<meta name="description" content="优雅、稳重、大气,低调。" />
<link href="/SIRzhouHome/Public/Home/css/index.css" rel="stylesheet">
<link rel="stylesheet" href="/SIRzhouHome/Public/HTML5/junk/readme.css" type="text/css" media="screen">

  <script type="text/javascript" src="/SIRzhouHome/Public/HTML5/js/jquery.min.js"></script>
  <script type="text/javascript" src="/SIRzhouHome/Public/HTML5/js/speakker-big.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    projekktor('.projekktor');
  });
  </script>
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
<!--end header-->
<div class="banner">
  <section class="box">
    <ul class="texts">
      <p class="p1">Intelligence without ambition is a bird without wings.</p>
      <p class="p2">无志之人，如无翼之鸟</p>
      <p class="p3">By:自己</p>
    </ul>
  </section>
</div>
<!--end banner-->
<article>
  <h2 class="title_tj">
    <p>博主<span>推荐</span></p>
  </h2>
  <div class="bloglist left">
   <!--wz-->
   <?php if(is_array($listn)): foreach($listn as $key=>$vo): ?><div class="wz">
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
  </div>
  <!--right-->
  <aside class="right"> 
    <div class="my">
     <a href="/SIRzhouHome/index.php/Home/Index/about"><h2>关于<span>博主</span></h2></a>
     <img src="/SIRzhouHome/Public/Home/images/my.jpg" width="200" height="200" alt="博主">
       <ul>
        <li>博主：老年</li>
        <li>职业:web前后端、网站运营。。。</li>
        <li>简介：一个有气无力的老翁，在南阳理工里念经.快出院了。</li>
        <li></li>   
       </ul>
    </div>
    <div class="news">
    <h3 class="ph">
      <p>点击<span>排行</span></p>
    </h3>
    <ul class="paih">
      <?php if(is_array($list)): foreach($list as $key=>$vol): ?><li><a href="/SIRzhouHome/index.php/Home/Bowen/show/id/<?php echo ($vol["id"]); ?>/user/<?php echo ($vol["username"]); ?>" title="<?php echo ($vol["title"]); ?>" target="_blank"><?php echo (msubstr($vol["title"],0,18,'utf-8',true)); ?></a></li><?php endforeach; endif; ?>
    </ul>
    <h3>
      <p>10句<span>句</span></p>
    </h3>
    <ul class="rank">
      <?php if(is_array($shi)): foreach($shi as $key=>$vos): ?><li><a href="/SIRzhouHome/index.php/Home/Shijuhua/show/id/<?php echo ($vos["id"]); ?>" title="<?php echo ($vos["title"]); ?>" target="_blank"><?php echo (msubstr($vos["content"],0,18,'utf-8',true)); ?></a></li><?php endforeach; endif; ?>
    </ul>
   <div id="link">
              <p>友情链接:</p>
                <div id="link_text">
                    <ul>
                    <?php if(is_array($linl)): foreach($linl as $key=>$vol): ?><li><a href="<?php echo ($vol["url"]); ?>" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vol["title"]); ?></a></li><?php endforeach; endif; ?>
                    </ul>
                </div>
                <div class="clear"></div>
          </div>
    </div> 
</article>
<footer>
  <p><span>Design By:<a href="http://www.sirzhou.cn" target="_blank">周</a></span><span>网站地图</span><span><a href="/">网站统计</a></span>
  <span>微信表白墙:<a href="http://www.sirzhou.cn/weixin/w/" target="_blank" class="thumbnail">在这里<span><img src="/SIRzhouHome/Public/Home/images/2weima.png" width="250px" /></span></a></span>
  </p>
<!--   <div id="wrap">
  <div class="inside">
    <audio class="projekktor speakker dark" autoplay="autoplay">
      <source src="/SIRzhouHome/Public/HTML5/js/playlist.js" type="application/json"/>
    </audio>
  </div>
</div>
<script type="text/javascript" src="/SIRzhouHome/Public/HTML5/junk/noise.js"></script> -->
</footer>
<script src="/SIRzhouHome/Public/Home/js/nav.js"></script>
<!--百度分享-->
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"32"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
</body>
</html>