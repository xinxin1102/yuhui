<?php
/* Smarty version 3.1.30, created on 2017-03-13 10:18:07
  from "D:\wamp\www\study\yue\moni-mvc\template\admin\showpos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c663cf3c9d37_92575438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ecf4c8444fe33156597d258d474eb23bf392fb8' => 
    array (
      0 => 'D:\\wamp\\www\\study\\yue\\moni-mvc\\template\\admin\\showpos.html',
      1 => 1489396683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c663cf3c9d37_92575438 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        table{
            width:800px;
            border:1px solid #000000;
            border-collapse:collapse;
            margin:0 auto;
            margin-top:40px;
        }
        tr,td{
            height:26px;
            border:1px solid #000;
            line-height:26px;
        }
        td{
            padding-left:15px;
            overflow:hidden;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>推荐位id</th>
        <th>推荐位名称</th>
        <th>编辑</th>
    </tr>


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['position']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["posid"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["posname"];?>
</td>
        <td>
            <a href="index.php?m=admin&f=position&a=delpos&posid=<?php echo $_smarty_tpl->tpl_vars['v']->value['posid'];?>
">删除</a>
            <a href="index.php?m=admin&f=position&a=editpos&posid=<?php echo $_smarty_tpl->tpl_vars['v']->value['posid'];?>
">编辑</a>
        </td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</table>
</body>
</html>
<?php }
}
