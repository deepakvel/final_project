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
<form name="transaction" action="" method="post">
<tr align="center"><td colspan="3">TRANSACTION DETAILS</td></tr>
<tr><td height="20"></td></tr>
<tr align="center"><td colspan="3"><?php echo $_GET['msg'];?></td></tr>
<tr><td height="20"></td></tr>
<tr><td>Depositer Account No</td><td>:</td><td><input type="text" name="daccount" value="" /></td></tr>
<tr><td height="20"></td></tr>
<tr><td>Depositer  PIN</td><td>:</td><td><input type="password" name="pin" value="" /></td></tr>
<tr><td height="20"></td></tr>
<tr><td>Borrower Account</td><td>:</td><td><input type="text" name="baccount" value="" /></td></tr>
<tr><td height="20"></td></tr>
<tr><td>Amount</td><td>:</td><td><input type="text" name="amount" value="" /></td></tr>
<tr><td height="20"></td></tr>
<tr><td>Borrower Mobile No</td><td>:</td><td><input type="text" name="bmobile" value="" /></td></tr>
<tr><td height="20"></td></tr>
<tr align="center"><td colspan="3"><input type="submit" name="submit" value="Transfer" />&nbsp;&nbsp;<a href="inner.php"><input type="button" value="Back"  /></a>&nbsp;&nbsp;<a href="view.php"><input type="button" value="View"  /></a></td></tr></form></table>
<p>&nbsp;</p>
</div>
<div id="footer">
</div>
</center>
</body>
</html>
<?php
include "config.php";
if(!empty($_POST['daccount'])&&isset($_POST['submit']))
{
$daccount=$_POST['daccount'];
$pin=$_POST['pin'];
$amount=$_POST['amount'];
$baccount=$_POST['baccount'];
$bmobile=$_POST['bmobile'];
$name=$_SESSION['uid'];
$con=mysql_query("select * from transaction where name='$name' and account='$daccount' and pin='$pin'");
$count=mysql_num_rows($con);
if($count==1)
{
$row=mysql_fetch_array($con);
$amt=$row['amount'];
$re_amount=$amt-$amount;
$sql=mysql_query("update transaction set account='$daccount',pin='$pin',amount='$re_amount',receiver='$baccount',amt='$amount'where name='$name'")or die(mysql_error());
if($sql)
{
$name=$_SESSION['uid'];
$sql1=mysql_query("insert into transaction_balance(account,pin,amount,receiver,amt,name)values('$daccount','$pin','$re_amount','$baccount','$amount','$name')")or die(mysql_error());
//echo "<meta http-equiv='refresh' content='0;url=http://ubaid.tk/sms/sms.aspx?uid=9994915435&pwd=8331&msg=The amount of Rs $amount has been deposited in your account from the account no $daccount&phone=$bmobile&provider=way2sms'>";

echo "<script>alert('Successfull Transaction:Thank You');</script>";
}
}
else
{
$msg="You cannot Transfer Money From Another Account";
echo "<meta http-equiv='refresh' content='0;url=transaction.php?msg=$msg'>";
}
$conn=mysql_query("select * from transaction where account='$baccount' and name!='$name'") or die(mysql_error());
$count1=mysql_num_rows($conn);
if($count1==1)
{
$row1=mysql_fetch_array($conn);
$re_amount1=($row1['amount'])+($amount);
$data=mysql_query("update transaction set amount='$re_amount1' where account='$baccount'") or die(mysql_error());
}
//echo "<meta http-equiv='refresh' content='0;url=transfer.php'>";
}
?>