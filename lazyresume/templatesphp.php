<?php
session_start();
include "dbcnct.php";
mysql_select_db('resumedb') or die("no database");//mysql_error()
$tempid=$_POST['tmpid'];
$myid=$_SESSION['uid'];
$username=$_SESSION['uname'];
$mymail=$_SESSION['mail'];
$name=$_POST['name'];
//if(isset($name))
//{
  //echo "<script>alert('please enter your name');</script>";
  //echo "<script>window.location='home.php';</script>";
//}
//$email=$_POST['email'];
//$state=$_POST['state'];
$cnumber=$_POST['cnumber'];
//if (preg_match('/^0\d{9}$/', $cnumber) ) {
//} else {
  //echo "<script>alert('please enter correct number');</script>";
  //echo "<script>window.location='home.php';</script>";

    
//}
$address=$_POST['address'];
//$door=$_POST['door'];
//$place=$_POST['place'];
$date=$_POST['date'];
$carobj=$_POST['carobj'];
$edu00=$_POST['edu00'];
$edu01=$_POST['edu01'];
$edu02=$_POST['edu02'];
$edu10=$_POST['edu10'];
$edu11=$_POST['edu11'];
$edu12=$_POST['edu12'];
$edu20=$_POST['edu20'];
$edu21=$_POST['edu21'];
$edu22=$_POST['edu22'];
/*if(isset($_POST['ex0']))
{
$ex0=$_POST['ex0'];

}

if(isset($_POST['ex1']))
{
$ex1=$_POST['ex1'];
}

if(isset($_POST['ex2']))
{
$ex2=$_POST['ex2'];
}


if(isset($_POST['ex3']))
{
$ex3=$_POST['ex3'];
}*/


$ex00=$_POST['ex0'];
foreach($ex00 as $value){
	$new[]=$value;

}
$max=count($ex00);
//echo $max."<br>";
$ex00=implode(',',$new);



$lang00=$_POST['lang0'];
foreach($lang00 as $value){
	$new5[]=$value;

}
$max5=count($lang00);
//echo $max."<br>";
$lang00=implode(',',$new5);


$hobby00=$_POST['hobby0'];
foreach($hobby00 as $value){
	$new6[]=$value;

}
$max6=count($hobby00);
//echo $max."<br>";
$hobby00=implode(',',$new6);


$skill00=$_POST['skill0'];
foreach ($skill00 as $value) {
	$new1[]=$value;
}
$max1=count($skill00);
//echo $max1;
$skill00=implode(',',$new1);


$pro00=$_POST['pro0'];
foreach ($pro00 as $value) {
	$new2[]=$value;
}
$max2=count($pro00);
//echo $max1;
$pro00=implode(',',$new2);

$ac00=$_POST['ac0'];
foreach ($ac00 as $value) {
	$new3[]=$value;
}
$max3=count($ac00);
//echo $max1;
$ac00=implode(',',$new3);

$act00=$_POST['act0'];
foreach ($act00 as $value) {
	$new4[]=$value;
}
$max4=count($act00);
//echo $max1;
$act00=implode(',',$new4);

/*$skill0=$_POST['skill0'];
$skill1=$_POST['skill1'];
$skill2=$_POST['skill2'];
$skill3=$_POST['skill3'];*/
$declare=$_POST['declaration'];
$tempid=$_POST['tmpid'];
$_SESSION['tmpid']=$tempid;
$sql="insert into details values('','$tempid','$username','$name','$mymail','$cnumber','$address','$date','$carobj','$edu00','$edu01',
'$edu02','$edu10','$edu11','$edu12','$edu20','$edu21','$edu22','$ex00',
'$lang00','$hobby00','$skill00','$pro00','$ac00','$act00','$declare')";
$query=mysql_query($sql);


if (!$query) {

	//$_SESSION['status_details']=1;
	
	/*echo  /*$tempid.$name."<br>".$email."<br>".$cnumber."<br>".$address."<br>".
	$door."<br>".$place."<br>".$date."<br>".$state."<br>".$carobj."<br>"
	.$edu00."<br>".$edu01."<br>".$edu02."<br>".$edu10."<br>".$edu11."<br>"
	.$edu12."<br>".$ex00."<br>". $skill00."<br>".$pro00."<br>".$ac00."<br>".
	$act00."<br>".$declare."<br>".$username;*/
	
echo mysql_error();
}
	//header('Location:review.php');
	/*$_SESSION['status_details']=0;*/
  else{
  	header('Location:checktemps.php');
  }
	

?>
