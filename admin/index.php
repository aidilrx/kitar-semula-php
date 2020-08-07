<?php
// include("../assets/php/bootstrap.php");

$baseUrl = "http://localhost/";
define("baseUrl", $baseUrl);

$basePath = $_SERVER["DOCUMENT_ROOT"];
define("basePath", $basePath);
include(basePath . "/assets/php/loadMeta.php");

?>
<!DOCTYPE html>
<html lang="en" dir="ltr" ng-app="kitarSemula" ng-controller="kitarSemulaAdminCtrl">

<head>
    <?= loadMeta() ?>
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <script src="assets/js/angular/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-sanitize/1.8.0/angular-sanitize.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <script>
        var app = angular.module("kitarSemula", ["ngSanitize"]);
    </script>

</head>

<body class="text-center">
    <!-- <nav class="navigasi-bar">
            <div class="container-fluid">
                <div class="tajuk w-100 container">
                    <img src="assets/img/logo-sekolah.png" alt="Logo Sekolah">
                    <div class="tajuk-laman text-center">
                        <h1>
                            Sistem Kitar Semula
                        </h1>
                        <small class="text-danger bg-dark   ">
                            Sekolah Menengah Kebangsaan Bandar Baru Sungai Buloh
                        </small>

                    </div>
                    <img src="assets/img/logo.png" alt="Logo Sekolah">
                </div>
            </div>
        </nav> -->
    <div class="cari">
        <div class="cari-query" style="position: sticky; left: 100rem; top: 10px;margin: 30px;">
            <input type="text" ng-model="query" placeholder="Cari..." ng-keyup="memuatSenaraiPengguna = true" value="<?= isset($_GET["q"]) ? $_GET["q"] : "" ?>">
        </div>
        <div class="cari-hasil">
            <!-- <div class="hasil" ng-if="!memuatSenaraiPengguna" ng-repeat="pengguna in senaraiPengguna | filter:query">
                {{pengguna.nama}}
            </div> -->
            <div class="cari-memuat" ng-if="memuatSenaraiPengguna">
                {{memuatPengguna()}}
                <i class="fas fa-spinner fa-pulse fa-spin"></i>
                <small>Memuat...</small>
            </div>
            <!-- {{jumlahPengguna}}
            {{jumlahPengguna/25}} -->
            <!-- {{senaraiPenggunaPendek[0]}} -->
            <!-- <div class="hasil" ng-repeat="pengguna in senaraiPenggunaPendek"> -->
            <!-- {{pengguna}} -->
            <hr>
            <div ng-repeat="p in senaraiPenggunaPendek[mukaSurat-1]" ng-if="!memuatSenaraiPengguna">
                <div class="div" ng-if="!p.err">
                    {{$index+1}}--{{p.nama}}
                    <sup>
                        {{p.point}}
                        <i class="fas fa-star"></i>   
                    </sup>
                    --
                </div>
            </div>
            <hr>
            <span ng-if="!memuatSenaraiPengguna" ng-if="!senaraiPengguna[0][0].err">
                Jumlah:{{senaraiPengguna.length}}

            </span>
            <!-- <div ng-repeat="p in senaraiPengguna" ng-if="!memuatSenaraiPengguna">
                <div ng-if="!p.err">
                    Nama: {{p.nama}}
                    <sup>
                        point: {{p.point}}
                        <i class="fas fa-star"></i>
                    </sup>
                </div>
                <div ng-if="p.err">
                    Ralat: {{p.err}}
                </div>
            </div> -->
            <!-- <span ng-if="senaraiPengguna[0].err">
                Ralat: {{senaraiPengguna[0].err}}
            </span> -->
            <!-- </div> -->
            <!-- {{
                senaraiPenggunaPendek[0][0].nama;
            }} -->
            <!-- {{mukaSurat}} -->
        </div>
    </div>
    <script src="admin/app.js"></script>
</body>

</html>