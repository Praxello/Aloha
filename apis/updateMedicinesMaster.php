<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "../connection.php";
mysqli_set_charset($conn, 'utf8');
$response = null;
$records  = null;
extract($_POST);
if (isset($_POST['medicineId']) && isset($_POST['name']) && isset($_POST['genName']) && isset($_POST['morning']) && isset($_POST['noon']) && isset($_POST['night']) && isset($_POST['days']) 
&& isset($_POST['instruction']) && isset($_POST['type'])) {
    
    // $instruction = mysqli_escape_string($conn,$instruction);
    // $hindi = mysqli_escape_string($conn,$hindi);
    // $marathi = mysqli_escape_string($conn,$marathi);

    $sql = "UPDATE medicine_master SET name='$name',genName='$genName',instruction='$instruction',morning='$morning',noon='$noon',night='$night',days='$days',type='$type' WHERE medicineId = $medicineId";
  
    
    $query = mysqli_query($conn, $sql);
    if($query!=null){
    $rowsAffected = mysqli_affected_rows($conn);
    if ($rowsAffected == 1) {
     $sql = "SELECT * FROM medicine_master  where medicineId = $medicineId";
        $academicQuery = mysqli_query($conn,$sql);
        if ($academicQuery != null) {
            $academicAffected = mysqli_num_rows($academicQuery);
            if ($academicAffected > 0) {
                $academicResults = mysqli_fetch_assoc($academicQuery);
                $records         = $academicResults;
            }
        
        $response = array(
            'Message' => "Update Medicines Successfull",
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