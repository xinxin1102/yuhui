<?php
include "../public/session.php";
include "../public/db.php";
include "../public/function.php";
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

        table{
            width:1000px;
            margin: auto;
            border: 1px solid #000000;
            border-collapse: collapse;
        }
        td,th{
            width: 25%;
            height: 30px;
            text-align: center;
            line-height: 30px;
            border: 1px solid #000000;
            border-top:0;
        }
        a{
            color: #000;
            text-decoration: none;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>文章id</th>
        <th>分类名称</th>
        <th>文章标题</th>
        <th>文章时间</th>
        <th>推荐位</th>
        <th>操作</th>
    </tr>
    <?php
    $stitle=new abc();
    $stitle->stitle("shows",$db);
    echo $stitle->str;
    ?>
</table>
</body>
</html>