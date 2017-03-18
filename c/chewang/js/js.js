$(document).ready(function(){
  //微信、新浪 移入移出
  $(".zyx_icon").hover(function(){
     $(".zyx_xinlang").css("display","block");
  },function(){
     $(".zyx_xinlang").css("display","none");
  })
  $(".zyx_icon1").hover(function(){
     $(".zyx_weixin").css("display","block");
  },function(){
     $(".zyx_weixin").css("display","none");
  })
  //点击回到顶部
  jQuery.extend({
    returnTop:function(obj,time){
       obj.on("click",function(){
          var top=$(document).scrollTop();
          var objs={top:top};
          $(objs).animate({top:0},{duration:time,step:function(){
              $(document).scrollTop(objs.top);
          }
        })
       })
    }
  })
   $.returnTop($(".zyx_top"))
//下拉
$(".zyx_xialakuang").each(function(index,val){
  $(".zyx_xialakuang").eq(index).hover(function(){
     $(".zyx_xiala").eq(index).css("display","block");
  },function(){
     $(".zyx_xiala").eq(index).css("display","none");
  })
})
//banner轮播
function banner(){
  $(".zyx_banner img").each(function(index,val){
    var cw=document.documentElement.clientWidth;
    $(".zyx_banner img").css({width:cw+"px"});
  })
  var now=0;
  var next=0;
  var flag=true;
  var width=$(".zyx_banner img").width();
  function move(type){
      var type=type||"rr";
      if(type=="ll"){
           next--;
          if(next<0){
              next=$("ul.zyx_banner li").length-1;
          }
          $("ul.zyx_banner li").eq(next).css({left:-width+"px"});
          $("ul.zyx_banner li").eq(now).animate({left:width},500);
          $("ul.zyx_banner li").eq(next).animate({left:0},500,function(){flag=true});
      }else if(type=="rr"){
           next++;
          if(next>=$("ul.zyx_banner li").length){
              next=0;
          } 
          $("ul.zyx_banner li").eq(next).css({left:width+"px"});
          $("ul.zyx_banner li").eq(now).animate({left:-width},500);
          $("ul.zyx_banner li").eq(next).animate({left:0},500,function(){flag=true});
      }
          $("ul.zyx_circle li").eq(now).removeClass("zyx_first");
          $("ul.zyx_circle li").eq(next).addClass("zyx_first");
          now=next;
  }
  var t=setInterval(move,4000);
  $(".zyx_bannerbox").hover(function(){
      clearInterval(t);
  },function(){
      t=setInterval(move,4000);
  })
  $(".zyx_leftbtn").click(function(){
    if(flag){
       flag=false;
       move("ll");
    }     
  })
  $(".zyx_rightbtn").click(function(){
    if(flag){
       flag=false;
       move("rr");
    }
  })
  //小按钮
  $("ul.zyx_circle li").click(function(){
      next=$(this).index();
      if(flag){
        flag=false;
          if(now>next){
            $("ul.zyx_banner li").eq(next).css({left:width+"px"});
            $("ul.zyx_banner li").eq(now).animate({left:-width},500);
            $("ul.zyx_banner li").eq(next).animate({left:0},500,function(){flag=true});
          }else if(now<next){
            $("ul.zyx_banner li").eq(next).css({left:-width+"px"});
            $("ul.zyx_banner li").eq(now).animate({left:width},500);
            $("ul.zyx_banner li").eq(next).animate({left:0},500,function(){flag=true});
          }
          $("ul.zyx_circle li").eq(now).removeClass("zyx_first");
          $("ul.zyx_circle li").eq(next).addClass("zyx_first");
          now=next;
      }
  })
}
banner();
//网站导航
document.body.onclick=function(e){
    var e=e||window.event;
    var obj=e.target||e.srcElement;
    if(obj.className=="zyx_rightnav"||obj.className=="sanjiao"){
        $(".zyx_wzdh").css("display","block");
    }else{
        $(".zyx_wzdh").css("display","none");
    }
}

})