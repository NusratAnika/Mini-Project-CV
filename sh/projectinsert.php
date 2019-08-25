<?php
include 'conn.php';
if(isset($_POST['confirm']))
{
  
  $uid=$_POST['uid'];
  $projectname = $_POST['pname'];
  $q= " INSERT INTO `projects`( `pname`, `uid`) VALUES( '$projectname','$uid')";
  // $q = " update `users` set fullname='$fullname', pwd='$password', age='$age', religion='$religion', gender='$gender' where uid=$uid ";
  $query = mysqli_query($mysqli,$q);
  header('location:projectsshow.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <title>Update Info</title>
</head>
<body >

  <div class="container">
    <div id="header">
      <h1>Education Info</h1>
      
    </div>
    <div class="C_details1">
      <div class="loginBlock">
        <p></p>
        <span>
        <form name="myform"  action="#"    method="post">
    <br>
    

    </div>
    <div class="ProjectBlock">
      <br>
      <div class="project">
        <span><br>
          <label>Project name</label><br>
          <input type="text" name="pname" placeholder="Project Name" ><br><br>
          <label>User ID</label><br>
          <input type="text" name="uid" placeholder="UID" ><br>
      </select><br></span>
      </div>
    </div>

          <input type="submit" name="confirm" value="Insert" >

    </div>
  </form>
        </span>
      </div>
    </div>
  
  
    </body>
    </html>