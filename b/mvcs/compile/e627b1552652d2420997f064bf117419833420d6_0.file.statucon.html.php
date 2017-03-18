<?php
/* Smarty version 3.1.30, created on 2017-03-13 18:34:53
  from "E:\wamp\wamp\www\mvcs\template\admin\statucon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c6d83dd74468_05280775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e627b1552652d2420997f064bf117419833420d6' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\mvcs\\template\\admin\\statucon.html',
      1 => 1489400244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6d83dd74468_05280775 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/statucon.css">
</head>
<body>
    <h3>
        文章标题：<?php echo $_smarty_tpl->tpl_vars['result']->value[0]["stitle"];?>

    </h3>
    <p class="info">
        <span>时间：<?php echo $_smarty_tpl->tpl_vars['result']->value[0]["stime"];?>
</span>
        <span>作者：<?php echo $_smarty_tpl->tpl_vars['result']->value[0]["username"];?>
</span>
    </p>
    <div class="content">
        <?php echo $_smarty_tpl->tpl_vars['result']->value[0]["scon"];?>

    </div>
    <div class="statu">
        <form action="index.php?m=admin&f=art&a=statuconInfo" method="post" id="form">
            <div class="infocontent">
                <div class="statu">
                    <h3>审核情况：</h3>
                    <div class="radio">
                        <label>
                            <input type="radio" name="statu" value="0" <?php if ($_smarty_tpl->tpl_vars['result']->value[0]["statu"] == 0) {?>checked<?php }?>>
                            未审核
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="statu"  value="1" <?php if ($_smarty_tpl->tpl_vars['result']->value[0]["statu"] == 1) {?>checked<?php }?> >
                            审核中
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="statu" value="2" <?php if ($_smarty_tpl->tpl_vars['result']->value[0]["statu"] == 2) {?>checked<?php }?> >
                            审核未通过
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="statu"  value="3" <?php if ($_smarty_tpl->tpl_vars['result']->value[0]["statu"] == 3) {?>checked<?php }?> >
                            审核通过
                        </label>
                    </div>
                </div>

                <!--推荐位-->
                <div class="position">
                    <h3>推荐位：</h3>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['position']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <div class="radio">
                        <label>
                            <input type="radio" name="posid"  value="<?php echo $_smarty_tpl->tpl_vars['v']->value['posid'];?>
"       <?php if ($_smarty_tpl->tpl_vars['v']->value['posid'] == $_smarty_tpl->tpl_vars['result']->value[0]['posid']) {?>checked<?php }?> >
                            <?php echo $_smarty_tpl->tpl_vars['v']->value['posname'];?>

                        </label>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </div>

            <input type="hidden" name="sid" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['sid'];?>
">
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">提交</button>
                </div>
            </div>
        </form>

    </div>
</body>
</html><?php }
}
