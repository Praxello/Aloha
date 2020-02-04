<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "../connection.php";
mysqli_set_charset($conn, 'utf8');
$response = null;
$records  = null;
extract($_POST);
if (isset($_POST['pname1']) && isset($_POST['deseaseNew']) && isset($_POST['sinceDays']) && isset($_POST['relativeName']) && isset($_POST['medicalTreatment']) && isset($_POST['hospitalCenterName']) 
&& isset($_POST['treatmentName']) && isset($_POST['u_patientId'])) {
    
    
    $sql = "INSERT INTO consent_form_master(patientName,deseaseNew,sinceDays,relativeName,medicalTreatment,hospitalCenterName,treatmentName,u_patientId) 
     VALUES ('$pname1','$deseaseNew','$sinceDays','$relativeName','$medicalTreatment','$hospitalCenterName','$treatmentName','$u_patientId' )";
    
    $query = mysqli_query($conn, $sql);
    
    $rowsAffected = mysqli_affected_rows($conn);
    
    
    if ($rowsAffected == 1) {
        $feesId  = $conn->insert_id;
        $academicQuery = mysqli_query($conn, "SELECT * FROM consent_form_master where consentId = $ consentId");
        if ($academicQuery != null) {
            $academicAffected = mysqli_num_rows($academicQuery);
            if ($academicAffected > 0) {
                $academicResults = mysqli_fetch_assoc($academicQuery);
                $records         = $academicResults;
            }
        }
        $response = array(
            'Message' => "Form Added Successfull",
            "Data" => $records,
            'Responsecode' => 200
        );
        
    } else {
        $response = array(
            'Message' => mysqli_error($conn) . " failed",
            'Responsecode' => 500,
            "Data" => $records
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