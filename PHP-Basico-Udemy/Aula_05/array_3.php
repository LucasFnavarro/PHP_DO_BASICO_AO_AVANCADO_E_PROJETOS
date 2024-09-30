<?php

// ARRAYS
// Como podemos adicionar e remover valores?

$nomes = ["joao", "ana", "carlos"];

// adicionar (push)
$nomes[] = "novo nome";
// $nomes = ["joao", "ana", "carlos", "novo nome"];

// ou
array_push($nomes, "pedro");
array_push($nomes, "rui", "carla", "marta");

echo '<pre>';
print_r($nomes);
echo '</pre>';

// remover elemento(a chave vai desaparecer);
// o nome rui que está na chave 5 vai desaparecer do nosso array.
unset($nomes[5]);
echo '<pre>';
print_r($nomes);
echo '</pre>';