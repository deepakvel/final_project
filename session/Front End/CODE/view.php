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
<table border="0" cellpadding="0" cellspacing="0" width="700">
<tr align="center"><td colspan="3">TRANSACTION DETAILS</td></tr>
<tr><td height="20"></td></tr>
<tr align="center"><td colspan="3"><?php echo $_GET['msg'];?></td></tr>
<tr><td height="20"></td></tr>
<tr align="center"><td colspan="3">
<table border="1" cellpadding="10" cellspacing="10" width="700">
<tr><td><strong>Depositer Account No</strong></td><td><strong>Borrower Account No</strong></td><td><strong>Transfer Amount</strong></td><td><strong>Available Balance</strong></td></tr>

<?php
include "config.php";
$sab=mysql_query("select * from transaction_balance where name='$uid'");

while($r=mysql_fetch_array($sab))
{
$account=$r['account'];
$receiver=$r['receiver'];
$amount=$r['amount'];
$amt=$r['amt'];
echo "<tr><td>".$account."</td><td>".$receiver."</td><td>".$amt."</td><td>".$amount."</td></tr>";
}
?>
</table>
</td>
</tr>
</table>
</div>
<div id="footer">
<!--<pre><a href="#">Home</a> | <a href="#">Portfolio</a> | <a href="#">Services</a> | <a href="#">Aboutus</a> | <a href="#">Contactus</a></pre> 
--></div>
</center>
</body>
</html>
