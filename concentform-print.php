<?php
require_once __DIR__ . '/mpdf/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/mpdf/custom/temp/dir/path']);
$stylesheet = file_get_contents('mpdf/style.css');

extract($_POST);

$visitDate =$_POST['cvisitDate'];
$patientId=  $_POST['cpatientId'];

function fetchConsentData($patientId,$visitDate)
{
    include 'connection.php';
    $output = '';
    $sql    = "SELECT * FROM consent_form_master cfm 
     WHERE cfm.u_patientId = $patientId AND cfm.visitDate = '$visitDate'";

$jobQuery = mysqli_query($conn, $sql);
    if ($jobQuery != null) {
        $academicAffected = mysqli_num_rows($jobQuery);
        if ($academicAffected > 0) {
            $academicResults = mysqli_fetch_assoc($jobQuery);
            $deseaseNew = $academicResults['deseaseNew'];
            $sinceDays = $academicResults['sinceDays'];
            $relativeName = $academicResults['relativeName'];
            $medicalTreatment = $academicResults['medicalTreatment'];
            $treatmentName = $academicResults['treatmentName'];
            $hospitalCenterName = $academicResults['hospitalCenterName'];
            $output.='  <p style="font-size: 16px; margin-left:10px">I <b><u>'.$academicResults['patientName'].'
                    </u></b> am a patient of <b> <u>'.$deseaseNew.'</u></b>
                     since <b><u>'.$sinceDays.'</u></b> .</p>';
                    
             $output.='  <p  style="font-size: 16px; margin-left:10px"> I have appraoached 360 Spinal Wellness  and Rehabilitation for the treament of the same.</p>';  
             $output.=' <p style="font-size: 16px; margin-left:10px">I am aware that my complaints is lifestyle based / degenerative in nature that has accumulated over time due to a wrong lifestyle / posture / age factors, etc.
             The doctor / therapist has examined me and expained about problems and treatment options.</p>';
             $output.=' <p style="font-size: 16px; margin-left:10px"> I am aware that non-surgical and / or complementory and alternative methods require its own course of times as they offer progressive wellness and relief. 
             I have been explained clearly and properly by the doctors / staff of the therapeutic centre, about the treatment options, indications ad contra-indications. </p>
             <p style="font-size: 16px; margin-left:10px"> I shall abstain from physical and mental stress.</p>';
             $output.=' <p style="font-size: 16px; margin-left:10px">I was explained and am aware from counseling that non-invasive, alternative and holistic treatment aproaches  
             offered has a success rae of 80-90%. I am  aware and agree that there are chances that  i may not get benefit from the therapy due to any underlying anatomical / 
               physiological / lifestyle / medical conditions.</p>';
               $output.='<p style="font-size: 16px; margin-left:10px"> I agree with good conscience to undergo the therapy / program offered. I will not hold responsible doctor / 
               therapist / technisian / other staff for the treatment results. I assure completed co-operation to the doctor / therapist during the course of the treatment. 
                Along with following the prescibed treatment / excercise, leading to an improved proper lifestyle.</p></span><p>';
                $output.='<p style="font-size: 16px; margin-left:10px">I also agree to use my treatment reports for R & D Study purposes for the betterment and humankind.</p>';
                $output.='<p style="font-size: 16px; margin-left:10px">Signature of Patient:<input type="text" style="margin-top:20px"></p> ';
                $output.=' <h3 style="margin-left:150px"><center><b>PATIENT ATTENDANT CONSENT</b></center></h3>';
                $output.= '<p style="font-size: 16px; margin-left:10px">I  <b><u>'.$relativeName.'</u></b>  am a relative / friend to the patient <b><u>'.$academicResults['patientName'].'</u>.</b>';
                $output.=' We have been explained about the therapy and we agree for <b><u>'.$medicalTreatment.'</u></b>';
                $output.=' to undergo <b><u>'.$treatmentName.'</u></b>. We will not hold any doctor / therapist / staff of the hospital / medicle centre regarding the treatment regarding the treatment results.</p>
                 
                </p>';
                $output.='<p style="font-size: 16px; margin-left:10px"> The Doctor at  <b><u>'.$hospitalCenterName.'</u></b> centre have Explained myself and My Relatives in detail the Nature of the said Treatment and is  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; & myself ready to undergo the said Rx </p>';
                $output.='<p style="font-size: 16px; margin-left:10px">Relation to Patient:<input type="text" style="margin-top:16px"></p>';
                $output.='<p style="font-size: 16px; margin-left:10px">Signature of Attendant:<input type="text" style="margin-top:16px"></p>';
            }
    }
    return $output;
}
$html = '
<html>
<link rel="stylesheet" href="mpdf/style.css">
<div class="container-fluid">                                    
<div class="row">
    <div class="col-md-12">
        <div class="card">
            
            <div class="card-body form-group">
               
                <h3 style="margin-left:200px"><center><b>CONSENT FORM</b></center></h3>
            
                     '.fetchConsentData($patientId,$visitDate).' 
                  
                    </div>
                </div>

        </div>
    </div>

        </div>
</html>';

// $mpdf = new mPDF('utf-8', 'A4-C');
$mpdf->WriteHTML($stylesheet, 1);
$mpdf->WriteHTML($html);

//call watermark content aand image
$mpdf->SetWatermarkText('   ');
$mpdf->showWatermarkText = true;
$mpdf->watermarkTextAlpha = 0.1;
$mpdf->Output("phpflow.pdf", 'F');

$mpdf->Output();

exit;
?>