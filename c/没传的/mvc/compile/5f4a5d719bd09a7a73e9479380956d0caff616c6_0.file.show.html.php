<?php
/* Smarty version 3.1.30, created on 2017-03-09 02:12:27
  from "D:\wamp\wamp\www\ajax\mvc\template\admin\show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c0abfbef0d62_21724681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f4a5d719bd09a7a73e9479380956d0caff616c6' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\ajax\\mvc\\template\\admin\\show.html',
      1 => 1489021943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c0abfbef0d62_21724681 (Smarty_Internal_Template $_smarty_tpl) {
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
/bootstrap.min.css">
</head>
<style>
    body{
        background: #f6f6f6;
    }
</style>
<body>
<h1 style="text-align:center">管理信息</h1>
<table class="table table-bordered text-center">
    <tr>
        <th class="text-center">id</th>
        <th class="text-center">分类</th>
        <th class="text-center">父id</th>
        <th class="text-center">操作</th>
    </tr>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cid"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["pid"];?>
</td>
        <td>
            <a class="btn btn-default" href="index.php?m=admin&f=category&a=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
" role="button">删除</a>
            <a class="btn btn-default" href="index.php?m=admin&f=category&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
" role="button">编辑</a>
        </td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</table>
</body>
</html><?php }
}
