<?php
extract($_GET);
if(isset($_GET['licensorid'])  && isset($_GET['username'])){
    session_start();
    $_SESSION['licensorid'] = $licensorid;
    $_SESSION['username'] = $username;
    header('Location:franchise.php');
 }else{
    header('Location:../index.php');
 }
?>