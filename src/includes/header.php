<?php
$cwd = getcwd();
if(mkdir($cwd . "/upload", 0777)){
    echo "pavyko";
}else {
    echo "nepavyko";
    }
?>