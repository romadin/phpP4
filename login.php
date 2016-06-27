<?php 
include_once'dbconnection.php';
session_start();

$username = $_POST['Username'];
$password = $_POST['Password'];

$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);


if(isset($_SESSION['id'])){
    header("location:index.php");
}
    if(isset($_POST['Submit'])){
        if(!empty($_POST['Username'] && !empty($_POST['Password']))){
            $query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
            $result = mysqli_query($connection,$query);
            $row = $result->fetch_assoc();
            
            $db_password= $row['password'];
            $id= $row['id'];
            
            if($password == $db_password){
                $_SESSION['username'] = $username;
                $_SESSION['id']= $id;
                header("location: index.php");
            }else{
                $message = "U heeft niet de correcte gegevens ingevoerd";
            }
            
        }else{
            $message = "u heeft niet alle velden ingevoerd";
        }
        
    }
    



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
        <h3>Login</h3>
        <div class="col-sm-12">
            <form action="login.php" method ="post">
            <input type="text" name="Username" placeholder="naam"/>
            <input type="text" name="Password" placeholder="code"/>
            <input type="submit" name="Submit" value="submit"/>
            </form><br>
            <?php echo $message ?>
        </div>
    </div>    
    </div>    
    </center>
</body>
</html>
<?php     ?>