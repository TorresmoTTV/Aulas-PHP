<?php
// Definição da classe Pessoa
class Pessoa {
    protected $nome;
    protected $idade;

    // Construtor
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    // Método para exibir informações da pessoa
    public function exibirInformacoes() {
        echo "Nome: " . $this->nome . ", Idade: " . $this->idade . " anos<br>";
    }
}
?>
