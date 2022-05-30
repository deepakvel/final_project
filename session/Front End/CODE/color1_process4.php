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

$sql6=mysql_query("select * from color1 where uid='$uid'")or die(mysql_error());
$count=mysql_num_rows($sql6);
if($count>=7)
{
	$column=array();
	$column1=array();
	$info=mysql_query("select * from color_password,color_pass where color_pass.uid='$uid' and color_pass.color=color_password.color1 and color_pass.color_values=color_password.color2");
while($row6 = mysql_fetch_array($info))
{
    $column[] = $row6['color_val'];
}
echo $a=$column[0];
echo $b=$column[1];
echo $c=$column[2];
echo $d=$column[3];
echo $e=$column[4];
echo $f=$column[5];
echo $g=$column[6];

$info1=mysql_query("select * from color_password,color_pass1 where color_pass1.uid='$uid' and color_pass1.color=color_password.color1 and color_pass1.color_values=color_password.color2");
while($row6 = mysql_fetch_array($info1))
{
    $column1[] = $row6['color_val'];
}
echo $a1=$column1[0];
echo $b1=$column1[1];
echo $c1=$column1[2];
echo $d1=$column1[3];
echo $e1=$column1[4];
echo $f1=$column1[5];
echo $g1=$column1[6];
if(($a==$a1)&&($b==$b1)&&($c==$c1)&&($d==$d1)&&($e==$e1)&&($f==$f1)&&($g==$g1))
{
echo "<br />";
?>
	<img src="image/thanks-786500.png" width="300" height="300" /><br /><br />
	<?php
	echo"<span style='padding-left:140px;'><strong>PASSWORD IS CORRECT</strong></span></td>";
	echo "<br /><br /><br />";
	  ?>
<form action="#" method="post">
	<input type="submit" name="submit" value="Enter In Your Banking Process" />
</form>
<p>&nbsp;</p>
<?php
if(isset($_POST['submit']))
{
$sab=mysql_query("truncate table color1")or die(mysql_error());
if($sab)
{
header("location:inner.php");
}
}
}

 else
{
echo "<br />";
 ?>
<img src="image/invalid.jpg" width="347" height="346" /><br /><br /><br />
<?php
echo "<span style='padding-left:140px;'>INVALID PASSWORD. TRY AGAIN</span><br /><br />";
?>
<form action="#" method="post">
	<input type="submit" name="submit" value="Try Again" />
</form>
<p>&nbsp;</p>
<?php
if(isset($_POST['submit']))
{
$sab=mysql_query("truncate table color1")or die(mysql_error());
if($sab)
{
header("location:index.php");
}
}
}

}
if($count<7)
{
if($id==1)
{
$uid=$_SESSION['uid'];
$sql1=mysql_query("insert into color1(uid,color)values('$uid','4')")or die(mysql_error());
if($sql1)
{
echo "<strong>CHOOSE COLOR</strong>";
header("location:color1_process4_1.php");
}
}



if($id==2)
{
$uid=$_SESSION['uid'];
$sql1=mysql_query("insert into color1(uid,color)values('$uid','4')")or die(mysql_error());
if($sql1)
{
echo "<strong>CHOOSE COLOR</strong>";
header("location:color1_process4_1.php");
}
}


if($id==3)
{
$uid=$_SESSION['uid'];
$sql1=mysql_query("insert into color1(uid,color)values('$uid','4')")or die(mysql_error());
if($sql1)
{
echo "<strong>CHOOSE COLOR</strong>";
header("location:color1_process4_1.php");
}
}


if($id==4)
{
$uid=$_SESSION['uid'];
$sql1=mysql_query("insert into color1(uid,color)values('$uid','4')")or die(mysql_error());
if($sql1)
{
echo "<strong>CHOOSE COLOR</strong>";
header("location:color1_process4_1.php");
}
}


if($id==5)
{
$uid=$_SESSION['uid'];
$sql1=mysql_query("insert into color1(uid,color)values('$uid','4')")or die(mysql_error());
if($sql1)
{
echo "<strong>CHOOSE COLOR</strong>";
header("location:color1_process4_1.php");
}
}


if($id==6)
{
$uid=$_SESSION['uid'];
$sql1=mysql_query("insert into color1(uid,color)values('$uid','4')")or die(mysql_error());
if($sql1)
{
echo "<strong>CHOOSE COLOR</strong>";
header("location:color1_process4_1.php");
}
}

if($id==7)
{
$uid=$_SESSION['uid'];
$sql1=mysql_query("insert into color1(uid,color)values('$uid','4')")or die(mysql_error());
if($sql1)
{
echo "<strong>CHOOSE COLOR</strong>";
header("location:color1_process4_1.php");
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