<?php
	include "../public/db.php";
//	include "../public/session.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>北京车网互联科技有限公司</title>
	<link rel="shortcut icon" href="../images/icon1.png">
	<link rel="stylesheet" href="../css/public.css">
	<link rel="stylesheet" href="../css/header.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/js.js"></script>
</head>
<body>
	<div class="zyx_topnavbox">
   <div class="zyx_topnav">
       <div class="zyx_logo"><img src="../images/logo.png" alt=""></div>
       <ul class="zyx_centernav">
          <li>
            <a href="index.php" class="zyx_letter">首页</a>
            <div class="zyx_hengxian"></div>
          </li>
          <li class="zyx_xialakuang">
            <a href="" class="zyx_letter">产品</a>
            <ul class="zyx_xiala">
               <li><span><i>个人产品：</i></span></li>
               <li><a href="http://autofun.carsmart.cn/main.html">乐乘</a></li>
               <li><a href="http://zc.carsmart.cn/">智乘(即将发布)</a></li>
               <li><a href="http://tripfun.carsmart.cn/" >纷乘</a></li>
               <li><span><i>行业应用：</i></span></li>
               <li><a href="http://4s.carsmart.cn/">车店通</a></li>
               <li><span><i>硬件产品：</i></span></li>
               <li><a href="http://autofun.carsmart.cn/box.html" >乐乘盒子</a></li>
               <li><a href="http://tripfun.carsmart.cn/" >纷乘行车记录仪</a></li>
            </ul>
          </li>
         <?php
            $i=0;
            $result=$db->query("select * from category where pid=0");
            while($row=$result->fetch_assoc()){
               $i++;		
          ?>
          <?php
            if($i==3){	
          ?>
             <li><a href="http://hr.carsmart.cn/" class="zyx_rczp"><?php echo $row["cname"];?></a></li>
          <?php
          }else{
          ?>
          <li class="zyx_xialakuang">
            <span class="padd"><?php echo $row["cname"]?></span>
            <ul class="zyx_xiala">
               <?php
               	$result1=$db->query("select * from category where pid=".$row["cid"]);
                while($row1=$result1->fetch_assoc()){    
               ?>
               <?php if($row["cid"]==2){ ?>
               <li><a href="list_two.php?id=<?php echo $row1['cid'];?>"><?php echo $row1["cname"]?></a></li>
               <?php
               }else{
               ?>
                 <li><a href="list_one.php?id=<?php echo $row1['cid'];?>"><?php echo $row1["cname"]?></a></li>
               <?php 
               }
               }
               ?>
            </ul>
          </li>
         <?php
           } 
           }
         ?>
       </ul>
       <div class="zyx_rightnav">网站导航<s class="sanjiao"></s></div>
       <ul class="zyx_wzdh">
	        <li><a href="">车网互联官网</a></li>
	        <li><a href="http://autofun.carsmart.cn/main.html">乐乘</a></li>
	        <li><a href="http://zc.carsmart.cn/">智乘(即将发布)</a></li>
	        <li><a href="http://tripfun.carsmart.cn/">纷乘</a></li>
	        <li><a href="http://4s.carsmart.cn/">车店通</a></li>
       </ul>
   </div>
</div>