<?php
session_start();
if(isset($_SESSION['login_status']))
{
  if($_SESSION['login_status']==1)
    {
  header('Location:fields.php');
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <title>lazy resume</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
   <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="css/lazy.css">
   <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript"></script>    
   <style>
      /*.zoom1{
         position:absolute;
         top:-120px;
         left:100%;
         height:600px;
         width:600px;
         z-index:1000;
              }

         #close-btn{
         display:none;
         height:100%;
         width:100%;
         position:absolute;
         z-index:3;
         background:#303030;
         background:rgba(0,0,0,.5);
                    }

         .zoom2{
          position:absolute;
          top:-120px;
          left:100%;
          height:600px;
          width:600px;
          z-index:1000;
               }

          #close-btn{
          display:none;
          height:100%;
          width:100%;
          position:absolute;
          z-index:3;
          background:#303030;
          background:rgba(0,0,0,.5);
                    }

          .zoom3{
          position:absolute;
          top:-120px;
          left:100%;
          height:600px;
          width:600px;
          z-index:1000;
                }

          #close-btn{
          display:none;
          height:100%;
          width:100%;
          position:absolute;
          z-index:3;
          background:#303030;
          background:rgba(0,0,0,.5);
                    }*/
    </style>
 
   <!--
     $(document).ready(function(){
         $("#template1").click(function(){
         $("#close-btn1").toggle();
         $("#image1").toggleClass("zoom1");
                });
    $("#close-btn1").click(function(){
         $("#close-btn1").toggle();
         $("#image1").toggleClass("zoom1");
                });
    $("#template2").click(function(){
         $("#close-btn2").toggle();
         $("#image2").toggleClass("zoom2");
                 });
    $("#close-btn2").click(function(){
         $("#close-btn2").toggle();
         $("#image2").toggleClass("zoom2");
                 });

    $("#template3").click(function(){
         $("#close-btn3").toggle();
         $("#image3").toggleClass("zoom3");
                  });
    $("#close-btn3").click(function(){
          $("#close-btn3").toggle();
          $("#image3").toggleClass("zoom3");
                   });

    /* $("#temp1").mouseleave(function(){
          $("#temp1").css({ "height": "400px","width":"300px","margin-top":"-10px","margin-left":"40px"});
                  }); 
});-->

 </head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <div id="close-btn"><span style="position:absolute;right:10%;display:block;background:black;border-radius:50%;font-weight:bold;color:black;">X</span></div>
    <nav id="con" class="navbar navbar-default navbar-fixed-top">
      <div  class="container">
        <div class="navbar-header" style="z-index:1;">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
            <a class="navbar-brand" href="#myPage">lazyresume</a>
        </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
        <li><a href="#login"  data-toggle="modal" data-target="#login">SIGN IN</a></li>
        <li><a href="#register " data-toggle="modal" data-target="#register">REGISTER</a></li>
    </ul>
  <!-- Trigger the modal with a button -->
     <!-- Modal content-->
  <!-- Modal -->
 <div class="modal fade" id="login" role="dialog">
    <div  class="modal-dialog">
    
    <!-- Modal content-->
  <div  class="modal-content" id="signinmodal">
    <div  class="modal-header">
        <button type="button" class="close" id="signclz" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">SIGN IN</h4>
    </div>
       <!--modal body-->
  <div class="modal-body">
      <div class="form-group">
        <form action="sign.php" method="post">
         <!--<label for="uname">Template ID</label>-->
         <p id="plz">please select the template before you sign in</p>
          <input class="esize" style="display:none;" type="text"name="tmpid" class="form-control" id="tmpidd" required>
 <br>
          <label for="uname">Username</label>
          <input class="esize" type="text"name="username" class="form-control" id="uname" required>
 <br>
    
          <label for="pwd">Pasword</label>
          <input class="esize" type="password" name="password"class="form-control" id="pwd" required>
 <br>
 <br>
 <br>

          <input type="submit" class="btn btn-primary" id="btn"  value="Sign in"> 

          
      
        </form>
      </div>   

  </div>
  </div>
  
    </div>
  </div>





<!-- register page -->


 <!-- Trigger the modal with a button -->
  
  <!-- Modal -->
  <div class="modal fade" id="register" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" id="regclz" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">REGISTER</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
    <form  method="post" action="register.php">
      <label for="uname">Username</label>
      <input class="esize" type="text" class="form-control"  name="username" required>
        <label for="pwd">Password</label>
      <input class="esize" type="password" class="form-control" name="password"required>
      <br><label for="pwd">Email</label><br>
      <input class="esize" type="email" class="form-control" name="email" required>
      <br>
<br>
    <input class="btn btn-primary"  id="btn1" type="submit" value="Register">
    <!--<span class="glyphicon glyphicon-user"></span>-->
</form>
</div>
        </div>
       
       
      </div>
      
    </div>
  </div>
      </ul>
</nav><br><br>
<div style="margin:0px;">

<p id="clz1" class="glyphicon glyphicon-remove" style="display:none;margin-left:900px;z-index:550;color: white;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;cursor:pointer;"></p>
<p id="clz2" class="glyphicon glyphicon-remove" style="display:none;margin-left:950px;z-index:600;color: white;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;cursor:pointer;"></p>
<p id="clz3" class="glyphicon glyphicon-remove" style="display:none;margin-left:950px;z-index:700;color: white;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;cursor:pointer;"></button>

<div class="fluid-container" style="margin-right:20px;margin-left:20px;">
<div class="row">
  <div class="col-md-12">
  <center><h3 style="font-family:cambria;color:#730054;font-size:50px;">Select Your Template</h3></center> 
  </div>
</div>


<div class="row">
<div class="col-md-4">
<img id="image1" src="img/tem1.jpg" alt="template1"  width="400px" height="410px" style="border:2px solid black;z-index:9999;">  
<img id="image11" src="img/tem1.jpg" alt="template1"  width="600px" height="550px" style="display:none;z-index:500;position:relative;margin-top:-530px;margin-left:350px;border:1px solid black;"> 

<br><br>
<button class="btn btn-primary" id="show1" style="cursor:pointer;padding:0px 30px;">show me
</button>

<button type="submit" class="btn btn-primary" onclick="myFunction1()"value="31"id="myid1"data-toggle="modal" data-target="#login"style="cursor:pointer;padding:0px 30px;margin-left:125px;">Select Template</button>
<!--<button class="btn btn-primary" id="template2" style="cursor:pointer;padding:0px 30px;margin-top:-900px;">hide me-->
 </div>
 <div class="col-md-4">
<img id="image2" src="img/tem2.jpg" alt="template2"  width="400px" height="410px" style="border:2px solid black;z-index:9999;">  
<img id="image22" src="img/tem2.jpg" alt="template2"  width="600px" height="550px" style="display:none;z-index:580;position:relative;margin-top:-530px;margin-left:-65px;border:1px solid black;"> 
<br><br>
<button class="btn btn-primary" id="show2" style="cursor:pointer;padding:0px 30px;">show me</button>
<button type="submit" class="btn btn-primary" onclick="myFunction2()"value="32"id="myid2"data-toggle="modal" data-target="#login"style="cursor:pointer;padding:0px 30px;margin-left:125px;">Select Template</button>


</div>
<div class="col-md-4">
<img id="image3" src="img/tem3.jpg" alt="template3"  width="400px" height="409px" style="z-index:9999;">  
<img id="image33" src="img/tem3.jpg" alt="template3"  width="600px" height="550px" style="display:none;z-index:650;position:relative;margin-top:-530px;margin-left:-500px;border:1px solid black;"> 
<br><br>
<button class="btn btn-primary" id="show3" style="cursor:pointer;padding:0px 30px;">show me</button>
<button type="submit" class="btn btn-primary" onclick="myFunction3()"value="33"id="myid3"data-toggle="modal" data-target="#login"style="cursor:pointer;padding:0px 30px;margin-left:125px;">Select Template</button>
</div>
</div>
</div>
</div>
</body>
</html>

 

 <!--<?php 
//if("#sel1")
{
  //echo "<script>window.alert('please sign in')</script>";
}
//elseif(!"#sel1"){
  // echo "<script>window.alert('select the template before 
    //you sign in')</script>"; 
//}
?>-->

<!--image zoom--> 
<script>
function myFunction1() {
    var x = document.getElementById("myid1").value;
    document.getElementById("tmpidd").value = x;
  document.cookie="mytempid="+x;
  }
function myFunction2() {
     var y = document.getElementById("myid2").value;
    document.getElementById("tmpidd").value = y;
    document.cookie="mytempid="+y;
 
}
function myFunction3() {
     var z = document.getElementById("myid3").value;
    document.getElementById("tmpidd").value = z;
    document.cookie="mytempid="+z;
 
}
</script>
<script>
 $(document).ready(function(){
        $('#show1').click(function(){
          $('#image11').show();
          $('#clz1').show();
        });
        
        $('#clz1').click(function(){
          $('#image11').hide();
          $('#clz1').hide();
        });

        $('#show2').click(function(){
          $('#image22').show();
          $('#clz2').show();
        });
        
        $('#clz2').click(function(){
          $('#image22').hide();
          $('#clz2').hide();
        });


        $('#show3').click(function(){
          $('#image33').show();
          $('#clz3').show();
        });
        
        $('#clz3').click(function(){
          $('#image33').hide();
          $('#clz3').hide();
        });

$('#registermodal').click(function(){
          $('#signinmodal').hide();
           $('#signclz').hide();
        });

$('#regclz').click(function(){
          $('#signinmodal').show();
           $('#signclz').show();
         });

            /*$('#sel1').click(function)(){
             alert('please sign in/register');
             $('.modal-content').toggle();*/
      
      });
 </script>
 <?php echo "<script>window.alert('select the template before you sign in')</script>"; ?>


