<?php
/* Smarty version 3.1.30, created on 2017-03-13 10:19:21
  from "D:\wamp\www\study\yue\moni-mvc\template\admin\editpos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c664194657f1_75524069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98278c8f8dc2f6bfed9b998dc765e5f76135b6b5' => 
    array (
      0 => 'D:\\wamp\\www\\study\\yue\\moni-mvc\\template\\admin\\editpos.html',
      1 => 1489396755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c664194657f1_75524069 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<form action="index.php?m=admin&f=position&a=editposInfo" method="post">
    修改推荐位：<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['position']->value['posname'];?>
" name="posname"  />
    <input type="hidden" name="posid" value="<?php echo $_smarty_tpl->tpl_vars['position']->value['posid'];?>
">
    <br/>
    <input type="submit" value="修改" id="submit">
</form>
</body>
</html><?php }
}
