<?php
/* include autoloader */
require_once 'dompdf/autoload.inc.php';
/* reference the Dompdf namespace */
use Dompdf\Dompdf;
/* instantiate and use the dompdf class */
$dompdf = new Dompdf();
extract($_GET);
$doctorId  = $_GET['doctorId'];
$patientId = $_GET['patientId'];
$visitDate = $_GET['visitDate'];
$sign = '';
$advice;$patientName;$nextVisitDate;
function doctor_details($doctorId){
    include 'connection.php';
    $output = '';
    $sql    = "SELECT um.username,um.mobile,um.sign FROM user_master um WHERE um.userId = $doctorId";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        global $sign;$sign = $row['username'];
$output .= '<div class="col-xs-8 ">
<h3><p class="font-weight-bold mb-1 "><strong>'.$row['username'].'</strong></p></h3>
<p class="text-muted ">'.$row['sign'].'</p>
<p class="text-muted ">Mobile no:'.$row['mobile'].'  </p>
</div>';
    }
    return $output;
}

function fetchPrescriptiondata($patientId,$visitDate,$doctorId)
{
    include 'connection.php';
    $output = '';
    $sql    = "SELECT pm.nextVisitDate,pm.advice,pt.firstName,pom.weight,pt.surname,pt.birthDate,pt.address,pt.mobile1,DATE_FORMAT(pt.firstVisitDate,'%a-%d %b %Y') firstVisitDate
    ,pt.gender,pom.pulse ,pom.bp,pom.height,YEAR(CURDATE()) - YEAR(pt.birthDate) AS age,DATE_FORMAT(pm.nextVisitDate,'%a-%d %b %Y') nextVisitDate,pm.complaint,pm.diagnosis,DATE_FORMAT(pm.visitDate,'%a-%d %b %Y') visitDate
    FROM patient_medication pm LEFT JOIN patient_master pt ON pt.patientId = pm.patientId
    LEFT JOIN patient_onassessment_master pom ON pom.patientId = pm.patientId AND pom.visitDate = pm.visitDate
    WHERE pm.patientId = $patientId AND pm.visitDate = '$visitDate' AND pm.doctorId = $doctorId";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        global $advice,$patientName,$nextVisitDate;
        $nextVisitDate = $row['nextVisitDate'];
        $patientName = $patientId.'_'.$row['firstName'].'_'.$row['surname'].'_'.$visitDate;
        $advice = $row['advice'];
        $bmi = '';
        $height = '';
        if(!empty($row['weight']) && !empty($row['height'])){
            $height = $row['height']/100;
            $bmi = floatval($row['weight'])/($height*$height);
            $bmi = number_format($bmi,2);
        }

$output .= '<div class="row">
<div class="col-xs-3">
</div>
<div class="col-xs-3">
</div>
<div class="col-xs-2">
</div>
<div class="col-xs-4">
   <p class="font-weight-bold mb-4">Date:<strong>'.$row['visitDate'].'</strong></p>
</div>
</div>
<div class="row ">
<div class="col-xs-2">
   <p class="font-weight-bold mb-4 "><strong class="text-uppercase">'.$row['firstName'].' '.$row['surname'].'</strong></p>
</div>
<div class="col-xs-1">
   <p class="font-weight-bold mb-4 ">Reg No:<span>'.$patientId.'</span></p>
</div>
<div class="col-xs-3">
   <p class="font-weight-bold mb-4 ">Cell No:<span>'.$row['mobile1'].'</span></p>
</div>
<div class="col-xs-6">
</div>
</div>
<div class="row ">
<div class="col-xs-1">
   <p class="font-weight-bold mb-4 ">Age:<span>'.$row['age'].'</span></p>
</div>
<div class="col-xs-2">
   <p class="font-weight-bold mb-4 ">Weight:<span>'.$row['weight'].'</span></p>
</div>
<div class="col-xs-1">
   <p class="font-weight-bold mb-4 ">BP:<span>'.$row['bp'].'</span></p>
</div>
<div class="col-xs-1">
<p class="font-weight-bold mb-4 ">Pulse:<span>'.$row['pulse'].'</span></p>
</div>
<div class="col-xs-1">
<p class="font-weight-bold mb-4 ">BMI:<span>'.$bmi.'</span></p>
</div>
<div class="col-xs-5">
</div>
</div>
<hr class="my-5 ">
<div class="row ">
<div class="col-xs-2">
<strong><u>Clinical Notes</u>:</strong>
</div>
<div class="col-xs-10">
<p class="font-weight-bold mb-4 ">'.$row['complaint'].'</p>
</div>
</div>
<div class="row ">
<div class="col-xs-2">
<strong><u>Clinical Diagnosis</u>:</strong>
</div>
<div class="col-xs-10">
<p class="font-weight-bold mb-4 ">'.$row['diagnosis'].'</p>
</div>
</div>';
    }
    return $output;
}
function fetchmedicinedata($patientId,$visitDate,$doctorId)
{
    include 'connection.php';
    $output = '';
    $sql    = "SELECT mm.genName,ppm.type,ppm.name,ppm.morning,ppm.evining,ppm.night,ppm.instruction,ppm.period,ppm.patientId,ppm.visitDate,ppm.doctorId 
    FROM patient_prescription_medicine ppm LEFT JOIN medicine_master mm ON mm.name = ppm.name
     WHERE ppm.patientId = $patientId AND ppm.visitDate = '$visitDate' AND ppm.doctorId = $doctorId";
    $result = mysqli_query($conn, $sql);
    $i      = 0;
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $i++;

        $output .= ' <tr>
        <td><small>' . $row['type'] . '<small><strong>-' . $row['name'] . '</strong><br>'.$row['genName'].'</td>
        <td style="width:5%;text-align:center">' . $row['morning'] . '</td>
        <td style="width:5%;text-align:center">' . $row['evining'] . '</td>
        <td style="width:5%;text-align:center">' . $row['night'] . '</td>
        <td style="width:5%;text-align:center">' . $row['period'] . '</td>
        <td style="width:40%;text-align:center">' . $row['instruction'] . '</td>
    </tr>';
        }
    }
    return $output;

}

$html = '<link rel="stylesheet" href="dompdf/style.css">
<div class="container">
    <div class=" row ">
        <div class="col-12 ">
                    <div class="row p-5 ">
                        <div class="col-xs-4 ">
                        <img class="img-fluid " src="medical.jpeg" height="30% " width="30% ">
                        </div>
                       '.doctor_details($doctorId).'
                    </div>

                    <hr class="my-5 ">

                '.fetchPrescriptiondata($patientId,$visitDate,$doctorId).'
                    <div class="row p-5 ">
                        <div class="col-xs-12 ">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase small font-weight-bold ">Medicine</th>
                                        <th style="width:10%;text-align:center" class="border-1 text-uppercase small font-weight-bold ">Morning</th>
                                        <th style="width:10%;text-align:center" class="border-1 text-uppercase small font-weight-bold ">Afternoon</th>
                                        <th style="width:10%;text-align:center" class="border-1 text-uppercase small font-weight-bold ">Night</th>
                                        <th style="width:5%;text-align:center" class="border-1 text-uppercase small font-weight-bold ">Days</th>
                                        <th class="text-uppercase small font-weight-bold" style="text-align:center;">Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   '.fetchmedicinedata($patientId,$visitDate,$doctorId).'
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row ">
                    <div class="col-xs-2 ">
                  <strong>Advice:</strong>
                  </div>
                  <div class="col-xs-8 ">
                    <p class="font-weight-bold mb-4 ">'.$advice.'</p>
                    </div>
                 </div>
                 <div class="row ">
                    <div class="col-xs-2 ">
                  <strong>Next visit date:</strong>
                  </div>
                  <div class="col-xs-8 ">
                    <p class="font-weight-bold mb-4 ">'.$nextVisitDate.'/ as necessary [Please confirm appointment 10 days prior]</p>
                    </div>
                 </div>
        </div>
    </div>

    <footer style="text-align:right;position:fixed;right:0;bottom:0; "><strong>'.$sign.'</strong></footer>
</div>';

$dompdf->loadHtml($html);

/* Render the HTML as PDF */
$dompdf->render();
/* Output the generated PDF to Browser */

$dompdf->stream($patientName, array("Attachment" => false));
?>