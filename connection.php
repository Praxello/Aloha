<?php
$server = 'localhost';
$user   = 'root';
$password = '';
$dbname = 'spine360';
$conn = new mysqli($server,$user,$password,$dbname) or die(mysqli_error($conn));
?>