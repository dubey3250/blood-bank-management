<?php
session_start();
$userid=$_POST['uid'];
//echo $email;
//echo "<br/>";

$password=$_POST['psw'];
//echo $password;
//echo "<br/>";

mysql_connect('localhost','root','');
mysql_select_db("hackathon");
$query="select *from regist where userid='$userid' and password='$password'";
$res=mysql_query($query);

if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	
	$_SESSION['user']=$userid;
	$_SESSION['password']=$password;
	header("location:user.php");
}
else
{
	header("location:login.php? msg=1");
}
?>