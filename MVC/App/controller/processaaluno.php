<?php
switch ($_REQUEST["op"]) {
    case "Incluir":
        incluir();
        break;
    case "Alterar":
        alterar();
        break;
    case "Excluir":
        excluir();
        break;
    case "Listar":
        listar();
        break;
    default:
        echo "não encontrou chave";
}

function incluir()
{
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    $cpf = $_POST["cpf"];
    $idade = $_POST["idade"];
    $email = $_POST["email"];
    include 'alunocontroller.php';
    $contr = new AlunoController();
    $contr->cadastrarAluno($nome, $matricula, $cpf, $idade, $email);
}

function alterar()
{
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $cpf = $_POST['cpf'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $id = $_POST['idAluno'];
    include 'alunocontroller.php';
    $contr = new AlunoController();
    $contr->alterarAluno($id, $nome, $matricula, $cpf, $idade, $email);
}

function excluir()
{
    $idAluno = $_REQUEST['idAluno'];
    include 'alunocontroller.php';
    $contr = new AlunoController();
    $contr->excluirAluno($idAluno);
}

function listar()
{
    include '../view/formlistaraluno.php';
}
?>