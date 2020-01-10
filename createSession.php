<?php
extract($_GET);
if(isset($_GET['userId']) && isset($_GET['branchId']) && isset($_GET['username'])){
    session_start();
    $_SESSION['userId'] = $userId;
    $_SESSION['branchId'] = $branchId;
    $_SESSION['username'] = $username;
    header('Location:appointments.php');
}else{
    header('Location:index.php');
}
?>