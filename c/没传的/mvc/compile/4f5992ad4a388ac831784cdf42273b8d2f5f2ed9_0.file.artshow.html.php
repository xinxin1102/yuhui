<?php
/* Smarty version 3.1.30, created on 2017-03-13 09:01:34
  from "D:\wamp\wamp\www\ajax\mvc\template\admin\artshow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c651de4bed00_47707423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f5992ad4a388ac831784cdf42273b8d2f5f2ed9' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\ajax\\mvc\\template\\admin\\artshow.html',
      1 => 1489392089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c651de4bed00_47707423 (Smarty_Internal_Template $_smarty_tpl) {
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
    <style>
        th{
            text-align: center;
        }
    </style>
</head>
<body>
<table class="table text-center">
    <tr>
        <th>
            id
        </th>
        <th>
            所属分类
        </th>
        <th>
            标题
        </th>
        <th>
            作者
        </th>
        <th>
            点击数
        </th>
        <th>
            点赞数
        </th>
        <th>
            状态
        </th>
        <th>
            发布时间
        </th>
        <th>
            操作
        </th>
    </tr>
    <!--

    select * from shows inner join user on shows.uid=user.uid;
    -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["sid"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</td>

        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["hits"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["good"];?>
</td>
        <td><?php if ($_smarty_tpl->tpl_vars['v']->value["statu"] == 0) {?>
            未审核
            <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["statu"] == 1) {?>
            审核中
            <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["statu"] == 2) {?>
            审核未通过
            <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["statu"] == 3) {?>
            审核通过
            <?php }?>
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["stime"];?>
</td>
        <td>
            <a href="index.php?m=admin&f=art&a=info&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
">查看</a>
        </td>
    </tr>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



</table>
<div style="text-align: center">
<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

</div>
</body>
</html><?php }
}
