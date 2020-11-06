<?php
include('session.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['Id'])){
    $id= $_POST['Id'];
    }
    if(isset($_POST['Name'])){
    $name=$_POST['Name'];
}
if(isset($_POST['Cost_price'])){
    $cost= $_POST['Cost_price'];
}
if (isset($_POST['price'])){
    $price= $_POST['price'];
}
if(isset($_POST['Color'])){
    $color=$_POST['Color'];
}
if(isset($_POST['size'])){
    $size = $_POST['size'];
}
if (isset($_POST['Quantiy'])){
    $Quantity=$_POST['Quantiy'];
}
    
    $sql= "UPDATE product set id='$id', Name='$name', Cost_price='$cost', price='$price' ,color='$color',size= '$size', Quantiy='$Quantity' WHERE id=$id";
     if(mysqli_query($connection,$sql)){
         header("Location: inventory.php");
     }else{
         mysqli_error($connection);
     }
    
}
$get_id = (isset($_GET['Id'])) ? $_GET['Id'] : '';
$result = mysqli_query($connection,"Select * from product where id='".$get_id."'");
$row = mysqli_fetch_array($result);
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
                  <h1 class="display-4">Update Inventory</h1>
                  <form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">ID</label>
    <input type="Hidden" class="form-control" name="id" value="<?php echo $row['Id']; ?>">
    <input type="text" class="form-control" name="id" value="<?php echo $row['Id']; ?>" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" class="form-control" name="name" value="<?php echo $row['Name']; ?>" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Cost</label>
    <input type="text" class="form-control" name="Cost" value="<?php echo $row['Cost_price']; ?>" >
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input type="text" class="form-control" name="price" value="<?php echo $row['price']; ?>" >
  </div>
        <div class="form-group">
    <label for="exampleInputPassword1">Color</label>
    <input type="text" class="form-control" name="color" value="<?php echo $row['Color']; ?>" >
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Size</label>
    <input type="text" class="form-control" name="size" value="<?php echo $row['size']; ?>" >
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Quantity</label>
    <input type="text" class="form-control" name="quantity" value="<?php echo $row['Quantiy']; ?>" >
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>                  
      </div>
</div>
    
  </body>
</html>