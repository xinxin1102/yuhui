/**
 * Created by lenovo on 2017/3/3.
 */
$(window).ready(function(){
    /*
    var btn=$("input[type=submit]");

    $("input[name=username]").on("keyup",function(){
        var reg=/^\w{5,10}$/g;
        var val=$(this).val();
        var mes=$("span:eq(0)");
        var that=$(this);
        if(reg.test(val)){
            $.ajax({
                url:"index.php?m=index&f=login&a=userCheck",
                data:{username:val},
                success:function(e){
                    if(e=="ok"){
                        mes.html("用户名正确").css({color:"green"});
                        that.attr("use","yes");
                        if($("input[name=password]").attr("use")=="yes"&&$("input[name=code]").attr("use")=="yes"){
                            btn.removeAttr("disabled");
                        }
                    }else{
                        console.log(typeof e,e,"username");
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
            if($("input[name=username]").attr("use")=="yes"&&$("input[name=code]").attr("use")=="yes"){
                btn.removeAttr("disabled");
            }
        }else{
            btn.attr("disabled","disabled");
            mes.html("输入有误").css({color:"red"});
        }
    });

    $("input[name=code]").blur(function(){
        var code=$(this).val();
        that=$(this);
        $.ajax({
            url:"index.php?m=index&f=login&a=checkCode",
            data:{code:code},
            success:function(e){
                if(e=="ok"){
                    that.attr("use","yes");
                    $(".codes").css({background:"green"});
                    if($("input[name=username]").attr("use")=="yes"&&$("input[name=password]").attr("use")=="yes"){
                        btn.removeAttr("disabled");
                    }
                }else{
                    console.log(typeof e,e,"code");
                    $(".codes").css({background:'red'});
                    btn.attr("disabled","disabled");
                }
            }
        })

    })

    */


    $("#form").validate({
        rules:{
            username:{
                required:true,
                minlength:5,
                remote:{
                    url:"index.php?m=index&f=login&a=userCheck",
                    data:{
                        username:function(){
                            return $("#username").val()
                        }
                    }
                }
            },
            password:{
                required:true,
                minlength:5
            },
            password2:{
                required:true,
                equalTo:"#Password1"
            },
            code:{
                required:true,
                remote:{
                    url:"index.php?m=index&f=login&a=checkCode",
                    data:{
                        code:function(){
                            return $("#code").val();
                        }
                    }
                }
            }
        },
        messages:{
            username:{
                required:"请输入用户名",
                minlength:"用户名至少输入5位",
                remote:"用户名重复"
            },
            password:{
                required:"请输入密码",
                minlength:"密码至少输入5位"
            },
            password2:{
                required:"请确认密码",
                equalTo:"两次密码不一致"
            },
            code:{
                required:"请输入验证码",
                remote:"验证码有误"
            }
        }
    })

})