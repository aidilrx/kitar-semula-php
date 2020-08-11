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

        [
            "id"=> $_SESSION["id"], 
            "nama"=> $_SESSION["nama"], 
            "avatar" => $_SESSION["avatar_link"],
            "point" => $_SESSION["point"],
            "status" => $status
        ] = $lakasana_arahan->fetch_assoc();
        
        // $_SESSION["admin"] = $lakasana_arahan->fetch_assoc()["status"];
        $_SESSION["admin"] = $status == "admin";
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