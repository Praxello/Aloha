<?php
extract($_GET);
if(isset($_GET['userId'])){
    session_start();
    $_SESSION['userId'] = $userId;
    header('Location:appointments.php');
}else{
    header('Location:index.php');
}
?>