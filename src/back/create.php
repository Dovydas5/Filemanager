<?php

    if (isset($_GET["create"])) {
        if ($_GET["create"] != "") {
            $file = './' . $_GET["create"];
            if (!is_dir($file)) mkdir($file, 0777, true);
        }
    };