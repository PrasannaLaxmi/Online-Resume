<?php
session_start();
include "dbcnct.php";
$myid=$_SESSION['uid'];
$username=$_SESSION['uname'];
$mymail=$_SESSION['mail'];
$tmpid=$_SESSION['tmpid'];
//echo $mymail;
/*if($username!=NULL && $mymail!=NULL)
{*/
$sql=mysql_query("select * from details where tmpid='$tmpid' && email='$mymail'");

$hh=mysql_num_rows($sql);
  if($hh>0)
  {
        
    while($jhj=mysql_fetch_array($sql) )
    {   $tempid=$jhj[1];
        $name=$jhj[3];
    	$email=$jhj[4];
    	$cnumber=$jhj[5];
    	$address=$jhj[6];
        $date=$jhj[7];
   	    $carobj=$jhj[8];
    	$edu00=$jhj[9];
        $edu01=$jhj[10];
        $edu02=$jhj[11];
        $edu10=$jhj[12];
        $edu11=$jhj[13];
        $edu12=$jhj[14];
        $edu20=$jhj[15];
        $edu21=$jhj[16];
        $edu22=$jhj[17];
    	$ex00=$jhj[18];
    	$skill00=$jhj[19];
        $lang00=$jhj[20];
        $hobby00=$jhj[21];
    	$pro00=$jhj[22];
        $ac00=$jhj[23];
        $act00=$jhj[24];
        $declaration=$jhj[25];
    }
        
  }
    else
    {
      echo "Please enter correct username and password";
    }
/*}
else{
  echo "values must not be empty";
}*/


//for experience
$ex00=explode(',',$ex00);
foreach($ex00 as $value){
    $new[]=$value;

}
$max=count($ex00);

//echo $max."<br>";

//for skill
$skill00=explode(',',$skill00);
foreach($skill00 as $value){
    $new1[]=$value;

}
$max1=count($skill00);
//echo $max1;

$lang00=explode(',',$lang00);
foreach($lang00 as $value){
    $new5[]=$value;

}
$max5=count($lang00);


$hobby00=explode(',',$hobby00);
foreach($hobby00 as $value){
    $new6[]=$value;

}
$max6=count($hobby00);


//for projects
$pro00=explode(',',$pro00);
foreach($pro00 as $value){
    $new2[]=$value;

}
$max2=count($pro00);

//for awards
$ac00=explode(',',$ac00);
foreach($ac00 as $value){
    $new3[]=$value;

}
$max3=count($ac00);

//for activities
$act00=explode(',',$act00);
foreach($act00 as $value){
    $new4[]=$value;

}
$max4=count($act00);

?>


