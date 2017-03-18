<?php
/* Smarty version 3.1.30, created on 2017-03-10 02:16:42
  from "D:\wamp\wamp\www\ajax\mvc\template\index\reg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c1fe7a67e2b6_36466530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47e39df228f0b439e817d633b2d409711cda85f1' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\ajax\\mvc\\template\\index\\reg.html',
      1 => 1489108600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c1fe7a67e2b6_36466530 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/reg.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.metadata.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/reg.js"><?php echo '</script'; ?>
>

</head>
<body>
<div class="he">
    <a href="index.php?m=index&f=login&a=init">登陆</a>
    <a href="index.php">返回主页</a>
</div>
    <h1>register</h1>
<div class="box">
    <form action="index.php?m=index&f=login&a=addReg" method="post" id="myform">
        用户名&nbsp;:<input type="text" id="uname" name="uname" autocomplete="off"><br><br>
        密&nbsp;&nbsp;&nbsp;&nbsp;码:<input type="text" name="upass" autocomplete="off" id="pass"><br><br>
        确认密码:<input type="text" name="upass2" autocomplete="off"><br><br>
        验证码&nbsp;:<input type="text" name="code" size="6"><br><br><img src="index.php?m=admin&f=index&a=code" alt="" width="100" height="40" onclick="this.src='index.php?m=admin&f=index&a=code&'+Math.random()" style="vertical-align:middle"><br><br>
        <input type="submit" value="register">
    </form>
</div>
</body>
</html><?php }
}
