<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Cotaçôes</title>
</head>

<body>
    <?php
    define("dolar", 5.71);
    define("peso", 0.0053);
    define("libras", 7.39);
    define("euro", 6.16);
    define("iene", 0.038);

    $valor = 10.00;

    echo "Valor em Reais: R$ " . number_format($valor, 2, ',', '.') . "<br>";
    echo "Convertido para Dólares: US$ " . number_format($valor / dolar, 2, ',', '.') . "<br>";
    echo "Convertido para Pesos Argentino: $ " . number_format($valor / peso, 2, ',', '.') . "<br>";
    echo "Convertido para Libras: £ " . number_format($valor / libras, 2, ',', '.') . "<br>";
    echo "Convertido para Euro: € " . number_format($valor / euro, 2, ',', '.') . "<br>";
    echo "Convertido para Iene: ¥ " . number_format($valor / iene, 2, ',', '.') . "<br>";

    ?>
</body>

</html>