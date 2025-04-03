<?php
class Conexao {
    // Atributos
    private $host = 'localhost:3306';
    private $db_name = 'escola';
    private $useranme = 'root';
    private $password = '';
    public $conn;

    public function fazConexao()
    {
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}",
                $this->useranme, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erro de Conexão: ".$e->getMessage();
        }
        return $this->conn;
    }
}
?>