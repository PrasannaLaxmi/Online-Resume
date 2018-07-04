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
 <div id="formContainer">
	<form id="resumeInputs" method="post" action="check.php">

<!-- personal details module starting point -->
	<div id="personalDetailsFlip">
		<h3 id="pdTitle">Personal Details<span style="float:right;" class="glyphicon glyphicon-chevron-down"></span></h3>
	</div>

	<div id="personalDetails">
		Name :
		<input type="text" class="tablefields" name="name"  placeholder="Enter Your Name in capitals"style="margin-left:75px;" required/><br/>
		Address : 
		<input type="text" class="tablefields" name="address"  placeholder="Enter Address"style="margin-left:60px;" required/><br/>
		State :
		<input type="text" class="tablefields" name="state"  placeholder="Enter State" style="margin-left:80px;" required/><br/>
		Contact Number : 
		<input type="text" class="tablefields" name="cnumber"  placeholder="Enter Contact" style="margin-left:5px;" required/><br/>
		Email : 
		<input type="text" class="tablefields" name="email"  placeholder="Enter Email"style="margin-left:78px;" required/><br/>
	   <!-- Province: 
		<input type="text" class="tablefields" name="stuName"  placeholder="Enter Province"style="margin-left:55px;"/><br/>-->
	</div><br/>
<!-- personal details module ending point -->
	
<!-- career objective module starting point -->
				
	<div id="careerObjectiveFlip">
		<h3 id="coTitle">Career Objective<span style="float:right;" class="glyphicon glyphicon-chevron-down"></span></h3>
				
	</div>
	
	<div id="careerObjective">          
        <textarea name="carobj" id="print"rows="10" cols="100" required>                       Intend to build a career with leading corporate of hi-tech environment with committed & dedicated people.Entry level position as a computer engineering where I can apply my education and experience which will help me to explore myself fully and realize my potential. Willing to work as a key player in challenging and creative environment.
        </textarea>&nbsp;
                      
   	<div style="background-color:yellow;height:280px;width:300px;float:right;margin-right:25px;margin-top:-1px;" >
 <p>Must Include:</p>
 <button type="button" id="wyr" class="btn btn-primary">who you are?</button>
	<div id="wyr1"> 
<ol>
	<li>Recent college graduate?</li>
	<li>Experienced administrator?</li>
	<li>Accomplished software engineer?</li>
	<li>The way you define yourself should be your lead.</li>
</ol>
	</div><br>
<button type="button" class="btn btn-primary">what can you do?</button>
<div id="wyc1"> 
<ol>
	<li>List your strengths.</li>
</ol>
</div>
 	
		</div>
	<!--<input id="male" type="radio" name="sex" ale" onclick="fun1()">male<br>
    <input id="female" type="radio" name="sex" emale"onclick="fun2()">female<br>	
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
        <table border="1"  style="border-collapse:collapse;border:none;width:90%;margin-left:25px;padding-top:20px;">
        <tr>
        <td>board/university </td>
        <td>year of passing</td> 
        <td>percentage</td>
        </tr>
        <tr>
        <td><input class="tablefields" type="text" name="edu00" id="edu00" placeholder="enter your university/board name" required></td>
        <td><input class="tablefields" type="text" name="edu01" id="edu01" placeholder="enter your year of passing" required></td>
        <td><input class="tablefields" type="text" name="edu02" id="edu02" placeholder="enter your percentage" required></td>
        </tr>
        <tr>
        <td><input class="tablefields" type="text" name="edu10" id="edu10" placeholder="enter your university/board name" required></td>
        <td><input class="tablefields" type="text" name="edu11" id="edu11" placeholder="enter your year of passing" required></td>
        <td><input class="tablefields" type="text" name="edu12" id="edu12" placeholder="enter your percentage" required></td>
        </tr>
        <tr>
        <td><input class="tablefields" type="text" name="edu20" id="edu20" placeholder="enter your university/board name" required></td>
        <td><input class="tablefields" type="text" name="edu21" id="edu21" placeholder="enter your year of passing" required></td>
        <td><input class="tablefields" type="text" name="edu22" id="edu22" placeholder="enter your percentage" required></td>
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
        <div id="experience1">

	   <!-- <textarea name="expe" rows="10" cols="100" >
        </textarea>&nbsp;-->
        <ol>
        <li><input name="ex0" type="text"></li>
        <li><input name="ex1"type="text" ></li>
        <li><input name="ex2"type="text" ></li>
        <li><input name="ex3"type="text" ></li>
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
        <div id="skills1">
    	   <!-- <textarea name="expe" rows="10" cols="100" >
        </textarea>&nbsp;-->
        <ol>
        <li><input name="skill0" type="text" required></li>
        <li><input name="skill1"type="text" required></li>
        <li><input name="skill2"type="text" required></li>
        <li><input name="skill3"type="text" required></li>
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

<!-- project module starting point -->
				
    <div id="proFlip">
		<h3 id="proTitle">Projects<span style="float:right;" class="glyphicon glyphicon-chevron-down"></span></h3>
	</div>
	
	<div id="project">
	<div id="project1">

	   <!-- <textarea name="expe" rows="10" cols="100" >
        </textarea>&nbsp;-->
        <ol>
        <li><input name="pro0" type="text"></li>
        <li><input name="pro1"type="text" ></li>
        <li><input name="pro2"type="text" ></li>
        <li><input name="pro3"type="text" ></li>
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
	<div id="ac1">

	   <!-- <textarea name="expe" rows="10" cols="100" >
        </textarea>&nbsp;-->
        <ol>
        <li><input name="ac0" type="text" ></li>
        <li><input name="ac1"type="text" ></li>
        <li><input name="ac2"type="text" ></li>
        <li><input name="ac3"type="text" ></li>
        </ol>
        </div>
					
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
		<h3 id="actTitle">Activities & participants<span style="float:right;" class="glyphicon glyphicon-chevron-down"></span></h3>
	</div>

	<div id="act">
	<div id="act1">

	   <!-- <textarea name="expe" rows="10" cols="100" >
        </textarea>&nbsp;-->
        <ol>
        <li><input name="act0" type="text" ></li>
        <li><input name="act1"type="text" ></li>
        <li><input name="act2"type="text" ></li>
        <li><input name="act3"type="text"></li>
        </ol>
        </div>
	
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
		 <textarea name="declaration" rows="10" cols="100" required>                                                     I hereby declare that the above-mentioned information is correct up to my knowledge and if given a chance, I will try my best to come true to your aspirations and will prove my mettle in most trying situations.
         </textarea>&nbsp;
	
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
<!-- declaration module ending point -->
<input type="submit" value="submit" name="submit" class="btn btn-primary">
	
		</div>
		</form>
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

  					$("#wyr").click(function(){
		            $("#wyr1").fadeToggle();
	            });
 					$("#wyc").click(function(){
					$("#wyc1").fadeToggle();
	            });
            });

</script>


	</body>
</html>
<?php

if($_SESSION['status_details']==0)
{
	echo "<script>window.alert('all fields not entered')</script>";
	$_SESSION['status_details']=1;
}