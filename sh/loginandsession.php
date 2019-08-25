<?php
  session_start();
  $mail = $_POST['mail'];
  $password = $_POST['password'];
  include 'dynamic.php';
  $loginQuery = "select emailAccount, password, userName from userinformation where emailAccount = '$mail' and password = '$password'";
  $result = mysqli_query(connection() , $loginQuery);
  $row = mysqli_fetch_assoc($result);
      
  if($row['emailAccount'] == $mail && $row['password'] == $password  ){
    $_SESSION['email'] = $row['emailAccount'];
    if($row['userName']== " "){
      header('Location: pformnew.php');
    }
    else{
      header('Location: pform.php');
    }
         
  }
  else{
    header('Location: signin.php');
  }
  
  
  
?>