<?php 

$host = 'localhost';
$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = '97191304';

$ligacao = new PDO("mysql:host=$host;dbname=$database", $username, $password);

$ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$resultados = $ligacao->query("SELECT * FROM produtos")->fetchAll();

foreach($resultados as $resultado)
{
    echo "Produto: " . '<strong>' . $resultado['produto'] . '</strong><br>';
}

$ligacao = null;
