<?php

include 'conn.php';

$pid = $_GET['pid'];

$q = " DELETE FROM `projects` WHERE pid = $pid ";

mysqli_query($mysqli, $q);

header('location:projectsshow.php');

?>