<?php
include('session.php');
include('function.php');

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
                  <?php echo $message_inventory;?>
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
      <?php 
      displayInventory();
      ?>
</table>
      </div>
</div>
    
  </body>
</html>