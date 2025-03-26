<?php
    $d = getdate();

    switch ($d['wday']) {
        case 0:
            echo "Domingo sonolento";
                break;
        case 1:
            echo "Sorria, hoje é Segunda-feira... :(";
            break;
        case 2:
            echo "Hoje é Terça-Feira e está tudo bem...";
            break;
        case 3:
            echo "Quarta-feira vou matar a aula para ver o jogo";
            break;
        case 4:
            echo "Quinta-feira... chega logo sexta";
            break;
        case 5:
            echo "Sexta-feira, sua linda... finalmente você chegou!!!";
            break;
        case 6:
            echo "Sábado, quem disse que é dia de faxina????";
            break;
        default:
            echo "Erro na matrix";
    }
?>
