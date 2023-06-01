<?php

require __DIR__ . '/traits.php';
class calculo
{
    use validaciones;

    public static function calcular($data)
    {   
        $res = isset($data['calcular']) && self::validarOperandos($data['num1'], $data['num2'])
            ? self::operaciones($data['num1'], $data['num2'], $data['op'])
            : null;

        return $res;
    }

    private static function operaciones($num1, $num2, $operacion)
    {   

        ($operacion == "/")
        ? $res = (self::validarDivisores($num2)
        ? ($num1 / $num2) : "Indeterminación"): 

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