<?php
ob_start();
session_start();
error_reporting(0);
$uid=$_SESSION['uid'];
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
<a href="inner.php">Deposit</a> | <a href="transaction.php">Transaction</a> |<a href="balance.php">Balance</a>| <a href="logout.php">Logout</a>
</div>
</div>
<div id="container">

<table border="0" cellpadding="0" cellspacing="0" width="400">
<form name="balance" action="" method="post">
<tr align="center"><td colspan="3">CHECK YOUR BALANCE</td></tr>
<tr><td height="20"></td></tr>
<tr align="center"><td colspan="3"><?php echo $_GET['msg']; ?></td></tr>
<tr><td height="20"></td></tr>
<tr><td>Account NO</td><td>:</td><td><input type="text" name="account" value="" /></td></tr>
<tr><td height="20"></td></tr>
<tr><td>Pin</td><td>:</td><td><input type="password" name="pin" value="" /></td></tr>
<tr><td height="20"></td></tr>
<tr align="center"><td colspan="3"><?php echo $_GET['amount']; ?></td></tr>
<tr><td height="20"></td></tr>
<tr align="center"><td colspan="3"><input type="submit" name="submit" value="Check" />&nbsp;&nbsp;<a href="inner.php"><input type="button" value="Back" /></a>&nbsp;&nbsp;</td></tr></form></table>
<p>&nbsp;</p>


<!--<form action="#" name="register" method="post">
<table border="0" cellpadding="0" cellspacing="0">
<tr><td height="20"></td></tr>
<tr align="center"><td colspan="3">ACCOUNT CREATION</td></tr>
<tr><td height="20"></td></tr>
<tr><td>Account No</td><td>:</td><td><input type="text" name="account" value="" /></td></tr>
<tr><td height="10"></td></tr>
<tr><td>PIN</td><td>:</td><td><input type="password" name="pin" value="" /></td></tr>
<tr><td height="10"></td></tr>
<tr><td>Amount</td><td>:</td><td><input type="text" name="amount" value="" /></td></tr>
<tr><td height="10"></td></tr>
<tr><td height="10"></td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" name="submit" value="Submit" />&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Reset" /></td></tr>
<tr><td height="20"></td></tr>
</table></form>-->
</div>
<div id="footer">
<!--<pre><a href="#">Home</a> | <a href="#">Portfolio</a> | <a href="#">Services</a> | <a href="#">Aboutus</a> | <a href="#">Contactus</a></pre> 
--></div>
</center>
</body>
</html>
<?php
include "config.php";
if(isset($_POST['submit'])&&!empty($_POST['account']))
{
$name=$_SESSION['uid'];
$account=$_POST['account'];
$pin=$_POST['pin'];
$con=mysql_query("select amount from transaction where account='$account' and pin='$pin' and name='$name'")or die(mysql_error());
$count=mysql_num_rows($con);
if($count)
{
$row=mysql_fetch_array($con);
$amount=$row['amount'];
if($amount==0)
{
$msg="You have Zero balance";
header("location:balance.php?amount=$msg");
}
else
header("location:balance.php?amount=$amount");
}
else
{
$msg="You have no authority to view this account";
echo "<meta http-equiv='refresh' content='0;url=balance.php?msg=$msg'>";
}
}
?>