<?php
include("../assets/php/connection.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    ["nama"=> $nama, "katalaluan"=> $katalaluan] = $_POST;

    $arahan_sql = "SELECT * FROM pengguna WHERE nama = '$nama' AND katalaluan = '$katalaluan' LIMIT 1";

    $lakasana_arahan = mysqli_query($condb, $arahan_sql);

    if (mysqli_num_rows($lakasana_arahan) > 0) {
        #pengguna berjaya login
        session_regenerate_id();

        ["nama"=> $_SESSION["nama"]] = $lakasana_arahan->fetch_assoc();
        
        echo "
        <script>
        alert('Log masuk berjaya.');
        window.location.href = '../';
        </script>
        ";
    } else {
        die("<script>
            alert('Log masuk gagal.');
            window.history.back();
            </script>");
    }
}


?>
<!DOCTYPE html>
<html>
    <head>
        <base href="http://localhost/">
    </head>
</html>