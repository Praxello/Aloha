
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
$fromDate=($_GET['fromDate']);




?> 