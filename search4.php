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
$type=$_GET['type'];

$data=mysql_query("select * from college where type='$type'");



while($row=mysql_fetch_array($data))
{
	?>
    <div class="subs"><a href="search.php?name=<?php echo $row['name'];?>" target="_parent"><?php echo $row['name'];?></a><br />
    Location:<?php echo $row['location'];?><br />
    Type:<?php echo $row['type'];?>
</div>
	<?php 
    }
 
?>
</div>
</body>
</html>