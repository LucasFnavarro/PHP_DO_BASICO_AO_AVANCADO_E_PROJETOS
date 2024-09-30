<?php 

$database = "udemy_loja_online";
$usuarios = "user_loja_web";
$password = "97191304";

$conexao = new PDO("host:localhost;dbname=$database;", $username, $password);

try {
    $ligacao->exec("INSERT INTO usuarios VALUES(0, 'user1', '111')");
    $ligacao->exec("INSERT INTO usuarios VALUES(0, 'user2', '222')");
    $ligacao->exec("INSERT INTO usuarios VALUES(0, 'user3', '333')");

    //erro proposital
    $ligacao->exec("INSERT INTO users VALUES(0, 'user3', '333')");

}catch(PDOException $err){
    echo "Aconteceu um erro no SQL";
}