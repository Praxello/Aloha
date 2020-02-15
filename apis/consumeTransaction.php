<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "../connection.php";
mysqli_set_charset($conn, 'utf8');
$response = null;
$records  = null;
extract($_POST);
if(isset($_POST['detailId'])){
$sql = "UPDATE  PackageCustomerDetails SET Quota = Quota-1 WHERE detailId = $detailId";
$jobQuery = mysqli_query($conn, $sql);
if ($jobQuery != null) {
    $academicAffected = mysqli_affected_rows($conn);
    $insert = "INSERT INTO PackageTransaction(detailId,userId) VALUES($detailId,$userId)";
    mysqli_query($conn,$insert);
    if ($academicAffected ==1) {
        $response = array(
            'Message' => "Package is consumed successfully",
            "Data" => $records,
            'Responsecode' => 200
        );
    } else {
        $response = array(
            'Message' => "No user present/ Invalid username or password",
            "Data" => $records,
            'Responsecode' => 401
        );
    }
}else{
    $response = array(
        'Message' => "Please Logout and login again",
        "Data" => $records,
        'Responsecode' => 300
    ); 
}
}else{
    $response = array(
        'Message' => "Parameter missing",
        'Responsecode' => 404
    );  
}
mysqli_close($conn);
exit(json_encode($response));
?> 