<?php

class user extends main
{
    function __construct()
    {
        parent::__construct();
        $this->db = new db("user");
    }

    /*
     * 查询所有用户
     * */
    function select()
    {
        if($this->checkUser()){
            $db=new db("admin");
            $aresult=$db->select();
            $this->smarty->assign("aresult",$aresult);

            $result = $this->db->select();
            $this->smarty->assign("result", $result);
            $this->smarty->display("admin/usershow.html");
        }else{
            $url="index.php?m=admin";
            $message="Sorry, you do not have permission to do this!";
            $this->jump($url,$message);
        }
    }

    /*
     * 检测用户权限
     * */
    function checkUser()
    {
        if (isset($_SESSION['is_login'])&&!empty(MVC)) {

            if (isset($_SESSION['aname'])) {
                $db=new db('admin');
                $result=$db->select("aname");
                foreach ($result as $v){
                    if($v['aname']==$_SESSION['aname']){
                        return true;
                    }
                }
            }
        }
        return false;
    }

    /*
     * 添加用户
     * */
    function addUser()
    {
        if ($this->checkUser()) {
            $this->smarty->display("admin/addUser.html");
        }else{
            $url="index.php?m=admin";
            $message="Sorry, you do not have permission to do this!";
            $this->jump($url,$message);
        }
    }

    /*
     * 添加用户信息
     * */
    function addUserInfo(){
        $role=P('role');

        $result="";
        if($role==0){
            $db=new db('admin');
            $apass=md5(P('pass'));
            $aname=P("name");
            $anickname=P("nickname");
            $result=$db->insert("aname='$aname';apass='$apass';anickname='$anickname'");

        }else if($role==1){
            $db=new db('user');
            $upass=md5(P('pass'));
            $uname=P("name");
            $uname=P("name");
            $nickname=P("nickname");
            $result=$db->insert("uname='$uname';upass='$upass';nickname='$nickname'");

        }

        if($result>0){
            $url="index.php?m=admin&f=user&a=select";
            $message="用户添加成功";
            $this->jump($url,$message);
        }else{
            $url="index.php?m=admin&f=user&a=select";
            $message="用户添加失败";
            $this->jump($url,$message);
        }
    }

    /*
     * 删除用户
     * */
    function delUser(){
        $result="";
        if(P('aid')){
            $aid=P("aid");
            if($aid==1){
                $url="index.php?m=admin&f=user&a=select";
                $message="超级管理员无法被删除";
                $this->jump($url,$message);
                return false;
            }
            $db=new db("admin");
            $result=$db->where("aid=$aid")->delete();
        }else if(P("uid")){
            $db=new db("user");
            $uid=$_GET["uid"];
            $result=$db->where("uid=$uid")->delete();
        }

        if($result){
            $url="index.php?m=admin&f=user&a=select";
            $message="删除成功";
            $this->jump($url,$message);
        }else{
            $url="index.php?m=admin&f=user&a=select";
            $message="删除失败";
            $this->jump($url,$message);
        }

    }

}