<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "amazon_store";  
    $conn = mysqli_connect($servername, $username, $password, $db_name,3307) or die("Connection failed: " . mysqli_connect_error());
?>