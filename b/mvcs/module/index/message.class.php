<?php
    class message extends indexMain{
        function __construct(){
            parent::__construct();
            $this->db=new db("message");
        }

        function addmessage(){
            $pid=P("pid")?P("pid"):0;
            $mcon=P("value");
            $sid=P("sid");
            $uid1=P("uid1"); //回复者
            $uid2=P("uid2"); //被回复者

            $result=$this->db->insert("insert into message (mcon,sid,uid1,uid2,pid) values ('$mcon',$sid,$uid1,$uid2,$pid)");
            if($result>0){

                $arr="";

                $mid=$this->db->insert_id;

                $result2=$this->db->select("select * from message,user where message.mid=$mid and user.uid=$uid1");

                $arr["mcon"]=$result2[0]["mcon"];
                $arr["mid"]=$result2[0]["mid"];
                $arr["pid"]=$result2[0]["pid"];
                $arr["nickname"]=$result2[0]["nickname"];

                echo json_encode($arr);
            }else{
                echo false;
            }
        }

        function addreplys(){
            $pid=P("pid")?P("pid"):0;
            $mcon=P("value");
            $sid=P("sid");
            $uid1=P("uid1"); //回复者
            $uid2=P("uid2"); //被回复者

            $result=$this->db->insert("insert into message (mcon,sid,uid1,uid2,pid) values ('$mcon',$sid,$uid1,$uid2,$pid)");
            if($result>0){

                $arr=array();

                $mid=$this->db->insert_id;
                $result2=$this->db->where("mid=$mid")->select();
                $arr["mcon"]=$result2[0]["mcon"];
                $arr["mid"]=$result2[0]["mid"];
                $arr["pid"]=$result2[0]["pid"];
                $arr["uname"]=$result2[0]["pid"];

                echo json_encode($arr);
            }else{
                echo false;
            }
        }

    }