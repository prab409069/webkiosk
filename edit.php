<?php
include('lib.php');
session_start();
 $roll=$_SESSION['login'];

 $ephone=$_POST['ephone'];
 $eaddress=$_POST['eaddress'];
 
 $image="upload/".$roll.$FILES['photo']['name'];
 
 move_uploaded_file($_FILES['photo']['tmp_name'],$image);

mysql_query("update `account` set `phone`='$ephone',`address`='$eaddress',`photo`='$image' where `roll`=$roll");

header('location:thapar.php') ; 



?>
