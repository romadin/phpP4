<?php
include_once'dbconnection.php';
include'navbar.php';
?>

<?php
if(isset($_POST['Submit'])){
    if(!empty($_POST['message']) && !empty($_POST['Video'])){
        $text = $_POST['message'];
        $video = $_POST['Video'];
        $onderdelen = $_POST['onderdelen'];
        
        if(mysqli_query($connection,"INSERT INTO stages(text,Iframe,onderdeelId) VALUES('$text','$video','$onderdelen')")){
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
        <title>Stage invoegen</title>
    </head>
    <body>
        <div class = "container-fluid">
        <h3>Stage invoegen</h3></td>
     
            <form action="sInvoegen.php" method ="post">
            <textarea name="message" rows="10" cols="30" placeholder="Voer hier uw commentaar toe."> </textarea>
            <input type="text" name="Video" placeholder="video"/>
            <input type="text" name="onderdeelId" placeholder="onderdeel Id"/>
            <input type="submit" name="Submit"/>
        </form>
        </div> 
        
    </body>
</html>