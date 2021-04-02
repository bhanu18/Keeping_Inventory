
<?php
include('session.php');
include('function.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php include_once('header.php'); ?>
     <div class="container">
              <div class="jumbotron">
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>

</br>
<div class="container">
<table class="table table-hover">
  <thead>
    <tr>
        <th scope="col">ID</th>
      <th scope="col">Name</th>
        <th scope="col">Cost</th>
      <th scope="col">Price</th>
      <th scope="col">Color</th>
        <th scope="col">Size</th>
      <th scope="col">Quantity</th>
        <th scope="col"></th>
        <th scope="col"></th>
        
    </tr>
  </thead>

      <?php 
  
      displayInventory();
      ?>
</table>
</div>
</div>
</div>
         </div>
    </div>
</body>
</html>