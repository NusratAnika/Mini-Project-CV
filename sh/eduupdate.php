<?php
include 'conn.php';
if(isset($_POST['confirm']))
{
  
  $eid=$_GET['eid'];
  $examname = $_POST['examname'];
  $year = $_POST['year'];
  $result = $_POST['result'];
  $uid=$_POST['uid'];
  $q= " update `education` set examname='$examname', passyear='$year', result='$result', uid=$uid where eid=$eid";
  // $q = " update `users` set fullname='$fullname', pwd='$password', age='$age', religion='$religion', gender='$gender' where uid=$uid ";
  $query = mysqli_query($mysqli,$q);
  header('location:edushow.php');
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
    <div class="examnameBlock">
      <p class="examnameLabel"><h4></h4><br></p>
      <span class="nameLable"><br><label>Exam Name</label><br>
        <input type="text" name="examname" placeholder="Exam Name" ><br>
       <br></span>
      
    </div>

    <div class="yearBlock">
      <br>
      <div class="Year">
        <span>
            <label>Year</label><br>
          <input id ="year"type="number" name="year" placeholder="Year"><br></span>
      </div>
    </div>

    </div>
    <div class="resultBlock">
      <br>
      <div class="result">
        <span><br>
          <label>Result</label><br>
          <input type="text" name="result" placeholder="Result" ><br><br>
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