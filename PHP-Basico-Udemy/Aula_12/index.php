<?php 
/*
session_name('minha_sessao');
*/

// todos os scripts devem ter o inicio da sessão
// antes de qualquer output do PHP
session_set_cookie_params(180);
session_start();


// o valor de $nome e $apelido vai ser definido tendo
// em atenção a existencia ou não das variaveis na super global $_SESSION
$nome = !empty($_SESSION['nome']) ? $_SESSION['nome'] : '-';
$apelido = !empty($_SESSION['apelido']) ? $_SESSION['apelido']: '-';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once("nav.php");?>
    <hr>
    <h2>Exercicio com sessões de PHP</h2>

    <h3>Valor da variavel 'nome':</h3>
    <h1><?= $nome ?></h1>
    <hr>
    <h3>Valor da variavel 'apelido':</h3>
    <h1><?= $apelido ?></h1>
    
</body>
</html>