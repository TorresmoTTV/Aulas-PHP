<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Impressão de textos</title>
</head>

<body>
    <?php
    /*
    echo - Exibe uma ou mais strings.
    echo não é uma função atualmente
    (construtor da linguagem), então
    não é obrigado usar parênteses
    */

    echo "echo - Exibe uma ou mais strings.
    echo não é uma função atualmente
    (construtor da linguagem), então
    não é obrigado usar parênteses \n";

    $s = "Teste de Impressão utilizando variável";

    echo $s;
    echo "<br> $s";
    echo "<br><br>";

    /*
    print - exibe uma ou mais strings
    As principais diferenças para
    o echo são que o print recebe apenas
    um argumento
    */

    print "Mensagem utilizando o print<br>";
    //printf - Mostra a string formatada
    printf("printf - Mostra uma string formatada");
    $n = 15;
    printf("<br>Mostra o valor formatado em decimal<br>");
    printf("<p>variável n = %d </p>", $n);
    printf("<p>variável n = %08d </p>", $n);
    $d = 10.10;
    printf("<p>variável d = %2f </p>", $d);
    printf("<br><br>");
    printf("Trabalhando com valores booleanos");
    $b = true;
    $f = false;
    echo "<p>True = $b</p>";
    echo "<p>False = $f</p>";
    echo "<br><br>";
    echo "Função var_dump -Mostra informações sobre uma variável";
    var_dump($b);
    var_dump($f);
    var_dump($d);
    var_dump($n);
    ?>
</body>

</html>