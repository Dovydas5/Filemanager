<?php require "../back/create.php" ?>
<?php require "../back/delete.php" ?>
<?php
$path = "./";
$files = scandir($path);
echo ('<table class="table"><th>Type</th><th>Name</th><th>Actions</th>');
foreach ($files as $file){
        if($file != '.' && $file != '..') {
            echo ('<tr>');
            if(is_dir($path . $file)){
                echo "<td>Directory</td>";
            }else{
                echo "<td>File</td>";
            }
            echo ( '<td>' . "<a href='$file'> $file" . '</a></td>');
            if(!is_dir($path . $files)){
                echo '<td><form action="" method="POST"><input name="delete" type="submit" value="Delete"></form></td>';
            }else{
                echo "";
            }
        }
}
    echo ('</table>');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
<form class="create" action="index.php" method="GET">
    <input class="docname" placeholder="Name of new directory" type="text" id="create" name="create">
    <button class="push" type="submit">Submit</button>
    <button class="push"><a href="index.php"></a>HOME</button>

</form>
</body>
</html>