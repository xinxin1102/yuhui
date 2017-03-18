<?php
/* Smarty version 3.1.30, created on 2017-03-13 10:18:08
  from "D:\wamp\www\study\yue\moni-mvc\template\admin\addpos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c663d0a7da67_87989355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e803fcaca53ac62fa94e1f25b6088f2df6f2464d' => 
    array (
      0 => 'D:\\wamp\\www\\study\\yue\\moni-mvc\\template\\admin\\addpos.html',
      1 => 1489396662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c663d0a7da67_87989355 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form action="index.php?m=admin&f=position&a=addposInfo" method="post">
        已有推荐位：<select name="position" id="">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['position']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['posid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['posname'];?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </select><br/>
        推荐位名称：<input type="text" name="posname"><br/>
        <input type="submit" value="添加">
    </form>
</body>
</html><?php }
}
