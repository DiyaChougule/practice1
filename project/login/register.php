<?php
include 'connect.php';

if(isset($_POST['signUp'])){
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_DEFAULT); // Use bcrypt for hashing

    // Sanitize inputs to prevent SQL injection
    $address = $conn->real_escape_string($_POST['address']);
    $pincode = $conn->real_escape_string($_POST['pincode']);
    $phoneNumber = $conn->real_escape_string($_POST['phoneNumber']);

    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);

    if($result && $result->num_rows > 0){
        echo "Email Address Already Exists!";
    } else {
        $insertQuery = "INSERT INTO users (firstName, lastName, email, password, address, pincode, phoneNumber)
                        VALUES ('$firstName', '$lastName', '$email', '$password', '$address', '$pincode', '$phoneNumber')";

        if($conn->query($insertQuery) === TRUE){
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if(isset($_POST['signIn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if($result && $result->num_rows > 0){
        $row = $result->fetch_assoc();
        if(password_verify($password, $row['password'])){
            session_start();
            $_SESSION['email'] = $row['email'];
            header("Location: homepage.php");
            exit();
        } else {
            echo "Incorrect Email or Password";
        }
    } else {
        echo "User Not Found";
    }
}
?>
