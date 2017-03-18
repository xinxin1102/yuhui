<?php

    class art extends indexMain{

        function __construct()
        {
            parent::__construct();
            $this->db=new db("shows");
//            $this->category=$this->db->select("select * from category");
        }

        /*
         * 跳转到主页
         * */
        function init(){
            if(!$this->checkLogin()){
                exit;
            }
            $this->smarty->display("index/index.html");
        }

        /*
         * 跳转到添加文章页面
         * */
        function addcon(){
            if(!$this->checkLogin()){
                exit;
            }

            $db=new db("category");

            $tree=new infinite();
            $tree->tree(0,1,"category",$db->connect);
            $this->smarty->assign("tree",$tree->str);
            $this->smarty->display("index/addcon.html");
        }

        /*
         * 提交文章到数据库
         * */
        function addconInfo(){
            $stitle=P("stitle");
            $scon=P("edit");



            $cid=P("cid");
            $username=$_SESSION["indexUser"];


            $result=$this->db->insert("insert into shows (stitle,scon,cid,username,userrole) values ('$stitle','$scon',$cid,'$username',1)");

            if($result>0){
                $url="index.php?m=index&f=art&a=addcon";
                $message="文章保存成功";
                $this->jump($url,$message);
            }else{
                $url="index.php?m=index&f=art&a=addcon";
                $message="文章保存失败";
                $this->jump($url,$message);
            }
        }

        /*
         * 跳转到文章详情页
         * */
        function artshow(){
            $sid=P("sid");
            $result=$this->db->where("sid=$sid")->select(); //获取文章全部信息
            $category=$this->db->select("select * from category where cid=".$result[0]["cid"]);  //获取分类

            $uname=$result[0]['username'];  //获取文章作者
            $uid2=$this->db->select("select * from user where uname='$uname'");
            $uid2=$uid2[0]["uid"]; //获取作者id

            $this->reply($sid); //回复

            /*
             * 增加文章点击量
             * */
            $hitre=$this->db->update("update shows set hits=hits+1 where sid=$sid");
            if(!($hitre>0)){
                echo "点击量添加失败";
                exit;
            }
            /*
             * 获取当前登陆的用户id，并获取收藏和关注信息
             * */
            if(!isset($_SESSION["uid"])){
                $uid="nologin";
                $this->smarty->assign("love","nolove");
                $this->smarty->assign("guanzhu","noguanzhu");
            }else{
                $uid=$_SESSION["uid"];

                /*
                 * 获取收藏信息
                 * */
                $result1=$this->db->select("select * from love where sid=$sid and uid=$uid");
                if(count($result1)>0){
                    $this->smarty->assign("love","love");
                }else{
                    $this->smarty->assign("love","nolove");
                }


                /*
                 * 获取关注信息
                 * */
                $result2=$this->db->select("select * from guanzhu where uid1=$uid and uid2=$uid2");
                if(count($result2)>0){
                    $this->smarty->assign("guanzhu","guanzhu");
                }else{
                    $this->smarty->assign("guanzhu","noguanzhu");
                }

            }

            $this->smarty->assign("category",$category);

            $this->smarty->assign("uid",$uid);  //当前登录id
            $this->smarty->assign("uid2",$uid2); //作者id
            $this->smarty->assign("result",$result);
            $this->smarty->display("index/artshow.html");
        }


        /*
         * 查询留言
         * */
        function reply($sid){

            $db=new db("message,user");

            /*
             * 获取当前文章的所有回复信息
             * */
//            $result=$this->db->select("select * from message,user where message.sid=$sid and message.uid2=user.uid");
            $result=$db->where("message.sid=$sid and message.uid2=user.uid")->select();

            /*
             * 分页
             * */
            /*$pages = new pages(count($result), 6);

            $result=$db->where("message.sid=$sid and message.uid2=user.uid" )->limit($pages->limit)->select();

            $pages=$pages->out();
            $this->smarty->assign("pages",$pages);*/

            /*
             * 获取当前文章的直接留言
             * */
            $replys=array();

            foreach ($result as $v){
                if($v["pid"]==0){
                    $replys[]=$v;
                }
            }

            /*
             * 获取所有有父元素的子回复
             * */
            foreach ($result as $v){
                if($v["pid"]!==0){
                    foreach ($replys as $k=>$v1){
                        if(!isset($replys[$k]["son"])){
                            $replys[$k]["son"]=array();
                        }
                        if($v["pid"]==$v1["mid"]){
                            $replys[$k]["son"][]=$v;
                        }
                    }
                }
            }

            $this->smarty->assign("replys",$replys);

        }


    }