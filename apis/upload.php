<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "../connection.php";
mysqli_set_charset($conn, 'utf8');
$response   = null;
$records    = null;
$target_dir = "../upload/patientDocs/"; // Upload directory
$ds         = DIRECTORY_SEPARATOR;
$request    = 1;
extract($_POST);
if (isset($_POST['request'])) {
    $request = $_POST['request'];
}
if (isset($_POST['patientId'])) {
    // Upload file
    if ($request == 1) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir . $patientId.'.jpg')) {
                $response = array(
                    'Message' => "Image added Successfully",
                    "Data" => $records,
                    'Responsecode' => 200
                );
            } else {
                $response = array(
                    'Message' => "File has error",
                    "Data" => $records,
                    'Responsecode' => 200
                );
            }
    }
    
    // Remove file
    if ($request == 2) {
        $file         = $_POST['name'];
        $filename     = $target_dir . $_POST['name'];
        $sql          = "DELETE FROM  ProductImages WHERE productId=$productId AND imageId = '$file'";
        $query        = mysqli_query($conn, $sql);
        $rowsAffected = mysqli_affected_rows($conn);
        if ($rowsAffected == 1) {
            $response = array(
                'Message' => "Removed success",
                'Responsecode' => 200
            );
        }
        unlink($filename);
    }
} else {
    $response = array(
        'Message' => "Parameter Missing",
        "Data" => $records,
        'Responsecode' => 200
    );
}
mysqli_close($conn);
exit(json_encode($response));
?>