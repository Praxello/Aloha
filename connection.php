<?php
$server = 'localhost';
$user   = 'root';
$password = '';
$dbname = 'spinenew';
$conn = new mysqli($server,$user,$password,$dbname) or die(mysqli_error($conn));
?>