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
                $link = mysqli_connect("localhost", "root", '',"store",'3308');
    if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}
                $query="select id,name from product";
                $result = mysqli_query($link,$query);
                    while($row = mysqli_fetch_array($result)){
  echo "<option value=".$row['id']."name='product' >".$row['name']."</option>";
}
?></select>
  </div>
                      <div class="form-group">
    <label >Date</label>
    <input type="date" name="date" class="form-control" id="date" >
  </div>
  <div class="form-group">
    <label >Sale Quantity</label>
    <input type="text" name="quantity" class="form-control" id="">
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
      $date =$_POST['date'];
      $quan = $_POST['quantity'];
      $price = $_POST['price'];
    $link= mysqli_connect("localhost", "root", '',"store",'3308');
if(!$link){
    die ('connection unsuccessful'. mysqli_connect_error($link));
}
      $sql = "INSERT INTO items_sale (prod_id, date, sale_quantity, sale_price) VALUES ('$product','$date','$quan','$price')";
      
      if (mysqli_query($link, $sql)) {
          if (headers_sent()) {
    die("Redirect failed. Please click on this link: <a href='sale.php'>sale</a>");
}
else{
    exit(header("Location: localhost/store/sale.php"));
}
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
                  }
      ?>
                  <script>
                  document.getElementById('date').innerHTML = date(); </script>
        </div>
      </div>
      </body>
</html>