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
<!--<pre><a href="#">Home</a> | <a href="#">Portfolio</a> | <a href="#">Services</a> | <a href="#">Aboutus</a> | <a href="#">Contactus</a></pre> 
--></div>
</div>
<div id="login">
<?php
include "config.php";
echo '<table border="1" cellpadding="5" cellspacing="0" width="100px">';
echo '<tr>
<td></td><td><input type="button" value="1" name="select" /></td><td><input type="button" value="2" name="select" /></td><td><input type="button" value="3" name="select" /></td><td><input type="button" value="4" name="select" /></td><td><input type="button" value="5" name="select" /></td>
</tr>';
//echo " <br>";
echo '<tr>';
$count++;

            $random1= (rand(1,5));
			$random=shuffle($random1);
$res = mysql_query ("select * from input where id=$random order by id asc");
while($rows=mysql_fetch_array($res))
{
$id=$rows['id'];
$row1=$rows['row1'];
$row2=$rows['row2'];
$row3=$rows['row3'];
$row4=$rows['row4'];
$row5=$rows['row5'];
echo "<td><input type='button' value='$count' name='select' /></td>";
echo "<td>".$row1."</td><td>".$row2."</td><td>".$row3."</td><td>".$row4."</td><td>".$row5."</td></tr>";
}

echo '<tr>';


echo '<tr>';
$count++;

            $random1= (rand(1,5));
			$random=shuffle($random1);
$res = mysql_query ("select * from input1 where id=$random order by id asc");
while($rows=mysql_fetch_array($res))
{
$id=$rows['id'];
$row1=$rows['row1'];
$row2=$rows['row2'];
$row3=$rows['row3'];
$row4=$rows['row4'];
$row5=$rows['row5'];
echo "<td><input type='button' value='$count' name='select' /></td>";
echo "<td>".$row1."</td><td>".$row2."</td><td>".$row3."</td><td>".$row4."</td><td>".$row5."</td></tr>";
}

echo '<tr>';


echo '<tr>';
$count++;

            $random1= (rand(1,5));
			$random=shuffle($random1);
$res = mysql_query ("select * from input2 where id=$random order by id asc");
while($rows=mysql_fetch_array($res))
{
$id=$rows['id'];
$row1=$rows['row1'];
$row2=$rows['row2'];
$row3=$rows['row3'];
$row4=$rows['row4'];
$row5=$rows['row5'];
echo "<td><input type='button' value='$count' name='select' /></td>";
echo "<td>".$row1."</td><td>".$row2."</td><td>".$row3."</td><td>".$row4."</td><td>".$row5."</td></tr>";
}

echo '<tr>';

echo '<tr>';
$count++;

            $random1= (rand(1,5));
			$random=shuffle($random1);
$res = mysql_query ("select * from input3 where id=$random order by id asc");
while($rows=mysql_fetch_array($res))
{
$id=$rows['id'];
$row1=$rows['row1'];
$row2=$rows['row2'];
$row3=$rows['row3'];
$row4=$rows['row4'];
$row5=$rows['row5'];
echo "<td><input type='button' value='$count' name='select' /></td>";
echo "<td>".$row1."</td><td>".$row2."</td><td>".$row3."</td><td>".$row4."</td><td>".$row5."</td></tr>";
}

echo '<tr>';

echo '<tr>';
$count++;

            $random1= (rand(1,6));
			$random=shuffle($random1);
$res = mysql_query ("select * from input4 where id=$random order by id asc");
while($rows=mysql_fetch_array($res))
{
$id=$rows['id'];
$row1=$rows['row1'];
$row2=$rows['row2'];
$row3=$rows['row3'];
$row4=$rows['row4'];
$row5=$rows['row5'];
echo "<td><input type='button' value='$count' name='select' /></td>";
echo "<td>".$row1."</td><td>".$row2."</td><td>".$row3."</td><td>".$row4."</td><td>".$row5."</td></tr>";
}

echo '<tr>';
echo '<tr>';
$count++;

            $random1= (rand(1,5));
			$random=shuffle($random1);
$res = mysql_query ("select * from input5 where id=$random order by id asc");
while($rows=mysql_fetch_array($res))
{
$id=$rows['id'];
$row1=$rows['row1'];
$row2=$rows['row2'];
$row3=$rows['row3'];
$row4=$rows['row4'];
$row5=$rows['row5'];
echo "<td><input type='button' value='$count' name='select' /></td>";
echo "<td>".$row1."</td><td>".$row2."</td><td>".$row3."</td><td>".$row4."</td><td>".$row5."</td></tr>";
}

echo '<tr>';


?>
</div>
</center>
 </body>
</html>