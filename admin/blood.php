<!DOCTYPE html>
<html>
<head>
	<title>doctor page</title>
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
	width:auto;
	
	
}


form{
	BACKGROUND-COLOR: RGB(125,150,175);
	text-align: center;
	width:50%;
	border-radius:10px;
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
<h1 style = "color:DARKBLUE";><CENTER>CUSTOMER REQUEST FORM</CENTER></H1>
	<HR>
</HR>
<BODY>
<header><img src="myLogo.jpg" width=100%></header>
<div>
	<CENTER>
<form action="bloodcode.php" method="post">
	<TABLE>
		<TR>
	<TD>doner_id</TD><TD><INPUT TYPE = "TEXT" NAME = "d_id"  MAXIMUM LENGTH = "30"></TD>
</TR><BR>
<TR>
	<TD>plasma</TD><TD><INPUT TYPE = "TEXT" NAME = "plasma"/></TD>
</TR>
<TR>
	<TD>hemogblobin</TD><TD><INPUT TYPE = "TEXT" NAME = "hemoglobin"></TD>
</TR>
	<TR>
		<TD>red blood cell</TD><TD><INPUT TYPE = "TEXT" NAME = "red_blood_cell" /></TD>
	</TR>
	<TR>
		<TD>white blood cell</TD><TD><INPUT TYPE = "TEXT" NAME = "white_blood_cell"/></TD>
	</TR>
	<TR>
		<TD>blood type</TD><TD><INPUT TYPE = "TEXT" NAME = "blood_type"/></TD>
	</TR>
	<TR>
		<TD>cost</TD><TD><INPUT TYPE = "TEXT" NAME = "cost"/></TD>
	</TR>
	</table><br>
	<INPUT TYPE = "SUBMIT" ONCLICK = "VALIDATE();"><br><br>
</CENTER>
</FORM>
</div>
<footer class="background-dark text-grey" >
            
			<p class="footer-content">&copy; 2017 Blood Management System. All Rights Reserved.Vit university Vellore-632014</p>
            
 </footer>
</BODY>
</HTML>
