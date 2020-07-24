<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "../connection.php";
mysqli_set_charset($conn, 'utf8');
$response = null;
$records  = null;
extract($_POST);
if (isset($_POST['username']) && isset($_POST['passwrd'])) {
    $sql      = "SELECT um.userId,um.username,um.usertype,rm.role,um.branchId FROM user_master um
    INNER JOIN roleMaster rm ON rm.roleId = um.usertype  
    WHERE um.mobile ='$username' AND um.upassword = '$passwrd' AND isActive=1";
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
    }else{
        $response = array(
            'Message' => mysqli_error($conn),
            "Data" => $records,
            'Responsecode' => 500
        );
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