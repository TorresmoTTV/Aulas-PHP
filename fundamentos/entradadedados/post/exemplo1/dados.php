<?php
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$cpf = $_POST['cpf'];
$cidade = $_POST['cidade'];

echo "Dados enviados com sucesso!<br>";
echo "Seja bem-vindo sr(a) $nome, ";
echo "sua idade é $idade anos, ";
echo "seu cpf é $cpf, ";
echo "sua cidade é $cidade.";
?>
