<?php
include("connection.php");

#prost = protocol + host
$prost_url = (!empty($_SERVER["HTTPS"]) ? 'https://': 'http://').$_SERVER["HTTP_HOST"]."/";
// echo $prost_url;

#root
$root = $_SERVER["DOCUMENT_ROOT"];
function sessionStarted() {
    if(session_status() == PHP_SESSION_NONE) return FALSE;
    return TRUE;
}


function getUser($userId) {
    global $condb;
    $sql = "SELECT * FROM pengguna WHERE id = '$userId'";
    $run_sql = mysqli_query($condb, $sql);
    // print_r($run_sql->fetch_assoc());
    return $run_sql->fetch_assoc();
}

function userLogged() {
    if (isset($_SESSION["nama"]) || isset($_SESSION["id"])) {
        return TRUE;
    }
    return FALSE;
}

function getRecycleItems() {
    global $condb;
    $sql = "SELECT * FROM item_kitar_semula";
    $run_sql = mysqli_query($condb, $sql);
    $items = [];

    if(mysqli_num_rows($run_sql) > 0) {
        while($item = $run_sql -> fetch_assoc()) {
            array_push($items, $item);
        }
    }
    return $items;
}

function uploadImage($image_file, $target_dir) {
    global $prost_url, $root;
    $image = $image_file;

    #check if `image` is an actual image
    $check = getimagesize($image['tmp_name']);
    if($check === FALSE) {
        return;
    }

    #server directories for images
    $target_dir_path = [
        'avatar' => '/assets/img/avatar/',
        'bukti' => '/assets/img/bukti/'
    ];
    // echo dirname($_SERVER["PHP_SELF"],999999999999999);
    $dir = $root.$target_dir_path[$target_dir];
    #image type e.g .jpeg / .png
    $image_type = '.'.strtolower(pathinfo($image["name"], PATHINFO_EXTENSION));

    #rename the image to 32bytes char
    $image['name'] = bin2hex(random_bytes(32)).$image_type;
    
    #set target filepath e.g ../img/avatar/<32bytes char>.<image type>
    $target_file = $dir.basename($image['name']);
    #set the url for web purpose e.g http://localhost/../img/avatar/<32bytes char>.<image type>
    $target_link = $prost_url.$target_dir_path[$target_dir].basename($image['name']);

    if(move_uploaded_file($image['tmp_name'], $target_file)) {
        // echo "Success upload file";
        // return TRUE;
        return ["image_link" => $target_link];
    } else {
        return FALSE;
    }
}
// print_r(getUser(403));
?>