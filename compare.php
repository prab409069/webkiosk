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
$col1=$_GET['col1'];
$col2=$_GET['col2'];
$data=mysql_query("select * from college where name='$col1'");
$data2=mysql_query("select * from college where name='$col2'");
$row=mysql_fetch_array($data);
$row2=mysql_fetch_array($data2);
$id1=$row['id'];
$id2=$row2['id'];
$data3=mysql_query("select * from college_course where id='$id1'");
$data4=mysql_query("select * from college_course where id='$id2'");
$row3=mysql_fetch_array($data3);
$row4=mysql_fetch_array($data4);
$data5=mysql_query("select * from college_branch where id='$id1'");
$data6=mysql_query("select * from college_branch where id='$id2'");
$row5=mysql_fetch_array($data5);
$row6=mysql_fetch_array($data6);
mysql_query("insert into compare(`id1`,`id2`) values('$id1','$id2')");



?>

<div><br />
<div id="col11"><h1><?php echo $row['name'];?></h1>

Type:<?php echo $row['type'];?><br />
Location:<?php echo $row['location'];?><br />
Year of Inception:<?php echo $row['year'];?><br />
Admission Process:<?php echo $row['admission'];?><br />
Boys Hostel:<?php echo $row['boyshostel'];?><br />
Girls Hostel:<?php echo $row['girlshostel'];?><br />
Labs:<?php echo $row['labs'];?><br />
Faculty:<?php echo $row3['faculty'];?><br />
Phd Faculty:<?php echo $row3['phdfaculty'];?><br />
Students:<?php echo $row3['students'];?><br />
Fees:<?php echo $row3['fees'];?><br />
Average Placements:<?php echo $row5['average'];?><br />
Opening Rank:<?php echo $row5['orank'];?><br />
Closing Rank:<?php echo $row5['crank'];?><br />
</div>
<div id="col22">
<h1><?php echo $row2['name'];?></h1>

Type:<?php echo $row2['type'];?><br />
Location:<?php echo $row2['location'];?><br />
Year of Inception:<?php echo $row2['year'];?><br />
Admission Process:<?php echo $row2['admission'];?><br />
Boys Hostel:<?php echo $row2['boyshostel'];?><br />
Girls Hostel:<?php echo $row2['girlshostel'];?><br />
Labs:<?php echo $row2['labs'];?><br />
Faculty:<?php echo $row4['faculty'];?><br />
Phd Faculty:<?php echo $row4['phdfaculty'];?><br />
Students:<?php echo $row4['students'];?><br />
Fees:<?php echo $row4['fees'];?><br />
Average Placements:<?php echo $row6['average'];?><br />
Opening Rank:<?php echo $row6['orank'];?><br />
Closing Rank:<?php echo $row6['crank'];?><br />

</div>
</div>


</body>
</html>

