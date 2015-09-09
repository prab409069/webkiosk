<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Attendence</title>
</head>

<body>
Please select semester
<?php include('lib.php');
$data3=mysql_query("select * from `semester` ");
?><form action="attendenceselect.php" method="post">
<select name="semester">
<?php while($row=mysql_fetch_array($data3))
{ ?>
<option value="<?php echo $row['sem'];?>"><?php echo $row['sem'];?></option>
<?php } ?>
</select>
<input type="submit" value="show"/>
</form>
<br />



<?php
session_start();
$roll=$_SESSION['login'];
include('lib.php');
if($_POST)
{
$semester=$_POST['semester'];
 $data4=mysql_query("select * from `attendence` where `roll`='$roll' and `semester`='$semester' ");

?>
<div  id="show">
<table cellspacing="10px">
<tr><td>Semester</td>
<td>Subject</td>
<td>Attendence</td></tr>
<?php while($row4=mysql_fetch_array($data4)) {
	?>
<tr><td><?php echo $row4['semester'];?></td>
<td><?php echo $row4['subject'];?></td>
<td><?php echo $row4['attendence'];?></td>
</tr>
<?php } }?>
</table>


</body>
</html>