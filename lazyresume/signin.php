<?php
define("DB_NAME", "resumedb");
define("DB_USER", "root");
define("DB_PASSWORD", "");
DEFINE ('DB_HOST', 'localhost');
$dbc = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if(!$dbc)
{
  
echo "Server not found";
  }







  