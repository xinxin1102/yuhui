<?php
class index extends indexMain{
    function __construct(){
        parent::__construct();
        $this->db=new db("shows");
    }
    function init(){
//        $smarty=new Smarty();
//        $smarty->setCompileDir("compile");
//        $smarty->setTemplateDir("template");
        //连接数据库
//        $db=new db("admin");
//        $result=$db->select();
//        $this->smarty->assign('result',$result);//分配
//        $this->smarty->display('index/index.html');//显示

        $result=$this->db->select("select * from shows,user where shows.statu=3 and shows.uid=user.uid");
        $this->smarty->assign("result",$result);
        if($this->session->get("indexLogin")=="yes"){
            $this->session->set("welcome","yes");
        }
        $this->smarty->display("index/index.html");
    }
}
?>