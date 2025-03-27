<?php
echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<title>Lista de Itens PHP</title>";
echo "</head>";
echo "<body>";
echo "<h1>Lista de Itens Gerada com PHP</h1>";
echo "<ul>";

$itens = array("Maçã", "Banana", "Laranja", "Uva");

foreach ($itens as $item) {
    echo "<li>" . $item . "</li>";
}

echo "</ul>";
echo "</body>";
echo "</html>";
?>
