<?php

trait validaciones
{
    public static function validarOperacion($operacion)
    {
        return in_array($operacion, ['+', '-', '*', '/']);
    }

    public static function validarOperandos($num1, $num2)
    {
        return is_numeric($num1) && is_numeric($num2);
    }

    public static function validarDivisores($num)
    {
        return ($num != "0") ? true : false;
    }

    public static function validarDatosPresentes($data, $keys)
    {
        foreach ($keys as $key) {
            return (!isset($data[$key])) ? false : null;
        }
        return true;
    }
}

?>