<?php
    include "../public/session.php";
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="../css/adminIndex.css">
</head>
<script src="../js/jquery-min.js"></script>
<script>
    $(window).ready(function(){
        $(".opi").click(function(){
            $(this).parent().find(".son").toggle(100);
        })
    })

</script>
<body>
    <div class="header">
        <img src="../images/1111.png" alt="">
        <div class="header1">
            <span><?php echo $_SESSION["username"]; ?>后台管理系统</span>
        </div>
        <div class="header2">
            <span style="padding-right: 20px">欢迎您</span>
            <a href="unlogin.php">退出</a>
        </div>
    </div>
    <div class="main">

        <div class="left">
            <ul>
                <li>用户管理
                    <ul>
                        <li>
                            <a href="addUser.php" target="right">添加用户</a>
                        </li>
                        <li>
                            <a href="javascript:;" target="right">管理用户</a>
                        </li>
                    </ul>
                </li>

                <li>分类管理
                    <ul>
                        <li>
                            <a href="addCategory.php" target="right">添加分类</a>
                        </li>
                        <li>
                            <a href="showCategory.php" target="right">管理分类</a>
                        </li>
                    </ul>
                </li>
                <li>内容管理
                    <ul>
                        <li>
                            <a href="addcon.php" target="right">添加内容</a>
                        </li>
                        <li>
                            <a href="showcon.php" target="right">管理内容</a>
                        </li>
                    </ul>
                </li>
                <li>推荐位管理
                    <ul>
                        <li>
                            <a href="addpos.php" target="right">添加推荐位</a>
                        </li>
                        <li>
                            <a href="showpos.php" target="right">管理推荐位</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="right">
            <iframe src="" frameborder="0" name="right">

            </iframe>
        </div>
    </div>
</body>
</html>