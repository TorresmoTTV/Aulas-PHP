<?php
class AlunoModel
{
    protected $nome;
    protected $matricula;
    protected $cpf;
    protected $idade;
    protected $email;
    protected $id;


    function __construct($nome, $matricula, $cpf, $idade, $email, $id)
    {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->cpf = $cpf;
        $this->idade = $idade;
        $this->email = $email;
        $this->id = $id;

    }

    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param $matricula
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param $idade
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function cadastrarAluno(AlunoModel $aluno)
    {
        include_once '../DAO/alunodao.php';
        $aluno = new AlunoDAO();
        $aluno->cadastrarAluno($this);
    }

    public function listarAlunos()
    {
        include '../DAO/alunodao.php';
        $dao = new AlunoDAO(null);
        return $dao->listarAlunos();
    }

    public function resgataPorID($idAluno)
    {
        include '../DAO/alunodao.php';
        $model = new AlunoDAO(null);
        return $model->resgatarAlunosPorId($idAluno);
    }

    public function alterarAluno(AlunoModel $aluno)
    {
        include_once '../DAO/alunodao.php';
        $aluno = new AlunoDAO();
        $aluno->alterarAluno($this);
    }

    public function excluirAluno($idAluno)
    {
        include_once '../DAO/alunodao.php';
        $aluno = new AlunoDAO();
        $aluno->excluirAluno($idAluno);
    }
}

?>