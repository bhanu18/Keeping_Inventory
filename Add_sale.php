<?php
include('session.php');
include('function.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Add Sale</title>
  </head>
  <body>
      <?php include_once('header.php')?>
    <div class="container">
              <div class="jumbotron">
                  <h1> Add Sale</h1>
                  <form method="post">
<!--
  <div class="form-group">
    <label >Sale ID</label>
    <input type="text"  name="id" class="form-control" id="exampleInputEmail1" name="id">
  </div>
-->
  <div class="form-group">
      <label >Product</label>
    <select  class="form-control" name="product" id="supplier-select" >

  <option value="">Select a Product </option>
                <?php
                selectProductDropdown();
?></select>
  </div>
<!--
                      <div class="form-group">
    <label >Date</label>
    <input type="datetime-local" name="date" class="form-control" id="date" onload="getDate()">
  </div>
-->
  <div class="form-group">
    <label >Sale Quantity</label>
    <input type="text" name="quantity" class="form-control" id="">
  </div>
                      <div class="form-group">
    <label >Size</label>
    <input type="text" name="size" class="form-control" id="">
  </div>
                      <div class="form-group">
    <label >Sale Price</label>
    <input type="text" name="price" class="form-control" id="">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
             <?php 
                  addSale();
      ?>
                  <script>
                      function getDate(){
                          var today = new Date();
                  document.getElementById('date').innerHTML = today.getFullYear() +;
                      }</script>
        </div>
      </div>
      </body>
</html>