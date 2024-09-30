<?php

// definir uma constante.
define('nome', 'valor');

// por convenção, as constantes são definidas com letras maiúsculas.
define('TAXA_FIXA', 10);
define('APRESENTAR_DADOS', false);

// apresentar o valor de uma constante
echo TAXA_FIXA; // 10
echo "<br>";

$preco_inicial = 500;
$preco_final = $preco_inicial + TAXA_FIXA;
echo $preco_final; // 510
echo "<br>";

// Constantes não altera o valor.

// Podemos usar o const, mas não é o comum a ser usado no PHP.
const NOME = "Lucas";
echo NOME;
