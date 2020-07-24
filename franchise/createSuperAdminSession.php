<?php
extract($_GET);
if(isset($_GET['franchiseid'])  && isset($_GET['username'])){
    session_start();
    $_SESSION['franchiseid'] = $franchiseid;
    $_SESSION['username'] = $username;
    header('Location:branchMaster.php');
 }else{
    header('Location:../index.php');
 }
?>