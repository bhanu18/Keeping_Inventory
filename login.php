
<?php
session_start(); // Starting Session
$error=""; // Variable To Store Error Message
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "","store","3308");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection, "select * from users where password='$password' AND username='$username'");
    if (!$query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
}
$rows = mysqli_fetch_array($query);
if ($rows > 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: http://localhost/store/home.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($connection); // Closing Connection
}
}
?>