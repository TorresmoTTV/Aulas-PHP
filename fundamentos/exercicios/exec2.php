<?php
/*
    Crie uma função que receba dois valores inteiros positivos,
    sendo primeiro menor que o segundo e informe a soma entre os
    números pares que estão entre o primeiro e o segundo número.
*/

    function somaPares($num1, $num2)
    {
        if ($num1 < 0 || $num2 < 0 || $num1 >= $num2) {
            return "Os valores devem ser positivos e o primeiro menor que o segundo.";
        }
    
        $soma = 0;
    
        for ($i = $num1 + 1; $i < $num2; $i++) {
            if ($i % 2 == 0) {
                $soma += $i;
            }
        }
    
        return "A soma dos números pares entre $ini e $fim é $soma.";
    }

    echo somaPares(2,10);
?>