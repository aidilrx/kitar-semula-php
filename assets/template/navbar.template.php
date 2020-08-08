<?php

if (!isset($active)) {
  $active = ["laman-utama"];
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
// $a = "active";
?>
<!-- <nav class="navigasi-bar">
  <div class="container-fluid">
    <div class="tajuk w-100 container">
      <img src="assets/img/logo-sekolah.png" alt="Sekolah Menengah Kebangsaan Bandar Baru Sungai Buloh" />
      <!- - <abbr title="Sekolah Menengah Kebangsaan Bandar Baru Sungai Buloh"> SMKBBSB </abbr> - ->
      <div class="tajuk-laman text-center">
        <h1 class="text-center" style="text-align: center !important;">Sistem Kitar Semula</h1>
        <small class="text-danger">Sekolah Menengah Kebangsaan Bandar Baru Sungai Buloh</small>
      </div>
      <img src="assets/img/logo.png" alt="Kitar Semula SMKBBSB" />
    </div>
    <div class="navigasi w-100 navbar navbar-expand-md">
      <button class="navbar-toggler ml-auto m-2" data-target="#navbarCollapse" data-toggle="collapse">
        <i class="fas fa-bars"></i>
      </button>
      <div class="navbar-collapse collapse w-100" id="navbarCollapse">
        <ul class="navbar-nav ml-auto mr-auto">
          <li class="nav-item anim-container <?= setActive('laman-utama') ?>" id="laman-utama">
            <a href="/" class="nav-link">
              <i class="fas fa-home"></i>
              <div class="hidden d-inline">
                <span>Laman Utama</span>

              </div>
            </a>
            <span class="anim-line"></span>
          </li>

          <?php
          if (!isset($_SESSION["nama"])) {
          ?>
            <li class="nav-item anim-container <?= setActive('daftar') ?>" id="daftar">
              <a href="daftar/" class="nav-link"> <i class="fas fa-user-plus"></i> Daftar</a>
              <span class="anim-line"></span>
            </li>
            <li class="nav-item anim-container <?= setActive('login') ?>" id="login">
              <a href="login/" class="nav-link"> <i class="fas fa-sign-in-alt"></i> Log Masuk</a>
              <span class="anim-line"></span>
            </li>
          <?php
          } else {
          ?>
            <! -- <li class="nav-item anim-container">
                <a href="logout.php" class="nav-link"> <i class="fas fa-sign-out-alt" style="transform: rotate(180deg);"></i> Log Keluar</a>
                <span class="anim-line"></span>
              </li> -- >
            <li class="nav-item d-none-sm d-none-md dropdown">
              <style>
                .profile-menu {
                  background: transparent;
                  font-weight: bold;
                  font-size: 1.05em;
                  padding: 0.5em 1em !important;
                  margin: 0px;
                  /* color: #333; */
                  color: #9c630e;
                }

                /* .dropdown:hover .dropdown-menu{
                    display: block;
                    margin-top: 0px;
                  } */
                .dropdown-menu {
                  min-width: 250px !important;
                }

                .profile .image {
                  width: 40px;
                  height: 40px;
                  border-radius: 20px;
                  background-color: #88888855;
                  margin: 0px 5px;
                }

                .profile .image img {
                  border-radius: inherit;
                }

                .profile .info {
                  width: 68%;
                }

                .profile .info .email {
                  overflow-x: hidden;
                  text-overflow: ellipsis;
                }
              </style>
              <button type="button" class="profile-menu border-0 m-0 w-100 nav-link dropdown-toggle pr-2 pl-2" data-toggle="dropdown">
                <i class="fas fa-user" style="font-size: 1.2em;"></i>
              </button>
              <div class="dropdown-menu w-100">
                <div class="profile d-flex justify-content-center">
                  <div class="image">
                    <img src="http://dajori.ueuo.com/assets/img/logo.jpeg" alt="Logo" class="w-100 h-100">
                  </div>
                  <div class="info">
                    <small class="name d-block">
                      <?= $_SESSION["nama"] ?>
                    </small>
                    <small class="email d-block">
                      abcdasdadaefg@mail.com
                    </small>
                  </div>
                </div>
                <div class="dropdown-divider"></div>
                <a href="profile/" class="dropdown-item" class="<?=setActive('profile')?>">
                  <i class="fas fa-user"></i>
                  Lihat profil
                </a>
                <a href="logout.php" class="dropdown-item">
                  <i class="fas fa-sign-out-alt" style="transform: rotate(180deg);"></i>
                  Log Keluar
                </a>
              </div>
            </li>
          <?php
          }
          ?>
          <li class="nav-item anim-container <?= setActive('tentang') ?> disabled" disabled>
            <a href="#" class="nav-link disabled" disabled>
              <i class="fas fa-info-circle"></i>
              <! -- Tentang - ->
            </a>
            <span class="anim-line"></span>
          </li>
          <li class="nav-item no-hover d-flex align-items-center mr-2 ml-2">
            <form action="cari" method="GET" class=" h-100 d-flex align-items-center">
              <div class="input-group">
                <input type="search" name="q" id="search" placeholder="Cari..." class="form-control" />
                <div class="input-group-append">
                  <button type="submit" class="btn btn-success">
                    <i class="fas fa-search pl-2 pr-2"></i>
                  </button>
                </div>
              </div>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav> -->

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
                        <a href="#home" class="nav-link anim-container active">
                            Laman Utama
                            <div class="anim-line"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link anim-container">
                            Tentang laman ini
                            <div class="anim-line"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#hubungi" class="nav-link anim-container">
                            Hubungi kami
                            <div class="anim-line"></div>
                        </a>
                    </li>

                </ul>
                <div class="navbar-nav ml-auto auth">
                    <li class="nav-item">
                        <a href="#daftar" class="nav-link anim-container">
                            Daftar
                            <div class="anim-line"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#daftar" class="nav-link anim-container">
                            Login
                            <div class="anim-line"></div>
                        </a>
                    </li>
                </div>
            </div>
        </div>
    </div>
</nav>