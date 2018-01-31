<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>『SIR周』后台管理</title>
    <link rel="stylesheet" type="text/css" href="/SIRzhouHome/Public/Admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/SIRzhouHome/Public/Admin/css/main.css"/>
    <script type="text/javascript" src="/SIRzhouHome/Public/Admin/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">首页</a></li>
                <li><a href="<?php echo U('Home/Index/index');?>" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">管理员</a></li>
                <li><a href="/SIRzhouHome/index.php/Admin/System/editmima">修改密码</a></li>
                <li><a href="<?php echo U('Admin/Login/login');?>">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="/SIRzhouHome/index.php/Admin/Diary/index"><i class="icon-font">&#xe008;</i>日记管理</a></li>
                        <li><a href="/SIRzhouHome/index.php/Admin/Article/index"><i class="icon-font">&#xe005;</i>博文管理</a></li>
                        <li><a href="/SIRzhouHome/index.php/Admin/Fenlei/index"><i class="icon-font">&#xe006;</i>分类管理</a></li>
                        <li><a href="/SIRzhouHome/index.php/Admin/Liuyan/index"><i class="icon-font">&#xe004;</i>留言管理</a></li>
                        <li><a href="/SIRzhouHome/index.php/Admin/Pinglun/index"><i class="icon-font">&#xe012;</i>评论管理</a></li>
                        <li><a href="/SIRzhouHome/index.php/Admin/Xiangce/index"><i class="icon-font">&#xe012;</i>相册管理</a></li>
                        <li><a href="/SIRzhouHome/index.php/Admin/Friendlink/index"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe033;</i>广告管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="/SIRzhouHome/index.php/Admin/System/index"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="/SIRzhouHome/index.php/Admin/System/huancun"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href="/SIRzhouHome/index.php/Admin/System/beifen"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href="/SIRzhouHome/index.php/Admin/System/dataBackups"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">系统设置</span></div>
        </div>
        <div class="result-wrap">
            <form action="#" method="post" id="myform" name="myform">
                <div class="config-items">
                    <div class="config-title">
                        <h1><i class="icon-font">&#xe00a;</i>网站信息设置</h1>
                    </div>
                    <div class="result-content">
                        <table width="100%" class="insert-tab">
                            <tbody><tr>
                                <th width="15%"><i class="require-red">*</i>域名：</th>
                                <td><input type="text" id="" value="http://www.mycodes.net" size="85" name="keywords" class="common-text"></td>
                            </tr>
                                <tr>
                                    <th><i class="require-red">*</i>站点标题：</th>
                                    <td><input type="text" id="" value="『前端迷』-专注于前端领域的探索与实践" size="85" name="title" class="common-text"></td>
                                </tr>
                                <tr>
                                    <th><i class="require-red">*</i>关键字：</th>
                                    <td><input type="text" id="" value="前端, 前端设计, 前端开发, 设计, 开发, 前端资源, CSS, JavaScript, Ajax, Html5" size="85" name="keywords" class="common-text"></td>
                                </tr>
                                <tr>
                                    <th><i class="require-red">*</i>描述：</th>
                                    <td><input type="text" id="" value="『前端迷』，分享前端设计资源和前端开发技术的专业博客！" size="85" name="description" class="common-text"></td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td>
                                        <input type="submit" value="提交" class="btn btn-primary btn6 mr10">
                                        <input type="button" value="返回" onclick="history.go(-1)" class="btn btn6">
                                    </td>
                                </tr>
                            </tbody></table>
                    </div>
                </div>
                <div class="config-items">
                    <div class="config-title">
                        <h1><i class="icon-font">&#xe014;</i>站长信息设置</h1>
                    </div>
                    <div class="result-content">
                        <table width="100%" class="insert-tab">
                            <tr>
                                <th width="15%"><i class="require-red">*</i>网站联系邮箱：</th>
                                <td><input type="text" id="" value="jikeytang@163.com" size="85" name="email" class="common-text"></td>
                            </tr>
                                <tr>
                                    <th><i class="require-red">*</i>联系人：</th>
                                    <td><input type="text" id="" value="豪情" size="85" name="contact" class="common-text"></td>
                                </tr>
                                <tr>
                                    <th><i class="require-red">*</i>联系电话：</th>
                                    <td><input type="text" id="" value="123456" size="85" name="phone" class="common-text"></td>
                                </tr>
                                <tr>
                                    <th><i class="require-red">*</i>备案ICP：</th>
                                    <td><input type="text" id="" value="哥在香港" size="85" name="icp" class="common-text"></td>
                                </tr>
                                <tr>
                                    <th><i class="require-red">*</i>地址：</th>
                                    <td><input type="text" id="" value="中国 • 上海" size="85" name="address" class="common-text"></td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td>
                                        <input type="hidden" value="siteConf.inc.php" name="file">
                                        <input type="submit" value="提交" class="btn btn-primary btn6 mr10">
                                        <input type="button" value="返回" onclick="history.go(-1)" class="btn btn6">
                                    </td>
                                </tr>
                        </table>
                    </div>
                </div>
            </form>
        </div>
                <div class="result-wrap">
            <div class="result-title">
                <h1>使用帮助</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">官方交流网站：</label><span class="res-info"><a href="http://www.dadanai.net/" target="_blank">大胆爱</a></span>
                        <strong>请保持版权</strong>谢谢合作 &copy; 2014-2016
                    </li>
                    <li>
                        <label class="res-lab">MYQQ：</label><span class="res-info"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=495732134&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:495732134:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></span>
                    </li>                    
                </ul>
            </div>
        </div>

<script type="text/javascript" src="/SIRzhouHome/Public/umeditor/third-party/jquery.min.js"></script>

<script type="text/javascript" charset="utf-8" src="/SIRzhouHome/Public/umeditor/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/SIRzhouHome/Public/umeditor/umeditor.min.js"></script>
<script type="text/javascript" src="/SIRzhouHome/Public/umeditor/lang/zh-cn/zh-cn.js"></script>

<script>
    $(function(){
        var um = UM.getEditor('myEditor');
    })
</script>

<script type="text/javascript">
    function shifou(){
        if(confirm("年轻人，你真的想好了吗？")){
            return true;
        }else{
            return false;
        }
    }
</script>
<script type="text/javascript" charset=utf-8>
           function check(){ 
           var password = document.getElementById("password").value; 
           var repsword = document.getElementById("repsword").value;
           if (password =="") {
            alert("密码不能为空，请重新输入");
             event.returnValue = false;
          }else{
       if(password != repsword) {
        alert("两次密码不同，请重新输入");
          event.returnValue = false;
          }
       else {
           return true;
          }
      }
    }
</script>

    </div>
    <!--/main-->
</div>
</body>
</html>