<?php
function loadDefault()
{
    $layout = [
        "title" => "Default Form",
        "form" => [
            "action" => "",
            "method" => "GET"
        ],
        "inlineForm" => false,
        "inputGroup" => true,
        "inputGroupInputs" => [
            0 => [
                "prepend" => [
                    "innerHTML" => '<span class="input-group-text bg-theme text-light m-0  border-0">
                                        <i class="fas fa-user"></i>
                                        Hewwo
                                    </span>'
                ],
                "mid" => [
                    "type" => "text",
                    "name" => "username",
                    "placeholder" => null,

                ],
                "append" => [
                    "text" => null
                ]
            ]
        ]
    ];
    return $layout;
}
// $layout = [];
if (!isset($layout)) {
    $layout = loadDefault();
}
if ($layout) {
    $l = $layout;
}
?>
<div class="ks-form login pt-5 pb-5">
    <form action="<?= $l["form"]["action"] ?>" method="<?= $l["form"]["method"] ?>" class="container">
        <h2><?= $l["title"] ?></h2>
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
        <?php
        if ($l["inputGroup"]) {
            foreach ($layout["inputGroupInputs"] as $ly) {
                if (isset($ly["prepend"])) {
        ?>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <!-- <?= print_r($ly["prepend"]["innerHTML"]) ?> -->
                            <?= $ly["prepend"]["innerHTML"] ?>
                        </div>
                    <?php
                }
                    ?>

                    <input class="form-control" type="<?= $ly["mid"]["type"] ?>" name="<?= $ly["mid"]["name"] ?>" placeholder="<?= $ly["mid"]["placeholder"] ?>" />
                    <div class="input-group-append">

                    </div>
                    </div>
                <?php
            }
        }
        if (isset($l["submit"])) {
                ?>
                <?=$l["submit"]?>
            <?php
        }
            ?>

            <!-- <div class="input-group mb-3">
            <div class="input-group-prepend border border-success border-right-0 p-0 rounded-left">
                <span class="input-group-text bg-theme text-light m-0  border-0">
                    <i class="fas fa-user"></i>
                </span>
            </div>
            <input type="text" name="nama" id="nama" class="form-control border border-success theme" placeholder="Nama.. cth. johnsmith123" />
        </div>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-lock"></i>
                </span>
            </div>
            <input type="password" name="katalaluan" id="katalaluan" placeholder="Katalaluan.." class="form-control" />
        </div>
        <div class="cadangan">
            &middot;
            <a href="daftar/" class="text-dark">Daftar</a>
        </div>
        <button type="submit" class="btn btn-success mt-2">
            Log Masuk
        </button> -->
    </form>
</div>