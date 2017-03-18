<?php
    class love extends indexMain{
        function __construct()
        {
            parent::__construct();
            $this->db=new db("love");
        }

        function addlove(){
            $sid=P("sid");
            $uid=P("uid");
            $result=$this->db->insert("sid=$sid;uid=$uid");

            if($result>0){
                echo "true";
                $this->smarty->assign("love","love");
            }else{
                echo "false";
            }

        }
        function dellove(){
            $sid=P("sid");
            $uid=P("uid");
            $result=$this->db->where("sid=$sid and uid=$uid")->delete();
            if($result>0){
                echo "true";
                $this->smarty->assign("love","nolove");
            }else{
                echo "false";
            }
        }

    }