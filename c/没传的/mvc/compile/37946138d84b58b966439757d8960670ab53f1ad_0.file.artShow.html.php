<?php
/* Smarty version 3.1.30, created on 2017-03-09 02:37:35
  from "D:\wamp\wamp\www\ajax\mvc\template\index\artShow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c0b1df231e14_48629933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37946138d84b58b966439757d8960670ab53f1ad' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\ajax\\mvc\\template\\index\\artShow.html',
      1 => 1489019867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c0b1df231e14_48629933 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src="<?php echo EDIT_PATH;?>
/ueditor.config.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="<?php echo EDIT_PATH;?>
/ueditor.all.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>

</head>
<body>
<!--
 分类表

 cid  name  pid
 内容表
 id  title con  img cid time hits good  posid author
-->
<form action="index.php?m=index&f=art&a=add" method="post">

    <div class="form-group">
        <label for="cid" style="font-size: 16px">选择分类</label>
        <select class="form-control" name="cid" id="cid">
            <option value="0">一级分类</option>
            <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>


        </select>
    </div>
    <div class="form-group">
        <label for="stitle" style="font-size: 16px">文章标题</label>
        <input type="text" class="form-control" id="stitle" name="stitle" placeholder="标题">
    </div>

    <div class="form-group">
        <label for="scon" style="font-size: 16px">文章内容</label>
        <?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:95%;height:500px;margin:auto" name="scon"><?php echo '</script'; ?>
>
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>
<a href="index.php">首页</a>
<?php echo '<script'; ?>
>
    var ue = UE.getEditor('editor');
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
