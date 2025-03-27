<?php
/*
    Crie uma função que receba dois valores inteiros positivos,
    sendo primeiro menor que o segundo e informe a média aritmética
    entre os números pares queestão entre o primeiro e o segundo número.
*/

    function mediaPares($num1, $num2) 
    {
        if ($num1 < 0 || $num2 < 0 || $num1 >= $num2) {
            return "Os valores devem ser positivos e o primeiro menor que o segundo.";
        }

        $cont = 0;
        $soma = 0;
    
        for ($i = $num1 + 1; $i < $num2; $i++) {
            if ($i % 2 == 0) {
                $cont++;
                $soma += $i;
            }
        }

        if ($cont == 0) {
            return "Não há números pares entre $num1 e $num2.";
        }

        $media = $soma / $cont;

        return "A média dos números pares entre $num1 e $num2 é $media.";
    }
    
    echo mediaPares(2,10);
?>