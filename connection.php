<?php
$server = 'localhost';
$user   = 'root';
$password = 'pvn';
$dbname = 'Aloha';
$conn = new mysqli($server,$user,$password,$dbname) or die(mysqli_error($conn));
?>