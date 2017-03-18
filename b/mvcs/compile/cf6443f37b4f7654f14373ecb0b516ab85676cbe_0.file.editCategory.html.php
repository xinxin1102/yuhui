<?php
/* Smarty version 3.1.30, created on 2017-03-13 17:26:11
  from "E:\wamp\wamp\www\mvcs\template\admin\editCategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c6c823524f39_22059762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf6443f37b4f7654f14373ecb0b516ab85676cbe' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\mvcs\\template\\admin\\editCategory.html',
      1 => 1489422366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6c823524f39_22059762 (Smarty_Internal_Template $_smarty_tpl) {
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
<form action="index.php?m=admin&f=category&a=editCategoryInfo" method="post">
    上级分类：<select name="category">
    <?php echo $_smarty_tpl->tpl_vars['categorys']->value;?>

</select>
    <br/>
    分类名称：<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['nowcat']->value['cname'];?>
" name="cname"  />
    <input type="hidden" name="cid" value="<?php echo $_smarty_tpl->tpl_vars['nowcat']->value['cid'];?>
">
    <br/>
    <input type="submit" value="修改">
</form>
</body>
</html><?php }
}
