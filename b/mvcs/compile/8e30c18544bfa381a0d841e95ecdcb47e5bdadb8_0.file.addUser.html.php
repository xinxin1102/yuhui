<?php
/* Smarty version 3.1.30, created on 2017-03-13 10:44:59
  from "D:\wamp\www\study\yue\moni-mvc\template\admin\addUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c66a1b4c2263_80342512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e30c18544bfa381a0d841e95ecdcb47e5bdadb8' => 
    array (
      0 => 'D:\\wamp\\www\\study\\yue\\moni-mvc\\template\\admin\\addUser.html',
      1 => 1488795252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c66a1b4c2263_80342512 (Smarty_Internal_Template $_smarty_tpl) {
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
<form action="index.php?m=admin&f=user&a=addUserInfo" method="post" id="form" class="form-horizontal">
    <form>
        <div class="form-group">
            <label for="name">用户名：</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="pass">密码：</label>
            <input type="password" name="pass" id="pass">
        </div>
        <div class="form-group">
            <label for="pass2">确认密码：</label>
            <input type="password" name="pass2" id="pass2">
        </div>
        <div class="form-group">
            <label for="nickname">昵称：</label>
            <input type="text" name="nickname" id="nickname">
        </div>
        <div class="select">
            <lable for="role">角色：</lable>
            <select name="role" id="role">
                <option value="0">管理员</option>
                <option value="1" selected="selected">普通用户</option>
            </select><br/>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
</form>
</body>
</html><?php }
}
