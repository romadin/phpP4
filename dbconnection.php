<?php
$connection = mysqli_connect("localhost", "lau2000","") or die ("Geen verbiding met de database");
mysqli_select_db($connection,"fredvanrijn") or die ("Geen verbiding met de database");

$query = "SELECT * FROM users ";
$result = mysqli_query($connection,$query);
//include_once'dbconnection.php';
?>