<?php
/* Smarty version 3.1.30, created on 2017-03-14 09:14:39
  from "E:\wamp\wamp\www\mvcs\template\index\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c7a66fd87a31_10121432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd37fc5fa72b21b47d80ce936d5c2f1afe1046cf6' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\mvcs\\template\\index\\login.html',
      1 => 1489479262,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c7a66fd87a31_10121432 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/login.js"><?php echo '</script'; ?>
>
</head>
<body>
<form action="index.php?m=index&f=login&a=onLogin" method="post" id="form">

    <div class="box">
    	<h1>Admin Area</h1>
        <div class="form-group">
            <label for="username">Admin</label>
            <input type="text" class="form-control" id="username" name="username" autocomplete>
        </div>
        <div class="form-group">
            <label for="Password1">Pass</label>
            <input type="password" class="form-control" id="Password1" name="password" autocomplete>
        </div>
        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" id="code" class="form-control" name="code" autocomplete>
            <img src="index.php?m=index&f=login&a=code" alt="验证码" title="点击更换" class="code"
                 onclick="this.src='index.php?m=index&f=login&a=code&'+Math.random()">
        </div>
        <p>没有用户名，请<a href="index.php?m=index&f=login&a=reg">注册</a></p>
        <input type="submit" class="btn btn-default" id="dlbtn" value="登录">
        <p><a href="index.php?m=index" class="unlogin ">返回首页 </a></p>


    </div>
    
 </form> 


</body>
</html><?php }
}
