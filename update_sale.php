<?php
include('session.php');

if(count($_POST)>0) {
mysqli_query($connection,"UPDATE items_sale set sale_id='" . $_POST['sale_id'] . "', prod_id='" . intval($_POST['product']) . "', date='" . $_POST['date'] . "', sale_quantity='" . $_POST['quantity'] . "' ,size='" . $_POST['size'] . "' ,sale_price='" . $_POST['price'] . "' WHERE sale_id='" . $_POST['sale_id'] . "'");
$message = "Record Modified Successfully";
}

$get_id = $_GET['sale_id']? $_GET['sale_id']:'';
$result = mysqli_query($connection,"SELECT sale_id,Name, Date, sale_quantity,items_sale.size, sale_price FROM items_sale JOIN product ON product.Id = items_sale.prod_id where sale_id='$get_id'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Sales Data</title>
</head>
<body>
    <?php include ("header.php")?>
    <div class="container">
        <div class="jumbotron">
    <form>
  <div class="form-group">
    <label for="">Sale ID</label>
      <input type="hidden" name="sale_id" value="<?php echo $row['sale_id']; ?>">
    <input type="text" class="form-control" value="<?php echo $row['sale_id']; ?>" name="sale_id" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <select  class="form-control" name="product" id="supplier-select" >

  <option value="">Select a Product </option>
                <?php
                $query="select id,name from product JOIN items_sale ON product.Id = items_sale.prod_id where sale_id = '$get_id'";
                $result = mysqli_query($link,$query);
                    while($row = mysqli_fetch_array($result)){
  echo "<option value=".$row['id']."name='product' >".$row['name']."</option>";
}
?></select>
      <?php $result = mysqli_query($connection,"SELECT sale_id,Name, Date, sale_quantity,items_sale.size, sale_price FROM items_sale JOIN product ON product.Id = items_sale.prod_id where sale_id='$get_id'");
$row= mysqli_fetch_array($result);?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date</label>
    <input type="date" name="Date" class="form-control" value="<?php echo $row['Date']; ?>">
  </div>
 <div class="form-group">
    <label for="exampleInputPassword1">Sale Quantity</label>
    <input type="text" name="quantity" class="form-control" value="<?php echo $row['sale_quantity']; ?>">
  </div>
        <div class="form-group">
    <label for="exampleInputPassword1">Size</label>
    <input type="text" name="size" class="form-control" value="<?php echo $row['size']; ?>">
  </div>
        <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input type="text" name="price" class="form-control" value="<?php echo $row['sale_price']; ?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    </div>
</body>
</html>