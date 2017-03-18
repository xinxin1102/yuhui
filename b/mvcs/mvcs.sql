-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-03-17 11:07:02
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `aname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `apass` varchar(32) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `apass`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`cid`, `cname`, `pid`) VALUES
(9, '计算机', 0),
(10, '编程', 9),
(11, '文学', 0);

-- --------------------------------------------------------

--
-- 表的结构 `dianzan`
--

CREATE TABLE IF NOT EXISTS `dianzan` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `dianzan`
--

INSERT INTO `dianzan` (`did`, `uid`, `sid`) VALUES
(1, 7, 22),
(3, 30, 22),
(4, 30, 21),
(5, 30, 20),
(6, 30, 19),
(7, 30, 17),
(8, 30, 16),
(9, 30, 15),
(10, 30, 14),
(11, 7, 21),
(12, 7, 20),
(13, 7, 19),
(14, 7, 17),
(15, 7, 16),
(16, 7, 15),
(17, 7, 14);

-- --------------------------------------------------------

--
-- 表的结构 `guanzhu`
--

CREATE TABLE IF NOT EXISTS `guanzhu` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `uid1` int(11) NOT NULL COMMENT '谁关注',
  `uid2` int(11) NOT NULL COMMENT '关注谁',
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `guanzhu`
--

INSERT INTO `guanzhu` (`gid`, `uid1`, `uid2`) VALUES
(9, 7, 26),
(11, 7, 25),
(12, 7, 27),
(16, 25, 7),
(18, 7, 28),
(19, 30, 7),
(20, 30, 24);

-- --------------------------------------------------------

--
-- 表的结构 `love`
--

CREATE TABLE IF NOT EXISTS `love` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `love`
--

INSERT INTO `love` (`lid`, `uid`, `sid`) VALUES
(4, 7, 19),
(5, 7, 15),
(7, 7, 17),
(8, 29, 21),
(9, 30, 22);

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `uid1` int(11) NOT NULL COMMENT '自己',
  `uid2` int(11) NOT NULL COMMENT '对方',
  `sid` int(11) NOT NULL COMMENT '哪篇文章',
  `pid` int(11) NOT NULL COMMENT '留言还是回复',
  `mtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mcon` varchar(2000) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=96 ;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`mid`, `uid1`, `uid2`, `sid`, `pid`, `mtime`, `mcon`) VALUES
(1, 7, 7, 21, 0, '2017-03-13 05:13:51', 'dasdasdas'),
(2, 7, 7, 21, 0, '2017-03-13 05:14:44', ''),
(3, 7, 7, 21, 0, '2017-03-13 05:14:54', ''),
(4, 7, 7, 21, 0, '2017-03-13 05:14:56', 'weqwe'),
(5, 7, 7, 21, 0, '2017-03-13 05:14:56', 'weqwe'),
(6, 7, 7, 21, 0, '2017-03-13 05:14:56', 'weqwe'),
(7, 7, 7, 21, 0, '2017-03-13 05:14:56', 'weqwe'),
(8, 7, 7, 21, 0, '2017-03-13 05:15:12', ''),
(9, 7, 7, 21, 0, '2017-03-13 05:17:18', ''),
(10, 7, 7, 21, 0, '2017-03-13 05:23:06', 'dsadasdasdasda'),
(11, 7, 7, 21, 0, '2017-03-13 05:23:15', 'dsadas'),
(12, 7, 7, 21, 0, '2017-03-13 05:24:14', 'uytre'),
(13, 7, 7, 21, 0, '2017-03-13 05:25:27', 'ooiuytre'),
(14, 7, 7, 21, 0, '2017-03-13 05:29:29', 'ewqeqweqw'),
(15, 7, 7, 21, 0, '2017-03-13 05:30:32', 'weqweqeqw'),
(16, 7, 7, 22, 0, '2017-03-13 06:11:56', 'ddasdasdasdasdasd'),
(17, 26, 28, 20, 0, '2017-03-13 06:22:14', 'sdasdasdasdasdasdasdas'),
(18, 26, 28, 20, 0, '2017-03-13 06:25:23', 'fdsfsdfdsfdsfsd'),
(19, 26, 28, 20, 0, '2017-03-13 06:27:28', 'ewqeqweqweqweqweqweqw'),
(20, 26, 28, 20, 0, '2017-03-13 06:28:02', 'kjhgfbdcsx'),
(21, 26, 28, 20, 0, '2017-03-13 06:28:32', 'dsafasdasasdas'),
(22, 26, 28, 20, 0, '2017-03-13 06:32:44', 'ewqewqeqwewqeqweqweqw'),
(23, 28, 27, 19, 0, '2017-03-13 06:35:34', 'dsadsadasdasdasdas'),
(24, 28, 27, 19, 0, '2017-03-13 06:36:30', 'sadsadasdasd'),
(25, 28, 28, 19, 23, '2017-03-13 07:08:23', 'sdasdas'),
(26, 28, 28, 19, 23, '2017-03-13 07:09:09', '1212121212'),
(27, 28, 28, 19, 23, '2017-03-13 07:10:04', 'qwewqeqweqw'),
(28, 28, 28, 19, 23, '2017-03-13 07:13:24', 'eqweqweqweqw'),
(29, 28, 7, 21, 1, '2017-03-13 07:14:01', 'qweqweqweqweqweqw'),
(30, 28, 7, 21, 1, '2017-03-13 07:15:06', 'ewqeqweqw'),
(31, 28, 7, 21, 1, '2017-03-13 07:19:10', 'eqweqweq'),
(32, 28, 7, 21, 1, '2017-03-13 07:23:01', 'eqweqweq'),
(33, 28, 7, 21, 1, '2017-03-13 07:23:02', 'eqweqweq'),
(34, 28, 7, 21, 1, '2017-03-13 07:23:04', 'eqweqweqeqeqeq'),
(35, 28, 7, 21, 1, '2017-03-13 07:23:04', 'eqweqweqeqeqeq'),
(36, 28, 7, 21, 1, '2017-03-13 07:23:05', 'eqweqweqeqeqeq'),
(37, 27, 7, 21, 12, '2017-03-13 08:35:41', 'dsadasdasda'),
(38, 27, 7, 21, 14, '2017-03-13 08:37:41', '554545454'),
(39, 27, 7, 21, 15, '2017-03-13 08:38:07', 'eqweqweqw'),
(40, 27, 7, 21, 12, '2017-03-13 08:45:24', 'dfgfhhjgfddsfghjgffdgfh'),
(41, 29, 26, 17, 0, '2017-03-13 09:15:47', 'nihao '),
(42, 29, 29, 17, 41, '2017-03-13 09:15:59', 'hao '),
(43, 7, 26, 17, 0, '2017-03-13 10:59:07', '你好'),
(44, 7, 26, 17, 0, '2017-03-13 10:59:54', '的洒进来的教案设计到拉萨的脸孔'),
(45, 7, 29, 17, 41, '2017-03-13 11:07:23', '你哈'),
(46, 7, 29, 17, 41, '2017-03-13 11:10:19', '你好啊'),
(47, 7, 29, 17, 41, '2017-03-13 11:11:05', '非常哈'),
(48, 7, 7, 17, 44, '2017-03-13 11:12:21', '回复的地方'),
(49, 7, 7, 17, 44, '2017-03-13 11:13:04', 'wqeqweqw'),
(50, 7, 7, 17, 44, '2017-03-13 11:14:09', 'dsadasdas'),
(51, 7, 24, 16, 0, '2017-03-13 11:15:00', '你好张三'),
(52, 7, 24, 16, 0, '2017-03-13 11:15:22', '文章很好'),
(53, 7, 7, 16, 51, '2017-03-13 11:15:42', '记得尽快哈萨克号地块静安寺'),
(54, 7, 7, 16, 51, '2017-03-13 11:17:25', 'dsadasdasdasda'),
(55, 7, 7, 16, 51, '2017-03-13 11:17:43', 'xzczxcxzczxczxczxczxc'),
(56, 7, 7, 16, 51, '2017-03-13 11:17:58', 'iuiuiuiuiuiuiu'),
(57, 7, 7, 22, 0, '2017-03-13 11:23:14', 'fsasfasfasfas'),
(58, 7, 7, 22, 16, '2017-03-13 11:23:14', 'fsasfasfasfas'),
(59, 7, 7, 22, 0, '2017-03-13 11:23:28', 'asdasdasdasdas'),
(60, 7, 7, 22, 16, '2017-03-13 11:23:28', 'asdasdasdasdas'),
(61, 7, 7, 22, 0, '2017-03-13 11:23:41', 'dasdasdasdasdasdasdasdasdasdasdas'),
(62, 7, 7, 22, 16, '2017-03-13 11:23:41', 'dasdasdasdasdasdasdasdasdasdasdas'),
(63, 7, 7, 22, 0, '2017-03-13 11:25:45', 'ewqeqweqweqweqw'),
(64, 7, 7, 22, 0, '2017-03-13 11:28:31', 'wqewqeqweqweqweqwewqeqweqwewqeqweqweqweq'),
(65, 7, 7, 16, 0, '2017-03-13 11:29:07', 'eqweqweqweqweqweqw'),
(66, 7, 7, 16, 0, '2017-03-13 11:30:08', 'hbmbvnvbnvb'),
(67, 7, 24, 15, 0, '2017-03-13 11:30:29', 'ewqeqweqweqw'),
(68, 7, 7, 15, 0, '2017-03-13 11:30:36', 'wqeqweqweqwe'),
(69, 7, 7, 15, 0, '2017-03-13 11:30:54', 'dasdasdasdasda'),
(70, 7, 7, 15, 0, '2017-03-13 11:34:42', 'sdasdsadas'),
(71, 7, 7, 15, 0, '2017-03-13 11:34:53', 'dsadasdasd'),
(72, 7, 25, 14, 0, '2017-03-13 11:35:54', 'sfsadasdasda'),
(73, 7, 7, 14, 0, '2017-03-13 11:36:00', 'dsadasdasdas'),
(74, 7, 7, 14, 0, '2017-03-13 11:36:06', 'dasdasdas'),
(75, 7, 7, 14, 0, '2017-03-13 11:43:39', 'dsadasda'),
(76, 7, 7, 14, 0, '2017-03-13 11:44:12', 'ewqeqweqw'),
(77, 7, 7, 14, 0, '2017-03-13 11:44:43', 'wqeqweqweqw'),
(78, 7, 7, 14, 0, '2017-03-13 11:44:56', 'hvmvbnvb'),
(79, 7, 7, 14, 0, '2017-03-13 11:46:25', 'dsadasdas'),
(80, 7, 7, 14, 0, '2017-03-13 11:47:32', 'sdsadasdas'),
(81, 7, 7, 21, 0, '2017-03-13 11:48:18', 'scszcz'),
(82, 7, 28, 21, 0, '2017-03-13 11:48:28', 'sadasdasdas'),
(83, 7, 27, 21, 0, '2017-03-13 11:54:17', 'sdasda'),
(84, 7, 7, 22, 59, '2017-03-13 11:56:02', 'ewqeqweqw'),
(85, 7, 7, 22, 57, '2017-03-13 11:56:20', 'dsadasdasdsafb cvcxvxcvcx'),
(86, 7, 26, 20, 21, '2017-03-13 11:56:56', '你好'),
(87, 7, 26, 20, 21, '2017-03-13 11:58:38', 'eqweqweqw'),
(88, 7, 26, 20, 21, '2017-03-13 11:59:07', 'cvcvcvcvcvcvcvc'),
(89, 7, 26, 20, 21, '2017-03-13 12:00:34', 'wqeqweq'),
(90, 7, 26, 20, 21, '2017-03-13 12:00:51', 'nihaoa a   '),
(91, 7, 26, 20, 22, '2017-03-13 12:01:31', 'wqeqwnihao你好'),
(92, 7, 26, 20, 22, '2017-03-13 12:01:45', '你好'),
(93, 7, 7, 20, 22, '2017-03-13 12:02:28', '你好aaaaaa'),
(94, 7, 7, 21, 0, '2017-03-13 12:23:42', '你好啊。。。。。。。。'),
(95, 7, 29, 17, 41, '2017-03-14 11:20:18', '你好');

-- --------------------------------------------------------

--
-- 表的结构 `shows`
--

CREATE TABLE IF NOT EXISTS `shows` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `stitle` varchar(255) NOT NULL,
  `scon` varchar(20000) NOT NULL,
  `cid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `hits` int(11) NOT NULL DEFAULT '0',
  `good` int(11) NOT NULL DEFAULT '0',
  `stime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `shows`
--

INSERT INTO `shows` (`sid`, `stitle`, `scon`, `cid`, `uid`, `status`, `hits`, `good`, `stime`) VALUES
(14, 'nodejs', '<p>&nbsp; &nbsp; &nbsp; &nbsp;Node.js是一个基于Chrome的V8 JavaScript引擎的JavaScript运行时环境。Node.js使用事件驱动的非阻塞I / O模型，使其轻量级和高效。Node.js的包生态系统，npm，是世界上最大的开源库的生态系统。</p><p>&nbsp; &nbsp; &nbsp; &nbsp;Node.js作为一个异步事件驱动的JavaScript运行时，Node旨在构建可扩展的网络应用程序。</p><p><br/></p>', 10, 25, 3, 2, 2, '2017-03-10 06:32:14'),
(15, 'AngularJS', '<p>&nbsp; &nbsp; &nbsp; &nbsp; AngularJS &nbsp;诞生于2009年，由Misko Hevery 等人创建，后为Google所收购。是一款优秀的前端JS框架，已经被用于Google的多款产品当中。AngularJS有着诸多特性，最为核心的是：MVC、模块化、自动化双向数据绑定、语义化标签、依赖注入等等。</p><p>简介</p><p>&nbsp; &nbsp; &nbsp; &nbsp; AngularJS是为了克服HTML在构建应用上的不足而设计的。HTML是一门很好的为静态文本展示设计的声明式语言，但要构建WEB应用的话它就显得乏力了。所以我做了一些工作（你也可以觉得是小花招）来让浏览器做我想要的事。</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;通常，我们是通过以下技术来解决静态网页技术在构建动态应用上的不足：</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;类库 - 类库是一些函数的集合，它能帮助你写WEB应用。起主导作用的是你的代码，由你来决定何时使用类库。类库有：jQuery等</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;框架 - 框架是一种特殊的、已经实现了的WEB应用，你只需要对它填充具体的业务逻辑。这里框架是起主导作用的，由它来根据具体的应用逻辑来调用你的代码。框架有：knockout、sproutcore等。</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;AngularJS使用了不同的方法，它尝试去补足HTML本身在构建应用方面的缺陷。AngularJS通过使用我们称为标识符(directives)的结构，让浏览器能够识别新的语法。例如：</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;使用双大括号{{}}语法进行数据绑定；</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;使用DOM控制结构来实现迭代或者隐藏DOM片段；</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;支持表单和表单的验证；</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;能将逻辑代码关联到相关的DOM元素上；</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;能将HTML分组成可重用的组件。</p><p><strong>端对端的解决方案</strong></p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;AngularJS试图成为WEB应用中的一种端对端的解决方案。这意味着它不只是你的WEB应用中的一个小部分，而是一个完整的端对端的解决方案。这会让AngularJS在构建一个CRUD（增加Create、查询Retrieve、更新Update、删除Delete）的应用时显得很“固执”（原文为 opinionated,意指没有太多的其他方式）。但是，尽管它很“固执”，它仍然能确保它的“固执”只是在你构建应用的起点，并且你仍能灵活变动。AngularJS的一些出众之处如下：</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 构建一个CRUD应用可能用到的全部内容包括：数据绑定、基本模板标识符、表单验证、路由、深度链接、组件重用、依赖注入。</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 测试方面包括：单元测试、端对端测试、模拟和自动化测试框架。</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 具有目录布局和测试脚本的种子应用作为起点。</p><p><strong>AngularJS的可爱之处</strong></p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; AngularJS通过为开发者呈现一个更高层次的抽象来简化应用的开发。如同其他的抽象技术一样，这也会损失一部分灵活性。换句话说，并不是所有的应用都适合用AngularJS来做。AngularJS主要考虑的是构建CRUD应用。幸运的是，至少90%的WEB应用都是CRUD应用。但是要了解什么适合用AngularJS构建，就得了解什么不适合用AngularJS构建。</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;如游戏，图形界面编辑器，这种DOM操作很频繁也很复杂的应用，和CRUD应用就有很大的不同，它们不适合用AngularJS来构建。像这种情况用一些更轻量、简单的技术如jQuery可能会更好。</p><p><br/></p>', 10, 24, 3, 1, 2, '2017-03-10 06:34:47'),
(16, 'jQuery', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="">jQuery是一个快速，小巧，功能丰富的JavaScript库。</span><span style="">它使得诸如HTML文档遍历和操作，事件处理，动画和Ajax等简单易用的API可以在众多浏览器中使用。</span><span style="">有了多功能性和可扩展性的组合，jQuery已经改变了数以百万计的人写JavaScript的方式。</span></p>', 10, 24, 3, 5, 2, '2017-03-10 06:41:23'),
(17, 'javascript', '<p>&nbsp; &nbsp; &nbsp; &nbsp; JavaScript一种直译式脚本语言，是一种动态类型、弱类型、基于原型的语言，内置支持类型。它的解释器被称为JavaScript引擎，为浏览器的一部分，广泛用于客户端的脚本语言，最早是在<a target="_blank" href="http://baike.baidu.com/view/692.htm" style="color: rgb(19, 110, 194); text-decoration: none;">HTML</a>（标准通用标记语言下的一个应用）网页上使用，用来给HTML网页增加动态功能。</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;在1995年时，由<a target="_blank" href="http://baike.baidu.com/view/153922.htm" style="color: rgb(19, 110, 194); text-decoration: none;">Netscape</a>公司的<a target="_blank" href="http://baike.baidu.com/view/2135520.htm" style="color: rgb(19, 110, 194); text-decoration: none;">Brendan Eich</a>，在<a target="_blank" href="http://baike.baidu.com/view/1350596.htm" style="color: rgb(19, 110, 194); text-decoration: none;">网景导航者</a>浏览器上首次设计实现而成。因为<a target="_blank" href="http://baike.baidu.com/view/153922.htm" style="color: rgb(19, 110, 194); text-decoration: none;">Netscape</a>与<a target="_blank" href="http://baike.baidu.com/subview/24856/10322735.htm" style="color: rgb(19, 110, 194); text-decoration: none;">Sun</a>合作，<a target="_blank" href="http://baike.baidu.com/view/153922.htm" style="color: rgb(19, 110, 194); text-decoration: none;">Netscape</a>管理层希望它外观看起来像<a target="_blank" href="http://baike.baidu.com/subview/29/12654100.htm" style="color: rgb(19, 110, 194); text-decoration: none;">Java</a>，因此取名为JavaScript。但实际上它的语法风格与<a target="_blank" href="http://baike.baidu.com/subview/1027623/9500406.htm" style="color: rgb(19, 110, 194); text-decoration: none;">Self</a>及<a target="_blank" href="http://baike.baidu.com/view/459697.htm" style="color: rgb(19, 110, 194); text-decoration: none;">Scheme</a>较为接近。<span style="font-size: 12px; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em; margin-left: 2px; color: rgb(51, 102, 204); cursor: default; padding: 0px 2px;">[1]</span><a class="sup-anchor" style="color: rgb(19, 110, 194); position: relative; top: -50px; font-size: 0px; line-height: 0;">&nbsp;</a></p><p>&nbsp; &nbsp; &nbsp; &nbsp; 为了取得技术优势，<a target="_blank" href="http://baike.baidu.com/view/2353.htm" style="color: rgb(19, 110, 194); text-decoration: none;">微软</a>推出了<a target="_blank" href="http://baike.baidu.com/view/40829.htm" style="color: rgb(19, 110, 194); text-decoration: none;">JScript</a>，CEnvi推出ScriptEase，与JavaScript同样可在浏览器上运行。为了统一规格，因为JavaScript兼容于ECMA标准，因此也称为<a target="_blank" href="http://baike.baidu.com/view/810176.htm" style="color: rgb(19, 110, 194); text-decoration: none;">ECMAScript</a>。</p><p><br/></p>', 10, 26, 3, 3, 2, '2017-03-10 06:46:08'),
(19, 'HTML5', '<p><span style="font-weight: 700; color: rgb(0, 0, 0);">语义特性（Class：Semantic）</span></p><p><span style="color: rgb(0, 0, 0);">HTML5赋予</span><a target="_blank" href="http://baike.baidu.com/view/828.htm" style="text-decoration: underline; color: rgb(0, 0, 0);"><span style="color: rgb(0, 0, 0);">网页</span></a><span style="color: rgb(0, 0, 0);">更好的意义和结构。更加丰富的标签将随着对</span><a target="_blank" href="http://baike.baidu.com/view/6455260.htm" style="text-decoration: underline; color: rgb(0, 0, 0);"><span style="color: rgb(0, 0, 0);">RDFa</span></a><span style="color: rgb(0, 0, 0);">的，微数据与</span><a target="_blank" href="http://baike.baidu.com/view/1623507.htm" style="text-decoration: underline; color: rgb(0, 0, 0);"><span style="color: rgb(0, 0, 0);">微格式</span></a><span style="color: rgb(0, 0, 0);">等方面的支持，构建对程序、对用户都更有价值的数据</span><a target="_blank" href="http://baike.baidu.com/view/43111.htm" style="text-decoration: underline; color: rgb(0, 0, 0);"><span style="color: rgb(0, 0, 0);">驱动</span></a><span style="color: rgb(0, 0, 0);">的Web。</span></p><p><span style="font-weight: 700; color: rgb(0, 0, 0);">本地存储特性（Class: OFFLINE &amp; STORAGE）</span></p><p><span style="color: rgb(0, 0, 0);">基于HTML5开发的网页</span><a target="_blank" href="http://baike.baidu.com/view/132427.htm" style="text-decoration: underline; color: rgb(0, 0, 0);"><span style="color: rgb(0, 0, 0);">APP</span></a><span style="color: rgb(0, 0, 0);">拥有更短的启动时间，更快的联网速度，这些全得益于HTML5 APP Cache，以及本地存储功能。Indexed DB（html5本地存储最重要的技术之一）和</span><a target="_blank" href="http://baike.baidu.com/view/16068.htm" style="text-decoration: underline; color: rgb(0, 0, 0);"><span style="color: rgb(0, 0, 0);">API</span></a><span style="color: rgb(0, 0, 0);">说明文档。</span></p><p><span style="font-weight: 700; color: rgb(0, 0, 0);">设备兼容特性 (Class: DEVICE ACCESS)</span></p><p><span style="color: rgb(0, 0, 0);">从</span><a target="_blank" href="http://baike.baidu.com/view/5112965.htm" style="text-decoration: underline; color: rgb(0, 0, 0);"><span style="color: rgb(0, 0, 0);">Geolocation</span></a><span style="color: rgb(0, 0, 0);">功能的API文档公开以来，HTML5为网页应用开发者们提供了更多功能上的优化选择，带来了更多体验功能的优势。HTML5提供了前所未有的数据与</span><a target="_blank" href="http://baike.baidu.com/view/2326093.htm" style="text-decoration: underline; color: rgb(0, 0, 0);"><span style="color: rgb(0, 0, 0);">应用接入</span></a><span style="color: rgb(0, 0, 0);">开放接口。使外部应用可以直接与浏览器内部的数据直接相连，例如视频影音可直接与microphones及摄像头相联。</span></p><p><span style="font-weight: 700; color: rgb(0, 0, 0);">连接特性（Class: CONNECTIVITY）</span></p><p><span style="color: rgb(0, 0, 0);">更有效的连接工作效率，使得基于页面的实时聊天，更快速的网页游戏体验，更优化的在线交流得到了实现。HTML5拥有更有效的服务器推送技术，Server-Sent Event和WebSockets就是其中的两个特性，这两个特性能够帮助我们实现服务器将数据“推送”到客户端的功能。</span></p><p><span style="font-weight: 700; color: rgb(0, 0, 0);">网页</span><a target="_blank" href="http://baike.baidu.com/view/3323.htm" style="text-decoration: underline; font-weight: 700; color: rgb(0, 0, 0);"><span style="font-weight: 700; color: rgb(0, 0, 0);">多媒体</span></a><span style="font-weight: 700; color: rgb(0, 0, 0);">特性(Class: MULTIMEDIA)</span></p><p><span style="color: rgb(0, 0, 0);">支持网页端的Audio、Video等多媒体功能， 与网站自带的APPS，摄像头，影音功能相得益彰。</span></p><p><span style="font-weight: 700; color: rgb(0, 0, 0);">三维、图形及特效特性（Class: 3D, Graphics &amp; Effects）</span></p><p><span style="color: rgb(0, 0, 0);">基于SVG、Canvas、WebGL及CSS3的3D功能，用户会惊叹于在浏览器中，所呈现的惊人视觉效果。</span></p><p><span style="font-weight: 700; color: rgb(0, 0, 0);">性能与集成特性（Class: Performance &amp; Integration）</span></p><p><span style="color: rgb(0, 0, 0);">没有用户会永远等待你的Loading——HTML5会通过</span><a target="_blank" href="http://baike.baidu.com/view/1105115.htm" style="text-decoration: underline; color: rgb(0, 0, 0);"><span style="color: rgb(0, 0, 0);">XMLHttpRequest</span></a><span style="color: rgb(0, 0, 0);">2等技术，解决以前的跨域等问题，帮助您的Web应用和网站在多样化的环境中更快速的工作。</span></p><p><span style="font-weight: 700; color: rgb(0, 0, 0);">CSS3特性(Class: CSS3)</span></p><p><span style="color: rgb(0, 0, 0);">在不牺牲性能和语义结构的前提下，</span><a target="_blank" href="http://baike.baidu.com/view/1713027.htm" style="text-decoration: underline; color: rgb(0, 0, 0);"><span style="color: rgb(0, 0, 0);">CSS3</span></a><span style="color: rgb(0, 0, 0);">中提供了更多的风格和更强的效果。此外，较之以前的Web排版，Web的开放字体格式（</span><a target="_blank" href="http://baike.baidu.com/view/9096908.htm" style="text-decoration: underline; color: rgb(0, 0, 0);"><span style="color: rgb(0, 0, 0);">WOFF</span></a><span style="color: rgb(0, 0, 0);">）也提供了更高的灵活性和控制性。</span></p><p><a class="lemma-anchor para-title" style="color: rgb(19, 110, 194); position: absolute; top: -50px;"></a><a class="lemma-anchor " style="color: rgb(19, 110, 194); position: absolute; top: -50px;"></a><a class="lemma-anchor " style="color: rgb(19, 110, 194); position: absolute; top: -50px;"></a></p><h3 class="title-text" style="margin: 0px; padding: 0px; font-size: 18px; font-weight: 400;"><span style="color: rgb(0, 0, 0);">沿革</span></h3><p><span style="color: rgb(0, 0, 0);">HTML5提供了一些新的元素和属性，例如&lt;nav&gt;（网站导航块）和&lt;footer&gt;。这种标签将有利于搜索引擎的索引整理，同时更好的帮助小屏幕装置和视障人士使用，除此之外，还为其他浏览要素提供了新的功能，如&lt;audio&gt;和&lt;video&gt;标记。</span></p><p><span style="color: rgb(0, 0, 0);">1、取消了一些过时的</span><a target="_blank" href="http://baike.baidu.com/view/1187297.htm" style="text-decoration: underline; color: rgb(0, 0, 0);"><span style="color: rgb(0, 0, 0);">HTML4</span></a><span style="color: rgb(0, 0, 0);">标记</span></p><p><span style="color: rgb(0, 0, 0);">其中包括纯粹显示效果的标记，如&lt;</span><a target="_blank" href="http://baike.baidu.com/view/949854.htm" style="text-decoration: underline; color: rgb(0, 0, 0);"><span style="color: rgb(0, 0, 0);">font</span></a><span style="color: rgb(0, 0, 0);">&gt;和&lt;center&gt;，它们已经被CSS取代。</span></p><p><span style="color: rgb(0, 0, 0);">HTML5 吸取了</span><a target="_blank" href="http://baike.baidu.com/view/15906.htm" style="text-decoration: underline; color: rgb(0, 0, 0);"><span style="color: rgb(0, 0, 0);">XHTML</span></a><span style="color: rgb(0, 0, 0);">2 一些建议，包括一些用来改善文档结构的功能，比如，新的HTML 标签 header, footer, dialog, aside, figure 等的使用，将使内容创作者更加语义地创建文档，之前的开发者在实现这些功能时一般都是使用</span><a target="_blank" href="http://baike.baidu.com/view/26140.htm" style="text-decoration: underline; color: rgb(0, 0, 0);"><span style="color: rgb(0, 0, 0);">div</span></a><span style="color: rgb(0, 0, 0);">。</span></p><p><span style="color: rgb(0, 0, 0);">2、将内容和展示分离</span></p><p><span style="color: rgb(0, 0, 0);">b 和 i 标签依然保留，但它们的意义已经和之前有所不同，这些标签的意义只是为了将一段文字标识出来，而不是为了为它们设置粗体或斜体式样。u，font，center，strike 这些标签则被完全去掉了。</span></p><p><span style="color: rgb(0, 0, 0);">3、一些全新的表单输入对象</span></p><p><span style="color: rgb(0, 0, 0);">包括日期，URL，Email 地址，其它的对象则增加了对非拉丁</span><a target="_blank" href="http://baike.baidu.com/view/263416.htm" style="text-decoration: underline; color: rgb(0, 0, 0);"><span style="color: rgb(0, 0, 0);">字符</span></a><span style="color: rgb(0, 0, 0);">的支持。HTML5 还引入了微数据，这一使用机器可以识别的标签标注内容的方法，使语义Web 的处理更为简单。总的来说，这些与结构有关的改进使内容创建者可以创建更干净，更容易管理的网页，这样的网页对搜索引擎，对读屏软件等更为友好。</span></p><p><span style="color: rgb(0, 0, 0);">4、全新的，更合理的Tag</span></p><p><span style="color: rgb(0, 0, 0);">多媒体对象将不再全部绑定在</span><a target="_blank" href="http://baike.baidu.com/view/627051.htm" style="text-decoration: underline; color: rgb(0, 0, 0);"><span style="color: rgb(0, 0, 0);">object</span></a><span style="color: rgb(0, 0, 0);">或 embed Tag 中，而是视频有视频的Tag，音频有音频的 Tag。</span></p><p><span style="color: rgb(0, 0, 0);">5、本地数据库</span></p><p><span style="color: rgb(0, 0, 0);">这个功能将内嵌一个本地的SQL 数据库，以加速交互式搜索，缓存以及索引功能。同时，那些离线Web 程序也将因此获益匪浅。不需要插件的丰富动画。</span></p><p><span style="color: rgb(0, 0, 0);">6、Canvas 对象</span></p><p><span style="color: rgb(0, 0, 0);">将给浏览器带来直接在上面绘制</span><a target="_blank" href="http://baike.baidu.com/view/138039.htm" style="text-decoration: underline; color: rgb(0, 0, 0);"><span style="color: rgb(0, 0, 0);">矢量图</span></a><span style="color: rgb(0, 0, 0);">的能力，这意味着用户可以脱离Flash 和Silverlight，直接在浏览器中显示图形或动画。</span></p><p><span style="color: rgb(0, 0, 0);">7、浏览器中的真正程序</span></p><p><span style="color: rgb(0, 0, 0);">将提供 API 实现浏览器内的编辑，拖放，以及各种</span><a target="_blank" href="http://baike.baidu.com/view/185360.htm" style="text-decoration: underline; color: rgb(0, 0, 0);"><span style="color: rgb(0, 0, 0);">图形用户界面</span></a><span style="color: rgb(0, 0, 0);">的能力。内容修饰Tag 将被剔除，而使用CSS。</span></p><p><span style="color: rgb(0, 0, 0);">8、Html5取代Flash在移动设备的地位。</span></p><p><span style="color: rgb(0, 0, 0);">9、其突出的特点就是强化了web页的表现性,追加了本地数据库,</span></p><p><a class="lemma-anchor para-title" style="color: rgb(19, 110, 194); position: absolute; top: -50px;"></a><a class="lemma-anchor " style="color: rgb(19, 110, 194); position: absolute; top: -50px;"></a><a class="lemma-anchor " style="color: rgb(19, 110, 194); position: absolute; top: -50px;"></a></p><h3 class="title-text" style="margin: 0px; padding: 0px; font-size: 18px; font-weight: 400;"><span style="color: rgb(0, 0, 0);">规范</span></h3><p><span style="color: rgb(0, 0, 0);">HTML5和Canvas 2D规范的制定已经完成，尽管还不能算是</span><a target="_blank" href="http://baike.baidu.com/view/7913.htm" style="text-decoration: underline; color: rgb(0, 0, 0);"><span style="color: rgb(0, 0, 0);">W3C</span></a><span style="color: rgb(0, 0, 0);">标准，但是这些规范已经功能完整，企业和开发人员有了一个稳定的执行和规划目标。</span></p><p><span style="color: rgb(0, 0, 0);">W3C首席执行官Jeff Jaffe表示：“从今天起，企业用户可以清楚地知道，他们能够在未来依赖HTML5。”HTML5是开放Web标准的基石，它是一个完整的编程环境，适用于跨平台应用程序、视频和动画、图形、风格、排版和其它数字内容发布工具、广泛的网络功能等等。</span></p><p><span style="color: rgb(0, 0, 0);">为了减少浏览器碎片、实现于所有HTML工具的应用，<span style="color: rgb(0, 0, 0); font-weight: 700;">W3C从今天开始着手W3C标准化的互操作性和测试</span>。和之前宣布的规划一样，<span style="color: rgb(0, 0, 0); font-weight: 700;">W3C计划在2014年完成</span>HTML5标准。</span></p><p><span style="color: rgb(0, 0, 0);">HTML工作组还发布了HTML5.1、HTML Canvas 2D Context、Level 2以及主要元素的草案，让开发人员能提前预览下一轮标准。</span></p><p><br/></p>', 10, 27, 3, 5, 2, '2017-03-10 07:01:16'),
(20, 'PHP', '<p>&nbsp; &nbsp; &nbsp; &nbsp;<span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">PHP（外文名:PHP: Hypertext Preprocessor，中文名：“</span><a target="_blank" href="http://baike.baidu.com/view/156868.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">超文本</a><a target="_blank" href="http://baike.baidu.com/view/499651.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">预处理器</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">”）是一种通用</span><a target="_blank" href="http://baike.baidu.com/view/9664.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">开源</a><a target="_blank" href="http://baike.baidu.com/view/76320.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">脚本语言</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">。</span><a target="_blank" href="http://baike.baidu.com/view/135635.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">语法</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">吸收了</span><a target="_blank" href="http://baike.baidu.com/view/1219.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">C语言</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">、</span><a target="_blank" href="http://baike.baidu.com/view/29.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">Java</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">和</span><a target="_blank" href="http://baike.baidu.com/view/46614.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">Perl</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">的特点，利于学习，使用</span><a target="_blank" href="http://baike.baidu.com/view/344354.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">广泛</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">，主要适用于</span><a target="_blank" href="http://baike.baidu.com/view/3912.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">Web</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">开发领域。PHP 独特的</span><a target="_blank" href="http://baike.baidu.com/view/135635.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">语法</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">混合了</span><a target="_blank" href="http://baike.baidu.com/view/10075.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">C</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">、</span><a target="_blank" href="http://baike.baidu.com/view/29.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">Java</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">、</span><a target="_blank" href="http://baike.baidu.com/view/46614.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">Perl</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">以及</span><a target="_blank" href="http://baike.baidu.com/view/99.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">PHP</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">自创的语法。它可以比</span><a target="_blank" href="http://baike.baidu.com/view/32614.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">CGI</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">或者</span><a target="_blank" href="http://baike.baidu.com/view/46614.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">Perl</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">更快速地执行</span><a target="_blank" href="http://baike.baidu.com/view/348756.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">动态网页</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">。用PHP做出的</span><a target="_blank" href="http://baike.baidu.com/view/2065821.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">动态页面</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">与其他的</span><a target="_blank" href="http://baike.baidu.com/view/552871.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">编程语言</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">相比，</span><a target="_blank" href="http://baike.baidu.com/subview/99/5828265.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">PHP</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">是将</span><a target="_blank" href="http://baike.baidu.com/view/17674.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">程序</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">嵌入到</span><a target="_blank" href="http://baike.baidu.com/view/692.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">HTML</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">（</span><a target="_blank" href="http://baike.baidu.com/view/5286041.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">标准通用标记语言</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">下的一个应用）文档中去执行，执行效率比完全生成</span><a target="_blank" href="http://baike.baidu.com/view/692.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">HTML</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">标记的</span><a target="_blank" href="http://baike.baidu.com/subview/32614/12037322.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">CGI</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">要高许多；PHP还可以执行</span><a target="_blank" href="http://baike.baidu.com/view/69568.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">编译</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">后代码，编译可以达到</span><a target="_blank" href="http://baike.baidu.com/view/40927.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">加密</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">和</span><a target="_blank" href="http://baike.baidu.com/view/548.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">优化</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">代码运行，使代码运行更快。</span></p>', 10, 28, 3, 8, 2, '2017-03-12 08:55:46'),
(21, 'HTML', '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;超文本标记语言，<a target="_blank" href="http://baike.baidu.com/view/5286041.htm" style="color: rgb(19, 110, 194); text-decoration: none;">标准通用标记语言</a>下的一个应用。</p><p><span style="font-weight: 700;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“</span><a target="_blank" href="http://baike.baidu.com/view/156868.htm" style="color: rgb(19, 110, 194); text-decoration: none;">超文本</a><span style="font-weight: 700;">”</span>就是指页面内可以包含图片、<a target="_blank" href="http://baike.baidu.com/view/147669.htm" style="color: rgb(19, 110, 194); text-decoration: none;">链接</a>，甚至音乐、<a target="_blank" href="http://baike.baidu.com/subview/17674/17674.htm" style="color: rgb(19, 110, 194); text-decoration: none;">程序</a>等非文字元素。</p><p>超文本标记语言的结构包括<span style="font-weight: 700;">“</span>头”部分（英语：Head）、和“主体”部分（英语：Body），其中“头”部提供关于网页的信息，“主体”部分提供网页的<a target="_blank" href="http://baike.baidu.com/subview/253071/13572262.htm" style="color: rgb(19, 110, 194); text-decoration: none;">具体</a>内容。</p><p><br/></p>', 10, 7, 3, 12, 2, '2017-03-12 11:52:13'),
(22, 'CSS3', '<p>&nbsp; &nbsp; &nbsp; &nbsp;<span style="font-weight: 700; color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">CSS</span><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">即</span><a target="_blank" href="http://baike.baidu.com/view/728238.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">层叠样式表</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">（</span><span style="font-weight: 700; color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">C</span><em style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">ascading&nbsp;</em><span style="font-weight: 700; color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">S</span><em style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">tyle</em><span style="font-weight: 700; color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">S</span><em style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">heet</em><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">）。 在网页制作时采用层叠样式表技术，可以有效地对页面的布局、字体、颜色、背景和其它效果实现更加精确的控制。 只要对相应的代码做一些简单的修改，就可以改变同一页面的不同部分，或者页数不同的网页的外观和格式。CSS3是</span><a target="_blank" href="http://baike.baidu.com/subview/15916/5236733.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">CSS</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">技术的升级版本，CSS3语言开发是朝着模块化发展的。以前的规范作为一个模块实在是太庞大而且比较复杂，所以，把它分解为一些小的模块，更多新的模块也被加入进来。这些模块包括： 盒子模型、列表模块、</span><a target="_blank" href="http://baike.baidu.com/view/743.htm" style="color: rgb(19, 110, 194); text-decoration: none; font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; white-space: normal; background-color: rgb(255, 255, 255);">超链接</a><span style="color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">方式 、语言模块 、背景和边框 、文字特效 、多栏布局等。</span></p>', 10, 7, 3, 6, 2, '2017-03-12 11:52:56'),
(23, '诗歌', '<p>用高度凝练的<a target="_blank" href="http://baike.baidu.com/item/%E8%AF%AD%E8%A8%80/72744" style="color: rgb(19, 110, 194); text-decoration: none;">语言</a>，形象表达作者丰富情感，集中反映社会生活并具有一定<a target="_blank" href="http://baike.baidu.com/item/%E8%8A%82%E5%A5%8F/3795" style="color: rgb(19, 110, 194); text-decoration: none;">节奏</a>和韵律的文学体裁。</p><p><a target="_blank" href="http://baike.baidu.com/item/%E8%AF%97%E6%AD%8C/10524663" style="color: rgb(19, 110, 194); text-decoration: none;">诗歌</a>是一种抒情言志的<a target="_blank" href="http://baike.baidu.com/item/%E6%96%87%E5%AD%A6%E4%BD%93%E8%A3%81" style="color: rgb(19, 110, 194); text-decoration: none;">文学体裁</a>。《<a target="_blank" href="http://baike.baidu.com/item/%E6%AF%9B%E8%AF%97" style="color: rgb(19, 110, 194); text-decoration: none;">毛诗</a>-大序》载：“诗者，志之所之也。在心为志，发言为诗”。南宋<a target="_blank" href="http://baike.baidu.com/item/%E4%B8%A5%E7%BE%BD" style="color: rgb(19, 110, 194); text-decoration: none;">严羽</a>《<a target="_blank" href="http://baike.baidu.com/item/%E6%B2%A7%E6%B5%AA%E8%AF%97%E8%AF%9D" style="color: rgb(19, 110, 194); text-decoration: none;">沧浪诗话</a>》云：“诗者，吟咏性情也”。只有一种用言语表达的艺术就是诗歌。</p><p><br/></p>', 11, 29, 1, 0, 0, '2017-03-12 16:45:56'),
(24, 'abcde', '<p>sadasdsadada</p>', 11, 7, 0, 0, 0, '2017-03-13 12:53:13'),
(25, 'aaaaaa', '<p>aaaaaaa</p>', 11, 30, 0, 0, 0, '2017-03-14 09:04:39');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `upass` varchar(32) NOT NULL,
  `bname` varchar(255) NOT NULL COMMENT '姓名',
  `sex` int(2) NOT NULL COMMENT '性别',
  `contact` varchar(255) NOT NULL COMMENT '联系方式',
  `email` varchar(255) NOT NULL COMMENT '邮箱',
  `introduce` varchar(1000) NOT NULL COMMENT '个人简介',
  `photo` varchar(255) NOT NULL DEFAULT 'http://127.0.0.1/mvc/static/images/bjt.jpg',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `uname`, `upass`, `bname`, `sex`, `contact`, `email`, `introduce`, `photo`) VALUES
(0, 'admin', 'admin', '', 0, '', '', '', ''),
(7, 'zhangyuhui', '585df539f9f42787a0d79387d4f0f53f', '张宇辉', 1, '18435179860', '18435179860@163.com', 'igfdsdfghnjnbv', 'http://127.0.0.1/mvc/upload/2017-03-13/1489409813u=1300140722,520953413&fm=23&gp=0.jpg'),
(24, 'zhangsan', '7fa8282ad93047a4d6fe6111c93b308a', '', 0, '', '', '', 'http://127.0.0.1/mvc/upload/2017-03-12/1489308800u=2529825977,479567324&fm=23&gp=0.jpg'),
(25, 'duanxiaojie', '7fa8282ad93047a4d6fe6111c93b308a', '段晓杰', 1, '876543', '876543', 'uhbgvfcdsxaz', 'http://127.0.0.1/mvc/upload/2017-03-12/1489308481u=2516498454,3030884361&fm=23&gp=0.jpg'),
(26, 'gaoyuansheng', '7fa8282ad93047a4d6fe6111c93b308a', '高原圣', 1, '9876543', '09876543', 'jhgfd', 'http://127.0.0.1/mvc/upload/2017-03-12/1489308597u=1816194759,1653592428&fm=23&gp=0.jpg'),
(27, 'guopengcheng', '7fa8282ad93047a4d6fe6111c93b308a', '郭鹏程', 1, '7654321', '65432', 'gfdsdfg', 'http://127.0.0.1/mvc/upload/2017-03-12/1489308527u=1150956668,2047856023&fm=23&gp=0.jpg'),
(28, 'wangwuwu', '7fa8282ad93047a4d6fe6111c93b308a', '王五', 1, '98765', '09876', '立刻就会v', 'http://127.0.0.1/mvc/upload/2017-03-13/1489387045ASCII.jpg'),
(29, 'zhaoliu', '7fa8282ad93047a4d6fe6111c93b308a', '赵六', 1, '876543', '9876544', 'jnhbgvfcdx', 'http://127.0.0.1/mvc/upload/2017-03-13/1489337102u=435171144,245006669&fm=11&gp=0.jpg'),
(30, 'haoguochun', '7fa8282ad93047a4d6fe6111c93b308a', '郝国春', 1, '98765', '98765', '开奖号GV从', 'http://127.0.0.1/mvc/upload/2017-03-14/1489482240u=435171144,245006669&fm=11&gp=0.jpg'),
(31, 'yangxuhui', '7fa8282ad93047a4d6fe6111c93b308a', '', 0, '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
