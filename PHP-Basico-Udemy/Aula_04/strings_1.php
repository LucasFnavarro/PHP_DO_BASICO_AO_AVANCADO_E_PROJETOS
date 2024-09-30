<?php

// STRINGS 
// ----------------------------------------

$nome = "Lucas";
$apelido = 'Lucao';
// As duas variáveis são do tipo string

// Diferentes tipos de concatenar as variáveis em uma string.
$apresentacao = "O meu nome é $nome e o apelido é $apelido";

// Podemos melhorar a leitura com a seguinte equivalência.
$apresentacao = "O meu nome é {$nome} e o apelido é {$apelido}";

// -----------------------------------------
// Concatenação de strings
$nome_completo = $nome . ' ' . $apelido;
echo $nome_completo . '<br>';

// -----------------------------------------
// COMO OBTER A PRIMEIRA LETRA DO NOME
echo $nome[0];

// -----------------------------------------
// para obter a terceira letra
echo $nome[2];

// L u c a s
// 0 1 2 3 4
