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

            $random = (rand(1,5));
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
$count++;

            $random = (rand(1,5));
$res = mysql_query ("select * from input where id=$random order by id desc");
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
$count++;

            $random = (rand(1,5));
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
$count++;

            $random = (rand(1,5));
$res = mysql_query ("select * from input where id=$random order by id desc ");
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
$count++;

            $random = (rand(1,5));
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

$numbers = range(1, 20);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}

	$cards = array_merge(array("J", "Q", "K", "A"), range(2,10)); // 13 cards
   
    // Shuffle the cards
    shuffle($cards);
   
    // Create an multidimentional array to hold the 4 suits
    $suits = array(
        'Heart' => array(),
        'Spade' => array(),
        'Diamond' => array(),
        'Club' => array()
        );
       
    // Add cards to their respective suits
    for($i = 0; $i < count($suits); $i++)
    {
        for($j = 0; $j < count($cards); $j++)
        {
            $suits['Heart'][$j] = $cards[$j]."<span style=color:#FF0000;>&hearts;</span>";
            $suits['Spade'][$j] = $cards[$j]."&spades;";
            $suits['Diamond'][$j] = $cards[$j]."<span style=color:#FF0000;>&diams;</span>";
            $suits['Club'][$j] = $cards[$j]."&clubs;";
        }
    }
   
    // Create a deck
    $deck = array();
   
    // Merge the suits into the empty deck array
    $deck = array_merge($deck, $suits);
               
    // Display the deck to the screen
    echo "<p><b>Deck of cards:</b></p>";
    foreach($deck as $k1 => $v1)
    {
        // Display suit name
        echo "<p>&emsp;$k1's<br />&emsp;{<br />&emsp;&emsp;";
        $acc = 0;
       
        // Display card value
        foreach($v1 as $k2 => $v2)
        {
            echo "$v2&nbsp";
            $acc++;
           
            if ($acc == 4)
            {
                echo "<br />&emsp;&emsp;";
                $acc = 0;
            }
        }
        echo "<br />&emsp;}</p>";
    } 
	
	
		

echo '</table>'; 



function twodshuffle($array)
{
    // Get array length
    $count = count($array);
    // Create a range of indicies
    $indi = range(0,$count-1);
    // Randomize indicies array
    shuffle($indi);
    // Initialize new array
    $newarray = array($count);
    // Holds current index
    $i = 0;
    // Shuffle multidimensional array
    foreach ($indi as $index)
    {
        $newarray[$i] = $array[$index];
        $i++;
    }
    return $newarray;
}
?>

Please note it only works on two dimensional arrays. Here is an example:

<?php
$myarray = array("Google" => array("Name" => "Google", "URL" => "www.google.com", "Usage" => "Googling"), "Yahoo" => array("Name" => "Yahoo", "URL" => "www.yahoo.com", "Usage" => "Yahooing?"), "Ask" => array("Name" => "Ask", "URL" => "www.ask.com", "Usage" => "Asking Jeeves"));

print_r(twodshuffle($myarray));

/* And the result is:
Array ( [0] => Array ( [Name] => Ask [URL] => www.ask.com [Usage] => Asking Jeeves ) [1] => Array ( [Name] => Google [URL] => www.google.com [Usage] => Googling ) [2] => Array ( [Name] => Yahoo [URL] => www.yahoo.com [Usage] => Yahooing? ) )
*/
?>

</div>
<div id="footer">
</div>
</center>
</body>
</html>
<?php
function newDeck($numJokers = 0)
 {
  // Returns $deck: array of 52 standard deck of 4-suit cards plus $numJokers jokers, shuffled (key starts at zero)
  // in format of e.g. $deck[4] = "A &spades;" = ace of spades (fifth card)
  $suitCards = array("J", "Q", "K", "A");
  $suitCards = array_merge($suitCards, range(2, 10));
  $hearts = array();
  $spades = array();
  $diamonds = array();
  $clubs = array();
  foreach($suitCards as $card)
  {
   $hearts[] = "<span style=\"color: #FF0000;\">" . $card . " &hearts;" . "</span>";
   $spades[] = "<span style=\"color: #000000;\">" . $card . " &spades;" . "</span>";
   $diamonds[] = "<span style=\"color: #FF0000;\">" . $card . " &diams;" . "</span>";
   $clubs[] = "<span style=\"color: #000000;\">" . $card . " &clubs;" . "</span>";
  }
  $jokers = array();
  for($i = 0; $i < $numJokers; $i++)
   $jokers[] = "<span style=\"color: #8467D7;\">JOKER</span>";
  $deck = array_merge($hearts, $spades, $clubs, $diamonds, $jokers);
  shuffle($deck);
  return $deck;
 }

 function deal($deck, $numHands = 1, $numCards = 7)
 {
  // Returns $hand: two-dimensional array, first key being player ID and second being card number (both starting from zero)
  // e.g. $hand[2][4] = "6 &hearts;" = six of hearts (third hand, fifth card)
  // To return, use extract, e.g. extract(deal($deck, 2, 13)); (also returns $deck)
  $hand = array();
  for($i = 0; $i < $numHands; $i++)
  {
   for($j = 0; $j < $numCards; $j++)
   {
    $hand[$i][$j] = next($deck);
    if($i == 0 && $j == 0)
     $hand[0][0] = prev($deck);
   }
  }
  $deck = array_splice($deck, ($numHands * $numCards));
  return compact("hand", "deck");
 }

 $deck = newDeck();
 extract(deal($deck, 3, 7));

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <!-- Just an example of test output to demonstrate capability. -->
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Basic Playing Card Functions</title>
 </head>

 <body>
  <h1>Deck</h1>
  <pre>
<?php
 print_r($deck);
?>
  </pre>
  <hr />
  <h1>Hands</h1>
  <pre>
<?php
 print_r($hand);
?>
  </pre>
 </body>
</html>