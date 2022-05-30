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
<pre><a href="#">Home</a> | <a href="#">Portfolio</a> | <a href="#">Services</a> | <a href="#">Aboutus</a> | <a href="#">Contactus</a></pre> 
</div>
</div>
<div id="login">
<?php
$matrix = array(
            "row1"=> array("col1"=>"1","col2"=>"4","col3"=>"7"),
            "row2"=> array("col1"=>"2","col2"=>"5","col3"=>"8"),
            "row3"=> array("col1"=>"3","col2"=>"6","col3"=>"9"));

/*echo "Value at row1 and col2 =".$matrix['row1']['col2'];
echo "<br>Printing number through matrix <br>";*/
echo '<table border="0" cellpadding="0" cellspacing="0">';
echo '<tr><td>';
echo '<table border="1" cellpadding="5" cellspacing="0" width="100px">';
echo '<tr><td></td><td><input type="button" value="click" name="select" /></td><td><input type="button" value="click" name="select" /></td><td><input type="button" value="click" name="select" /></td></tr>';
foreach($matrix as &$value){
//echo " <br>";
echo '<tr><td><input type="button" value="click" name="select" /></td>';
            foreach($value as &$val){
						 echo "<td>$val</td>";
                        
					
            }
			
			echo '</tr>';
}
echo '</table>';
echo '</td></tr></table>'

?>

</div>
<div id="footer">
<pre><a href="#">Home</a> | <a href="#">Portfolio</a> | <a href="#">Services</a> | <a href="#">Aboutus</a> | <a href="#">Contactus</a></pre> 
</div>
</center>
</body>
</html>
