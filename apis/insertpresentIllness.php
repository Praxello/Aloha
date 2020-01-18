<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "../connection.php";
mysqli_set_charset($conn, 'utf8');
$response = null;
$records  = null;
extract($_POST);
$dir = '../upload/patients/';
if (isset($_POST['pulse']) && isset($_POST['spo2']) && isset($_POST['bp']) && isset($_POST['temperature']) && isset($_POST['weight'])  && isset($_POST['chiefcomplaints']) && 
isset($_POST['history']) && isset($_POST['waist']) && isset($_POST['hip']) && isset($_POST['hb1c']) && isset($_POST['fbs']) && isset($_POST['ppbs']) && isset($_POST['gfr']) &&
isset($_POST['goalweight']) && isset($_POST['height']) && isset($_POST['chest']) && isset($_POST['addedSound']) && isset($_POST['wheezeRhonchi']) && isset($_POST['dyspoea']) &&
isset($_POST['conciousness']) && isset($_POST['umnreflex']) && isset($_POST['lmnreflex']) && isset($_POST['reflexes']) && isset($_POST['s1s2heard']) && isset($_POST['murmur'])
 && isset($_POST['oralMucosa']) && isset($_POST['scalp']) && isset($_POST['nodules']) && isset($_POST['eyes']) && isset($_POST['raynaud']) && isset($_POST['telangiectasia']) 
 && isset($_POST['photosensivity']) && isset($_POST['rash']) && isset($_POST['site']) && isset($_POST['type']) && isset($_POST['itching']) ) {
    

 
 
    $pulse       = isset($_POST['pulse']) ? $_POST['pulse'] : 'NULL';
    $spo2        = isset($_POST['spo2']) ? $_POST['spo2'] : 'NULL';
    $bp          = isset($_POST['bp']) ? $_POST['bp'] : 'NULL';
    $temperature = isset($_POST['temperature']) ? $_POST['temperature'] : 'NULL';
    $weight      = isset($_POST['weight']) ? $_POST['weight'] : 'NULL';
    $chiefcomplaints      = isset($_POST['chiefcomplaints']) ? $_POST['chiefcomplaints'] : 'NULL';
    $history      = isset($_POST['history']) ? $_POST['history'] : 'NULL';

    $waist      = isset($_POST['waist']) ? $_POST['waist'] : 'NULL';
    $hip      = isset($_POST['hip']) ? $_POST['hip'] : 'NULL';
    $hb1c      = isset($_POST['hb1c']) ? $_POST['hb1c'] : 'NULL';
    $fbs      = isset($_POST['fbs']) ? $_POST['fbs'] : 'NULL';
    $ppbs      = isset($_POST['ppbs']) ? $_POST['ppbs'] : 'NULL';
    $gfr      = isset($_POST['gfr']) ? $_POST['gfr'] : 'NULL';
    $height      = isset($_POST['height']) ? $_POST['height'] : 'NULL';
    // $waitHipRatio      = isset($_POST['waitHipRatio']) ? $_POST['waitHipRatio'] : 'NULL';
    $goalweight      = isset($_POST['goalweight']) ? $_POST['goalweight'] : 'NULL';
    $chest      = isset($_POST['chest']) ? $_POST['chest'] : 'NULL';
    $addedSound      = isset($_POST['addedSound']) ? $_POST['addedSound'] : 'NULL';
    $wheezeRhonchi      = isset($_POST['wheezeRhonchi']) ? $_POST['wheezeRhonchi'] : 'NULL';
    $dyspoea      = isset($_POST['dyspoea']) ? $_POST['dyspoea'] : 'NULL';

    $conciousness      = isset($_POST['conciousness']) ? $_POST['conciousness'] : 'NULL';
    $umnreflex      = isset($_POST['umnreflex']) ? $_POST['umnreflex'] : 'NULL';
    $lmnreflex      = isset($_POST['lmnreflex']) ? $_POST['lmnreflex'] : 'NULL';
    $reflexes      = isset($_POST['reflexes']) ? $_POST['reflexes'] : 'NULL';
    $s1s2heard      = isset($_POST['s1s2heard']) ? $_POST['s1s2heard'] : 'NULL';
    $murmur      = isset($_POST['murmur']) ? $_POST['murmur'] : 'NULL';
    $oralMucosa      = isset($_POST['oralMucosa']) ? $_POST['oralMucosa'] : 'NULL';
    $scalp      = isset($_POST['scalp']) ? $_POST['scalp'] : 'NULL';
    $nodules      = isset($_POST['nodules']) ? $_POST['nodules'] : 'NULL';
    $eyes      = isset($_POST['eyes']) ? $_POST['eyes'] : 'NULL';
    $raynaud      = isset($_POST['raynaud']) ? $_POST['raynaud'] : 'NULL';
    $telangiectasia      = isset($_POST['telangiectasia']) ? $_POST['telangiectasia'] : 'NULL';
    $photosensivity      = isset($_POST['photosensivity']) ? $_POST['photosensivity'] : 'NULL';
    $rash      = isset($_POST['rash']) ? $_POST['rash'] : 'NULL';
    $site      = isset($_POST['site']) ? $_POST['site'] : 'NULL';
    $type      = isset($_POST['type']) ? $_POST['type'] : 'NULL';
    $itching      = isset($_POST['itching']) ? $_POST['itching'] : 'NULL';


    $sql = "INSERT INTO patient_onassessment_master (pulse,spo2,bp,temperature,weight,chiefcomplaints,history,waist,hip,hb1c,fbs,ppbs,gfr,goalweight,height,chest,addedSound,
    wheezeRhonchi,dyspoea,conciousness,umnreflex,lmnreflex,reflexes,s1s2heard,murmur,oralMucosa,scalp,nodules,eyes,raynaud,telangiectasia,photosensivity,rash,site,type,itching) 
     VALUES ('$pulse', '$spo2','$bp','$temperature', '$weight','$chiefcomplaints','$history','$waist','$hip','$hb1c','$fbs','$ppbs','$gfr','$goalweight','$height','$chest',
     '$addedSound','$wheezeRhonchi','$dyspoea','$conciousness','$umnreflex','$lmnreflex','$reflexes','$s1s2heard','$murmur','$oralMucosa','$scalp','$nodules','$eyes','$raynaud',
     '$telangiectasia','$photosensivity','$rash','$site','$type','$itching')";
    
    $query = mysqli_query($conn, $sql);
    
    $rowsAffected = mysqli_affected_rows($conn);


    if ($rowsAffected == 1) {
        $patientId = $conn->insert_id;
        $academicQuery = mysqli_query($conn, "SELECT * FROM patient_onassessment_master where onAssesmentId = $patientId");
        if ($academicQuery != null) {
            $academicAffected = mysqli_num_rows($academicQuery);
            if ($academicAffected > 0) {
                $academicResults = mysqli_fetch_assoc($academicQuery);
                $records         = $academicResults;
            }
        }
        $response = array(
            'Message' => "Added Successfull",
            "Data" => $sql,
            'Responsecode' => 200
        );
        
    } else {
        $response = array(
            'Message' => mysqli_error($conn) . " failed",
            'Responsecode' => 500,
            "Data" => $sql
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