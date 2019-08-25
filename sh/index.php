<?php
include 'conn.php';
if(isset($_POST['confirm']))
{
  $fullname = $_POST['name'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $religion = $_POST['religion'];
  $code=$_POST['code'];
  //$pic=$_FILES['pic'];
//  $filename=$_FILES["pic"]["name"];
 // $tempname=$_FILES["pic"]["temp_name"];
 // $folder="pics/".$filename;
 // move_uploaded_file($tempname,$folder);
  $q = " INSERT INTO `users`( `fullname`, `email`, `pwd`, `age`, `religion`, `gender`,`code`) VALUES( '$fullname', '$email','$password','$age','$religion','$gender','$code' )";
  $query = mysqli_query($mysqli,$q);
  header('location:home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <script src="myjs.js"></script>
  <title>General Info</title>
</head>
<body >

  <div class="container">
    <div id="header">
      <h1>General Info</h1>
      
    </div>
    <div class="C_details1">
      <div class="loginBlock">
        <p></p>
        <span>
        <form name="myform"  action="#"  onsubmit="return allFuncAndPwd();"  method="post" enctype= "multipart/form-data">
    <br>
    <div class="nameAndEmailBlock">
      <p class="nameAndEmailLable"><h4></h4><br></p>
      <span class="nameLable"><br><label>Full Name</label><br>
        <input type="text" name="name" placeholder="Full Name" required minlength="5"><br>
        <label>E-Mail</label><br>
        <input type="email" name="email" placeholder="E-Mail"><br></span>
      
    </div>

    <div class="ageBlock">
      <br>
      <div class="ageSelection">
        <span>
            <label>Age</label><br>
          <input id ="age"type="number" name="age" placeholder="Age"required><br></span>
      </div>
    </div>

    <div class="genderBlock">
      <p class="genderLable">Select Gender</p>
      <div class="genderSelection">
        <span> <label>Gender</label><br>
          <input type="radio" name="gender" value="male" required> Male<br>
          <input type="radio" name="gender" value="female"> Female<br>
          <input type="radio" name="gender" value="other"> Other<br> </span>
      </div>
    </div>
    <div class="passwordBlock">
      <br>
      <div class="passwordInput">
        <span><label>Password</label><br>
          <input type="password" name="password" placeholder="Password" required><br>
          <label>Re-type Password</label><br>
          <input type="password" name="repassword" placeholder="Re-type Password" required><br></span>
      </div>
    </div>
   

    </div>
    <div class="relegionBlock">
      <br>
      <div class="relegionSelection">
        <span><br>
          <label>Religion</label><br>
          <input type="text" name="religion" placeholder="Religion" required><br>
          <br>
        <input type="number" name="code" placeholder="code"><br>
        <br>Upload Photo<br>
        <input type="file" name="pp" accept="image/*">
      </select><br></span>
      </div>
    </div>

    <div class="tearmsandconditionBlock">
      <p class="tearmsandconditionLable">Agree Terms and Conditions</p>
      <div class="tearmsandcondition">
        <span>  <input type="checkbox" name="tearmsandcondition" > I agree the Terms and Conditions Agreement<br>
          <input type="submit" name="confirm" value="SignUp" >

    </div>
  </form>
        </span>
      </div>
    </div>
  
  
    </body>
    </html>