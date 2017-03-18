<?php
/* Smarty version 3.1.30, created on 2017-03-14 04:11:43
  from "E:\wamp\wamp\www\mvcs\template\admin\addUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c75f6f85f279_51752352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5487b6baff49f0e3810598d02ad13f9afc491104' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\mvcs\\template\\admin\\addUser.html',
      1 => 1489461092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c75f6f85f279_51752352 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/public.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/addUser.css">
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
/admin/addUser.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="box">
<form action="index.php?m=admin&f=user&a=addUserInfo" method="post" id="form" class="form-horizontal">
    <form>
        <div class="form-group">
            <label for="name">Admin：</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="pass">Pass：</label>
            <input type="password" name="pass" id="pass">
        </div>
        <div class="form-group">
            <label for="pass2">Repeat：</label>
            <input type="password" name="pass2" id="pass2">
        </div>
        <div class="form-group">
            <label for="nickname">Only-you：</label>
            <input type="text" name="nickname" id="nickname">
        </div>
        <div class="select">
            <lable for="role">yourrole：</lable>
            <select name="role" id="role">
                <option value="0">管理员</option>
                <option value="1" selected="selected">客户</option>
            </select><br/>
        </div>
        <button type="submit" class="btn btn-default">提交</button>
</form>
</div>
</body>
</html><?php }
}
