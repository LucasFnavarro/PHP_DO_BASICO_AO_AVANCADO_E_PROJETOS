<?php 

// Arrays multidimencionais
// é um array que contém outros arrays dentro dele.

$lojas = [
    'Curitiba' => [
        'telefone' => '41123456',
        'email' => 'porto@gmail.com'
    ],
    'Londrina' => [
        'telefone' => '43665544',
        'email' => 'londrina@gmail.com'
    ],
    'Maringa' => [
        'telefone' => '4354545454',
        'email' => 'maringa@gmail.com'
    ]
];

echo '<pre>';
print_r($lojas);
echo '<pre>';

// apresentar valores especificos.
echo '<pre>';
echo $lojas['Londrina']['telefone'];

// nos arrays com indices númericos, também podemos ter multidimensão
$notas = [
    [10, 20, 30],
    [100, 200, 300],
    [1000, 2000, 3000] 
];

echo '<pre>';
print_r($notas);
echo '</pre>';

// apresentar uma nota especifica
echo $notas[2][0];