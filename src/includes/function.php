<?php
require_once "../includes/delete.php";
require_once "../includes/create.php";
function tableContent(array $files, ?string $path) : string
{
    $content = '';
    foreach ($files as $file){
        if($file != '.' && $file != '..' && $file != '.DS_Store' && $file != 'index.php' && $file != 'style.css') {
            $content .= '<tr>';
            if(is_dir(INCLUDES_PATH . $path . '/' . $file)){
                $content .= '<td colspan="2">'. '<i class="fa fa-folder"></i>' . '<a href="' . '?path=' . $path . '/' . $file . '">'. $file . '</a></td>';
            }else{
                $content .= '<td>' . '<i class="fa fa-file-code-o"></i>'. $file . '</td>';
                $content .= '<td><form id="actions" action="/?path=' . $path . '" method="POST">
                        <input type="hidden" name="path" value="' . $path . '">
                        <input type="hidden" name="delete" value="' . $file . '">
                        <input type="submit" name="submit" value="Delete"></form>
                        <form id="actions" action="\" method="POST">
                        <input type="hidden" name="download" value="">
                        <input type="submit" value="Download"></form>
                        </form></td>';
            }
        }
    }
    return $content;
}

function trimLastDir($path){
$urlTrim = explode('/', $path);
array_pop($urlTrim);
$currentPath = '?path=';
if(count($urlTrim) == 0){
    return $currentPath;
}else{
    $currentPath .=  implode('/', $urlTrim);
}
return $currentPath;
}