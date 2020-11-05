<?php include("session.php");

    if (!$connection) {
    die('Could not connect: ' . mysqli_connect_error());
}
$sale_id= $_GET['sale_id'];
                      $query= "delete from items_sale where sale_id='$sale_id'";
                      if(!mysqli_query($connection, $query)){
                          printf ("Error: %s\n", mysqli_error($connection));
                          echo "Please Click this to go back <a href='sale.php'>sale</a>"
                      }
                      else{
                          header("Location: sale.php");
                  }
                  ?>           
 