<?php 
$title='Select Seats';
include "header.php"; ?> 
<style>
table {
  
}

table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    width:45px;
    text-align: center;
    background-color: green;
}
table{
  margin-left:150px;
}
.seat_red{
  background-color: red;
}

</style>

<?php 
$occ=[];
$k=0;
$v=['-','A','B','C','D','E','F','G','H','I','J','K'];
  $seats=10;
  $ticket_number=$_GET['ticket_number'];
  require "connect.php"; 
  $movie=$_GET['movie'];
  $sql = "SELECT * FROM tickets WHERE movie='$movie';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    
    while($row = $result->fetch_assoc()) {
        $occ[$k]= $row["seat"];
        $k++;
    }
} 


   ?>

 
<table>
<?php
function found_in($i,$j,$k,$occ)
{
  $v=['-','A','B','C','D','E','F','G','H','I','J','K'];
  $seatString=$v[$i]."-".$j;
  for($it=0;$it<$k;$it++)
    if($occ[$it]== $seatString)
      return 1;
  return 0;

}

 for($i=1;$i<=$seats;$i++)
 { echo "<tr>";  
    for($j=1;$j<=10;$j++)
      if( found_in($i,$j,$k,$occ) )
      echo "<td class='seat_red'>".$v[$i]."-".$j."</td>";
      else
         echo "<td >".$v[$i]."-".$j."</td>";
   echo "</tr>";
  }
  ?>
</table>
<br>
Select your seats: <br>
<form action="buyTickets.php" method="POST">
<?php for($j=1;$j<=$ticket_number;$j++) { ?>
Row:
  <select class='' <?php echo "name='ticket_row".$j."'>"; ?>
<?php
for($i=1;$i<=$seats;$i++) 
  echo " <option value='".$v[$i]."'>".$v[$i]."</option>";
?>
</select>
Column:
  <select class="ticket_column" <?php echo "name='ticket_column".$j."'>"; ?>
<?php
for($i=1;$i<=$seats;$i++)
  echo " <option value='".$i."'>".$i."</option>";
?>
</select>
<br>
 <?php }
 echo "<input type='hidden' value='".$ticket_number."' name='ticket_number'>";
  echo "<input type='hidden' value='".$_GET['movie']."' name='movie' >";
 ?>
 <input class='submit_button' type='submit' value='Buy Tickets'>
</form>
<?php include "footer.php"; ?>
</body>
</html>