<?php
session_start();
include('lib.php');

$roll=$_POST['roll'];
$pass=$_POST['pass'];


$data=mysql_query("select * from `account` where `roll`='$roll'");
$row=mysql_fetch_array($data);
	if($pass==prabhjot && $roll==409069)
	{
		$_SESSION['login']="admin";
		header('location:thapar.php');
		}
		if($pass==pallavi && $roll==277984)
	{
		$_SESSION['login']="teacher";
		header('location:teacher.php');
		}	
       if($row['password']==$pass)
	   {
		  $_SESSION['login']=$roll;
			
		 $_SESSION['id']=$row['id'];
		  header('location:thapar.php') ; 
		  $times=$row['times']+1;
				  mysql_query("update `account` set `time`=".date('y-m-d').",`times`='$times'  where `roll`=$roll");
		   
  	   
		   }	
	
	
	
	else{
	
		
		?>
        
		<script type="text/javascript">
    
	alert("User doesnot exits");
	window.location="webkiosk.php";
    </script>
		<?php
		
		}

?>