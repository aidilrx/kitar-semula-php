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
    <style>
    body {
        margin: 0px auto !importants;
    }
    </style>
    <?php
  $active = ["login"];
  include("../assets/template/navbar.template.php");

  ?>
    <div class="ks-form login pt-5 pb-5">
        <form action="login/login.php" method="POST" class="container">
            <h2>Log Masuk</h2>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-user"></i>
                    </span>
                </div>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama.. cth. johnsmith123" />
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-lock"></i>
                    </span>
                </div>
                <input type="password" name="katalaluan" id="katalaluan" placeholder="Katalaluan.."
                    class="form-control" />
            </div>
            <div class="cadangan">
                &middot;
                <a href="daftar/" class="text-dark">Daftar</a>
            </div>
            <button type="submit" class="btn btn-success mt-2">
                Log Masuk
            </button>
        </form>
    </div>
</body>

</html>