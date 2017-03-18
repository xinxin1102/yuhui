<?php
class guanzhu extends indexMain{
    function __construct()
    {
        parent::__construct();
        $this->db=new db("guanzhu");
    }

    function addguanzhu(){
        $uid1=P("uid1");
        $uid2=P("uid2");
        $result=$this->db->insert("uid1=$uid1;uid2=$uid2");

        if($result>0){
            echo "true";
            $this->smarty->assign("guanzhu","guanzhu");
        }else{
            echo "false";
        }
    }

    function delguanzhu(){
        $uid1=P("uid1");
        $uid2=P("uid2");
        $result=$this->db->where("uid1=$uid1 and uid2=$uid2")->delete();

        if($result>0){
            echo "true";
            $this->smarty->assign("guanzhu","noguanzhu");
        }else{
            echo "false";
        }
    }

}