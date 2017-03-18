<?php
/* Smarty version 3.1.30, created on 2017-03-12 12:09:22
  from "D:\wamp\www\study\yue\moni-mvc\template\index\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c52c6211c168_16409904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75618730937d73cb18531abe44c7e0f80c8f5ba9' => 
    array (
      0 => 'D:\\wamp\\www\\study\\yue\\moni-mvc\\template\\index\\login.html',
      1 => 1489294699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c52c6211c168_16409904 (Smarty_Internal_Template $_smarty_tpl) {
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
<!--
    <div class="box">
        <h3>登录页</h3>
        用户名：<input type="text" value="" name="username"/><br/>
        密　码：<input type="password" value="" name="password"/><br/>
        验证码：<input type="text" value="" name="code" size="4" use="no"><img src="index.php?m=index&f=login&a=code" alt="验证码" title="点击更换" class="code" onclick="this.src='index.php?m=index&f=login&a=code&'+Math.random()"><span class="codes"></span><br/>
        <input type="submit" value="登录" disabled="disabled" /><br/>
        没有用户名，请<a href="index.php?m=index&f=login&a=reg">点击注册</a>
    </div>
-->


    <div class="box">
        <h3>登录页</h3>
        <div class="form-group">
            <label for="username">用户名</label>
            <input type="text" class="form-control" id="username" name="username" autocomplete>
        </div>
        <div class="form-group">
            <label for="Password1">密码</label>
            <input type="password" class="form-control" id="Password1" name="password" autocomplete>
        </div>
        <div class="form-group">
            <label for="code">验证码</label>
            <input type="text" id="code" name="code" autocomplete><br/>
            <img src="index.php?m=index&f=login&a=code" alt="验证码" title="点击更换" class="code"
                 onclick="this.src='index.php?m=index&f=login&a=code&'+Math.random()">
        </div>
        <p>没有用户名，请<a href="index.php?m=index&f=login&a=reg">点击注册</a></p>
        <input type="submit" class="btn btn-default" value="点击登录">
        <a href="index.php?m=index" class="unlogin">取消登录</a>


    </div>


</body>
</html><?php }
}
