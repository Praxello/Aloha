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

    <table width="100%" border=0 width=1000 style="border-collapse:collapse;">
<tr>
<td width="15%">
<img src="img/medical.jpg" width="120" >
</td>
<td width="50%">
<p style="text-align:center; font-weight:bold; margin-bottom:0px; margin-top:4px;">S.NO.46,Vartak Pride,D.P.Road,KarveNagar,Maharashtra, Pune 411004</p>
<p > <img src="img/web.jpg" height="32px;" >www.aloha.com  <img src="img/mobile.jpg" height= 32px; style="margin-left: 40px">9087878787 <img src="img/landline.jpg" height="32px" style="margin-left: 40px">020-25449102</p>

</td>
</tr>
</table>
</div>

	<hr style="margin-top: 35px;">

	<p><h1 style="margin-left: 300px;">Receipt</h1></p>

	<p style=""><b>Receipt No : </b>Pune/19-20/008 <b style="margin-left :350px">Date:</b> fri-10 Jan 2020</p>

	<p style=""><b>Patient Name :</b> Rohan Khatu <b style="margin-left :100px">Reg No. :</b> 2  <b style="margin-left :170px">Cell No:</b>9000000000   </p>
	

  
	<p ><h3 style="margin-left: 300px;">Receipt Details</h3></p>
	<table style="width:100%">
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
<br>
<p><h3 style="margin-left: 300px; margin-top :"15px">Payment History</h3></p>
	<table style="width:80%; margin-left :40px">
  <tr>
    <th>Payment Mode</th>
   <th>Amount</th>
  </tr>
  <tr>
    <td >Cash</td>
    <td>3000.0</td>
  </tr>
 
</table>
<br>
<p style="margin-top: 35px;"><b>LDR Clinic</b></p>

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