<?php

    $to = "prasannalaxmiattuluri@gmail.com";
    $from = $_POST["name"];
    $subject = $_POST['comments'];
    $name = $_POST['name'];
    $headers = "From: $from";

    $fields = array();
    $fields{"name"} = "name";
    $fields{"email"} = "email";
    $fields{"subject"} = "comments";
    

    $body = "Here is what was sent:\n\n"; 
	
	foreach($fields as $a => $b)
	{   
	$body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); 
	}

    $send = mail($to, $subject, $body, $headers);

?>