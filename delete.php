<?php
include 'connect.php';

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    //echo $delete_id;
    $delete_query = mysqli_query($conn, "DELETE FROM products WHERE id = $delete_id") or die("Query failed");

    if($delete_query){
        echo "Product deleted successfully!";
        header('location:view_products.php');
    }
    else{
        echo "Product not deleted";
    }
    
    // Redirect to the page displaying all products after the deletion
    header('location:view_products.php');
}
?>
