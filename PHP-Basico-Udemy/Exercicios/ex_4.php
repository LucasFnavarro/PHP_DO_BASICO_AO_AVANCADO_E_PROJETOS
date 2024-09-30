<?php

$lojas = [
    'Londrina' => 'lisboa@gmail.com',
    'Maringa' => 'maringa@gmail.com',
    'São Paulo' => 'saopaulo@gmail.com'
];

$cidade = 'Londrina';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>

<body>
    <?php if (key_exists($cidade, $lojas)): ?>
        <h3><?= $cidade ?>
            <p><?= $lojas[$cidade] ?></p>
        <?php else: ?>
            <p>Não existe uma loja nesta cidade.</p>
        <?php endif ?>
</body>

</html>