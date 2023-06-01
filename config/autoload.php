<?php

function myAutoload($class)
{
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = __DIR__ . DIRECTORY_SEPARATOR . $class . '.php';

    file_exists($file) ? require_once $file : null;
}

spl_autoload_register('myAutoload');

?>