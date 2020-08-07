<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "kitar_semula";

$condb = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
    die("Error!!--".mysqli_connect_errno());
}
?>