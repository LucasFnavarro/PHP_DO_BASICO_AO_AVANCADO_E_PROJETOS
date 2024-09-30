<?php

// configurações.
$host = 'localhost';
$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = '97191304';

$ligacao = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password);

$ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Vai pegar todos os resultados da tabela produtos de uma só vez.
$resultados = $ligacao->query("SELECT * FROM produtos")->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (count($resultados) == 0) : ?>
        <p>Não foi encontrado nenhum dado.</p>
    <?php else :  ?>
        <div>
            <?php foreach ($resultados as $resultado) : ?>
                <p><?= $resultado->produto . ' - R$' .  $resultado->preco_unidade ?></p>
            <?php endforeach; ?>
        <?php endif; ?>
        </div>
</body>

</html>