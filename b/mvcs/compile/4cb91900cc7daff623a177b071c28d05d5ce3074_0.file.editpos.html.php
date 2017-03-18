<?php
/* Smarty version 3.1.30, created on 2017-03-13 17:24:47
  from "E:\wamp\wamp\www\mvcs\template\admin\editpos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c6c7cf71c439_47738434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cb91900cc7daff623a177b071c28d05d5ce3074' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\mvcs\\template\\admin\\editpos.html',
      1 => 1489422283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6c7cf71c439_47738434 (Smarty_Internal_Template $_smarty_tpl) {
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
    更改推荐位：<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['position']->value['posname'];?>
" name="posname"  />
    <input type="hidden" name="posid" value="<?php echo $_smarty_tpl->tpl_vars['position']->value['posid'];?>
">
    <br/>
    <input type="submit" value="更新" id="submit">
</form>
</body>
</html><?php }
}
