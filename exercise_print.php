<?php
/* include autoloader */
require_once 'dompdf/autoload.inc.php';

/* reference the Dompdf namespace */
use Dompdf\Dompdf;

/* instantiate and use the dompdf class */
$dompdf = new Dompdf();
$patientId = $_GET['patientId'];
$visitDate = $_GET['visitDate'];
function doctor_details($doctorId)
{
    include 'connection.php';
    $output = '';
    $sql    = "SELECT um.username,um.mobile,um.sign FROM user_master um WHERE um.userId = $doctorId";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        global $sign;
        $sign = $row['username'];
        $output .= '<div class="col-xs-7">
        <h3><p class="font-weight-bold mb-1 "><strong>' . $row['username'] . '</strong></p></h3>
        <p class="text-muted ">' . $row['sign'] . '</p>
        <p class="text-muted ">Mobile no:' . $row['mobile'] . '  </p>
        </div>';
    }
    return $output;
}

function patients_details($patientId){
    include 'connection.php';
    $output ='';
    $sql ="SELECT pm.patientId,pm.firstName,pm.surname,pm.mobile1  from patient_master pm  where pm.patientId = $patientId ";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_array($result);
        $output.='
        <div class="row">
        <div class="col-md-12">
        <address>
            <div style="margin-left:550px">
            </div><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong >Reg No:</strong>'.$row['patientId'].'    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <strong >Name:</strong>'.$row['firstName'].' '.$row['surname'].'    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <strong >Contact No:</strong>'.$row['mobile1'].' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </address>
        </div>
    </div> ';
    }
    return $output;

}

// function exexcise_details($id){
//     include 'connection.php';
//     $output ='';
//     $sql ="SELECT em.title,em.details FROM exercise_photo_master em where id=$id";
//     $result=mysqli_query($conn,$sql);
//     if (mysqli_num_rows($result) > 0) {
//         $output .= '<div class="col-xs-12">
//         <table class="table ">
//             <thead>
//                 <tr>
//                     <th style="text-align:center" class="border-1 text-uppercase small font-weight-bold ">Photo</th>
//                     <th style="text-align:center" class="border-1 text-uppercase small font-weight-bold ">Title</th>
//                     <th style="text-align:center" class="border-1 text-uppercase small font-weight-bold ">Details</th>
                  
                  
//                 </tr>
//             </thead>
//             <tbody>';
//         while ($row = mysqli_fetch_array($result)) {
       
//             $output .= ' <tr>

//         <td style="width="100%">  <img class="img-fluid" src="upload/exercise/2.jpg" width="500% " height="600%"></td>
//         <td style="text-align:left">'.$row['title'].' </td>
//         <td style="text-align:left">'.$row['details'].' </td>
      
//     </tr>';
//         }
//         $output .= '</tbody></table></div>';
//     }
//     return $output;     

// }

function exexcise_details($patientId,$visitDate){
    include 'connection.php';
    $output ='';
    $sql ="SELECT ex.title,ex.details,ex.patientId,ex.doctorId,ex.steps FROM patient_prescribed_exercise  ex 
    INNER JOIN  exercise_photo_master ec ON ec.title = ex.title where ex.patientId = $patientId AND ex.visitDate = '$visitDate'";
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
        $output .= '<div class="col-xs-12">
        <table class="table ">
            <thead>
                <tr>
                    <th style="text-align:center" class="border-1 text-uppercase small font-weight-bold ">Photo</th>
                    <th style="text-align:center" class="border-1 text-uppercase small font-weight-bold ">Title</th>
                    <th style="text-align:center" class="border-1 text-uppercase small font-weight-bold ">Details</th>
                    <th style="text-align:center" class="border-1 text-uppercase small font-weight-bold ">Steps</th>
                  
                </tr>
            </thead>
            <tbody>';
        while ($row = mysqli_fetch_array($result)) {
       
            $output .= ' <tr>

        <td style="width="100%">  <img class="img-fluid" src="upload/exercise/2.jpg" width="500% " height="600%"></td>
        <td style="text-align:left">'.$row['title'].' </td>
        <td style="text-align:left">'.$row['details'].' </td>
        <td style="text-align:left">'.$row['steps'].' </td>
    </tr>';
        }
        $output .= '</tbody></table></div>';
    }
    return $output;     

}
$html = '
<html>

<head>
<link rel="stylesheet" href="dompdf/style.css">
    
</head>

<body>

<div class="row">
    <div class="col-md-12">
    <div class="row p-5 " id="header">
    <div class="col-xs-4 ">
    <img class="img-fluid" src="img/auth/mybrand.png" width="60% " height="70%">
    </div>
    '.doctor_details(1).'
</div>
    
        <hr>
   
       '. patients_details(1).'
    </div>
</div>
<h3><center>Exercise Details</center></h3>

<div class="row">
    <div class="col-md-12">
                           
                       '.exexcise_details(1,'2020-03-04').'

        
    </div>
</div>

</body>

</html>';
$dompdf->setPaper('A4', 'portrait');
$dompdf->loadHtml($html);

/* Render the HTML as PDF */
$dompdf->render();

/* Output the generated PDF to Browser */
// $dompdf->stream();
$dompdf->stream("dompdf_out.pdf", array("Attachment" => false));

exit(0);
?>
