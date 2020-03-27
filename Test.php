<?php
/* include autoloader */
//require_once 'dompdf/autoload.inc.php';
/* reference the Dompdf namespace */
echo ("I AM Here");
include 'connection.php';
  $sql ="SELECT a.week,a.branchName,
  sum(case when a.flag = 'patient' then a.count else 0 end) patien,
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

$result = $conn->query($sql);

$row = $result->fetch_assoc();
echo $row["week"];
echo $row["branchName"];
echo $row["week"];

//CloseCon($conn);
    
exit(0);
?> 