<?php
 include "header.php"; 
 require "connect.php";


$user= $_POST['username'];
$pass = $_POST['pass'];
$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);


if ($result->num_rows >0) {
    $_SESSION["username"] = $user;
     $type=0;
    if($row = $result->fetch_assoc()) 
       $type= $row['user_type'];
    $_SESSION["user_type"] = $type;
 $date=$date = date('Y-m-d H:m:s', time());
    $sql = "INSERT INTO statistics (username,datet)
VALUES ('$user', '$date')";

if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
}else {
    echo "ERROR <br>" . $conn->error;
}
    if($type==1) {
   ?> <script > window.location.replace("http://localhost/tickets/index.php");
	</script> <?php }
	
	else {
	?>	<script > window.location.replace("http://localhost/tickets/adminTickets.php");
	</script> <?php }
	
} else {
    echo "Username or password are incorrect <br>" . $conn->error;
}

$conn->close();

?>