<?php
if(isset($_GET['delete'])){
    $filesToDel = INCLUDES_PATH . $_GET["path"] . '/'. $_GET['delete'];
    if(is_file($filesToDel)){
        if (file_exists($filesToDel)) {
            unlink($filesToDel);
        }
    }
}