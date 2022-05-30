<?php
ob_start();
session_start();
$_SESSION['id']=$id=$_GET['id'];
$uid=$_SESSION['uid'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Index</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript">
function sample()
{
window.history.go(-1);
}
</script>
</head>
<body>
<center>
<div id="header">
<div id="header_txt">REFORMATION BASED PASSWORD SCHEME</div>
<div id="header_menu" style="margin-top:-20px;">
</div>
</div>
<div id="container">
<?php
include "config.php";
$uid=$_SESSION['uid'];
$id=$_GET['id'];

$sql6=mysql_query("select * from color where uid='$uid'")or die(mysql_error());
$count=mysql_num_rows($sql6);
if($count>=7)
{
	$sa=mysql_query("select * from color_password,color_pass where color_pass.uid='$uid' and color_pass.color=color_password.color1 and color_pass.color_values=color_password.color2");
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br /><br />


<?php
echo "<td><span style='font-size:14px; padding-left:130px;'>
Your Password is </span> </td>";
while($rs=mysql_fetch_array($sa))
{
$pass=$rs['color_val'];

echo "<td>".$pass."</td>";
}
 echo "
<a href='index.php'><input type='button' value='Login'></a><br />
<br />
";
echo "<script type='text/javascript'>alert('More than 7 characters should not be accepted');</script>";
}if($count<7)
{
if($id==1)
{
$uid=$_SESSION['uid'];
$sql1=mysql_query("insert into color(uid,color)values('$uid','3')")or die(mysql_error());
if($sql1)
{
echo "<strong>CHOOSE COLOR</strong>";
header("location:color_process3_1.php");
}
}



if($id==2)
{
$uid=$_SESSION['uid'];
$sql1=mysql_query("insert into color(uid,color)values('$uid','3')")or die(mysql_error());
if($sql1)
{
echo "<strong>CHOOSE COLOR</strong>";
header("location:color_process3_1.php");
}
}


if($id==3)
{
$uid=$_SESSION['uid'];
$sql1=mysql_query("insert into color(uid,color)values('$uid','3')")or die(mysql_error());
if($sql1)
{
echo "<strong>CHOOSE COLOR</strong>";
header("location:color_process3_1.php");
}
}


if($id==4)
{
$uid=$_SESSION['uid'];
$sql1=mysql_query("insert into color(uid,color)values('$uid','3')")or die(mysql_error());
if($sql1)
{
echo "<strong>CHOOSE COLOR</strong>";
header("location:color_process3_1.php");
}
}


if($id==5)
{
$uid=$_SESSION['uid'];
$sql1=mysql_query("insert into color(uid,color)values('$uid','3')")or die(mysql_error());
if($sql1)
{
echo "<strong>CHOOSE COLOR</strong>";
header("location:color_process3_1.php");
}
}


if($id==6)
{
$uid=$_SESSION['uid'];
$sql1=mysql_query("insert into color(uid,color)values('$uid','3')")or die(mysql_error());
if($sql1)
{
echo "<strong>CHOOSE COLOR</strong>";
header("location:color_process3_1.php");
}
}

if($id==7)
{
$uid=$_SESSION['uid'];
$sql1=mysql_query("insert into color(uid,color)values('$uid','3')")or die(mysql_error());
if($sql1)
{
echo "<strong>CHOOSE COLOR</strong>";
header("location:color_process3_1.php");
}
}






}









?>
</div>
<div id="footer">
<!--<pre><a href="#">Home</a> | <a href="#">Portfolio</a> | <a href="#">Services</a> | <a href="#">Aboutus</a> | <a href="#">Contactus</a></pre> 
--></div>
</center>
</body>
</html>