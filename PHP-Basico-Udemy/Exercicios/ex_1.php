<?php

$produtos = ['arroz', 'feijao', 'macarrao'];

$produtos[] = 'limão';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>

<ul>
    <li><?= $produtos[0]; ?></li>
    <li><?= $produtos[1]; ?></li>
    <li><?= $produtos[2]; ?></li>
</ul>

</body>
</html>