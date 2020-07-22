<?php
session_start();
const INCLUDES_PATH = __DIR__ . '/../public';

require_once "../includes/function.php";

$path = $_GET["path"];
$files = scandir('./' . str_replace('//', '/', $path));

?>
<!doctype html>
<html lang="en">
<head>
    <?php require_once '../includes/header.php'?>
</head>
<body>
<?php require_once '../includes/main.php'?>
</body>
</html>