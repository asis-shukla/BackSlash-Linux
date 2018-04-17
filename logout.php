<?php
// database interaction code
include('connection.php');  // this return $conn as the connection name
session_start();
//$email = $_POST['email'];
//$password = $_POST['pass'];

session_destroy();
header ('location:index.php');
?>
