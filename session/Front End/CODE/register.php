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
<div id="header_menu" style="margin-top:-20px;">

</div>
</div>
<div id="container">
<form action="" name="register" method="post">
<table border="0" cellpadding="0" cellspacing="0" width="900">
	<tr>
		<td width="400"><table border="0" cellpadding="0" cellspacing="0">
<tr><td height="20"></td></tr>
<tr align="center"><td colspan="3"><strong>REGISTRATION FORM</strong></td></tr>
<tr><td height="20"></td></tr>
<tr><td><strong>Firstname</strong></td><td>:</td><td><input type="text" name="fname" value="" /></td></tr>
<tr><td height="10"></td></tr>
<tr><td><strong>Lastname</strong></td><td>:</td><td><input type="text" name="lname" value="" /></td></tr>
<tr><td height="10"></td></tr>
<tr><td><strong>Username</strong></td><td>:</td><td><input type="text" name="uname" value="" /></td></tr>
<tr><td height="10"></td></tr>
<tr><td><strong>Email</strong></td><td>:</td><td><input type="text" name="email" value="" /></td></tr>
<tr><td height="10"></td></tr>
<tr><td><strong>Mobile No.</strong></td><td>:</td><td><input type="text" name="mobile" value="" /></td></tr>
<tr><td height="10"></td></tr>
<?php
include "config.php";
$sql1=mysql_query("select * from register");
if(mysql_num_rows($sql1)==0)
{
?>
<tr><td><strong>Userid</strong></td><td>:</td><td><input type="text" name="uid" value="1" /></td></tr>
<?php
}
else
{
while($row1=mysql_fetch_array($sql1))
{
$id=$row1['id'];
$id1=$id+1;
}
?>
<tr><td><strong>Userid</strong></td><td>:</td><td><input type="text" name="uid" value="<?php echo $id1; ?>" /></td></tr>
<?php
}
?>
<tr><td height="10"></td></tr>
<tr><td><strong>Generate Password</strong></td><td>:</td><td><input type="submit" name="pass" value="Click Here" /></td></tr>
<tr><td height="20"></td></tr>
</table></td>
		<td>
		<img src="image/registration.jpg" width="302" height="294" />
		</td>
	</tr>
</table>
</form>
</div>
<div id="footer">
<!--<pre><a href="#">Home</a> | <a href="#">Portfolio</a> | <a href="#">Services</a> | <a href="#">Aboutus</a> | <a href="#">Contactus</a></pre> 
--></div>
</center>
</body>
</html>
<?php
include "config.php";
if((isset($_POST['pass']))&&(!empty($_POST['uname'])))
{
$_SESSION['fname']=$fname=$_POST['fname'];
$_SESSION['lname']=$lname=$_POST['lname'];
$_SESSION['uname']=$uname=$_POST['uname'];
$_SESSION['email']=$email=$_POST['email'];
$_SESSION['mobile']=$mobile=$_POST['mobile'];
$_SESSION['uid']=$uid=$_POST['uid'];
$sql=mysql_query("insert into register(fname,lname,uname,email,mobile,uid)values('$fname','$lname','$uname','$email','$mobile','$uid')");
header("location:password.php");
}
?>
