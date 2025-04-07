<?php
class AlunoController
{
    public static function cadastrarAluno($nome, $matricula, $cpf, $idade, $email)
    {
        include '../model/alunomodel.php';
        $aluno = new AlunoModel($nome, $matricula, $cpf, $idade, $email, $null);
        $aluno->cadastrarAluno($aluno);
    }

    public static function listarAlunos()
    {
        include '../model/alunomodel.php';
        $model = new AlunoModel(null, null, null, null, null, null);
        return $model->listarAlunos();
    }

    public static function resgataPorID($idAluno)
    {
        include '../model/alunomodel.php';
        $model = new AlunoModel(null, null, null, null, null, null);
        return $model->resgataPorID($idAluno);
    }

    public static function alterarAluno($idAluno, $nome, $matricula, $cpf, $idade, $email)
    {
        include '../model/alunomodel.php';
        $aluno = new AlunoModel($nome, $matricula, $cpf, $idade, $email, $idAluno);
        $aluno->alterarAluno($aluno);
    }

    public static function excluirAluno($id)
    {
        include '../model/alunomodel.php';
        $aluno = new AlunoModel(null, null, null, null, null, null);
        $aluno->excluirAluno($id);
    }
}
?>