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

    <title>Sale</title>
  </head>
  <body>
      <?php include_once('header.php')?>
      <div class="container">
          <div class="jumbotron">
         <h1>Sale</h1> 
          <a class="btn btn-primary" href="Add_sale.php" role="button">Add Sale</a>
          <br>
          <br>
           <table class="table table-hover">
  <thead>
    <tr>
        <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Date</th>
      <th scope="col">Quantity</th>
        <th scope="col">Size</th>
      <th scope="col">Price</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>

      <?php 
      showSale();
      ?>
</table>
          </div></div>

  </body>
</html>