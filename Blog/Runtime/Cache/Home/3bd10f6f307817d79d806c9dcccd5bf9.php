<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport"  content="width=device-width, initial-scale=1.0, user-scalable=0, maximum-scale=1.0" />
<title>宇的相册</title>

<style type="text/css">
body{font-size:14px;background-color:#fff}
</style>

<link rel="stylesheet" href="/Public/PhotoAlbum/css/styles.css" />
<link rel="stylesheet" href="/Public/PhotoAlbum/touchTouch/touchTouch.css" />
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
<![endif]-->

</head> 
<body>

<header>
	<h1>Photo Album</h1>
</header>
<?php if(is_array($arr1)): $i = 0; $__LIST__ = $arr1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="thumbs">
	<h1><?php echo ($vo["title"]); ?></h1>
	<?php if(is_array($arr2)): $i = 0; $__LIST__ = $arr2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i; if($vo['id'] == $vo1['pid']): ?><a href="/Public/Uploads/<?php echo ($vo1["pic"]); ?>" style="background-image:url(/Public/Uploads/<?php echo ($vo1["pic"]); ?>)" title="<?php echo ($vo1["name"]); ?>"></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
</div><?php endforeach; endif; else: echo "" ;endif; ?>
<p id="credit">
	路在脚下，行万里路 读万卷书。
</p>
<script src="/Public/PhotoAlbum/js/jquery-1.7.1.min.js"></script>
<script src="/Public/PhotoAlbum/touchTouch/touchTouch.jquery.js"></script>
<script>
$(function(){
	$('#thumbs a').touchTouch();
});
</script>	
</body>
</html>