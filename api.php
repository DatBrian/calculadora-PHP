<?php

require __DIR__ . '/config/autoload.php';

header('Content-Type: application/json');
$METHOD = $_SERVER['REQUEST_METHOD'];

$total = match ($METHOD) {
    "POST" => calculo::calcular($_POST),
    default => "Método no permitido"
};

header("Location: index.phtml?res=" . urlencode($total));
exit();

?>