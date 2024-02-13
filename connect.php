<?php
require_once 'login.php';
$conn = new mysqli($hn,$un,$pw,$db);
if($conn->connect_error)die("Fatal data connection error");
/* Connect to database via login.php and if connection fails 
it gives a message "Fatal data connection error" */
?>
