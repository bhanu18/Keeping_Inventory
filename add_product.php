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

    <title>Add Products</title>
  </head>
  <body>
      <?php include_once('header.php')?>
      <div class="container">
              <div class="jumbotron">
    <h1>Add Products</h1>
                  <form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" >
  </div>
  <div class="form-group">
    <label >Cost</label>
    <input type="text" name="cost" class="form-control" id="">
  </div>
  <div class="form-group">
    <label >Price</label>
    <input type="text" name="price" class="form-control" id="">
  </div>
    <div class="form-group">
    <label>Color</label>
    <input type="text" name="color" class="form-control" id="">
  </div>
        <div class="form-group">
    <label>Size</label>
    <input type="text" name="size" class="form-control" id="">
  </div>
     <div class="form-group">
    <label>Quantity</label>
    <input type="text" name="quantity" class="form-control" id="">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
          </div>
      </div>
    <?php 
     addProduct();
      ?>
  </body>
</html>