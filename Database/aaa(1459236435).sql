-- 表的结构：blog_admin --
CREATE TABLE `blog_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `kouling` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;-- <xjx> --

-- 表的结构：blog_article --
CREATE TABLE `blog_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `content` text NOT NULL,
  `pic` varchar(50) NOT NULL,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `ctime` int(11) NOT NULL,
  `edittime` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `Comment` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `mp3` varchar(200) NOT NULL,
  `pic2` varchar(50) NOT NULL,
  `biaoqian` varchar(20) NOT NULL,
  `pingfen` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;-- <xjx> --

-- 表的结构：blog_diary --
CREATE TABLE `blog_diary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `ctime` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `pic` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;-- <xjx> --

-- 表的结构：blog_fenlei --
CREATE TABLE `blog_fenlei` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `pid` int(11) NOT NULL,
  `path` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;-- <xjx> --

-- 表的结构：blog_friendlink --
CREATE TABLE `blog_friendlink` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(30) NOT NULL COMMENT '标题',
  `content` varchar(200) NOT NULL COMMENT '描述',
  `ctime` int(11) NOT NULL COMMENT '时间',
  `url` varchar(100) NOT NULL COMMENT '链接',
  `type` varchar(20) NOT NULL COMMENT '样式',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;-- <xjx> --

-- 表的结构：blog_liuyan --
CREATE TABLE `blog_liuyan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color` int(10) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `content` varchar(100) NOT NULL,
  `ctime` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;-- <xjx> --

-- 表的结构：blog_photo --
CREATE TABLE `blog_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `ctime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;-- <xjx> --

-- 表的结构：blog_pinglun --
CREATE TABLE `blog_pinglun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `content` varchar(200) NOT NULL,
  `uid` int(11) NOT NULL,
  `replay` int(11) NOT NULL,
  `ctime` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;-- <xjx> --

-- 表的结构：blog_slides --
CREATE TABLE `blog_slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `pid` int(11) NOT NULL,
  `ctime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;-- <xjx> --

-- 表的数据：blog_admin --
INSERT INTO `blog_admin` VALUES
('1','0','admin','e10adc3949ba59abbe56e057f20f883e','123456');-- <xjx> --

-- 表的数据：blog_article --
INSERT INTO `blog_article` VALUES
('17','啊实打实的阿萨德阿萨德','阿萨德安达市阿萨德阿萨德阿萨德\n\n                                    ','2015-12-02/565dcac1eb599.jpg','1','2','1448987329','1448987329','30','8','0','0','','','','0'),
('19','ASDASDASD','<p>里程密一直与你同在</p>','2016-01-06/568c133f61337.jpg','1','2','1452020543','1452020543','1','0','0','0','','','','0'),
('13','我在这里  你在哪里？','热太热太热太热t','2016-03-17/56eab53625332.jpg','1','12','1439316541','1458222390','24','4','0','0','','2015-08-12/55ca3a3d0f127.jpg','','0'),
('14','风景恢复供货更好发给恢复供货发给和规范化返回发给和法国和','风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景风景\r\n\r\n                                    ','2015-08-12/55ca3cf198530.jpg','1','12','1439317233','1439317233','42','0','0','0','','2015-08-12/55ca3cf184bc5.jpg','','0'),
('27','对方答复','<p>I一直与你同在</p>','2016-03-17/56ea9a500740d.jpg','1','4','1458215504','1458215504','1','0','0','0','','','','0'),
('28','哈哈','瑞特瑞特让他热帖','2016-03-17/56ea9a7dee482.jpg','1','1','1458215549','1458357506','1','0','0','0','','','','0'),
('32','法规规定发给 ','<p>I一直与你同在</p>','2016-03-17/56eaafc8a6a7e.jpg','1','53','1458221000','1458221000','1','0','0','0','','','','0'),
('36','规范','<p style=\"white-space: normal;\">额外热大方大方的说法都是发的发的说法都是是的范德萨发的大方的说法都是是的范德萨范德萨是大方的师傅是的范<p>额外热大方大方的说法都是发的发的说法都是是的范德萨发的大方的说法都是是的范德萨范德萨是大方的师傅是的范德萨范德萨是的范德萨范德萨是的范德萨范德萨大师傅的说法都德萨范德萨是的范德萨范德萨','2016-03-17/56eab2793fa34.jpg','1','1','1458221689','1458358761','1','0','0','0','','','','0'),
('38','风景','<p style=\"white-space: normal;\">额外热大方大方的说法都是发的发的说法都是是的范德萨发的大方的说法都是是的范德萨范德萨是大方的师傅是的范德萨范德萨是的范德萨范德萨是的范德萨范德萨大师傅的说法都是是的范德萨<p>额外热大方大方的说法都是发的发的说法都是是的范德萨发的大方的说法都是是的范德萨范德萨是大方的师傅是的范德萨范德萨是的范德萨范德萨是的范德萨范德萨大师傅的说法都范德萨的撒范德萨范德萨第三方第三方第三','2016-03-17/56eab2d972f2d.jpg','1','12','0','1458358753','0','0','0','0','','','','0'),
('40','123456','<p>额外热大方大方的说法都是发的发的说法都是是的范德萨发的大方的说法都是是的范德萨范德萨是大方的师傅是的范德萨范德萨是的范德萨范<p>额外热大方大方的说法都是发的发的说法都是是的范德萨发的大方的说法都是是的范德萨范德萨是大方的师傅是的范德萨范德萨是的范德萨范德萨是的范德萨范德萨大师傅的说法都\n<p>额外热大方大方的说法都是发的发的说法都是是的范德萨发的大方的说法都是是的范德萨范德萨是大方的师傅是的范德萨范德萨是的范德萨范德萨是的范德萨范德萨大师傅的说法都德萨是的范德萨范德萨大师傅的说法都','2016-03-17/56eab7973873d.jpg','1','4','1458222999','1458358740','1','0','0','0','','','','0'),
('41','浩哥星期天的好天气好心情','<p><span style=\"color: rgb(26, 25, 25); font-family: &#39;Microsoft Yahei&#39;; line-height: 28px; white-space: normal; background-color: rgb(255, 252, 252);\">在我需要帮助的时候，你们在哪里，在我最无助的时候！我又能想到谁？哎，真的是求人不如求己，</span><br style=\"margin: 0px; padding: 0px; color: rgb(26, 25, 25); font-family: &#39;Microsoft Yahei&#39;; line-height: 28px; white-space: normal; background-color: rgb(255, 252, 252);\"/><br style=\"margin: 0px; padding: 0px; color: rgb(26, 25, 25); font-family: &#39;Microsoft Yahei&#39;; line-height: 28px; white-space: normal; background-color: rgb(255, 252, 252);\"/><span style=\"color: rgb(26, 25, 25); font-family: &#39;Microsoft Yahei&#39;; line-height: 28px; white-space: normal; background-color: rgb(255, 252, 252);\">关键时候可能还是得靠自己，没办法，现在都这样了，赶鸭子上架，不行也得行。不想让人瞧不起，</span><br style=\"margin: 0px; padding: 0px; color: rgb(26, 25, 25); font-family: &#39;Microsoft Yahei&#39;; line-height: 28px; white-space: normal; background-color: rgb(255, 252, 252);\"/><img src=\"http://localhost/SIRzhouHome/Public/umeditor/php/upload/20160323/14587120315422.jpg\" _src=\"http://localhost/SIRzhouHome/Public/umeditor/php/upload/20160323/14587120315422.jpg\" style=\"width: 734.4px; height: 268.4px;\"/></p><p><span style=\"color: rgb(26, 25, 25); font-family: &#39;Microsoft Yahei&#39;; line-height: 28px; white-space: normal; background-color: rgb(255, 252, 252);\">认为我还只是一个刚出社会的小毛孩。就让事实来证明一切。</span><br style=\"margin: 0px; padding: 0px; color: rgb(26, 25, 25); font-family: &#39;Microsoft Yahei&#39;; line-height: 28px; white-space: normal; background-color: rgb(255, 252, 252);\"/><br style=\"margin: 0px; padding: 0px; color: rgb(26, 25, 25); font-family: &#39;Microsoft Yahei&#39;; line-height: 28px; white-space: normal; background-color: rgb(255, 252, 252);\"/><span style=\"color: rgb(26, 25, 25); font-family: &#39;Microsoft Yahei&#39;; line-height: 28px; white-space: normal; background-color: rgb(255, 252, 252);\">&nbsp;今天真的感谢你&quot;石头哥&quot;，或许现在只有你懂我，只有你能明白我的想法，知道我想要什么、需要什么。我相信，我们会让“代友”这词在今后火起来的，这也是我们之间的约定，也是我们之间的共同</span></p><p><img src=\"http://localhost/SIRzhouHome/Public/umeditor/php/upload/20160323/14587120667111.jpg\" _src=\"http://localhost/SIRzhouHome/Public/umeditor/php/upload/20160323/14587120667111.jpg\" style=\"width: 574.4px; height: 290.4px;\"/><span style=\"color: rgb(26, 25, 25); font-family: &#39;Microsoft Yahei&#39;; line-height: 28px; white-space: normal; background-color: rgb(255, 252, 252);\">奋斗的目标。会让更多的人知道“代友”这词。代友：从码代码中认识的朋友。世界上所有的美好的产品都是有故事的。现在就由我们开始来叙写“代友”吧！</span><br style=\"margin: 0px; padding: 0px; color: rgb(26, 25, 25); font-family: &#39;Microsoft Yahei&#39;; line-height: 28px; white-space: normal; background-color: rgb(255, 252, 252);\"/><br style=\"margin: 0px; padding: 0px; color: rgb(26, 25, 25); font-family: &#39;Microsoft Yahei&#39;; line-height: 28px; white-space: normal; background-color: rgb(255, 252, 252);\"/><span style=\"margin: 0px; padding: 0px; font-family: &#39;Microsoft Yahei&#39;; line-height: 28px; white-space: normal; color: rgb(255, 0, 0); background-color: rgb(255, 252, 252);\">PS：事实证明，姜还是老的辣，老狐狸终究是老狐狸。别人吃过的盐，比你走过的路还多，不要否认。 涨见识了！<br style=\"margin: 0px; padding: 0px;\"/></span></p>','2016-03-23/56f22e1737191.jpg','1','10','1458712087','1458712087','1','0','0','0','','','','0'),
('24','777','<p>里程密一直与你同在</p>','2016-03-08/56ded7f68ed84.jpg','1','2','1457444854','1457444854','1','0','0','0','','','','0'),
('25','uuuu','<p>里程密一直与你同在</p>','2016-03-08/56dedb2fae246.jpg','1','2','1457445679','1457445679','1','0','0','0','','','','0'),
('26','uuuu','<p>里程密一直与你同在</p>','2016-03-08/56dedb31ec2f7.jpg','1','2','1457445681','1457445681','1','0','0','0','','','','0');-- <xjx> --

-- 表的数据：blog_diary --
INSERT INTO `blog_diary` VALUES
('1','你愿与我一路同行，我将为你背负行囊！---加油 2015~','0','晴',''),
('4','I一直与你同在','1458371498','好美','2016-03-19/56ecfbaa90790.jpg');-- <xjx> --

-- 表的数据：blog_fenlei --
INSERT INTO `blog_fenlei` VALUES
('1','技术','0','0'),
('2','PHP','1','0-1'),
('3','音乐','0','0'),
('4','电影','0','0'),
('5','心情','0','0'),
('53','CSS','1','0-1'),
('10','音乐分享','3','0-3'),
('11','电影赏评','4','0-4'),
('12','心灵之声','5','0-5');-- <xjx> --

-- 表的数据：blog_friendlink --
INSERT INTO `blog_friendlink` VALUES
('1','斗图啊','斗图啊是一个在线制作搞笑表情的网站','1454596882','http://www.doutua.com/','info'),
('2','百度搜索','这是百度的搜索','1454597675','http://www.baidu.com/','danger'),
('3','斗图啊','斗图啊是一个在线制作搞笑表情的网站','1454596882','http://www.doutua.com/','info'),
('4','斗图啊','斗图啊是一个在线制作搞笑表情的网站','1454596882','http://www.doutua.com/','info'),
('5','百度搜索','这是百度的搜索','1454597675','http://www.baidu.com/','danger'),
('6','百度搜索','这是百度的搜索','1454597675','http://www.baidu.com/','danger'),
('7','百度搜索','这是百度的搜索','1454597675','http://www.baidu.com/','danger'),
('8','百度搜索','这是百度的搜索','1454597675','http://www.baidu.com/','danger'),
('9','百度搜索','这是百度的搜索','1454597675','http://www.baidu.com/','danger'),
('10','百度搜索','这是百度的搜索','1454597675','http://www.baidu.com/','danger'),
('11','百度搜索','这是百度的搜索','1454597675','http://www.baidu.com/','danger'),
('12','百度搜索','这是百度的搜索','1454597675','http://www.baidu.com/','danger'),
('13','百度搜索','这是百度的搜索','1454597675','http://www.baidu.com/','danger'),
('14','百度搜索','这是百度的搜索','1454597675','http://www.baidu.com/','danger'),
('15','百度搜索','这是百度的搜索','1454597675','http://www.baidu.com/','danger'),
('16','百度搜索','这是百度的搜索','1454597675','http://www.baidu.com/','danger'),
('17','百度搜索','这是百度的搜索asd asd asd asd asd asd asd asd asd asd asd asd asd asd ','1454597675','http://www.baidu.com/','danger'),
('18','百度搜索','这是百度的搜索','1454597675','http://www.baidu.com/','danger'),
('19','百度搜索','这是百度的搜索','1454597675','http://www.baidu.com/','danger'),
('20','百度搜索','这是百度的搜索','1454597675','http://www.baidu.com/','danger'),
('21','百度搜索','这是百度的搜索','1454597675','http://www.baidu.com/','danger'),
('22','百度搜索','这是百度的搜索','1454597675','http://www.baidu.com/','danger'),
('24','百度搜索22222','这是百度的搜索','1458352483','http://www.baidu.com/','info'),
('25','百度搜索','这是百度的搜索','1458352280','http://www.baidu.com/','');-- <xjx> --

-- 表的数据：blog_liuyan --
INSERT INTO `blog_liuyan` VALUES
('1','1','127.0.0.1','阿萨大环境喀什很快就电话卡坚实的还款吉安市活动空间按时活动就卡死还款时接电话阿贾克斯的话卡收到后卡收到后卡收到后卡收到后卡收到后喀什的','1438797152',''),
('3','5','127.0.0.1','阿萨大环境喀什很快就电话卡坚实的还款吉安市活动空间按时活动就卡死还款时接电话阿贾克斯的话卡收到后卡收到后卡收到后卡收到后卡收到后喀什的','1438797368',''),
('4','2','127.0.0.1','阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿','1438797382',''),
('5','1','127.0.0.1','是的阿萨德阿萨德阿萨德奥迪阿萨德','1438797507',''),
('6','4','127.0.0.1','阿萨德阿萨德阿萨德奥迪阿萨德阿萨德','1438797515',''),
('50','3','','发给','0','发给'),
('51','5','::1','你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好','1458629504','周宇'),
('52','1','::1','第三方','1458629566','水电费'),
('53','4','::1','水电费','1458629614','的所发生的'),
('54','3','::1','你好啊','1458630272','老鸡'),
('55','2','::1','水电费','1458632442','水电费'),
('56','4','::1','5555','1458632487','5555'),
('57','2','::1','更好','1458634222','贵航股份');-- <xjx> --

-- 表的数据：blog_photo --
INSERT INTO `blog_photo` VALUES
('3','珠海','1459170006'),
('4','是的范德萨','1459173678'),
('5','的说法都是','1459173683');-- <xjx> --

-- 表的数据：blog_pinglun --
INSERT INTO `blog_pinglun` VALUES
('1','测试回复2222222222222222','731371050@qq.com','暗黑世界肯定和空间啊和空间安达市后金卡是的话卡收到后的阿萨德阿萨德安达市还款吉安市卡收到后卡仕达卡仕达空间撒的','1','0','1439308818','8'),
('2','按时大时代','3123123@qq.com','阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德阿萨德','0','0','1439308845','8'),
('3','好不好使~','123@qq.com','阿萨德还款吉安市的空间很大空间撒和到喀什很卡是电话卡收到后卡收到后看阿萨德','1','2','1439314555','8'),
('4','测试啊','12739123@qq.com','阿萨德记录卡时间段了卡萨点击了卡萨丁是的','0','0','1439385685','5'),
('5','测试回复','12739123@qq.com','哈就是还款吉安市','1','0','1439635282','5'),
('6','啊啊','12739123@qq.com','撒撒按时按时','1','2','1439635389','5'),
('7','阿萨德阿萨德','12739123@qq.com','撒的','1','0','1439635463','5'),
('8','阿萨德阿萨德','12739123@qq.com','撒的','1','0','1439635571','5'),
('40','MonkeyCode','731371050@qq.com','asdasd','1','0','1453393513','13');-- <xjx> --

-- 表的数据：blog_slides --
INSERT INTO `blog_slides` VALUES
('3','哈的','2016-03-28/56f9327a820d4.jpg','3','1459171962'),
('4','急什么','2016-03-28/56f93296cf4e9.jpg','3','1459171990'),
('5','阿道夫','2016-03-28/56f93320f0d5d.jpg','3','1459172128'),
('6','呵呵','2016-03-28/56f9394a1240a.jpg','4','1459173706'),
('7','水电费','2016-03-28/56f9395729dee.jpg','5','1459173719'),
('8','3333','2016-03-29/56f9cea40054e.jpg','4','1459211939'),
('9','大幅度','2016-03-29/56f9cf4352116.jpg','5','1459212099'),
('10','水电费发','2016-03-29/56f9cf73a3cba.jpg','4','1459212147');-- <xjx> --

