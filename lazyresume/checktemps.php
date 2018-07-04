<?php
session_start();
include "dbcnct.php";
$tmpid=$_SESSION['tmpid'];
/*include "templatesphp.php";
echo $tempid."<br>";*/
$mymail=$_SESSION['mail'];
$myid=$_SESSION['uid'];
echo $myid;
$query=mysql_query("select * from details where tmpid='$tmpid' && email='$mymail' ") or die(mysql_error());

$fetch=mysql_fetch_array($query);
echo "<br>"."".$fetch[1];


if($fetch[1]==31)
{
	echo "success";
	header('Location:check.php');
}

elseif($fetch[1]==32)
{
	echo "success";
	header('Location:check1.php');
}

elseif($fetch[1]==33)
{
	echo "success";
	header('Location:check3.php');
}
?>