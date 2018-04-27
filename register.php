

<?php $title = 'Register';include "header.php"; ?>

<form action="process_register.php" method="post">
  Username:<br>
  <input type="text" name="username" >
  <br>
  Password:<br>
  <input type="password" name="pass" >
  <br><br>
  <input type="submit" value="Submit">
</form> 


<?php include "footer.php"; ?>