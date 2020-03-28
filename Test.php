
<?php
/* include autoloader */
require_once 'dompdf/autoload.inc.php';
/* reference the Dompdf namespace */

use Dompdf\Dompdf;

/* instantiate and use the dompdf class */
$dompdf = new Dompdf();

extract($_GET);
$fromDate=($_GET['fromDate']);
$toDate=($_GET['toDate']);
$date=date_create($fromDate);
$fd=date_format($date,"Y-M-d");

echo ($fd);
echo ($toDate);



function patientDetails($fromDate,$toDate)
{
  $output  = '';

    include 'connection.php';
    $sql ="SELECT a.week,a.branchName,
    sum(case when a.flag = 'patient' then a.count else 0 end) patient,
    sum(case when a.flag = 'treat' then a.count else 0 end) treat,
    sum(case when a.flag = 'income' then a.count else 0 end) income
  From
  (SELECT week('$fromDate') week,count(pm.patientId) count,hbm.branchName, 'patient' as flag 
  FROM patient_master pm
  INNER JOIN hospital_branch_master hbm on
  pm.branchId=hbm.branchId
  where pm.createdAt BETWEEN '$fromDate' and '$toDate' 
  group by hbm.branchName,week('$fromDate')
  UNION
  SELECT week('$fromDate') week, COUNT(pm.patientId) count,hb.branchName,'treat' as flag
  FROM patient_medication pm
  INNER join user_master um on 
  um.userId=pm.doctorId
  INNER JOIN hospital_branch_master hb 
  on hb.branchId=um.branchId 
  WHERE pm.visitDate BETWEEN '$fromDate' AND '$toDate'
  GROUP by week('$fromDate'),hb.branchName
  UNION
  SELECT week('$fromDate') week,SUM(opm.amount) count,hbm.branchName,'income'as  flag
  FROM opd_payment_transaction_master opm
  inner join opd_patient_payment_master oppm on
  oppm.paymentId=opm.paymentId
  INNER JOIN hospital_branch_master hbm on
  oppm.branchId=hbm.branchId
  where opm.paymentDate BETWEEN ('$fromDate') and ('$toDate')
  group by week('$fromDate'),hbm.branchName) a group by a.branchName,a.week";

  $sql2="SELECT a.week,
  sum(case when a.flag = 'patient' then a.count else 0 end) patient,
  sum(case when a.flag = 'treat' then a.count else 0 end) treat,
  sum(case when a.flag = 'income' then a.count else 0 end) income
From
(SELECT week('$fromDate') week,count(pm.patientId) count,hbm.branchName, 'patient' as flag 
FROM patient_master pm
INNER JOIN hospital_branch_master hbm on
pm.branchId=hbm.branchId
where pm.createdAt BETWEEN '$fromDate' and '$toDate' 
group by hbm.branchName,week('$fromDate')
UNION
SELECT week('$fromDate') week, COUNT(pm.patientId) count,hb.branchName,'treat' as flag
FROM patient_medication pm
INNER join user_master um on 
um.userId=pm.doctorId
INNER JOIN hospital_branch_master hb 
on hb.branchId=um.branchId 
WHERE pm.visitDate BETWEEN '$fromDate' AND '$toDate'
GROUP by week('$fromDate'),hb.branchName
UNION
SELECT week('$fromDate') week,SUM(opm.amount) count,hbm.branchName,'income'as  flag
FROM opd_payment_transaction_master opm
inner join opd_patient_payment_master oppm on
oppm.paymentId=opm.paymentId
INNER JOIN hospital_branch_master hbm on
oppm.branchId=hbm.branchId
where opm.paymentDate BETWEEN ('$fromDate') and ('$toDate')
group by week('$fromDate'),hbm.branchName) a group by a.week";

    $jobQuery  = mysqli_query($conn, $sql);
    $WeekData= mysqli_query($conn, $sql);
    $CTotal= mysqli_query($conn, $sql2);

    

    if ($jobQuery != null) {
        $academicAffected = mysqli_num_rows($jobQuery);
        if ($academicAffected > 0) {
            
            $academicResults1 = mysqli_fetch_assoc($WeekData);          
            $Week = $academicResults1['week'];

            $academicResults2 = mysqli_fetch_assoc($CTotal);          
   
           


            
           
            $output .= '
                        
                

    <table id="BSS" class="table table-bordered">

                    <tr>
                  
                    <th colspan="4" style="background-color: #BB8FCE"><center>Branch Sales Summary</center></th> 
  
                    </tr>
                    <tr>
                        <th colspan="4"><center>Week '.$Week.': '.$fromDate.' To '.$toDate.'</center></th>
     
                    </tr>
                <tr style="background-color: #D2B4DE ">
                <th>Branch</th> 
                <th># of Patients</th>
                <th># of Treatments</th>
                <th>Income</th>
                </tr>   
        <tbody>';

            while($academicResults = mysqli_fetch_assoc($jobQuery)){
                      
                
            $output .= '<tr >
              <td>'.$academicResults['branchName'].'</td>
              <td style="text-align:right">'.$academicResults['patient'].'</td>
              <td style="text-align:right">'.$academicResults['treat'].'</td>
              <td style="text-align:right">'.$academicResults['income'].'</td>
              </tr>';
            }

             
            
            $output .=
            '<tr style="font-weight:bold;background-color: #F4ECF7 ;text-align:right">
            <td>'.'Total'.'</td>
            <td>'.$academicResults2['patient'].'</td>
            <td>'.$academicResults2['treat'].'</td>
            <td>'.$academicResults2['income'].'</td>
            </tr>
           
            </tbody>
          </table>
            ';   
        }
    }
    mysqli_close($conn);
    return $output;
}



$html = '<link rel="stylesheet" href="dompdf/style.css">
<head>
  
</head>

<body>
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <img class="img-fluid" src="img/auth/mybrand.png" width="40% " height="30%">
                                    </div>
                                    <div class="col-md-4">
                                     
                                    </div>
                                    <div class="col-md-2"></div>

                                </div>
                                <div class="card-body template-demo">
                                    <div class="row">
                                   '.patientDetails($fromDate,$toDate).'
                                    </div>
                                    
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

</body>

</html>';
set_time_limit(600);
$dompdf->setPaper('A4', 'portrait');

$dompdf->loadHtml($html);
/* Render the HTML as PDF */
$dompdf->render();

/* Output the generated PDF to Browser */
// $dompdf->stream();
$dompdf->stream("report.pdf", array(
    "Attachment" => false
));
exit(0);
?> 