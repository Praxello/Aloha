<?php
/* include autoloader */
require_once 'dompdf/autoload.inc.php';

/* reference the Dompdf namespace */
use Dompdf\Dompdf;

/* instantiate and use the dompdf class */
$dompdf = new Dompdf();

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
    $sql ="SELECT pom.visitDate,pom.patientId,pom.pulse,pom.bp,pom.weight,pom.height,pm.firstName,pm.surname,pm.mobile1 FROM patient_onassessment_master pom LEFT JOIN patient_master pm ON pm.patientId=pom.patientId where pm.patientId = $patientId ";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_array($result);
        $output.='
        <div class="row">
        <div class="col-md-12">
        <address>
            <div style="margin-left:550px">
            <strong >Date:</strong>'.$row['visitDate'].'   
            </div><br>
            <strong >Reg No:</strong>'.$row['patientId'].'    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <strong >Name:</strong>'.$row['firstName'].' '.$row['surname'].'    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <strong >Contact No:</strong>'.$row['mobile1'].' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </address>
        </div>
    </div>
  
        ';
    }
    return $output;

}

function exexcise_details($id){
    include 'connection.php';
    $output ='';
    $sql ="SELECT em.title,em.details FROM exercise_photo_master em where id=$id";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_array($result);
        $output.='
        <div class="table-responsive">
        <table class="table table-condensed">
            <thead>
                <tr>
                  
                    <td><strong>Photo</strong></td>
                    <td><strong>Title</strong></td>
                    <td><strong>Details</strong></td>
                    <td><strong>Steps</strong></td>
                </tr>
            </thead>
            <tbody>
   
        <tr>
                                <td class="text-left"></td>
                                <td class="text-center">'.$row['title'].'</td>
                                <td class="text-right">'.$row['details'].'</td>
                                <td class="text-right"></td>
                            </tr>
                            </tbody>
                            </table>'
                            
                            ;
    }
    return $output;     

}
$html = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
<link rel="stylesheet" href="dompdf/style.css">
    
</head>

<body>
<style>
.invoice-title h2, .invoice-title h3 {
display: inline-block;
}

.table > tbody > tr > .no-line {
border-top: none;
}

.table > thead > tr > .no-line {
border-bottom: none;
}

.table > tbody > tr > .thick-line {
border-top: 2px solid;
}
</style>
<div class="container">
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

<div class="row">
    <div class="col-md-12">
      
          
        
             
                      
                           
                       '.exexcise_details(1).'
                           
                          
                   
                </div>
            
        
    </div>
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
