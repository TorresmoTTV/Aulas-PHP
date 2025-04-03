<?php
    switch ($_REQUEST["op"])
    {
        case "Incluir":
            incluir();break;
        case "Alterar":
            alterar();break;
        case "Excluir":
            excluir();break;
        case "Listar":
            listar();break;
        default:
            echo"não encontrou chave";
    }
?>