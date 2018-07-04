<?php 

session_start();
//$tid=$_POST['tmpid'];
//echo $tid;
if(isset($_SESSION['uname']) && isset($_SESSION['mail']) )
{
	//$image1=$_GET['temp1'];
	//ECHO $_SESSION['uname']." ".$_SESSION['mail'];
include "home.php";
include "dbcnct.php"; 

}
else
{
echo "<script>window.alert('the username or password is incorrect')</script>"; 
}

?>