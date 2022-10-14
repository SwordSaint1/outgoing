<?php
   
    date_default_timezone_set('Asia/Manila');
    $server_date_time = date('Y-m-d H:i:s');
    $server_date_only = date('Y-m-d');
    $sdate = date('Y-m-d',(strtotime('-2 day',strtotime($server_date_only))));
    $server_time = date('H:i:s');
    $server_year = date('Y');
    $dateqr = date('Ymd');
    $day = date('l');
    $datenow = date('Y-m-d');
    $timenow = date('H:i:s');
    $extension=  date('H:i:s');

   $shit=  date('H:i:s',(strtotime($extension)));
if (isset($_GET['real'])) {
    echo  $shit;
}

?>