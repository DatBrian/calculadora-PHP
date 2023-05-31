<?php

header('Content-Type: application/json');
$METHOD = $_SERVER['REQUEST_METHOD'];

function myAutoload($class){
    require __DIR__ . '/config/methods.php';
}

spl_autoload_register('myAutoload');

$total = match($METHOD){
    "POST" => new total($_POST),
};

echo json_encode($total);

?>