<?php
header('Content-type: text/json'); //3
header('Content-type: application/json');
include "../connection.php";
mysqli_set_charset($conn, 'utf8');
$response    = null;
$records     = null;
$result      = array();
$storeFolder = '../upload/patientDocs/';
$ds          = DIRECTORY_SEPARATOR;
extract($_POST);
if (isset($_POST['patientId'])) {
    if (file_exists($storeFolder.$patientId.'.jpg')) {
       
                $obj['name'] = $storeFolder.$patientId.'.jpg';
                $obj['size'] = filesize($storeFolder.$patientId.'.jpg');
                $records[]   = $obj;
            
            $response = array(
                'Message' => "Fetched",
                'Data' => $records,
                'Responsecode' => 200
            );
            
        }else{
            $response = array(
                'Message' => "Fetched",
                'Data' => $records,
                'Responsecode' => 202
            );
        } 
    
} else {
    $response = array(
        'Message' => "Parameter Missing",
        'Data' => $records,
        'Responsecode' => 400
    );
}
mysqli_close($conn);
exit(json_encode($response));
?> 