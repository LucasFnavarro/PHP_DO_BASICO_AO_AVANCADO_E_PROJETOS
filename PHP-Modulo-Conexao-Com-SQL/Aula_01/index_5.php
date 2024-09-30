<?php 

$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = '97191304';

$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

$ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$resultados = $ligacao->query("SELECT");

$ligacao = null;

/*
PDO::ERRMODE_SILENT = Não apresenta erros
PDO::ERRMODE_WARNING = Apresenta avisos.
PDO::ERRMODE_EXCEPTION = Dispara excepções que podem ser captadas no catch
*/