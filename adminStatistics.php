<?php 
$title='Statistics';
include "headerAdmin.php"; 

 require "connect.php"; 
  $sql = "SELECT * FROM statistics ORDER BY datet";
$result = $conn->query($sql);
echo "<table>
	<tr>
		<td>Username</td>
		<td>DateTime</td>
	</tr>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "<tr><td>".$row['username']."</td><td>".$row['datet']."</td></tr>";
    }
} 
echo "</table>";

?>