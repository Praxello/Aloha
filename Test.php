<?php
include 'connection.php';

echo "Connected Successfully";
$sql="SELECT ADDDATE(CURRENT_DATE, INTERVAL -8 DAY) fromDate,ADDDATE(CURRENT_DATE, INTERVAL -1 DAY) toDate";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo $row["fromDate"];
echo $row["toDate"];
CloseCon($conn);
?>
