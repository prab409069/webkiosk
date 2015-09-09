<?php
session_start();

include('lib.php');
$branch=$_POST['branch'];
$year=$_POST['year'];
if($_SESSION['login']=="teacher"){

mysql_select_db('login',$con);
$data=mysql_query("select * from `sub` where `year`='$year' and `branch`='$branch' ");
$row=mysql_fetch_array($data);
header('location:teacher.php');
}
?>
