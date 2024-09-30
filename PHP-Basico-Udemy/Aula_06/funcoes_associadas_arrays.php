<?php 

// Funções associadas a arrays
// existem dezenas de funções para arrays
// arrays é um tipo de dado muito importante para o PHP.

// Vamos conhecer algumas funções de maior destaque.

$nomes = ["joao", "ana", "carlos", "joaquim"];

// queremos saber se uma variável é um array?
$resultado = is_array($nomes); // true;

// queremos saber quantos elementos tem um array
$resultado = count($nomes); // 4

// --------------------------------------------------
// adicionar valores no final do array
array_push($nomes, 'fernando', 'emanuela');

// --------------------------------------------------
// adicionar um valor no inicio do array
array_unshift($nomes, "marcos");

// --------------------------------------------------
// retirar um valor do final do array
$resultado = array_pop($nomes); // $resultado = "emanuela" quem vai ser excluído do array.

// --------------------------------------------------
// retirar um valor do inicio do array
$resultado = array_shift($nomes); // marcos será removido do array

// --------------------------------------------------
// eliminar um determinado elemento pelo indice
unset($nomes[0]); // remove o primeiro elemento do array
