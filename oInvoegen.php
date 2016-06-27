<?php
include_once'dbconnection.php';
include'navbar.php';
?>

<?php
if(isset($_POST['Submit'])){
    if(!empty($_POST['knop']) && !empty($_POST['motorId'])){
        $knopText = $_POST['knop'];
        $motorId = $_POST['motorId'];
        
        if(mysqli_query($connection,"INSERT INTO Onderdelen(motorId,onderdeelId,knopText) VALUES('$motorId','','$knopText')")){
            echo "De gegevens zijn verstuurd";
        }
        else {
            echo "De gegevens zijn niet verstuurd";
        }
    }
    else{
        echo "U heeft niet alle gegevens ingevoerd";
    }
     header("location: index.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <title>Onderdelen invoegen</title>
    </head>
    <body>
        <h3>Onderdelen invoegen</h3></td>
     
            <form action="oInvoegen.php" method ="post">
            <input type="text" name="knop" placeholder="Onderdeel naam"/>
            <input type="text" name="motorId" placeholder="uw motor Id"/>
            <input type="submit" name="Submit"/>
        </form>
        
        
    </body>
</html>