<?php

// Configuração com o BD
$database = "udemy_loja_online";
$username = "user_loja_web";
$password = "97191304";

try {
    // Estabelece a conexão
    $ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);


    $ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $estado = $ligacao->getAttribute(PDO::ATTR_CONNECTION_STATUS);
    echo $estado;

    $ligacao = null;
} catch (PDOException $err) {

    echo "<pre>";
    print_r($err);

    echo "<hr>";
    print_r($err->errorInfo);
}
