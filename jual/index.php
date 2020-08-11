<?php
include("../assets/php/connection.php");
include("../assets/php/base.php");
session_start();

if(!isset($_SESSION["nama"])) {
    die('
    <script>
    alert("Sila log masuk untuk menjual item");
    window.location.href = "/login";
    </script>');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <base href="/">
    <title>Jual Item</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery.slim.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> -->
</head>

<body>
    <?php
    $active = ['sell'];
    include("../assets/template/navbar.template.php");
    ?>

    <main>
        <div class="jual container">
            <div class="profile-section">
                <div class="avatar">
                    <img src="<?=$_SESSION["avatar_link"]?>" alt="Avatar">
                </div>
                <div class="bio">
                    <div class="nama">
                        <h4><?=$_SESSION['nama']?></h4>
                    </div>
                    <div class="point-container">
                        <h6>
                            Point:
                            <div class="point d-inline">
                                <span><?=getUser((int)$_SESSION["id"])["point"]?></span>
                            </div>
                            <span class="star-point" style="color: gold;">
                                &#9733;
                            </span>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="sell-section">
                <h3>Jual Item</h3>

                <form action="jual/jual.php" method="POST" enctype="multipart/form-data">
                    <div class="options">
                        <?php
                            $sql_item = "SELECT * FROM item_kitar_semula";
                            $items = [];

                            $run_sql_item = mysqli_query($condb, $sql_item);

                            while($item = mysqli_fetch_assoc($run_sql_item)) {
                            array_push($items, $item);
                            }

                            foreach($items as $item) {
                            ?>
                        <div class="option">
                            <input type="radio" name="type" id="<?=$item['namaItem']?>" value='<?=$item['idItem']?>'
                                id="<?=$item['namaItem']?>" required>
                            <label for="<?=$item['namaItem']?>"><?=$item['namaItem']?> -
                                <?=$item['hargaPerKiloItem']?>pts</label>
                        </div>
                        <?php
                            }
                        ?>
                    </div>

                    <!-- Berat -->
                    <div class="input-group w-50 m-auto">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Berat</div>
                        </div>
                        <input type="text" name="berat" id="" class="form-control">
                        <div class="input-group-append">
                            <div class="input-group-text">kg</div>
                        </div>
                    </div>

                    <!-- Gambar -->
                    <div class="proof" class="text-align" style="text-align: center;">
                        <h4>Gambar Bukti</h4>
                        <div class="input-group w-50 mr-auto ml-auto">
                            <div class="input-group-prepend">
                                <label for="proof" class="input-group-text">Gambar</label>
                            </div>
                            <input type="file" name="proof" id="proof" accept="image/*" onchange="readFile(this)"
                                class="form-control">
                        </div>
                        <style>
                        .image-preview {
                            width: 50%;
                            margin: 10px auto;

                        }

                        .image-preview img {
                            width: 100%;
                            display: none;
                        }
                        </style>
                        <div class="image-preview">
                            <img src="#" alt="Preview" id="preview">
                        </div>
                        <script>
                        function readFile(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    $('#preview')
                                        .attr('src', e.target.result)
                                        .css('display', 'block');

                                }
                                reader.readAsDataURL(input.files[0])

                            } else {
                                $('#preview').css('display', 'none');
                            }
                        }
                        </script>
                    </div>

                    <div class="submit">
                        <input type="submit" value="Submit">
                    </div>
                    <!-- <input type="checkbox" name="" id=""> -->
                </form>
            </div>
        </div>
    </main>
    <link rel="stylesheet" href="jual/jual.min.css">

</body>

</html>