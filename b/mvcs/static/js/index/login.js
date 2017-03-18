$(window).ready(function(){

   /* var btn=$("input[type=submit]");

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
                    btn.removeAttr("disabled");
                }else{
                    console.log(e);
                    $(".codes").css({background:'red'});
                    btn.attr("disabled","disabled");
                }
            }
        })

    })*/


    $("#form").validate({
        rules:{
            username:{
                required:true
            },
            password:{
                required:true
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
                required:"请输入用户名"
            },
            password:{
                required:"请输入密码"
            },
            code:{
                required:"请输入验证码",
                remote:"验证码有误"
            }
        }
    })



})