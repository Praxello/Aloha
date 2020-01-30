<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "../connection.php";
mysqli_set_charset($conn, 'utf8');
$response = null;
$records  = null;
extract($_POST);
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['mobile']) && isset($_POST['addharId']) && isset($_POST['usertype']) && isset($_POST['designation'])
&& isset($_POST['address']) && isset($_POST['firmName'])) {
    
    
    $sql = "INSERT INTO user_master(username,password,mobile,addharId,usertype,designation,address,firmName) 
     VALUES ('$username','$password','$mobile','$addharId','$usertype','$designation','$address','$firmName')";
    
    $query = mysqli_query($conn, $sql);
    
    $rowsAffected = mysqli_affected_rows($conn);
    
    
    if ($rowsAffected == 1) {
        $userId  = $conn->insert_id;
        $academicQuery = mysqli_query($conn, "SELECT * FROM user_master where userId = $userId");
        if ($academicQuery != null) {
            $academicAffected = mysqli_num_rows($academicQuery);
            if ($academicAffected > 0) {
                $academicResults = mysqli_fetch_assoc($academicQuery);
                $records         = $academicResults;
            }
        }
        $response = array(
            'Message' => "User Added Successfull",
            "Data" => $records,
            'Responsecode' => 200
        );
        
    } else {
        $response = array(
            'Message' => mysqli_error($conn) . " failed",
            'Responsecode' => 500,
            "Data" => $records
        );
    }
} else {
    $response = array(
        "Message" => "Parameters missing",
        "Responsecode" => 403
        
    );
}
mysqli_close($conn);
print json_encode($response);
?> 