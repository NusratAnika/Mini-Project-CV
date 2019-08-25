<?php
session_start();
include("conn.php");

if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST["email"];
    $password =  $_POST["password"];
    $q = "SELECT id FROM `users` WHERE email='$email' AND password='$password';";
    $query = mysqli_query($mysqli, $q);
    
    if (mysqli_num_rows($query) > 0 ){
        $rows = mysqli_fetch_assoc($query);
        $_SESSION["id"] = $rows["id"];
        header("location: localhost/index.php");
        exit();
    } else {
        $msg = "Incorrect email or password";
    }
}

?>

<!doctype html>
<html>
    <head></head>
    <body>
        <form action="#" method="POST">
            <?php if(isset($msg)) :?>
                <?php echo $msg; ?>
            <?php endif ?>
        
            <input type="email" name="email" placeholder="Email address" />
            <input type="password" name="password" placeholder="****" />
            <input type="submit" value="Login" />
        </form> 
    </body>
</html>