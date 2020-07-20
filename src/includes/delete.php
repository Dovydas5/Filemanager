<?php
if(isset($_POST['delete'])){
    $filesToDel = INCLUDES_PATH . $_POST["path"] . '/'. $_POST['delete'];
    if(is_file($filesToDel)){
        if (file_exists($filesToDel)) {
            unlink($filesToDel);
        }
    }
}