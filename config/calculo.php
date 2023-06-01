<?php

require __DIR__ . '/traits.php';
class calculo
{
    use validaciones;
    
    public static function calcular($data)
    {

        $res = isset($data['calcular'])
            ? self::operaciones($data['num1'], $data['num2'], $data['op'])
            : null;

        return $res;
    }

    private static function operaciones($num1, $num2, $operacion)
    {

        $res =
            match ($operacion) {
                "+" => $num1 + $num2,
                "--" => $num1 - $num2,
                "*" => $num1 * $num2,
                "/" => $num1 / $num2,
                default => "Operación no válida"
            };

        return $res;
    }
}

?>