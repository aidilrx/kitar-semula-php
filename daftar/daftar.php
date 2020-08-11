<?php
include("../assets/php/connection.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!empty($_FILES['avatar']['tmp_name'])) {
        print_r($_FILES);
         #Handle user avatar
    #target folder untuk menyimpan avatar
    $target_dir = '../assets/img/avatar/';
    #mendapatkan jenis fail
    $file_type = strtolower(pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION));
    #Tukar nama fail supaya tidak berlaku `conflict` 
    #apabila terdapat fail dengan nama yang sama di dalam server
    $_FILES['avatar']['name'] = bin2hex(random_bytes(32)).'.'.$file_type;
     
    $target_file = $target_dir.basename($_FILES['avatar']['name']);
    $avatar_link = (!empty($_SERVER["HTTPS"]) ? 'https://' : 'http://').$_SERVER['HTTP_HOST'].'/'.$target_file;
    // echo $avatar_link;




    #check if file is actually an image
    $check = getimagesize($_FILES['avatar']['tmp_name']);

    if ($check === false) {
        die('
        <script>
        alert("Ralat: fail imej tidak sah. '.$check['mime'].$file_type.'");
        // window.history.back();
        </script>
        ');
    }

    #add some uniqid if file already exist on server
    if(file_exists($target_file)) {
        // $target_file.= uniqid('dup-');
        $type = substr($target_file, -strlen($file_type)-1);
        echo $type;

        // $_FILES['avatar']['name'] = bin2hex(random_bytes(10)).substr($target_file, -strlen($file_type)-1);

        print_r($_FILES['avatar']);
        die('');
    }
    
    #Limit file size to 5mb
    if($_FILES['avatar']['size'] > 5000000) {
        die('
        <script>
        alert("Ralat! Fail saiz hendaklah kurang daripada 5Mb");
        window.history.back();
        </script>
        ');
    }

    if(!move_uploaded_file($_FILES['avatar']['tmp_name'], $target_file)) {
        die('
        <script>
        alert("RALAT! terdapat ralat apabila memuat naik gambar");
        window.history.back();
        </script>
        ');
    }

    #End handling user avatar
    }

    #handle user id
    $sql_check_available_user_id = "SELECT id FROM pengguna ORDER BY id DESC LIMIT 1";

    $run_sql_check_available_user_id = mysqli_query($condb, $sql_check_available_user_id);
    $shorted_ran = $run_sql_check_available_user_id;
    if(mysqli_num_rows($shorted_ran) > 0) {
        $user_id = (int)$shorted_ran->fetch_assoc()["id"] + 1;
    } else $user_id = 0;
    if(!isset($avatar_link)) {
        $avatar_link = 'http://localhost/assets/img/logo.png';
    }
    ["nama"=> $nama, "katalaluan"=> $katalaluan, "email"=> $email] = $_POST;


    $arahan_sql = "INSERT INTO pengguna(nama, katalaluan, email, avatar) VALUES (
        '$nama', '$katalaluan', '$email', '$avatar_link'
    )";
    // echo $nama.$katalaluan.$email;
    $laksana_arahan = mysqli_query($condb, $arahan_sql);

    if($laksana_arahan) {
        session_regenerate_id();

        $_SESSION["id"] = $user_id;
        $_SESSION["nama"] = $nama;
        $_SESSION["email"] = $email;
        $_SESSION["avatar_link"] = $avatar_link;
        $_SESSION["point"] = 0.00;
        $_SESSION["admin"] = FALSE;
        

        echo $_SESSION['avatar_link'];
        echo "
        <script>
        alert('Pendaftaran Berjaya.');
        window.location.href = '../';
        </script>
        ";
    }
}