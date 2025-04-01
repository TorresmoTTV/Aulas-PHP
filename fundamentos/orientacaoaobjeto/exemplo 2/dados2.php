<?php
include_once ("Calcular.php");
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$operacao = $_POST['operacao'];

$calc = new Calcular();
$calc->setValor1($valor1);
$calc->setValor2($valor2);

switch($operacao){
    case '+':
        echo "Soma dos valores: " . $calc->soma();
        break;
    case '-':
        echo "Subtração dos valores: " . $calc->subtracao();
        break;
    case '*':
        echo "Multiplicação dos valores: " . $calc->multi();
        break;
    case '/':
        echo "Divisão dos valores: " . $calc->div();
        break;
    default:
        echo "Erro na operação!";
        break;
}
?>
