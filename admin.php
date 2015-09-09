<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
</head>
<?php
session_start();
if($_SESSION['login']!="admin")
{
	header('location:webkiosk.php');
}
?>
<body>
<div>
<form action="adminedit.php" method="post" enctype="multipart/form-data" >
<table>
<tr><td>Roll Number:</td><td><input type="text" name="eroll" ></td></tr>
<tr><td>Password:</td><td><input type="password" name="epass" ></td></tr>

<tr><td>Name:</td><td><input type="text" name="ename" ></td></tr>

<tr><td>Phone Number:</td><td><input type="number" name="ephone" ></td></tr>
<tr><td>Branch:</td><td><input type="text" name="ebranch" ></td></tr>
<tr><td>Year:</td><td><input type="number" name="eyear" ></td></tr>

<tr><td>Address:</td><td><input type="text" name="eaddress"></td></tr>
<tr><td>Group:</td><td><input type="text" name="egroup"></td></tr>
<tr><td>Photo</td><td><input type="file"
name="photo" /></td></tr>
<tr><td><input type="submit" value="update" /></td></tr></table>
<a href="logout.php"><input type="button" value="logout"/></a>
</form>
</div>
</body>
</html>