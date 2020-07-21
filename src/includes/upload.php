<?php
if(isset($_FILES['upload'])){
    $errors= array();
    $file_name = $_FILES['upload']['name'];
    $file_size = $_FILES['upload']['size'];
    $file_tmp = $_FILES['upload']['tmp_name'];
    $file_type = $_FILES['upload']['type'];

    if($file_size > 2097152) {
        $errors[] = 'File size must be below 2 MB';
    }

    if(empty($errors)==true) {
        move_uploaded_file($file_tmp, INCLUDES_PATH . $_GET["path"] . '/'. $file_name);
    }
    else{
        print_r($errors);
    }
}
