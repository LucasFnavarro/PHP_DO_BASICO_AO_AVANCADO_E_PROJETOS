<?php

// ARRAYS

// Vimos arrays com índices númericos.
// Eles também podem ser arrays associativos,
// E ter indices alfanuméricos

$empresa = [
    'ceo' => "joao",
    'administrador' => "Ana Carla",
    'executivo' => "carlos",
    'contabilista' => "cristina"
];

echo '<pre>';
print_r($empresa);
echo '</pre>';

// para apresentar um valor, usamos a key
echo "Administrador da empresa: " . $empresa['administrador'];

// podemos adicionar mais valores
$empresa['operario'] = "antonio";
echo '<pre>';
print_r($empresa);