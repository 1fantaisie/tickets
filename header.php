<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
     <title><?php if (isset($title)) {echo $title;}
        else {echo "My Website";} ?></title>
</head>
<body>

<a href="index.php" >Home</a>
<a href="contact.php">Contact</a>
<?php if(isset($_SESSION['username'])) {
	?>
	<a href="logout.php" >Logout</a>
	<?php
	echo  "Hi, ".$_SESSION["username"];
}
else { ?>
<a href="login.php" >Login</a>
<a href="register.php" >Register</a>   <?php } ?>
