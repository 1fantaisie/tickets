<?php 
$title='Select Number of Tickets';
 include "header.php"; 
   echo " <span class='mtitle'><br>".$_GET["movie"]; ?> </span> 
    <br>
	<form action='select.php' method='get'> 
		<span class='mtitle'> Number of tickets: </span> 
		<select name="ticket_number">
			<option value="1">1</option>
 		 	<option value="2">2</option>
 		 	<option value="3">3</option>
 		 	<option value="4">4</option>
 		 	<option value="5">5</option>
 		 	<option value="6">6</option>
 		 	<option value="7">7</option>
 		 	<option value="8">8</option>
		</select>
		<input type='hidden' name='movie' <?php echo "value='".$_GET["movie"]."'>"; ?>
		<input type='submit' class='submit_button' value='Select your seats'> 
	</form>
	<?php  include "footer.php"; ?>
</body>
</html>
