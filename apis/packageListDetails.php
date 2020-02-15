<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "../connection.php";
mysqli_set_charset($conn, 'utf8');
$response = null;
$records  = null;
$result = null;
$sql = "SELECT cost,title,details,packageId FROM package_master WHERE isActive = 1 ORDER BY packageId DESC";
$jobQuery = mysqli_query($conn, $sql);
if ($jobQuery != null) {
    $academicAffected = mysqli_num_rows($jobQuery);
    if ($academicAffected > 0) {
        while ($academicResults = mysqli_fetch_assoc($jobQuery)) {
            $temp = null;
            $packageId = $academicResults['packageId'];
            $sql = "SELECT pdm.quota,dtm.testName,dtm.fees FROM package_details_master pdm 
            LEFT JOIN diagnostic_tests_master dtm ON dtm.testId = pdm.testId WHERE pdm.packageId = $packageId";
            $jobQuery_1 = mysqli_query($conn,$sql);
            $academicAffected_1=mysqli_num_rows($jobQuery_1);
            if($academicAffected_1>0)
            {
                while($academicResults_1 = mysqli_fetch_assoc($jobQuery_1)){
                    $temp[] = $academicResults_1;
                }
                $result = array('packagedetails'=>$temp);
            }
            $records[] = array_merge($academicResults,$result);
        }
        
        $response = array(
            'Message' => "All Package data Fetched successfully",
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
        'Message' => "Please Logout and login again",
        "Data" => $records,
        'Responsecode' => 300
    ); 
}
mysqli_close($conn);
exit(json_encode($response));
?> 