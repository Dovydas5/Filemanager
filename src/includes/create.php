<?php

    if (isset($_GET["create"])) {
        if ($_GET["create"] != "") {
            $file = INCLUDES_PATH . $_GET['path'] . '/' . $_GET["create"];
            if (!is_dir($file)) mkdir($file, 0777, true);
        }
    };
if (isset($_GET["createfile"])) {
    if ($_GET["createfile"] != "") {
        $file = INCLUDES_PATH . $_GET['path'] . '/' . $_GET["createfile"];
        if (!fopen($file, 'w')) fopen($file, 0777, true);
    }
};