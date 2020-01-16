<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "../connection.php";
mysqli_set_charset($conn, 'utf8');
$response = null;
$records  = null;
extract($_POST);
if(isset($_POST['patientId'])){
    $today = date('Y-m-d');
$sql = "SELECT opm.paymentId,opm.patientId,opm.billDetails,opm.total,opm.pending,um.username FROM opd_patient_payment_master opm 
INNER JOIN user_master um ON um.userId = opm.doctorId 
WHERE opm.patientId = $patientId AND opm.visitDate = '$today'";
$jobQuery = mysqli_query($conn, $sql);
if ($jobQuery != null) {
    $academicAffected = mysqli_num_rows($jobQuery);
    if ($academicAffected > 0) {
        while ($academicResults = mysqli_fetch_assoc($jobQuery)) {
            $records[] = $academicResults;
        }
        
        $response = array(
            'Message' => "All Payments Fetched successfully",
            "Data" => $records,
            'Responsecode' => 200
        );
    } else {
        $response = array(
            'Message' => "No data present",
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
        'Message' => "Parameter Missing",
        'Responsecode' => 404
    );  
}
mysqli_close($conn);
exit(json_encode($response));
?> 