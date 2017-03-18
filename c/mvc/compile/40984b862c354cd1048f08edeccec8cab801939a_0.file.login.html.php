<?php
/* Smarty version 3.1.30, created on 2017-03-08 12:42:03
  from "D:\wamp\wamp\www\ajax\mvc\template\index\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bfee0be75f44_12941459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40984b862c354cd1048f08edeccec8cab801939a' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\ajax\\mvc\\template\\index\\login.html',
      1 => 1488901256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bfee0be75f44_12941459 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/login.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(document).ready(function(c) {
        $('.close').on('click', function(c){
            $('.login-form').fadeOut('slow', function(c){
                $('.login-form').remove();
            });
        });
    });
<?php echo '</script'; ?>
>
<body>
<h1>Login</h1>
<div class="login-form">
    <div class="close"> </div>
    <div class="head-info">
        <label class="lbl-1"> </label>
        <label class="lbl-2"> </label>
        <label class="lbl-3"> </label>
    </div>
    <div class="clear"> </div>
    <div class="avtar">
        <img src="<?php echo IMG_PATH;?>
/login/avtar.png" />
    </div>
    <form action="index.php?m=index&f=login&a=check" method="post">
        <input type="text" class="text" name="uname">
        <div class="key">
            <input type="password" name="upass">
        </div>
        <!--<img src="<?php echo IMG_PATH;?>
/login/54.jpg" alt="" style="margin-left: -110px;margin-bottom: -5px">-->
        <input type="text"  name="code" style="width: 15%;margin-left:-20px;margin-bottom: 30px;background:url(../static/imgs/login/54.jpg) no-repeat 0px 0px">
        <img src="index.php?m=admin&f=index&a=code" onclick="this.src='index.php?m=admin&f=index&a=code&'+Math.random()" width="150" height="60" style="margin-left:50px;margin-bottom: -24px;margin-top: 10px"/>
        <div class="signin">
            <input type="submit" value="Login" >
        </div>

    </form>
</div>
</body>
</html><?php }
}
