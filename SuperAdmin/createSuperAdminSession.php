<?php
extract($_GET);
if(isset($_GET['userId']) && isset($_GET['branchId']) && isset($_GET['username']) && isset($_GET['role']) && isset($_GET['roleName'])){
    session_start();
    $_SESSION['userId'] = $userId;
    $_SESSION['branchId'] = $branchId;
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $role;
    $_SESSION['roleName'] = $roleName;
    echo $role;
    if($role == 5){
        header('Location:reports.php');
    }
    // else if($role == 2){
    //     header('Location:patients.php');
    // }else{
    //     header('Location:patients.php'); 
    // }
  
// }else{
//     header('Location:index.php');
 }
?>