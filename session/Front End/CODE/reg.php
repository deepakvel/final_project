<?php
ob_start();
session_start();
include "config.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Index</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>
<div id="header">
<div id="header_txt">REFORMATION BASED PASSWORD SCHEME</div>
<div id="header_menu">
<pre><!--<a href="#">Home</a> | <a href="#">Portfolio</a> | <a href="#">Services</a> | <a href="#">Aboutus</a> | <a href="#">Contactus</a-->></pre> 
</div>
</div>
<div id="container">
<form action="" name="register" method="post">
<table border="0" cellpadding="0" cellspacing="0">
<tr><td height="20"></td></tr>
<tr align="center"><td colspan="3">REGISTRATION FORM</td></tr>
<tr><td height="20"></td></tr>
<tr><td>Firstname</td><td>:</td><td><input type="text" name="fname" value="" /></td></tr>
<tr><td height="10"></td></tr>
<tr><td>Lastname</td><td>:</td><td><input type="text" name="lname" value="" /></td></tr>
<tr><td height="10"></td></tr>
<tr><td>Username</td><td>:</td><td><input type="text" name="uname" value="" /></td></tr>
<tr><td height="10"></td></tr>
<?php
$count++;
?>
<tr><td>Userid</td><td>:</td><td><input type="text" name="uname" value="<?php echo $count; ?>" /></td></tr>
<tr><td height="10"></td></tr>
<tr><td>Generate Password</td><td>:</td><td><a href="password.php"><input type="button" name="pass" value="Click Here" /></a></td></tr>
<tr><td height="10"></td></tr>
<tr><td>Your Password</td><td>:</td><td><input type="text" name="alpha" value="" /></td></tr>
<tr><td height="10"></td></tr>
<tr><td>Generate Color Password</td><td>:</td><td><a href="color.php"><input type="button" name="color" value="Click Here" /></a></td></tr>
<tr><td height="10"></td></tr>
<tr><td>Your Color Password</td><td>:</td><td><input type="text" name="color_pass" value="" /></td></tr>
<tr><td height="10"></td></tr>
<tr><td>Email</td><td>:</td><td><input type="text" name="email" value="" /></td></tr>
<tr><td height="10"></td></tr>
<tr><td>Mobile No.</td><td>:</td><td><input type="text" name="mobile" value="" /></td></tr>
<tr><td height="10"></td></tr>
<tr align="center"><td height="28" colspan="3"><input type="submit" value="Submit"  name="submit"/>&nbsp;&nbsp;&nbsp;<a href="index.php"><input type="button" name="back" value="Back" /></a></td></tr>
</table></form>
</div>
<div id="footer">
<!--<pre><a href="#">Home</a> | <a href="#">Portfolio</a> | <a href="#">Services</a> | <a href="#">Aboutus</a> | <a href="#">Contactus</a></pre> 
--></div>
</center>
</body>
</html>
