<?php

// OPERADORES LÓGICOS

// &&       ||      !       and     or

// Estes operadores servem para combinar várias condições
// na análise de valores. Podemos usá-los para criar
// um conjunto de condições mais complexas.

// -----------------------------------------------------
// && - vai devolver true SOMENTE se TODAS as condições forem verdadeiras

$x = true;
$y = true;
var_dump($x && $y); // bool(true) se fosse um TRUE e outro FALSE o resultado iria ser bool(false)
echo '<br>';

$x = 20;
$y = 10;
var_dump($x > 10 && $y < 20); //bool(true);
echo '<br>';
var_dump($x > 100 && $y < 20); //bool(false);
echo '<br>';

// -----------------------------------------------------
// || vai devovler TRUE se pelo menos UMA condição for verdadeira

$a = true;
$b = false;
var_dump($x || $y);
echo '<br>';

$x = 20;
$y = 15;
var_dump($x < 30 || $y < 5); // bool(true)
echo '<br>';

// -----------------------------------------------------
// ! operador de negação

$nome = "lucas";
var_dump(!is_string($nome)); // bool(false) - $nome é uma string, mas estamos negando ser uma "string"!

// -----------------------------------------------------
// o operador 'and' e 'or' tem um comportamento igual ao && e ||
// com ligeiras diferenças
// preferencialmente usar o && e ||

// O PHP implementa uma filosofia de short circuit evaluation   
// Exemplo:
var_dump(true || false);

// vai avaliar o primeiro true.
// quando encontra o operador || (ou), verifica que já tem a informação
// suficiente para definir que a condição é verdadeira, logo, não analisa
// o resto da condição.
