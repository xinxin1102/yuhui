<?php 
	include "header.php";
	include "index1.php";
?>
<link rel="stylesheet" href="../css/list.css">
<div class="zyx_bannerbox">
	<div class="zyx_banner">
		<?php
           $cid=$_GET["id"];
           $result=$db->query("select * from category where cid=".$cid);
           $row=$result->fetch_assoc();
           $pid=$row["pid"];
           $result1=$db->query("select * from shows where cid=".$pid);
           $row1=$result1->fetch_assoc();
        ?>
		<img src="<?php echo $row1["simgurl"]?>" alt="">
		<h1><?php echo $row["cname"] ?></h1>
		<ul class="zyx_kids">
		<?php 
		    $cid=$_GET["id"];
            $result=$db->query("select * from category where cid=".$cid);
            $row=$result->fetch_assoc();
			$res4=$db->query("select * from category where pid=".$row["pid"]);
		  	while($row1=$res4->fetch_assoc()){
		  ?>
		  <li class="<?php if($cid==$row1['cid']){echo 'zyx_kidslist';}?>"><a href="list_one.php?id=<?php echo $row1['cid'];?>"><?php echo $row1["cname"];?></a></li>
		  <?php	 
		  	}
		  ?>
        </ul>
    </div>
</div>
<div class="zyx_center">
	<?php    
	   $cid=$_GET["id"];
       $res1=$db->query("select * from shows where cid=".$cid); 	
       $row1=$res1->fetch_assoc();   
	   echo $row1["scon"];	
	 ?>
</div>
<!-- center end-->
<?php 
	include "footer.php";
?>