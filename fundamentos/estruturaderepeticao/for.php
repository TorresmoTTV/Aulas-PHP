<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Função for e if no PHP</title>
</head>

<body>
    <?php
    for ($i = 0; $i <= 30; $i = $i + 3) {
        if ($i % 2 == 0) {
            echo "O número $i é par!<br>";
        } else {
            echo "O número $i é ímpar!<br>";
        }
    }
    ?>
</body>

</html>