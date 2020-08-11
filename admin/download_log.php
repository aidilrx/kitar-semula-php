<?php
session_start();
function downloadLog($logs, $filename = 'user-log.csv', $delimiter = ',')
{
    // $filename = 'user-log.csv';
    // $delimiter = ';';
    header('Content-Type: application/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    $f = fopen('php://output', 'w');

    foreach ($logs as $log) {
        fputcsv($f, $log, $delimiter);
    }
}
downloadLog($_SESSION["logs"]);