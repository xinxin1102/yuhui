<?php
/* Smarty version 3.1.30, created on 2017-03-12 16:05:27
  from "D:\wamp\wamp\www\ajax\mvc\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c563b7eeb7a4_97351629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26a2a073b9c2336ed81f4e06a1c7b4d9937f1db0' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\ajax\\mvc\\template\\admin\\login.html',
      1 => 1489331126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c563b7eeb7a4_97351629 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="<?php echo CSS_PATH;?>
/111.css" rel="stylesheet" type="text/css" media="all"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>
<div class="login">
    <h2>Acced Form</h2>
    <div class="login-top">
        <h1>LOGIN</h1>
        <form action="index.php?m=admin&f=index&a=check" method="post">
            <input type="text" value="User Id" name="aname">
            <input type="password" value="password" name="apass" autocomplete="off">
            <input type="text"  name="code" value="Verification">
            <img src="index.php?m=admin&f=index&a=code" onclick="this.src='index.php?m=admin&f=index&a=code&'+Math.random()" width="150" height="60"/>
            <div class="forgot">
                <input type="submit" value="Login">
            </div>
        </form>

    </div>
    <div class="login-bottom">
        <h3><a href="#">Welcome</a></h3>
    </div>
</div>
</body>
</html><?php }
}
