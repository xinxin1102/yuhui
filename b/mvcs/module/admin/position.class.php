<?php
    class position extends main{
        function __construct()
        {
            parent::__construct();
            $this->db=new db("position");
        }

        function addpos(){
            if (!$this->checkLogin()) {
                exit;
            }
            $position=$this->db->select();
            $this->smarty->assign("position",$position);
            $this->smarty->display("admin/addpos.html");

        }
        function addposInfo(){
            $posname=P("posname");

            $result=$this->db->insert("posname='$posname'");

            if($result>0){
                $message="添加成功";
                $url="index.php?m=admin&f=position&a=addpos";
                $this->jump($url,$message);
            }else{
                $message="添加失败";
                $url="index.php?m=admin&f=position&a=addpos";
                $this->jump($url,$message);
            }
        }

        function showpos(){
            if (!$this->checkLogin()) {
                exit;
            }

            $position=$this->db->select();
            $this->smarty->assign("position",$position);
            $this->smarty->display("admin/showpos.html");
        }

        function delpos(){
            if (!$this->checkLogin()) {
                exit;
            }
            $posid=P("posid");

            if($posid==1){
                $message="此推荐位不能删除";
                $url="index.php?m=admin&f=position&a=showpos";
                $this->jump($url,$message);
                exit;
            }

            $result=$this->db->where("posid=$posid")->delete();
            if($result>0){
                $message="删除成功";
                $url="index.php?m=admin&f=position&a=showpos";
                $this->jump($url,$message);
            }else{
                $message="删除失败";
                $url="index.php?m=admin&f=position&a=showpos";
                $this->jump($url,$message);
            }
        }

        function editpos(){
            if (!$this->checkLogin()) {
                exit;
            }

            $posid=P("posid");
            if($posid==1){
                $message="此推荐位不能修改";
                $url="index.php?m=admin&f=position&a=showpos";
                $this->jump($url,$message);
                exit;
            }

            $result=$this->db->where("posid=$posid")->select();
            $result=$result[0];
            $this->smarty->assign("position",$result);
            $this->smarty->display("admin/editpos.html");
        }

        function editposInfo(){
            if (!$this->checkLogin()) {
                exit;
            }
            $posid=P("posid");
            $posname=P("posname");

            $result=$this->db->where("posid=$posid")->update("posname='$posname'");

            if($result>0){
                $message="修改成功";
                $url="index.php?m=admin&f=position&a=showpos";
                $this->jump($url,$message);
            }else{
                $message="修改失败";
                $url="index.php?m=admin&f=position&a=showpos";
                $this->jump($url,$message);
            }
        }

    }