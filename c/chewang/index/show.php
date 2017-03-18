<?php
include "header.php";
?>
<link rel="stylesheet" href="../css/show.css">
	<style type="text/css">
		.zyx_center{
	width:950px;
	height: auto;
	overflow: hidden;
	margin:0 auto;
	text-align:center;
	position: relative;
}
.zyx_centerxian{
	width:100%;
	border-bottom:1px solid #eee;
	margin-top:30px;
}
.zyx_center h3{
	font-weight: normal;
	font-size:24px;
	color:#2A5D84;
	text-align: center;
	padding-top:30px;
}
.zyx_show{
	width: auto;
	height: 30px;
	/*background:pink;*/
	text-align: right;
	line-height: 30px;
	margin-top:20px;
}
.zyx_show b{
	margin-right:30px;
}
	</style>
<!-- center start-->
<div class="zyx_center">	 
   <?php    
	   $cid=$_GET["id"];
       $res1=$db->query("select * from shows where sid=".$cid); 	
       $row1=$res1->fetch_assoc();
   ?>
   <h3><?php echo $row1["stitle"]?></h3>
   <div class="zyx_show">
			 	<b>作者：<?php echo $row1["username"]?></b>
			 	<a href="index.php">首页</a><span>&gt;</span><?php echo $row1["stitle"]?>
			 </div>
   <?php
   		echo $row1["scon"];
   	?>
</div>

<!-- center end-->
<?php
include "footer.php";
?>