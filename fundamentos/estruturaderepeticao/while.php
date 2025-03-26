<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Função while e if no PHP</title>
    <meta charset="UTF-8" />
</head>
<body>
<?php
$i = 0;
$contP = 0;
$contI = 0;
while($i <= 60){
    if($i % 2 == 0){
        echo "O número $i é par<br>";
        $contP ++;
    }else{
        echo "O número $i é ímpar<br>";
        $contI ++;
    }
    $i = $i + 3;
}
echo "<br><br>";
echo "Quantidade de números pares foi $contP<br>";
echo "Quantidade de números ímpares foi $contI<br>";
?>
</body>
</html>
