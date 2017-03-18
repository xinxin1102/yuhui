<?php
class my extends indexMain{
    function __construct(){
        parent::__construct();
    }
    function  init(){
        if($this->session->get("ulogin")=="yes"){
            $this->session->set("welcome","yes");
        }
        $this->db=new db("shows");
        $result=$this->db->select("select * from shows,user where shows.uid=user.uid and status=3 order by shows.stime desc");
        $this->smarty->assign("result",$result);
        if($this->session->get("uid")){
            $uid=$this->session->get("uid");
            $db1=new db("user");
            $result3=$db1->where("uid=".$uid)->select();
            $this->smarty->assign("result3",$result3[0]);
        }
        $this->smarty->assign("uname",$this->session->get("uname"));
        $this->smarty->display("index/index.html");
    }
    function self(){
        $uid=$this->session->get("uid");
        $db1=new db("user");
        $result3=$db1->where("uid=".$uid)->select();
        $this->smarty->assign("result3",$result3[0]);
        $db=new db("shows");
        $result=$db->where("uid=".$uid)->select();
        $this->smarty->assign("result",$result);
        $this->smarty->assign("uid",$this->session->get("uid"));
        $this->smarty->assign("uname",$this->session->get("uname"));
        $this->smarty->assign("self","yes");
        $this->smarty->display("index/home.html");
    }

    function you(){
        $uid=$this->session->get("uid");
        $db1=new db("user");
        $result3=$db1->where("uid=".$uid)->select();
        $this->smarty->assign("result3",$result3[0]);
        $uid2=G("id");
        $db=new db("user");
        $result=$db->where("uid=".$uid2)->select();
        $this->smarty->assign("uname",$this->session->get("uname"));
        if($result[0]["uname"]){
            $this->smarty->assign("unames",$result[0]["uname"]);
        }else{
            $this->smarty->assign("unames",$result[0]["uname"]);
        }
        $this->smarty->assign("photo",$result[0]["photo"]);
        $this->smarty->assign("self","no");
        $this->smarty->display("index/home.html");
    }
}
?>