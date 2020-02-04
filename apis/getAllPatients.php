<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "../connection.php";
mysqli_set_charset($conn, 'utf8');
$response = null;
$records  = null;

$sql = "SELECT *,st.name stateName,ct.name cityName FROM patient_master pm LEFT JOIN states st ON st.id = pm.state LEFT JOIN cities ct ON ct.id = pm.city";
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
mysqli_close($conn);
exit(json_encode($response));
?> 