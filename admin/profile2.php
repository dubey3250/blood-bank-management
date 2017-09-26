<?php
error_reporting(0);
$m=$_REQUEST['m'];
?>
<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php");
//echo "<br/>";
}
?>

<html>
<head>
<link href="style6.css" rel="stylesheet" type="text/css"/>
</head>
<body bgcolor="lightblue">
<span style="font-size:80px; font-family:Script MT Bold;"><?php echo $_SESSION['admin'];?></span><br/><br/>
<!--<span style="font-size:30px; font-family:Script MT Bold;">to see all the registration data</span>
<a href="show.php"><span style="font-size:35px; font-family:Script MT Bold;">Click here.</span></a>-->

<center><br/><br/>
  <?php
	if($m==1)
	{
?>
<span style="color:red;">Successfully inserted </span>
<?php	
	}
 ?>
			<div id="menu2">
			      	<ul>
					
					
					<a href="regemp.php"><li><span style="font-size:20px;color:red;">add employee detail</span></li></a>
					<a href="show.php"><li><span style="font-size:20px;color:red;">doner's detail</span></li></a>
					<a href="regbloodinventory.php"><li><span style="font-size:20px;color:red;">add Blood Inventory</span></li></a>
					<a href="blood.php"><li><span style="font-size:20px;color:red;">add blood details</span></li></a>
				
				</ul>
			</div>
			
				
		</center>

</body>
</html>
