<?php
include('session.php');

$sql= "SELECT * FROM product";
$result = mysqli_query($connection,$sql);
$row= mysqli_fetch_array($result);
if($row['Quantiy']<=1){
  $message = " needs to be refilled";
}
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
                  <br>
                  <div class="alert alert-danger" role="alert">
                  <?php echo $row['Name'].$message ?>
                  </div>
          <table class="table table-hover">
  <thead>
    <tr>
        <th scope="col">ID</th>
      <th scope="col">Name</th>
        <th scope="col">Cost</th>
      <th scope="col">Price</th>
      <th scope="col">Color</th>
        <th scope="col">Size</th>
      <th scope="col">Quantity</th>
        <th scope="col"></th>
        <th scope="col"></th>
        
    </tr>
  </thead>
  <tbody>
      <?php 
      $sql = "SELECT * FROM product";
      
      $result = mysqli_query($link,$sql);
      
      while($row = mysqli_fetch_array($result)){
          echo '<tr>
        <td>'.$row["Id"].'</td>
      <td>'.$row["Name"].'</td>
      <td>'.$row["Cost_price"].'</td>
      <td>'.$row["price"].'</td>
      <td>'.$row["Color"].'</td>
      <td>'.$row["size"].'</td>
      <td>'.$row["Quantiy"].'</td>
      <td><a class="btn btn-primary" href="update_inventory.php?Id='.$row["Id"].'">Update</a></td>
      <td><a class="btn btn-danger" href="delete_inventory.php?Id='.$row["Id"].'">Delete</a></td>
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