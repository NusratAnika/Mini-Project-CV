<?php

include 'conn.php';

$eid = $_GET['eid'];

$q = " DELETE FROM `education` WHERE eid = $eid ";

mysqli_query($mysqli, $q);

header('location:edushow.php');

?>