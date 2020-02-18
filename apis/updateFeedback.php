<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "../connection.php";
mysqli_set_charset($conn, 'utf8');
$response = null;
$records  = null;
extract($_POST);
if (isset($_POST['callId']) && isset($_POST['feedback']) ) {
    
    $sql = "UPDATE call_center SET feedback='$feedback' WHERE callId = $callId";
  
    
    $query = mysqli_query($conn, $sql);
    if($query!=null){
    $rowsAffected = mysqli_affected_rows($conn);
    if ($rowsAffected == 1) {
     $sql = "SELECT * FROM call_center  where callId = $callId";
        $academicQuery = mysqli_query($conn,$sql);
        if ($academicQuery != null) {
            $academicAffected = mysqli_num_rows($academicQuery);
            if ($academicAffected > 0) {
                $academicResults = mysqli_fetch_assoc($academicQuery);
                $records         = $academicResults;
            }
        
        $response = array(
            'Message' => "Update feedback Successfull",
            "Data" => $records,
            "sql" => $sql,
            'Responsecode' => 200
        );
    }else{
        $response = array(
            'Message' => mysqli_error($conn),
            "Data" => $records,
            "sql" =>  $sql,
            'Responsecode' => 200
        ); 
    }
         
    } else {
        $response = array(
            'Message' => mysqli_error($conn) . " failed",
            'Responsecode' => 500,
            "sql" => $sql
        );
    }
} 
else{
    $response = array(
        'Message' => mysqli_error($conn) . " failed",
        'Responsecode' => 600,
        "sql" => $sql
    );
}
}
else {
    $response = array(
        "Message" => "Parameters missing",
        "Responsecode" => 403
    );
}
mysqli_close($conn);
print json_encode($response);
?> 