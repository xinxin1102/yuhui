<?php
// 前台的登录
class login extends indexMain {
    function __construct(){
        parent::__construct();
        $this->db=new db("user");
    }
    // 登陆处理
    function init(){
//        if($this->session->get("welcome")=="yes"){
//            header("location:index.php");
//        }else {
            $this->smarty->display("index/login.html");
//        }
    }
    //检查登陆
    function check(){
        $code=$_POST["code"];
        if($code!==$this->session->get("code")){
            $this->jump("index.php","验证码错误");
            exit;
        }
        $uname=$_POST["uname"];
        $upass=md5($_POST["upass"]);
        $db=new db("user");
        $result=$db->select();
        foreach ($result as $v){
            if($v["uname"]==$uname){
                if($v["upass"]==$upass){
                    $this->session->set("indexLogin","yes");///////////////
                    $this->session->set("uname",$uname);//////////////////
                    $this->session->set("uid",$v["uid"]);////////////////////
                    $this->jump("index.php","登陆成功");
                    exit;
                }
            }
        }
        $this->jump("index.php","登陆失败");
    }
    //注册页面
    function reg(){
//        if($this->session->get("welcome")=="yes"){
//            header("location:index.php");
//
//        }else {
            $this->smarty->display("index/reg.html");
//        }
    }

    //异步验证用户名
    function ajax(){
        $uname=$_POST["uname"];
        $result=$this->db->select("select uname from user");
        foreach ($result as $v){
            if($v["uname"]==$uname){
                echo "false";
                exit;
            }
        }

        echo "true";
    }
//异步验证 验证码
    function ajaxCode(){
        $code=$_POST["code"];
        if($code==$this->session->get("code")){
            echo "true";
        }else{
            echo "false";
        }
    }
    //添加用户
    function addReg(){
        $uname=P("uname");
        $upass=md5(P("upass"));
        if($this->db->insert("uname='$uname';upass='$upass'")>0){
            $this->jump("index.php","注册成功");
        }else{
            $this->jump("index.php?m=index&f=login&a=reg","注册失败");
        }
    }
    //退出登陆
    function logout(){
        $this->session->clear();
        $this->jump("index.php","退出成功");
    }
    //图片上传
    function upload(){
        date_default_timezone_set("Asia/Shanghai");
        $time=time();
        $showtime=date("Y-m-d");
        if(is_uploaded_file($_FILES["file"]["tmp_name"])){
            $name=$_FILES["file"]["name"];
            if(!file_exists("upload/".$showtime)){
                $wenjian=mkdir("upload/".$showtime,0777,true);
            }
            $url="upload/".$showtime."/".$time.$name;
            move_uploaded_file($_FILES["file"]["tmp_name"],$url);
            echo HTTP_URL."/upload/".$showtime."/".$time.$name;
        }
    }
}

?>