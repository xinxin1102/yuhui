<?php
define("MAC","yes");
//$m=isset($_GET["m"])?$_GET["m"]:"index";
//$f=isset($_GET["f"])?$_GET["f"]:"index";
//$a=isset($_GET["a"])?$_GET["a"]:"index";
//$file="admin/".$m."/".$f;
//if(is_file($file)){
//    include "$file";
//}else{
//    echo "文件找不到";
//}
//echo "<pre>";
//var_dump($_SERVER);//服务器信息
//定义常量
define("ROOT_URL",__DIR__);//SCRIPT_FILENAME' ,当前运行的根目录 D:\wamp\wamp\www\ajax\mvc
//define("ROOT_URL",__FILE__);//当前运行的文件
define("LIBS_URL",ROOT_URL."/libs");//核心目录 D:\wamp\wamp\www\ajax\mvc/libs
define("TPL_INDEX_URL",ROOT_URL."/template/index");// 前台模板index路径 D:\wamp\wamp\www\ajax\mvc/template/index
define("TPL_ADMIN_URL",ROOT_URL."/template/admin");// 后台模板index路径 D:\wamp\wamp\www\ajax\mvc/template/admin

define("HTTP_URL","http://".$_SERVER["SERVER_NAME"].substr($_SERVER["SCRIPT_NAME"],0,strrpos($_SERVER["SCRIPT_NAME"],"/")));// 这个项目的http路径 SERVER_NAME' => string 'localhost'    SCRIPT_NAME' => string '/ajax/mvc/index.php' (length=19)                 http://localhost/ajax/mvc
define("FILE_URL","http://".$_SERVER["SERVER_NAME"].$_SERVER["SCRIPT_NAME"]);//这个项目文件的路径    http://localhost/ajax/mvc/index.php
define("CSS_PATH",HTTP_URL."/static/css");//http://localhost/ajax/mvc/static/css

define("JS_PATH",HTTP_URL."/static/js");//http://localhost/ajax/mvc/static/js

define("IMG_PATH",HTTP_URL."/static/imgs");//http://localhost/ajax/mvc/static/imgs

define("FONT_PATH",ROOT_URL."/static/font");//D:\wamp\wamp\www\ajax\mvc/static/font
define("EDIT_PATH",HTTP_URL."/static/edit");
include LIBS_URL."/db.class.php";
include LIBS_URL."/session.class.php";
include LIBS_URL."/route.class.php";
include LIBS_URL."/main.class.php";
require LIBS_URL."/indexMain.class.php";
require LIBS_URL."/pages.class.php";
require LIBS_URL."/Uploader.class.php";
include LIBS_URL."/code.class.php";
require (LIBS_URL.'/smarty/Smarty.class.php');//smarty的初始化
include LIBS_URL."/functions.php";
require LIBS_URL."/infinite.class.php";
$obj=new route();
$obj->init();



