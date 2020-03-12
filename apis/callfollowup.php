<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "../connection.php";
mysqli_set_charset($conn, 'utf8');
$response = null;
$records  = null;
$temparray  = null;
$tempMedicines = null;
extract($_POST);
if(isset($_POST['fromDate']) && isset($_POST['uptoDate'])){

      //patch followup record to this
        $followUpRecord = null;
      $followsql = "SELECT COUNT(ccf.callFollowupsId) callf,um.username FROM call_center_followups ccf 
      LEFT JOIN user_master um on um.userId = ccf.attendedBy  where date(ccf.followUpDateTime) BETWEEN '$fromDate' AND '$uptoDate'  GROUP BY ccf.attendedBy";

    $jobQuery = mysqli_query($conn, $followsql);
    if ($jobQuery != null) {
     $academicAffected = mysqli_num_rows($jobQuery);
     if ($academicAffected > 0) {
      while ($academicResults = mysqli_fetch_assoc($jobQuery)) {
          $userName = $academicResults['username'];
          $followUpRecord[$userName] = $academicResults['callf'];
      }
  }
  }






$sql = "SELECT COUNT(cc.callId) cnt,um.username FROM call_center cc left join user_master um on um.userId=cc.attendedBy 
where date(cc.appointmentDate) BETWEEN '$fromDate' AND '$uptoDate' GROUP BY cc.attendedBy";

// $sql ="SELECT COUNT(cc.callId) cnt,um.username FROM call_center cc left join user_master um on um.userId=cc.attendedBy GROUP BY cc.attendedBy ";
$jobQuery = mysqli_query($conn, $sql);
if ($jobQuery != null) {
    $academicAffected = mysqli_num_rows($jobQuery);
    if ($academicAffected > 0) {
        while ($academicResults = mysqli_fetch_assoc($jobQuery)) {
            
            $tempRecord = $academicResults;
            //check if this key exists in followup data
           $userName =  $academicResults['username'];
            if(array_key_exists($userName,$followUpRecord))
            {
                $tempRecord['followUps'] = $followUpRecord[$userName];
            }
            else
            {
                $tempRecord['followUps'] = 0;
            }

            $records[] = $tempRecord;
        }


  

        $response = array(
            'Message' => "All collection Data Fetched successfully",
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
}else{
    $response = array(
        'Message' => "Parameter missing",
        'Responsecode' => 404
    );  
}
mysqli_close($conn);
exit(json_encode($response));
?> 