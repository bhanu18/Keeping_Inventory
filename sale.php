<?php
include('session.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Sale</title>
  </head>
  <body>
      <?php include_once('header.php')?>
      <div class="container">
          <div class="jumbotron">
         <h1 align="centre">Sale</h1> 
          <a class="btn btn-primary" href="Add_sale.php" role="button">Add Sale</a>
          
           <table class="table table-hover">
  <thead>
    <tr>
        <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Date</th>
      <th scope="col">Quantity</th>
        <th scope="col">Size</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
      <?php 
      $sql = "SELECT sale_id,Name, Date, sale_quantity,items_sale.size, sale_price FROM items_sale JOIN product ON product.Id = items_sale.prod_id order by sale_id asc";
      
      $result = mysqli_query($link,$sql);
      if (!$result) {
    printf("Error: %s\n", mysqli_error($link));
    exit();
}
      while($row = mysqli_fetch_array($result)){
          echo '<tr>
      <td>'.$row["sale_id"].'</td>
      <td>'.$row["Name"].'</td>
      <td>'.$row["Date"].'</td>
      <td>'.$row["sale_quantity"].'</td>
      <td>'.$row["size"].'</td>
      <td>'.$row["sale_price"].'</td>
      <td><a class="btn btn-primary" href="update_sale.php?sale_id='.$row["sale_id"].'">Update</a></td>
      <td><a class="btn btn-danger" href="delete_sale.php?sale_id='.$row["sale_id"].'">Delete</a></td>
    </tr>';
      }
      mysqli_close($link);
      ?>
  </tbody>
</table>
          </div></div>

  </body>
</html>