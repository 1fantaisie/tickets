<?php include "header.php"; 
require "connect.php"; 
 
$user= $_POST['username'];
$pass = $_POST['pass'];

$sql = "INSERT INTO users (username,password,user_type)
VALUES ('$user', '$pass', '1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>