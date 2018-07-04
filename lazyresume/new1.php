<?php
session_start();
include "dbcnct.php";
mysql_select_db('resumedb') or die("no database");//mysql_error()
$myid=$_SESSION['uid'];
$username=$_SESSION['uname'];
$name=$_POST['name'];
$email=$_POST['email'];
$state=$_POST['state'];
$cnumber=$_POST['cnumber'];
$address=$_POST['address'];
$door=$_POST['door'];
$place=$_POST['place'];
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
echo $max;
$ex00=implode(',',$new);



$skill00=$_POST['skill0'];
foreach ($skill00 as $value) {
	$new1[]=$value;
}
$max1=count($skill00);
echo $max1;
$skill00=implode(',',$new1);



/*$skill0=$_POST['skill0'];
$skill1=$_POST['skill1'];
$skill2=$_POST['skill2'];
$skill3=$_POST['skill3'];*/
$pro0=$_POST['pro0'];
$pro1=$_POST['pro1'];
$pro2=$_POST['pro2'];
$pro3=$_POST['pro3'];
$ac0=$_POST['ac0'];
$ac1=$_POST['ac1'];
$ac2=$_POST['ac2'];
$ac3=$_POST['ac3'];
$act0=$_POST['act0'];
$act1=$_POST['act1'];
$act2=$_POST['act2'];
$act3=$_POST['act3'];
$declare=$_POST['declaration'];


$sql="insert into details values('','$username','$name','$email','$state',
'$cnumber','$address','$door','$place','$date','$carobj','$edu00','$edu01',
'$edu02','$edu10','$edu11','$edu12','$edu20','$edu21','$edu22','$ex00',
'','','','$skill00','','','','$pro0','$pro1','$pro2','$pro3','$ac0',
'$ac1','$ac2','$ac3','$act0','$act1','$act2','$act3','$declare')";
$query=mysql_query($sql);


if (!$query) {

	//$_SESSION['status_details']=1;
	
	/*echo  $name."<br>".$email."<br>".$cnumber."<br>".$address."<br>".$door."<br>".$place."<br>".$date."<br>".$state."<br>".$carobj."<br>".$edu00."<br>".$edu01."<br>".$edu02."<br>".$edu10."<br>".$edu11
	."<br>".$edu12."<br>".$ex00."<br>". $skill00."<br>".$pro0."<br>".$pro1."<br>".$pro2."<br>".$pro3.
	"<br>".$ac0."<br>".$ac1."<br>".$ac2."<br>".$ac3.
	"<br>".$act0."<br>".$act1."<br>".$act2."<br>".$act3.
	"<br>".$declare."<br>".
	$username;*/
	
echo mysql_error();
}
else
{
	header('Location:review.php');
	/*$_SESSION['status_details']=0;*/
}

	

?>
