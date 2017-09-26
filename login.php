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
div{

 border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	width:290px;
	
	
}
.outer
{
border-radius: 5px;
    background-color: rgb(128,128,128);
    padding: 10px;
	width:330px;
	margin-left:33.33%;
	
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
<header><img src="myLogo.jpg" width=100%></header>
<br>
<div class="outer">
<div>
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
<td><input type="button" value="sign up" onclick="location.href='registration.html'"></td>
</tr>

</table>
</form>
 </div>
 </div>
 <footer class="background-dark text-grey" >
            
			<p class="footer-content">&copy; 2017 Blood Management System. All Rights Reserved.Vit university Vellore-632014</p>
            
 </footer>
</body>
</html>
