<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "../connection.php";
mysqli_set_charset($conn, 'utf8');
$response = null;
$records  = null;
extract($_POST);
if (isset($_POST['disTitle']) && isset($_POST['branch']) && isset($_POST['Id'])) {

    $disTitle = mysqli_real_escape_string($conn, $disTitle); 
    $sql = "UPDATE DiscountMapping SET ClassType ='$disTitle',branchId =$branch WHERE Id=$Id";
    $query = mysqli_query($conn, $sql);
    
    $rowsAffected = mysqli_affected_rows($conn);
    if ($rowsAffected == 1) {
        $Id = $conn->insert_id;
       $query = "SELECT dm.Id,dm.ClassType,hb.branchName FROM DiscountMapping dm INNER JOIN hospital_branch_master hb ON hb.branchId = dm.branchId WHERE dm.Id= $Id";
        $academicQuery = mysqli_query($conn, $query);
        if ($academicQuery != null) {
            $academicAffected = mysqli_num_rows($academicQuery);
            if ($academicAffected > 0) {
                $academicResults = mysqli_fetch_assoc($academicQuery);
                $records         = $academicResults;
            }
        }
        $response = array(
            'Message' => "Details updated successfully",
            "Data" => $records,
            'Responsecode' => 200
        );
        
    } else {
        $response = array(
            'Message' => mysqli_error($conn) . " failed",
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