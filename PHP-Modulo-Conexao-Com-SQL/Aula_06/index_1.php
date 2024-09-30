<?php

// SQL INJECTION - O PROBLEMA DE SEGURANÇA 


?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index_2.php" method="POST">
        
        <label for="name">Nome</label>
        <input type="text" name="username"><br>

        <label for="">senha</label>
        <input type="text" name="passwrd"><br>


        <button type="submit">Entrar</button>
    </form>

</body>

</html>