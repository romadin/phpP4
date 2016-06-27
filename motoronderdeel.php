<!DOCTYPE html>
<?php 
session_start();
include_once'dbconnection.php';
?>
<html>
<head>
<title>Motor Parts</title>
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <?php include 'navbar.php' ?>

</head>
<body>
    <div class="container-fluid">
        <h3> Motor onderdelen</h3><br>
        <div class="row">
        <?php
            $query = "SELECT * FROM Onderdelen WHERE motorId=".$_GET['id'];
            $result = mysqli_query($connection,$query);
            
            if(isset($_POST['Delete'])){
                $queryDelete = "DELETE FROM Onderdelen WHERE onderdeelId =".$_POST['hidden'];
                mysqli_query($connection,$queryDelete);
                header("location:motoronderdeel.php");
            }

            if(!empty($result)){
                while ($row = $result->fetch_assoc()) {
                    $knop = $row['knopText'];?>
                    <div class="col-sm-12">
                        <div class="col-sm-6" >
                            <?php echo"<a href=hogedrukcompressie.php?id=". $row['onderdeelId']. ">
                            <button type='button' class='btn btn-primary btn-lg'> $knop </button></a><br>"?>
                        </div>
                        
                        <div class="col-sm-6" >
                        <form action='' method ='post'>
                                <input type='submit' name='Delete' value='Delete'/>
                                <input type='hidden' name='hidden' value=" <?php $row['onderdeelId']?>" />
                        </form></div>
                    </div>
                        <?php
                }
            }
            else{
                echo"<h4>U heeft nog geen onderdelen </h4>";
            }
           ?>
            <div class="col-sm-12">
               <div class="col-sm-6" >
               <br>
               <a href="index.php"><button type="button" class="btn btn-primary btn-lg">Ga terug naar motoren</button></a>
               <a href="oInvoegen.php"><button type="button" class="btn btn-primary btn-lg">Onderdeel Invoegen</button></a>
               </div>
            </div>   
        </div>    
    </div>
</body>
</html>
