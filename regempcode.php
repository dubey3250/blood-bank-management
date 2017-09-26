<?php
$emp_id=$_POST['emp_id'];
$emp_name=$_POST['emp_name'];
$contact=$_POST['contact'];
$qualification=$_POST['qualification'];
$salery=$_POST['salery'];
$emp_designation=$_POST['designation'];
$address=$_POST['address'];
mysql_connect('localhost','root','');
mysql_select_db("hackathon");
$query="insert into employee(emp_id,emp_name,contact_no,qualification,salery,employee_desc,address) 
values('$emp','$emp_name','$contact','$qualification','$salery','$emp_designation','$address')";
mysql_query($query);
header("location:profile2.php?m=1");
?>