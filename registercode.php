<?php
$userid=$_POST['uid'];
$password=$_POST['pd'];
$name=$_POST['sname'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$dob=$_POST['dob'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
mysql_connect('localhost','root','');
mysql_select_db("hackathon");
$query="insert into regist(userid,password,name,fname,mname,dob,mobile,address) 
values('$userid','$password','$name','$fname','$mname','$dob','$mobile','$address')";
mysql_query($query);
header("location:index.php?m=1");
?>