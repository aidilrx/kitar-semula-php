<?php
include("../assets/php/base.php");
if (!sessionStarted()) {
    session_start();
}
if (!userLogged()) {
    header("Location: ../login");
}

$items = getRecycleItems();
// print_r($items);
function checkKeyValue($key, $value)
{
    // foreach($key as $k) {
    //     if($k == $value) {
    //         return TRUE;
    //     }
    // }
    if (in_array($value, $key)) return TRUE;
    return FALSE;
}

if (isset($_POST["type"])) {
    // echo $_POST["type"];
    #destruct all needed vars
    [
        "type" => $type,
        "berat" => $weight
    ] = $_POST;
    #find suitable item based on the type
    foreach ($items as $i) {
        if (checkKeyValue($i, $type)) {
            $item = $i;
        }
    }
    // print_r($item);
    #total weight
    // echo $_FILES["proof"]['name'];
    // echo $total;
    $uploadedImage = uploadImage($_FILES['proof'], 'bukti');
    $today_date = date("Y-m-d");
    if ($uploadedImage) {
        $sell_id = bin2hex(random_bytes(15));
        $user_id = $_SESSION["id"];
        echo $_SESSION["id"];
        $item_id = $item['idItem'];
        $total = $weight * $item['hargaPerKiloItem'];
        $image_link = $uploadedImage["image_link"];
        $sql_masukkan_penjualan = "INSERT INTO penjualan(id, idPengguna,idItem,berat, totalpoint, bukti, tarikh)
        VALUE('$sell_id', '$user_id', '$item_id', '$weight', '$total', '$image_link', '$today_date')";

        $run_sql_penjualan = mysqli_query($condb, $sql_masukkan_penjualan);

        #update user point
        $new_point = $_SESSION["point"] + $total;
        $sql_update_pengguna = "UPDATE pengguna SET point = '$new_point' WHERE id = '$user_id'";

        $run_sql_update_pengguna = mysqli_query($condb, $sql_update_pengguna);
        $_SESSION["point"] = $new_point;

        #massukan log pengguna
        $log_pengguna_id = bin2hex(random_bytes(15));
        $nama_pengguna = $_SESSION["nama"];
        $item_name = $item["namaItem"];
        $sql_masukkan_log_pengguna = "INSERT INTO log_pengguna(id, idPengguna, aktiviti, tarikh_aktiviti)
        VALUE ('$log_pengguna_id', '$user_id', '$nama_pengguna telah menjual $item_name seberat $weight kg dan menerima $total point', '$today_date')";

        $run_sql_masukkan_log_pengguna = mysqli_query($condb, $sql_masukkan_log_pengguna);

        echo $sql_masukkan_log_pengguna;
        echo '<br>';
        echo $sql_masukkan_penjualan;
        echo '<br>';
        echo $sql_update_pengguna;

        if ($run_sql_masukkan_log_pengguna and $run_sql_penjualan and $run_sql_update_pengguna) {
            echo "
        <script>
        alert('PENJUALAN BERJAYA.');
        window.location.href = '.';
        </script>
        ";
        } else {
            die("
            <script>
            alert('PENJUALAN GAGAL. ERROR!!');
            window.history.back();
            </script>
            ");
        }
    } else {
        die('
        <script>
        alert("PENJUALAN GAGAL. GAMBAR BUKTI TIDAK SAH");
        window.history.back();
        </script>
        ');
    }
}