<?php

class Pessoa {
    // Atributos
    private $nome;
    private $idade;

    // Construtor
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    // Método para exibir informações da pessoa
    public function exibirInfo() {
        echo "Informações da Pessoa:<br>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . " anos<br>";
    }
}
?>
