-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-03-18 01:45:06
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `aname` varchar(200) DEFAULT NULL,
  `apass` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `apass`) VALUES
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`cid`, `cname`, `pid`) VALUES
(3, '文化课', 0),
(4, '体育课', 0),
(5, '语文', 3),
(6, '数学', 3),
(7, '前端', 0),
(8, 'js', 7),
(9, 'css', 7);

-- --------------------------------------------------------

--
-- 表的结构 `dianzan`
--

CREATE TABLE IF NOT EXISTS `dianzan` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `guanzhu`
--

CREATE TABLE IF NOT EXISTS `guanzhu` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `uid1` int(11) NOT NULL,
  `uid2` int(11) NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `guanzhu`
--

INSERT INTO `guanzhu` (`gid`, `uid1`, `uid2`) VALUES
(2, 12, 7);

-- --------------------------------------------------------

--
-- 表的结构 `love`
--

CREATE TABLE IF NOT EXISTS `love` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `uid1` int(11) NOT NULL,
  `uid2` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `mtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mcon` varchar(2000) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`mid`, `uid1`, `uid2`, `sid`, `pid`, `mtime`, `mcon`) VALUES
(30, 9, 7, 4, 0, '2017-03-10 08:06:01', '喜欢'),
(31, 7, 9, 4, 30, '2017-03-10 08:06:38', '嗯  真好'),
(32, 9, 7, 4, 30, '2017-03-10 08:07:37', '@111111:有道理'),
(33, 9, 7, 4, 0, '2017-03-10 08:16:13', '1234'),
(34, 9, 9, 4, 33, '2017-03-10 08:16:23', '@111111:qwe'),
(35, 79, 9, 4, 30, '2017-03-10 08:21:31', '@123456:qwerty'),
(36, 80, 7, 5, 0, '2017-03-17 16:38:22', 'asdcfv');

-- --------------------------------------------------------

--
-- 表的结构 `shows`
--

CREATE TABLE IF NOT EXISTS `shows` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `stitle` varchar(255) CHARACTER SET utf8 NOT NULL,
  `scon` varchar(2000) CHARACTER SET utf8 NOT NULL,
  `cid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `hits` int(11) NOT NULL DEFAULT '0',
  `good` int(11) NOT NULL DEFAULT '0',
  `statu` tinyint(2) NOT NULL DEFAULT '0',
  `stime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `shows`
--

INSERT INTO `shows` (`sid`, `stitle`, `scon`, `cid`, `uid`, `hits`, `good`, `statu`, `stime`) VALUES
(5, 'js', '在上个世纪的1995年，当时的网景公司正凭借其Navigator浏览器成为Web时代开启时最著名的第一代互联网公司。由于网景公司希望能在静态HTML页面上添加一些动态效果，于是叫Brendan Eich这哥们在两周之内设计出了JavaScript语言。你没看错，这哥们只用了10天时间。为什么起名叫JavaScript？原因是当时Java语言非常红火，所以网景公司希望借Java的名气来推广，但事实上JavaScript除了语法上有点像Java，其他部分基本上没啥关系。', 8, 7, 10, 0, 3, '2017-03-12 14:53:17'),
(7, '几何', '欧几里得在公元前300年左右，曾经到亚历山大城教学，是一位受人尊敬的、温良敦厚的教育家。他酷爱数学，深知柏拉图的一些几何原理。他非常详尽的搜集了当时所能知道的一切几何事实，按照柏拉图和提出的关于逻辑推理的方法，整理成一门有着严密系统的理论，写成了数学史上早期的巨著——《几何原本》。', 6, 7, 0, 0, 3, '2017-03-13 05:59:01'),
(8, '高尔基', '<p>海燕，在天空飞翔</p>', 5, 80, 0, 0, 3, '2017-03-17 15:47:17'),
(9, 'js', '渲染引擎：负责取得网页的内容XML图像等等）、我们组建一大牛裙前面是4七一，整理讯息（例如加入中间是零七，以及计算网页的显示方式。然后会输出至显示器或打印机。浏览器的内核的不同对于网页的语法解释会有不同，所以渲染的效果也不相同。所有网页浏览器、电子邮件客户端以及其它需要编辑、显示网络内容的应用程序都需要内核', 7, 80, 0, 0, 3, '2017-03-17 17:19:24');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `upass` varchar(32) CHARACTER SET utf8 NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'http://zhangyixin.duapp.com/mvc/static/imgs/a.jpg	',
  `bname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sex` int(2) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `introduce` varchar(255) NOT NULL,
  `emtroduce` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `uname`, `upass`, `photo`, `bname`, `sex`, `contact`, `introduce`, `emtroduce`) VALUES
(7, '111111', '96e79218965eb72c92a549dd5a330112', '', '', 0, '', '', ''),
(9, '123456', 'e10adc3949ba59abbe56e057f20f883e', '', '', 0, '', '', ''),
(79, 'ssssss', 'af15d5fdacd5fdfea300e88a8e253e82', '', '', 0, '', '', ''),
(80, 'qqqqqq', '343b1c4a3ea721b2d640fc8700db0f36', '', '', 0, '', '', '');


