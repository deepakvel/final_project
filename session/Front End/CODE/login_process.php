<?php
ob_start();
session_start();
require("config.php");
$_SESSION['user']=$name=$_POST['uname'];
$_SESSION['uid']=$uid=$_POST['uid'];
if(isset($_POST['submit']))
{
 $eee=" SELECT * FROM register WHERE uname='$name' AND uid='$uid'";
 $result=mysql_query("$eee") or die(mysql_error());
 if(mysql_num_rows($result)==1)
{
echo "<meta http-equiv='refresh' content='0;url=login_password.php'>";
  }
else
{
$msg1= "Invalid login name or password.";
header("location:index.php?msg1='$msg1'");
 }
 }
?>