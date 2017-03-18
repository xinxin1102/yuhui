<?php
/* Smarty version 3.1.30, created on 2017-03-13 05:44:27
  from "D:\wamp\www\study\yue\moni-mvc\template\admin\editinfo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c623abab5692_65477713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94cd35e731c87662fb9b9247ad57dbc53749c75c' => 
    array (
      0 => 'D:\\wamp\\www\\study\\yue\\moni-mvc\\template\\admin\\editinfo.html',
      1 => 1489380143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c623abab5692_65477713 (Smarty_Internal_Template $_smarty_tpl) {
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

<form action="index.php?m=admin&f=upload&a=editinfoInfo" method="post">
    主机名称：<br/>
    <input type="text" name="host" value="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
"><br/>
    主机的upload文件夹绝对路径，不写主机：<br/>
    <input type="text" name="imgfile" value=<?php echo $_smarty_tpl->tpl_vars['imgfile']->value;?>
><br/>
    <input type="submit" value="提交">
</form>

</body>
</html><?php }
}
