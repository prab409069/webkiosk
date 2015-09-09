<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fee Details</title>
<link href="thapar.css" type="text/css" rel="stylesheet" />

</head>
<?php 
include('lib.php');
session_start();
$roll=$_SESSION['login'];
$data3=mysql_query("select * from `fee` where `roll`='$roll' ");
$row3=mysql_fetch_array($data3);
?>
<body>
<font size="+1.5" color="#000000">
<marquee><h2>Fee Recepit Number</h2></marquee>
<ul id="subul">
    <li class="subul"><?php echo $row3['1']; ?></li><br /><br />
    <li class="subul"><?php echo $row3['2']; ?></li><br /><br />
    <li class="subul"><?php echo $row3['3']; ?></li><br /><br />
    <li class="subul"><?php echo $row3['4']; ?></li><br /><br />
    <li class="subul"><?php echo $row3['5']; ?></li><br /><br />
    <li class="subul"><?php echo $row3['6']; ?></li><br /><br />
    <li class="subul"><?php echo $row3['7']; ?></li><br /><br />
    <li class="subul"><?php echo $row3['8']; ?></li><br /><br />
    </ul>
    </font>

</body>
</html>