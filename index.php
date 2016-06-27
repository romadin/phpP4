<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
    <?php include_once 'navbar.php'; ?>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
	<title>Login</title>
</head>
<body>
<center>
<div class="container-fluid">
<div class="row">
    <?php 
        if ( isset($_SESSION['id']) ){
            echo "<h3>U bent succesvol ingelogd</h3>";
            }else{
                echo "<h3>Welkom op de fred van Rijn site</h3> 
                <br>Als u uw motoren wilt in zien dan moet u <a href='login.php'>inloggen</a>";
            } 
            ?>
        </div>
    </div>    
    </div>    
    </center>
</body>
</html>