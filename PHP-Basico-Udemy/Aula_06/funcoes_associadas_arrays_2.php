<?php

// Funções associadas a arrays

$cliente = [
    'nome' => "lucas",
    'apelido' => "lucao",
    'idade' => 25,
    'email' => 'lucasscquiavondev@gmail.com'
];

// apresentar um valor de um array associativo
echo $cliente['apelido'];

// verifica se existe um determinado key no array
var_dump(key_exists('telefone', $cliente)); // bool(false)

// array para string
$resultado = implode(",", $cliente);
var_dump($resultado); // "lucas,lucao,25,lucasscquiavondev@gmail.com"

// criar um novo array a partir de uma porção de outro array 
$nomes = ["joao", "ana", "carlos", "francisco", "cristina"];
$nomes_parte = array_slice($nomes, 2);