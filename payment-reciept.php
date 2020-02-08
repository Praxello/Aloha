<?php
/* include autoloader */
require_once 'dompdf/autoload.inc.php';
/* reference the Dompdf namespace */
use Dompdf\Dompdf;

/* instantiate and use the dompdf class */
$dompdf = new Dompdf();
extract($_GET);
$paymentId = isset($_GET['paymentId']) ? $_GET['paymentId']:1;
function patientDetails($paymentId)
{
  $output  = '';
    include 'connection.php';
    $sql       = "SELECT opm.recieptId,pm.firstName,pm.surname,pm.mobile1,opm.patientId,DATE_FORMAT(opm.visitDate,'%d %b %Y') visitDate  
FROM opd_patient_payment_master opm LEFT JOIN patient_master pm ON pm.patientId = opm.patientId
WHERE opm.paymentId =  $paymentId";
    $jobQuery  = mysqli_query($conn, $sql);
    if ($jobQuery != null) {
        $academicAffected = mysqli_num_rows($jobQuery);
        if ($academicAffected > 0) {
            $academicResults = mysqli_fetch_assoc($jobQuery);
            $patientName = $academicResults['firstName'].' '.$academicResults['surname'];
            $patientId = $academicResults['patientId'];
            $tDate = $academicResults['visitDate'];
            $mobile = $academicResults['mobile1'];
            $output .= '<div class="row pb-5 p-5 ">
                        <div class="col-xs-4">
                            <p class="mb-1 "><span class="text-muted ">Reciept number: </span>'.$academicResults['recieptId'].'</p>
                        </div>
                        <div class="col-xs-4">
                            <p class="mb-1 "><span class="text-muted ">Date: </span> '.$tDate.'</p>
                        </div>
                        <div class="col-xs-4">
                    </div>
                    </div>
                    <div class="row pb-5 p-5 ">
                        <div class="col-xs-4">
                            <p class="mb-1 "><span class="text-muted ">Patient Name: </span> '.$patientName.'</p>
                        </div>
                        <div class="col-xs-4">
                            <p class="mb-1 "><span class="text-muted ">Cell: </span> '.$mobile.'</p>
                        </div>
                        <div class="col-xs-4">
                            <p class="mb-1 "><span class="text-muted ">Reg no: </span> '.$patientId.'</p>
                        </div>
                    </div>';
        }
    }
    return $output;
}

function billDetails($paymentId)
{
    include 'connection.php';
    $output    = '';
    $sql       = "SELECT opm.patientId,opm.total,opm.pending,bd.feesType,bd.fees,opm.discount,opm.originalAmt
    FROM opd_patient_payment_master opm LEFT JOIN  Bill_Details bd on bd.paymentId = opm.paymentId 
    WHERE opm.paymentId =  $paymentId";
    $jobQuery  = mysqli_query($conn, $sql);

    if ($jobQuery != null) {
        $total =0;$discount=0;$originalAmt=0;$pending=0;
        $academicAffected = mysqli_num_rows($jobQuery);
        if ($academicAffected > 0) {
$output .= '<div class="row p-5">
<div class="col-xs-12 ">
    <table class="table table-bordered">
        <tbody>';
        While($academicResults = mysqli_fetch_assoc($jobQuery)){

            $total= number_format($academicResults['total'],2);
            $originalAmt = $academicResults['originalAmt'];
            $discount = $academicResults['discount'];
            $pending = $academicResults['pending'];
            $output .= '
            <tr>
                  <td >'.$academicResults['feesType'].'</td>
                  <td>'.number_format($academicResults['fees'],2).'</td>
            </tr>';
                }
            $output .= '<tr>
            <td class="thick-line "><strong>Total amount</strong></td>
            <td class="thick-line "><strong>' .number_format($originalAmt,2).'</strong></td>
        </tr>';
        if($discount>0){
            $output .= '<tr>
            <td class="thick-line "><strong>Total Discount</strong></td>
            <td class="thick-line "><strong>' .number_format($discount,2).'</strong></td>
        </tr>';
        }
        $output .= '<tr>
            <td class="thick-line "><strong>Payble amount</strong></td>
            <td class="thick-line "><strong>' .$total.'</strong></td>
        </tr>';
        if($pending>0){
            $output .= '<tr>
            <td class="thick-line "><strong>Pending amount</strong></td>
            <td class="thick-line "><strong>' .number_format($pending,2).'</strong></td>
        </tr>';
        }
        $output .='
        </tbody>
    </table>
</div>
</div>';
        }
    }
    return $output;
}
function paymentHistory($paymentId)
{
    include 'connection.php';
    $output    = '';
    $sql       = "SELECT opm.amount,opm.paymentMode,DATE_FORMAT(opm.paymentDate,'%d %b %Y') paymentDate,COALESCE(opm.paymentModeDetail,'') paymentModeDetail
    FROM opd_payment_transaction_master opm WHERE opm.paymentId = $paymentId";
    $jobQuery  = mysqli_query($conn, $sql);
    if ($jobQuery != null) {
        $academicAffected = mysqli_num_rows($jobQuery);
        if ($academicAffected > 0) {
$output .= ' <center>
<h3>Payment History</h3>
</center>
<div class="row">

<div class="col-xs-12">
    <table class="table table-bordered ">
        <thead>
            <tr>
                <th class="border-0 text-uppercase small font-weight-bold ">Payment Mode</th>
                <th class="border-0 text-uppercase small font-weight-bold ">Amount</th>
                <th class="border-0 text-uppercase small font-weight-bold ">Date</th>
            </tr>
        </thead>
        <tbody>';
        while($academicResults = mysqli_fetch_assoc($jobQuery)){
            $output .='<tr>
            <td >'.$academicResults['paymentMode'].' <small>'.$academicResults['paymentModeDetail'].'</small></td>
            <td>'.number_format($academicResults['amount'],2).'</td>
            <td>'.$academicResults['paymentDate'].'</td>
            
          </tr>';
        }
          $output .='</tbody>
    </table>
</div>

</div>';
        }
    }
    return $output;
}
$html = '<link rel="stylesheet" href="dompdf/style.css">
<head>
    <title>Payment Reciept</title>
    <link rel="icon" href="../img/medical.jpg" type="image/x-icon" />
</head>
<div class="container">
    <div class=" row ">
        <div class="col-1 ">
            <div class="card ">
                <div class="card-body p-0 ">
                    <div class="row p-5 ">
                        <div class="col-xs-4 ">
                            <img class="img-fluid " src="img/medical.jpg" width="20% " height="20% ">
                        </div>

                        <div class="col-xs-6 ">
                            <strong><p class="font-weight-bold mb-1 ">S.NO.46,Vartak Pride,D.P.Road,KarveNagar,Maharashtra, Pune 411004</p></strong>
                        </div>
                    </div>
                   
                    <hr class="my-5">
                    <center>
                    <h3>Reciept</h3>
                </center>
                    '.patientDetails($paymentId).'
                 
                    '.billDetails($paymentId).'
                   '.paymentHistory($paymentId).'
                </div>
            </div>
        </div>
    </div>
</div>';

$dompdf->setPaper('A4', 'portrait');

$dompdf->loadHtml($html);
/* Render the HTML as PDF */
$dompdf->render();

/* Output the generated PDF to Browser */
// $dompdf->stream();
$dompdf->stream("payment.pdf", array(
    "Attachment" => false
));

exit(0);
?> 