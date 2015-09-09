<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Notes</title>
<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
    
});
</script>
</head>

<body style="margin:10px">
<?php
include('lib.php');
$data=mysql_query("select * from `notes`");

?>

<font color="#990099"><marquee><h1>NOTES SECTION</h1></marquee></font>
<div>
<form action="notes.php" method="post">
Enter the topic name to search:&nbsp;<input type="text" placeholder="topic name" name="search" />
<input type="submit" value="Search" id="searchbut" />
</form>
</div>
<font color="#EE0000"><h2>Want to upload notes?</h2></font>

<br />
<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="text" placeholder="Name" name="sender" />
<input type="text" placeholder="topic name" name="topic" />
<input type="file" name="file" />
<input type="submit" value="Upload" />
</form>
<br />
<div style="width:600px;height:400px;float:left;background-color:#888;color:#EEE">
<h1>Uploaded Notes</h1>
<table cellspacing="20px">
<tr>
<td>Uploaded by</td>
<td>Topic</td>
<td>File</td>
</tr>
<?php while($row=mysql_fetch_array($data)) {?>
<tr>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['topic'];?></td>
<td><a href="notes/<?php echo $row['file'];?>" download><?php echo $row['file'];?></a></td>
</tr>
<?php } ?>
</table>
</div>
<div style="width:600px;height:400px;float:left;background-color:#BBB;color:#EEE">
<h1>Your search results</h1>

<table cellspacing="20px">
<tr>
<td>Uploaded by</td>
<td>Topic</td>
<td>File</td>
</tr>
<?php
if($_POST)
{
$topic=$_POST['search'];

 $data2=mysql_query("select * from `notes` where `topic`='$topic'");
 while($row2=mysql_fetch_array($data2)) {?>
<tr>
<td><?php echo $row2['name'];?></td>
<td><?php echo $row2['topic'];?></td>
<td><a href="notes/<?php echo $row2['file'];?>" download><?php echo $row2['file'];?></a></td>
</tr>
<?php }
} ?>
</table>


</div>
</body>
</html>