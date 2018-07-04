<!DOCTYPE html>
<html lang="en">
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
        <li><a href="review.php">SHOW MY RESUMES</a></li>
        <li><a href="signout.php">SIGN OUT</a></li>
	  </ul>
</nav>
	
		<!-- <div id="boxSign">
         <form id="resumeInputs" method="post" action="preview.php">
		 <p class="head">SignIn</p>
		 
		 <input type="text" class="tablefields" name="stuName"  placeholder="enter your name" required/><br>
		 <input type="text" class="tablefields" name="stuName"  placeholder="enter password" required/><br>
		  <input type="submit" OGIN" style="background-color:blue;height:30;width:90px;margin-left:100px;border-radius:10px;"/>
             </form>   
		 </div>
		 
		 
		 <div id="boxAccount">
         <form id="resumeInputs" method="post" action="preview.php">
		 <p class="head">LogIn</p>
		 
		 <input type="text" class="tablefields" name="stuName"  placeholder="enter your name"/><br>
		 <input type="text" class="tablefields" name="stuName"  placeholder="enter password"/><br>
		  <input type="submit" OGIN" style="background-color:blue;height:30;width:90px;margin-left:100px;border-radius:10px;"/>
             </form>   
		 </div>
			
			
			<script>
$(document).ready(function(){
	
	$("#pop").click(function(){
		
		$("#boxSign").fadeToggle();
	});
});


$(document).ready(function(){
	
	$("#popUp").click(function(){
		
		$("#boxAccount").fadeToggle();
	});
});
</script>-->
<br><br><br>
<?php
session_start();
include "dbcnct.php";
$myid=$_SESSION['uid'];
$username=$_SESSION['uname'];
$mymail=$_SESSION['mail'];
//echo $mymail;
/*if($username!=NULL && $mymail!=NULL)
{*/
$sql=mysql_query("select * from details where email='$mymail'");

$hh=mysql_num_rows($sql);
  if($hh>0)
  {
        
    while($jhj=mysql_fetch_array($sql) )
    {
      $tempid=$jhj[1];
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


 <div id="formContainer">
	<form id="resumeInputs" method="post" action="updateaction.php">

<!-- personal details module starting point -->
	<div id="personalDetailsFlip">
		<h3 id="pdTitle">Personal Details<span style="float:right;" class="glyphicon glyphicon-chevron-down"></span></h3>
	</div>

	<div id="personalDetails">
<?php $tmpid= $_COOKIE['mytempid'];?>
    <input type="text" class="tablefields1" name="tmpid" value="<?php echo $tmpid;?>"><br/>
  
		Name :
		<input type="text" value="<?php echo $name; ?>" class="tablefields1" name="name" value="name"  placeholder="Enter Your Name"style="margin-left:75px;" required/><br/>
		Address : 
		<input type="text" value="<?php echo $address; ?>" class="tablefields1" name="address"  placeholder="Enter Address"style="margin-left:60px;" required/><br/>
		<!--State :
		<input type="text" value="<?php echo $state; ?>" class="tablefields1" name="state"  placeholder="Enter State" style="margin-left:79px;" required/><br/>-->
		Contact Number : 
		<input type="text" value="<?php echo $cnumber; ?>" class="tablefields1" name="cnumber"  placeholder="Enter Contact" style="margin-left:4px;" required/><br/>
		<!--Email : 
		<input type="text" value="<?php echo $email; ?>" class="tablefields1" name="email"  placeholder="Enter Email"style="margin-left:78px;" required/><br/>
	  Place: 
		<input type="text" value="<?php echo $place; ?>" class="tablefields1" name="place"  placeholder="Enter Place"style="margin-left:81px;" required/><br/>-->
		Date: 
		<input type="date" value="<?php echo $date; ?>" class="tablefields1" name="date"  placeholder="dd mm yyyy"style="margin-left:84px;padding-bottom:20px; " required/><br/>
		<!--Door No: 
		<input type="text" value="<?php echo $door; ?>" class="tablefields1" name="door"  placeholder="Enter Your Door Number"style="margin-left:60px;padding-bottom:20px;" required/><br/>-->

	</div><br/>
<!-- personal details module ending point -->
	
<!-- career objective module starting point -->
				
	<div id="careerObjectiveFlip">
		<h3 id="coTitle">Career Objective<span style="float:right;margin-right:-5px;" class="glyphicon glyphicon-chevron-down"></span></h3>
				
	</div>
	
	<div id="careerObjective">          
        <textarea name="carobj" rows="10" cols="100" required>
        <?php echo $carobj; ?> </textarea>&nbsp;

        <div style="background-color:honeydew;height:275px;width:340px;float:right;margin-right:10px;margin-top:1px;overflow:auto;">
         <p style="color:#FF267D;font-family:cambria;font-size:20px;">Must include:<br></p>
         <p style="color:#8C408C;">1.Who You Are?<br></p>
         <p style="color: #66FF00;">-Recent college graduate?<br>
         -Experienced administrator?<br>
         -Accomplished software engineer?<br>
         -The way you define yourself should be your lead.<br></p>
         <p style="color:#8C408C;">2.What You Can Do?<br></p>
         <p style="color: #66FF00;">-List your strengths one after the other.<br></p>
         <p style="color:#8C408C;">3.What You Are Looking For?<br></p>
         <p style="color: #66FF00;">-Simply state the job you are applying for.<br>
         -entry-level administration<br>
         -finance<br>
         -marketing <br>
         -journalism<br></p>
        <p style="color:#8C408C;"> 4.Goal For Your Future<br></p>
         <p style="color: #66FF00;">-State what you hope to get out of the job <br>
         -What you hope to learn from the experience.<br></p>
        </div>
                      
     	<!--<div class="container" style="background-color:honeydew;height:275px;width:340px;float:right;margin-right:10px;margin-top:1px;" >
         <div class="row">
           <div class="col-md-12">
             <p style="color:black;font-family:cambria;font-size:20px;">Must Include:</p>
           </div>
         </div>
 
         <div class="row">
           <div class="col-md-6">
             <p id="wyr" class="btn btn-primary" data-toggle="tooltip" title=
                "1.Recent college graduate?
                 2.Experienced administrator?
                 3.Accomplished software engineer?
                 4.The way you define yourself should be your lead.">who you are?</p>
	         </div>
          <div class="col-md-5">
             <p id="wyc" class="btn btn-primary" data-toggle="tooltip" title=
             "List your strengths one after the other.">what you can do?</p>
          </div>
        </div>


        <div class="row" style="margin-top:50px;">
           <div class="col-md-6">
             <p id="wyr" class="btn btn-primary" data-toggle="tooltip" title=
                "simply state the job you are applying for.
                -entry-level administration, finance, marketing, journalism, etc.">what you are looking for?</p>
           </div>
          <div class="col-md-5">
             <p  id="wyc" class="btn btn-primary" data-toggle="tooltip" title= "State what you hope to get out of the job (besides a decent paycheck) or what you hope to learn from 
             the experience.">goal for your future</p>
          </div>
        </div>-->
  
<!--<div class="row">
 <div class="col-md-6">
  </div>
<div class="col-md-5">
<div id="wyc1"> 
<ol>
	<li>Simply state the job you are applying for</li>
</ol>
</div>
</div>
 	</div>-->
		

<!-- <div class="btn-group btn-group-justified">
 <div class="col-md-6">
 <button type="button" id="wyl" class="btn btn-primary">what you are looking for?</button>
  </div>
  <div class="col-md-7">
  <button type="button"  id="wyg" class="btn btn-primary">goal for your future?</button>
  </div>
  </div>-->
<!--<div id="wyg1"> 
<ol>
  <li>List your strengths.</li>
</ol>
</div>
</div> --> 
<!--<input id="male" type="radio" name="sex" ale" onclick="fun1()">male<br>
    <input id="female" type="radio" name="sex" emale"onclick="fun2()">female<br>	-->
	<!--<button class="btn btn-primary">what you can do?</button>	
	<button class="btn btn-primary">what you are looking for?</button>	
	<button class="btn btn-primary">goals for ur future?</button>	-->

   <!--<script>
       function fun1(){
	      var x=document.getElementById('male').          document.getElementById('print').
                      }
        function fun2(){
	       var x=document.getElementById('female').           document.getElementById('print').
                       }
    </script>-->
                      
    </div><br>
	
<!-- career objective module ending point -->
	
<!-- education module starting point -->
				
	<div id="educationFlip">
		<h3 id="eduTitle">Education<span style="float:right;" class="glyphicon glyphicon-chevron-down"></span></h3>
	</div>
	
	<div id="education">
        <div id="educ">
        <table border="1" style="border-collapse:collapse;border:none;width:90%;margin-left:25px;padding-top:20px;">
        <tr>
        <th style="padding-bottom:10px;">Board/University </th>
        <th>Year Of Passing</th> 
        <th>Percentage</th>
        </tr>
        <tr>
        <td style="padding-top:9px;"><textarea class="tablefields"  name="edu00" placeholder="enter your university/board name"  required><?php echo $edu00; ?></textarea></td>
        <td><input type="text" class="tablefields" name="edu01" value="<?php echo $edu01; ?>" placeholder="enter your year of passing" required></td>
        <td><input type="text" class="tablefields" name="edu02" value="<?php echo $edu02; ?>" placeholder="enter your percentage" required></td>
        </tr>
        <tr>
        <td style="padding-top:9px;"><textarea class="tablefields" name="edu10" placeholder="enter your university/board name" required><?php echo $edu10; ?></textarea></td>
        <td><input type="text" class="tablefields" name="edu11" value="<?php echo $edu11; ?>" placeholder="enter your year of passing" required></td>
        <td><input type="text" class="tablefields" name="edu12" value="<?php echo $edu12; ?>" placeholder="enter your percentage" required></td>
        </tr>
    <tr>
        <td style="padding-top:9px;"><textarea class="tablefields" name="edu20" placeholder="enter your university/board name" required><?php echo $edu20; ?></textarea></td>
        <td><input type="text" class="tablefields" name="edu21" value="<?php echo $edu21; ?>" placeholder="enter your year of passing" required></td>
        <td><input type="text" class="tablefields" name="edu22" value="<?php echo $edu22; ?>" placeholder="enter your percentage" required></textarea></td>
        </tr>
        </table>
		</div>
   <!--<script>
       function fun1(){
	      var x=document.getElementById('male').          document.getElementById('print').
                      }
        function fun2(){
	       var x=document.getElementById('female').           document.getElementById('print').
                       }
    </script> -->
		                     
</div><br/>
			
<!-- education module ending point -->
					
<!-- experience module starting point -->
				
	<div id="experienceFlip">
		<h3 id="exTitle">Experience<span style="float:right;" class="glyphicon glyphicon-chevron-down"></span></h3>
	</div>
	<div id="experience">
        <div>

	   <!-- <textarea name="expe" rows="10" cols="100" >
        </textarea>&nbsp;-->
        <ol style="padding-top:25px;">
        <li class="lis"><textarea class="lis1" name="ex0[]" ><?php echo $ex00; ?></textarea></li>
        <li class="lis"><textarea class="lis1" name="ex0[]" ><?php echo $ex00; ?></textarea></li>
        <li class="lis"><textarea class="lis1" name="ex0[]" ><?php echo $ex00; ?></textarea></li>
        <li class="lis"><textarea class="lis1" name="ex0[]" ><?php echo $ex00; ?></textarea></li>
        </ol>
        </div>
	
   <!-- <div style="margin-top:-10px;float:right;clear:both;" >
        <input id="male" type="radio" name="sex" onclick="fun1()">male<br>
        <input id="female" type="radio" name="sex" onclick="fun2()">female<br>
   	</div>
		
   <script>
       function fun1(){
	      var x=document.getElementById('male').          document.getElementById('print').
                      }
        function fun2(){
	       var x=document.getElementById('female').           document.getElementById('print').
                       }
    </script>-->
					
					
	</div><br/>
				
<!-- experience module ending point -->

<!-- technical skills module starting point -->
				
	<div id="skillsFlip">
		<h3 id="skTitle">Technical Skills<span style="float:right;" class="glyphicon glyphicon-chevron-down"></span></h3>
	</div>

	<div id="skills">
        <div>
    	   <!-- <textarea name="expe" rows="10" cols="100" >
        </textarea>&nbsp;-->
        <ol style="padding-top:25px;">
        <li class="lis"><textarea class="lis1" name="skill0[]" ><?php echo $skill00; ?></textarea></li>
        <li class="lis"><textarea class="lis1" name="skill0[]" ><?php echo $skill00; ?></textarea></li>
        <li class="lis"><textarea class="lis1" name="skill0[]" ><?php echo $skill00; ?></textarea></li>
        <li class="lis"><textarea class="lis1" name="skill0[]" ><?php echo $skill00; ?></textarea></li>
        </ol>
        </div>

        <!--<textarea name="technical" rows="10" cols="100">
        </textarea>&nbsp;
	
 <div style="margin-top:-10px;float:right;clear:both;" >
        <input id="male" type="radio" name="sex"  onclick="fun1()">male<br>
        <input id="female" type="radio" name="sex" onclick="fun2()">female<br>
   	</div>
		
   <script>
       function fun1(){
	      var x=document.getElementById('male').          document.getElementById('print').
                      }
        function fun2(){
	       var x=document.getElementById('female').           document.getElementById('print').
                       }
    </script>	-->

   </div><br/>
			
<!-- technical skills module ending point -->


<!-- languages known module starting point -->
        
  <div id="langFlip">
    <h3 id="langTitle">Languages Known<span style="float:right;" class="glyphicon glyphicon-chevron-down"></span></h3>
  </div>

  <div id="lang">
        <div>
<ol style="padding-top:25px;">
        <li class="lis"><textarea class="lis1" name="lang0[]" ><?php echo $lang00; ?></textarea></li>
        <li class="lis"><textarea class="lis1" name="lang0[]" ><?php echo $lang00; ?></textarea></li>
        <li class="lis"><textarea class="lis1" name="lang0[]" ><?php echo $lang00; ?></textarea></li>
        <li class="lis"><textarea class="lis1" name="lang0[]" ><?php echo $lang00; ?></textarea></li>
        </ol>
        </div>
</div><br/>
<!-- languages known module ending -->

<!-- hobbies known module starting point -->
        
  <div id="hobbyFlip">
    <h3 id="hobbyTitle">Hobbies<span style="float:right;" class="glyphicon glyphicon-chevron-down"></span></h3>
  </div>

  <div id="hobby">
        <div>
<ol style="padding-top:25px;">
        <li class="lis"><textarea class="lis1" name="hobby0[]" ><?php echo $hobby00; ?></textarea></li>
        <li class="lis"><textarea class="lis1" name="hobby0[]" ><?php echo $hobby00; ?></textarea></li>
        <li class="lis"><textarea class="lis1" name="hobby0[]" ><?php echo $hobby00; ?></textarea></li>
        <li class="lis"><textarea class="lis1" name="hobby0[]" ><?php echo $hobby00; ?></textarea></li>
        </ol>
        </div>
</div><br/>
<!-- hobbies known module ending -->

<!-- project module starting point -->
				
  <div id="proFlip">
		<h3 id="proTitle">Projects<span style="float:right;" class="glyphicon glyphicon-chevron-down"></span></h3>
	</div>
	
	<div id="project">
	<div>

	   <!-- <textarea name="expe" rows="10" cols="100" >
        </textarea>&nbsp;-->
        <ol style="padding-top:25px;">
        <li class="lis"><textarea class="lis1" name="pro0[]" ><?php echo $pro00; ?></textarea></li>
        <li class="lis"><textarea class="lis1" name="pro0[]" ><?php echo $pro00; ?></textarea></li>
        <li class="lis"><textarea class="lis1" name="pro0[]" ><?php echo $pro00; ?></textarea></li>
        <li class="lis"><textarea class="lis1" name="pro0[]" ><?php echo $pro00; ?></textarea></li>
        </ol>
        </div>
	
	    <!--<textarea name="project" rows="10" cols="100">
        </textarea>&nbsp;
 <div style="margin-top:-10px;float:right;clear:both;" >
        <input id="male" type="radio" name="sex" onclick="fun1()">male<br>
        <input id="female" type="radio" name="sex" onclick="fun2()">female<br>
   	</div>
		
   <script>
       function fun1(){
	      var x=document.getElementById('male').          document.getElementById('print').
                      }
        function fun2(){
	       var x=document.getElementById('female').           document.getElementById('print').
                       }
    </script>-->	
 </div><br/>
<!-- project module ending -->

<!-- achievements and awards module starting -->
 	<div id="acFlip">
		<h3 id="acTitle">Achievements & Awards<span style="float:right;" class="glyphicon glyphicon-chevron-down"></span></h3>
	</div>

	<div id="ac">

  

	   <!-- <textarea name="expe" rows="10" cols="100" >
        </textarea>&nbsp;-->
        <ol style="padding-top:25px;">
        <li class="lis"><textarea class="lis1" name="ac0[]" ><?php echo $ac00; ?></textarea></li>
        <li class="lis"><textarea class="lis1" name="ac0[]" ><?php echo $ac00; ?></textarea></li>
        <li class="lis"><textarea class="lis1" name="ac0[]" ><?php echo $ac00; ?></textarea></li>
        <li class="lis"><textarea class="lis1" name="ac0[]" ><?php echo $ac00; ?></textarea></li>
        </ol>
      
					
        <!--<textarea name="awards" rows="10" cols="100">
        </textarea>&nbsp;
	
         <div style="margin-top:-10px;float:right;clear:both;" >
        <input id="male" type="radio" name="sex"  onclick="fun1()">male<br>
        <input id="female" type="radio" name="sex" onclick="fun2()">female<br>
   	</div>
		
   <script>
       function fun1(){
	      var x=document.getElementById('male').          document.getElementById('print').
                      }
        function fun2(){
	       var x=document.getElementById('female').           document.getElementById('print').
                       }
    </script>-->
     </div><br/>
<!-- achievements and awards module ending --> 
<!-- activities and participations module start -->
	<div id="actFlip">
		<h3 id="actTitle">Activities & Participants<span style="float:right;" class="glyphicon glyphicon-chevron-down"></span></h3>
	</div>

	<div id="act">

	   <!-- <textarea name="expe" rows="10" cols="100" >
        </textarea>&nbsp;-->
        <ol>
        <li class="lis"><textarea class="lis1" name="act0[]" ><?php echo $act00; ?></textarea></li>
        <li class="lis"><textarea class="lis1" name="act0[]" ><?php echo $act00; ?></textarea></li>
        <li class="lis"><textarea class="lis1" name="act0[]" ><?php echo $act00; ?></textarea></li>
        <li class="lis"><textarea class="lis1" name="act0[]" ><?php echo $act00; ?></textarea></li>
        </ol>
	
        <!--<textarea name="activities" rows="10" cols="100">
        </textarea>&nbsp;
	
 <div style="margin-top:-10px;float:right;clear:both;" >
        <input id="male" type="radio" name="sex"  onclick="fun1()">male<br>
        <input id="female" type="radio" name="sex" onclick="fun2()">female<br>
   	</div>
		
   <script>
       function fun1(){
	      var x=document.getElementById('male').          document.getElementById('print').
                      }
        function fun2(){
	       var x=document.getElementById('female').           document.getElementById('print').
                       }
    </script>-->
 	</div><br/>
 <!-- achievements and participants module ending -->         					  
 <!-- declaration module starting point -->
	<div id="decFlip">
		<h3 id="decTitle">Declaration<span style="float:right;" class="glyphicon glyphicon-chevron-down"></span></h3>
	</div>

	<div id="dec">
		 <textarea name="declaration" rows="10" cols="100" required>
              <?php echo $declaration; ?></textarea>&nbsp;
	
         <!--<div style="margin-top:-10px;float:right;clear:both;" >
        <input id="male" type="radio" name="sex" ale" onclick="fun1()">male<br>
        <input id="female" type="radio" name="sex" emale"onclick="fun2()">female<br>
   	</div>
		
<script>
       function fun1(){
	      var x=document.getElementById('male').document.getElementById('print').
                      }
        function fun2(){
	       var x=document.getElementById('female').document.getElementById('print').
                       }
</script>-->

    </div><br/>
<!--<div id="otherFlip">
    <h3 id="otherTitle">Other Fields<span style="float:right;" class="glyphicon glyphicon-chevron-down"></span></h3>
  </div>

  <div id="other">
  <div >
        <ol style="padding-top:25px;margin-left:-50px;">
        <li class="lis2"><div id="langFlip1"><h3 id="langTitle">Languages Known<span style="float:right;" class="glyphicon glyphicon-chevron-down"></span></h3></div></li><br>
        <li class="lis2"><div id="hobbyFlip1"><h3 id="hobbyTitle">Hobbies<span style="float:right;" class="glyphicon glyphicon-chevron-down"></span></h3></div></li>
        </ol>
        </div>
 </div><br/>-->

<!-- other fields module ending point -->
<input type="submit" value="submit" name="submit" class="btn btn-primary">
	
	</form>
		</div>
		
<?php
@session_start();
/*
echo $_SESSION['uname'];
echo $_SESSION['mail']; */

?>


<script>
	
 
 	$(document).ready(function(){
				$('#personalDetailsFlip').click(function(){
				    $('#personalDetails').toggle();
				    $('#careerObjective').hide();
				    $('#education').hide();
				    $('#experience').hide();
				    $('#ac').hide();
				    $('#skills').hide();
				    $('#project').hide();
				    $('#act').hide();
				    $('#dec').hide();
            $('#lang').hide();
            $('#hobby').hide();


				});

			    $('#careerObjectiveFlip').click(function(){
  					$('#careerObjective').toggle();
	   				$('#education').hide();
				    $('#experience').hide();
				    $('#ac').hide();
				    $('#skills').hide();
				    $('#project').hide();
				    $('#act').hide();
				    $('#dec').hide();
				    $('#personalDetails').hide();
            $('#lang').hide();
            $('#hobby').hide();
				
			    });

			    $('#educationFlip').click(function(){
					$('#education').toggle();
					$('#careerObjective').hide();
					$('#experience').hide();
			    $('#ac').hide();
			    $('#skills').hide();
			    $('#project').hide();
			    $('#act').hide();
			    $('#dec').hide();
			    $('#personalDetails').hide();
          $('#lang').hide();
          $('#hobby').hide();
			  	});

				$('#experienceFlip').click(function(){
					$('#experience').toggle();
					$('#education').hide();
					$('#ac').hide();
				  $('#skills').hide();
				  $('#project').hide();
				  $('#act').hide();
				  $('#dec').hide();
				  $('#careerObjective').hide();
				  $('#personalDetails').hide();
          $('#lang').hide();
          $('#hobby').hide();
				 });
				
        $('#skillsFlip').click(function(){
					$('#skills').toggle();
					$('#experience').hide();
					$('#project').hide();
				  $('#act').hide();
				  $('#dec').hide();
				  $('#careerObjective').hide();
				  $('#education').hide();
					$('#ac').hide();
					$('#personalDetails').hide();
          $('#lang').hide();
          $('#hobby').hide();
         });
				
        $('#langFlip').click(function(){
          $('#lang').toggle();
          $('#experience').hide();
          $('#project').hide();
          $('#act').hide();
          $('#dec').hide();
          $('#careerObjective').hide();
          $('#education').hide();
          $('#ac').hide();
          $('#personalDetails').hide();
          $('#hobby').hide();
          $('#skills').hide();
         });

        $('#hobbyFlip').click(function(){
          $('#hobby').toggle();
          $('#experience').hide();
          $('#project').hide();
          $('#act').hide();
          $('#dec').hide();
          $('#careerObjective').hide();
          $('#education').hide();
          $('#ac').hide();
          $('#personalDetails').hide();
          $('#lang').hide();
          $('#skills').hide();
         });

        $('#decFlip').click(function(){
					$('#dec').toggle();
					$('#skills').hide();
					$('#careerObjective').hide();
				  $('#education').hide();
					$('#ac').hide();
					$('#experience').hide();
					$('#project').hide();
				  $('#act').hide();
				  $('#personalDetails').hide();

				 });
				
        $('#proFlip').click(function(){
					$('#project').toggle();
					$('#skills').hide();
					$('#act').hide();
					$('#dec').hide();
					$('#careerObjective').hide();
				  $('#education').hide();
					$('#ac').hide();
					$('#personalDetails').hide();
					$('#experience').hide();
				 });
 			   
          $('#acFlip').click(function(){
					$('#ac').toggle();
          $('#project').hide();
          $('#skills').hide();
					$('#act').hide();
					$('#dec').hide();
					$('#careerObjective').hide();
				  $('#education').hide();
					$('#personalDetails').hide();
					$('#experience').hide();
        	});
				
        $('#actFlip').click(function(){
					$('#act').toggle();
					$('#ac').hide();
					$('#project').hide();
          $('#skills').hide();
          $('#careerObjective').hide();
				  $('#education').hide();
					$('#personalDetails').hide();
					$('#experience').hide();
					$('#dec').hide();
				  });		

       /* $('#otherFlip').click(function(){
          $('#other').toggle();
          $('#ac').hide();
          $('#project').hide();
          $('#skills').hide();
          $('#careerObjective').hide();
          $('#education').hide();
          $('#personalDetails').hide();
          $('#experience').hide();
          $('#dec').hide();
          });   

$('#langFlip1').click(function(){
  $('#langFlip').show();
});*/




  				/*	$("#wyr").click(function(){
		            $("#wyr1").fadeToggle();
		           
	            });
 					$("#wyc").click(function(){
					$("#wyc1").fadeToggle();
	            });
          $("#wyg").click(function(){
          $("#wyg1").fadeToggle();
              });
          $("#wyl").click(function(){
          $("#wyl1").fadeToggle();
              });*/
            });

</script>


	</body>
</html>
<!--<?php

//if($_SESSION['status_details']==0)
{
//	echo "<script>window.alert('all fields not entered')</script>";
//	$_SESSION['status_details']=1;
}
?>-->



