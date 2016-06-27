<?php
    session_start();
    session_destroy();

?>

<!DOCTYPE html>
<html>
<head>
    <?php include_once 'navbar.php'; ?>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
	<title>Logout</title>
</head>
<body>
    <center>
    <div class="container-fluid">
    <div class="row">
            <meta http-equiv="refresh" content="1;url=login.php"    
    </div>
    </div>    
    </div>    
    </center>
</body>
</html>