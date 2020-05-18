<?php


include_once 'connection.php';

$id = $_GET['id'];

$q = " DELETE FROM `login` WHERE id = $id ";

mysqli_query($con, $q);

header('location:Record.php');

?>