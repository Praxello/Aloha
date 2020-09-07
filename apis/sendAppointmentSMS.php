<?php
function sendSMS($patientId,$nextVisit)
{
    date_default_timezone_set('Asia/Kolkata');
    include "../connection.php";
    $response = false;
    $sql      = "SELECT pm.firstName,pm.surname,pm.mobile1,hp.branchAddress FROM patient_master pm INNER JOIN hospital_branch_master hp ON hp.branchId = pm.branchId 
    WHERE pm.patientId = $patientId";
    $jobQuery = mysqli_query($conn, $sql);
    if ($jobQuery != null) {
        $academicAffected = mysqli_num_rows($jobQuery);
        if ($academicAffected > 0) {
            $academicResults = mysqli_fetch_assoc($jobQuery);
            $Name            = $academicResults['firstName'] . ' ' . $academicResults['surname'];
            $contactNumber   = $academicResults['mobile1'];
            $branchAddreess  = $academicResults['branchAddress'];
            $date = date_create($nextVisit);
            $date=  date_format($date,"YmdHi");
            $message = "Hello Mr/Mrs $Name.
    Your today's appointment with 360° Spinal wellness & Rehabilitation is booked at ".$branchAddreess." Kindly be on time.
    Thank you!";
            $message = urlencode($message);
            //$url     = "http://sms.messageindia.in/sendSMS?username=360spn&message=$message&sendername=SPNWEL&smstype=TRANS&numbers=$contactNumber&apikey=947be38e-f04b-4521-8067-da881e5dd3f5";
           $url  = "http://sms.messageindia.in/sendSMS?username=360spn&apikey=947be38e-f04b-4521-8067-da881e5dd3f5&scheduled=$date&message=$message&sendername=SPNWEL&smstype=TRANS&numbers=$contactNumber";
            $json = file_get_contents($url);
            $json = json_decode($json, true);
            if ($json[0]['responseCode'] == 'Message SuccessFully Submitted') {
                $response = true;
            } else {
                $response = false;
            }
        } else {
            $response = false;
        } 
    }else{
        $response = false;
    }
    return $response;
}
?>