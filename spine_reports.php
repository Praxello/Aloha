<?php
/* include autoloader */
require_once 'dompdf/autoload.inc.php';
/* reference the Dompdf namespace */

use Dompdf\Dompdf;

/* instantiate and use the dompdf class */
$dompdf = new Dompdf();

extract($_POST);




function patientDetails()
{
  $output  = '';

    include 'connection.php';
    $sql ="SELECT a.week,a.branchName,
    sum(case when a.flag = 'patient' then a.count else 0 end) patient,
    sum(case when a.flag = 'treat' then a.count else 0 end) treat,
    sum(case when a.flag = 'income' then a.count else 0 end) income
  From
  (SELECT week('2020-03-16') week,count(pm.patientId) count,hbm.branchName, 'patient' as flag 
  FROM patient_master pm
  INNER JOIN hospital_branch_master hbm on
  pm.branchId=hbm.branchId
  where pm.createdAt BETWEEN '2020-03-16' and '2020-03-26' 
  group by hbm.branchName,week('2020-03-16')
  UNION
  SELECT week('2020-03-16') week, COUNT(pm.patientId) count,hb.branchName,'treat' as flag
  FROM patient_medication pm
  INNER join user_master um on 
  um.userId=pm.doctorId
  INNER JOIN hospital_branch_master hb 
  on hb.branchId=um.branchId 
  WHERE pm.visitDate BETWEEN '2020-03-15' AND '2020-03-20'
  GROUP by week('2020-03-16'),hb.branchName
  UNION
  SELECT week('2020-03-16') week,SUM(opm.amount) count,hbm.branchName,'income'as  flag
  FROM opd_payment_transaction_master opm
  inner join opd_patient_payment_master oppm on
  oppm.paymentId=opm.paymentId
  INNER JOIN hospital_branch_master hbm on
  oppm.branchId=hbm.branchId
  where opm.paymentDate BETWEEN ('2020-02-29') and ('2020-03-07')
  group by week('2020-03-16'),hbm.branchName) a group by a.branchName,a.week";

  $sql2="SELECT a.week,
  sum(case when a.flag = 'patient' then a.count else 0 end) patient,
  sum(case when a.flag = 'treat' then a.count else 0 end) treat,
  sum(case when a.flag = 'income' then a.count else 0 end) income
From
(SELECT week('2020-03-16') week,count(pm.patientId) count,hbm.branchName, 'patient' as flag 
FROM patient_master pm
INNER JOIN hospital_branch_master hbm on
pm.branchId=hbm.branchId
where pm.createdAt BETWEEN '2020-03-16' and '2020-03-26' 
group by hbm.branchName,week('2020-03-16')
UNION
SELECT week('2020-03-16') week, COUNT(pm.patientId) count,hb.branchName,'treat' as flag
FROM patient_medication pm
INNER join user_master um on 
um.userId=pm.doctorId
INNER JOIN hospital_branch_master hb 
on hb.branchId=um.branchId 
WHERE pm.visitDate BETWEEN '2020-03-15' AND '2020-03-20'
GROUP by week('2020-03-16'),hb.branchName
UNION
SELECT week('2020-03-16') week,SUM(opm.amount) count,hbm.branchName,'income'as  flag
FROM opd_payment_transaction_master opm
inner join opd_patient_payment_master oppm on
oppm.paymentId=opm.paymentId
INNER JOIN hospital_branch_master hbm on
oppm.branchId=hbm.branchId
where opm.paymentDate BETWEEN ('2020-02-29') and ('2020-03-07')
group by week('2020-03-16'),hbm.branchName) a group by a.week";

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
                        <th colspan="4"><center>Week  '.$Week.'</center></th>
     
                    </tr>
                <tr style="background-color: #D2B4DE ">
                <th>Branch</th> 
                <th># of Patients</th>
                <th># of Treatments</th>
                <th>Income</th>
                </tr>   
        <tbody>';

            while($academicResults = mysqli_fetch_assoc($jobQuery)){
                      
                
            $output .= '<tr>
              <td>'.$academicResults['branchName'].'</td>
              <td>'.$academicResults['patient'].'</td>
              <td>'.$academicResults['treat'].'</td>
              <td>'.$academicResults['income'].'</td>
              </tr>';
            }

             
            
            $output .=
            '<tr style="font-weight:bold;background-color: #F4ECF7 ">
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

function procedureConsumptionDetail()
{
  $output  = '';
    include 'connection.php';
    
    $sql ="SELECT a.week,a.testName,
    sum(case when a.flag = 'TestCount' then a.count else 0 end) TestCount,
    sum(case when a.flag = 'TestIncome' then a.count else 0 end) TestIncome
  
  From
  
  (SELECT COUNT(bd.testId) count,week('2020-03-16') week,tm.testName,'TestCount' as flag 
  FROM  bill_details bd INNER join diagnostic_tests_master
  tm on tm.testId=bd.testId
  Inner join opd_patient_payment_master oppm on
  oppm.paymentId=bd.paymentId
  WHERE bd.createdAt BETWEEN ('2020-02-02') AND ('2020-03-25')
  GROUP by week('2020-03-16'),tm.testName
  
  UNION
  
  SELECT sum(bd.fees) count,week('2020-03-16') week,tm.testName,'TestIncome'as flag FROM  bill_details bd 
  INNER JOIN diagnostic_tests_master tm on tm.testId=bd.testId
  Inner join opd_patient_payment_master oppm on
  oppm.paymentId=bd.paymentId
  WHERE bd.createdAt BETWEEN ('2020-02-02') AND ('2020-03-25')
  GROUP by week('2020-03-16'),tm.testName)a GROUP BY a.testName";



    $jobQuery  = mysqli_query($conn, $sql);
    $WeekData= mysqli_query($conn, $sql);
  

        if ($jobQuery != null) {
        $academicAffected = mysqli_num_rows($jobQuery);
        if ($academicAffected > 0) {
            
            $academicResults1 = mysqli_fetch_assoc($WeekData);          
            $Week = $academicResults1['week'];

                     
   
           
            $output .= '
                        
       <table id="BSS" class="table table-bordered">

                    <tr>
                  
                    <th colspan="3" style="background-color: #BB8FCE"><center>Procedure Consumption Detail</center></th> 
  
                    </tr>
                    <tr>
                        <th colspan="4"><center>Week  '.$Week.'</center></th>
     
                    </tr>
                <tr style="background-color: #D2B4DE ">
                <th></th> 
                <th>Count</th>
                <th>Income</th>
                </tr>   
        <tbody>';

            while($academicResults = mysqli_fetch_assoc($jobQuery)){
                      
                
            $output .= '<tr>
            <td>'.$academicResults['testName'].'</td>
            <td>'.$academicResults['TestCount'].'</td>
            <td>'.$academicResults['TestIncome'].'</td>
              </tr>';
            }

            $output .='
            </tbody>
          </table>
            ';   
        }
    }
    mysqli_close($conn);
    return $output;
}

function consultantWiseCollection()
{
  $output  = '';
    include 'connection.php';
    
    $sql ="SELECT SUM(opm.amount) amount,week('2020-02-29') week, um.username FROM opd_payment_transaction_master opm
    inner join opd_patient_payment_master oppm on
    oppm.paymentId=opm.paymentId
    INNER join user_master UM on
    oppm.doctorId=um.userId
    where opm.paymentDate BETWEEN('2020-02-29') and ('2020-03-07')
    group by week('2020-02-29'), um.username";



    $jobQuery  = mysqli_query($conn, $sql);
    $WeekData= mysqli_query($conn, $sql);
  

        if ($jobQuery != null) {
        $academicAffected = mysqli_num_rows($jobQuery);
        if ($academicAffected > 0) {
            
            $academicResults1 = mysqli_fetch_assoc($WeekData);          
            $Week = $academicResults1['week'];

            $output .= '
                        
       <table id="BSS" class="table table-bordered">

                    <tr>
                  
                    <th colspan="2" style="background-color: #BB8FCE"><center>Consultant Wise Collection Summary</center></th> 
  
                    </tr>
                    <tr>
                        <th colspan="4"><center>Week  '.$Week.'</center></th>
     
                    </tr>
                <tr style="background-color: #D2B4DE ">
                <th></th> 
                <th>Income</th>
                </tr>   
        <tbody>';

            while($academicResults = mysqli_fetch_assoc($jobQuery)){
                      
                
            $output .= '<tr>
            <td>'.$academicResults['username'].'</td>
            <td>'.$academicResults['amount'].'</td>
            
              </tr>';
            }

            $output .='
            </tbody>
          </table>
            ';   
        }
    }
    mysqli_close($conn);
    return $output;
}


function patientSummary()
{
  $output  = '';
    include 'connection.php';
    
    $sql ="SELECT week('2020-03-16') week,count(pm.patientId) count,'New Registered Patients' as flag FROM patient_master pm
    where pm.createdAt BETWEEN ('2020-03-16') and ('2020-03-25') 
    group by week(pm.createdAt)
    UNION
    SELECT week('2020-03-16') week,COUNT(pm.`patientId`) count,'Existing Patients' as flag FROM `patient_master` pm
    WHERE pm.`createdAt` < ('2020-03-30')
    GROUP BY week(pm.`createdAt`)
    UNION
    SELECT week('2020-03-16') week,COUNT(ccf.followUp) count,'Call Center Follow Ups' as flag FROM `call_center_followups` ccf
    INNER join call_center cc on
    cc.callId=ccf.callId
    WHERE ccf.followUpDateTime  BETWEEN ('2020-02-01') and ('2020-03-25')
    GROUP BY week(ccf.followUpDateTime)
    UNION
     SELECT week('2020-03-16') week,count(cc.callId) count, 'Referred Patients' as flag FROM `call_center` cc INNER JOIN call_center_patients ccp on ccp.clientId=cc.clientId WHERE cc.createdAt BETWEEN ('2020-02-01') and ('2020-03-25') GROUP by week('2020-03-16')
    
    UNION
    SELECT  week('2020-03-16') week,count(cc.callId) count,ccp.reference as flag FROM `call_center` cc
    INNER JOIN call_center_patients ccp on
    ccp.clientId=cc.clientId
     WHERE cc.createdAt BETWEEN ('2020-02-01') and ('2020-03-25')
    GROUP by ccp.reference ,week('2020-03-16')";



    $jobQuery  = mysqli_query($conn, $sql);
    $WeekData= mysqli_query($conn, $sql);
  

        if ($jobQuery != null) {
        $academicAffected = mysqli_num_rows($jobQuery);
        if ($academicAffected > 0) {
            
            $academicResults1 = mysqli_fetch_assoc($WeekData);          
            $Week = $academicResults1['week'];

                     
   
           
            $output .= '
                        
       <table id="BSS" class="table table-bordered">

                    <tr>
                  
                    <th colspan="2" style="background-color: #BB8FCE"><center>Patient Summary</center></th> 
  
                    </tr>
                    <tr>
                        <th colspan="4"><center>Week  '.$Week.'</center></th>
     
                    </tr>
                <tr style="background-color: #D2B4DE ">
                <th></th> 
                <th>Count</th>
                </tr>   
        <tbody>';

            while($academicResults = mysqli_fetch_assoc($jobQuery)){
                      
                
            $output .= '<tr>
            <td>'.$academicResults['flag'].'</td>
            <td>'.$academicResults['count'].'</td>
           
              </tr>';
            }

            $output .='
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
                                   '.patientDetails().'
                                    </div>
                                    
                                    <div class="row">
                                    '.procedureConsumptionDetail().'
                                     </div>

                                     <div class="row">
                                     '.consultantWiseCollection().'
                                      </div>
                                      
                                     <div class="row">
                                     '.patientSummary().'
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