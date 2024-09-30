<?php 

$host = 'localhost';
$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = '97191304';


$ligacao = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password);

$username = $_POST['username'];
$passwrd = $_POST['passwrd'];

$sql = "SELECT * FROM usuarios WHERE username = '$username' AND passwrd = '$passwrd'";

$resultado = $ligacao->query($sql)->fetchAll(PDO::FETCH_OBJ);

$ligacao = null;

echo "<pre>";
print_r($resultado);

if(count($resultado) == 0){
    echo 'LOGIN INVÁLIDO';
}else {
    echo 'LOGADO COM SUCESSO';
}
// echo "<pre>";
echo "<br>" . $sql;