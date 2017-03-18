<?php
/* Smarty version 3.1.30, created on 2017-03-13 06:51:06
  from "D:\wamp\www\study\yue\moni-mvc\template\index\reg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c6334ac766e1_21379755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d6f51636e3f3abcf70a4e27e68b57be3763bc53' => 
    array (
      0 => 'D:\\wamp\\www\\study\\yue\\moni-mvc\\template\\index\\reg.html',
      1 => 1489294737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6334ac766e1_21379755 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/public.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/reg.css">
</head>
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
/index/reg.js"><?php echo '</script'; ?>
>

<body>
<form action="index.php?m=index&f=login&a=addReg" method="post" id="form">
    <div class="box">
        <div class="form-group">
            <h3>注册页</h3>
            <label for="username">用户名</label>
            <input type="text" class="form-control" id="username" name="username" autocomplete>
        </div>
        <div class="form-group">
            <label for="nickname">昵称</label>
            <input type="text" class="form-control" id="nickname" name="nickname" autocomplete>
        </div>
        <div class="form-group">
            <label for="Password1">密码</label>
            <input type="password" class="form-control" id="Password1" name="password" autocomplete>
        </div>
        <div class="form-group">
            <label for="Password2">确认密码</label>
            <input type="password" class="form-control" id="Password2" name="password2" autocomplete>
        </div>
        <div class="form-group">
            <label for="code">验证码</label>
            <input type="text" id="code" name="code" autocomplete><br/>
            <img src="index.php?m=index&f=login&a=code" alt="验证码" title="点击更换" class="code"
                 onclick="this.src='index.php?m=index&f=login&a=code&'+Math.random()">
        </div>
        <p>已有用户名，请<a href="index.php?m=index&f=login&a=login">点击登录</a></p>
        <input type="submit" class="btn btn-default" value="点击注册">

    </div>
</form>
</body>

</html>
<?php }
}
