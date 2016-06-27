<!DOCTYPE html>
<?php
include_once'dbconnection.php';
include 'navbar.php';
session_start();

if(!isset($_SESSION['id'])){
    header("location:index.php");

}


?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <title>Home Page</title>
</head>
<body>
    <div class="container-fluid">
        <h1>Borescope report inspection</h1><br>
        
    <div class="row">
         
        
           <?php
            $query = "SELECT motorName,motorId FROM motoren";
            $result = mysqli_query($connection,$query);
            
            while($row = $result->fetch_assoc()) {?>
                <div class="col-sm-6" ><?php
                echo "<a href = motoronderdeel.php?id=". $row['motorId']. "><h4>";
                $motorName = $row['motorName'];
                echo "$motorName</h4></a>";
                ?>
                </div>
                <div class="col-sm-6">
                    <!--<a href="delete.php">-->
                    <?php
                    $motor = $_GET["motoren"];
                        if(isset ($_GET['delete'])){
                            $motor = $_GET["motoren"];
                            mysqli_query($connection,"DELETE FROM motoren WHERE motorId=$motor");
                            // header("location:index.php");
                    }
                    ?>
                    <button type="button" class="btn btn-primary btn-lg">Delete</button></a>
                    </div>
            
                <?php
            }echo"<br>";
           ?>
           <div class="col-sm-6" ><a href="mInvoegen.php"><button type="button" class="btn btn-primary btn-lg">Invoegen</button></a></div>
        </div>
    </div>

</body>
</html>

