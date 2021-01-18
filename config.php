<?php
$link= mysqli_connect("localhost", "root", '',"store");
if(!$link){
    die ('connection unsuccessful'. mysqli_error($link));
}
else {
    echo" succussful";
}
mysqli_close($link);
?>