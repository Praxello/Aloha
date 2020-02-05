<?php
/* include autoloader */
require_once 'dompdf/autoload.inc.php';
/* reference the Dompdf namespace */
use Dompdf\Dompdf;

/* instantiate and use the dompdf class */
$dompdf = new Dompdf();
function patientDetails()
{
  $output  = '';
    include 'connection.php';
    $consentId = 1;

 $sql   = "SELECT pm.firstName,pm.surname,cfm.patientId 
FROM consent_form_master cfm LEFT JOIN patient_master pm ON pm.patientId = cfm.patientId
WHERE cfm.consentId =  $consentId";
    $jobQuery  = mysqli_query($conn, $sql);
    if ($jobQuery != null) {
        $academicAffected = mysqli_num_rows($jobQuery);
        if ($academicAffected > 0) {
            $academicResults = mysqli_fetch_assoc($jobQuery);
            $patientName = $academicResults['firstName'].' '.$academicResults['surname'];
            $output.='<input type="text" style="margin-top:20px">  am a patient of '.$pname1;
            
            }
    }
   return output;
}


$html = '
<html>
<div class="container-fluid">                                    
<div class="row">
    <div class="col-md-12">
        <div class="card">
            
            <div class="card-body form-group">
               
                <h3><center><b>CONSENT FORM</b></center></h3>
            
               
                   <p style="font-size: 22px; margin-left:10px">I 
                     '.patientDetails().' <input type="text" style="margin-top:15px;margin-left:430px"> </p>
                  
                
                   <p  style="font-size: 22px; margin-left:10px"> I have appraoached Lokmanya Hospitals for the treament of the same.</p>

                <p style="font-size: 22px; margin-left:10px">I am aware that my complaints is lifestyle based / degenerative in nature that has accumulated over time due to a wrong lifestyle / posture / age factors, etc.
                    The doctor / therapist has examined me and expained about problems and treatment options.</p>
                    <p style="font-size: 22px; margin-left:10px"> I am aware that non-surgical and / or complementory and alternative methods require its own course of times as they offer progressive wellness and relief. 
                I have been explained clearly and properly by the doctors / staff of the therapeutic centre, about the treatment options, indications ad contra-indications. </p>
                <p style="font-size: 22px; margin-left:10px"> I shall abstain from physical and mental stress.</p>
                  <p style="font-size: 22px; margin-left:10px">I was explained and am aware from counseling that non-invasive, alternative and holistic treatment aproaches  
                offered has a success rae of 80-90%. I am  aware and agree that there are chances that  i may not get benefit from the therapy due to any underlying anatomical / 
                  physiological / lifestyle / medical conditions.</p>
         
                  <p style="font-size: 22px; margin-left:10px"> I agree with good conscience to undergo the therapy / program offered. I will not hold responsible doctor / 
                    therapist / technisian / other staff for the treatment results. I assure completed co-operation to the doctor / therapist during the course of the treatment. 
                     Along with following the prescibed treatment / excercise, leading to an improved proper lifestyle.</p></span><p>
            
            <p style="font-size: 22px; margin-left:10px">I also agree to use my treatment reports for R & D Study purposes for the betterment and humankind.</p>
            <p style="font-size: 22px; margin-left:10px">Signature of Patient:<input type="text" style="margin-top:20px"></p>    
                  
                <h3><center><b>PATIENT ATTENDANT CONSENT</b></center></h3>
   
                    <p style="font-size: 22px; margin-left:10px">I  <input type="text" style="margin-top:20px" > am a relative / friend to the patient 
                    <input type="text">We have been explained about the therapy and agree for <input type="text" style="margin-top:50px">
                    to undergo 3D Spinal Decompression Mobilization & Correction therapy / program. We will not hold any doctor / therapist / staff of the hospital / medicle centre regarding the treatment regarding the treatment results.</p>
                 
                 </p>
                 <p style="font-size: 22px; margin-left:10px"> The Doctor at  <input type="text" style="margin-top:20px" >centre have Explained myself and My Relatives in detail the Nature of the said Treatment and is                     
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; & myself ready to undergo the said Rx.           
             </p>
            
                 <p style="font-size: 22px; margin-left:10px">Relation to Patient:<input type="text" style="margin-top:20px"></p>
               
                 <p style="font-size: 22px; margin-left:10px">Signature of Attendant:<input type="text" style="margin-top:20px"></p>    
                  
                 
                    </div>
                </div>

        </div>
    </div>

        </div>
</html>';

$dompdf->setPaper('A4', 'portrait');

$dompdf->loadHtml($html);
/* Render the HTML as PDF */
$dompdf->render();

/* Output the generated PDF to Browser */
// $dompdf->stream();
$dompdf->stream("concent-form.pdf", array(
    "Attachment" => false
));

exit(0);
?>