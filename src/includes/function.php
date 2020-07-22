<?php
require_once "../includes/delete.php";
require_once "../includes/create.php";
require_once "../includes/download.php";
require_once "../includes/auth.php";
require_once "../includes/upload.php";
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
                $content .= '<td><form id="actions" action="/?path=' . $path . '" method="GET">
                        <input type="hidden" name="path" value="' . $path . '">
                        <input type="hidden" name="delete" value="' . $file . '">
                        <input type="submit" name="submit" value="Delete"></form>
                        <form id="actions" action="/?path=' . $path . '" method="GET">
                        <input type="hidden" name="download" value="' . $file . '">
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

function loginSession($msg){

    if(!$_SESSION['logged_in'] == true){
        print ('<div class="whitebox">');
        print  '<div class="button-box">';
        print  '<div id="btn"></div>';
        print '<button type="button" class="push-btn">Registration/Login</button>';
        print  '</div>';

        print('<form action ="" id="register" class="input-group" method="post">');
        print('<h4>' . $msg . '</h4>');
        print('<input type= "text" class="input-field" name= "uid" placeholder="admin" required autofocus></br>');
        print('<input type= "password" class="input-field" name="pwd" placeholder="admin" required>');
        print('<button class="submit-btn" type= "submit" name="login">Login</button>');
        print('</form>');
        die();
    }

    print' </div>';
    print'</div>';
}

