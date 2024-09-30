<?php
defined('CONTROL') or die('Acesso negado!');

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Verifica se o usuário e senha foi submetido
    $usuario = $_POST['usuario'] ?? null;
    $password = $_POST['senha'] ?? null;
    $erro = null;

    if (empty($usuario) || empty($password)) {
        $erro = 'Usuário e senha são obrigatórios';
    }

    // Verifica se o usuário e a senha é valido (match)
    if (empty($erro)) {
        $usuarios = require_once __DIR__ . '/../inc/usuarios.php';

        foreach ($usuarios as $user) {
            if ($user['usuario'] == $usuario && password_verify($password, $user['senha'])) {

                // Efetua o login.
                $_SESSION['usuario'] = $usuario;

                // Voltar para a página inicial
                header('location: index.php?rota=home');
            }
        }
        // Login inválido
        $erro = 'Usuário e/ou senha inválidos';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="index.php?rota=login" method="post">
        <h3>Login de usuário</h3>

        <div>
            <label for="usuario">Usuário</label>
            <input type="email" name="usuario" id="usuario">
        </div>

        <div>
            <label for="senha">Password</label>
            <input type="password" name="senha" id="senha">
        </div>

        <div>
            <button type="submit">Entrar</button>
        </div>
    </form>
    <br>
    <?php if (!empty($erro)) : ?>
        <p style="color: red"><strong><?= $erro ?></strong></p>
    <?php endif; ?>
</body>

</html>