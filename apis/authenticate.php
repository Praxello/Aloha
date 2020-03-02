<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "../connection.php";
mysqli_set_charset($conn, 'utf8');
$response = null;
$records  = null;
extract($_POST);
if (isset($_POST['userId']) && isset($_POST['passwrd']) && isset($_POST['branchId'])) {
    $sql      = "SELECT um.userId,um.username,um.usertype,rm.role FROM user_master um 
    LEFT JOIN roleMaster rm ON rm.roleId = um.usertype  
    WHERE um.userId = $userId AND um.upassword = '$passwrd' AND um.branchId = $branchId";
    $jobQuery = mysqli_query($conn, $sql);
    if ($jobQuery != null) {
        $academicAffected = mysqli_num_rows($jobQuery);
        if ($academicAffected > 0) {
            $academicResults = mysqli_fetch_assoc($jobQuery);
            $records         = $academicResults;
            $response        = array(
                'Message' => "Welcome",
                "Data" => $records,
                'Responsecode' => 200
            );
        } else {
            $response = array(
                'Message' => "No user present/ Invalid username or password",
                "Data" => $records,
                "sql"=>$sql,
                'Responsecode' => 401
            );
        }
    }
} else {
    $response = array(
        'Message' => "Parameter Missing",
        "Data" => $records,
        'Responsecode' => 500
    );
}
mysqli_close($conn);
exit(json_encode($response));
?>