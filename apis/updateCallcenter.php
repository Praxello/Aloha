<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "../connection.php";
mysqli_set_charset($conn, 'utf8');
$response = null;
$records  = null;
extract($_POST);
if (isset($_POST['callId']) && isset($_POST['clientId']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['birthdate']) && isset($_POST['gender']) && isset($_POST['mobile']) && isset($_POST['city']) && isset($_POST['state'])) {
    
    $middleName            = isset($_POST['middleName']) ? $_POST['middleName'] : 'NULL';
    $email                 = isset($_POST['emailId']) ? $_POST['emailId'] : 'NULL';
    $landline              = isset($_POST['landline']) ? $_POST['landline'] : 'NULL';
    $nearByArea            = isset($_POST['nearByArea']) ? $_POST['nearByArea'] : 'NULL';
    $country               = isset($_POST['country']) ? $_POST['country'] : 'NULL';
    $pincode               = isset($_POST['zipcode']) ? $_POST['zipcode'] : 'NULL';
    $reference             = isset($_POST['reference']) ? $_POST['reference'] : 'NULL';
    $callDateTime          = isset($_POST['callDateTime']) ? $_POST['callDateTime'] : 'NULL';
    $disease               = isset($_POST['disease']) ? $_POST['disease'] : 'NULL';
    $remarks               = isset($_POST['remarks']) ? $_POST['remarks'] : 'NULL';
    $folowupNeeded         = isset($_POST['folowupNeeded']) ? $_POST['folowupNeeded'] : 'NULL';
    $folowupNeededDateTime = isset($_POST['folowupNeededDateTime']) ? $_POST['folowupNeededDateTime'] : 'NULL';
    $attendedBy            = isset($_POST['attendedBy']) ? $_POST['attendedBy'] : 'NULL';
    $branchId              = isset($_POST['branchId']) ? $_POST['branchId'] : 'NULL';
    $doctorId              = isset($_POST['userId']) ? $_POST['userId'] : 'NULL';

    $sql = "UPDATE call_center_patients SET firstName = '$firstName',middleName = '$middleName',lastName = '$lastName',email='$email',mobile = '$mobile' ,landline ='$landline' ,nearByArea = '$nearByArea',city = '$city',state = '$state',country = '$country',pincode = '$pincode',reference = '$reference',gender = '$gender',dateOfBirth = '$birthdate' WHERE clientId = $clientId";
    
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    $sql1 = "UPDATE call_center SET callDateTime = '$callDateTime',branchId = $branchId,doctorId = $doctorId,disease ='$disease',appointmentDate = '$appointmentDate',remarks = '$remarks',folowupNeeded = '$folowupNeeded',folowupNeededDateTime = '$folowupNeededDateTime',attendedBy = '$attendedBy' WHERE callId = $callId";
    $query_1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
    $rowsAffected = mysqli_affected_rows($conn);
    if ($rowsAffected > 0) {
            $academicQuery = mysqli_query($conn, "SELECT * FROM call_center cc INNER JOIN call_center_patients ccp ON ccp.clientId = cc.clientId WHERE cc.callId = $callId");
            if ($academicQuery != null) {
                $academicAffected = mysqli_num_rows($academicQuery);
                if ($academicAffected > 0) {
                    $academicResults = mysqli_fetch_assoc($academicQuery);
                    $records         = $academicResults;
                }
            }
            $response = array(
                'Message' => "Call Updated Successfull",
                "Data" => $records,
                'Responsecode' => 200
            );
        
    } else {
        $response = array(
            'Message' => mysqli_error($conn).'No Data change',
            'Responsecode' => 500
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