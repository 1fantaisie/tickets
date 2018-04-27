<?php 
 include "headerAdmin.php";
 require "connect.php"; 

if($_SESSION["user_type"] == 0)
 {
 	$username=$_GET['username'];
$sql = "DELETE FROM Users WHERE username='$username'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
 }
 ?>