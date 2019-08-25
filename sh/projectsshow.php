<?php

    include 'conn.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
 
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <script src="myjs.js"></script>
  <title>All Project Show</title>

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
        <h1 class="text-warning text-center"> Projects Info</h1>
        <br>
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">

       <tr  class="bg-dark text-white text-center">

          <th> PID  </th>
          <th> UID </th>
          <th> Project Name </th>
          <th> Delete </th>
          <th> Update </th>
          

       </tr>

<?php

        include 'conn.php';
        $qry="SELECT * FROM `projects`;";
        $query =mysqli_query($mysqli,$qry);
        while($res = mysqli_fetch_assoc($query)){ 

?>




         <tr>
          <td> <?php echo $res['pid']; ?> </td>
          <td> <?php echo $res['uid']; ?> </td>
          <td> <?php echo $res['pname']; ?> </td>
          <td> <button class="btn-danger btn"> <a href="projectdelete.php?pid=<?php echo $res['pid']; ?>" class="text-white"> Delete </a>  </button> </td>
          <td> <button class="btn-primary btn"> <a href="projectupdate.php?pid=<?php echo $res['pid']; ?>" class="text-white"> Update </a> </button> </td>
         
       </tr>
        
        <?php
        }
        ?>

    </table>

</div>

</div>

<div id='footer'>

</div>
    
</body>

</html>