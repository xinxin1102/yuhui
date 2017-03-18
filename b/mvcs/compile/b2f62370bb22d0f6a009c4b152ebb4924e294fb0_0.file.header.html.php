<?php
/* Smarty version 3.1.30, created on 2017-03-16 03:38:13
  from "E:\wamp\wamp\www\mvcs\template\index\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c9fa95b6c893_46312755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2f62370bb22d0f6a009c4b152ebb4924e294fb0' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\mvcs\\template\\index\\header.html',
      1 => 1489631737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/notice.html' => 1,
  ),
),false)) {
function content_58c9fa95b6c893_46312755 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>畅谈吧</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/public.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/header.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mui.min.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/mui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/header.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="topnav">
	<div class="contents">
    <div class="message">
        <a href="index.php">个人博客</a>
    </div>
    <ul>
        <?php if (empty($_smarty_tpl->tpl_vars['nickname']->value)) {?>
        <li><a href="index.php?m=index&f=login&a=startLogin">登录</a></li>
        <li><a href="index.php?m=index&f=login&a=reg">注册</a></li>
        <?php } else { ?>
        <li class="users">hello！<?php echo $_smarty_tpl->tpl_vars['nickname']->value;?>
</li>
        <li><a href="index.php?m=index&f=login&a=unlogin">退出登录</a></li>
        <?php }?>

        <li><a href="index.php?m=index&f=art&a=addcon">写文章</a></li>
        <li><a href="index.php?m=index&f=home">个人中心</a></li>

    </ul>
	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:index/notice.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
