<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Attendence</title>
</head>

<body>

<?php
session_start();

include('lib.php');
$branch=$_POST['branch'];
$sem=$_POST['semester'];
if($_SESSION['login']=="teacher"){


$data=mysql_query("select * from `sub` where `semester`='$sem' and `branch`='$branch' ");
$row=mysql_fetch_array($data);
$data2=mysql_query("select `roll` from `account` where `semester`='$sem' and `branch`='$branch' ");

}
?>

<body style="margin:10px;">
<form action="attend.php" method="post">
<h2>Please select the subject</h2>
<select name="subject">
<option><?php echo $row['sub1'];?></option>
<option><?php echo $row['sub2'];?></option>
<option><?php echo $row['sub3'];?></option>
<option><?php echo $row['sub4'];?></option>
<option><?php echo $row['sub5'];?></option>
<option><?php echo $row['sub6'];?></option>
<option><?php echo $row['sub7'];?></option>
<option><?php echo $row['sub8'];?></option>
</select>
<br /><br />
Please select semester
<select name="semester">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
</select>

<table cellspacing="10px">
<tr><td>Roll Number</td>
<td>Attendence</td>

</tr>

<tr>
<td><select name="roll">
<?php while($row2=mysql_fetch_array($data2)){  ?>
<option><?php echo $row2['roll'];?>
<?php  } ?></td>
</option>
</select>
<td><input type="number" placeholder="attendence" name="attendence" /></td>

</tr>

</table>
<input type="submit" value="submit" />
</form>

</body>
</html>