<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>

<!--	<style>
body{
    margin: 0;
    padding: 0;
    font-family: arial;
    color: #2C2C2C;
    font-size: 14px;
}
h1 a{
    //color:#2C2C2C;
    text-decoration:none;
}
h1 a:hover{
    text-decoration:underline;
}
a{
    //color: #E6E6E6;
}
.wrapper{
    margin: 0 auto;
    width: 1000px;
}
.mytable{
    width: 700px;
    margin: 0 auto;
    border:2px dashed #17A3F7;
    padding: 20px;
}
body{
 // background-image: url("12.jpg");
 color:white;
}
h1{
  color: white;
}
</style>
-->

           <!--sample login-->
</head>
<body>
<div>
<table width="500" border="1" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
			<tr>
				<form name="form1" method="post" action="checklogin.php">
				<td>
			<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
			<tr>
<td colspan="3"><center><strong>Member Login </strong></center></td>
</tr>
<tr>
<td width="78">Email Id</td>
<td width="6">:</td>
<td width="294"><input  type="text" name="email" id="email"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="password" type="password" id="password"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</div>
</body>
</html>
