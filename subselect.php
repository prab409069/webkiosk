<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Subject select</title>
</head>

<body>
Please select semester
<?php include('lib.php');
$data3=mysql_query("select * from `semester` ");
?><form action="subselect.php" method="post">
<select name="semester">
<?php while($row=mysql_fetch_array($data3))
{ ?>
<option value="<?php echo $row['sem'];?>"><?php echo $row['sem'];?></option>
<?php } ?>
</select>
<input type="submit" value="show"/>
</form>
<?php
session_start();
$roll=$_SESSION['login'];
include('lib.php');
if($_POST)
{
$semester=$_POST['semester'];
 $data4=mysql_query("select * from `sub` where `semester`='$semester' ");
$row4=mysql_fetch_array($data4);
?>
<div  id="show">
<table cellspacing="10px">
<tr><td>Semester</td>
<td>Subject</td>
<tr><td><?php echo $row4['semester'];?></td>
<td><?php echo $row4['sub1'];?></td>
</tr>
<tr><td><?php echo $row4['semester'];?></td>
<td><?php echo $row4['sub2'];?></td>
</tr>
<tr><td><?php echo $row4['semester'];?></td>
<td><?php echo $row4['sub3'];?></td>
</tr>
<tr><td><?php echo $row4['semester'];?></td>
<td><?php echo $row4['sub4'];?></td>
</tr>
<tr><td><?php echo $row4['semester'];?></td>
<td><?php echo $row4['sub5'];?></td>
</tr>
<tr><td><?php echo $row4['semester'];?></td>
<td><?php echo $row4['sub6'];?></td>
</tr>
<tr><td><?php echo $row4['semester'];?></td>
<td><?php echo $row4['sub7'];?></td>
</tr>
<tr><td><?php echo $row4['semester'];?></td>
<td><?php echo $row4['sub8'];?></td>
</tr>
<?php } ?>
</table>


</body>
</html>