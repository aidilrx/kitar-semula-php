<?php
include("../assets/php/connection.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    ["nama"=> $nama, "katalaluan"=> $katalaluan, "email"=> $email] = $_POST;

    $arahan_sql = "INSERT INTO pengguna(nama, katalaluan, email) VALUES (
        '$nama', '$katalaluan', '$email'
    )";
    // echo $nama.$katalaluan.$email;
    $laksana_arahan = mysqli_query($condb, $arahan_sql);

    if($laksana_arahan) {
        session_regenerate_id();

        $_SESSION["nama"] = $nama;
        $_SESSION["email"] = $email;

        echo "
        <script>
        alert('Pendaftaran Berjaya.');
        window.location.href = '../';
        </script>
        ";
    }
}
