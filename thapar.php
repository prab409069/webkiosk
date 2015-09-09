<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thapar Webkiosk</title>
<link href="thapar.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="thapar.js">
</script>
<script type="text/javascript" src="script.js">
</script>

<link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>

<?php
session_start();

include('lib.php');

if($_SESSION['login']){

$roll=$_SESSION['login'];

$data=mysql_query("select * from `account` where `roll`='$roll' ");

$row=mysql_fetch_array($data);
$branch=$row['branch'];


$con2=mysql_connect('localhost','root','');
mysql_select_db('login',$con2);

$con3=mysql_connect('localhost','root','');
mysql_select_db('login',$con3);
$data3=mysql_query("select * from `fee` where `roll`='$roll' ");
$row3=mysql_fetch_array($data3);

?>
<div id="psk1">
<ul>
<li><a id="srshr">SRS</a>
</li>
<li><a id="acadhr">Academics</a>

</li>
<li><a id="examhr">Exams</a></li>
<li><a href="fee.php" target="_blank">Fee</a></li>
<li><a href="notes.php" target="_blank">Notes</a></li>
<li><a href="blood.php" target="_blank">Blood Bank</a></li>
<li><a href="logout.php" >Logout</a></li>
</ul>

</div>

<div id="psk2">
<h2> Your Current Details/<a id="href1" onclick="">Edit</a></h2>


<img id="img1" src="<?php echo $row['photo'];?>" height="100" width="100" style="border:3px solid red;">
<br />
<form style="font-size:20px">
<b>
<table cellpadding="10px">
<tr>
<td>Name:</td><td><?php echo $row['name'];  ?></td></tr>
<tr>
<td>Phone Number:</td><td><?php echo $row['phone'];  ?></td></tr>
<tr>
<td>Address:</td><td><?php echo $row['address'];  ?></td></tr>
<tr>
<td>Branch:</td><td><?php echo $row['branch'];  ?></td></tr>
<tr>
<td>Roll No:</td><td><?php echo $row['roll'];  ?></td></tr>

<td>Group:</td><td><?php echo $row['group'];  ?></td></tr>
<tr><td>
<a id="time">Click to download time-table</a></td></tr>
</table></b>
</form><br /><br /><br />


</div>

<?php }

else{
	

	header('location: webkiosk.php');
		
	}
 ?>
<div id="edit">
<form action="edit.php" method="post" enctype="multipart/form-data" >
<table>
<tr><td>Phone Number:</td><td><input type="number" name="ephone" value="<?php echo $row['phone'];?>"></td></tr>
<tr><td>Address:</td><td><input type="text" name="eaddress" value="<?php echo $row['address'];?>"></td></tr>
<tr><td>Photo</td><td><input type="file"
name="photo" /></td></tr>
<tr><td><input type="submit" value="update" /></td></tr></table>
</form>
</div>
<div id="srs">
To be updated soon...
</div>
<div id="acad">
<ul>
<a id="attendencehr"><li>Attendence</li></a>
<a id="subhr"><li>Subject registered</li></a>
<a id="hostelhr"><li>Hostel Choice</li></a>
</ul>
<div id="sub">
<form style="color:#000">
<font size="+1.5">
<iframe src="subselect.php" height="400px" width="600px" frameborder="0">
</iframe>
    
  
    
  </font>
</form>
</div>
<div id="attendence">
    <font color="#000000" size="+1">
<iframe src="attendenceselect.php" height="300px" width="500px" frameborder="0">
</iframe>
    </div>
</div>
<div id="exam">
<ul>
<li><a id="markshr">Marks</a></li>
<li>Grades</li>
<li>Date Sheet</li>
<li>Seating Plan</li>
</ul>
<div id="marks">
<font color="#000000" size="+1">
<iframe src="semesterselect.php" height="300px" width="500px" frameborder="0">
</iframe>
<br />
</font>

</body>
</html>

