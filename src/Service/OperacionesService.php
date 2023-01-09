<?php

namespace App\Service;

class OperacionesService
{
    public function operar($operacion, $op1, $op2)
    {
        $result = false;

        if(($op1 !== null && $op1 !== '') && ($op2 !== null && $op2 !== '') ){
            switch ($operacion) {
                case "add":
                    $result = (int)$op1 + (int)$op2;
                    break;
                case "subtract":
                    $result = (int)$op1 - (int)$op2;
                    break;
                case "multiply":
                    $result = (int)$op1 * (int)$op2;
                    break;
                case "divide":
                    $result = (int)$op1 / (int)$op2;
                    break;
                default:
                    $result = false;
            }
            
        }

        return $result;
    }

}