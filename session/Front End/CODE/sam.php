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
$matrix = array(
            "row1"=> array("col1"=>"Q","col2"=>"W","col3"=>"E","col4"=>"R","col5"=>"T"),
            "row2"=> array("col1"=>"Y","col2"=>"U","col3"=>"I","col4"=>"O","col5"=>"P"),
            "row3"=> array("col1"=>"A","col2"=>"S","col3"=>"D","col4"=>"F","col5"=>"G"),
			"row4"=> array("col1"=>"H","col2"=>"J","col3"=>"K","col4"=>"L","col5"=>"Z"),
			"row5"=> array("col1"=>"X","col2"=>"C","col3"=>"V","col4"=>"B","col5"=>"N"),
			"row6"=> array("col1"=>"1","col2"=>"M","col3"=>"9","col4"=>"5","col5"=>"0")
			  );
$matrix1=shuffle($matrix);
/*echo "Value at row1 and col2 =".$matrix['row1']['col2'];
echo "<br>Printing number through matrix <br>";*/
/*echo '<table border="0" cellpadding="0" cellspacing="0">';
echo '<tr><td>';*/
echo '<table border="1" cellpadding="5" cellspacing="0" width="100px">';
echo '<tr>
<td></td><td><a href="process.php?id=a"><input type="button" value="1" name="select" /></a></td><td><a href="process.php?id=b"><input type="button" value="2" name="select" /></a></td><td><a href="process.php?id=c"><input type="button" value="3" name="select" /></a></td><td><a href="process.php?id=d"><input type="button" value="4" name="select" /></a></td><td><a href="process.php?id=e"><input type="button" value="5" name="select" /></a></td>
</tr>';
foreach($matrix as $key=>$value){
//echo " <br>";
echo '<tr>';
$count++;
?>
	<form action="process.php?id=<?php echo $count; ?>" method="post" enctype="multipart/form-data">
<?php
echo "<td><input type='submit' value='$count' /></td>";
            foreach($value as $key1=>$val)
			{
						 echo "<td><input type='hidden' value='$key1' name='$key1'>$val</td>";
            }
			?>
			</form>
			<?php
			echo '</tr>';
}
?>

<?php
echo '</table>';
/*echo '</td></tr></table>'*/

?>

</div>
<div id="footer">
<!--<pre><a href="#">Home</a> | <a href="#">Portfolio</a> | <a href="#">Services</a> | <a href="#">Aboutus</a> | <a href="#">Contactus</a></pre> -->
</div>
</center>
</body>
</html>
