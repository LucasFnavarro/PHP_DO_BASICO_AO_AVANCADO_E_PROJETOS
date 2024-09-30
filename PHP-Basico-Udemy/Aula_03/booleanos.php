<?php

// Booleanos

// São variáveis com dois valores possiveis: verdadeiro ou falso

$aprensetar_nome = true;
$apresentar_idade = false;

// os valores são case insensitive
$mostrar = TRUE; // é o mesmo que $mostrar = true;
//$mostrar = 10;

// são variaiveis usadas a marioria das vezes em
// estruturas de controle do fluxo do código:
// ciclos(loops) e instruções condicionais.

// Podemos converter valores em booleanos.
// tradicionalmente, o valor zero(0) é equivalente a false e todos os
// os outros valores são equivalentes a true.

// podemos ainda determinar se uma variável é booleana ou não
var_dump(is_bool($mostrar));