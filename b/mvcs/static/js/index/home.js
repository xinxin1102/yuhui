/**
 * Created by lenovo on 2017/3/13.
 */
window.onload=function(){
    var imgurl=document.querySelector("#imgurl");
    var btn=document.querySelector("#imgurl_btn");

    var imgobj=new Upload("index.php?m=admin&f=upload&a=addtouxiang","#img_file",".add_touxiang .img_progress",".add_touxiang .img img");
    imgobj.uploadStart=function(){
        btn.setAttribute("disabled","disabled");
    }
    imgobj.up(function(e){
        imgurl.value=e;
        btn.removeAttribute("disabled");
    })
}

