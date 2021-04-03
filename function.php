<?php

function displayInventory(){
    global $connection;
    $sql = "SELECT * FROM product";
      
    $result = mysqli_query($connection,$sql);
    
    while($row = mysqli_fetch_array($result)){
        echo '
        <tbody>
        <tr>
      <td>'.$row["Id"].'</td>
    <td>'.$row["Name"].'</td>
    <td>'.$row["Cost_price"].'</td>
    <td>'.$row["price"].'</td>
    <td>'.$row["Color"].'</td>
    <td>'.$row["size"].'</td>
    <td>'.$row["Quantiy"].'</td>
    <td><a class="btn btn-primary" href="update_inventory.php?Id='.$row["Id"].'">Update</a></td>
    <td><a class="btn btn-danger" href="delete_inventory.php?Id='.$row["Id"].'">Delete</a></td>
  </tr>
  </tbody>';
    }
    // mysqli_close($connection);
}

function inventoryCheck(){
    global $connection;
    $sql= "SELECT * FROM product";
$result = mysqli_query($connection,$sql);
$row= mysqli_fetch_array($result);

$message = '';
$database_quantity = '';
$database_quantity =  $row['Quantiy'] ?: '';
$database_name= $row['Name'];
if($database_quantity<=1){
  $message = $database_name." needs to be refilled";
//mail("bhanuvidh@windowslive.com", $database_name." item needs to be refill", "Regards");
}
}
$message_inventory = inventoryCheck(); 

function showSale(){
    global $connection;
    $sql = "SELECT sale_id,Name, Date, sale_quantity,items_sale.size, sale_price FROM items_sale JOIN product ON product.Id = items_sale.prod_id order by sale_id asc";
      
      $result = mysqli_query($connection,$sql);
      if (!$result) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
}
      while($row = mysqli_fetch_array($result)){
          echo '<tbody>
          <tr>
      <td>'.$row["sale_id"].'</td>
      <td>'.$row["Name"].'</td>
      <td>'.$row["Date"].'</td>
      <td>'.$row["sale_quantity"].'</td>
      <td>'.$row["size"].'</td>
      <td>'.$row["sale_price"].'</td>
      <td><a class="btn btn-primary" href="update_sale.php?sale_id='.$row["sale_id"].'">Update</a></td>
      <td><a class="btn btn-danger" href="delete_sale.php?sale_id='.$row["sale_id"].'">Delete</a></td>
    </tr>
    </tbody>';
      }
    //   mysqli_close($connection);
}

function addProduct(){
    global $connection;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $cost = $_POST['cost'];
        $price =$_POST['price'];
        $color = $_POST['color'];
        $size =$_POST['size'];
        $quantity = $_POST['quantity'];
        //$sql= 'SELECT id FROM product';
        //$row = mysqli_fetch_array(mysqli_query($link, $sql));
        $sql = "INSERT INTO product (Name, Cost_price, price, Color, size, Quantiy) VALUES ('$name','$price','$cost','$color','$size','$quantity')";
        //$sql='INSERT INTO `inventory`(`Product_id`, `Quantity`) VALUES ('.$row['id'].','.$quantity.')';
        if (mysqli_query($connection, $sql)) {
    echo "New record created successfully";
            echo "We will now redirect you to the members area";
          header("Location:inventory.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
  }
  }
  //mysqli_close($connection);
}

function addSale(){
    global $connection;
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
       header("Location:sale.php");
   }
   } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($connection);
   }
                     }
}

function selectProductDropdown(){
    global $connection;
    $query="select id,name from product";
                $result = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_array($result)){
  echo "<option value=".$row['id']."name='product' >".$row['name']."</option>";
}
}
?>