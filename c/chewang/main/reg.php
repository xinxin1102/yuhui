<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>


</head>
<script src="../js/jquery-min.js"></script>
<link rel="stylesheet" href="../css/login2.css">
<script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="../images/login.js"></script>
<script>
    $(window).ready(function(){

        var btn=$("input[type=submit]");

        $("input[name=username]").on("keyup",function(){
            var reg=/^\w{5,10}$/g;
            var val=$(this).val();
            var mes=$("span:eq(0)");
            var that=$(this);
            if(reg.test(val)){
                $.ajax({
                    url:"selectUser.php",
                    data:{username:val},
                    success:function(e){
                        if(e=="ok"){
                            mes.html("用户名正确").css({color:"green"});
                            that.attr("use","yes");
                            if($("input[name=password]").attr("use","yes")){
                                btn.removeAttr("disabled");
                            }
                        }else{
                            console.log(e);
                            mes.html("用户名重复").css({color:"red"});
                            btn.attr("disabled","disabled");
                        }
                    }
                });
            }else{
                btn.attr("disabled","disabled");
                mes.html("输入有误").css({color:"red"});
            }
        });

        $("input[name=password]").on("keyup",function(){
            var reg=/^\w{5,10}$/g;
            var val=$(this).val();
            var mes=$("span:eq(1)");
            var that=$(this);
            if(reg.test(val)){
                mes.html("密码输入正确").css({color:"green"});
                $(this).attr("use","yes");
                if($("input[name=username]").attr("use","yes")){
                    btn.removeAttr("disabled");
                }
            }else{
                btn.attr("disabled","disabled");
                mes.html("输入有误").css({color:"red"});
            }
        });

    })
</script>
<body>


<div class="login" style="margin-top:50px;">

    <div class="header">
        <div class="switch" id="switch"><a class="switch_btn_focus" id="switch_qlogin" href="javascript:void(0);" tabindex="7">快速注册</a>
        </div>
    </div>



    <div class="web_qr_login" id="web_qr_login" style="display: block; height: 235px;">

        <!--登录-->
        <div class="web_login" id="web_login">


    <div class="login-box">


        <div class="login_form">
            <form action="addReg.php" method="post"><input type="hidden" name="did" value="0"/>
                <input type="hidden" name="to" value="log"/>
                <div class="uinArea" id="uinArea">
                    <label class="input-tips" for="u">帐号：</label>
                    <div class="inputOuter" id="uArea">

                        <input type="text" id="u" name="username" class="inputstyle"/><br/><span class="message"></span><br/>
                    </div>
                </div>
                <div class="pwdArea" id="pwdArea">
                    <label class="input-tips" for="p">密码：</label>
                    <div class="inputOuter" id="pArea">

                        <input type="password" id="p" name="password" class="inputstyle"/><br/><span class="message"></span><br/>
                    </div>
                </div>

                <div style="padding-left:50px;margin-top:20px;"><input type="submit" value="注 册" style="width:150px;" class="button_blue"/></div>
                <a href="login.php" style="font-size:16px">点击登录</a>
            </form>
        </div>

    </div>

</div>
<!--登录end-->
</div>
</div>
</body>
</html>