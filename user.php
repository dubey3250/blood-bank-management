<?php
session_start();
if($_SESSION['user']=="")
{
	session_destroy();
	header("location:index.php");
}
?>
<html>
<head>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 10px 5px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
	
}
div
{
position:absolute;
	left:32%;
	top:45%;
}

.button3 {
    background-color: white;
    color: black;
    border: 2px solid #f44336;
}

.button3:hover {
    background-color: #f44336;
    color: white;
}
footer{
  position:absolute;
  bottom:0;
  width:100%;
  
  }
  .background-dark
  {
    background-color:#850000;
	
  }
   .footer-content{
        padding:15px 0px 5px 0px;
		color:white;
		font-size:15px;
		
    }


</style>
</head>
<body>
<img src="myLogo.jpg" width="100%"/>
<a href="logout.php" style="color:blue;text-decoration:none;font-size:25px;">Logout</a>
<div>
<input class="button button3" type="button" Value="Donate Blood" />
<input class="button button3" type="button" Value="Need Blood"/>
<input class="button button3" type="button" Value=" View Record"/>
</div>
<footer class="background-dark text-grey" >
            
			<p class="footer-content">&copy; 2017 Blood Management System. All Rights Reserved.Vit university Vellore-632014</p>
            
 </footer>
</body>
</html>