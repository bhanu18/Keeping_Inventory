<?php
include('session.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Inventory</title>
  </head>
  <body>
      <?php include_once('header.php')?>
          <div class="container">
              <div class="jumbotron">
                  <h1 class="display-4">Inventory</h1>
                  <a class="btn btn-primary" href="add_product.php" role="button">Add Product</a>
                  <a class="btn btn-primary" href="#" role="button">Update Inventory</a>
          <table class="table table-hover">
  <thead>
    <tr>
        <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Color</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
      <?php $link= mysqli_connect("localhost", "root", '',"store",'3308');
if(!$link){
    die ('connection unsuccessful'. mysqli_error($link));
}
      $sql = "SELECT * FROM product";
      
      $result = mysqli_query($link,$sql);
      
      while($row = mysqli_fetch_array($result)){
          echo '<tr>
        <td>'.$row["Id"].'</td>
      <td>'.$row["Name"].'</td>
      <td>'.$row["price"].'</td>
      <td>'.$row["Color"].'</td>
      <td>'.$row["Quantiy"].'</td>
    </tr>';
      }
      mysqli_close($link);
      ?>
  </tbody>
</table>
      </div>
</div>
    
  </body>
</html>