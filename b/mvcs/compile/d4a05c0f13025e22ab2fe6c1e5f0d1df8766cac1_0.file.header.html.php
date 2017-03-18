<?php
/* Smarty version 3.1.30, created on 2017-03-12 12:05:15
  from "D:\wamp\www\study\yue\moni-mvc\template\index\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c52b6b6bf2e5_12246046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4a05c0f13025e22ab2fe6c1e5f0d1df8766cac1' => 
    array (
      0 => 'D:\\wamp\\www\\study\\yue\\moni-mvc\\template\\index\\header.html',
      1 => 1489287894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/notice.html' => 1,
  ),
),false)) {
function content_58c52b6b6bf2e5_12246046 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cyy的博客</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/public.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/header.css">
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
    <div class="message">
        <a href="index.php">欢迎来到cyy的博客</a>
    </div>
    <ul>
        <?php if (empty($_smarty_tpl->tpl_vars['nickname']->value)) {?>
        <li><a href="index.php?m=index&f=login&a=startLogin">登录</a></li>
        <li><a href="index.php?m=index&f=login&a=reg">注册</a></li>
        <?php } else { ?>
        <li>欢迎<?php echo $_smarty_tpl->tpl_vars['nickname']->value;?>
回来</li>
        <li><a href="index.php?m=index&f=login&a=unlogin">退出登录</a></li>
        <?php }?>

        <li><a href="index.php?m=index&f=art&a=addcon">添加文章</a></li>
        <li><a href="index.php?m=index&f=home">个人中心</a></li>

    </ul>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:index/notice.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
