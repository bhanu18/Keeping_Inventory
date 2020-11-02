<?php
include('session.php');

if(count($_POST)>0) {
mysqli_query($conn,"UPDATE items_sale set sale_id='" . $_POST['sale_id'] . "', first_name='" . $_POST['first_name'] . "', last_name='" . $_POST['last_name'] . "', city_name='" . $_POST['city_name'] . "' ,email='" . $_POST['email'] . "' WHERE userid='" . $_POST['userid'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT sale_id,Name, Date, sale_quantity, sale_price FROM items_sale JOIN product ON product.Id = items_sale.prod_id");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Sales Data</title>
</head>
<body>
    <?php include ("header.php")?>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="sale.php">Sales List</a>
</div>
Username: <br>
<input type="hidden" name="userid" class="txtField" value="<?php echo $row['sale_id']; ?>">
<input type="text" name="userid"  value="<?php echo $row['userid']; ?>">
<br>
First Name: <br>
<input type="text" name="first_name" class="txtField" value="<?php echo $row['first_name']; ?>">
<br>
Last Name :<br>
<input type="text" name="last_name" class="txtField" value="<?php echo $row['last_name']; ?>">
<br>
City:<br>
<input type="text" name="city_name" class="txtField" value="<?php echo $row['city_name']; ?>">
<br>
Email:<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
    <form>
  <div class="form-group">
    <label for="">Sale ID</label>
      <input type="hidden" name="sale_id" value="<?php echo $row['sale_id']; ?>">
    <input type="text" class="form-control" value="<?php echo $row['sale_id']; ?>" name="sale_id" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" name="first_name" class="form-control" value="<?php echo $row['name']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" name="first_name" class="form-control" value="<?php echo $row['name']; ?>">
  </div>
 <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" name="first_name" class="form-control" value="<?php echo $row['name']; ?>">
  </div>
        <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" name="first_name" class="form-control" value="<?php echo $row['name']; ?>">
  </div>
        <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" name="first_name" class="form-control" value="<?php echo $row['name']; ?>">
  </div>
        <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" name="first_name" class="form-control" value="<?php echo $row['name']; ?>">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>