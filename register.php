<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registeration Form</title>
</head>

<body>
<marquee><h1>Welcome to Blood Bank</h1></marquee>
<form action="reg.php" method="post">
<font size="+2" color="#AA0000">
Enter your name<input type="text" name="name" /><br />
Select your blood group
<select name="group">
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
</select>
<br />
Enter your contact number <input type="number" name="contact" /></font>
<br />
<input type="submit" value="register" />
</form>
</body>
</html>