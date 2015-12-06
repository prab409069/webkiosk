<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>College Finder</title>
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
$data=mysql_query("select * from college");
$data2=mysql_query("select * from college");



?>
<div id="psk1">
<ul>
<li><a>College Finder</a></li>
<li><a id="srshr">Search</a>
</li>
<li><a id="acadhr">Compare</a>

</li>
<li><a id="examhr">Popular Comparison</a></li>
<li><a href="fee.php" target="_blank">Contact Us</a></li>

<li><a href="logout.php" >Logout</a></li>
</ul>

</div>




<div id="srs"><br />
Search by Name:
<input type="text" name="name" id="name" placeholder="enter name" />
<button onclick="ajaxFunction1()">Search</button>
Search by location:
<input type="text" name="location" id="location" placeholder="enter location" />
<button onclick="ajaxFunction2()">Search</button>
Search by fees:

<input type="range" min="10000" max="200000" step="20000" name="fee" onchange="showValue(this.value)"/><span id="range"></span>
<button onclick="ajaxFunction3()">Search</button>
<br /></br>
Search by type:
<input type="text" id="type" name="type">

<button onclick="ajaxFunction4()">Search</button>
Search by Average Placements:

<input type="range" min="300000" max="6000000" step="100000" name="place" onchange="showValue2(this.value)"/>
<span id="range2"></span>
<button onclick="ajaxFunction5()">Search</button>
<br /></br>
<div id="ajaxDiv"></div>
</div>
<div id="acad">

<center><h1>Compare Colleges</h1>
Select college 
<select id="col1">
<?php while($row=mysql_fetch_array($data))
{
	?>
<option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
<?php } ?>
</select>
Select college
<select id="col2">
<?php while($row2=mysql_fetch_array($data2))
{
	?>
<option value="<?php echo $row2['name'];?>"><?php echo $row2['name'];?></option>
<?php } ?>
</select>
<button onclick="ajaxFunctioncompare()">Compare</button>
<div id="ajaxDiv2"></div>
</center>
</div>


<div id="exam"><center>
<h1>Top Comparison</h1></center>



</div>

</body>
</html>

