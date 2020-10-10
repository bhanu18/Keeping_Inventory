<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Add Sale</title>
  </head>
  <body>
      <?php include_once('header.php')?>
    <div class="container">
              <div class="jumbotron">
                  <h1> Add Sale</h1>
                  <form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Sale ID</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="id">
  </div>
  <div class="form-group">
      <label for="exampleInputEmail1">Product</label>
    <select  class="form-control" id="supplier-select" >

  <option value="">Select a Product </option>
                <?php
                $link = mysqli_connect('localhost','root','','store','3308');
    if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}
                $query="select id,name from product";
                $result = mysqli_query($link,$query);
if (!$result) {
    printf("Error: %s\n", mysqli_error($link));
    exit();
}
                    while($row = mysqli_fetch_array($result)){
  echo "<option value=".$row['id']."name='product' >".$row['name']."</option>";
                    }
    mysqli_close($link);
?>
            </select>
  </div>
                      <div class="form-group">
    <label for="exampleInputPassword1">Date</label>
    <input type="date" class="form-control" id="" name="date">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Sale Quantity</label>
    <input type="text" class="form-control" id="" name="quantity">
  </div>
                      <div class="form-group">
    <label for="exampleInputPassword1">Sale Price</label>
    <input type="text" class="form-control" id="" name="price">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
             <?php 
      $id = isset($_POST['id']);
      $product = isset($_POST['product']);
      $date =isset($_POST['date']);
      $quantity = isset($_POST['quantity']);
      $price = isset($_POST['price']);
    $link= mysqli_connect('localhost','root','','store','3308');
if(!$link){
    die ('connection unsuccessful'. mysqli_connect_error($link));
}
      $sql = "INSERT INTO items_sale (sale_id, prod_id, date, sale_quantity, sale_price) VALUES ('$id','$product','$date','$quantity','$price')";
      
      if (mysqli_query($link, $sql)) {
  echo "New record created successfully";
          echo "We will now redirect you to the members area";
		header("Location:http://localhost/store/Sale.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
      ?>
        </div>
      </div>
      </body>
</html>