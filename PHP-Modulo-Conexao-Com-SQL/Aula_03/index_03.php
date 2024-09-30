<?php

// OBTER DADOS EM DIFERENTES FORMATOS.

/**
 * Por exemplo, podemos definir uma classe Produtos.,
 * cujas propriedades são as mesmas colunas das tabelas.
 * O resultado pode ser algo do tipo:
 */

class Produtos
{
    public $id;
    public $produto;
    public $preco_unidade;
}

$host = 'localhost';
$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = '97191304';

$ligacao = new PDO("mysql:host=$host;dbname=$database", $username, $password);

$ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$resultado = $ligacao->query("SELECT * FROM produtos")->fetchAll(PDO::FETCH_CLASS, 'Produtos');

$ligacao = null;

echo "<pre>";
print_r($resultado);

/*
 *Os resultados vão vir em formato Product Object.
 O carregamento dos dados para a classe é feito com a instanciação
 implicita de um objeto. Sabemos que uma instanciação permite a execução
 automatica do método __construct 
 */