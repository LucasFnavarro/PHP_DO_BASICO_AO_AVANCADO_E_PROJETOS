<?php

$database = "udemy_loja_online";
$username = "user_loja_web";
$password = "97191304";

try {
    $ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

    $estado = $ligacao->getAttribute(PDO::ATTR_CONNECTION_STATUS);
    
    echo "Conexão estabelecida com sucesso.";

    $ligacao = null;
} catch (PDOException $err) {
    echo "ERRO" . $err->getMessage();
}
