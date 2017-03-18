<?php
/* Smarty version 3.1.30, created on 2017-03-14 03:09:14
  from "E:\wamp\wamp\www\mvcs\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c750ca42c332_39162456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bff9ab26e80ddbb1a964c757f80cef0061a7424' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\mvcs\\template\\admin\\login.html',
      1 => 1489430746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c750ca42c332_39162456 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/admin/login.js"><?php echo '</script'; ?>
>
</head>
<body>
<form action="index.php?m=admin&a=onLogin" method="post">
    <div class="box">
        <h3>登录页</h3>
        用户名：<input type="text" value="" name="username"/><br/>
        密　码：<input type="password" value="" name="password"/><br/>
        验证码：<input type="text" value="" name="code" size="4" use="no"><img src="index.php?m=admin&f=index&a=code" alt="验证码" title="点击更换" class="code" onclick="this.src='index.php?m=admin&f=index&a=code&'+Math.random()"><span class="codes"></span><br/>
        <input type="submit" value="登录" disabled="disabled" /><br/>
    </div>
</form>
</body>
</html><?php }
}
