<?php

define("DB_NAME", "resumedb");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define ('DB_HOST', 'localhost');
$dbc = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if(!$dbc)
{
  
echo "Server not found";
  }
 



$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];



$sql="INSERT INTO register VALUES('','$email','$username','$password')";

$query=mysqli_query($dbc,$sql);//each time db is declared wen sqli is used

if ($query) {
	echo "<script>window.alert('you have been registered successsfully!')</script>";
	echo "<script>window.location='templates.php';</script>";
}
else
{
	echo "<script>window.alert('error occured while registering you')</script>";
	header('Location:templates.php');
}

?>