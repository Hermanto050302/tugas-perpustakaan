<?php
//function for get base path div
$basePath = 'http://localhost/tugas-perpustakaan/';

function base_path()
{
    global $basePath;
    return $basePath;
}


function asset()
{
    return base_path() . '/assets/';

}

//function for var_dump
function dd($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die();
}

?>
