<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
.subs
{
	width:300px;
	background-color:#903;
	color:#FFF;
	font-size:24px;
	padding:10px;
	float:left;
	margin:5px;
}
</style>
</head>

<body>
<div><center><h1>Results based upon your search</h1></center>
<?php
include('lib.php');
$place=$_GET['place'];

$data=mysql_query("select * from college_branch where average>'$place'");
$row=mysql_fetch_array($data);
$id=$row['id'];
$data2=mysql_query("select * from college where id='$id'");
while($row2=mysql_fetch_array($data2))
{
	?>
    <div class="subs"><a href="search.php?name=<?php echo $row2['name'];?>" target="_parent"><?php echo $row2['name'];?></a><br />
    Location:<?php echo $row2['location'];?><br />
    Type:<?php echo $row2['type'];?><br />
    
</div>
	<?php 
    }
 
?>
</div>
</body>
</html>