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


<html>
    <head>
     <title>Fields Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/resume.css">
  <link rel="stylesheet" type="text/css" href="css/lazy.css">
 
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript"></script>        
    </head>
    
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">lazyresume</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
       <li><a href="signout.php">SIGN OUT</a></li>
      </ul>
</nav>
<div style="background-color:red;height:100%;width:300px;margin-top:70px;">
<ul>
<li><html>
<head>
<style>
#review{
    border-style:solid;
    padding: 25px;
}
.nm{
    font-family:timesnewroman;
    font-size:30px;
    text-align:center;
    text-transform:uppercase;
}
#ml{
font-family:timesnewroman;
font-size:20px;
text-align:center;
}

.head
{
    font-family:timesnewroman;
    font-size:20px;
    font-weight:bold;
    text-decoration:underline;
    margin-left:50px;
    text-transform:uppercase;
}
#car{
text-indent:90px;
font-size:20px;
margin-left:30px;
font-family:timesnewroman;
text-align:justified;
}

.xp{
    font-size:20px;
    margin-left:100px;
    font-family:timesnewroman;
}
@media print{
    #print,#edit{
        display: none;
    }
}
</style>
</head>
<body>
<div id="review">
<p class="nm">
    <?php echo  $name."<br>"; ?>
</p>

<!--<p id="ml">
    <?php echo $email."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp".$address.",".$door.",".$place.",".$state.","."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp".$cnumber."<br>"; ?>
</p>--> 
</p>
<p class="head" >career objective</p>
    <p id="car" >
    <?php echo $carobj."<br>" ; ?>
    </p>

<p class="head" >education</p>
<table border="1px" style="border-collapse:collapse;width:80%;" class="xp">
<tr>
<th>board/university name</th>
<th>year of passing</th>
<th>percentage</th>
</tr>
<tr>
<td><?php echo $edu00; ?></td>
<td><?php echo $edu01; ?></td>
<td><?php echo $edu02; ?></td>
</tr>
<tr>
<td><?php echo $edu10; ?></td>
<td><?php echo $edu11; ?></td>
<td><?php echo $edu12; ?></td>
</tr>
<tr>
<td><?php echo $edu20; ?></td>
<td><?php echo $edu21; ?></td>
<td><?php echo $edu22; ?></td>
</tr>
</table>

<!-- starting of experience -->

 <?php for($i=0;$i<$max;$i++) { 
if($new[$i]=='')
{
    continue;
}
  else{
    $ex2[$i]=$new[$i];
  }
}
  ?>
  

<?php
$c=0;
for($i=0;$i<$max;$i++) { 
if(isset($ex2[$i])){ 
$ex3[$i]=$ex2[$i];
$c++;}
  continue; 
  }
  ?>
 <?php if($c!=0) {?>
<p class="head" >experience</p>
<ul class="xp"> <?php } ?>
<?php for($i=0;$i<$c;$i++){ ?>
<li><?php echo $ex3[$i]; } ?></li>
</ul>

<!-- ending for experience -->

 <!-- starting of skill -->

<?php for($i=0;$i<$max1;$i++) { 
if($new1[$i]=='')
{
    continue;
}
  else{
    $tec2[$i]=$new1[$i];
  }
}
  ?>
  

<?php
$c1=0;
for($i=0;$i<$max1;$i++) { 
if(isset($tec2[$i])){ 
$tec3[$i]=$tec2[$i];
$c1++;}
  continue; 
  }
  ?>
 <?php if($c1!=0) {?>
<p class="head" >technical skills</p>
<ul class="xp"> <?php } ?>
<?php for($i=0;$i<$c1;$i++){ ?>
<li><?php echo $tec3[$i]; } ?></li>
</ul>

<!-- ending for skills -->

<!-- starting of languages -->

<?php for($i=0;$i<$max5;$i++) { 
if($new5[$i]=='')
{
    continue;
}
  else{
    $lang2[$i]=$new5[$i];
  }
}
  ?>
  

<?php
$c5=0;
for($i=0;$i<$max5;$i++) { 
if(isset($lang2[$i])){ 
$lang3[$i]=$lang2[$i];
$c5++;}
  continue; 
  }
  ?>
 <?php if($c5!=0) {?>
<p class="head" >languages known</p>
<ul class="xp"> <?php } ?>
<?php for($i=0;$i<$c5;$i++){ ?>
<li><?php echo $lang3[$i]; } ?></li>
</ul>

<!-- ending for languages -->


<!-- starting of hobbies -->

<?php for($i=0;$i<$max6;$i++) { 
if($new6[$i]=='')
{
    continue;
}
  else{
    $hobby2[$i]=$new6[$i];
  }
}
  ?>
  

<?php
$c6=0;
for($i=0;$i<$max6;$i++) { 
if(isset($hobby2[$i])){ 
$hobby3[$i]=$hobby2[$i];
$c6++;}
  continue; 
  }
  ?>
 <?php if($c6!=0) {?>
<p class="head" >hobbies</p>
<ul class="xp"> <?php } ?>
<?php for($i=0;$i<$c6;$i++){ ?>
<li><?php echo $hobby3[$i]; } ?></li>
</ul>

<!-- ending for hobbies -->




<!-- starting of project -->

<?php for($i=0;$i<$max2;$i++) { 
if($new2[$i]=='')
{
    continue;
}
  else{
    $pro2[$i]=$new2[$i];
  }
}
  ?>
  

<?php
$c2=0;
for($i=0;$i<$max2;$i++) { 
if(isset($pro2[$i])){ 
$pro3[$i]=$pro2[$i];
$c2++;}
  continue; 
  }
  ?>
 <?php if($c2!=0) {?>
<p class="head" >projects</p>
<ul class="xp"> <?php } ?>
<?php for($i=0;$i<$c2;$i++){ ?>
<li><?php echo $pro3[$i]; } ?></li>
</ul>

<!-- ending for projects -->

<!-- starting of awards -->

 <?php for($i=0;$i<$max3;$i++) { 
if($new3[$i]=='')
{
    continue;
}
  else{
    $ac2[$i]=$new3[$i];
  }
}
  ?>
  

<?php
$c3=0;
for($i=0;$i<$max3;$i++) { 
if(isset($ac2[$i])){ 
$ac3[$i]=$ac2[$i];
$c3++;}
  continue; 
  }
  ?>
 <?php if($c3!=0) {?>
<p class="head" >achievements and awards</p>
<ul class="xp"> <?php } ?>
<?php for($i=0;$i<$c3;$i++){ ?>
<li><?php echo $ac3[$i]; } ?></li>
</ul>

<!-- ending for awards -->

  <!-- starting of activities -->
 <?php for($i=0;$i<$max4;$i++) { 
if($new4[$i]=='')
{
    continue;
}
  else{
    $act2[$i]=$new4[$i];
  }
}
  ?>
  

<?php
$c4=0;
for($i=0;$i<$max4;$i++) { 
if(isset($act2[$i])){ 
$act3[$i]=$act2[$i];
$c4++;}
  continue; 
  }
  ?>
 <?php if($c4!=0) {?>
<p class="head" >activities and participations</p>
<ul class="xp"> <?php } ?>
<?php for($i=0;$i<$c4;$i++){ ?>
<li><?php echo $act3[$i]; } ?></li>
</ul>

<!-- ending for activities -->
<p class="head" >declaration</p>
    <p id="car" >
    <?php echo $declaration."<br>"; ?>
    </p>

  <p style="font-weight:bold;font-size:25px;">
    <!--Place:<?php echo $place."<br>"; ?>-->
    Date:<?php echo $date; ?>
  </p>
    
 <p class="nm" style="text-align:right;padding-right:35px;font-size:23px;">
 <?php echo "(".$name.")" ."<br>"; ?>
    </p>

</div>
<br>

<a id="edit" href="update.php" style="padding:15px 40px;text-decoration:none;float:left;font-size:20px;border-radius:10px;background-color:#330033;color:white;cursor:pointer;">Edit</a>
<button id="print" onclick="myFunction()" style="padding:15px 40px;float:right;font-size:20px;border-radius:10px;background-color:#330033;color:white;cursor:pointer;">Print</button>
</body>
</html>

<script type="text/javascript">
function myFunction() {
    window.print();
}
</script>


</div>
</li>
</ul>
</html>