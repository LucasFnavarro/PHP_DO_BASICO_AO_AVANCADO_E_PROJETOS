<?php

// OPERADORES DE INCREMENTO E DECREMENTO
// ++     -- 

// Permite incrementar ou decrementar um valor em uma unidade
// Pode ser usado como pré-incremento ou pós-incremento.

$x = 10;

// pós-incremento e pós-decremento
$x++;
$x--;

// pré-incremento e pré-decremento
++$x;
--$x;

// Como funciona os resultados?

$x = 100;
echo $x++; // Vai apresentar o valor 100 e passar a variavel para 101
echo $x--; // Vai aprensetar o valor 101 e passar a variavel para 100

echo ++$x; // Vai passar a variavel para 101 e apresentar o 101;
echo --$x; // Vai passar a variavel para 100 e apresentar o 100;


// Este operador deve ser usado apenas nos valores númericos;
