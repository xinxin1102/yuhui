<?php
/* Smarty version 3.1.30, created on 2017-03-13 07:17:50
  from "D:\wamp\wamp\www\ajax\mvc\template\index\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c6398e1b7348_43335394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3323160351a6a161f919a23bee06c1ef60a815da' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\ajax\\mvc\\template\\index\\header.html',
      1 => 1489385868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6398e1b7348_43335394 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<!--love表中 ，sid  发表的文章      uid 谁收藏的-->
<!--message中  pid  几级留言  uid uid2 谁给谁的留言  sid  发布信息的id -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/qian.css">-->
    <link rel="icon" type="image/png" href="<?php echo IMG_PATH;?>
/favicon.png">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/animate.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/templatemo-style.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.simple-text-rotator.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/smoothscroll.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/wow.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.flexslider.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/templatemo-script.js"><?php echo '</script'; ?>
>
    <title>Document</title>
</head>
<body data-spy="scroll" data-target=".navbar-collapse" style="background: #fff">

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand" ><h3 style="font-size: 30px;margin-top: 20px">BLOG</h3></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <?php if (!empty($_smarty_tpl->tpl_vars['indexLogin']->value)) {?>
                    <li><a href="index.php?m=index&f=my&a=self" class="smoothScroll">HOME</a></li>

                    <li><a href="<a href="index.php?m=index&f=my&a=self" class="smoothScroll">欢迎 <?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
回来</a></li>
                        <li><a href="index.php?m=index&f=login&a=logout" class="smoothScroll">exit</a></li>

                    <?php } else { ?>
                    <li><a href="index.php?m=index&f=login&a=init" class="smoothScroll">login</a></li>
                    <li><a href="index.php?m=index&f=login&a=reg" class="smoothScroll">register</a></li>
                    <?php }?>
                    <li><a href="index.php?m=index&f=art&a=show" class="smoothScroll">article</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav><?php }
}
