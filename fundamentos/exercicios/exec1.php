<?php
/*
    Crie uma função que receba dois valores inteiros positivos,
    sendo primeiro menor que o segundo e informe quantos números pares
    estão entre o primeiro e o segundo número.
    */

function contarPares($ini, $fim)
{
    if ($ini < 0 || $fim < 0 || $ini >= $fim) {
        return "Os valores devem ser positivos e o primeiro menor que o segundo.";
    }

    $cont = 0;

    for ($i = $ini + 1; $i < $fim; $i++) {
        $cont++;
    }

    return "Entre os pares $ini e $fim, existem $cont números pares.";
}

?>