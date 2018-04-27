<?php 
$title='Home';
include "headerAdmin.php"; 

 require "connect.php"; 
  $sql = "SELECT * FROM tickets ORDER BY movie";
$result = $conn->query($sql);
echo "<table>
	<tr>
	 	<td>Movie Title</td>
		<td>Username</td>
		<td>Seat</td>
	</tr>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "<tr><td>".$row['movie']."</td><td>".$row['username']."</td><td>".$row['seat']."</td></tr>";
    }
} 
echo "</table>";

?>