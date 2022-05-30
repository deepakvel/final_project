<?php
ob_start();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>
<div id="header">
<div id="header_txt">REFORMATION BASED PASSWORD SCHEME
</div>
<div id="header_menu">
<!--<pre><a href="#">Home</a> | <a href="#">Portfolio</a> | <a href="#">Services</a> | <a href="#">Aboutus</a> | <a href="#">Contactus</a></pre>--> 
</div>
</div>
<form name="login" action="login_process.php" method="post">
<div id="login">
<table border="0" cellpadding="0" cellspacing="0" width="1000">
	<tr>
		<td width="175"></td>
		<td width="400" valign="top"><table align="left" cellpadding="5" cellspacing="5" border="0">
		<tr><td height="10"></td></tr>
<tr align="center"><td colspan="3"><strong style="font-size:18px;">Login Form</strong></td></tr>
<tr><td height="10"></td></tr>
<tr><td><strong>Username</strong></td><td>:</td><td><input type="text" value="" name="uname" size="30" id="txt"/></td></tr>
<tr><td><strong>Userid</strong></td><td>:</td><td><input type="text" value="" name="uid" size="30" id="txt"/></td></tr>
<tr><td><strong>Password</strong></td><td>:</td><td><input type="submit" value="Choose Password" name="submit" style="font-weight:bold; width:180px; height:25px;"/></td></tr>
<tr align="center"><td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="register.php"><input type="button" name="Register" value="Register"  style="font-weight:bold;"/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="" value="Reset"  style="font-weight:bold;"/></td></tr>
</table></td>
		<td><img src="image/memberlogin.jpg" width="425" height="314" /></td> 	
	</tr>
</table>

</div>
</form>
<div id="footer">
<!--<pre><a href="#">Home</a> | <a href="#">Portfolio</a> | <a href="#">Services</a> | <a href="#">Aboutus</a> | <a href="#">Contactus</a></pre> 
--></div>
</center>
</body>
</html>
