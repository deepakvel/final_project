<?php
ob_start();
session_start();
$id=$_SESSION['id'];
$uid=$_SESSION['uid'];
$id1=$_GET['id1'];
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
$sql6=mysql_query("select * from password where uid='$uid'")or die(mysql_error());
$count=mysql_num_rows($sql6);
if($count>=4)
{
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br /><br />


<?php
echo "<td><span style='font-size:14px; padding-left:130px;'>
Your Password is </span> </td>";
while($sa=mysql_fetch_array($sql6))
{
$pass=$sa['pass'];

echo "<td><strong id='container'>".$pass."</strong></td>";
}
 echo "<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href='color.php'><input type='button' value='Go for Color Password' style='font-weight:bold;'></a><br />
<br />
";
echo "<script type='text/javascript'>alert('More than 4 characters should not be accepted');</script>";

}
if($count<4)
{
?>
<?php

if(($id==1)&&($id1=='a'))
{
$sql=mysql_query("select * from inputs where id=1 and rowid=1");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";

echo "<br />";
echo "<br />";
}
}
if(($id==1)&&($id1=='b'))
{
$sql=mysql_query("select * from inputs where id=2 and rowid=1");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
	echo "<br />";
	?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
}

}

if(($id==1)&&($id1=='c'))
{
$sql=mysql_query("select * from inputs where id=3 and rowid=1");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";

echo "<br />";
echo "<br />";
}

}

if(($id==1)&&($id1=='d'))
{
$sql=mysql_query("select * from inputs where id=4 and rowid=1");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<br />";
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";}

}

if(($id==1)&&($id1=='e'))
{
$sql=mysql_query("select * from inputs where id=5 and rowid=1");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";
echo "<br />";}

}

if(($id==2)&&($id1=='a'))
{
$sql=mysql_query("select * from inputs where id=6 and rowid=2");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<br />";
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";
echo "<br />";}

}
if(($id==2)&&($id1=='b'))
{
$sql=mysql_query("select * from inputs where id=7 and rowid=2");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";
echo "<br />";}

}
if(($id==2)&&($id1=='c'))
{
$sql=mysql_query("select * from inputs where id=8 and rowid=2");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";
echo "<br />";}

}
if(($id==2)&&($id1=='d'))
{
$sql=mysql_query("select * from inputs where id=9 and rowid=2");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";
echo "<br />";}

}
if(($id==2)&&($id1=='e'))
{
$sql=mysql_query("select * from inputs where id=10 and rowid=2");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";
echo "<br />";}

}
if(($id==3)&&($id1=='a'))
{
$sql=mysql_query("select * from inputs where id=11 and rowid=3");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";
echo "<br />";}

}
if(($id==3)&&($id1=='b'))
{
$sql=mysql_query("select * from inputs where id=12 and rowid=3");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";
echo "<br />";}

}
if(($id==3)&&($id1=='c'))
{
$sql=mysql_query("select * from inputs where id=13 and rowid=3");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";
echo "<br />";}

}
if(($id==3)&&($id1=='d'))
{
$sql=mysql_query("select * from inputs where id=14 and rowid=3");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";
echo "<br />";}

}
if(($id==3)&&($id1=='e'))
{
$sql=mysql_query("select * from inputs where id=15 and rowid=3");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";
echo "<br />";}

}
if(($id==4)&&($id1=='a'))
{
$sql=mysql_query("select * from inputs where id=16 and rowid=4");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";
echo "<br />";}

}
if(($id==4)&&($id1=='b'))
{
$sql=mysql_query("select * from inputs where id=17 and rowid=4");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";
echo "<br />";}

}
if(($id==4)&&($id1=='c'))
{
$sql=mysql_query("select * from inputs where id=18 and rowid=4");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";
echo "<br />";}

}
if(($id==4)&&($id1=='d'))
{
$sql=mysql_query("select * from inputs where id=19 and rowid=4");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";
echo "<br />";}

}
if(($id==4)&&($id1=='e'))
{
$sql=mysql_query("select * from inputs where id=20 and rowid=4");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";
echo "<br />";}

}
if(($id==5)&&($id1=='a'))
{
$sql=mysql_query("select * from inputs where id=21 and rowid=5");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";
echo "<br />";}

}
if(($id==5)&&($id1=='b'))
{
$sql=mysql_query("select * from inputs where id=22 and rowid=5");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";
echo "<br />";}

}
if(($id==5)&&($id1=='c'))
{
$sql=mysql_query("select * from inputs where id=23 and rowid=5");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";
echo "<br />";}

}
if(($id==5)&&($id1=='d'))
{
$sql=mysql_query("select * from inputs where id=24 and rowid=5");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";
echo "<br />";}

}
if(($id==5)&&($id1=='e'))
{
$sql=mysql_query("select * from inputs where id=25 and rowid=5");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";
echo "<br />";}

}
if(($id==6)&&($id1=='a'))
{
$sql=mysql_query("select * from inputs where id=26 and rowid=6");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";
echo "<br />";}

}
if(($id==6)&&($id1=='b'))
{
$sql=mysql_query("select * from inputs where id=27 and rowid=6");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";
echo "<br />";}

}
if(($id==6)&&($id1=='c'))
{
$sql=mysql_query("select * from inputs where id=28 and rowid=6");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";
echo "<br />";}

}
if(($id==6)&&($id1=='d'))
{
$sql=mysql_query("select * from inputs where id=29 and rowid=6");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";
echo "<br />";}

}
if(($id==6)&&($id1=='e'))
{
$sql=mysql_query("select * from inputs where id=30 and rowid=6");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password(uid,pass)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thank you.gif" width="420" height="313" /><br />
<br />

<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";
echo "<br />";}
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