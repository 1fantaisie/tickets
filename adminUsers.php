<?php 
$title='Admin Users';
 include "headerAdmin.php";
 require "connect.php"; 
  $sql = "SELECT * FROM users ";
$result = $conn->query($sql);
echo "<table>
	<tr>
		<td>Username</td>
		<td>Role</td>
		<td>Delete user</td>
	</tr>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "<tr><td>".$row['username']."</td><td>";
       if($row['user_type'])
       	echo 'user';
       else
       	echo 'admin';
       echo "</td><td> <a href='deleteUser.php?username=".$row['username']."'>Delete</a>";
       	echo "</td></tr>";

    }
} 
echo "</table>";
 ?> 