<?php
/* include autoloader */
require_once 'dompdf/autoload.inc.php';
/* reference the Dompdf namespace */
use Dompdf\Dompdf;

/* instantiate and use the dompdf class */
$dompdf = new Dompdf();

$html = '<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	table, th, td {
  border: 1px solid black;
  border-collapse: collapse;

}
th, td {
  padding: 5px;
  text-align: left;    
}
</style>
<body>
	<div style="">
      <img src="img/medical.jpg" class="rounded-circle" width="80" />

</div>
	
	<div style="margin-top: -100px;margin-left: 94px;">
		<p><b>S.NO.46,Vartak Pride,D.P.Road,KarveNagar,Pune 411004</b></p>
	</div>
	<div style="margin-left: 94px;">
		<img src="img/web.jpg" height="32px;"><p style="margin-left: 33px;margin-top: -26px;">www.aloha.com</p>
	</div>

	<div style="margin-left: 405px; margin-top: -37px">
		<img src="img/mobile.jpg" height= 32px;><p style="margin-left: 27px;margin-top: -30px;">9087878787</p>
	</div>

	<div style="margin-left: 530px; margin-top: -37px">
		<img src="img/landline.jpg" height="32px" style="margin-top: -5px;"><p style="margin-left: 38px;margin-top: -32px;">020-25449102</p>
	</div>
	<hr style="margin-top: 35px;">

	<p><h1 style="margin-left: 358px;">Receipt</h1></p>

	<p style=""><b>Receipt No : </b>Pune/19-20/008</p>
	<p style="margin-top: -33px;margin-left: 541px;"><b>Date:</b> fri-10 Jan 2020</p>
	<p style=""><b>Patient Name :</b> Rohan Khatu</p>
	 <p style="margin-top: -33px;margin-left: 369px;"><b>Reg No. :</b> 2</p>
	 <p style="margin-top: -35px;margin-left: 492px;"><b>Cell No:</b>9000000000</p>
	<hr>
	<p ><h3 style="margin-left: 340px;">Receipt Details</h3></p>
	<table style="width:50%">
  <tr>
    <th style="font-weight: normal;">CARDIOLOGIST</th>
    <td>1500.0</td>
  </tr>
  <tr>
    <th style="font-weight: normal;">2DECHO</th>
    <td>1500.0</td>
  </tr>
   <tr>
    <th>Payable Amount</th>
    <td>3000.0.0</td>
  </tr>
</table>

<p><h3 style="margin-left: 340px;">Payment History</h3></p>
	<table style="width:30%">
  <tr>
    <th>Payment Mode</th>
   <th>Amount</th>
  </tr>
  <tr>
    <td >Cash</td>
    <td>3000.0</td>
  </tr>
 
</table>

<p style="margin-left: 120px;margin-top: 35px;"><b>LDR Clinic</b></p>

</body>
</html>';

$dompdf->setPaper('A4', 'portrait');

$dompdf->loadHtml($html);
/* Render the HTML as PDF */
$dompdf->render();

/* Output the generated PDF to Browser */
// $dompdf->stream();
$dompdf->stream("dompdf_out.pdf", array(
    "Attachment" => false
));

exit(0);
?>