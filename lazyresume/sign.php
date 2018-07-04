<?php                                                
session_start();// session is used to keep the record of the user in evry page until it is destroyd

$db_host="localhost";
$db_username="root";
$db_pass="";
$db_name="resumedb";

mysql_connect('localhost','root','') or die("error occurred");

mysql_select_db('resumedb') or die("no database name");  

//require_once('db_conn.php');

$username=$_POST['username'];//gets the username n den saves in var $username
$password=$_POST['password'];//gets the password n den saves in var $password

  //echo $username.$password; // here both the username n passwords are printed

  if($username!=NULL && $password!==NULL)// checks the condition whether usernm n pswd r presnt or not
  {//here the username n pswrd are selected frm table register 
    $sql=mysql_query("select * from register where username='$username' && password='$password'");
  
  $hh=mysql_num_rows($sql);// here the no of rows are counted
  if($hh>0)
  {
    
    
    while($jhj=mysql_fetch_array($sql) ){//here the data which is fetched by the query n stored in var $sql is stored in array
    	$myid= $jhj[0];//1st row 1st colm is 0 
    	$mymail=$jhj[1];//1st row 2nd col is 1
    }
    
    	$_SESSION['uname']=$username;//the username is stored in uname by starting the session it means the uname can be used in any pg until the session is destroyed
    	$_SESSION['uid']=$myid;
    	$_SESSION['mail']=$mymail;
      $_SESSION['login_status']= 1;
      header('Location:fields.php');//here the pg is redirected to fields after signin if cnditions r tru
      
  }
    else
    { 
//$_SESSION['login_status']= 0;
      echo "<script>window.alert('username or password entered is wrong')</script>";
     echo "<script>window.location='templates.php';</script>";

    }
}
else{
  echo mysql_error();
  //echo "values must not be empty";
    }

?>
 