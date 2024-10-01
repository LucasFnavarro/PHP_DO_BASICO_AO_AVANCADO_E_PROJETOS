<?php

use sys4soft\Database;

// importar a class Database e configurações
require_once('Database.php');


// instanciação de objeto Database
$config = [
    'host' => 'localhost',
    'database' => 'os_meus_clientes',
    'username' => 'user_meus_clientes',
    'password' => 'luBExu6oD5nI57LEf3vohOn4kArA8o'
];

$database = new Database($config);

// parametros
$params = [
    ':nome' => $_POST['text_nome'],
    ':email' => $_POST['text_email']
];


// inserir os dados do cliente
$result = $database->execute_non_query("INSERT INTO clientes(nome, email, created_at) VALUES(:nome, :email, NOW())", $params);

echo '<pre>';
print_r($result);

// voltar ao formulário automaticamente
header('Location: formulario.php');