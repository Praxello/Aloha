<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "../connection.php";
mysqli_set_charset($conn, 'utf8');
$response = null;
$records  = null;
extract($_POST);
$str = array();
if (isset($_POST['postdata'])) {
    $someArray = json_decode($postdata, true);
    
    $originalAmt = $someArray['originalAmt'];
    $amount      = $someArray["amount"];
    $discount    = $someArray["discount"];
    $patientId   = $someArray["patientId"];
    $doctorId    = $someArray["doctorId"];
    $visitDate   = date('Y-m-d');
    $billDetails = $someArray["billDetails"];
    

    $sql         = "INSERT INTO opd_patient_payment_master(patientId, doctorId,originalAmt,total,discount,received,pending,visitDate)VALUES ($patientId,$doctorId,$originalAmt,$amount,$discount,0,$amount,'$visitDate')";
    $query       = mysqli_query($conn, $sql);
    $rowsAffected = mysqli_affected_rows($conn);
    if ($rowsAffected == 1) {
        $last_id  = mysqli_insert_id($conn);
        $tId      = strval($last_id);
        foreach ($billDetails as $key => $value) {
            $feesType = $billDetails[$key]['feesType'];
            $fees = $billDetails[$key]['fees'];
            $sql         = "INSERT INTO Bill_Details(paymentId, feesType,fees)VALUES ($tId,'$feesType',$fees)";
            $query       = mysqli_query($conn, $sql);
           
        }
        $sql      = "SELECT * FROM opd_patient_payment_master WHERE paymentId = $tId";
        $jobQuery = mysqli_query($conn, $sql);
        if ($jobQuery != null) {
            $academicAffected = mysqli_num_rows($jobQuery);
            if ($academicAffected > 0) {
                $academicResults = mysqli_fetch_assoc($jobQuery);
                $records       = $academicResults;
                $response        = array(
                    'Message' => "All Users Fetched successfully",
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
                'Message' => "No data present",
                "Data" => $records,
                'Responsecode' => 409
            );
        }
        
    }else{
        $response = array(
            'Message' => mysqli_error($conn),
            "Data" => $sql,
            'Responsecode' => 205
        );
    }
} else {
    $response = array(
        'Message' => "Parameter Missing",
        "Data" => $records,
        'Responsecode' => 404
    );
}
mysqli_close($conn);
print json_encode($response);
?> 