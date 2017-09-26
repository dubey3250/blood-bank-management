<?php
error_reporting(0);
$m=$_REQUEST['m'];
$msg=$_REQUEST['msg'];
?>
<html>
<head>
<style>
input[type=text],input[type=date], select {
    width: 100%;
    padding: 6px 12px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit],input[type=button] {
    width: 100%;
    background-color: hsla(0, 100%, 30%, 0.8);
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover,input[type=button]:hover {
    background-color:  red;
}
.form{

 border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	width:auto;
	
	
}
.outer
{
border-radius: 5px;
    background-color: rgb(128,128,128);
    padding: 10px;
	width:330px;
	margin-left:33.33%;
	
}
.header
{
  width:100%;
  height:1%;
  background-color:rgba(255, 0, 0, 0.8);
  
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
	
    }
li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
#part2 
{
	height:100px; 
	
	display:inline-block;
	float:left;
}
div.polaroid:hover
 {
   background-color:white;
 }
 div.polaroid {
  width: 20%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
  padding:20px;
  background-color:white;
  float:left;
  
}

div.container {
  text-align: center;
  padding: 10px 10px;

  }
   .space
  {
    width:20px;
	float:left;
  }
  .img{
  margin-left:10%;
  }
  .message
  {
    width:100%;
	height:100px;
	background-color:#c3dce0;
	margin-top:400px;
	text-align:center;
	padding:10px;
	
  }
  .txt
  {
    font-Size:20px;
	color:red;
	
  }
  #footer{
  clear:both;
  }
  .background-dark
  {
    background-color:#850000;
  }
   .footer-content{
        padding:15px 0px 5px 0px;
		color:white;
		font-size:20px;
    }
	.box
	{
	  padding:20px;
	  
	}
	.contain
	{ 
	   padding:20px;
	   width:100%;
	   height:auto;
	   background-color:white;
	   float:left;
	}
</style>
</head>
<body>
<img src="mylogo.jpg" width="100%">
<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="news.php">News</a></li>
  <li><a href="Doner.php">Donner</a></li>
  <li><a href="customer.php">Customer</a></li>
  <li><a href="registration.php" >SignUp</a></li>
  <li ><a href="login.php">Login</a></li>
 
    </div>
  </li>
</ul>
<div class="header">
</div>
<div id="part2">
<div style="max-width:100% ">
<img class="slides" src="top.jpg" style="width:100%">
<img class="slides" src="top2.jpg" style="width:100%">
<img class="slides" src="top3.jpg" style="width:100%">
<img class="slides" src="top5.jpeg" style="width:100%">
<img class="slides" src="top4.jpg" style="width:100%">
<img class="slides" src="top6.jpg" style="width:100%">
<img class="slides" src="top7.jpg" style="width:100%">

</div>
<script>
var myIndex = 0;
carousel();
function carousel() 
{
var i;
var x = document.getElementsByClassName("slides");
for (i = 0; i < x.length; i++) 
{
x[i].style.display = "none";
}
myIndex++;
if (myIndex > x.length) 
{
	myIndex = 1
}
x[myIndex-1].style.display = "block";
setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>
<div class="header">
</div>
<div class="contain">
<div class="polaroid">
<img src="amma.jpg" width="200px" height="200px"  class="img"/>
<div class="container">
    <p><b>Chief Minister's Message</b></p>
<p>
The Goal of blood safety programme is to provide safe blood and blood products to all the needy patients</p>
  </div>
 </div>
 <div class="space">&nbsp</div>
 <div class="polaroid">
<img src="stock.jpg"  width="200px" height="200px"  class="img"/>
<div class="container">
    <p><b>Stock Management</b></p>

<p>The Blood banks can update their Blood stock on daily basis and view the upto date stock status online </p>
  </div>
 </div>
 <div class="space">&nbsp</div>
 <div class="polaroid" >
<img src="bloodfact.jpg" width="200px" height="200px" class="img"/>
<div class="container">
    <p><b>Blood Donation Facts</b></p>

<p>Donated Blood can save upto 4 lives. Register today as a Blood Donor. You don't have to be a doctor to save lives</p>
  </div>
 </div>
  <div class="space">&nbsp</div>
 <div class="polaroid">
 <?php
	if($m==1)
	{
?>
<span style="color:red;">You have successfully submitted. </span>
<?php	
	}
 ?>
  <?php
	if($msg==1)
	{
?>
<span style="color:red;">Invalid userid or password. </span>
<?php	
	}
 ?>
 <div class="form">
 <form name="login" method="POST" action="logincode.php">
<table>
<tr>
<td>Username</td>
<td><input type="text" name="uid"/></td>
</tr>
<tr>
<td>password</td>
<td><input type="text" name="psw"/></td>
</tr>
<tr><td><input type="submit" /></td>
<td><input type="button" value="sign up" onclick="location.href='registration.php'"></td>
</tr>

</table>
</form>
 </div>
 </div>
 </div>
 <div class="header">
</div>

 <div class="message">
 <p><b>Some one saved my life, was it you</b></p>
 <p class="txt"><b>DONATE BLOOD SAVE MORE LIVES</b></p>
 </div>
 <footer class="background-dark text-grey" id="footer">
            <div class="footer-content">
                
                        
                                        <strong>&nbsp;Address:</strong> <p>Vit University
                                        <br>Vellore-632014,Tamilnadu, India</p>
          
                                   
                           
                      
                                <img src="vitLogo.png" width="100px" height="100px"></div>
                           
            
                            <p class="footer-content">&copy; 2017 Blood Management System. All Rights Reserved.Vit university Vellore-632014</p>
                       
                </div>
            </div>
        </footer>

</body>
</html>
