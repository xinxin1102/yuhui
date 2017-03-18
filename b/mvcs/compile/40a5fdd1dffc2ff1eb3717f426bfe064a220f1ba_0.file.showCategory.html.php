<?php
/* Smarty version 3.1.30, created on 2017-03-13 17:21:48
  from "E:\wamp\wamp\www\mvcs\template\admin\showCategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c6c71c59d355_51412009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40a5fdd1dffc2ff1eb3717f426bfe064a220f1ba' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\mvcs\\template\\admin\\showCategory.html',
      1 => 1489422104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6c71c59d355_51412009 (Smarty_Internal_Template $_smarty_tpl) {
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
/admin/showCategory.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
</head>
<body>
<table class="table  table-bordered">
    <tr>
        <th>id</th>
        <th>分类名称</th>
        <th>pid</th>
        <th>操作</th>
    </tr>
    <?php echo $_smarty_tpl->tpl_vars['result']->value;?>


</table>
</body>
</html><?php }
}
