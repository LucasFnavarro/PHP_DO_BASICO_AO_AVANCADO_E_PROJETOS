<?php 

$host = 'localhost';
$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = '97191304';


$ligacao = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password);

$parametros = [
    ':u' => $_POST['username'],
    ':p' => $_POST['passwrd']
];

$comando = $ligacao->prepare("SELECT * FROM usuarios WHERE username = :u AND passwrd = :p");
$comando->execute($parametros);
$resultado = $comando->fetchAll(PDO::FETCH_OBJ);


echo "<pre>";
print_r($resultado);

if(count($resultado) == 0){
    echo 'LOGIN INVÁLIDO';
}else {
    echo 'LOGADO COM SUCESSO';
}


// agora passando ' or ''=' no campo de password
// não vamos ter o problema anterior.