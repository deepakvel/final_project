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
<form action="#" name="register" method="post">
<table border="0" cellpadding="0" cellspacing="0">
<tr><td height="20"></td></tr>
<tr align="center"><td colspan="3">DEPOSIT MONEY</td></tr>
<tr><td height="20"></td></tr>
<?php
include "config.php";
$sab=mysql_query("select * from transaction where name='$uid'");
$count1=mysql_num_rows($sab);
if($count1>=1)
{
$r=mysql_fetch_array($sab);
$account=$r['account'];
$pin=$r['pin'];
}
?>
<tr><td>Account No</td><td>:</td><td><input type="text" name="account" value="<?php echo $account; ?>" /></td></tr>
<tr><td height="10"></td></tr>
<tr><td>PIN</td><td>:</td><td><input type="password" name="pin" value="<?php echo $pin; ?>" /></td></tr>
<tr><td height="10"></td></tr>
<tr><td>Amount</td><td>:</td><td><input type="text" name="amount" value="" /></td></tr>
<tr><td height="10"></td></tr>
<tr><td height="10"></td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" name="submit" value="Deposit" />&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Reset" /></td></tr>
<tr><td height="20"></td></tr>
</table></form>
</div>
<div id="footer">
<!--<pre><a href="#">Home</a> | <a href="#">Portfolio</a> | <a href="#">Services</a> | <a href="#">Aboutus</a> | <a href="#">Contactus</a></pre> 
--></div>
</center>
</body>
</html>
<?php
include "config.php";
if(!empty($_POST['account'])&&isset($_POST['submit']))
{
$account=$_POST['account'];
$pin=$_POST['pin'];
$amount1=$_POST['amount'];
$uid=$_SESSION['uid'];
/*$sql=mysql_query("select * from transaction where account='$account' and pin='$pin' and name='$uid'");
$row=mysql_fetch_array($sql);
$count=mysql_num_rows($sql);
if($count==1)
{
echo "<script>alert('Account Number Already Exist');</script>";
echo "<meta http-equiv='refresh' content='0;url=inner.php?msg=$msg'>";
}
else
{
$sql=mysql_query("select * from transaction where account='$account' and pin='$pin' and name='$uid'");
$row=mysql_fetch_array($sql);
$count=mysql_num_rows($sql);
if($count==1)
{
echo "<script>alert('Already You Have Account');</script>";
echo "<meta http-equiv='refresh' content='0;url=inner.php?msg=$msg'>";
}
else
{*/

$sab=mysql_query("select * from transaction where name='$uid'");
$count1=mysql_num_rows($sab);
if($count1==0)
{
$con=mysql_query("insert into transaction(account,pin,amount,name)values('$account','$pin','$amount1','$uid')")or die(mysql_error());
echo "<script>alert('Deposited Successfully');</script>";
echo "<meta http-equiv='refresh' content='0;url=inner.php?msg=$msg'>";
}
else
{
$r=mysql_fetch_array($sab);
$account=$r['account'];
$pin=$r['pin'];
$amount=$r['amount'];
$reamount=$amount1+$amount;
$c=mysql_query("update transaction set amount='$reamount' where account='$account' and pin='$pin' and name='$uid'") or die(mysql_error());
echo "<script>alert('Deposited Successfully');</script>";
echo "<meta http-equiv='refresh' content='0;url=inner.php?msg=$msg'>";

}

/*}
}
*/
}
?>