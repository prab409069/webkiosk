<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Teacher</title>
<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="thapar.js"></script>

<style type="text/css">
#marks1
{
	background-color:#777;
	height:300px;
	width:500px;
	margin:20px;
	padding:10px;
	float:left;
	color:#EEE;
	font-size:18px;
}
#attendence
{
	background-color:#777;
	height:300px;
	width:500px;
	margin:20px;
	float:left;
	color:#EEE;
	padding:10px;
	font-size:18px;
}
</style>

</head>
</html>

<body style="margin:10px;">
<?php 
session_start();
include('lib.php');
if($_SESSION['login']=='teacher')
{
?>
<div id="marks1">
<center><h2>Marks updation</h2></center>
<form action="marks.php" method="post">
<p>Please select semester</p>
<select name="semester">
<?php include('lib.php');
$data3=mysql_query("select * from `semester` ");
?>
<select name="sem">
<?php while($row=mysql_fetch_array($data3))
{ ?>
<option value="<?php echo $row['sem'];?>"><?php echo $row['sem'];?></option>
<?php } ?>
</select>
<p>Please select branch</p>
<select name="branch">
<option value="COE">COE</option>
<option value="ELE">ELE</option>
<option value="ECE">ECE</option>
<option value="MEE">MEE</option>
<option value="CHE">CHE</option>
<option value="BIO">BIO</option>
<option value="IE">IE</option>
<option value="MAC">MAC</option>
</select><br /><br />
<input type="submit" value="go" />
</form> 
</div>

<div id="attendence">
<center><h2>Attendence</h2></center>
<form action="attendence.php" method="post">
<p>Please select semester</p>
<?php include('lib.php');
$data3=mysql_query("select * from `semester` ");
?>
<select name="semester">
<?php while($row=mysql_fetch_array($data3))
{ ?>
<option value="<?php echo $row['sem'];?>"><?php echo $row['sem'];?></option>
<?php } ?>
</select>
<p>Please select branch</p>
<select name="branch">
<option value="COE">COE</option>
<option value="ELE">ELE</option>
<option value="ECE">ECE</option>
<option value="MEE">MEE</option>
<option value="CHE">CHE</option>
<option value="BIO">BIO</option>
<option value="IE">IE</option>
<option value="MAC">MAC</option>
</select><br /><br />
<input type="submit" value="go" />
</form> 
</div>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

<?php } ?>
<a href="logout.php"><input type="button" value="logout"></a>
</body>
</html>