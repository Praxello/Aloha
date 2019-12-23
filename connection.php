<?php
$server = 'localhost';
$user   = 'root';
$password = '';
$dbname = 'aloha';
$conn = new mysqli($server,$user,$password,$dbname) or die(mysqli_error($conn));
?>