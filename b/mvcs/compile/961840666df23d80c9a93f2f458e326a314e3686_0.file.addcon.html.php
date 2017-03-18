<?php
/* Smarty version 3.1.30, created on 2017-03-13 10:55:37
  from "D:\wamp\www\study\yue\moni-mvc\template\index\addcon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c66c99bed445_03898280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '961840666df23d80c9a93f2f458e326a314e3686' => 
    array (
      0 => 'D:\\wamp\\www\\study\\yue\\moni-mvc\\template\\index\\addcon.html',
      1 => 1489069330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_58c66c99bed445_03898280 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/addcon.css">
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_PATH;?>
/ueditor/ueditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_PATH;?>
/ueditor/ueditor.all.min.js"> <?php echo '</script'; ?>
>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_PATH;?>
/ueditor/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>

    <div class="box">
        <form action="index.php?m=index&f=art&a=addconInfo" method="post">
            <div class="form-group">
                <label for="category">分类</label>
                <select name="cid" id="category">
                    <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

                </select>
            </div>
            <div class="form-group">
                <label for="stitle">标题</label>
                <input type="text" class="stitle" id="stitle" name="stitle" >
            </div>
            <div class="form-group">
                <label for="editor">内容</label>
                <div>
                    <?php echo '<script'; ?>
 id="editor" name="edit" type="text/plain" style="width:1024px;height:500px;"><?php echo '</script'; ?>
>
                </div>
            </div>
            <button type="submit" class="btn btn-default">保存文章</button>
        </form>
    </div>
</body>
<?php echo '<script'; ?>
>
    var ue = UE.getEditor('editor');
<?php echo '</script'; ?>
>
</html><?php }
}
