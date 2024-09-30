<?php

// ARRAYS
// É uma variável que funciona como uma coleção de dados.

$nome1 = "lucas";
$nome2=  "ana";
$nome3 = "carlos";

$nomes = array("joao", "ana", "carlos");
// ou
$nomes = ["joao", "ana", "carlos"];

// como aceder a cada elemento
echo $nomes[0]; // primeiro nome da coleção
echo '<br>';
echo $nomes[2]; // terceiro nome da coleção
echo '<br>';

// No caso anterior, as chaves são atribuídas automaticamente.
// Podemos definir as nossas própias chaves.

$nomes = [ 
    10 => "lucas",
    20 => "ana",
    30 => "carlos",
];

echo $nomes[20];

// se tentarmos buscar por uma chave que não existe, ele retorna um erro.

//echo $nomes[100];
echo '<br>';

// para evitar o aviso, podemos verificar se o item existe
echo 'Verificar se existe o item na lista de arrays.' . '<br>';
var_dump(isset($nomes[200]));