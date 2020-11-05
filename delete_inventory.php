<?php
include("session.php");
$id =$_GET['Id'];

if(!$connection){
    die("Could not connect" .mysqli_connect_error());
}
$sql = "delete from product where Id='$id'";

if (mysqli_query($connection, $sql)){
    header ("Location: inventory.php");
}else{
    printf ("Error: %s\n", mysqli_error($connection));
}
?>