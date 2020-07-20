<?php
const INCLUDES_PATH = __DIR__ . '/../public';

require "../includes/delete.php";
require "../includes/create.php";
require_once "../includes/function.php";

$path = $_GET["path"];
$files = scandir('./' . str_replace('//', '/', $path));

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
<table class="table">
    <th>File</th>
    <th>Actions</th>
<?php echo tableContent($files, $path); ?>
</table>
<form class="create" action="index.php" method="GET">
    <input type="hidden" name="path" value="<?php echo $path ?>"/>
    <input class="docname" placeholder="Name of new directory" type="text" id="create" name="create">
    <button class="push" type="submit">Create Directory</button>
            <button class="push"><a href="index.php"></a>HOME</button>
    <form class="create" action="index.php" method="GET">
        <input class="docname" placeholder="Name of new file" type="text" name="createfile">
        <button class="push" type="submit">Create File</button>
    </form>
    <a href="<?php echo trimLastDir($path)?>" class="push">Back</a>
    

</form>
</body>
</html>