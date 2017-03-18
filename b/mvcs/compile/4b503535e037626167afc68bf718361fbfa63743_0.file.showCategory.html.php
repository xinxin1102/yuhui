<?php
/* Smarty version 3.1.30, created on 2017-03-13 10:15:37
  from "D:\wamp\www\study\yue\moni-mvc\template\admin\showCategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c66339d2e434_98769098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b503535e037626167afc68bf718361fbfa63743' => 
    array (
      0 => 'D:\\wamp\\www\\study\\yue\\moni-mvc\\template\\admin\\showCategory.html',
      1 => 1488793332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c66339d2e434_98769098 (Smarty_Internal_Template $_smarty_tpl) {
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
        <th>父id</th>
        <th>操作</th>
    </tr>
    <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

    <!--<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
</td>
        <td>
            <a class="btn btn-default" href="index.php?m=admin&f=category&a=delCategory&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">删除</a>
            <a class="btn btn-default" href="index.php?m=admin&f=category&a=delCategory&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">编辑</a>
        </td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
-->
</table>
</body>
</html><?php }
}
