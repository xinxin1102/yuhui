<?php
/* Smarty version 3.1.30, created on 2017-03-17 17:58:46
  from "D:\wamp\wamp\www\ajax\mvc\template\index\personal.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cc15c6bf1eb3_50322407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b793679965ef4dffda3340f1799964f67376ac54' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\ajax\\mvc\\template\\index\\personal.html',
      1 => 1489769925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_58cc15c6bf1eb3_50322407 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mui.min.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/personal.css" />
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/upload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/personal.js"><?php echo '</script'; ?>
>
<form action="index.php?m=index&f=user&a=bianji" id="form" method="post">
	<div class="container main">
	    <div class="row">
	        <div class="col-sm-8 main-left">
		       	<span>姓名</span><input type="text" name="bname" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['bname'];?>
"/>
			       	

				<span>联系方式</span><input type="text" name="contact" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['contact'];?>
"/>
				<span>邮箱</span><input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['email'];?>
"/>

				<input type="submit" value="保存" id="btn"/>
	        </div>
	        <div class="col-sm-4 main-right">
	            <div class="list-group"">
					<a href="javascript:;" class="file">上传头像
						<input type="file" name="file" class="files">
					</a>
					<div class="imgs">
						<img src="<?php echo $_smarty_tpl->tpl_vars['result']->value['photo'];?>
" alt="" class="img"/>
						<div class="jindu">
							<div class="progress"></div>
						</div>	
					</div>
	           </div>
	        </div>
	    </div>
	</div>
	<input type="hidden" name="imgurl" id="imgurl"/>
</form>
	</body>
</html>
<?php }
}
