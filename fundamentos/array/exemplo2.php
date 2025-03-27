<?php
echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<title>Tabela PHP</title>";
echo "</head>";
echo "<body>";
echo "<h1>Tabela Gerada com PHP</h1>";
echo "<table border='1'>";

// Exemplo de dados
$pessoas = array(
    array('João', 30),
    array('Maria', 25),
    array('Carlos', 40)
);

// Laço para gerar linhas da tabela
foreach ($pessoas as $pessoa) {
    echo "<tr>";
    echo "<td>" . $pessoa[0] . "</td>";
    echo "<td>" . $pessoa[1] . "</td>";
    echo "</tr>";
}

echo "</table>";
echo "</body>";
echo "</html>";
?>
