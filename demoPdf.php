<?php
/* include autoloader */
require_once 'dompdf/autoload.inc.php';
/* reference the Dompdf namespace */
use Dompdf\Dompdf;

/* instantiate and use the dompdf class */
$dompdf = new Dompdf();



function fetchmedicinedata()
{
    include 'connection.php';
    $output = '';
    $sql    = "SELECT * FROM patient_prescription_medicine ppm WHERE ppm.patientId = 1 AND ppm.visitDate = '2020-01-03'";
    $result = mysqli_query($conn, $sql);
    $i      = 0;
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $i++;
            $output .= '<tr>
            <td style="width:3%;">' . $i . '</td>
            <td><strong>' . $row['name'] . '</strong><br/>' . $row['type'] . '</td>
            <td style="width:5%;">' . $row['morning'] . '</td>
            <td style="width:5%;">' . $row['evining'] . '</td>
            <td style="width:5%;">' . $row['night'] . '</td>
        </tr>';
        }
    }
    return $output;
}
function fetchPrescriptiondata()
{
    include 'connection.php';
    $output = '';
    $sql    = "SELECT pm.nextVisitDate,pm.advice,pt.firstName,pt.surname,pt.birthDate,pt.address,pt.mobile1,pt.gender,YEAR(CURDATE()) - YEAR(pt.birthDate) AS age
        FROM patient_medication pm INNER JOIN patient_master pt ON pt.patientId = pm.patientId WHERE pm.patientId = 1 AND pm.visitDate = '2020-01-03'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        
        $output .= '<tr>
                            <td style="width:120mm;font-size:15px;font-family: SourceSansPro;">
                                    Mr/Ms:<strong>' . ucfirst($row['firstName']) . ' ' . ucfirst($row['surname']) . '
                                    </strong><br />
                                    Contact:<label>' . $row['mobile1'] . '</label><br />
                                    Address:<label>' . $row['address'] . '</label><br />
                            </td>
                                <td style="font-size:13px;font-family: SourceSansPro;">
                                Sex: ' . $row['gender'] . '<br/>
                                Age: ' . $row['age'] . '<br/>
                                Next Visit Date: ' . $row['nextVisitDate'] . '<br/>
                                </td>

                    </tr>';
    }
    return $output;
}



$html = '<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <style>
            *
            {

            font-size: 12px;
            font-family: SourceSansPro;
                      color: #555555;
            }
            body
            {
                    width:100%;
            font-size: 14px;
            font-family: SourceSansPro;
            color: #555555;
                    margin:0;
                    padding:0;
            }

            p
            {
                    margin:0;
                    padding:0;
            }

            #wrapper
            {
                    width:180mm;
                    margin:0 3mm;
            }

            .page
            {
                    height:297mm;
                    width:210mm;
                    page-break-after:always;
            }

            table
            {


                    border-spacing:0;
                    border-collapse: collapse;

            }

            table td
            {

                    padding: 1mm;
            }

            table.heading
            {
                    height:20mm;
            }

            h1.heading
            {
                    font-size:16pt;
                    color:#000;
                    font-weight:normal;
            }

            h2.heading
            {
                    font-size:9pt;
                    color:#000;
                    font-weight:normal;
            }
        table td h3{
          color: #000000;
          font-size: 1.2em;
          font-weight: normal;
          margin: 0 0 0.2em 0;
        }
            hr
            {
                    color:#ccc;
                    background:#ccc;
            }

            #invoice_body
            {
                    height: 149mm;
            }

            #invoice_body , #invoice_total
            {
                    width:100%;
            }
            #invoice_body table , #invoice_total table
            {
                    width:100%;
                    border-top: 1px solid #ccc; */

                    border-spacing:0;
                    border-collapse: collapse;

            }

            #invoice_body table td , #invoice_total table td
            {
                    text-align:center;
                    font-size:9pt;

            }

            #invoice_body table td.mono  , #invoice_total table td.mono
            {
                    font-family:monospace;
                    text-align:right;
                    padding-right:3mm;
                    font-size:10pt;
            }

            #footer
            {
                    width:180mm;
                    margin:0 15mm;
                    padding-bottom:3mm;
            }
            #footer table
            {
                    width:100%;
                    border-left: 1px solid #ccc;
                    border-top: 1px solid #ccc;

                    background:#eee;

                    border-spacing:0;
                    border-collapse: collapse;
            }
            #footer table td
            {
                    width:25%;
                    text-align:center;
                    font-size:9pt;
                    border-right: 1px solid #ccc;
                    border-bottom: 1px solid #ccc;
            }
        #logo {
          float: left;
          margin-top: 8px;
        }

        #logo img {
          height: 40px;
        }

    </style>
    </head>
    <div id="wrapper">
            <table class="heading" style="width:100%;">
                    <tr>
                            <td style="width:35mm;">
                <img src="medical.jpeg" width="100px" height="130px"/>
                            </td>
                <td style="">
                                <h1 class="heading"><strong>
                          <div style="color: #0087C3;font-size: 22px;font-family: SourceSansPro;text-align:center;">Aloha</div></strong></h1>
                                <h2 class="heading">
                                      <div style="color: #555555;font-family: Arial, sans-serif;font-size: 14px;font-family: SourceSansPro;text-align:center;">
                                        403/2 Welworth Regency Narveer Tanaji Wadi<br/>
                                        Mobile no. 8483888585
                                        </div>
                                        <div style="font-size: 14px;font-family: SourceSansPro;color: #0087C3;text-align:center;">
                                        hr@praxello.com
                                        </div>

                                </h2>
                </td>
                            <td style="width:30mm;">
                                <strong>
                                <div style="font-size: 14px;font-family: SourceSansPro;color: #000;padding-top:130px;">
                                Date:2019/20/25
                                </div>
                                </strong>
                </td>
                    </tr>
        </table>
                <table  style="width:100%;padding:0;">
                    <tr>
                            <td style="width:35mm;">
                            </td>
                                <td style="font-size:18px;font-family: SourceSansPro;font-weight:bold;text-align:center;">
                               Prescription
                            </td>
                                <td style="width:30mm;">
                                </td>

                    </tr>
            </table>
        <table  style="width:100%;padding:0;">
                    ' . fetchPrescriptiondata() . '
            </table>


            <div id="content">

                    <div id="invoice_body">
                            <table border="0">
                            <tr style="background:#fff;">
                                    <td style="width:10%;"><strong>Sr.no</strong></td>
                                    <td><strong>Medicine</strong></td>
                                    <td style="width:10%;"><strong>Morning</strong></td>
                                    <td  style="width:10%;"><strong>Afternoon</strong></td>
                                    <td style="width:10%;"><strong>Night</strong></td>

                            </tr>

                                
                ' . fetchmedicinedata() . '

                            </table>

                <table>
                                <tr>
                                <td><strong>Advice:</strong></td>
                                </tr>
                                <tr>
                                <td>thisdhfjdkfk  kdfkjdgkfk </td>
                                </tr>
                                </table>



            </div>
            <footer style="text-align:center;padding-left:400px;">Sign</footer>
            <br/><br/>
      <footer style="text-align:center;"> This receipt is generated by computer device</footer>

            </div>

  </body>
</html>';

$dompdf->setPaper('A4', 'portrait');
// $dompdf->loadHtml(file_get_contents('newpdf.html'));
// $dompdf->loadHtml(file_get_contents('a2.html'));
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