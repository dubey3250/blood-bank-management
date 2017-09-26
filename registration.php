<html>
<head>
<style>
input[type=text],input[type=date],input[type=password], select {
    width: 100%;
    padding: 6px 12px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit],input[type=Reset] {
    width: 100%;
    background-color: hsla(0, 100%, 30%, 0.8);
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover,input[type=Reset]:hover {
    background-color: red;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	width:350px;
	
}
.outer
{
border-radius: 5px;
    background-color: rgb(128,128,128);
    padding: 10px;
	width:390px;
	margin-left:33.33%;
	
}
span
{color:red;
}
footer{
  position:relative;
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
<form name="register" method="post" action="registercode.php">
<div class="outer">
<div>

<table>
<tr>
<td>User Id<span>*</span></td>
<td><input type="text" name="uid" required></td>
</tr>
<td>password<span>*</span></td>
<td><input type="password" name="pd" required></td>
</td>
<tr>
<td>Confirm-password<span>*</span></td>
<td><input type="password" name="cpd" required></td>
</td>
</tr>
<tr>
<td> Name <span>*</span></td>
<td><input type="text" name="sname" required></td>
</tr>
<tr>
<td> Father's name <span>*</span></td>
<td><input type="text" name="fname" required></td>
</tr>
<tr>
<td>Mother's name <span>*</span></td>
<td><input type="text" name="mname" required></td>
</tr>
<tr>
<td>Date of birth <span>*</span></td>
<td><input type="date" name="dob"required></td>
</tr>
<tr>
<td>Mobile<span>*</span></td>
<td><input type="text" name="mobile" required></td>
</tr>
<tr>
<td>Address<span>*</span></td>
<td><input type="text" name="address" required></td>
</tr>

<tr> 
<td><input type="submit" value="Submit"/></td>
<td><input type="reset" value="Reset"/></td>
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