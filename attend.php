<?php
session_start();
include('lib.php');
$subject=$_POST['subject'];
$semester=$_POST['semester'];
$roll=$_POST['roll'];
$attendence=$_POST['attendence'];
mysql_query("insert into `attendence` (`subject`,`semester`,`roll`,`attendence`) values('$subject','$semester','$roll','$attendence')");
header('location:teacher.php');
?>