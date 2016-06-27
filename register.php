<?php
include "navbar.php";
Session_start();

if(isset($_SESSION['id'])){
 header("location: index.php");
}

include_once'dbconnection.php';

if (isset($_POST['Submit'])){
    if (!empty($_POST['naam']) && !empty($_POST['code'])){
        $user = $_POST['naam'];
        $code = $_POST['code'];
        
      if(mysqli_query($connection,"INSERT INTO users(username,password) VALUES('$user','$code')")){
         $message = "U heeft succesvol geregistreerd";
        }
        else {
            $message= "Er is iets fouts gegaan bij het registreren!";
        }
    }
    else {
        $message= "U heeft niet alle velden ingevoerd!";
    }
}
?>

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
        <h3>Registeren</h3>
        <div class="col-sm-12">
            <form action="register.php" method ="post">
            <input type="text" name="naam" placeholder="naam"/>
            <input type="text" name="code" placeholder="code"/>
            <input type="submit" name="Submit" value="submit"/>
            </form><br>
            <?php echo $message ?>
        </div>
    </div>    
    </div>    
    </center>
</body>
</html>