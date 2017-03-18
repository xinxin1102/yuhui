<?php
/* Smarty version 3.1.30, created on 2017-03-13 16:53:39
  from "E:\wamp\wamp\www\mvcs\template\admin\addpos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c6c0831b14a7_09822140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0583f39297ee769b02203e710ae6d53bd3e953c6' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\mvcs\\template\\admin\\addpos.html',
      1 => 1489420414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6c0831b14a7_09822140 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form action="index.php?m=admin&f=position&a=addposInfo" method="post">
              推荐位：<select name="position" id="">

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
