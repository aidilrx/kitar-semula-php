<?php

?>

<!DOCTYPE html>
<html lang="ms">

<head>
    <title>Daftar</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <base href="http://localhost/" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <script src="assets/js/jquery.slim.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" />
</head>

<body>
    <?php
  $active = ["daftar"];
  include("../assets/template/navbar.template.php");
  ?>
    <div class="ks-form daftar p-5">
        <form class="container" action="daftar/daftar.php" method="POST" enctype="multipart/form-data">
            <h2>Daftar</h2>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-envelope"></i>
                    </span>
                </div>
                <input type="email" name="email" id="email" class="form-control"
                    placeholder="Email.. cth. johnsmith002@mail.com" maxlength="100" required />
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-user"></i>
                    </span>
                </div>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama cth. John Smith"
                    maxlength="100" required />
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-lock"></i>
                    </span>
                </div>
                <input type="password" name="katalaluan" id="katalaluan" class="form-control" placeholder="Katalaluan"
                    maxlength="200" required />
            </div>
            <div class="input-group mb-1">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-image"></i>
                    </span>
                </div>
                <input type="file" name="avatar" id="avatar" class="form-control" accept="image/*"
                    onchange="readFile(this,  document.getElementById('preview'))">

                <div class="input-group-append">
                    <small class="input-group-text text-warning file-warning">
                        <span class="text-danger">*</span>

                        <i class="fas fa-exclamation-circle"></i>
                        Saiz fail mesti kurang 5Mb
                    </small>
                </div>
            </div>
            <div class="text-danger">
                <em><small>* Pilihan</small></em>
            </div>
            <div class="image-preview w-100 pr-5 pl-5">
                <img src="#" alt="Preview" id="preview">
            </div>

            <style>
            .file-warning {
                font-size: 12px;
            }

            .image-preview {
                width: 50%;
                margin: 10px auto;

            }

            .image-preview img {
                width: 100%;
                display: none;
            }
            </style>
            <script src="assets/js/script.js"></script>
            <div class="cadangan mb-2">
                &middot;
                <a href="login" class="text-dark text-bold">Log Masuk</a>
            </div>
            <button type="submit" class="btn btn-success">
                Daftar
            </button>
        </form>
    </div>
</body>

</html>