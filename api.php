<?php

require __DIR__ . '/config/autoload.php';
header('Content-Type: application/json');
$METHOD = $_SERVER['REQUEST_METHOD'];

// $total = match ($METHOD) {
//     "POST" => new total($_POST),
// };

// echo json_encode($total);

echo json_encode($_POST);

if (isset($_POST['calcular'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['op'];

    switch ($operacion) {
        case '+':
            $res = $num1 + $num2;
            break;
        case '-':
            $res = $num1 - $num2;
            break;
        case '*':
            $res = $num1 * $num2;
            break;
        case '/':
            $res = $num1 / $num2;
            break;
        default:
            $res = "sin resultado";
            break;
    }

    header("Location: index.phtml?res=" . urlencode($res));
    exit();
}


?>