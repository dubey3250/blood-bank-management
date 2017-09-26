<?php
mysql_connect('localhost','root','');
mysql_select_db("hackathon");
$query="select *from doner";
$res=mysql_query($query);

?>


<html>
<head>
<style>
tr
{
	height:70px;
	//width:250px;
	text-align:center;
}
td
{
	height:30px;
	width:250px;
	font-size:25px;
}
</style>
<script>
function printn()
{
	window.print();
}
</script>
</head>
<body style="background-color:silver;">

<table border="1" bgcolor="white" >
<tr>
      <th>doner_id</th>
	  <th>name</th>
	  <th>disease</th>
	  <th>date of donation</th>
	  <th>age</th>
	  <th>quantity</th>
	   <th>sex</th>
	   <th>address</th>
	    <th>type of doner</th>
	 </tr>   
 <?php  
   while($row=mysql_fetch_array($res,MYSQL_BOTH))
   {
	?>	
	<tr>
      <td ><?php echo $row['d_id'];?></td>
	  <td><?php echo $row['name'];?></td>
	  <td ><?php echo $row['disease'];?></td>
	  <td ><?php echo $row['date_of_donation'];?></td>
	<td ><?php echo $row['age'];?></td>
	<td ><?php echo $row['quantity'];?></td>
	 <td><?php echo $row['sex'];?></td>
	 <td ><?php echo $row['address'];?></td>
	 <td ><?php echo $row['type_of_doner'];?></td>
	 </tr> 
<?php	   
   }
?>

</body>
</html>