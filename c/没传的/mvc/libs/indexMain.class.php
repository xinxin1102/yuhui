<?php
class indexMain{
    function __construct(){
        $this->session=new session();
        $this->smarty=new Smarty();
        $this->smarty->setCompileDir("compile");
        $this->smarty->setTemplateDir("template");
        $this->smarty->assign("indexLogin",$this->session->get("indexLogin"));
        $this->smarty->assign("uname",$this->session->get("uname"));
    }
    function checkLogin(){
        $session=$this->session;
        if(!($session->get("indexLogin")&&MAC=="yes")){
            $this->jump("index.php?m=index&f=login&a=init","请登录");
            exit;
        }else{
            return true;
        }
    }
    function jump($url,$message){
        $this->smarty->assign("url",$url);//这个向smarty模板进行传值操作,变量名为url 值为$url
        $this->smarty->assign("message",$message);
        $this->smarty->display("admin/message.html");
    }
}
?>