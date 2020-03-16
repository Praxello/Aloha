<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "../connection.php";
mysqli_set_charset($conn, 'utf8');
$response = null;
$records  = null;

extract($_POST);
if(isset($_POST['fromDate']) && isset($_POST['uptoDate'])){
$sql = "SELECT count(cc.callId) cnt2, c.name from call_center cc
left JOIN call_center_patients ccp on
cc.clientId=ccp.clientId
left JOIN states c on 
ccp.state=c.id
 where date(cc.appointmentDate) BETWEEN '$fromDate' AND '$uptoDate' AND c.name IS NOT NULL group BY c.name";



$jobQuery = mysqli_query($conn, $sql);
if ($jobQuery != null) {
    $academicAffected = mysqli_num_rows($jobQuery);
    if ($academicAffected > 0) {
        while ($academicResults = mysqli_fetch_assoc($jobQuery)) {
            $records[] = $academicResults;
        }
        
        $response = array(
            'Message' => "All ref Data Fetched successfully",
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
        'Message' => mysqli_error($conn),
        "Data" => $records,
        'Responsecode' => 300
    ); 
}
}
mysqli_close($conn);
exit(json_encode($response));
?> 