
<html>
<head>
<title>page</title>
<style>
body
{
	background-color:#2f4f4f;
}
#outer
{
margin-top:200px;
//margin-left:400px;
height:350px;
width:500px;
border:1px solid;
background:-webkit-linear-gradient(lightblue 18%,lightblue 88%);
}
</style>
</head>
<body>
<form action="code3.php" method="POST">
<center>
<div id="outer">
		<span style="font-size:40px; font-family:Old English Text MT;">Admin pannel</span><br/><br/>
		<span style="font-size:40px;">username</span> <input type="text" name="username" style="height:40px; width:200px;"/><br/><br/>
		<span style="font-size:40px;">password</span>  <input type="password" name="password" style="height:40px; width:200px;"/><br/><br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="login" style="height:40px; border-radius:10px; width:150px; background-color:blue;" />


</div>
</center>
</form>
</body>
</html>