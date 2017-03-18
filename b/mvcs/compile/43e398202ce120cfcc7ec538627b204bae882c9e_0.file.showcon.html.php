<?php
/* Smarty version 3.1.30, created on 2017-03-13 17:32:06
  from "E:\wamp\wamp\www\mvcs\template\admin\showcon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c6c9864fe082_55192643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43e398202ce120cfcc7ec538627b204bae882c9e' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\mvcs\\template\\admin\\showcon.html',
      1 => 1489422723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6c9864fe082_55192643 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <style>
        .page{
            text-align:Center;
            line-height:50px;
        }
        .page a{
            margin:5px;
        }
    </style>
</head>
<body>
        <table class="table text-center">
            <tr>
                <th class="text-center">id</th>
                <th class="text-center">标题</th>
                <th class="text-center">推荐位</th>
                <th class="text-center">作者</th>
                <th class="text-center">点击数</th>
                <th class="text-center">点赞数</th>
                <th class="text-center">状态</th>
                <th class="text-center">发布时间</th>
                <th class="text-center">操作</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["posname"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["username"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["hits"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["good"];?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['v']->value["statu"] == 0) {?>
                        未审核
                    <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["statu"] == 1) {?>
                        审核中
                    <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["statu"] == 3) {?>
                        审核通过
                    <?php } else { ?>
                        审核未通过
                    <?php }?></td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["stime"];?>
</td>
                <td>
                    <a href="index.php?m=admin&f=art&a=statucon&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
">查看</a>
                    <a href="index.php?m=admin&f=art&a=delcon&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
">删除</a>
                </td>
            </tr>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



        </table>

        <div class="page">
            <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

        </div>

</body>
</html><?php }
}
