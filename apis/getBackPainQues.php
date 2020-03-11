<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "../connection.php";
mysqli_set_charset($conn, 'utf8');
$response = null;
$records  = null;
extract($_POST);
if(isset($_POST['patientId'])){
$sql = "SELECT * FROM low_backpain_questionnaire WHERE patientId = $patientId";
$jobQuery = mysqli_query($conn, $sql);
if ($jobQuery != null) {
    $academicAffected = mysqli_num_rows($jobQuery);
    if ($academicAffected > 0) {
        while ($academicResults = mysqli_fetch_assoc($jobQuery)) {
            $records[] = $academicResults;
        }
        
        $response = array(
            'Message' => "All Patients Data Fetched successfully",
            "Data" => $records,
            'Responsecode' => 200
        );
    } else {
        $response = array(
            'Message' => mysqli_error($conn),
            "Data" => $records,
            'Responsecode' => 401
        );
    }
}else{
    $response = array(
        'Message' =>  mysqli_error($conn),
        "Data" => $records,
        'Responsecode' => 300
    ); 
}
}else{
    $response = array(
        'Message' => "Parameter Missing",
        "Data" => $records,
        'Responsecode' => 404
    ); 
}
mysqli_close($conn);
exit(json_encode($response));
?> 