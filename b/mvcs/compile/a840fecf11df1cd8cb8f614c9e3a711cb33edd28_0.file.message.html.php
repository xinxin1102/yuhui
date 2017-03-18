<?php
/* Smarty version 3.1.30, created on 2017-03-13 16:26:36
  from "E:\wamp\wamp\www\mvcs\template\admin\message.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c6ba2c2fd199_56645806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a840fecf11df1cd8cb8f614c9e3a711cb33edd28' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\mvcs\\template\\admin\\message.html',
      1 => 1489287947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6ba2c2fd199_56645806 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>提示信息</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/message.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/message.js"><?php echo '</script'; ?>
>
</head>
<body>

<div class="box">
    <h3>提示信息</h3>
    <div class="con">
        <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<br/>
        <span>3</span>秒后返回首页<br/>
        如果没有跳转<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">点击这里</a>
    </div>
</div>

</body>
</html>
<?php }
}
