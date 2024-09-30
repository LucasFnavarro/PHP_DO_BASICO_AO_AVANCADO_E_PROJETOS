<?php

// configurações.
$host = 'localhost';
$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = '97191304';

try {

    $ligacao = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password);

    // Vai pegar todos os resultados da tabela produtos de uma só vez.
    $resultados = $ligacao->query("SELECT * FROM produtos WHERE id > 100")->fetchAll(PDO::FETCH_OBJ);
} catch (PDOException) {
    $erro =  "Erro, não foi encontrado nada na tabela";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (!empty($erro)) : ?>
        <p><?= $erro ?></p>
    <?php else : ?>
        <?php if (count($resultados) == 0) : ?>
            <p>Não foi encontrado nenhum resultado.</p>
        <?php else : ?>
            <?php foreach ($resultados as $resultado) : ?>
                <p><?= $resultado->produto ?> </p>
                <p><?= $resultado->preco_unidade ?></p>

            <?php endforeach; ?>
        <?php endif; ?>
    <?php endif; ?>
    </div>
</body>

</html>