<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Marks updation</title>
<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
<script type="text/javascript" >
$(document).ready(function(e) {
    $("#marksbut").click(function(e) {
        $("#marks").show();
    });
});
</script>
</head>
<?php
session_start();

include('lib.php');
$branch=$_POST['branch'];
$sem=$_POST['sem'];
if($_SESSION['login']=="teacher"){


$data=mysql_query("select * from `sub` where `semester`='$sem' and `branch`='$branch' ");
$row=mysql_fetch_array($data);
$data2=mysql_query("select `roll` from `account` where `year`='$year' and `branch`='$branch' ");
$data3=mysql_query("select * from `semester` ");
}
?>

<body style="margin:10px;">
<form action="entermarks.php" method="post">
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
<?php while($row3=mysql_fetch_array($data3))
{ ?>
<option value="<?php echo $row3['semester'];?>"><?php echo $row3['semester'];?></option>
<?php } ?>
</select>

<table cellspacing="10px">
<tr><td>Roll Number</td>
<td>Marks</td>

</tr>


<tr>
<td><select name="roll">
<?php while($row2=mysql_fetch_array($data2)){  ?>
<option><?php echo $row2['roll'];?>
<?php  } ?></td>
</option>
</select>
<td><input type="number" placeholder="marks" name="marks" /></td>

</tr>

</table>
<input type="submit" value="submit" />
</form>


</body>
</html>