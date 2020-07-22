<?php
session_start();
$msg= '';
if (isset($_POST['login']) && !empty($_POST['uid']) && !empty($_POST['pwd'])) {
    if ($_POST['uid'] == 'admin' && $_POST['pwd'] == 'admin') {
        $_SESSION['logged_in'] = true;
        $_SESSION['uid'] = 'admin';
    } else {
        $msg = 'Wrong username or password';
    }
}

if(isset($_GET['action']) and $_GET['action'] == 'logout'){
    session_start();
    unset($_SESSION['uid']);
    unset($_SESSION['pwd']);
    unset($_SESSION['logged_in']);
    header('location:index.php');

}