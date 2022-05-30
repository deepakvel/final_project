<?php
ob_start();
session_start();
$_SESSION['id']=$id=$_GET['id'];
include "config.php";
if($id==1)
{

	foreach($_POST as $key1=>$val)
		{
		/*$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
		$count1++;
		echo "<input type='hidden' value='$count1'>$key1<br>";
		if($count1==1)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='1'");
		
		}
		if($count1==2)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='2'");
		
		}
		
		if($count1==3)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='3'");
		
		}
		if($count1==4)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='4'");
		
		}
		
		if($count1==5)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='5'");
		
		}
	header("location:password1.php?id=7");
		}
	}
	
	
		
		
	if($id==2)
{

	foreach($_POST as $key1=>$val)
		{
		/*$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','2')");*/
				$count1++;
		echo "<input type='hidden' value='$count1'>$key1<br>";
		if($count1==1)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='6'");
		
		}
		if($count1==2)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='7");
		
		}
		
		if($count1==3)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='8'");
		
		}
		if($count1==4)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='9'");
		
		}
		
		if($count1==5)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='10'");
		
		}
		header("location:password1.php?id=7");
		}
	}
	
	
	if($id==3)
{

	foreach($_POST as $key1=>$val)
		{
		/*$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','3')");*/
		$count1++;
		echo "<input type='hidden' value='$count1'>$key1<br>";
		if($count1==1)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='11'");
		
		}
		if($count1==2)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='12'");
		
		}
		
		if($count1==3)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='13'");
		
		}
		if($count1==4)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='14'");
		
		}
		
		if($count1==5)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='15'");
		
		}
		header("location:password1.php?id=7");
				}
	}
	
	
	if($id==4)
{

	foreach($_POST as $key1=>$val)
		{
		/*$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','4')");*/
		$count1++;
		echo "<input type='hidden' value='$count1'>$key1<br>";
		if($count1==1)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='16'");
		
		}
		if($count1==2)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='17'");
		
		}
		
		if($count1==3)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='18'");
		
		}
		if($count1==4)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='19'");
		
		}
		
		if($count1==5)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='20'");
		
				}
				header("location:password1.php?id=7");
		}
	}
	
	if($id==5)
{

	foreach($_POST as $key1=>$val)
		{
		/*$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','5')");*/
		$count1++;
		echo "<input type='hidden' value='$count1'>$key1<br>";
		if($count1==1)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='21'");
		
		}
		if($count1==2)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='22'");
		
		}
		
		if($count1==3)
		{
		
		
$sql=mysql_query("update inputs set row1='$key1' where id='23'");
		
		}
		if($count1==4)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='24'");
		
		}
		
		if($count1==5)
		{
		
	
$sql=mysql_query("update inputs set row1='$key1' where id='25'");
		
		}
		header("location:password1.php?id=7");
		}
	}
	
	
	if($id==6)
{

	foreach($_POST as $key1=>$val)
		{
		/*$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','6')");*/
	$count1++;
		echo "<input type='hidden' value='$count1'>$key1<br>";
		if($count1==1)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='26'");
		
		}
		if($count1==2)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='27'");
		
		}
		
		if($count1==3)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='28'");
		
		}
		if($count1==4)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='29'");
		
		}
		
		if($count1==5)
		{
		
/*		$sql=mysql_query("insert into inputs(row1,rowid)values('$key1','1')");*/
$sql=mysql_query("update inputs set row1='$key1' where id='30'");
		
		}
		header("location:password1.php?id=7");
		}
	}
	
?>