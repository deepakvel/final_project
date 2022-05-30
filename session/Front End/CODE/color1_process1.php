<?php
ob_start();
session_start();
$id=$_SESSION['id'];
$uid=$_SESSION['uid'];
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
</div>
</div>
<div id="login">
<p>&nbsp;</p>
<?php
include "config.php";
$uid=$_SESSION['uid'];
$id=$_SESSION['id'];
if($id==1)
{
$sql=mysql_query("select * from color1 where uid='$uid' order by id asc")or die(mysql_error());
while($row=mysql_fetch_array($sql))
{
$id=$row['id'];
$color=$row['color'];
}
$color1=$color+1;
$sql1=mysql_query("insert into color_pass1(color,color_values,uid)values('$color','$color1','$uid')");
if($sql1)
{
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<br />

<?php
echo "<strong>Your Color Password Generated Successfully</strong>&nbsp;&nbsp;";
echo "<a href='color1.php'><input type='button' value='Back'></a><br />
<br />
";
}
}

else if($id==2)
{
$sql=mysql_query("select * from color1 where uid='$uid' order by id asc")or die(mysql_error());
while($row=mysql_fetch_array($sql))
{
$id=$row['id'];
$color=$row['color'];
}
$color1=$color+2;
$sql1=mysql_query("insert into color_pass1(color,color_values,uid)values('$color','$color1','$uid')");
if($sql1)
{
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />

<?php
echo "<strong>Your Color Password Generated Successfully</strong>&nbsp;&nbsp;";
echo "<a href='color1.php'><input type='button' value='Back'></a><br />
<br />
";
}
}


else if($id==3)
{
$sql=mysql_query("select * from color1 where uid='$uid' order by id asc")or die(mysql_error());
while($row=mysql_fetch_array($sql))
{
$id=$row['id'];
$color=$row['color'];
}
$color1=$color+3;
$sql1=mysql_query("insert into color_pass1(color,color_values,uid)values('$color','$color1','$uid')");
if($sql1)
{
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />

<?php
echo "<strong>Your Color Password Generated Successfully</strong>&nbsp;&nbsp;";
echo "<a href='color1.php'><input type='button' value='Back'></a><br />
<br />
";
}
}


else if($id==4)
{
$sql=mysql_query("select * from color1 where uid='$uid' order by id asc")or die(mysql_error());
while($row=mysql_fetch_array($sql))
{
$id=$row['id'];
$color=$row['color'];
}
$color1=$color+4;
$sql1=mysql_query("insert into color_pass1(color,color_values,uid)values('$color','$color1','$uid')");
if($sql1)
{
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />

<?php
echo "<strong>Your Color Password Generated Successfully</strong>&nbsp;&nbsp;";
echo "<a href='color1.php'><input type='button' value='Back'></a><br />
<br />
";
}
}


else if($id==5)
{
$sql=mysql_query("select * from color1 where uid='$uid' order by id asc")or die(mysql_error());
while($row=mysql_fetch_array($sql))
{
$id=$row['id'];
$color=$row['color'];
}
$color1=$color+5;
$sql1=mysql_query("insert into color_pass1(color,color_values,uid)values('$color','$color1','$uid')");
if($sql1)
{
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />

<?php
echo "<strong>Your Color Password Generated Successfully</strong>&nbsp;&nbsp;";
echo "<a href='color1.php'><input type='button' value='Back'></a><br />
<br />
";
}
}


else if($id==6)
{
$sql=mysql_query("select * from color1 where uid='$uid' order by id asc")or die(mysql_error());
while($row=mysql_fetch_array($sql))
{
$id=$row['id'];
$color=$row['color'];
}
$color1=$color+6;
$sql1=mysql_query("insert into color_pass1(color,color_values,uid)values('$color','$color1','$uid')");
if($sql1)
{
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />

<?php
echo "<strong>Your Color Password Generated Successfully</strong>&nbsp;&nbsp;";
echo "<a href='color1.php'><input type='button' value='Back'></a><br />
<br />
";
}
}


else if($id==7)
{
$sql=mysql_query("select * from color1 where uid='$uid' order by id asc")or die(mysql_error());
while($row=mysql_fetch_array($sql))
{
$id=$row['id'];
$color=$row['color'];
}
$color1=$color+7;
$sql1=mysql_query("insert into color_pass1(color,color_values,uid)values('$color','$color1','$uid')");
if($sql1)
{
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />

<?php
echo "<strong>Your Color Password Generated Successfully</strong>&nbsp;&nbsp;";
echo "<a href='color1.php'><input type='button' value='Back'></a><br />
<br />
";
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