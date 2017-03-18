<?php
/* Smarty version 3.1.30, created on 2017-03-13 08:58:49
  from "D:\wamp\www\study\yue\moni-mvc\template\index\home.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c651397e81c3_42805357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b8b806699b4b4929a8f9c378da45f0e6de0256c' => 
    array (
      0 => 'D:\\wamp\\www\\study\\yue\\moni-mvc\\template\\index\\home.html',
      1 => 1489391927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_58c651397e81c3_42805357 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/public.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/home.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/upload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/home.js"><?php echo '</script'; ?>
>

<div class="content">
    <div class="topbox">
        <div class="imgbox">
            <img src="<?php echo $_smarty_tpl->tpl_vars['touxiang']->value;?>
" alt="">
        </div>
        <div class="leftbox">

            <h3>名字</h3>
            <ul class="info">
                <li>
                    <a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['guanzhu']->value;?>
<br/>关注</a>
                </li>
                <li>
                    <a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['be_guanzhu']->value;?>
<br/>粉丝</a>
                </li>
                <li>
                    <a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['love']->value;?>
<br/>收藏</a>
                </li>
                <li>
                    <a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['be_love']->value;?>
<br/>被收藏</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="content">
        <h3>发表文章</h3>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stitles']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <li><span>[<?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
]</span><?php echo $_smarty_tpl->tpl_vars['v']->value['stitle'];?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
    </div>

    <div class="add_touxiang">
        <form action="index.php?m=admin&f=upload&a=addtouxiangInfo" method="post">
            添加图片：<input type="file"  name="file" id="img_file"><br/>
            <div class="box">
                <div class="img"><img src="" alt=""></div>
                <div class="img_progress"></div>
            </div>
            <input type="hidden" name="imgurl" id="imgurl">
            <input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">
            <input type="submit" class="btn btn-default select" id="imgurl_btn" value="确认上传">
        </form>
    </div>

</div>

</body>
</html>














<?php }
}
