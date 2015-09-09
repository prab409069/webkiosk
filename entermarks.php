<?php 
session_start();
include('lib.php');
if($_SESSION['login']=='teacher')
{
	$roll=$_POST['roll'];
	$branch=$_POST['branch'];
	$semester=$_POST['semester'];
	$subject=$_POST['subject'];
	$marks=$_POST['marks'];
	$data=mysql_query("INSERT INTO `marks`(`subject`, `marks`,`roll`,`semester`) VALUES('$subject','$marks','$roll','$semester')");
	header('location:teacher.php');
}
?>