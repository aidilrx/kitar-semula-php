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


    <main class="p-0">
        <div class="heading-quote-container">
            <div class="bg-image">
                <img src="./assets/img/heading-image.jpg" alt="Heading">
            </div>
            <div class="heading-quote">
                <div class="quote container">
                    <h1>Marilah kita bersama kitar semula</h1>
                    <!-- <h4>Recycle For Life partners with schools <br> and corporationsto measure and reward people for
                        recycling.<br>Connect with us to find out how you can convert your
                        <br>#trashforcash <br> today.
                    </h4> -->
                    <h4>
                        Recycle For Life bekerjasama dengan sekolah <br>
                        dan syarikat untuk mengukur dan memberi penghargaan kepada orang ramai kerana mengitar semula.
                        <br>
                        Terhubung dengan kami untuk mengetahui bagaimana anda boleh menukar <br>
                        #trashforcash <br>
                        hari ini.
                    </h4>
                </div>
            </div>
        </div>

        <!-- Goals -->
        <div class="goal container">
            <div class="goal-image">
                <img src="assets/img/Tujuan-50.jpg" alt="Goal Image">
            </div>
            <div class="goal-content">
                <h2 class="goal-title anim-container">
                    Tujuan Kitar Semula
                    <div class="anim-line"></div>
                </h2>
                <p class="goal-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque neque arcu, lobortis eget vulputate
                    a, interdum dapibus est. Etiam porta mi vel neque scelerisque, id lacinia velit faucibus.
                    Pellentesque volutpat condimentum congue. Donec molestie sapien a sem vestibulum maximus. Nam id
                    consectetur orci. Proin purus lectus, vestibulum ut rhoncus at, molestie vel dolor. Pellentesque ut
                    enim imperdiet, vestibulum nibh in, venenatis elit.
                </p>
            </div>
        </div>

        <!-- Recyclable-items -->
        <div class="recyclable-items container">
            <h2>Barangan yang boleh dikitar semula</h2>
            <div class="items">
                <div class="item text-r border-r">
                    <div class="item-image">
                        <img src="assets/img/Plastik-50.jpg" alt="Plastik">
                    </div>
                    <div class="item-description">
                        <h3>Plastik</h3>
                        <small>Plastik pembungkus makanan, bekas makanan berasaskan plastik</small>
                    </div>
                </div>
                <div class="item text-g border-g">
                    <div class="item-image">
                        <img src="assets/img/Organik-50.jpg" alt="Organik">
                    </div>
                    <div class="item-description">
                        <h3>Bahan Organik</h3>
                        <small>Sisa makanan, daun kering</small>
                    </div>
                </div>
                <div class="item text-y border-y">
                    <div class="item-image">
                        <img src="assets/img/Kertas-50.jpg" alt="Kertas">
                    </div>
                    <div class="item-description">
                        <h3>Kertas</h3>
                        <small>
                            Surat khabar lama, buku-buku terpakai, Mak kau hijau
                        </small>
                    </div>
                </div>
                <div class="item text-b border-b">
                    <div class="item-image">
                        <img src="assets/img/Kaca-50.jpg" alt="Kertas">
                    </div>
                    <div class="item-description">
                        <h3>Kaca</h3>
                        <small>
                            Botol kaca terpakai, Serta mak kau
                        </small>
                    </div>
                </div>
            </div>
        </div>

        <div class="hubungi container" id="hubungi">
            <h5>Hubungi Kami</h5>

            <div class="hubungi-list">
                <div class="hubungi-item">
                    <h6>SMK Bandar Baru Sungai Buloh</h6>
                    <h6>016-666 6666</h6>
                </div>
                <div class="hubungi-item">
                    <h6>SMK Bandar Baru Sungai Buloh</h6>
                    <h6>016-666 6666</h6>
                </div>
                <div class="hubungi-item">
                    <h6>SMK Bandar Baru Sungai Buloh</h6>
                    <h6>016-666 6666</h6>
                </div>
                <div class="hubungi-item">
                    <h6>SMK Bandar Baru Sungai Buloh</h6>
                    <h6>016-666 6666</h6>
                </div>
                <div class="hubungi-item">
                    <div class="wrapper">
                        <h6>SMK Bandar Baru Sungai Buloh</h6>
                        <h6>016-666 6666</h6>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="about" id="about">
            #TentangKami. #KitaJagaKita
        </div> -->

    </main>
    <div class="footer">
        <style>
        .footer>* {
            width: 960px;
            margin: 0px auto;
        }
        </style>
        <h6>Copyright 2020 &copy; kitarsemulayeet.oof.com. All right reserved. <a href="#terms" class="terms">Terms
                & Conditions</a> <span class="separator">|</span> <a href="#privacy-policy" class="policy">Privacy
                Policy</a></h6>
    </div>


    <link rel="stylesheet" href="assets/css/style.min.css" />

</body>

</html>
<!-- 
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
    </style> -->