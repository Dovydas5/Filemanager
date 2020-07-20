<?php require "../includes/create.php" ?>
<?php require "../includes/delete.php" ?>
<?php
$path = "./";
$files = scandir($path);
echo ('<table class="table">
<th>File</th>
 <th>Actions</th>');
foreach ($files as $file){
        if($file != '.' && $file != '..') {
            echo ('<tr>');
            if(is_dir($path . $file)){
                echo ('<td>'. '<i class="fa fa-folder"></i>' . "<a href='$file'> $file" . '</a></td>');
            }else{
                echo ('<td>' . '<i class="fa fa-file-code-o"></i>'. $file . '</td>');
            }
            if(is_dir($path . $file)){
                echo '<td> </td>';
            }else{
                echo '<td><form id="actions" action="\" method="POST">
                        <input type="hidden" name="delete" value="">
                        <input type="submit" value="Delete"></form>
                        <form id="actions" action="\" method="POST">
                        <input type="hidden" name="download" value="">
                        <input type="submit" value="Download"></form>
                        </form></td>';
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
    <form class="create" action="index.php" method="GET">
        <input class="docname" placeholder="Name of new directory" type="text" id="create" name="create">
        <button class="push" type="submit">Create Directory</button>
<!--        <button class="push"><a href="index.php"></a>HOME</button>-->
    <form class="create" action="index.php" method="GET">
        <input class="docname" placeholder="Name of new file" type="text" name="createfile">
        <button class="push" type="submit">Create File</button>
    </form>

</form>
</body>
</html>