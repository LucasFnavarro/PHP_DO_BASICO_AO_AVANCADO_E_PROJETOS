<?php


class Produtos
{
    public $id;
    public $produto;
    public $preco_unidade;
    public $preco_de_uma_duzia;

    public function __construct()
    {
        $this->preco_de_uma_duzia = $this->preco_unidade * 12;
    }
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
