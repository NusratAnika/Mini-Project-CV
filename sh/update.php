<?php
include 'conn.php';
if(isset($_POST['confirm']))
{
  
  $uid=$_GET['uid'];
  $fullname = $_POST['name'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $religion = $_POST['religion'];
  $q = " update `users` set fullname='$fullname', pwd='$password', age='$age', religion='$religion', gender='$gender' where uid=$uid ";
  $query = mysqli_query($mysqli,$q);
  header('location:home.php');
}
  else {
    $uid = $_GET["uid"];
    $q = "SELECT * FROM users WHERE uid='". $uid . "';";
    $query = mysqli_query($mysqli, $q);
    if (mysqli_num_rows($query) > 0 ) {
    $res = mysqli_fetch_assoc($query);
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <script src="myjs.js"></script>
  <title>Update Info</title>
</head>
<body >

  <div class="container">
    <div id="header">
      <h1>Update Info</h1>
      
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
        <input type="text" name="name" placeholder="Full Name" required minlength="5" value="<?php echo $res['fullname'] ?>" ><br>
        <label>E-Mail</label><br>
        <input type="email" name="email" placeholder="E-Mail" value="<?php echo $res['email'] ?>"><br></span>
      
    </div>

    <div class="ageBlock">
      <br>
      <div class="ageSelection">
        <span>
            <label>Age</label><br>
          <input id ="age"type="number" name="age" placeholder="Age"required value="<?php echo $res['email'] ?>"><br></span>
      </div>
    </div>

    <div class="genderBlock">
      <p class="genderLable">Select Gender</p>
      <div class="genderSelection">
        <span> <label>Gender</label><br>
          <input type="radio" name="gender" value="male" <?php if($res["gender"] == "male") : ?> checked <?php endif ?>> Male<br>
          <input type="radio" name="gender" value="female" <?php if ($res["gender"] == "female") : ?> checked <?php endif ?>> Female<br>
          <input type="radio" name="gender" value="other" <?php if ($res["gender"] == "other") : ?> checked <?php endif ?>> Other<br> </span>
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
          <input type="text" name="religion" placeholder="Religion" value="<?php echo $res['religion'] ?>" ><br>
          <br>
          <br>Upload Photo<br>
        <input type="file" name="pp" accept="image/*"><br>
        <input type="number" name="code" placeholder="code" value="<?php echo $res['code'] ?>"><br>
      </select><br></span>
      </div>
    </div>

          <input type="submit" name="confirm" value="Update" >

    </div>
  </form>
        </span>
      </div>
    </div>
  
  
    </body>
    </html>