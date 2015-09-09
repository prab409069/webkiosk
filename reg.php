<?php
include('lib.php');
$name=$_POST['name'];
$group=$_POST['group'];
$contact=$_POST['contact'];
mysql_query("insert into `blood` (`name`,`bgroup`,`contact`) values ('$name','$group','$contact') ");
header('location:blood.php');
?>