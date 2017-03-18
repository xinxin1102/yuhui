<?php
/* Smarty version 3.1.30, created on 2017-03-17 18:27:48
  from "D:\wamp\wamp\www\ajax\mvc\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cc1c94b4ed87_34944652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f744ec2410a823329c1343677c1c010e821c9eec' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\ajax\\mvc\\template\\index\\index.html',
      1 => 1489771664,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_58cc1c94b4ed87_34944652 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'D:\\wamp\\wamp\\www\\ajax\\mvc\\libs\\smarty\\plugins\\modifier.truncate.php';
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index.css" />

<section id="home" class="text-center">

    <div class="templatemo_headerimage">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="<?php echo IMG_PATH;?>
/1.jpg" alt="Slide 1">
                    <div class="slider-caption">
                        <div class="templatemo_homewrapper">
                            <h1 class="wow fadeInDown" data-wow-delay="2000">Welcome to the blog</h1><br>
                            <p>This is a free speech</p>
                            <a href="index.php?m=index&f=login&a=init" class="smoothScroll btn btn-default wow fadeInDown" data-wow-delay="2000">Join Us</a>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="<?php echo IMG_PATH;?>
/2.jpg" alt="Slide 2">
                    <div class="slider-caption">
                        <div class="templatemo_homewrapper">
                            <h1 class="wow fadeInDown" data-wow-delay="2000">Bold talk</h1><br>
                            <p>You can say out your ideas</p>
                            <a href="index.php?m=index&f=login&a=init" class="smoothScroll btn btn-default wow fadeInDown" data-wow-delay="2000">Join Us</a>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="<?php echo IMG_PATH;?>
/3.jpg" alt="Slide 3">
                    <div class="slider-caption">
                        <div class="templatemo_homewrapper">
                            <h1 class="wow fadeInDown" data-wow-delay="2000">Listen to</h1><br>
                            <p>Views, to make friends</p>
                            <a href="index.php?m=index&f=login&a=init" class="smoothScroll btn btn-default wow fadeInDown" data-wow-delay="2000">Join Us</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- end home -->
<!--<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >免费模板</a></div>-->
<!-- start about -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-7 wow fadeInLeft" data-wow-delay="2000">
                <h3>欢迎来到博客中心</h3>
                <h2>你想看的都在这里</h2>
                <p>作为网络日记是带有很明显的私人性质的，而Blog则是私人性和公共性的有效结合，它绝不仅仅是纯粹个人思想的表达和日常琐事的记录，它所提供的内容可以用来进行交流和为他人提供帮助，是可以包容整个互联网的，具有极高的共享精神和价值。一个Blog就是一个网页，它通常是由简短且经常更新的Post所构成；这些张贴的文章都按照年份和日期排列。其他Blogs则是一群人基于某个特定主题或共同利益领域的集体创作。Blog好像是对网络传达的实时讯息。</p>
            </div>
            <div class="col-sm-6 col-md-5 wow fadeInRight" data-wow-delay="2000">
                <h3>Fun Time</h3>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <img src="<?php echo IMG_PATH;?>
/company-img-1.jpg" class="img-responsive">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <img src="<?php echo IMG_PATH;?>
/company-img-2.jpg" class="img-responsive">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <img src="<?php echo IMG_PATH;?>
/work-img-1.jpg" class="img-responsive">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <img src="<?php echo IMG_PATH;?>
/company-img-4.jpg" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end about -->
<!--文章动态-->
<!--<div class="container main">-->
    <!--<div class="row">-->
        <!--<div class="col-sm-8 main-left neirong">-->

            <!--<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>-->
            <!--<div class="usercon">-->
                <!--&lt;!&ndash;头像部分&ndash;&gt;-->
                <!--<div class="container-fluid">-->
                    <!--<div class="row user">-->
                        <!--<div class="photo">-->
                            <!--<?php if ($_smarty_tpl->tpl_vars['v']->value['photo']) {?>-->
                            <!--<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['photo'];?>
" alt="" />-->
                            <!--<?php } else { ?>-->
                            <!--<img src="<?php echo IMG_PATH;?>
/bjt.jpg" alt="" />-->
                            <!--<?php }?>-->
                        <!--</div>-->
                        <!--<div class="col-sm-2 photoes username">-->
                            <!--<span><?php echo $_smarty_tpl->tpl_vars['v']->value["uid"];?>
</span>-->
                            <!--&lt;!&ndash;<span>1111111234</span>&ndash;&gt;-->
                        <!--</div>-->
                        <!--<div class="col-sm-2 photoes times">-->
                            <!--<span><?php echo $_smarty_tpl->tpl_vars['v']->value["stime"];?>
</span>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
                <!--&lt;!&ndash;具体的内容&ndash;&gt;-->
                <!--<ul class="mui-table-view clearmoren mui-table-view-cell" style="max-height: 116px;">-->
                    <!--<li class="mui-table-view-cell mui-media">-->
                        <!--<a href="index.php?m=index&f=ccc&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
">-->
                            <!--&lt;!&ndash;<img class="mui-media-object mui-pull-right " src="http://placehold.it/40x30">&ndash;&gt;-->
                            <!--<div class="mui-media-body">-->
                                <!--<span class="stitle"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</span>-->
                                <!--<p class="mui-ellipsis scon" ><?php echo $_smarty_tpl->tpl_vars['v']->value["scon"];?>
</p>-->
                            <!--</div>-->
                        <!--</a>-->
                    <!--</li>-->
                <!--</ul>-->
            <!--</div>-->
            <!--<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
-->
        <!--</div>-->



        <!--<div class="col-sm-4 main-right">-->
            <!--<div class="list-group">-->
                <!--<a href="#" class="list-group-item active">-->
                    <!--浏览排行榜-->
                <!--</a>-->
                <!--<a href="#" class="list-group-item">Dapibus ac facilisis in</a>-->
                <!--<a href="#" class="list-group-item">Morbi leo risus</a>-->
                <!--<a href="#" class="list-group-item">Porta ac consectetur ac</a>-->
                <!--<a href="#" class="list-group-item">Vestibulum at eros</a>-->
            <!--</div>-->


            <!--<div class="list-group">-->
                <!--<a href="#" class="list-group-item active">-->
                    <!--关注排行榜-->
                <!--</a>-->
                <!--<a href="#" class="list-group-item">Dapibus ac facilisis in</a>-->
                <!--<a href="#" class="list-group-item">Morbi leo risus</a>-->
                <!--<a href="#" class="list-group-item">Porta ac consectetur ac</a>-->
                <!--<a href="#" class="list-group-item">Vestibulum at eros</a>-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
<!--</div>-->




<div class="content">

    <div class="conlist">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <!--<img class="imgs" src="<?php echo IMG_PATH;?>
/a.jpg" alt=""  />-->
            <li class="two">
                <img class="imgs" src="<?php echo IMG_PATH;?>
/a.jpg" alt=""  />
                <h3>
                    <a href="index.php?m=index&f=ccc&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a>
                </h3>
                <div class="info">
                    <span class="user">
                        作者：<?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>


                    </span>
                    <span class="time">
                        时间：<?php echo $_smarty_tpl->tpl_vars['v']->value["stime"];?>

                    </span>
                    <span class="con1"> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value["scon"],100,'',true);?>

 </span>
                </div>

            </li>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
    </div>

    <div class="rightbox">
        <div class="listbox hitlist">
            <h4>推荐作者</h4>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <li>
                    <h3>
                        <a href="index.php?m=index&f=ccc&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</a>
                    </h3>
                </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
        </div>
        <div class="listbox hitlist">
            <h4>点击排行榜</h4>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <li>
                    <h3>
                        <a href="index.php?m=index&f=ccc&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a>
                    </h3>
                </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
        </div>
        <div class="listbox lovelist">
            <h4>收藏排行榜</h4>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <li>
                    <h3>
                        <a href="index.php?m=index&f=ccc&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a>
                    </h3>
                </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
        </div>
    </div>
</div>




<!-- start contact -->
<section id="contact" class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeInDown" data-wow-delay="2000">
                <h3>opinion</h3>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <p>Your comments and Suggestions is our development power</p>
            </div>
            <div class="col-md-2"></div>
            <form action="#" method="post">
                <div class="col-md-4 wow fadeInLeft" data-wow-delay="2000">
                    <input type="text" placeholder="Name" class="form-control">
                </div>
                <div class="col-md-4 wow fadeInDown" data-wow-delay="2000">
                    <input type="email" placeholder="Email" class="form-control" required>
                </div>
                <div class="col-md-4 wow fadeInRight" data-wow-delay="2000">
                    <input type="text" placeholder="Subject" class="form-control">
                </div>
                <div class="col-md-12 wow fadeInDown" data-wow-delay="2000">
                    <textarea placeholder="Message" class="form-control"></textarea>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="2000">
                    <input type="submit" value="SHOOT MESSAGE" class="form-control">
                </div>
                <div class="col-md-3"></div>
            </form>
        </div>
    </div>

</section>
<!-- end contact -->



</body>
</html><?php }
}
