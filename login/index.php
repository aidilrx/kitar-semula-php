<!DOCTYPE html>
<html>

<head>
  <title>Log Masuk | Kitar Semula SMKBBSB</title>
  <base href="http://localhost/" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />

  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <script src="assets/js/jquery.slim.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" />
</head>

<body>
  <!-- <nav class="navigasi-bar">
    <div class="container-fluid">
      <div class="tajuk w-100 container">
        <img src="assets/img/logo-sekolah.png" alt="Sekolah Menengah Kebangsaan Bandar Baru Sungai Buloh" />
        
        <div class="tajuk-laman text-center">
          <h1 class="text-center" style="text-align: center !important;">
            Sistem Kitar Semula
          </h1>
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
            <li class="nav-item anim-container">
              <a href="#" class="nav-link">
                <i class="fas fa-home"></i> Home</a>
              <span class="anim-line"></span>
            </li>
            <li class="nav-item anim-container">
              <a href="#" class="nav-link">
                <i class="fas fa-info-circle"></i> About</a>
              <span class="anim-line"></span>
            </li>
            <?php
            if (!isset($_SESSION["nama"])) {
            ?>
              <li class="nav-item anim-container">
                <a href="daftar/" class="nav-link">
                  <i class="fas fa-user-plus"></i> Daftar</a>
                <span class="anim-line"></span>
              </li>
              <li class="nav-item anim-container active">
                <a href="login/" class="nav-link">
                  <i class="fas fa-sign-in-alt"></i> Log Masuk</a>
                <span class="anim-line"></span>
              </li>
            <?php
            } else {
            ?>
              <!- <li class="nav-item anim-container">
                  <a href="logout.php" class="nav-link"> <i class="fas fa-sign-out-alt" style="transform: rotate(180deg);"></i> Log Keluar</a>
                  <span class="anim-line"></span>
                </li> ->
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
                      <img src="https://i.ytimg.com/vi/QuzUQFvKYuY/maxresdefault.jpg" alt="Logo" class="w-100 h-100" />
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
                  <a href="profile.php" class="dropdown-item">
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
            <li class="nav-item no-hover d-flex align-items-center mr-2 ml-2">
              <form action="cari" method="GET" class="h-100 d-flex align-items-center">
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
  <?php
  $active = ["login"];
  include("../assets/template/navbar.template.php");
  $layout = [
    "title" => "Log Masuk",
    "form" => [
      "action" => "login/login.php",
      "method" => "POST"
    ],
    "inlineForm" => false,
    "inputGroup" => true,
    "inputGroupInputs" => [
      [
        "prepend" => [
          "innerHTML" => '<span class="input-group-text bg-theme text-light m-0  border-0">
                              <i class="fas fa-user"></i>
                          </span>'
        ],
        "mid" => [
          "type" => 'text',
          "name" => "nama",
          "placeholder" => "Nama.. cth. johnsmith123"
        ]
      ],
      [
        "prepend" => [
          "innerHTML" => '<span class="input-group-text bg-theme text-light m-0  border-0">
                            <i class="fas fa-user"></i>
                          </span>'
        ],
        "mid" => [
          "type" => "password",
          "name" => "katalaluan",
          "placeholder" => "Katalaluan..."
        ]
      ]
    ],
    "submit" => '<button class="btn btn-success" type="submit">
                  Log Masuk
                 </button>'
  ];
  include("../assets/template/ksform.template.php");

  ?>
  <!-- <div class="ks-form login pt-5 pb-5">
      <form action="login/login.php" method="POST" class="container">
        <h2>Log Masuk</h2>
        <style>
          .theme {
            color: #2ef429;
            /* color: blue; */
          }
          .bg-theme {
            /* background-color: #2ef429; */
            background-color: #027200;
          }
        </style>
        <div class="input-group mb-3">
          <div class="input-group-prepend border border-success border-right-0 p-0 rounded-left">
            <span class="input-group-text bg-theme text-light m-0  border-0">
              <i class="fas fa-user"></i>
            </span>
          </div>
          <input
            type="text"
            name="nama"
            id="nama"
            class="form-control border border-success theme"
            placeholder="Nama.. cth. johnsmith123"
          />
        </div>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="fas fa-lock"></i>
            </span>
          </div>
          <input
            type="password"
            name="katalaluan"
            id="katalaluan"
            placeholder="Katalaluan.."
            class="form-control"
          />
        </div>
        <div class="cadangan">
          &middot;
          <a href="daftar/" class="text-dark">Daftar</a>
        </div>
        <button type="submit" class="btn btn-success mt-2">
          Log Masuk
        </button>
      </form>
    </div> -->
</body>

</html>