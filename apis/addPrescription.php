<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "../connection.php";
mysqli_set_charset($conn, 'utf8');
$response      = null;
$records       = null;
$transactionId = null;
extract($_POST);

if (isset($_POST['postdata'])) {
    $someArray = json_decode($postdata, true);
    
    $remarks          = mysqli_escape_string($conn, $someArray['remarks']);
    $complaints       = mysqli_escape_string($conn, $someArray["complaints"]);
    $diagnosis        = mysqli_escape_string($conn, $someArray["diagnosis"]);
    $patientId        = $someArray["patientId"];
    $doctorId         = $someArray["doctorId"];
    $visitDate        = date('Y-m-d');
    $medicinesDetails = $someArray["medicinesDetails"];
    $sql              = "INSERT INTO patient_medication(patientId, visitDate,nextVisitDate,complaint,advice,diagnosis,doctorId) VALUES ($patientId,'$visitDate','$visitDate','$complaints','$remarks','$diagnosis',$doctorId)";
    $query            = mysqli_query($conn, $sql);
    if ($query == 1) {
        $last_id = mysqli_insert_id($conn);
        $tId     = strval($last_id);
        foreach ($medicinesDetails as $key => $value) {
            
            $typeId       = mysqli_escape_string($conn, $medicinesDetails[$key]['typeId']);
            $medicineId   = mysqli_escape_string($conn, $medicinesDetails[$key]['medicineId']);
            $morning      = $medicinesDetails[$key]['morning'];
            $evining      = $medicinesDetails[$key]['evining'];
            $night        = $medicinesDetails[$key]['night'];
            $duration     = $medicinesDetails[$key]['duration'];
            $inst         = mysqli_escape_string($conn, $medicinesDetails[$key]['inst']);
            $query        = mysqli_query($conn, "INSERT INTO patient_prescription_medicine(patientId,visitDate,type,name,morning,evining,night,instruction,period,doctorId) 
            values ($patientId,'$visitDate','$typeId','$medicineId','$morning','$evining','$night','$inst','$duration','$doctorId')");
            $rowsAffected = mysqli_affected_rows($conn);
            if ($rowsAffected == 1) {
                $response = array(
                    'Message' => "Prescription saved successfully",
                    "Data" => $records,
                    'Responsecode' => 200
                );
            } else {
                $response = array(
                    'Message' => mysqli_error($conn) . "Message failed",
                    'Responsecode' => 403
                );
            }
        }
    } else {
        $response = array(
            "Message" => mysqli_error($conn) . "Message failed",
            "query" => $sql,
            "Responsecode" => 404
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