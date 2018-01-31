<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
        <meta charset="utf-8"/>
        <link href="/Public/Home/css/index.css" rel="stylesheet">
        <link href="/Public/Home/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="/Public/Home/css/base.css" type="text/css"/>
        <script src="/Public/Home/js/index.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="/Public/Home/css/jquery-ui-1.8.18.custom.css"/> 
<script type="text/javascript" src="/Public/Home/js/jquery.js"></script> 
<script type="text/javascript" src="/Public/Home/js/jquery-ui-1.8.18.custom.min.js"></script> 
<script type="text/javascript"> 
$(document).ready(function(){ 
$("#buttSelect").click(function(){ 
$("#formLoad").dialog("open"); 
}); 

$("#formLoad").dialog({ 
title:'留言', 
autoOpen: false, 
height: 400, 
width: 650, 
modal: true, 
buttons: { 
"确定": function() { 
 $.ajax({
cache: false,
type: "POST",
url:"/home/Message/add", //把表单数据发送到ajax.jsp
data:$('#ajaxFrm').serialize(), //要发送的是ajaxFrm表单中的数据
async: false,
error: function(request) {
alert("发送请求失败！");
},
success: function(data) {
//$("#ajaxDiv").html(data); //将返回的结果显示到ajaxDiv中
if (data==1) {
alert("留言成功");
  window.location='/home/Message/index';
}else if(data==0){
  alert("留言失败验证码错误");
}else{
  alert("留言失败");
}

}
}); 
}, 
"取消": function() { 
$( this ).dialog( "close" ); 
} 
}, 
close: function() { 
   
},
oFind: function(){
  alert("ddd");
} 
}); 
}); 
function changeVerifyCode(){ 
var img = document.getElementById('AuthImg'); //在拿到id=LoginAuthImg的<img/>对象 
var time = new Date().getTime();//拿到当前时间 
img.src = img.src +'?' + time;//拼接img中src的地址，目的和第一种方法一样 
　　     } 

    
function insertsmiley(icon) {  
  document.getElementById('word').value+= ':'+icon+':';   
} 
</script> 
</head>
<body>
<div id="formLoad" style="display: none;width: 98%">
<form id="ajaxFrm"> 
<table width="100%" border="0" align="right" cellpadding="0" cellspacing="10"> 
<tr>    
<td> 
姓名： 
</td> 
<td> 
<input type="text" name="name"></input>
</td> 
</tr>
<tr>    
<td> 
留言框： 
</td> 
<td> 
<textarea rows="6" cols="50" name="content" id="word"></textarea> 
</td> 
</tr>  
<tr>    
<td> 
表情： 
</td> 
<td> 
<div style="width:400px;height: 45px">
<?php if(is_array($smiles)): foreach($smiles as $k=>$svo): ?><img style="display:inline;cursor:pointer;" src="/Public/Home/images/smiles/<?php echo ($svo); ?>" onclick='insertsmiley("<?php echo ($k); ?>")'/><?php endforeach; endif; ?>
</div>
</td> 
</tr> 
<tr>    
<td> 
主题色彩： 
</td> 
<td> 
<select name="color">
        <option value="3" style="background-color:#00a650">绿</option>
        <option value="5" style="background-color:#fff100">黄</option>
        <option value="2" style="background-color:#00aeef">蓝</option>
        <option value="4" style="background-color:#898989">灰</option>
        <option value="1" style="background-color:#ef6ea8">浅红</option>
</select>
</td> 
</tr> 
<tr>  
<td> 
验证码： 
</td> 
<td> 
<input name="verify" type="text" class="text" /> 
</td> 
</tr> 
<tr> 
<td> 
</td> 
<td> 
<img border=0 src="verify_c" width=175px height=48px; id="AuthImg"/> &nbsp;&nbsp;<a href="javascript:changeVerifyCode()">看不清，换一张</a> 
</td> 
</tr>
</table>
</form>    
</div> 
<header>
  <div id="logo"><a href="/"></a></div>
  <nav class="topnav" id="topnav">
      <a href="/home/Index/index"><span>首页</span><span class="en">Honme</span></a>
      <a href="/home/Index/about"><span>关于我</span><span class="en">About</span></a>
      </a><a href="/home/Riji/index"><span>个人日记</span><span class="en">Diary</span></a>
      <a href="/home/Bowen/index"><span>学习痕迹</span><span class="en">Seo</span></a>
      <a href="/home/Index/xiangce" target="_Blank"><span>宇的相册</span><span class="en">Photo</span></a>
      <a href="/home/Message/index"><span>留言版</span><span class="en">Gustbook</span></a>
  </nav>
</header>
<h1 class="t_nav"> <span>既然来了，那么就留下你的足迹吧！<input class="n1" type="button" id="buttSelect" style="width:100px" value="来留言"/></span></h1>
         <div class="main" id="123"> 
            <?php if(is_array($arr)): foreach($arr as $k=>$vo): ?><div name="note" class="note">
                <div class="nhead" style="background-image: url(/Public/Home/images/a<?php echo ($vo["color"]); ?>_1.gif);">
                    <?php echo (date("Y-m-d",$vo["ctime"])); ?>
                </div>
                <div class="nbody" style="background-image: url(/Public/Home/images/a<?php echo ($vo["color"]); ?>_2.gif);">
                    <?php echo (preg_replace("/[:](.+?)[:]/is","<img src='/Public/Home/images/smiles/$1.gif' style=' display:inline'>",$vo["content"])); ?>
                </div>
                <div class="nfoot" style="background-image: url(/Public/Home/images/a<?php echo ($vo["color"]); ?>_3.gif);">
                    <div class="username">
                        <?php echo ($vo["name"]); ?>
                    </div>
                </div>
            </div><?php endforeach; endif; ?>
            </div>
            </div>
<script src="/Public/Home/js/nav.js"></script>

   
    <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script> 
    <script type="text/javascript" id="bdshell_js"></script> 
    <script type="text/javascript">

document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script> 
    </body>
</html>