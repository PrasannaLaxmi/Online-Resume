
<!--<?php
//session_start();
//if(isset($_SESSION['login_status']))
{
    //if($_SESSION['login_status']==1)
    {
     //   header('Location:checktemps.php');
    }
}


?>-->


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
        <li><a href="myresume.php">SHOW MY RESUMES</a></li>
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
	<form id="resumeInputs" method="post" action="templatesphp.php">

<!-- personal details module starting point -->
	<div id="personalDetailsFlip">
		<h3 id="pdTitle">Personal Details<span style="float:right;" class="glyphicon glyphicon-chevron-down"></span></h3>
	</div>

	<div id="personalDetails">
<?php $tmpid= $_COOKIE['mytempid'];?>
    <input type="text" class="tablefields1" name="tmpid" style="display:none;" value="<?php echo $tmpid;?>"><br/>
  
		Name :
		<input type="text" class="tablefields1" name="name"  placeholder="Enter Your Name"style="margin-left:75px;" required/><br/>
		Address : 
		<input type="text" class="tablefields1" name="address"  placeholder="Enter Full Address With City,State & Pin "style="margin-left:60px;" required/><br/>
		<!--State :
		<input type="text" class="tablefields1" name="state"  placeholder="Enter State" style="margin-left:79px;" required/><br/>-->
		Contact Number : 
		<input type="text" class="tablefields1" name="cnumber"  placeholder="Enter Contact" style="margin-left:4px;" required/><br/>
    <!--Email : 
		<input type="text" class="tablefields1" name="email"  placeholder="Enter Email"style="margin-left:78px;" required/><br/>-->
	  <!--Place: 
		<input type="text" class="tablefields1" name="place"  placeholder="Enter Place"style="margin-left:81px;" required/><br/>-->
		Date: 
		<input type="date" class="tablefields1" name="date"  placeholder="dd mm yyyy"style="margin-left:84px;padding-bottom:20px; " required/><br/>
		<!--Door No: 
		<input type="text" class="tablefields1" name="door"  placeholder="Enter Your Door Number"style="margin-left:60px;padding-bottom:20px;" required/><br/>-->

	</div><br/>
<!-- personal details module ending point -->
	
<!-- career objective module starting point -->
				
	<div id="careerObjectiveFlip">
		<h3 id="coTitle">Career Objective<span style="float:right;margin-right:-5px;" class="glyphicon glyphicon-chevron-down"></span></h3>
				
	</div>
	
	<div id="careerObjective">          
        <textarea name="carobj" rows="10" cols="100" required>                       Intend to build a career with leading corporate of hi-tech environment with committed & dedicated people.Entry level position as a computer engineering where I can apply my education and experience which will help me to explore myself fully and realize my potential. Willing to work as a key player in challenging and creative environment.
        </textarea>&nbsp;

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
        <td style="padding-top:8px;"><textarea class="tablefields" name="edu00" placeholder="enter your university/board name" required></textarea></td>
        <td><input type="text" class="tablefields" name="edu01" placeholder="enter your year of passing" required></td>
        <td><input type="text" class="tablefields" name="edu02" placeholder="enter your percentage" required></td>
        </tr>
        <tr>
        <td style="padding-top:8px;"><textarea class="tablefields" name="edu10" placeholder="enter your university/board name" required></textarea></td>
        <td><input type="text" class="tablefields" name="edu11" placeholder="enter your year of passing" required></td>
        <td><input type="text" class="tablefields" name="edu12" placeholder="enter your percentage" required></td>
        </tr>
    <tr>
        <td style="padding-top:8px;"><textarea class="tablefields" name="edu20" placeholder="enter your university/board name" required></textarea></td>
        <td><input type="text" class="tablefields" name="edu21" placeholder="enter your year of passing" required></td>
        <td><input type="text" class="tablefields" name="edu22" placeholder="enter your percentage" required></textarea></td>
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
        <li class="lis"><textarea class="lis1" name="ex0[]" ></textarea></li>
        <li class="lis"><textarea class="lis1" name="ex0[]" ></textarea></li>
        <li class="lis"><textarea class="lis1" name="ex0[]" ></textarea></li>
        <li class="lis"><textarea class="lis1" name="ex0[]" ></textarea></li>
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
        <li class="lis"><textarea class="lis1" name="skill0[]" ></textarea></li>
        <li class="lis"><textarea class="lis1" name="skill0[]" ></textarea></li>
        <li class="lis"><textarea class="lis1" name="skill0[]" ></textarea></li>
        <li class="lis"><textarea class="lis1" name="skill0[]" ></textarea></li>
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
        <li class="lis"><textarea class="lis1" name="lang0[]" ></textarea></li>
        <li class="lis"><textarea class="lis1" name="lang0[]" ></textarea></li>
        <li class="lis"><textarea class="lis1" name="lang0[]" ></textarea></li>
        <li class="lis"><textarea class="lis1" name="lang0[]" ></textarea></li>
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
        <li class="lis"><textarea class="lis1" name="hobby0[]" ></textarea></li>
        <li class="lis"><textarea class="lis1" name="hobby0[]" ></textarea></li>
        <li class="lis"><textarea class="lis1" name="hobby0[]" ></textarea></li>
        <li class="lis"><textarea class="lis1" name="hobby0[]" ></textarea></li>
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
        <li class="lis"><textarea class="lis1" name="pro0[]" ></textarea></li>
        <li class="lis"><textarea class="lis1" name="pro0[]" ></textarea></li>
        <li class="lis"><textarea class="lis1" name="pro0[]" ></textarea></li>
        <li class="lis"><textarea class="lis1" name="pro0[]" ></textarea></li>
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
        <li class="lis"><textarea class="lis1" name="ac0[]" ></textarea></li>
        <li class="lis"><textarea class="lis1" name="ac0[]" ></textarea></li>
        <li class="lis"><textarea class="lis1" name="ac0[]" ></textarea></li>
        <li class="lis"><textarea class="lis1" name="ac0[]" ></textarea></li>
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
        <li class="lis"><textarea class="lis1" name="act0[]" ></textarea></li>
        <li class="lis"><textarea class="lis1" name="act0[]" ></textarea></li>
        <li class="lis"><textarea class="lis1" name="act0[]" ></textarea></li>
        <li class="lis"><textarea class="lis1" name="act0[]" ></textarea></li>
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


<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>




<script>
	
 
 	$(document).ready(function(){
				$('#personalDetailsFlip').click(function(){
				    $('#personalDetails').toggle("slow");
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
  					$('#careerObjective').toggle("slow");
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
					$('#education').toggle("slow");
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
					$('#experience').toggle("slow");
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
					$('#skills').toggle("slow");
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
          $('#lang').toggle("slow");
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
          $('#hobby').toggle("slow");
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
					$('#dec').toggle("slow");
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
					$('#project').toggle("slow");
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
					$('#ac').toggle("slow");
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
					$('#act').toggle("slow");
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