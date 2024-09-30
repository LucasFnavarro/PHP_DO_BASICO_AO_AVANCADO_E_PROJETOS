<?php 

// OBTER RESULTADOS COM EXECUÇÃO DE QUERIES

/*
Os métodos fectch() e fetchAll() são diferentes no seguinte aspecto:
    fetch() vai buscar o próximo elemento da coleção de dados.
    fetchAll() vai buscar todos os elementos da coleção de dados de uma só vez.
*/


// configurações
$host = 'localhost';
$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = '97191304';

// ligação
$ligacao = new PDO("mysql:host=$host;dbname=$database", $username, $password);

$ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$resultados = $ligacao->query("SELECT * FROM produtos")->fetch();


echo "<pre>";
print_r($resultados);