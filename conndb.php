<?php 
  $link = mysqli_connect("localhost", "root", '',"store");
   if(!$link){
    die ("Nooo");
}
$query = "select * from users";
if ($result = mysqli_query($link, $query)){
    $row = mysqli_fetch_array($result);
    
    echo "your email is ".$row[2]." and your password is ".$row[3];
}
?>