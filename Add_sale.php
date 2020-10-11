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
    <label >Sale ID</label>
    <input type="text"  name="id" class="form-control" id="exampleInputEmail1" name="id">
  </div>
  <div class="form-group">
      <label >Product</label>
    <select  class="form-control" name="product" id="supplier-select" >

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
    <label >Date</label>
    <input type="date" name="date" class="form-control" id="" >
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
                  //if(isset($_POST['submit'])){
      $id = $_POST['id'];
      $product = $row['id'];
      $date =$_POST['date'];
      $quan = $_POST['quantity'];
      $price = $_POST['price'];
    $link= mysqli_connect('localhost','root','','store','3308');
if(!$link){
    die ('connection unsuccessful'. mysqli_connect_error($link));
}
      $sql = "INSERT INTO items_sale (sale_id, prod_id, date, sale_quantity, sale_price) VALUES ('$id','$product','$date','$quan','$price')";
      
      if (mysqli_query($link, $sql)) {
  echo "New record created successfully <br>";
          echo "We will now redirect you to the members area";
		header("Location:http://localhost/store/Sale.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
                  //}
      ?>
        </div>
      </div>
      </body>
</html>