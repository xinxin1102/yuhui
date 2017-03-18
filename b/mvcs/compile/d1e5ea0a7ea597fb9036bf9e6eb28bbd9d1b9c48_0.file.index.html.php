<?php
/* Smarty version 3.1.30, created on 2017-03-17 08:49:38
  from "E:\wamp\wamp\www\mvcs\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cb9512cf51e0_69692952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1e5ea0a7ea597fb9036bf9e6eb28bbd9d1b9c48' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\mvcs\\template\\index\\index.html',
      1 => 1489736972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_58cb9512cf51e0_69692952 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'E:\\wamp\\wamp\\www\\mvcs\\libs\\smarty-3.1.30\\libs\\plugins\\modifier.truncate.php';
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/public.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/index.css">

<div class="box">
	<div id="slider" class="mui-slider" >  
	    <div class="mui-slider-group mui-slider-loop">  
	        <!-- 额外增加的一个节点(循环轮播：第一个节点是最后一张轮播) -->  
	        <div class="mui-slider-item mui-slider-item-duplicate">  
	            <a href="#">  
	                <img src="<?php echo IMG_PATH;?>
/e.jpg">  
	            </a>  
	        </div>  
	        <!-- 第一张 -->  
	        <div class="mui-slider-item">  
	            <a href="#">  
	                <img src="<?php echo IMG_PATH;?>
/d.jpg">  
	            </a>  
	        </div>  
	        <!-- 第二张 -->  
	        <div class="mui-slider-item">  
	            <a href="#">  
	                <img src="<?php echo IMG_PATH;?>
/c.jpg">  
	            </a>  
	        </div>  
	        <!-- 第三张 -->  
	        <div class="mui-slider-item">  
	            <a href="#">  
	                <img src="<?php echo IMG_PATH;?>
/g.jpg">  
	            </a>  
	        </div>  
	        <!-- 第四张 -->  
	        <div class="mui-slider-item">  
	            <a href="#">  
	                <img src="<?php echo IMG_PATH;?>
/e.jpg">  
	            </a>  
	        </div>  
	        <!-- 额外增加的一个节点(循环轮播：最后一个节点是第一张轮播) -->  
	        <div class="mui-slider-item mui-slider-item-duplicate">  
	            <a href="#">  
	                <img src="<?php echo IMG_PATH;?>
/d.jpg">  
	            </a>  
	        </div>  
	    </div>    
	</div> 
</div>


<div class="content">
	
    <div class="conlist">
    	<ul class="author" >
    		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    		<li>
    			<div class="txs"><img class="imgq" src="<?php echo IMG_PATH;?>
/touxiang.jpg" alt="" /></div>
    			<div class="zuozhe"><a href="index.php?m=index&f=home&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["username"];?>
</a></div>
    		</li>
    		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>	
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <img class="imgs" src="<?php echo IMG_PATH;?>
/touxiang.jpg" alt="" />
            <li class="two">
                <h3>
                    <!--<span class="category">
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

                    </span>-->
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
                     <!--<p> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value["scon"],10,'',true);?>
 </p>-->
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
            <h4>推荐作者</h4>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hitslist']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <li>
                    <h3>
                        <a href="index.php?m=index&f=art&a=artshow&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value["username"];?>
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
        <div class="listbox hitlist">
            <h2>点击排行榜</h2>
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
            <h1>收藏排行榜</h1>
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

<div class="footers">
	<div class="footer">
		<div class="f_left"></div>
		<div class="f_right"></div>
	</div>
</div>

</body>
<?php echo '<script'; ?>
>
var slider = mui("#slider");  
slider.slider({  
    interval: 3000  
});  
<?php echo '</script'; ?>
>
</html><?php }
}
