<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "../connection.php";
include "getLastId.php";
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
    $userId      = $someArray["userId"];
    $branchId    = $someArray["branchId"];
    $visitDate   = date('Y-m-d');
    $billDetails = $someArray["billDetails"];
    $recieptId = getLastId($branchId)+1;

    $sql         = "INSERT INTO opd_patient_payment_master(recieptId,branchId,patientId, doctorId,originalAmt,total,discount,received,pending,visitDate,createdBy)
    VALUES ($recieptId,$branchId,$patientId,$doctorId,$originalAmt,$amount,$discount,0,$amount,'$visitDate',$userId)";
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
        $sql = "SELECT opm.recieptId,opm.originalAmt,opm.discount,opm.paymentId,opm.patientId,opm.total,opm.pending,um.username,opm.doctorId FROM opd_patient_payment_master opm 
        INNER JOIN user_master um ON um.userId = opm.doctorId 
        WHERE opm.paymentId = $tId";
        // $sql      = "SELECT * FROM opd_patient_payment_master WHERE paymentId = $tId";
        $jobQuery = mysqli_query($conn, $sql);
        if ($jobQuery != null) {
            $academicAffected = mysqli_num_rows($jobQuery);
            if ($academicAffected > 0) {
                $academicResults = mysqli_fetch_assoc($jobQuery);
                $records       = $academicResults;
                $response        = array(
                    'Message' => "Payment generated successfully",
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