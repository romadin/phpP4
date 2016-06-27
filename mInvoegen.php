<?php
include_once'dbconnection.php';
include'navbar.php';


 while($row = $result->fetch_assoc()) {

    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Motor invoegen</title>
  <link rel="stylesheet" type="text/css" href="CSS/stylemenu.css">
</head>
    

<center>
    <body>
        <center>
            <h3>Moter invoegen</h3><br>
        <form action="" method="get">
        Motor name: <input type="text" name="motor"><br>
        <input type="submit" name="Add" value="Add"><br>
        </center>
<?php

$motor = $_GET['motor'];

if (isset($_GET['Add'])){
    mysqli_query($connection,"INSERT INTO motoren(motorId,motorName) VALUES('','$motor')");
    //mysqli_query($connection,"INSERT into motoren VALUES ('$motor', '$random')");
    header("location:index.php");
}
?>

        </form>
    </body>
    
</center>
</html>