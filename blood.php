<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood Bank</title>
</head>

<body>
<div style="background-color:#B00;color:#EEE;height:100px">
<font size="+6"><marquee>Donate blood...you can save a life</marquee>
</font></div><br />
<a href="register.php" target="_blank">Click here to register yourself</a>
<form action="blood.php" method="post">
<p>Select blood group to search for</p><br />
<select name="group">
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
</select><input type="submit" value="search for donor" />
</form>
<br />
<center><h2>Your search results</h2></center>
<?php include('lib.php');
if($_POST){
$group=$_POST['group'];
$data=mysql_query("select * from `blood` where `bgroup`='$group' ");

?>
<table cellspacing="10px" cellpadding="30px">
<tr><b>
<td>Name</td>
<td>Blood group</td>
<td>Contact Number</td>
</b></tr>
<?php while($row=mysql_fetch_array($data)){?>
<tr>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['bgroup'];?></td>
<td><?php echo $row['contact'];?></td>
</tr>
<?php } }?>
</table>
</body>
</html>