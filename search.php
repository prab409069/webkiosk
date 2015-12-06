<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>College finder</title>
<link href="thapar.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="thapar.js">
</script>
<script type="text/javascript" src="script.js">
</script>
<script type="text/javascript" src="ajax.js">
</script>

<link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>

<?php
session_start();

include('lib.php');
$name=$_GET['name'];
$data=mysql_query("select * from college where name='$name'");
$row=mysql_fetch_array($data);
$id=$row['id'];
$data2=mysql_query("select * from college_course where id='$id'");
$row2=mysql_fetch_array($data2);
$data3=mysql_query("select * from college_branch where id='$id'");
$row3=mysql_fetch_array($data3);



?>
<div id="psk1">
<ul>
<li><a href="">College Finder</a></li>
<li><a href="thapar.php">Search</a>
</li>
<li><a href="thapar.php#acadhr">Compare</a>

</li>
<li><a id="examhr">Popular Comparison</a></li>
<li><a href="fee.php" target="_blank">Contact Us</a></li>

<li><a href="logout.php" >Logout</a></li>
</ul>

</div>
<div>
<div id="sub2"><h1><center>About College</center></h1>
Name:<?php echo $row['name'];?><br /><br />
Type:<?php echo $row['type'];?><br /><br />
Location:<?php echo $row['location'];?><br /><br />
Year of Inception:<?php echo $row['year'];?><br /><br />
Admission Process:<?php echo $row['admission'];?><br /><br />
</div>
<div id="sub3">
<h1><center>About Campus</center></h1>
Campus Area:<?php echo $row['campusarea'];?><br /><br />
Boys Hostel:<?php echo $row['boyshostel'];?><br /><br />
Girls Hostel:<?php echo $row['girlshostel'];?><br /><br />
Labs:<?php echo $row['labs'];?><br /><br />
</div>
<div id="sub4">
<h1><center>Fees Faculty Placement</center></h1>
Fees:<?php echo $row2['fees'];?><br /><br />
Faculty:<?php echo $row2['faculty'];?><br /><br />
Phd Facutly:<?php echo $row2['phdfaculty'];?><br /><br />
Students:<?php echo $row2['students'];?><br /><br />
Top recruiters:<?php echo $row2['toprec'];?><br /><br />
</div>
<div id="sub5">
<h1><center>Branch Ranks</center></h1>
Branches:<?php echo $row3['branch'];?><br /><br />
Opening Ranks:<?php echo $row3['orank'];?><br /><br />
Closing Ranks:<?php echo $row3['crank'];?><br /><br />
Average Placements:<?php echo $row3['average'];?><br /><br />
Courses:<?php echo $row3['course'];?><br /><br />
</div>
</div>
</div>





    
  
    
  


</body>
</html>

