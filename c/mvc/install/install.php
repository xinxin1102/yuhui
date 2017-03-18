<?php
$db=new mysqli("localhost","root","");
$db->query("create database blog");
$db->query("use blog");
$db->query('
    create table admin(
    aid int(11) PRIMARY KEY auto_increment,
    aname VARCHAR (200),
    apass VARCHAR (32)
    )DEFAULT charset=utf8;
');
$aname=$_GET["aname"];
$apass=md5($_GET["apass"]);
$db->query("insert into admin (aname,apass) VALUES ('$aname','$apass')");
?>