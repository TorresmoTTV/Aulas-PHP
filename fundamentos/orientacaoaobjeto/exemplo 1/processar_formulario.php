<?php
// Incluindo a classe Pessoa
include_once 'pessoa.php';

// Obtendo dados do formulário
$nome = $_POST["nome"];
$idade = $_POST["idade"];

// Criando uma instância da classe Pessoa
$pessoa = new Pessoa($nome, $idade);

// Exibindo informações da pessoa
$pessoa->exibirInfo();
?>
