<?php
/* Smarty version 3.1.30, created on 2017-03-13 09:00:48
  from "D:\wamp\wamp\www\ajax\mvc\template\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c651b01e51b7_58151244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbcbc807f373f9c683c1507e6f4e20479a7ad835' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\ajax\\mvc\\template\\admin\\index.html',
      1 => 1489391617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c651b01e51b7_58151244 (Smarty_Internal_Template $_smarty_tpl) {
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
/adminIndex.css">
</head>
<body>
<div class="header">
    <img src="<?php echo IMG_PATH;?>
/1111.png" alt="">
    <div class="header1">
        <span><?php echo $_smarty_tpl->tpl_vars['aname']->value;?>
后台管理系统</span>
    </div>
    <div class="header2">
        <span style="padding-right: 20px">欢迎您</span>
        <a href="index.php?m=admin&f=index&a=logout">退出</a>
    </div>
</div>
<div class="main">

    <div class="left">
        <ul>
            <li>用户管理
                <ul>
                    <li>
                        <a href="javascript:;" target="right">添加用户</a>
                    </li>
                    <li>
                        <a href="index.php?m=admin&f=user&a=select" target="right">管理用户</a>
                    </li>
                </ul>
            </li>

            <li>栏目管理
                <ul>
                    <li>
                        <a href="index.php?m=admin&f=category&a=showadd" target="right">添加栏目</a>
                    </li>
                    <li>
                        <a href="index.php?m=admin&f=category&a=select" target="right">管理栏目</a>
                    </li>
                </ul>
            </li>
            <li>栏目管理
                <ul>
                    <li>
                        <a href="javascript:;" target="right">添加内容</a>
                    </li>
                    <li>
                        <a href="index.php?m=admin&f=art&a=show" target="right">管理内容</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="right">
        <iframe src="" frameborder="0" name="right">

        </iframe>
    </div>
</div>

</body>
</html><?php }
}
