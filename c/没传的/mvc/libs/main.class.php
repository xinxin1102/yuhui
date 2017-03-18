<?php
class main{
    function  __construct(){
        $this->session=new session();
        $this->smarty = new Smarty();//初始化 samrty
        $this->smarty->setTemplateDir('template');
        $this->smarty->setCompileDir('compile');//编译文件
    }
    function checkLogin(){
        $session=$this->session;
        if(!($session->get("login")&&MAC=="yes")){
            $this->jump("index.php?m=admin&f=index&a=login","请登录");
            exit;
        }else{
            return true;
        }
    }
    function jump($url,$message){
        $this->smarty->assign("url",$url);
        $this->smarty->assign("message",$message);
        $this->smarty->display("admin/message.html");
    }
}
?>