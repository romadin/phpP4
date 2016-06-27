<?php
include_once'dbconnection.php';



 while($row = $result->fetch_assoc()) {

    }
?>
<center>
    <body>
        <center>
        <form action="" method="get">
        <select name="motoren">
        <?php
         $query = "SELECT * FROM motoren";
            $result = mysqli_query($connection,$query);
            
            while($row = $result->fetch_assoc()) {
                $motorName = $row['motorName'];
                $motorId = $row['motorId'];
                echo "<option value=$motorId>$motorName</option>";

            }
          
        ?> 
        </select>
        <input type="submit" name="delete" value="delete"><br>
        </center>
        </form>
        <?php
        $motor = $_GET["motoren"];
        
        if(isset ($_GET['delete'])){
            $motor = $_GET["motoren"];
            mysqli_query($connection,"DELETE FROM motoren WHERE motorId=$motor");
            header("location:index.php");
        }
        ?>
    </body>
    
</center>