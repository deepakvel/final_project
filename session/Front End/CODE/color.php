<?php
ob_start();
session_start();
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
		<td><table border="0" cellpadding="0" cellspacing="0" width="600">
	<tr>
		<td colspan="9" align="center"><strong>Choose Color Password</strong></td>
	</tr>
	<tr>
		<td height="20"></td>
	</tr>
	<tr>
	<td width="50"></td>
		<td>
		<a href="color_process.php?id=1"><input type="button" value="R" name="color_red" style="background-color:#990000; color:#FFFFFF; font-weight:bold;" /><input type="button" name="B" value="B"  style="background-color:#0033CC; color:#FFFFFF; font-weight:bold;" /></a>
		</td>
		<td>
		<a href="color_process.php?id=2"><input type="button" value="R" name="color_red" style="background-color:#990000; color:#FFFFFF; font-weight:bold;" /><input type="button" name="G" value="G"  style="background-color:#006600; color:#FFFFFF; font-weight:bold;"  /></a>

		</td>
		<td>
		<a href="color_process.php?id=3"><input type="button" value="R" name="color_red" style="background-color:#990000; color:#FFFFFF; font-weight:bold;" /><input type="button" name="B" value="B"  style="background-color:#000000; color:#FFFFFF; font-weight:bold;" /></a>
		</td>
		<td>
		<a href="color_process.php?id=4"><input type="button" value="R" name="color_red" style="background-color:#990000; color:#FFFFFF; font-weight:bold;" /><input type="button" name="Y" value="Y"  style="background-color:#FFFF00; color:#000000; font-weight:bold;"  /></a>

		</td>
		<td>
		<a href="color_process.php?id=5"><input type="button" value="R" name="color_red" style="background-color:#990000; color:#FFFFFF; font-weight:bold;" /><input type="button" name="G" value="G"  style="background-color:#999999; color:#FFFFFF; font-weight:bold;"  /></a>
		</td>
		<td>
		<a href="color_process.php?id=6"><input type="button" value="R" name="color_red" style="background-color:#990000; color:#FFFFFF; font-weight:bold;" /><input type="button" name="O" value="O" style="background-color:#CC6633; color:#FFFFFF; font-weight:bold;"  /></a>
		</td>
		<td>
		<a href="color_process.php?id=7"><input type="button" value="R" name="color_red" style="background-color:#990000; color:#FFFFFF; font-weight:bold;" /><input type="button" name="" value="P" style="background-color:#FFCCCC; color:#000000; font-weight:bold;"  /></a>
		</td>
		
	</tr>
	
	
	
	<tr>
		<td height="20"></td>
	</tr>
	<tr>
	<td width="50"></td>
		<td>
		<a href="color_process2.php?id1=1"><input type="button" value="B" name="color_red" style="background-color:#0033CC; color:#FFFFFF; font-weight:bold;" /><input type="button" name="R" value="R"  style="background-color:#990000; color:#FFFFFF; font-weight:bold;" /></a>
		</td>
		<td>
		<a href="color_process2.php?id1=2"><input type="button" value="B" name="color_red" style="background-color:#0033CC; color:#FFFFFF; font-weight:bold;" /><input type="button" name="G" value="G"  style="background-color:#006600; color:#FFFFFF; font-weight:bold;"  /></a>

		</td>
		<td>
		<a href="color_process2.php?id1=3"><input type="button" value="B" name="color_red" style="background-color:#0033CC; color:#FFFFFF; font-weight:bold;" /><input type="button" name="B" value="B"  style="background-color:#000000; color:#FFFFFF; font-weight:bold;" /></a>
		</td>
		<td>
		<a href="color_process2.php?id1=4"><input type="button" value="B" name="color_red" style="background-color:#0033CC; color:#FFFFFF; font-weight:bold;" /><input type="button" name="Y" value="Y"  style="background-color:#FFFF00; color:#000000; font-weight:bold;"  /></a>

		</td>
		<td>
		<a href="color_process2.php?id1=5"><input type="button" value="B" name="color_red" style="background-color:#0033CC; color:#FFFFFF; font-weight:bold;" /><input type="button" name="G" value="G"  style="background-color:#999999; color:#FFFFFF; font-weight:bold;"  /></a>
		</td>
		<td>
		<a href="color_process2.php?id1=6"><input type="button" value="B" name="color_red" style="background-color:#0033CC; color:#FFFFFF; font-weight:bold;" /><input type="button" name="O" value="O" style="background-color:#CC6633; color:#FFFFFF; font-weight:bold;"  /></a>
		</td>
		<td>
		<a href="color_process2.php?id1=7"><input type="button" value="B" name="color_red" style="background-color:#0033CC; color:#FFFFFF; font-weight:bold;" /><input type="button" name="" value="P" style="background-color:#FFCCCC; color:#000000; font-weight:bold;"  /></a>
		</td>
		
	</tr>
	
	
	
	<tr>
		<td height="20"></td>
	</tr>
	<tr>
	<td width="50"></td>
		<td>
		<a href="color_process3.php?id=1"><input type="button" value="G" name="color_red" style="background-color:#006600; color:#FFFFFF; font-weight:bold;" /><input type="button"  name="R" value="R"  style="background-color:#990000;  color:#FFFFFF; font-weight:bold;" /></a>
		</td>
		<td>
		<a href="color_process3.php?id=2"><input type="button" value="G" name="color_red" style="background-color:#006600; color:#FFFFFF; font-weight:bold;" /><input type="button" value="B" name="color_red" style="background-color:#0033CC; color:#FFFFFF; font-weight:bold;"  /></a>

		</td>
		<td>
		<a href="color_process3.php?id=3"><input type="button" value="G" name="color_red" style="background-color:#006600; color:#FFFFFF; font-weight:bold;" /><input type="button" name="B" value="B"  style="background-color:#000000; color:#FFFFFF; font-weight:bold;" /></a>
		</td>
		<td>
		<a href="color_process3.php?id=4"><input type="button" value="G" name="color_red" style="background-color:#006600; color:#FFFFFF; font-weight:bold;" /><input type="button" name="Y" value="Y"  style="background-color:#FFFF00; color:#000000; font-weight:bold;"  /></a>

		</td>
		<td>
		<a href="color_process3.php?id=5"><input type="button" value="G" name="color_red" style="background-color:#006600; color:#FFFFFF; font-weight:bold;" /><input type="button" name="G" value="G"  style="background-color:#999999; color:#FFFFFF; font-weight:bold;"  /></a>
		</td>
		<td>
		<a href="color_process3.php?id=6"><input type="button" value="G" name="color_red" style="background-color:#006600; color:#FFFFFF; font-weight:bold;" /><input type="button" name="O" value="O" style="background-color:#CC6633; color:#FFFFFF; font-weight:bold;"  /></a>
		</td>
		<td>
		<a href="color_process3.php?id=7"><input type="button" value="G" name="color_red" style="background-color:#006600; color:#FFFFFF; font-weight:bold;" /><input type="button" name="" value="P" style="background-color:#FFCCCC; color:#000000; font-weight:bold;"  /></a>
		</td>
		
	</tr>
	
	
	
	<tr>
		<td height="20"></td>
	</tr>
	<tr>
	<td width="50"></td>
	
		<td>
		<a href="color_process4.php?id=1"><input type="button" value="B" name="color_red" style="background-color:#000; color:#FFFFFF; font-weight:bold;" /><input type="button" name="B" value="R"  style="background-color:#990000; color:#FFFFFF; font-weight:bold;" /></a>
		</td>
		<td>
		<a href="color_process4.php?id=2"><input type="button" value="B" name="color_red" style="background-color:#000; color:#FFFFFF; font-weight:bold;" /><input type="button" name="B" value="B"  style="background-color:#0033CC; color:#FFFFFF; font-weight:bold;" /></a>
		</td>
		<td>
		<a href="color_process4.php?id=3"><input type="button" value="B" name="color_red" style="background-color:#000; color:#FFFFFF; font-weight:bold;" /><input type="button" name="G" value="G"  style="background-color:#006600; color:#FFFFFF; font-weight:bold;"  /></a>

		</td>
		
		<td>
		<a href="color_process4.php?id=4"><input type="button" value="B" name="color_red" style="background-color:#000; color:#FFFFFF; font-weight:bold;" /><input type="button" name="Y" value="Y"  style="background-color:#FFFF00; color:#000000; font-weight:bold;"  /></a>

		</td>
		<td>
		<a href="color_process.php?id=5"><input type="button" value="B" name="color_red" style="background-color:#000; color:#FFFFFF; font-weight:bold;" /><input type="button" name="G" value="G"  style="background-color:#999999; color:#FFFFFF; font-weight:bold;"  /></a>
		</td>
		<td>
		<a href="color_process4.php?id=6"><input type="button" value="B" name="color_red" style="background-color:#000; color:#FFFFFF; font-weight:bold;" /><input type="button" name="O" value="O" style="background-color:#CC6633; color:#FFFFFF; font-weight:bold;"  /></a>
		</td>
		<td>
		<a href="color_process4.php?id=7"><input type="button" value="B" name="color_red" style="background-color:#000; color:#FFFFFF; font-weight:bold;" /><input type="button" name="" value="P" style="background-color:#FFCCCC; color:#000000; font-weight:bold;"  /></a>
		</td>
		
	</tr>
	
	
	
	<tr>
		<td height="20"></td>
	</tr>
	<tr>
	<td width="50"></td>
	
		<td>
		<a href="color_process5.php?id=1"><input type="button" value="Y" name="color_red" style="background-color:#FFFF00; color:#000; font-weight:bold;" /><input type="button" name="R" value="R"  style="background-color:#990000; color:#FFF; font-weight:bold;"  /></a>

		</td>
		<td>
		<a href="color_process5.php?id=2"><input type="button" value="Y" name="color_red" style="background-color:#FFFF00; color:#000; font-weight:bold;" /><input type="button" name="B" value="B"  style="background-color:#0033CC; color:#FFFFFF; font-weight:bold;" /></a>
		</td>
		<td>
		<a href="color_process5.php?id=3"><input type="button" value="Y" name="color_red" style="background-color:#FFFF00; color:#000; font-weight:bold;" /><input type="button" name="G" value="G"  style="background-color:#006600; color:#FFFFFF; font-weight:bold;"  /></a>

		</td>
		<td>
		<a href="color_process5.php?id=4"><input type="button" value="Y" name="color_red" style="background-color:#FFFF00; color:#000; font-weight:bold;" /><input type="button" name="B" value="B"  style="background-color:#000000; color:#FFFFFF; font-weight:bold;" /></a>
		</td>
		
		<td>
		<a href="color_process5.php?id=5"><input type="button" value="Y" name="color_red" style="background-color:#FFFF00; color:#000; font-weight:bold;" /><input type="button" name="G" value="G"  style="background-color:#999999; color:#FFFFFF; font-weight:bold;"  /></a>
		</td>
		<td>
		<a href="color_process5.php?id=6"><input type="button" value="Y" name="color_red" style="background-color:#FFFF00; color:#000; font-weight:bold;" /><input type="button" name="O" value="O" style="background-color:#CC6633; color:#FFFFFF; font-weight:bold;"  /></a>
		</td>
		<td>
		<a href="color_process5.php?id=7"><input type="button" value="Y" name="color_red" style="background-color:#FFFF00; color:#000; font-weight:bold;" /><input type="button" name="" value="P" style="background-color:#FFCCCC; color:#000000; font-weight:bold;"  /></a>
		</td>
		
	</tr>
</table></td>
		<td><img src="image/mzm.yzsspyvw.png" width="300" height="212" style="padding-top:50px; padding-left:40px;" /></td>
	</tr>
</table>

<p>&nbsp;</p>
</div>
<div id="footer">

</div>
</center>
</body>
</html>
