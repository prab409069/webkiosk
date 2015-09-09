<?php
include('lib.php');
session_start();
$eroll=$_POST['eroll'];
$epass=$_POST['epass'];
$ebranch=$_POST['ebranch'];
$eyear=$_POST['eyear'];

$ename=$_POST['ename'];
 $ephone=$_POST['ephone'];
 $eaddress=$_POST['eaddress'];
 $egroup=$_POST['egroup'];
 $image="upload/".$roll.$FILES['photo']['name'];
 
 move_uploaded_file($_FILES['photo']['tmp_name'],$image);

mysql_query("INSERT INTO `account`(`roll`, `password`, `name`, `phone`, `address`, `photo`,`branch`,`year`,`group`) VALUES ('$eroll','$epass','$ename','$ephone','$eaddress','$image','$ebranch','$eyear','$egroup')");

header('location:admin.php') ; 



?>
