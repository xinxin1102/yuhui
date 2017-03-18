<?php
/* Smarty version 3.1.30, created on 2017-03-17 02:38:49
  from "E:\wamp\wamp\www\mvcs\template\index\notice.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cb3e29e746e2_62341030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24f52884f97af5c45f34d442e927ac86a5a5a970' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\mvcs\\template\\index\\notice.html',
      1 => 1489714726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cb3e29e746e2_62341030 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
    .notice-login{
        height:100%;
        width:100%;
        position:fixed;
        left:0;
        top:0;
        background: rgba(0,0,0,0.8);
        display:none;
    }
    .notice-login-text{
        padding:30px 0;
        width:200px;
        background:#000;
        opacity: 0.9;
        border-radius: 10px;
        text-align: center;
        line-height: 20px;
        position: fixed;
        left:0;top:40%;right:0;bottom: 40%;
        z-index:1000;
        margin:auto;
        color:#fff;
        box-shadow: 0 0px 10px #000;
    }
    .notice-login-text a{
        color:#ccc;
    }
    #aa{
    	border: none;
    	background: green;
    }
</style>

<div class="notice-login">
    <div class="notice-login-text">
        请先 <a href="index.php?m=index&f=login&a=startLogin">登录</a>
        再进行操作<br>
        <a href="javascript:;" class="btn btn-danger quxiao" id="aa" style="margin-top:10px;">取消登录</a>
    </div>
</div><?php }
}
