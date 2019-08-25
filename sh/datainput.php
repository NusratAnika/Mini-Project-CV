<?php

include 'conn.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <script src="myjs.js"></script>
  <title>Login</title>
</head>
<body >

  <div class="container">
    <div id="header">
      <h1>&nbsp;&nbsp;&nbsp;&nbsp;Login</h1>
      
    </div>
    <div class="C_details1">
      <div class="loginBlock">
        <p></p>
        <span>
          <form name="login" action="#" onsubmit="return mail1()">
            <input type="email" name="email" placeholder="E-Mail" ><br>
            <input type="password" name="password"placeholder="Password"><br>
            <input type="submit" name="submit" value="Login">
          </form>
        </span>
      </div>
    </div>
  
  
    </body>
    </html>