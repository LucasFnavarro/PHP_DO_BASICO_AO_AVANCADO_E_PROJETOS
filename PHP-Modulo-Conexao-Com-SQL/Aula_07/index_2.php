<?php 

$database = "udemy_loja_online";
$username = "user_loja_web";
$password = "97191304";

$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

try {
    $ligacao->exec("INSERT INTO usuarios VALUES(0, 'joao', '111')");
    $ligacao->exec("INSERT INTO usuarios VALUES(0, 'ana', '222')");
    $ligacao->exec("INSERT INTO usuarios VALUES(0, 'carlos', '333')");

    //erro proposital
    $ligacao->exec("INSERT INTO users VALUES(0, 'user4', '444')");
    $ligacao->commit();

}catch(PDOException $err){
    
    $ligacao->rollBack();
    echo "Aconteceu um erro no SQL";
}