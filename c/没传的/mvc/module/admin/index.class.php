<?php
class index extends main {

    //1.进入后台首页
    //
    //
    function init(){

        //2.  检测是否有权限
        if($this->checkLogin()) {
            $this->smarty->assign("aname",$this->session->get("aname"));
            $this->smarty->display("admin/index.html");
            $this->session->set("coming","yes");
        }

    }

    function login(){
        //3 登陆
        if($this->session->get("coming")){
            header("location:index.php?m=admin");
            exit;
        }
        $this->smarty->display("admin/login.html");
    }

    function reg(){
        $this->smarty->display("admin/reg.html");
    }

    //验证码
    function code(){
        $session=$this->session;
        $code=new code();
        $code->size=array("min"=>25,"max"=>30);
        $code->font_file=FONT_PATH."/Helvetica.ttf";
        $code->output();
        $session->set("code",$code->resultLetter);
    }
    //检测用户名与密码 验证码 是否正确
    function check(){
        $code=@strtolower($_POST["code"]);

        $session=$this->session;

        if($code!==$session->get("code")){
            $this->jump("index.php?m=admin&f=index&a=login","验证码错误");
            exit;
        }

        $aname=P("aname");
        $apass=md5(P("apass"));
        $db=new db("admin");
        $result=$db->select();

        foreach ($result as $v){
            if($v["aname"]==$aname){
                if($v["apass"]==$apass){


                    $session->set("login","yes");////////////
                    $session->set("aname",$aname);////////////
                    $session->set("aid",$v["aid"]);////////////
                    $this->jump("index.php?m=admin","登陆成功");
                    exit;
                }
            }
        }

        $this->jump("index.php?m=admin&a=login","登陆失败");

    }
    //退出
    function logout(){
        $this->session->clear();
        $this->jump("index.php?m=admin&f=index&a=login","退出成功");
    }
}
?>