<?php

if (!isset($active)) {
    $active = [];
}
if (!isset($disabled)) {
    $disabled = [];
}

function checkActive($id)
{
    global $active;
    if (in_array($id, $active)) {
        return true;
    }
    return false;
}
function setActive($id)
{
    // return checkActive("laman-utama") ? 'active': '';
    if (checkActive($id)) {
        return 'active';
    } else {
        return NULL;
    }
}

function addActive(string $item)
{
    global $active;
    array_push($active, $item);
}
// $a = "active";
?>

<nav class="header">
    <div class="container">
        <div class="heading">
            <div class="logo logo-sekolah">
                <img src="assets/img/logo-sekolah.png" alt="Logo SMKBBSB">
            </div>
            <div class="title">
                <h1 class="main-title">Sistem Kitar Semula</h1>
                <h6 class="sub-title">Sekolah Menengah Kebangsaan Bandar Baru Sungai Buloh</h6>
            </div>
            <div class="logo logo-kitar-semula">
                <img src="assets/img/logo.png" alt="Logo Kitar Semula">
            </div>
        </div>
        <div class="navbar navbar-expand-md w-100 navigasi">
            <button class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#navbarCollapse"
                style="margin-left: auto !important;">
                <i class="fas fa-bars"></i>
            </button>
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="" class="nav-link anim-container <?= setActive('laman-utama') ?>">
                            Laman Utama
                            <div class="anim-line"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link anim-container <?= setActive('tentang') ?>">
                            Tentang laman ini
                            <div class="anim-line"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#hubungi" class="nav-link anim-container <?= setActive('contact') ?>">
                            Hubungi kami
                            <div class="anim-line"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="jual" class="nav-link anim-container <?= setActive('sell') ?>">
                            Jual Item
                            <div class="anim-line"></div>
                        </a>
                    </li>
                    <li class="nav-item ml-1 mr-1">
                        <a href="search" class="btn btn-success toggle-search d-none-lg">
                            <i class="fas fa-search"></i>
                        </a>
                        <style>
                        .toggle-search {
                            padding: 10px 14px 5px 14px;

                        }

                        @media only screen and (min-width: 993px) {
                            .toggle-search {
                                display: none;
                            }

                            .toggle-target {
                                display: block;
                            }
                        }

                        @media only screen and (max-width: 992px) {
                            .toggle-search {
                                display: block;
                            }

                            .toggle-target {
                                display: none;
                            }
                        }

                        @media only screen and (max-width: 767px) {
                            .toggle-target {
                                display: block;
                            }

                            .toggle-search {
                                display: none;
                            }
                        }
                        </style>
                        </script>
                        <form action="search/" method="get" class="toggle-target">
                            <div class="input-group">
                                <input type="search" name="q" id="search" class="form-control"
                                    placeholder="Cari barangan kitar semula." title="Cari barangan kitar semula.">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-success" style="padding: 2px 6px 1px 6px;">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
                <div class="navbar-nav ml-auto auth">
                    <?php
                    if (!isset($_SESSION["nama"])) {
                    ?>
                    <li class="nav-item">
                        <a href="daftar" class="nav-link anim-container <?= setActive('daftar') ?>">
                            Daftar
                            <div class="anim-line"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="login" class="nav-link anim-container <?= setActive('login') ?>">
                            Login
                            <div class="anim-line"></div>
                        </a>
                    </li>
                    <?php
                    } else {
                        if ($_SESSION["admin"]) {
                        ?>
                    <li class="nav-item">
                        <a href="admin/" class="nav-link anim-container">
                            Admin
                            <div class="anim-line"></div>
                        </a>
                    </li>
                    <?php
                        }
                        ?>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link anim-container">
                            Logout
                            <div class="anim-line"></div>
                        </a>
                    </li>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</nav>