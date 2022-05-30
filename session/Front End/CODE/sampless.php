<?php
$id=$_GET['id'];
include "config.php";
if($id==1)
{

	foreach($_POST as $key1=>$val)
		{
		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");
		$count1++;
		echo "<input type='hidden' value='$count1'>$key1<br>";
		if($count1==2)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='2'");
		
		}
		if($count1==4)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='4'");
		
		}
		
		if($count1==6)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='6'");
		
		}
		if($count1==8)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='8'");
		
		}
		
		if($count1==10)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='10'");
		
		}
	
		}
	}
	
	
	
	
		
	if($id==2)
{

	foreach($_POST as $key1=>$val)
		{
		/*$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','2')");*/
				$count1++;
		echo "<input type='hidden' value='$count1'>$key1<br>";
		if($count1==2)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='12'");
		
		}
		if($count1==4)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='14'");
		
		}
		
		if($count1==6)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='16'");
		
		}
		if($count1==8)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='18'");
		
		}
		
		if($count1==10)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='20'");
		
		}
		}
	}
	
	
	if($id==3)
{

	foreach($_POST as $key1=>$val)
		{
		/*$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','3')");*/
		$count1++;
		echo "<input type='hidden' value='$count1'>$key1<br>";
		if($count1==2)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='22'");
		
		}
		if($count1==4)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='24'");
		
		}
		
		if($count1==6)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='26'");
		
		}
		if($count1==8)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='28'");
		
		}
		
		if($count1==10)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='30'");
		
		}
		}
	}
	
	
	if($id==4)
{

	foreach($_POST as $key1=>$val)
		{
		/*$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','4')");*/
		$count1++;
		echo "<input type='hidden' value='$count1'>$key1<br>";
		if($count1==2)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='32'");
		
		}
		if($count1==4)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='34'");
		
		}
		
		if($count1==6)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='36'");
		
		}
		if($count1==8)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='38'");
		
		}
		
		if($count1==10)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='40'");
		
		}
		}
	}
	
	if($id==5)
{

	foreach($_POST as $key1=>$val)
		{
	/*	$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','5')");*/
		$count1++;
		echo "<input type='hidden' value='$count1'>$key1<br>";
		if($count1==2)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='42'");
		
		}
		if($count1==4)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='44'");
		
		}
		
		if($count1==6)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='46'");
		
		}
		if($count1==8)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='48'");
		
		}
		
		if($count1==10)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='50'");
		
		}
		}
	}
	
	
	if($id==6)
{

	foreach($_POST as $key1=>$val)
		{
		/*$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','6')");*/
	$count1++;
		echo "<input type='hidden' value='$count1'>$key1<br>";
		if($count1==2)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='52'");
		
		}
		if($count1==4)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='54'");
		
		}
		
		if($count1==6)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='56'");
		
		}
		if($count1==8)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='58'");
		
		}
		
		if($count1==10)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='60'");
		
		}
		}
	}
	
?>