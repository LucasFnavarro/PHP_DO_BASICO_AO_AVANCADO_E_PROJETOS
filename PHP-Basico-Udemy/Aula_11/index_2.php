<?php 

// INCLUDE

include 'script.php'; 
include 'outro.php';    // Não existe ele vai exibir um erro, 
include 'script.php';   // se fosse require iria exibir o erro e parar por aqui.

/*
Diferença entre include e require
inlcude - mostra um aviso se o script não existir e permite continuar a execução.
require - mostra um erro se o script não existe e interrompe a execução
*/