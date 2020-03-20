<?php
function addPatientCall($data){
    include '../connection.php';
    $response = null;
extract($data);
echo'calltoaddpatient';
    
if (isset($_POST['firstName']) && isset($_POST['lastName']) &&
 isset($_POST['birthdate']) && isset($_POST['gender']) && isset($_POST['mobile']) 
 && isset($_POST['city']) && isset($_POST['state'])) {
 
    echo $firstName, $lastName, $gender, $birthdate,
    $mobile,$city ,$state,
    
    
    $sql = "INSERT INTO patient_master (firstName,surname,gender,birthdate,
    mobile1,city,state) 
     VALUES ('$firstName', '$lastName', '$gender', '$birthdate',
         '$mobile','$city' ,'$state')";
        
    $query = mysqli_query($conn, $sql);
    
    mysqli_close($conn);
    $response=1;
    
    
}else{
    $response = 0;
}
return $response;
}
?> 