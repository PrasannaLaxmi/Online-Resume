<?php
       session_start();//each time the session mst be started
session_destroy();//to destroy the session ie logout
header('Location: index.php');//to redirect after logout


?>
 