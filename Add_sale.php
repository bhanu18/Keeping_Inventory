<?php
include('session.php');
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
                $query="select id,name from product";
                $result = mysqli_query($link,$query);
                    while($row = mysqli_fetch_array($result)){
  echo "<option value=".$row['id']."name='product' >".$row['name']."</option>";
}
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
                  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     // $id = $_POST['id'];
      $product = intval($_POST['product']);
      //$date =$_POST['date'];
      $quan = $_POST['quantity'];
     $size = $_POST['size'];
      $price = $_POST['price'];
   
      $sql = "INSERT INTO items_sale (prod_id, sale_quantity,size, sale_price) VALUES ('$product','$quan','$size','$price')";
      
      if (mysqli_query($link, $sql)) {
          $result = mysqli_query($connection,"Select * from product where id='".$product."'");
$row = mysqli_fetch_array($result);
          $row['Quantiy'] -= $quan; 
          mysqli_query($link, "UPDATE product set Quantiy ='".$row['Quantiy']."' where Id='".$product."'");
          if (headers_sent()) {
    die("Redirect failed. Please click on this link: <a href='sale.php'>sale</a>");
}
else{
    header("Location: localhost/store/sale.php");
}
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
                  }
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