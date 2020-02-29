<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "../connection.php";
mysqli_set_charset($conn, 'utf8');
$response = null;
$records  = null;
extract($_POST);
if(isset($_POST['userId']) && isset($_POST['fromDate']) && isset($_POST['uptoDate'])){
$sql = "SELECT opm.paymentId,opm.recieptId,opm.originalAmt,opm.total,opm.discount,opm.received,opm.pending,DATE_FORMAT(opm.visitDate,'%d %b %Y') visitDate,opm.isPackage,opm.packageId,opm.isDeleted,
pm.firstName,pm.surname,um.username,hp.branchName,DATE_FORMAT(opm.createdAt,'%d %b %Y') createdAt,COALESCE(dm.discountType,'-') discountType
FROM opd_patient_payment_master opm LEFT JOIN patient_master pm ON pm.patientId = opm.patientId
LEFT JOIN user_master um ON um.userId = opm.doctorId
LEFT JOIN hospital_branch_master hp ON hp.branchId = opm.branchId
LEFT JOIN DiscountMaster dm ON dm.discountId = opm.discountType
WHERE opm.createdBy = $userId AND DATE(opm.createdAt) BETWEEN '$fromDate' AND '$uptoDate'";
if(isset($_POST['branchId']) && !empty($_POST['branchId']) && $_POST['branchId'] != 0){
    $sql .= " AND opm.branchId = $branchId";
}
$jobQuery = mysqli_query($conn, $sql);
if ($jobQuery != null) {
    $academicAffected = mysqli_num_rows($jobQuery);
    if ($academicAffected > 0) {
        while ($academicResults = mysqli_fetch_assoc($jobQuery)) {
            $records[] = $academicResults;
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