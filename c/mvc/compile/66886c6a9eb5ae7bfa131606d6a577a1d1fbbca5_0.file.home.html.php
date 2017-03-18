<?php
/* Smarty version 3.1.30, created on 2017-03-17 18:17:44
  from "D:\wamp\wamp\www\ajax\mvc\template\index\home.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cc1a38318408_42102685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66886c6a9eb5ae7bfa131606d6a577a1d1fbbca5' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\ajax\\mvc\\template\\index\\home.html',
      1 => 1489771062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_58cc1a38318408_42102685 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mui.min.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/self.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/self.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>
<div class="container main" style="margin-top:100px">
    <div class="row">
        <div class="col-sm-8 main-left">
            <!--头像部分-->
            <div class="container-fluid">
                <div class="row touxiang">
                    <div class="photo">
                        <?php if ($_smarty_tpl->tpl_vars['self']->value == "yes") {?>
                        <?php if ($_smarty_tpl->tpl_vars['result3']->value['photo']) {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['result3']->value['photo'];?>
" alt="" /><!--头像-->
                        <?php } else { ?>
                        <img src="<?php echo IMG_PATH;?>
/bjt.jpg" alt="" />
                        <?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['self']->value == "no") {?>
                        <?php if ($_smarty_tpl->tpl_vars['photo']->value) {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" alt="" />
                        <?php } else { ?>
                        <img src="<?php echo IMG_PATH;?>
/bjt.jpg" alt="" />
                        <?php }?>
                        <?php }?>
                    </div>
                    <div class="col-sm-2  username">
                        <?php if ($_smarty_tpl->tpl_vars['self']->value == "yes") {?>
                        <?php if ($_smarty_tpl->tpl_vars['result3']->value['bname']) {?>
                        <span><?php echo $_smarty_tpl->tpl_vars['result3']->value['bname'];?>
 </span>
                        <?php } else { ?>
                        <span><?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
</span>
                        <?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['self']->value == "no") {?>
                        <span><?php echo $_smarty_tpl->tpl_vars['unames']->value;?>
</span>
                        <?php }?>
                    </div>
                    <div class="col-sm-2 photoes">
                        <?php if ($_smarty_tpl->tpl_vars['self']->value == "yes") {?>
                        <a href="">关注 ></a><span>1</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['self']->value == "no") {?>
                        <a href="">对方关注 ></a><span>1</span>
                        <?php }?>
                    </div>
                    <div class="col-sm-2 photoes">
                        <?php if ($_smarty_tpl->tpl_vars['self']->value == "yes") {?>
                        <a href="">粉丝 ></a><span>1</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['self']->value == "no") {?>
                        <a href="">对方粉丝 ></a><span>1</span>
                        <?php }?>

                    </div>
                    <div class="col-sm-2 photoes">
                        <?php if ($_smarty_tpl->tpl_vars['self']->value == "yes") {?>
                        <?php $_smarty_tpl->_assignInScope('j', 0);
?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'a');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
?>
                        <?php $_smarty_tpl->_assignInScope('j', $_smarty_tpl->tpl_vars['j']->value+1);
?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        <a href="">文章 ></a><span><?php echo $_smarty_tpl->tpl_vars['j']->value;?>
</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['self']->value == "no") {?>
                        <a href="">对方文章 ></a><span>1</span>
                        <?php }?>
                    </div>
                    <div class="col-sm-2 photoes">
                        <?php if ($_smarty_tpl->tpl_vars['self']->value == "yes") {?>
                        <a href="">留言 ></a> <span>1</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['self']->value == "no") {?>

                        <?php }?>
                    </div>



                </div>
            </div>
            <!--菜单部分-->
            <div class="container-fluid menu">
                <div class="row">
                    <div class="col-sm-4">
                        <?php if ($_smarty_tpl->tpl_vars['self']->value == "yes") {?>
                        <span class="wenzhang" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">已发表的文章</span>
                        <?php $_smarty_tpl->_assignInScope('i', 0);
?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        <span><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['self']->value == "no") {?>

                        <?php }?>
                    </div>
                    <div class="col-sm-4">
                        <?php if ($_smarty_tpl->tpl_vars['self']->value == "yes") {?>
                        <span>我的收藏</span>
                        <span>1</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['self']->value == "no") {?>

                        <?php }?>

                    </div>
                    <div class="col-sm-4">
                        <?php if ($_smarty_tpl->tpl_vars['self']->value == "yes") {?>
                        <span>文章审核情况</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['self']->value == "no") {?>

                        <?php }?>
                    </div>
                    <div class="col-sm-4 geren" style="color: #eee">
                        <?php if ($_smarty_tpl->tpl_vars['self']->value == "yes") {?>
                        <a href="index.php?m=index&f=user&a=personal&id=<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">编辑个人资料</a>
                        <?php } elseif ($_smarty_tpl->tpl_vars['self']->value == "no") {?>

                        <?php }?>
                    </div>

                </div>
            </div>



            <div class="line"></div>


            <!--具体的内容-->

            <ul class="mui-table-view NR">
               <!--<li class="mui-table-view-cell mui-media">-->
                    <!--<a href="javascript:;">-->
                        <!--<div class="mui-media-body">-->
                        	<!--<span class="stitle"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</span>-->
                            <!--<p class="mui-ellipsis scon"><?php echo $_smarty_tpl->tpl_vars['v']->value["scon"];?>
</p>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
            </ul>


        </div>
        <div class="col-sm-4 main-right">
    <div class="list-group">
        <a href="#" class="list-group-item active">
            浏览排行榜
        </a>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <a href="<a href="index.php?m=index&f=ccc&a=show&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
" target="_blank" class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    点击排行榜
                </a>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <a href="<a href="index.php?m=index&f=ccc&a=show&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
" target="_blank" class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
</div>
</div>
</div>
</body>
</html>
<?php }
}
