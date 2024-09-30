<?php

// configurações.
$host = 'localhost';
$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = '97191304';

try {

    $ligacao = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password);

    // Vai pegar todos os resultados da tabela produtos de uma só vez.
    $resultados = $ligacao->query("SELECT * FROM clientes LIMIT 20")->fetchAll(PDO::FETCH_OBJ);
} catch (PDOException) {
    $erro =  "Erro, não foi encontrado nada na tabela";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <h3>Clientes:</h3>
        <hr>
        <table class="table table-bordered table-striped">
            <thead class="bg-dark text-white">

                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sexo</th>
                    <th>Data Nascimento</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Morada</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($resultados as $cliente): ?>
                    <tr>
                        <td><?= $cliente->id ?></td>
                        <td><?= $cliente->nome ?></td>
                        <td>
                            </th><?= $cliente->sexo == "m" ? 'Masculino' : 'Feminino' ?></td>
                        <td>
                            </th><?= substr($cliente->data_nascimento, 0, 10) ?></th>
                        </td>
                        <td>
                            </th><?= $cliente->email ?></th>
                        </td>
                        <td>
                            </th><?= $cliente->telefone ?></th>
                        </td>
                        <td>
                            </th><?= $cliente->morada ?></th>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <p>Total de Clientes: <strong><?= count($resultados) ?></p></strong>
    </div>

</body>

</html>