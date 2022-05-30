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
<table border="0" cellpadding="0" cellspacing="0" width="900">
	<tr>
	<td width="100"></td>
		<td width="500" align="center">
<?php 
$matrix = array(
            "row1"=> array("col1"=>"Q","col2"=>"W","col3"=>"E","col4"=>"R","col5"=>"T"),
            "row2"=> array("col1"=>"Y","col2"=>"U","col3"=>"I","col4"=>"O","col5"=>"P"),
            "row3"=> array("col1"=>"A","col2"=>"S","col3"=>"D","col4"=>"F","col5"=>"G"),
			"row4"=> array("col1"=>"H","col2"=>"J","col3"=>"K","col4"=>"L","col5"=>"Z"),
			"row5"=> array("col1"=>"X","col2"=>"C","col3"=>"V","col4"=>"B","col5"=>"N"),
			"row6"=> array("col1"=>"1","col2"=>"M","col3"=>"9","col4"=>"5","col5"=>"0")
			  );
/*$matrix1=shuffle($matrix);*/
/*echo "Value at row1 and col2 =".$matrix['row1']['col2'];
echo "<br>Printing number through matrix <br>";*/
/*echo '<table border="0" cellpadding="0" cellspacing="0">';
echo '<tr><td>';*/
echo'<a href="login_password1.php?id=1"><input type="button" value="Refresh"/></a><br />
<br />
';
echo '<table border="1" cellpadding="5" cellspacing="0" width="100px">';
echo '<tr>
<td></td>
<td><a href="log_process1.php?id1=a"><input type="button" value="1"/></a></td><td><a href="log_process1.php?id1=b"><input type="button" value="2"/></a></td><td><a href="log_process1.php?id1=c"><input type="button" value="3"/></a></td><td><a href="log_process1.php?id1=d"><input type="button" value="4"/></a></td><td><a href="log_process1.php?id1=e"><input type="button" value="5" /></a></td>
</tr>';
foreach($matrix as &$value){
//echo " <br>";
echo '<tr>';
$count++;
?>
<form action="log_process.php?id=<?php echo $count; ?>" method="post" >
<?php

echo "<td><input type='submit' value='$count' /></td>";
            foreach($value as $key1=>&$val){
						 echo "<td><input type='hidden' name='$val'>$val</td>";
                        
					
            }
			?>
			</form>
			<?php
			echo '</tr>';
}
echo '</table>';
/*echo '</td></tr></table>'*/

?>
</td>
		<td><img src="image/loginImage.jpg" width="219" height="317" /></td>
	</tr>
</table>

<p>&nbsp;</p>
</div>
<div id="footer">

</div>
</center>
</body>
</html>
<?php
/*include "config.php";
$uid=$_SESSION['uid'];
$sql=mysql_query("select * from password where uid='$uid'")or die(mysql_error());
if(mysql_num_rows($sql)<=4)
{
while($row=mysql_fetch_array($sql))
{
$row1=$row['pass'];
echo "<script type='text/javascript'>alert('$row1');</script>";
}
}
else
{
echo "<script type='text/javascript'>alert('More than 4 characters should not be accepted');</script>";
}
*/?>