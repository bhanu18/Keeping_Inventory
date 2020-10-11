<?php
$link= mysqli_connect('localhost','root','','store','3308');
if(!$link){
    die ('connection unsuccessful'. mysqli_error($link));
}
else {
    echo" succussful";
}
mysqli_close($link);
?>