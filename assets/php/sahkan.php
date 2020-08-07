<?php
// include("connection.php");
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "kitar_semula";

$condb = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$raw_data = file_get_contents("php://input");
$inputs = json_decode($raw_data);
$model = $inputs->query;
$value = $inputs->value;

$result = array();

if (strlen($value) < 5) {
    $result["state"] = "failed";
    $paksa = 5 - strlen($value);
    $result["message"] = "Nama mesti mempunyai sekurang-kurangnya 5 huruf.($paksa huruf lagi)";
} else {
    // $result["state"] = "success";
    if ($model == 'nama') {
        $sql = "SELECT * FROM pengguna WHERE $model LIKE '%$value%'";
        if ($condb->query($sql)->num_rows > 0) {
            $result["state"] = "failed";
            $result["message"] = "Maaf, nama ini telah diambil.";
        } else {
            $result["state"] = "success";
            $result["message"] = "nama ini tersedia";
        }
    }
    else if ($model == 'katalaluan') {
        $trimmed = trim($value);
        if($trimmed < 5) {
            $result["state"] = "failed";
            $paksa = 5 - strlen($value);
            $result["message"] = "Nama mesti mempunyai sekurang-kurangnya 5 huruf.($paksa huruf lagi)";
        }
    }
}

print_r(json_encode($result));
