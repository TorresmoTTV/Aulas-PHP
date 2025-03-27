<?php
// Criando um array associativo para armazenar
// informações sobre alunos e suas notas

    $alunos = array (
        "João" => 8,
        "Maria" => 7,
        "Pedro" => 6,
        "Ana" => 9,
        "Carlos" => 5
    );

// Acessando e exibindo as notas dos alunos

    foreach ($alunos as $aluno => $nota) {
        echo "A nota de " . $aluno . " é " . $nota . "<br>";
    }

// Adicionando um novo aluno e sua nota ao array
    $alunos["Mariana"] = 8.5;
// echo "<br>" .$alunos["Mariana"]. "<br>";

// Exibindo o array após a adição do novo aluno
    echo "O array agora contém: ";
    print_r($alunos);
//echo "<br>";
// $d= getdate();
// print_r($d);
?>