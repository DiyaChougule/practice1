<header class="header">
    <div class ="header_body">
        
        <a href="index.php" class="logo">Amazon</a>
    
        <nav class="navbar">
        <a href="index.php">Add Product</a>
        <a href="view_products.php">View Products</a>
        </nav>
<?php
$select_product=mysqli_query($conn,"Select * from cart") or die('query failed');
$row_count=mysqli_num_rows($select_product);  
?>  

    </div>
</header>