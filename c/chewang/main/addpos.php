<?php
    include "../public/session.php";
    include "../public/db.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
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
</style>
<body>
<form action="addposInfo.php">
    已有推荐位：<select name="position" id="">
        <?php
            $sql="select * from position";
            $result=$db->query($sql);
            while($row=$result->fetch_assoc()){
                echo $i++;
                ?>
                <option value="<?php echo $row['posid'];?>"><?php echo $row["posname"]?></option>
                <?php
            }
        ?>
    </select><br/><br>
    推荐位名称：<input type="text" name="posname"><br/><br>
    <input type="submit" value="添加">
</form>
</body>
</html>