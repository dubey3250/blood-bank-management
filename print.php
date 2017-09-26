<?php
error_reporting(0);
$m=$_REQUEST['m'];
?>
<html>
<head>
<style>
#u
{
	height:60px;
	width:200px;
	margin:0px auto;
	margin-top:300px;
}
</style>
</head>
<body>
<div id="u">
	 <?php
	if($m==1)
	{
?>
<span style="color:red;">You have successfully registerd to donate your blood. thankyou! Good Luck !</span>
<?php	
	}
 ?>
<a href="show.php"><input type="button" style="text-decoration:none;"value="Print your detail"></a>
</div>
<table>
</body>
</html>