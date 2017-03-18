<?php
    include "../public/session.php";
    include "../public/db.php";
    include "../public/function.php";

    $tree=new abc();
    $tree->tree(0,1,"category",$db);

    $sql="select * from position";
    $result=$db->query($sql);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form{
            width: 400px;
            margin:100px  auto;
            border: 1px solid cornflowerblue;
            border-collapse: collapse;
            text-align: left;
            padding-left:50px ;
            padding-top:20px ;
            padding-bottom: 20px;
            background: greenyellow;
        }
        .tijiao{
            width: 60px;
            height: 35px;
            margin-left: 120px;
        }
        .wrap{
            width: 200px;height: 200px;
            border: 1px solid #ccc;
            position: relative;
        }
        .box{
            position: absolute;
            bottom:0;left:0;
            width:0%;
            height: 20px;
            background-color: red;
            z-index: 100;
        }
        .wrap .img{
            width: 100%;
            height: 100%;
            position: absolute;
            top:0;
            left: 0;
        }
        .img img{
            width: 100%;
        }
        .big_wrap{
            width: 205px;
            height: 45px;
            margin-top:-75px ;
        }
        .box{
            height:200px;
            width:200px;
            border:1px solid #000;
        }
        .box .img{
            height:185px;
            width:100%;
        }
        .box img{
            height:100%;
            width:100%;
        }
        .box .progress{
            height:15px;
            width:0;
            background:red;
        }
    </style>
</head>
<script src="../js/upload.js"></script>
<script>
    window.onload=function(){
        var imgurl=document.querySelector("#imgurl");
        var btn=document.querySelector("#submit");
        var imgobj=new Upload("upload.php","#file",".progress",".box img");
        imgobj.uploadStart=function(){
            btn.setAttribute("disabled","disabled");
        }
        imgobj.up(function(e){
//            console.log(e);
            imgurl.value=e;
            btn.removeAttribute("disabled");
        })

    }
</script>
<body>
<form action="addconInfo.php">
    上级分类&nbsp;<select name="category">
        <option value="0">一级分类</option>
        <?php
        echo $tree->str;
        ?>
    </select><br/><br/>
    标&nbsp;题&nbsp;&nbsp;<input type="text" name="stitle" value="" /><br/><br>
    内容&nbsp;&nbsp;&nbsp;<textarea name="scon" rows="10" cols="45"></textarea><br/><br/>
    <input type="submit" name="" id="submit" value="提交"  class="tijiao"/>
<!--    <input type="file" name="file" class="file" multiple="multiple"/><br>-->
<!--    <div class="wrap">-->
<!--        <div class="img">-->
<!--            <img src="" alt="">-->
<!--        </div>-->
<!--        <div class="box"></div>-->
<!--    </div><br/>-->
<!--    <input type="hidden" name="imgurl" id="imgurl" value="">-->
    <br>
    添加图片：<input type="file"  name="file" id="file"><br/>
    <div class="box">
        <div class="img"><img src="" alt=""></div>
        <div class="progress"></div>
    </div>
    <input type="hidden" name="imgurl" id="imgurl">

    推荐位：<?php
    $sql="select * from position";
    $result=$db->query($sql);
    while($row=$result->fetch_assoc()){
        echo $row["posname"];
        ?>
        <input type="radio" value="<?php echo $row['posid']?>" name="pos">&nbsp;
        <?php
    } ?>
</form>
</body>
</html>