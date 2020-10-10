<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Sale</title>
  </head>
  <body>
      <?php include_once('header.php')?>
      <div class="jumbotron">
      <div class="container">
         <h1 align="centre">Sale</h1> 
          <a class="btn btn-primary" href="Add_sale.php" role="button">Add Sale</a>
          
           <table class="table table-hover">
  <thead>
    <tr>
        <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Date</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
      <?php $link= mysqli_connect('localhost','root','','store','3308');
if(!$link){
    die ('connection unsuccessful'. mysqli_error($link));
}
      $sql = "SELECT sale_id,Name, Date, sale_quantity, sale_price FROM items_sale JOIN product ON product.Id = items_sale.prod_id";
      
      $result = mysqli_query($link,$sql);
      if (!$result) {
    printf("Error: %s\n", mysqli_error($link));
    exit();
}
      
      while($row = mysqli_fetch_array($result)){
          echo '<tr>
      <td>'.$row["sale_id"].'</td>
      <td>'.$row["Name"].'</td>
      <td>'.$row["Date"].'</td>
      <td>'.$row["sale_quantity"].'</td>
      <td>'.$row["sale_price"].'</td>
    </tr>';
      }
      mysqli_close($link);
      ?>
  </tbody>
</table>
          </div></div>

  </body>
</html>