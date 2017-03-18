<?php



    class index extends main{

        function init(){
            if(!$this->checkLogin()){
                exit;
            }
            $this->smarty->assign("username",$_SESSION["aname"]);
            $this->smarty->display("admin/index.html");
        }

        function login(){
            if(!isset($_SESSION["is_login"])){
                $this->smarty->display("admin/login.html");
            }else{
                $url="index.php?m=admin";
                $message="已经登录";
                $this->jump($url,$message);
                exit;
            }
        }

        function reg(){
            if(($this->session->get("is_login")&&!empty(MVC))){
                $url="index.php?m=admin";
                $message="已经登录";
                $this->jump($url,$message);
                exit;
            }
            $this->smarty->display("admin/reg.html");


        }

        function code(){
            $image=new code();
            $image->letterUrl="static/font/FZBSFW.TTF";
            $image->output();

            $_SESSION["code"]=$image->resultLetter;
        }


        /*
         * 检测用户名是否存在
         * */
        public function userCheck(){
            $db=new db("admin");
            $username=$_GET["username"];
            $result=$db->select("aname");

            foreach($result as $v){
                if($username==$v['aname']){
                    echo "error";
                    exit;
                }
            }
            echo "ok";
        }

        public function addReg(){

            $aname=P("username");
            $apass=md5(P("password"));

            $db=new db("admin");
            $result=$db->filed("aname='$aname';apass='$apass'")->insert();

            if($result>0){
                $message="注册成功";
                $url="index.php?m=admin&a=login";
                $this->jump($url,$message);
            }else{
                $message="注册失败";
                $url="index.php?m=admin&a=reg";
                $this->jump($url,$message);
            }
        }

        /*
         * 检测验证码
         * */
        function checkCode(){
            $code=$_GET["code"];
            $code=strtolower($code);
            if($_SESSION["code"]==$code){
                echo "ok";
            }else{
                echo "验证码输入不正确";
            }
        }

        /*
             * 登陆
             * */
        function onLogin(){
            $db=new db('admin');

            $username=P("username");
            $password=md5(P("password"));

            $result=$db->select();

            foreach ($result as $k=>$v) {
                if($v['aname']==$username){
                    if($v['apass']==$password){
                        $this->session->set("is_login",'yes');
                        $this->session->set("aname",$username);

                        $message="登录成功";
                        $url="index.php?m=admin";

                        $this->jump($url,$message);
                        return true;
                        exit;
                    }
                }
            }

            $message="登录失败";
            $url="index.php?m=admin&a=login";
            $this->jump($url,$message);

            return false;

        }

        /*
         * 退出登录
         * */
        function unLogin(){
            $this->session->clear();
            $url="index.php?m=admin&a=login";
            $message="退出登陆成功";
            $this->jump($url,$message);
        }

       /***********************************************/





    }

