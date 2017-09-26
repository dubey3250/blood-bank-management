<?php
$blood_bag_no=$_POST['blood_bag_no'];
$employee_id=$_POST['employee_id'];
$quantity=$_POST['quantity'];
$blood_type=$_POST['blood_type'];
$desc=$_POST['desc'];
$order=$_POST['order'];

mysql_connect('localhost','root','');
mysql_select_db("hackathon");
$query="insert into blood_inventory(blood_bag_no,employee_id,quantity,blood_type,desc,order) 
values('$blood_bag_no','$employee_id','$quantity','$blood_type','$desc','$order')";
mysql_query($query);
header("location:profile2.php?m=1");
?>