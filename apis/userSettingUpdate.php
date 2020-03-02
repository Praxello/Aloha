<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "../connection.php";
mysqli_set_charset($conn, 'utf8');
$response = null;
$records  = null;
extract($_POST);
$dir = '../upload/user/';
if (isset($_POST['userId']) && isset($_POST['upassword']) && isset($_POST['oldpassword'])  ) {
   
    $sql = "UPDATE user_master SET upassword='$upassword' WHERE userId='$userId' AND upassword='$oldpassword'";
  
    
    $query = mysqli_query($conn, $sql);

    $rowsAffected = mysqli_affected_rows($conn);
    if ($rowsAffected > 0) {

    if ($query!=null) {
        if( isset($_FILES["userPic"]["type"])){
            $imgname    = $_FILES["userPic"]["name"];
            $sourcePath = $_FILES['userPic']['tmp_name']; // Storing source path of the file in a variable
            $targetPath = $dir . $userId . ".jpg"; // Target path where file is to be stored
            move_uploaded_file($sourcePath, $targetPath);
            }
            
        }
      
        $academicQuery = mysqli_query($conn, "SELECT * FROM user_master where userId = '$userId'");
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
            "sql" =>$sql,
            'Responsecode' => 200
        );
    } 
    else {
        $response = array(
            'Message' => mysqli_error($conn) ."Invalid Old Password",
            'Responsecode' => 600
        );
    }

    } else {
        $response = array(
            'Message' => mysqli_error($conn) ."failed",
            'Responsecode' => 500
        );
    }


mysqli_close($conn);
print json_encode($response);
?> 


