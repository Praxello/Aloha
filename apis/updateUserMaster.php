<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "../connection.php";
mysqli_set_charset($conn, 'utf8');
$response = null;
$records  = null;
extract($_POST);

if (isset($_POST['userId']) && isset($_POST['username']) && isset($_POST['upassword']) && isset($_POST['mobile']) && isset($_POST['addharId']) && isset($_POST['usertype'])
    && isset($_POST['designation']) && isset($_POST['address']) && isset($_POST['firmName'])) {
    

    $address = mysqli_real_escape_string($conn, $address);
    
    $sql = "UPDATE  user_master SET username='$username',upassword='$upassword',mobile='$mobile',addharId='$addharId',usertype ='$usertype',designation = '$designation',
    address='$address',firmName = '$firmName',sign='$sign' WHERE userId='$userId'";
  
    
    $query = mysqli_query($conn, $sql);
    
    $rowsAffected = mysqli_affected_rows($conn);
    if ($rowsAffected == 1) {
   
     
        $academicQuery = mysqli_query($conn, "SELECT * FROM user_master where userId = $userId");
        if ($academicQuery != null) {
            $academicAffected = mysqli_num_rows($academicQuery);
            if ($academicAffected > 0) {
                $academicResults = mysqli_fetch_assoc($academicQuery);
                $records         = $academicResults;
            }
        }
        $response = array(
            'Message' => "Update User Successfull",
            "Data" => $records,
            'Responsecode' => 200
        );
        
    } else {
        $response = array(
            'Message' => mysqli_error($conn) . " failed",
            'Responsecode' => 500
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