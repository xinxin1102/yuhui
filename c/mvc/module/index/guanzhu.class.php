<?php
class guanzhu extends indexMain{
    function __construct(){
        parent::__construct();
        $this->db=new db("guanzhu");
    }
    //show.js   中
    function addguanzu(){
        $this->session->set("near",$_GET["near"]);
        if($this->session->get("indexLogin")){
            $uid1=$this->session->get("uid");
            $uid2=$_GET["uid2"];

            if($this->db->insert("uid1=$uid1;uid2=$uid2")) {
                echo "yes";
            }
        }else{
            echo "no";
        }
    }
    function quxiaoguanzu(){
        $uid1=$this->session->get("uid");
        $uid2=$_GET["uid2"];

        if($this->db->where("uid1={$uid1} and uid2={$uid2}")->delete()){
            echo "ok";
        }else{
            echo "no";
        }
    }
}
?>