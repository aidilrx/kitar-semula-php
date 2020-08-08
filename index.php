<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        Kitar Semula Sekolah Menengah Kebangsaan Bandar Baru Sungai Buloh
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost/" />
    <!-- FAVICON -->
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon" />
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <script src="assets/js/jquery.slim.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- CUSTOM CSS -->

    <!-- FONT AWESOME-- ICON -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" />
</head>

<body>
    <?php
  $active = ["laman-utama"];
  include("./assets/template/navbar.template.php");
  ?>
    <div class="rating">
        <span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span>
    </div>
    <style>
    .rating {
        font-size: 2em;
        unicode-bidi: bidi-override;
        direction: rtl;
    }

    .rating>span {
        display: inline-block;
        position: relative;
        width: 1.1em;
    }

    .rating>span:hover:before,
    .rating>span:hover~span:before {
        content: "\2605";
        position: absolute;
        color: orange;
    }
    </style>

    <link rel="stylesheet" href="./assets/css/style.min.css" />

</body>

</html>