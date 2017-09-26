
<!DOCTYPE html>
<html>
<head>
	<title>doctor page</title>
</head>
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

<h1 style = "color:DARKBLUE";><CENTER>DONOR APPLICATION FORM</CENTER></H1>
	<HR>
</HR>
<BODY>
<header><img src="myLogo.jpg" width=100%></header>
	<CENTER>
	<div>
<form action="donercode.php" method="post">
	<TABLE>
		<TR>
	<TD>NAME.</TD><TD><INPUT TYPE = "TEXT" NAME ="name"  MAXIMUM LENGTH = "20"></TD>
</TR><BR>
<TR>
<TD>AGE</TD><TD><INPUT TYPE = "age" NAME ="age" ></TD>
</TR>
<TR>
<TD>DISEASE.</TD><TD><INPUT TYPE = "RADIO" NAME = "disease" VALUE ="yes">YES
<INPUT TYPE = "RADIO" NAME = "disease" VALUE = "no">NO
</TD>
	</TR>
	<TR>
		<TD>GENDER</TD><TD><INPUT TYPE = "RADIO" NAME = "gender" VALUE = "male" CHECKED>MALE
		<INPUT TYPE = "RADIO" NAME = "gender" VALUE = "female">FEMALE
			<INPUT TYPE = "RADIO" NAME = "gender" VALUE = "other">OTHER</TD>
	</TR>
	<TR>
		<TD>QUANTITY</TD><TD><INPUT TYPE = "TEXT" NAME = "quantity" ></TD>
	</TR>
	<TR>
		<TD>P.ADDRESS</TD><TD><INPUT TYPE = "TEXT" NAME = "p_addr"></TD>
	</TR>
	<TR>
		<TD>CONT.NO</TD><TD><INPUT TYPE = "TEXT" NAME = "contact_no"/></TD>
	</TR>
	<TR>
		<TD>TYPE OF DONOR</TD><TD><INPUT TYPE = "TEXT" NAME = "d_type" /></TD>
	</TR>
	<TR>
		<TD>DATE OF DONATION</TD><TD><INPUT TYPE = "DATE" NAME = "date_of_donation" />
		</TD>
		</Tr>
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
