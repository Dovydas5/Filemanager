<?php
var_dump('trinu');
var_dump($_POST['delete']);
if(isset($_POST['delete'])){
    $filesToDel = INCLUDES_PATH . $_POST["path"] . '/'. $_POST['delete'];
    var_dump($filesToDel);
    if(is_file($filesToDel)){
        if (file_exists($filesToDel)) {
            unlink($filesToDel);
        }
    }
}