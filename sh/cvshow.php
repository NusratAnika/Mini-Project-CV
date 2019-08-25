<?php

include 'conn.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
 
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <script src="myjs.js"></script>
  <title>CV</title>

  <meta name="viewport" content="widtd=device-widtd, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>


</head>
<body >

  <div class="container">

   

    <div id="header">
      <h1></h1>
    </div>
    
    <div class="col-lg-12">
            <br><br>
        <h1 class="text-warning text-center"> General Information</h1>
        <br>
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">

       <tr  class="bg-dark text-white text-center">

          <th> UID </th>
          <th> Full Name </th>
          <th> E-mail </th>
          <th> Age </th>
          <th> Religion </th>
          <th> Gender </th>
          <th> Code </th>
          

       </tr>
       <?php

include 'conn.php';
$uid=$_GET['uid'];
$qry="SELECT `uid`, `fullname`, `email`, `age`, `religion`, `gender`,`code` FROM `users` where uid=$uid;";
$query =mysqli_query($mysqli,$qry);
while($res = mysqli_fetch_assoc($query)){



?>




 <tr>
  <td> <?php echo $res['uid']; ?> </td>
  <td> <?php echo $res['fullname']; ?> </td>
  <td> <?php echo $res['email']; ?> </td>
  <td> <?php echo $res['age']; ?> </td>
  <td> <?php echo $res['religion']; ?> </td>
  <td> <?php echo $res['gender']; ?> </td>
  <td> <?php echo $res['code']; ?> </td>
 
 
</tr>

<?php
}
?>

</table>


<div class="col-lg-12">
            <br><br>
        <h1 class="text-warning text-center"> Education Informations</h1>
        <br>
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">

       <tr  class="bg-dark text-white text-center">

          <th> Exam Name </th>
          <th> Year of Exam </th>
          <th> Result </th>
          
          

       </tr>
       <?php

include 'conn.php';
$uid=$_GET['uid'];
$qry="SELECT `examname`, `passyear`, `result` FROM `education` where uid=$uid;";
$query =mysqli_query($mysqli,$qry);
while($res = mysqli_fetch_assoc($query)){



?>




 <tr>
  <td> <?php echo $res['examname']; ?> </td>
  <td> <?php echo $res['passyear']; ?> </td>
  <td> <?php echo $res['result']; ?> </td>
  
 
 
</tr>

<?php
}
?>

</table>

<div class="col-lg-12">
            <br><br>
        <h1 class="text-warning text-center"> Projects</h1>
        <br>
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">

       <tr  class="bg-dark text-white text-center">

          <th> Project Name </th>
          
          
          

       </tr>
       <?php

include 'conn.php';
$uid=$_GET['uid'];
$qry="SELECT `pname`from `projects` where uid=$uid;";
$query =mysqli_query($mysqli,$qry);
while($res = mysqli_fetch_assoc($query)){



?>




 <tr>
  <td> <?php echo $res['pname']; ?> </td>
  
  
 
 
</tr>

<?php
}
?>

</table>



    
</body>       
</html>