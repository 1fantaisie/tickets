<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
     <title><?php if (isset($title)) {echo $title;}
        else {echo "My Website";} ?></title>
</head>
<body>

<a href="adminTickets.php" >Tickets</a>
<a href="adminUsers.php"> Users</a>
<a href="adminStatistics.php"> Statistics</a>
<a href="logout.php" >Logout</a>
