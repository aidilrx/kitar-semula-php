<?php
session_start();
#ADMIN
include("../assets/php/base.php");
include("admin.php");
if (!userIsAdmin()) {
    header("Location: admin_login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Kitar Semula</title>
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery.slim.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>

<body>
    <nav class="header admin">
        <div class="container">
            <div class="heading">
                <div class="logo logo-sekolah">
                    <img src="assets/img/logo-sekolah.png" alt="Logo sekolah">
                </div>
                <div class="title">
                    <h1 class="main-title">Sistem Kitar Semula | Admin</h1>
                    <h6 class="sub-title">Sekolah Menengah Kebangsaan Bandar Baru Sungai Buloh</h6>
                </div>
                <div class="logo">
                    <img src="assets/img/logo.png" alt="Logo kitar semula">
                </div>
            </div>
            <div class="navbar navbar-expand-md w-100">
                <button class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#navbarCollapse">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="navbar-collapse collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="admin/" class="nav-link anim-container active">
                                Admin
                                <div class="anim-line"></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin/#monthly-report" class="nav-link anim-container">
                                Laporan Bulanan
                                <div class="anim-line"></div>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto auth">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Laman Utama</a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <?php
        $months_list = [
            'Januari' => "01",
            'Februari' => "02",
            'Mac' => "03",
            'April' => "04",
            'Mei' => "05",
            'Jun' => "06",
            'Julai' => "07",
            'Ogos' => "08",
            'September' => "09",
            'Oktober' => "10",
            'November' => "11",
            'Disember' => "12"
        ];

        $bulan = (string)(!empty($_GET["bulan"]) ? $_GET["bulan"] : date('m'));
        echo $bulan;

        $sql_penjualan_bulanan = "SELECT * FROM penjualan WHERE tarikh LIKE '%-$bulan-%'";
        $run_sql_penjualan_bulanan = mysqli_query($condb, $sql_penjualan_bulanan);
        // print_r($run_sql_penjualan_bulanan->fetch_assoc());
        $jumlah_point = 0;
        $jumlah_berat = 0;
        $senarai_penjualan = [];
        if ($run_sql_penjualan_bulanan->num_rows > 0) {
            while ($row = $run_sql_penjualan_bulanan->fetch_assoc()) {
                $jumlah_berat += (float)$row["berat"];
                $jumlah_point += (float)$row["totalpoint"];
                array_push($senarai_penjualan, $row);
            }
        }
        // echo $jumlah_berat;
        ?>
        <div class="monthly-report" id="monthly-report">
            <h2>Laporan Bulanan</h2>
            <div class="report-form">
                <form action="admin/#monthly-report" method="get">
                    Bulan:
                    <select name="bulan" id="bulan">
                        <?php
                        foreach ($months_list as $month => $index) {
                        ?>
                        <option value="<?= $months_list[$month] ?>"
                            <?= (isset($_GET["bulan"]) && $_GET["bulan"] == $months_list[$month]) ||
                                                                            ((int)date('n') == $months_list[$month] && (empty($_GET["bulan"])))  ? 'selected' : '' ?>>
                            <!-- <?= array_keys($months_list)[$i] ?> -->
                            <?= $month; ?>
                        </option>
                        <?php
                            $months_in_num++;
                        }
                        ?>
                    </select>
                    <button class="btn btn-success">Lihat laporan</button>
                </form>
            </div>
            <div class="report-result">
                <table class="table table-bordered m-3">
                    <thead>
                        <tr>
                            <th>Bulan</th>
                            <th>Jumlah Point</th>
                            <th>Jumlah berat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $bulan ?></td>
                            <td><?= $jumlah_point ?>point</td>
                            <td><?= $jumlah_berat ?>kg</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <?php
        #mendapatkan 25 atau kurang dari semua log dlm turutan menurun
        $sql_cari_log = "SELECT * FROM log_pengguna ORDER BY tarikh_aktiviti DESC LIMIT 25";
        $run_sql_cari_log = $condb->query($sql_cari_log);
        $logs = [];
        $jumlah_log = [];
        if ($run_sql_penjualan_bulanan->num_rows > 0) {
            while ($row = $run_sql_cari_log->fetch_assoc()) {
                array_push($logs, $row);
            }
            $sql_jumlah_log = "SELECT * FROM log_pengguna ORDER BY tarikh_aktiviti DESC";
            $run_sql_jumlah_log = $condb->query($sql_jumlah_log);
            while ($row = $run_sql_jumlah_log->fetch_assoc()) {
                array_push($jumlah_log, $row);
            }
        } else {
            echo "Tiada catatan log pengguna.";
        }
        // print_r($logs);
        ?>
        <div class="user-log" id="user-log">
            <h2>Log pengguna</h2>
            <small>Memaparkan <?= count($logs) ?> dari <?= count($jumlah_log) ?></small>
            <div class="user-log-list">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>IDPengguna</th>
                            <th>Aktiviti</th>
                            <th>Tarikh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($logs as $log) {
                        ?>
                        <tr>
                            <td><?= $log["id"] ?></td>
                            <td><?= $log["idPengguna"] ?></td>
                            <td><?= $log["aktiviti"] ?></td>
                            <td><?= $log["tarikh_aktiviti"] ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="download-log">
                <?php
                $_SESSION["logs"] = $jumlah_log;
                ?>
                <a href="admin/download_log.php">Klik disini untuk memuat turun semua log pengguna.</a>
            </div>
        </div>
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
    <style>
    main>* {
        margin: 0px auto;
        padding: 5px 0px;
        max-width: 960px;
    }
    </style>
</body>

</html>