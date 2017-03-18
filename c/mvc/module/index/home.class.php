<?php
    class home extends indexMain{
        function init(){
            if(!$this->checkLogin()){
                exit;
            }

            $this->db=new db("user");

            $uid=$_SESSION["uid"];
            $uname=$_SESSION["indexUser"];


            $userInfo=$this->db->where("uid=$uid")->select();
            $userInfo=$userInfo[0];
            $username=$userInfo['uname'];

            // 头像
            if(empty($userInfo['imgurl'])){
                $touxiang="{IMG_PATH}/touxiang.jpg";
            }else{
                $touxiang=$userInfo['imgurl'];
            }

            // 关注
            $guanzhu=$this->db->select("select * from guanzhu where uid1=$uid");
            $guanzhu_nub=count($guanzhu);
            // 被关注
            $be_guanzhu=$this->db->select("select * from guanzhu where uid2=$uid");
            $be_guanzhu_nub=count($be_guanzhu);
            // 收藏
            $love=$this->db->select("select * from love where uid=$uid");
            $love_nub=count($love);

            // 被收藏
            $be_love=$this->db->select("select * from love,shows where love.sid=shows.sid and shows.username='$uname'");
            $be_love_nub=count($be_love);

            // 历史文章

            $stitles=$this->db->select("select * from shows,category where shows.username='$username' and shows.cid=category.cid");

            $this->smarty->assign("touxiang",$touxiang);
            $this->smarty->assign("guanzhu",$guanzhu_nub);
            $this->smarty->assign("be_guanzhu",$be_guanzhu_nub);
            $this->smarty->assign("love",$love_nub);
            $this->smarty->assign("be_love",$be_love_nub);
            $this->smarty->assign("uid",$uid);
            $this->smarty->assign("stitles",$stitles);
            $this->smarty->display("index/home.html");
        }
    }
