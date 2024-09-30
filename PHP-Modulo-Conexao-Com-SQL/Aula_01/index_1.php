<?php 

// CONECTAR VIA PDO E CONTROLE DE ERROS

// 1 - definir as propeirdades da ligação.
$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = '97191304';

// Efetuar ligação
// Vamos criaruma instancia da classe PDO.
// Necessitamos de 3 parâmetros: o DNS (Data Source Name), onde vamos
// especificar, no minimo, o host e o nome da base de dados
// O segundo parametro é o nome de usuario do MySQL e o terceiro, a password desse usuário
$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

// verificar se a ligação foi estabelecida corretamente
$estado = $ligacao->getAttribute(PDO::ATTR_CONNECTION_STATUS);
echo $estado; // localhost via HTTP

/*
Como podemos ver, conseguimos fazer a ligação à base de dados e estamos em condições de poder fazer as nossas queries.

É importante perceber que existem 3 etapas numa comunição com a base de dados:
1. Conectar com a base de dados;
2. Comunicar com a base de dados;
3. Fechar a ligação para devolver recursos;

A ligação vai ficar aberta até à destruição do objeto PDO().
Para "desligar" a conexão, bastará destruir o objeto $ligacao
*/

$ligacao = null;