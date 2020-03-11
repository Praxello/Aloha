<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "../connection.php";
mysqli_set_charset($conn, 'utf8');
$response = null;
$records  = null;

extract($_POST);

$sql = "SELECT cs.clientId,sum(cs.reference) reference1,cs.reference FROM call_center_patients cs";
if(!empty($_POST['fromDate']) && !empty($_POST['uptoDate'])){
    $sql .= " INNER JOIN call_center cc ON  cc.clientId = cs.clientId WHERE cc.appointmentDate BETWEEN '$fromDate' AND '$uptoDate'";
}
if(isset($_POST['branchId']) && !empty($_POST['branchId']) && $_POST['branchId'] != 0){
    $sql .= " AND cc.branchId = $branchId";
}
$sql .= " GROUP BY cs.clientId";

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
mysqli_close($conn);
exit(json_encode($response));
?> 