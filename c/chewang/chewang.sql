-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-03-18 01:45:25
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




--
-- Database: `chewang`
--

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`cid`, `cname`, `pid`) VALUES
(1, '解决方案', 0),
(2, '新闻中心', 0),
(3, '人才招聘', 0),
(4, '关于我们', 0),
(5, '行业解决方案', 1),
(6, '北斗应用系统', 1),
(7, '智能城市建设', 1),
(8, '新闻动态', 2),
(9, '员工天地', 2),
(10, '专题报道', 2),
(11, '公司建设', 4),
(12, '企业文化', 4),
(13, '大事记', 4),
(14, '资质&荣誉', 4),
(15, '合作伙伴', 4);

-- --------------------------------------------------------

--
-- 表的结构 `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `posid` int(11) NOT NULL AUTO_INCREMENT,
  `posname` varchar(255) NOT NULL,
  PRIMARY KEY (`posid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `position`
--

INSERT INTO `position` (`posid`, `posname`) VALUES
(1, 'banner');

-- --------------------------------------------------------

--
-- 表的结构 `shows`
--

CREATE TABLE IF NOT EXISTS `shows` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `stitle` varchar(255) NOT NULL,
  `scon` varchar(3000) NOT NULL,
  `simgurl` varchar(255) NOT NULL,
  `cid` int(11) NOT NULL,
  `stime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(255) NOT NULL,
  `posid` int(11) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `shows`
--

INSERT INTO `shows` (`sid`, `stitle`, `scon`, `simgurl`, `cid`, `stime`, `username`, `posid`) VALUES
(1, '', '', 'http://zhangyixin.duapp.com/chewang/upload/17-02-27/1488156793default-bg.jpg', 1, '2017-02-27 00:43:17', 'admin', 0),
(2, '', '', 'http://zhangyixin.duapp.com/chewang/upload/17-02-27/1488156281newsbg.jpg', 2, '2017-02-27 00:44:42', 'admin', 0),
(3, '', '', 'http://zhangyixin.duapp.com/chewang/upload/17-02-27/1488156423default-bg.jpg', 4, '2017-02-27 00:47:04', 'admin', 0),
(8, '', '<p></p>\r\n    	<h3>汽车制造业</h3>\r\n		<div class="wxh_centerxian"></div>\r\n		<p style="font-family: Arial, 微软雅黑; box-sizing: border-box; margin: 0px 0px 15px; line-height: 24px; font-size: 15px; color: rgb(51, 51, 51);"> </p>\r\nCARSMART车联网整体解决方案能够为车厂<span style="box-sizing: border-box;">提供数据采集和分析能力</span>，帮助车厂全面监控车辆运行状态以及车主反馈信息，建立车厂、特约店和车主之间的紧密联系，创新服务体验，为车厂、特约店及车主带来新价值。\r\n<p> </p>\r\n<img class="img-responsive" src="http://zhangyixin.duapp.com/chewang/upload/2017/0124/20170124065832680.jpg" style="font-family: Arial, 微软雅黑; box-sizing: border-box; border: 0px; vertical-align: middle; display: block; max-width: 100%; height: auto; color: rgb(51, 51, 51); font-size: 14px;" /><br />\r\n<hr style="background:#eee" />\r\n    		<p></p>\r\n    	<h3>4S店方案</h3>\r\n		<div class="wxh_centerxian"></div>\r\n		<p style="font-family: Arial, 微软雅黑; box-sizing: border-box; margin: 0px 0px 15px; line-height: 24px; font-size: 15px; color: rgb(51, 51, 51);">基于实时的车辆信息，让4S店全面了解所有客户车辆的基本信息、运行状况及历史记录，以便为客户提供快捷、准确、优质的服务。</p>\r\n<p><img class="featurette-image img-responsive" src="http://zhangyixin.duapp.com/chewang/upload/2017/0124/20170124064939754.jpg" style="font-family: Arial, 微软雅黑; box-sizing: border-box; border: 0px; vertical-align: middle; display: block; max-width: 100%; height: auto; color: rgb(51, 51, 51); font-size: 14px;" /></p>\r\n<hr />\r\n<p> </p>\r\n    		<p></p>\r\n    	<h3>汽车租赁</h3>\r\n		<div class="wxh_centerxian"></div>\r\n		<p>安装在车辆中的iOBD设备将汽车检测信息通过无线网络传递给租车管理平台。基于这些数据可以建立全面的车辆监控档案，不仅为租车公司提供了汽车租赁业务的管理工具，同时也为租车公司的客户提供工具和服务。<img class="featurette-image img-responsive" src="http://zhangyixin.duapp.com/chewang/upload/2017/0124/20170124054041648.jpg" /></p>\r\n<hr style="background:#eee" />\r\n    		<p></p>\r\n    	<h3>保险行业</h3>\r\n		<div class="wxh_centerxian"></div>\r\n		<p>保险车联网服务平台，一方面利用iOBD采集的数据，提供续保提醒、紧急救援、故障提醒等基础服务；另一方面，利用大数据工具对iOBD采集的数据进行深入分析，构建车主驾驶行为、车型故障等模型，精准定位用户，提供更丰富、更实惠、更需要的保险产品。</p>\r\n<br />\r\n<br />\r\n<img class="featurette-image img-responsive" src="http://zhangyixin.duapp.com/chewang/upload/2017/0124/20170124054124475.jpg" /><br />\r\n<hr style="background:#eee" />\r\n    		<p></p>\r\n    	<h3>物流行业</h3>\r\n		<div class="wxh_centerxian"></div>\r\n		通过物流骨干网建设，实现商贸企业、物流服务企业、工业生产企业、政府部门之间实时、可靠的信息交互，把分散在不同区域、实力较弱的单一物流企业紧密联系在一起，最大限度发挥网络的优势，实现信息共享，全网联动。<br />\r\n<br />', '', 5, '2017-02-27 02:24:42', 'admin', 0),
(9, '', '<p></p>\r\n    	<h3>北斗核心资质</h3>\r\n		<div class="wxh_centerxian"></div>\r\n		<h4 class="text-center" style="font-family: Arial, 微软雅黑; box-sizing: border-box; line-height: 1.5; color: rgb(109, 158, 28); margin-top: 10px; margin-bottom: 10px; font-size: 16px; text-align: center;">车网互联将北斗业务作为公司的核心战略，在北斗民用领域上积累了丰富的资源。</h4>\r\n<br style="font-family: Arial, 微软雅黑; box-sizing: border-box; color: rgb(51, 51, 51); font-size: 14px;" />\r\n<div class="row" style="font-family: Arial, 微软雅黑; box-sizing: border-box; margin-right: -15px; margin-left: -15px; color: rgb(51, 51, 51); font-size: 14px;">\r\n<div class="col-sm-12 col-lg-6" style="box-sizing: border-box; position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 475px;"><img class="img-thumbnail" src="http://zhangyixin.duapp.com/chewang/upload/2017/0124/20170124062208541.jpg" style="box-sizing: border-box; border: 1px solid rgb(221, 221, 221); vertical-align: middle; display: inline-block; max-width: 100%; height: auto; padding: 4px; line-height: 1.42857; border-radius: 4px; transition: all 0.2s ease-in-out;" /></div>\r\n<div class="col-sm-12 col-lg-6" style="box-sizing: border-box; position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 475px;">\r\n<div class="col-sm-12 col-lg-12" style="box-sizing: border-box; position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 445px;"><br />\r\n<img class="img-responsive img-center" src="http://zhangyixin.duapp.com/chewang/upload/2017/0124/20170124062208856.jpg" style="box-sizing: border-box; border: 0px; vertical-align: middle; display: block; max-width: 100%; height: auto; margin: 15px auto;" />\r\n<p style="box-sizing: border-box; margin: 0px 0px 15px; line-height: 24px; font-size: 15px;">      车网互联是中国信息安全测评中心授权的注册信息安全认证培训机构，可以组织相关从事信息安全领域的企业和个人进行培训。公司主要针对北斗产业知识方面开展培训。</p>\r\n<img class="img-responsive img-center" src="http://zhangyixin.duapp.com/chewang/upload/2017/0124/20170124062209427.jpg" style="box-sizing: border-box; border: 0px; vertical-align: middle; display: block; max-width: 100%; height: auto; margin: 15px auto;" />\r\n<p style="box-sizing: border-box; margin: 0px 0px 15px; line-height: 24px; font-size: 15px;">      “中国北斗民用推广应用联盟”由中国电子商会发起、工信部批准，于2013年4月17日正式成立，是首个针对北斗民用领域的社团组织。车网互联是电子商会授权的承办单位，负责联盟<br />\r\n相关活动的开展。<br />\r\n<br />\r\n<br />\r\n </p>\r\n</div>\r\n</div>\r\n</div>\r\n<br />\r\n    		<p></p>\r\n    	<h3>北斗行业解决方案</h3>\r\n		<div class="wxh_centerxian"></div>\r\n		公司自提供北斗服务以来，在智能公交、两客一危、警务安全<br />\r\n<h4 class="text-center">应急救援等诸多领域得到了广泛应用，进一步推动了北斗产业的发展。</h4>\r\n<div class="row">\r\n<div class="col-sm-12 col-lg-4">\r\n<h3>商用车管理</h3>\r\n<p>商用车企业车联网服务平台将每一辆载重车作为一个信息源，利用汽车行驶记录仪及其它终端通过卫星通信手段连接到网络中，通过收集、处理并共享大量信息，实现车与车、车与路、车与交通网络、车与互联网之间互相联接，实现安全智能管理和服务。</p>\r\n<p><b>案例</b>：中国重汽车联网应用、 潍柴动力车联网应用</p>\r\n</div>\r\n</div>', '', 6, '2017-02-27 02:33:33', 'admin', 0),
(10, '', '<p></p>\r\n    	<h3>战略要点与重点产业</h3>\r\n		<div class="wxh_centerxian"></div>\r\n		<div class="row">\r\n<div class="col-lg-6">\r\n<h4>智慧城市建设五个战略要点</h4>\r\n<ul>\r\n<li>智慧城市的顶层设计与总体规划；</li>\r\n<li>基础框架的布设、融合、标准；</li>\r\n<li>生产、流通、分配、消费领域的数字化建设；</li>\r\n<li>全方位物联网、监测网、计量网建设；</li>\r\n<li>市政管理与家庭智能生活建设。</li>\r\n</ul>\r\n</div>\r\n<div class="col-lg-6">\r\n<h4>智慧城市七大重点产业</h4>\r\n<div class="col-lg-6">\r\n<ul>\r\n<li>能源和环境产业</li>\r\n<li>信息产业</li>\r\n<li>先进制造业</li>\r\n<li>医疗和生物产业</li>\r\n<li>智能交通产业</li>\r\n</ul>\r\n</div>\r\n<div class="col-lg-6">\r\n<ul>\r\n<li>商务贸易产业</li>\r\n<li>航空航天产业</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n    		<p></p>\r\n    	<h3>汽车制造业</h3>\r\n		<div class="wxh_centerxian"></div>\r\n		<h4 class="text-center">智慧城市建设理念：市长的视野，企业的视角，百姓的感受</h4>\r\n<br />\r\n<p><b>智慧城市</b>：在城市规划、建设、管理、运行过程中，采用信息化、智慧化、人性化等手段推进城市创新和可持续发展<br />\r\n<b>智慧城市</b>：将使城市的生产方式、生活方式、交换方式、公共服务、政府决策、市政管理、社会民生七个方面产生巨大和深远的变革</p>\r\n<br />\r\n<br />\r\n<img class="img-responsive img-center" src="http://zhangyixin.duapp.com/chewang/upload/2017/0125/20170125095245424.png" />', '', 7, '2017-02-27 02:58:45', 'admin', 0),
(11, '', '<p></p>\r\n    	<h3>关于车网互联</h3>\r\n		<div class="wxh_centerxian"></div>\r\n		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;北京车网互联科技有限公司是一家以移动互联领域的多年积累和丰富的行业资源为基础，以前沿的移动、定位、云计算、数据采集融合技术为工具的车载信息服务平台运营商，也是国内最早进入车联网领域的国家高新技术企业。经过多年的蓬勃发展，已拥有多项发明专利和软件著作权，现已成为拥有丰富资源的车联网综合产品与服务运营商。</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;北京车网互联科技有限公司聚合无线通讯、移动互联网、云计算等技术优势，将物联网、位置服务和智能交通进行有效结合，为车辆信息服务（TSP）市场提供开放式服务平台和行业定制解决方案。通过与移动运营商和整车厂商的紧密合作，深入挖掘用户需求，实现车联网产业链整合，集合行业资源，形成互利多赢的商业模式，共同打造开放、共享、可持续发展、具有自主标准和知识产权的车辆信息服务平台，为城市交通、整车厂商、汽车后市场企业客户和个人用户，提供专业的软硬件产品和优越的车联网综合运营支撑平台服务。</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;北京车网互联科技有限公司以移动互联网技术创造用户新体验，以车联网技术服务于智能交通，致力于打造智能交通新秩序，开创智慧人车生活新体验，为推动智能交通信息化产业的发展而不懈努力，引领和主导车联网产业的创新发展。</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2013年10月23日，中国证券监督管理委员会上市公司并购重组审核委员会，审核通过了车网互联与北京荣之联科技股份有限公司', '', 11, '2017-02-27 03:00:27', 'admin', 0),
(12, '', '<p></p>\r\n    	<h3>车网互联的核心品牌理念</h3>\r\n		<div class="wxh_centerxian"></div>\r\n		车网互联的使命<br />\r\n通过坚定不移的创新和发展，把车网互联建设在主营车联网行业有竞争力和领导地位的优秀企业，并实现股东价值和员工价值最大化。<br />\r\n<br />\r\n车网互联的定位<br />\r\n车网互联是提供智能车辆管理服务的卓越企业\r\n<h4>车网互联的企业精神</h4>\r\n<p><b>诚信</b>：坚守诚信原则 重视个人操守 加强互信关系 巩固卓越商誉<br />\r\n<b>务实</b>：赏识务实态度 激励奋发精神 壮大企业根基 奠定领导地位<br />\r\n<b>专业</b>：整合丰富资源 荟萃各方精英 累积中外经验 提升专业水平<br />\r\n<b>团队</b>：尊重不同文化 包容各种观念 倡导平等沟通 发挥团队精神<br />\r\n<b>积极</b>：积极迎接挑战 勇于面对改变 主动学习新知 实现自我价值<br />\r\n<b>创新</b>：营造开放环境 鼓励创新思维 构思非凡意念 推动企业发展</p>\r\n<h4>车网互联的企业承诺</h4>\r\n<p><b>创新进取以人为本，不断改善人们的生活</b></p>\r\n<h4>车网互联的企业标语</h4>\r\n<p>中文广告语：<b>志于心 智于行</b><br />\r\n英文广告语：<b>Aspired in ideal, Motivated in action</b></p>\r\n<h4>理念阐述：</h4>\r\n<ol>\r\n<li>表达了公司对物联网领域志在必得的决心及以智慧付诸实际的行动力；</li>\r\n<li>表达了在物联网领域，车网互联从消费者的心智出发，以智慧创新求变的精神创享智能新生活；</li>\r\n<li>志字所传递出的是公司发展的伟大志愿、宏伟理想、决心和勇气。更是专心致志的志；</li>\r\n<li>心一方面指的是企业本身对于市场产品的雄心、对于消费者的诚心、对于员工的关心、对于业务的专心、对于公益事业的爱心、对于股东的衷心；</li>\r\n<li>智字号召全体车网互联人在行动中发挥智慧、讲究实效方法、体现创新能力；</li>\r\n<li>行字代表了行动为先、勇于创新、当仁不让、脚踏实地的工作作风；</li>\r\n<li>这六个字，浓缩了我们车网互联人多年来的智慧与汗水。</li>\r\n<li>智者，是指我公司经过多年的蛰伏，已成功攻克多重技术难关， 将无线通讯、移动互联网、云计算等技术应用在物联网上，打造出无与伦比的智能交通享受。</li>\r\n<li>行者，所谓千里之行始于足下，智能交通的生活伴随着车网互联用户的每一次出行，让用户感受到人车合一的前所未有畅快体验。让用户真真正正地做到随心出行。</li>\r\n</ol>', '', 12, '2017-02-27 03:01:16', 'admin', 0),
(13, '', '<img class="featurette-image img-responsive" src="http://zhangyixin.duapp.com/chewang/images/index.jpg" />', '', 13, '2017-02-27 03:20:02', 'admin', 0),
(14, '', '<p></p>\r\n    	<h3>企业资质</h3>\r\n		<div class="wxh_centerxian"></div>\r\n		<div class="row honour">\r\n<div class="col-lg-3">\r\n<ul>\r\n<li>软件企业</li>\r\n<li>高新技术企业</li>\r\n<li>甲级测绘资质</li>\r\n<li>纳税信用A级企业</li>\r\n<li>北斗民用分理服务商</li>\r\n</ul>\r\n</div>\r\n<div class="col-lg-4">\r\n<ul>\r\n<li>IOS9000质量管理体系认证</li>\r\n<li>国家信息安全评测授权培训机构</li>\r\n<li>北京中关村企业信用促进会会员</li>\r\n<li>中国智慧城市产业联盟 副理事长单位</li>\r\n<li>中国北斗民用推广应用联盟 秘书长单位</li>\r\n</ul>\r\n</div>\r\n<div class="col-lg-5">\r\n<ul>\r\n<li>电信与信息服务业务经营许可证（ICP证书）</li>\r\n<li>物流城市联盟信息化推进工作委员会 秘书长单位</li>\r\n<li>中国车联网产业技术创新战略联盟 常务理事单位</li>\r\n</ul>\r\n</div>\r\n</div>\r\n    		<p></p>\r\n    	<h3>企业荣誉</h3>\r\n		<div class="wxh_centerxian"></div>\r\n		<hr />\r\n<div class="row text-center">\r\n<div class="col-sm-6 col-md-3">\r\n<div class="thumbnail"><img src="http://zhangyixin.duapp.com/chewang/upload/2017/0125/20170125094650880.jpg" /></div>\r\n<div class="caption">\r\n<p>电信与信息服务业务经营许可证（ICP证书）</p>\r\n</div>\r\n</div>\r\n<div class="col-sm-6 col-md-3">\r\n<div class="thumbnail"><img src="http://zhangyixin.duapp.com/chewang/upload/2017/0125/20170125094651878.jpg" /></div>\r\n<div class="caption">\r\n<p>质量管理体系认证证书（中文）<br />\r\n&nbsp;</p>\r\n</div>\r\n</div>\r\n<div class="col-sm-6 col-md-3">\r\n<div class="thumbnail"><img src="http://zhangyixin.duapp.com/chewang/upload/2017/0125/20170125094652921.jpg" /></div>\r\n<div class="caption">\r\n<p>国家信息安全测评授权培训机构资质证书（2014）</p>\r\n</div>\r\n</div>\r\n<div class="col-sm-6 col-md-3">\r\n<div class="thumbnail"><img src="http://zhangyixin.duapp.com/chewang/upload/2017/0125/20170125094654494.jpg" /></div>\r\n<div class="caption">\r\n<p>关于北斗民用分理服务试验资质的批复</p>\r\n</div>\r\n</div>\r\n</div>\r\n<hr />\r\n<div class="row text-center">\r\n<div class="col-sm-6 col-md-3">\r\n<div class="thumbnail"><img src="http://zhangyixin.duapp.com/chewang/upload/2017/0125/20170125094655880.jpg" /></div>\r\n<div class="caption">\r\n<p>中国北斗民用推广应用联盟<br />\r\n&nbsp;</p>\r\n</div>\r\n</div>\r\n<div class="col-sm-6 col-md-3">\r\n<div class="thumbnail"><img src="http://zhangyixin.duapp.com/chewang/upload/2017/0125/20170125094656473.jpg" /></div>\r\n<div class="caption">\r\n<p>车网互联中关村信用促进会会员<br />\r\n&nbsp;</p>\r\n</div>\r\n</div>\r\n<div class="col-sm-6 col-md-3">\r\n<div class="thumbnail"><img src="http://zhangyixin.duapp.com/chewang/upload/2017/0125/20170125094657178.jpg" /></div>\r\n<div class="caption">\r\n<p>测绘资质证书<br />\r\n&nbsp;</p>\r\n</div>\r\n</div>\r\n<div class="col-sm-6 col-md-3">\r\n<div class="thumbnail"><img src="http://zhangyixin.duapp.com/chewang/upload/2017/0125/20170125094658586.jpg" /></div>\r\n<div class="caption">\r\n<p>中国智慧城市产业联盟-副理事长单位证书</p>\r\n</div>\r\n</div>\r\n</div>\r\n<hr />\r\n<div class="row text-center">\r\n<div class="col-sm-6 col-md-3">\r\n<div class="thumbnail"><img src="http://zhangyixin.duapp.com/chewang/upload/2017/0125/20170125094700906.jpg" /></div>\r\n<div class="caption">\r\n<p>高新技术企业证书（复审）<br />\r\n&nbsp;</p>\r\n</div>\r\n</div>\r\n<div class="col-sm-6 col-md-3">\r\n<div class="thumbnail"><img src="http://zhangyixin.duapp.com/chewang/upload/2017/0125/20170125094701241.jpg" /></div>\r\n<div class="caption">\r\n<p>软件企业证书-正本<br />\r\n&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n', '', 14, '2017-02-27 03:24:54', 'admin', 0),
(15, '', '<img class="featurette-image img-responsive" src="http://zhangyixin.duapp.com/chewang/images/index1.jpg" />', '', 15, '2017-02-27 03:38:37', 'admin', 0),
(16, ' 捷报丨车网互联荣登车联网企业TOP100榜单', '<div class="wxh_centerxian"></div>\r\n		<div align="center">\r\n<div align="left"><span style="font-size:16px;">随着车联网技术的提高和普及：安全类、导航类、娱乐类、车务类、维护类、优惠类等服务逐渐适应和满足大众消费者需求。根据全球移动通讯系统协会（GSMA）和英国咨询公司SBD联合调查数据显示，<strong>到2018年车联网的市场规模有望达到390亿欧元</strong>，31%的车辆均会安上前装车载系统，其中，交通信息、呼叫中心、在线娱乐等服务将带来245亿欧元的收入，而相关硬件也会带来63亿欧元的销售额。<strong>车联网将在未来5年内迎来发展黄金期</strong>。</span><br />\r\n<br />\r\n<span style="font-size:16px;">而我国作为世界第一汽车市场，发展潜力巨大。从2010年至2015年，我国车联网用户数量从350万增至1700多万，年复合增长率达到37%，发展速度迅猛。但车联网的渗透率依然很低，考虑到车联网行业发展的多元化，加之政府、企业以及个人消费者的强大需求，预计2020年中国车联网用户将超过4000万，市场规模达到2000亿元，将占到全球份额的60%。</span><br />\r\n<br />\r\n<span style="font-size:16px;"><strong>《互联网周刊》紧随车联网发展趋势，每年固定发布车联网企业TOP100排行榜单，对车联网市场与产品给予极高的关注和重视。经过《互联网周刊》&eNet研究院的共同评选，2016车联网企业TOP100名单于近日对外重磅发布，车网互联榜上有名，排名第35位。</strong>此次获奖是对车网互联竞争优势、及为车网互联对中国车联网创新发展所作出的卓越贡献的充分肯定。</span></div>\r\n<img alt="" src="http://zhangyixin.duapp.com/chewang/upload/2017/0124/20170124081317178.jpg" /></div>', '', 8, '2017-02-27 03:53:22', 'admin', 0),
(17, ' 捷报丨车网互联成为第一批通过北斗纯RNSS业务转正审查的公', '<div class="wxh_centerxian"></div>\r\n		<div align="center">\r\n<div align="left"><span style="font-size:16px;">随着车联网技术的提高和普及：安全类、导航类、娱乐类、车务类、维护类、优惠类等服务逐渐适应和满足大众消费者需求。根据全球移动通讯系统协会（GSMA）和英国咨询公司SBD联合调查数据显示，<strong>到2018年车联网的市场规模有望达到390亿欧元</strong>，31%的车辆均会安上前装车载系统，其中，交通信息、呼叫中心、在线娱乐等服务将带来245亿欧元的收入，而相关硬件也会带来63亿欧元的销售额。<strong>车联网将在未来5年内迎来发展黄金期</strong>。</span><br />\r\n<br />\r\n<span style="font-size:16px;">而我国作为世界第一汽车市场，发展潜力巨大。从2010年至2015年，我国车联网用户数量从350万增至1700多万，年复合增长率达到37%，发展速度迅猛。但车联网的渗透率依然很低，考虑到车联网行业发展的多元化，加之政府、企业以及个人消费者的强大需求，预计2020年中国车联网用户将超过4000万，市场规模达到2000亿元，将占到全球份额的60%。</span><br />\r\n<br />\r\n<span style="font-size:16px;"><strong>《互联网周刊》紧随车联网发展趋势，每年固定发布车联网企业TOP100排行榜单，对车联网市场与产品给予极高的关注和重视。经过《互联网周刊》&eNet研究院的共同评选，2016车联网企业TOP100名单于近日对外重磅发布，车网互联榜上有名，排名第35位。</strong>此次获奖是对车网互联竞争优势、及为车网互联对中国车联网创新发展所作出的卓越贡献的充分肯定。</span></div>\r\n<img alt="" src="http://zhangyixin.duapp.com/chewang/upload/2017/0124/20170124081317178.jpg" /></div>', '', 8, '2017-02-27 13:44:42', 'admin', 0),
(18, ' 车网互联成功获得2016年度北京市高新技术成果转化项目资助', '<p><span style="font-size:16px;">按照《北京市高新技术成果转化项目认定办法》（京科发〔2012〕329号）有关规定，车网互联于2016年6月申报参加了<strong>北京市高新技术成果转化项目的认定申报工作</strong>。</span><br />\r\n&nbsp;</p>\r\n<img alt="" src="http://zhangyixin.duapp.com/chewang/upload/2017/0124/20170124082459660.jpg" /><br />\r\n<p><span style="font-size:16px;">8月，凭借公司多年来在车联网大数据领域的扎实积累与行业经验，车网互联申请的&ldquo;<strong>基于车联网大数据的车辆综合服务系统成果转化项目</strong>&rdquo;顺利通过了北京市科委组织的专家评审及公示，并成功获得了<strong>北京市科委的100万资助金</strong>。</span></p>\r\n<img alt="" src="http://zhangyixin.duapp.com/chewang/upload/2017/0124/20170124082459505.png" /><br />\r\n<p style="text-align: left;"><strong><span style="font-size:16px;">我们的努力又一次获得了认可，感谢每一位参与同事的辛苦付出，感谢各部门的合作与支持！</span></strong></p>\r\n<span style="font-size:16px;">查看公示名单请点击右方文字：<a href="http://www.bjkw.gov.cn/n8785584/n8904761/n8904870/n8917796/10673123.html">点击打开链接</a></span>', '', 9, '2017-02-27 13:54:48', 'admin', 0),
(19, '热情似把火', '随着春节一天天临近，踏着普大喜奔的步伐，偶们的年会华丽丽的如期而至啦~ 小伙伴们纷纷表示“嗨”的飞上天！NOW！！就让我们一起来感受一下当时的热烈吧~\r\n\r\n1.22\r\n \r\n \r\n荣之联集团年会\r\n\r\n地点：北京工体LIV酒吧\r\n\r\n \r\n\r\n今年集团的年会走的可是夜店趴，如此放荡不羁爱夜店也是萌萌哒，各类酒水美食让你嗨翻全场~声光魅影，帅哥靓女，眼睛完全不够用了，好不好？\r\n\r\n \r\n\r\n嘿嘿嘿，重头戏才刚来！\r\n\r\n车网互联北京区年会来喽！\r\n\r\n2016.\r\n\r\n1.23\r\n \r\n \r\n主题：九年之蓄·共筑辉煌\r\n地点：北京红杉假日酒店\r\n\r\n\r\n\r\n\r\n与集团年会的夜店风格不同，车网互联北京区年会今年走的是温馨路线——在帝都最最寒冷的那一天(⊙﹏⊙)b，小伙伴们带着满满的祝福赶到了年会现场，享受着轻松美好的欢聚时光，现场一片融融暖意，好不热闹~~~\r\n\r\n本次年会上，我们特地准备了许多有意思的互动环节：\r\n\r\n \r\n\r\n入场第一步：\r\n\r\n九年之蓄·共筑辉煌 之 历程墙\r\n\r\n<img alt="" src="http://zhangyixin.duapp.com/chewang/upload/2017/0124/20170124082628374.jpg" /></span><br />\r\n2016.\r\n\r\n\r\n\r\n\r\n\r\n', '', 9, '2017-02-27 14:01:16', 'admin', 0),
(20, ' 车网互联董事长兼总裁张春辉受邀参加第八届世界华人经济', '<div class="wxh_centerxian"></div>\r\n		<div align="center">\r\n<div align="left"><span style="font-size:16px;">随着车联网技术的提高和普及：安全类、导航类、娱乐类、车务类、维护类、优惠类等服务逐渐适应和满足大众消费者需求。根据全球移动通讯系统协会（GSMA）和英国咨询公司SBD联合调查数据显示，<strong>到2018年车联网的市场规模有望达到390亿欧元</strong>，31%的车辆均会安上前装车载系统，其中，交通信息、呼叫中心、在线娱乐等服务将带来245亿欧元的收入，而相关硬件也会带来63亿欧元的销售额。<strong>车联网将在未来5年内迎来发展黄金期</strong>。</span><br />\r\n<br />\r\n<span style="font-size:16px;">而我国作为世界第一汽车市场，发展潜力巨大。从2010年至2015年，我国车联网用户数量从350万增至1700多万，年复合增长率达到37%，发展速度迅猛。但车联网的渗透率依然很低，考虑到车联网行业发展的多元化，加之政府、企业以及个人消费者的强大需求，预计2020年中国车联网用户将超过4000万，市场规模达到2000亿元，将占到全球份额的60%。</span><br />\r\n<br />\r\n<span style="font-size:16px;"><strong>《互联网周刊》紧随车联网发展趋势，每年固定发布车联网企业TOP100排行榜单，对车联网市场与产品给予极高的关注和重视。经过《互联网周刊》&eNet研究院的共同评选，2016车联网企业TOP100名单于近日对外重磅发布，车网互联榜上有名，排名第35位。</strong>此次获奖是对车网互联竞争优势、及为车网互联对中国车联网创新发展所作出的卓越贡献的充分肯定。</span></div>\r\n<img alt="" src="http://zhangyixin.duapp.com/chewang/upload/2017/0124/20170124081317178.jpg" /></div>', '', 10, '2017-02-27 14:07:03', 'admin', 0),
(21, ' 特别报道丨车网互联董事长兼总裁张春辉受加拿大商务部驻', '<div class="wxh_centerxian"></div>\r\n		<div align="center">\r\n<div align="left"><span style="font-size:16px;">随着车联网技术的提高和普及：安全类、导航类、娱乐类、车务类、维护类、优惠类等服务逐渐适应和满足大众消费者需求。根据全球移动通讯系统协会（GSMA）和英国咨询公司SBD联合调查数据显示，<strong>到2018年车联网的市场规模有望达到390亿欧元</strong>，31%的车辆均会安上前装车载系统，其中，交通信息、呼叫中心、在线娱乐等服务将带来245亿欧元的收入，而相关硬件也会带来63亿欧元的销售额。<strong>车联网将在未来5年内迎来发展黄金期</strong>。</span><br />\r\n<br />\r\n<span style="font-size:16px;">而我国作为世界第一汽车市场，发展潜力巨大。从2010年至2015年，我国车联网用户数量从350万增至1700多万，年复合增长率达到37%，发展速度迅猛。但车联网的渗透率依然很低，考虑到车联网行业发展的多元化，加之政府、企业以及个人消费者的强大需求，预计2020年中国车联网用户将超过4000万，市场规模达到2000亿元，将占到全球份额的60%。</span><br />\r\n<br />\r\n<span style="font-size:16px;"><strong>《互联网周刊》紧随车联网发展趋势，每年固定发布车联网企业TOP100排行榜单，对车联网市场与产品给予极高的关注和重视。经过《互联网周刊》&eNet研究院的共同评选，2016车联网企业TOP100名单于近日对外重磅发布，车网互联榜上有名，排名第35位。</strong>此次获奖是对车网互联竞争优势、及为车网互联对中国车联网创新发展所作出的卓越贡献的充分肯定。</span></div>\r\n<img alt="" src="http://zhangyixin.duapp.com/chewang/upload/2017/0124/20170124081317178.jpg" /></div>', '', 10, '2017-02-27 14:08:18', 'admin', 0);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` tinyint(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', 1);


