<?php include("session.php");
?>
<!DOCTYPE>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>delete sales</title>
  </head>
  <body>
      <?php include_once('header.php')?>
          <div class="container">
              <div class="jumbotron">
                  <h1 class="display-4">delete sales</h1>
                  <form method="post">
  <div class="form-group">
    <label for="select_saleid">Select ID of sale</label>
    <select class="form-control" id="exampleFormControlSelect1" name="sale">
      <option value="">Select Item Sale</option>
        <?php
                $link = mysqli_connect("localhost", "root", '',"store",'3308');
    if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}
                $query="SELECT sale_id,Name FROM items_sale JOIN product ON product.Id = items_sale.prod_id";
                $result = mysqli_query($link,$query);
                    while($row = mysqli_fetch_array($result)){
  echo "<option value=".$row['sale_id']."name='sale' >".$row['sale_id'].' '.$row['Name']."</option>";
}
?></select>
  </div>
                      <button type="submit" name="delete"class="btn btn-danger">Delete</button>
</form>
                   <button type="submit" name="deleteall" class="btn btn-danger">Delete All</button>
       <?php
                  if($_SERVER['REQUEST_METHOD'] == 'POST'){
                      $sale_id=intval($_POST['sale']);
                      $link = mysqli_connect("localhost", "root", '',"store",'3308');
    if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}
                      $query= "delete from items_sale where sale_id='$sale_id'";
                      if(!mysqli_query($link, $query)){
                          printf ("Error: %s\n", mysqli_error($connection));
                      }
                      else
                          header("Location: sale.php");
                  }
                  if(isset($_POST['deleteall'])){
                      $sql= "delete from items_sale";
                      mysqli_query($link,$sql);
                  }
                  ?>           
      </div>
</div>
    
  </body>
</html>