
<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: http://localhost/store/index.php"); // Redirecting To Home Page
}
?>