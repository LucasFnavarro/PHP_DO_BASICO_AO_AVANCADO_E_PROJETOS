<?php

// iniciar a sessão
session_start();

// definindo uma constante de controle
define('CONTROL', true);

// Verificando se algum usuário logado
$usuario_logado = $_SESSION['usuario'] ?? null;

// Verificando qual é a rota na URL
if (empty($usuario_logado)) {
    // Caso o usuário não esteja logado, a rota sempre vai ser login
    $rota = 'login';
} else {
    $rota = $_GET['rota'] ?? 'home';
}

// Se o usuário estiver logado, mas a rota é login, vai redirecionar para a home.
if (!empty($usuario_logado) && $rota == 'login') {
    $rota = 'home';
}

$rotas = [
    'login' => 'login.php',
    'home' => 'home.php',
    'pagina1' => 'pagina1.php',
    'pagina2' => 'pagina2.php',
    'pagina3' => 'pagina3.php',
    'logout' => 'logout.php',
];

if (!key_exists($rota, $rotas)) {
    die('Acesso negado!');
}

require_once $rotas[$rota];
