<?php 

namespace App\Models;

class Calculadora{

    public function soma(int $num1, int $num2):int {
        return $num1 + $num2;
    }

    public function subtracao(int $num1, int $num2):int {
        return $num1 - $num2;
    }

    public function multiplicacao(int $num1, int $num2): int{
        return $num1 * $num2;
    }

    public function divisao(int $num1, int $num2): int|float{
        return $num1 / $num2;
    }
}