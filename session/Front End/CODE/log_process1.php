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
$sql6=mysql_query("select * from password1 where uid='$uid'")or die(mysql_error());
$count=mysql_num_rows($sql6);
if($count>=4)
{
$info=mysql_query("select * from password where uid='$uid'");
$column = array();
$column1 = array();
while($row6 = mysql_fetch_array($info))
{
    $column[] = $row6['pass'];
}
$a=$column[0];
$b=$column[1];
$c=$column[2];
$d=$column[3];

$info1=mysql_query("select * from password1 where uid='$uid'");
$column = array();

while($row7 = mysql_fetch_array($info1))
{
    $column1[] = $row7['pass1'];
}
$a1=$column1[0];
$b1=$column1[1];
$c1=$column1[2];
$d1=$column1[3];

if(($a==$a1)&&($b==$b1)&&($c==$c1)&&($d==$d1))
{
	echo "<td>";
	?>
	<img src="image/thanks-786500.png" width="300" height="300" /><br /><br />
	<?php
	echo"<span style='padding-left:140px;'><strong>PASSWORD IS CORRECT</strong></span></td>";
	echo "<br /><br /><br />";
	  ?>
	  <form action="#" method="post">
	<input type="submit" name="submit" value="Go for Color Password" style="font-weight:bold; margin-left:140px;"  />
</form>
<p>&nbsp;</p>
<?php
if(isset($_POST['submit']))
{
$sab=mysql_query("truncate table password1")or die(mysql_error());
if($sab)
{
header("location:color1.php");
}
}
}
else
{
$uid=$_SESSION['uid'];
echo "<br />";
?>
<img src="image/invalid.jpg" width="347" height="346" /><br /><br /><br />
<?php
echo "<span style='padding-left:140px;'>INVALID PASSWORD. TRY AGAIN</span><br /><br />";
?>
<form action="#" method="post">
	<input type="submit" name="submit" value="Try Again" style="margin-left:140px;"/>
</form>
<p>&nbsp;</p>
<?php
if(isset($_POST['submit']))
{
$sab=mysql_query("truncate table password1")or die(mysql_error());
if($sab)
{
header("location:index.php");
}
}
}
}

if($count<4)
{
?>
<?php

if(($id==1)&&($id1=='a'))
{
$sql=mysql_query("select * from input1 where id=1 and rowid=1");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php
echo "<br />";
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}
}
if(($id==1)&&($id1=='b'))
{
$sql=mysql_query("select * from input1 where id=2 and rowid=1");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}

if(($id==1)&&($id1=='c'))
{
$sql=mysql_query("select * from input1 where id=3 and rowid=1");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php

echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}

if(($id==1)&&($id1=='d'))
{
$sql=mysql_query("select * from input1 where id=4 and rowid=1");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php

echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}

if(($id==1)&&($id1=='e'))
{
$sql=mysql_query("select * from input1 where id=5 and rowid=1");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php

echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}

if(($id==2)&&($id1=='a'))
{
$sql=mysql_query("select * from input1 where id=6 and rowid=2");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php

echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}
if(($id==2)&&($id1=='b'))
{
$sql=mysql_query("select * from input1 where id=7 and rowid=2");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php

echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}
if(($id==2)&&($id1=='c'))
{
$sql=mysql_query("select * from input1 where id=8 and rowid=2");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php

echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}
if(($id==2)&&($id1=='d'))
{
$sql=mysql_query("select * from input1 where id=9 and rowid=2");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php

echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}
if(($id==2)&&($id1=='e'))
{
$sql=mysql_query("select * from input1 where id=10 and rowid=2");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php

echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}
if(($id==3)&&($id1=='a'))
{
$sql=mysql_query("select * from input1 where id=11 and rowid=3");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php

echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}
if(($id==3)&&($id1=='b'))
{
$sql=mysql_query("select * from input1 where id=12 and rowid=3");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php

echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}
if(($id==3)&&($id1=='c'))
{
$sql=mysql_query("select * from input1 where id=13 and rowid=3");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php

echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}
if(($id==3)&&($id1=='d'))
{
$sql=mysql_query("select * from input1 where id=14 and rowid=3");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php

echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}
if(($id==3)&&($id1=='e'))
{
$sql=mysql_query("select * from input1 where id=15 and rowid=3");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php

echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}
if(($id==4)&&($id1=='a'))
{
$sql=mysql_query("select * from input1 where id=16 and rowid=4");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php

echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}
if(($id==4)&&($id1=='b'))
{
$sql=mysql_query("select * from input1 where id=17 and rowid=4");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php

echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}
if(($id==4)&&($id1=='c'))
{
$sql=mysql_query("select * from input1 where id=18 and rowid=4");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php

echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}
if(($id==4)&&($id1=='d'))
{
$sql=mysql_query("select * from input1 where id=19 and rowid=4");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php
echo "<br />";
echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}
if(($id==4)&&($id1=='e'))
{
$sql=mysql_query("select * from input1 where id=20 and rowid=4");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php

echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}
if(($id==5)&&($id1=='a'))
{
$sql=mysql_query("select * from input1 where id=21 and rowid=5");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php

echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}
if(($id==5)&&($id1=='b'))
{
$sql=mysql_query("select * from input1 where id=22 and rowid=5");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php

echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}
if(($id==5)&&($id1=='c'))
{
$sql=mysql_query("select * from input1 where id=23 and rowid=5");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php

echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}
if(($id==5)&&($id1=='d'))
{
$sql=mysql_query("select * from input1 where id=24 and rowid=5");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php

echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}
if(($id==5)&&($id1=='e'))
{
$sql=mysql_query("select * from input1 where id=25 and rowid=5");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php

echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}
if(($id==6)&&($id1=='a'))
{
$sql=mysql_query("select * from input1 where id=26 and rowid=6");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php

echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}
if(($id==6)&&($id1=='b'))
{
$sql=mysql_query("select * from input1 where id=27 and rowid=6");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php

echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}
if(($id==6)&&($id1=='c'))
{
$sql=mysql_query("select * from input1 where id=28 and rowid=6");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php

echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}
if(($id==6)&&($id1=='d'))
{
$sql=mysql_query("select * from input1 where id=29 and rowid=6");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php

echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

echo "<br />";
echo "<br />";}

}
if(($id==6)&&($id1=='e'))
{
$sql=mysql_query("select * from input1 where id=30 and rowid=6");
$row=mysql_fetch_array($sql);
$row1=$row['row1'];
$sql=mysql_query("insert into password1(uid,pass1)values('$uid','$row1')");
if($sql)
{
echo "<br />";
?>
<img src="image/thanks-786500.png" width="300" height="300" /><br />
<?php

echo "<strong>Your Password Character Generated Successfully</strong>&nbsp;&nbsp;";
echo "<input type='button' onclick='return sample();' value='Back'>";
echo "<br />";

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