<?php 
	$title='Tickets';
	include "header.php"; 
	$error=0;
require "connect.php"; 
$nr=$_POST['ticket_number'];
for($i=1;$i<=$nr;$i++)
{

$movie=$_POST['movie'];
$urow="ticket_row".$i;
$ucolumn="ticket_column".$i;
$row=$_POST[$urow];
$column=$_POST[$ucolumn];
$seat=$row."-".$column;
$user= $_SESSION["username"];
$seat=$conn->real_escape_string($seat);
$movie=$conn->real_escape_string($movie);
$sql = "SELECT * FROM  tickets WHERE seat='$seat' AND movie='$movie'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	if($row = $result->fetch_assoc()) 
	echo "<br>The seat ".$row['seat']." is already booked! Please select another seat.";
}
else
{
$sql = "INSERT INTO tickets (username,movie,seat)
VALUES ('$user', '$movie', '$seat');";

if ($conn->query($sql) === TRUE) {
   echo "<br>You succesfuly bought the seat ".$seat." !";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    $error++;
}
}

}

$conn->close();

 include "footer.php";
?>
