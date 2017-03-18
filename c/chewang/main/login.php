<?php

    session_start();
    if(isset($_SESSION["is_login"])){
        $message="已登录";
        $url="main.php";
        include "message.html";
        exit;
    }

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="../css/login2.css">
    <script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="../images/login.js"></script>

</head>
<body>
<div class="login" style="margin-top:50px;">

    <div class="header">
        <div class="switch" id="switch"><a class="switch_btn_focus" id="switch_qlogin" href="javascript:void(0);" tabindex="7">快速登录</a>
        </div>
    </div>



<div class="web_qr_login" id="web_qr_login" style="display: block; height: 235px;">

    <!--登录-->
    <div class="web_login" id="web_login">


        <div class="login-box">


            <div class="login_form">
                <form action="checkLogin.php" method="post"><input type="hidden" name="did" value="0"/>
                    <input type="hidden" name="to" value="log"/>
                    <div class="uinArea" id="uinArea">
                        <label class="input-tips" for="u">帐号：</label>
                        <div class="inputOuter" id="uArea">

                            <input type="text" id="u" name="username" class="inputstyle"/>
                        </div>
                    </div>
                    <div class="pwdArea" id="pwdArea">
                        <label class="input-tips" for="p">密码：</label>
                        <div class="inputOuter" id="pArea">

                            <input type="password" id="p" name="password" class="inputstyle"/>
                        </div>
                    </div>

                    <div style="padding-left:50px;margin-top:20px;"><input type="submit" value="登 录" style="width:150px;" class="button_blue"/></div>
                   <a href="reg.php" style="font-size:16px">点击注册</a>
                </form>
            </div>

        </div>

    </div>
    <!--登录end-->
</div>
</div>
</body>
</html>