<?php
include 'connect.php';
$product_name=$_POST['product_name'];
if(isset($_POST['View Details'])){
   // $view_id=$_GET['View Details'];
   $select_cart=mysqli_query($conn,"select * from `cart`where name='$product_name'");
}
?>