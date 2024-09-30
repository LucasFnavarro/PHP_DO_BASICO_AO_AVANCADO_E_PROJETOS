<?php 

// OBTER RESULTADOS COM EXECUÇÃO DE QUERIES

// configurações.
$host = 'localhost';
$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = '97191304';

$ligacao = new PDO("mysql:host=$host;dbname=$database", $username, $password);

$ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Vai pegar todos os resultados da tabela produtos de uma só vez.
$resultados = $ligacao->query("SELECT * FROM produtos")->fetchAll();


echo "<pre>";
print_r($resultados);