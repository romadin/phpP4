<!DOCTYPE html>
<?php 
include_once'dbconnection.php';
?>
<html>

<head>
<title>Stages</title>
  <link rel="stylesheet" type="text/css" href="CSS/stylemenu.css">
  <?php include 'navbar.php' ?>
</head>

<body id="stage">
    <div class="container">
        <h3>Hoge druk compressie </h3><br>
      
      <?php
      $query = "SELECT * FROM stages WHERE onderdeelId=".$_GET['id'];
      $result = mysqli_query($connection,$query);
      $result1 = mysqli_query($connection,$query);
      
    //   print $query;
      
      $i = 1;
      $n = 1;
      
        echo"<nav class='col-sm-3'>
            <ul class='nav nav-pills nav-stacked' data-spy='affix' data-offset-top='205'>";
                
            while ($row1 = $result1-> fetch_assoc()) {
            echo"<li><a data-toggle='pill' href='#menu$i'>Stage $i</a></li>";
            $i++;
            }
            echo"
            </ul>
            </nav>";
      
      echo "<div class='tab-content'>";
      while ($row = $result-> fetch_assoc()) {
          $text = $row['text'];
          $video = $row['Iframe'];
        
              echo "<div id='menu$n' class='tab-pane fade'>                                                        
                <h3>Stage $n</h3>
                <div class='row'>                                                            
                    <div class='col-sm-3'>
                        $text
                    </div>
                    <div class='col-sm-4'>
                        <iframe width='554' height='280' src='$video'   allowfullscreen></iframe>
                    </div>
                </div>
            </div>";
        $n++;
      }
      echo "</div>";
      
      ?>
      
      <br>
      <br>
      
      <a href="sInvoegen.php"><button type="button" class="btn btn-primary btn-lg">Stage Invoegen</button></a>
      <a href="index.php"><button type="button" class="btn btn-primary btn-lg">Ga terug naar motoren</button></a>
    </div>

</body>
</html>
