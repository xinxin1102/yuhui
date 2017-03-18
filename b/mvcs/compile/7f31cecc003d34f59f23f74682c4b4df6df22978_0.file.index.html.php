<?php
/* Smarty version 3.1.30, created on 2017-03-12 12:05:15
  from "D:\wamp\www\study\yue\moni-mvc\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c52b6b5e2fd1_81316581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f31cecc003d34f59f23f74682c4b4df6df22978' => 
    array (
      0 => 'D:\\wamp\\www\\study\\yue\\moni-mvc\\template\\index\\index.html',
      1 => 1489244648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_58c52b6b5e2fd1_81316581 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/public.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/index.css">

<div class="content">
    <div class="conlist">
        <h2>最新文章：</h2>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <li>
                <h3>
                    <!--<a href="javascript:;">[]</a>-->
                    <span class="category">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['c']->value["cid"] == $_smarty_tpl->tpl_vars['v']->value["cid"]) {?>
                                [<?php echo $_smarty_tpl->tpl_vars['c']->value["cname"];?>
]
                            <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </span>
                    <a href="index.php?m=index&f=art&a=artshow&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a>
                </h3>
                <div class="info">
                    <span class="user">
                        作者：<?php echo $_smarty_tpl->tpl_vars['v']->value["username"];?>

                    </span>
                    <span class="time">
                        时间：<?php echo $_smarty_tpl->tpl_vars['v']->value["stime"];?>

                    </span>
                </div>
            </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
    </div>

    <div class="rightbox">
        <div class="listbox hitlist">
            <h2>点击榜：</h2>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hitslist']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <li>
                    <h3>
                        <a href="index.php?m=index&f=art&a=artshow&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a>
                    </h3>
                </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
        </div>
        <div class="listbox lovelist">
            <h2>收藏榜：</h2>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lovelist']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <li>
                    <h3>
                        <a href="index.php?m=index&f=art&a=artshow&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a>
                    </h3>
                </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
        </div>
    </div>
</div>


</body>
</html><?php }
}
