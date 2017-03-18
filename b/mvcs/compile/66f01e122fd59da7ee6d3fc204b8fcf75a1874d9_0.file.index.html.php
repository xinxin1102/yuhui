<?php
/* Smarty version 3.1.30, created on 2017-03-13 10:15:35
  from "D:\wamp\www\study\yue\moni-mvc\template\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c66337017cb5_97870892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66f01e122fd59da7ee6d3fc204b8fcf75a1874d9' => 
    array (
      0 => 'D:\\wamp\\www\\study\\yue\\moni-mvc\\template\\admin\\index.html',
      1 => 1489394913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c66337017cb5_97870892 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/public.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/index.css">
</head>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/admin/index.js"><?php echo '</script'; ?>
>

<body>
<div class="header">
    <h2><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
，欢迎来到内容管理系统！</h2>
    <h5><a href="index.php?m=admin&a=unLogin">退出登录</a></h5>
</div>
<div class="bottom">
    <div class="left">
        <ul>
            <li>
                <span class="opi"><i></i>主页 <b></b></span>
                <ul class="son">
                    <li><a href="index.php" target="_blank">打开主页</a></li>
                </ul>
            </li>
            <li>
                <span class="opi"><i></i>用户管理<b></b></span>
                <ul class="son">
                    <li><a href="index.php?m=admin&f=user&a=addUser" target="right">添加用户</a></li>
                    <li><a href="index.php?m=admin&f=user&a=select" target="right">管理用户</a></li>
                </ul>
            </li>
            <li>
                <span class="opi"><i></i>分类管理<b></b></span>
                <ul class="son">
                    <li><a href="index.php?m=admin&f=category&a=addCategory"  target="right">添加分类</a></li>
                    <li><a href="index.php?m=admin&f=category&a=showCategory" target="right">管理分类</a></li>
                </ul>
            </li>
            <li>
                <span class="opi"><i></i>内容管理<b></b></span>
                <ul class="son">
                    <li><a href="index.php?m=admin&f=art&a=addcon" target="right">添加内容</a></li>
                    <li><a href="index.php?m=admin&f=art&a=showcon" target="right">管理内容</a></li>
                </ul>
            </li>
            <li>
                <span class="opi"><i></i>推荐位管理<b></b></span>
                <ul class="son">
                    <li><a href="index.php?m=admin&f=position&a=addpos" target="right">添加推荐位</a></li>
                    <li><a href="index.php?m=admin&f=position&a=showpos" target="right">管理推荐位</a></li>
                </ul>
            </li>
            <li>
                <span class="opi"><i></i>其它信息<b></b></span>
                <ul class="son">
                    <li><a href="index.php?m=admin&f=upload&a=editinfo" target="right">其它信息管理</a></li>
                    <li><a href="index.php?m=admin&f=upload&a=imgurl" target="right">批量更新图片url</a></li>
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
