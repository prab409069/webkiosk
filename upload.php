<?php
include('lib.php');
$name=$_POST['sender'];
$topic=$_POST['topic'];
$file=$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],"notes/".$_FILES['file']['name']);
$data=mysql_query("insert into `notes`(`name`, `file`, `topic`) values('$name','$file','$topic')");
header('location:notes.php');
?>