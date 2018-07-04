<?php 
$db_host="localhost";
$db_username="root";
$db_password="";
$db_name="resumedb";

mysql_connect('localhost','root','') or die("error occured");

mysql_select_db('resumedb') or die("no database");
?>