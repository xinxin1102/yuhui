<?php
/* Smarty version 3.1.30, created on 2017-03-13 06:59:08
  from "D:\wamp\www\study\yue\moni-mvc\template\index\artshow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c6352c13b242_58062156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0eda0e8074585a652d40e6fdf54a24d8ecf4561' => 
    array (
      0 => 'D:\\wamp\\www\\study\\yue\\moni-mvc\\template\\index\\artshow.html',
      1 => 1489384226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_58c6352c13b242_58062156 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/public.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/artshow.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/artshow.js"><?php echo '</script'; ?>
>

<div class="titlebox">
    <h2><?php echo $_smarty_tpl->tpl_vars['result']->value[0]["stitle"];?>
</h2>
    <div class="info">
        <span>
            <?php if (isset($_smarty_tpl->tpl_vars['category']->value[0])) {?>
                所属栏目：<?php echo $_smarty_tpl->tpl_vars['category']->value[0]["cname"];?>

            <?php }?>
        </span>
        <span class="user">
            作者：<?php echo $_smarty_tpl->tpl_vars['result']->value[0]["username"];?>

        </span>
        <span class="time">
            发表时间：<?php echo $_smarty_tpl->tpl_vars['result']->value[0]["stime"];?>

        </span>
    </div>
</div>

<div class="content">
    <?php echo $_smarty_tpl->tpl_vars['result']->value[0]["scon"];?>

</div>

<div class="notice notice_true">
    <div class="navbox">
        操作成功
    </div>
</div>
<div class="notice notice_false">
    <div class="navbox">
        操作失败
    </div>
</div>
<div class="notice notice_other">
    <div class="navbox">
        操作失败
    </div>
</div>

<input type="hidden" name="sid" class="sid" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['sid'];?>
">

<input type="hidden" name="uid1" value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">

<input type="hidden" name="uid2" value="<?php echo $_smarty_tpl->tpl_vars['uid2']->value;?>
">

<div class="otherinfo">
    <div class="buttons">
        <?php if ($_smarty_tpl->tpl_vars['guanzhu']->value == "noguanzhu") {?>
        <input type="button" class="btn btn-default select love_author" id="love_author" value="关注作者">
        <?php } elseif ($_smarty_tpl->tpl_vars['guanzhu']->value == "guanzhu") {?>
        <input type="button" class="btn btn-default select" id="love_author" value="取消关注">
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['love']->value == "nolove") {?>
        <input type="button" class="btn btn-default select" id="love_article" value="收藏本文">
        <?php } elseif ($_smarty_tpl->tpl_vars['love']->value == "love") {?>
        <input type="button" class="btn btn-default select" id="love_article" value="取消收藏">
        <?php }?>

        <input type="button" class="btn btn-default" id="btn_message" value="留言">

        <div id="message_area">
            <form action="index.php?m=index&f=message&a=addmessage" id="form_message">
                <textarea class="form-control" rows="3" name="text_message" id="text_message"></textarea>
                <label for="btn_submessage"></label>
                <button type="button" class="btn btn-default" id="btn_submessage">
                    确认提交
                </button>
                <button type="button" class="btn btn-default" id="btn_unmessage">
                    取消留言
                </button>
            </form>
            <div class="tishi">
                您只能输入300个字
            </div>
        </div>

    </div>
<!--留言板-->
    <ul class="liuyanbox">

        <li style="display:none">
            <div class="touxiang">
                <div class="imgbox">
                    <img src="" alt="">
                </div>
                <p class="uname">

                </p>
            </div>
            <div class="liuyan_contentbox">
                <div class="liuyan_content">

                </div>
                <div class="gongneng">
                    <div class="replyer">
                        <!--第<span>{}</span>条回复-->
                    </div>
                    <input type="button" class="btn btn-default btn-sm" value="回复本层" reply_id="" >
                </div>
            </div>
        </li>

        <?php $_smarty_tpl->_assignInScope('i', 0);
?>
        <!--i用来数楼层-->
        <?php if ($_smarty_tpl->tpl_vars['replys']->value == "noreplys") {?>
            <li class="noreplys">
                没有回复
            </li>
        <?php } else { ?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['replys']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
        <li>
            <div class="touxiang">
                <div class="imgbox">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="">
                </div>
                <p class="uname">
                    <?php echo $_smarty_tpl->tpl_vars['v']->value["nickname"];?>

                </p>
            </div>
            <div class="liuyan_contentbox">
                <div class="liuyan_content">
                    <?php echo $_smarty_tpl->tpl_vars['v']->value["mcon"];?>

                </div>
                <div class="gongneng">
                    <div class="replyer">
                        #<?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value["mtime"];?>

                        <!--第<span>{}</span>条回复-->
                    </div>
                    <input type="button" class="btn btn-default btn-sm" value="回复本层" reply_id="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
" >
                </div>
            </div>
            <!--子集留言 start-->
            <?php $_smarty_tpl->_assignInScope('j', 0);
?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['replys']->value[$_smarty_tpl->tpl_vars['k']->value]["son"], 'v1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
?>
            <div class="reply_son">
                <div class="touxiang">
                    <div class="imgbox">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['v1']->value['imgurl'];?>
" alt="">
                    </div>
                    <p class="uname">
                        <?php echo $_smarty_tpl->tpl_vars['v1']->value["nickname"];?>

                    </p>
                </div>
                <div class="liuyan_contentbox">
                    <div class="liuyan_content">
                        <?php echo $_smarty_tpl->tpl_vars['v1']->value["mcon"];?>

                    </div>
                    <div class="gongneng">
                        <div class="replyer">
                            #<?php echo $_smarty_tpl->tpl_vars['j']->value++;?>
&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['v1']->value["mtime"];?>

                            <!--第<span>{}</span>条回复-->
                        </div>
                        <input type="button" class="btn btn-default btn-sm" value="回复本层" reply_id="<?php echo $_smarty_tpl->tpl_vars['v1']->value['mid'];?>
">
                    </div>
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <!--子集留言 end-->
        </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php }?>

    </ul>
    <!--回复中的回复模版-->
    <div class="reply_son" style="display:none" id="reply_son_moban">
        <div class="touxiang">
            <div class="imgbox">
                <img src="" alt="">
            </div>
            <p class="uname">

            </p>
        </div>
        <div class="liuyan_contentbox">
            <div class="liuyan_content">

            </div>
            <div class="gongneng">
                <div class="replyer">
                    <!--第<span>{}</span>条回复-->
                </div>
                <input type="button" class="btn btn-default btn-sm" value="回复本层" reply_id="">
            </div>
        </div>
    </div>

    <!--回复页码-->
    <!--<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
-->

</div>


</body>
</html><?php }
}
