<?php
$name=$_POST['name'];
$age=$_POST['age'];
$disease=$_POST['disease'];
$gender=$_POST['gender'];
$quantity=$_POST['quantity'];
$p_addr=$_POST['p_addr'];
$contact_no=$_POST['contact_no'];
$d_type=$_POST['d_type'];
$date_of_donation=$_POST['date_of_donation'];
mysql_connect('localhost','root','');
mysql_select_db("hackathon");
$query="insert into doner (name,disease,date_of_donation,age,quantity,sex,address,con_detail,type_of_doner) 
values('$name','$disease','$date_of_donation','$age','$quantity','$gender','$p_addr','$contact_no','$d_type')";
mysql_query($query);
header("location:print.php?m=1");
?>