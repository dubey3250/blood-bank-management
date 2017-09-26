<?php
$d_id=$_POST['d_id'];
$plasma=$_POST['plasma'];
$hemoglobin=$_POST['hemoglobin'];
$red_blood_cell=$_POST['red_blood_cell'];
$white_blood_cell=$_POST['white_blood_cell'];
$blood_type=$_POST['blood_type'];
$cost=$_POST['cost'];


mysql_connect('localhost','root','');
mysql_select_db("hackathon");
$query="insert into blood(d_id,plasma,hemoglobin,red_blood_cell,white_blood_cell,blood_type,cost) 
values('$d_id','$plasma','$hemoglobin','$red_blood_cell','$white_blood_cell','$blood_type','$cost')";
mysql_query($query);
header("location:profile2.php?m=1");
?>