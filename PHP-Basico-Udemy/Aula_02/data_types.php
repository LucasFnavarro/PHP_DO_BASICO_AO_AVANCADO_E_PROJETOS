<?php

// DATA TYPES - tipos de dados.

// As variaveis (assim como as constantes), guarda valores de um determinado tipo.
// No PHP as variaveis não sao tipadas.
// Isso vai ser mais complexo de processar e pode gerar erros.

// --------------------------------------------------
// TIPO DE DADOS ESCALARES

// bool / booleano = aceita valores true e false.
$aprensentar_dados = true;

// int / inteiros - são valores numéricos sem casas decimais.
$valor = 0;
$valor1 = 5456464546;
$valor2 = 34654;

// float - valores flutuantes (números com casas decimais).
$float = 1.5;
$float1 = 2354.655;
$float2 = 0.00335;
$float3 = -0.4;

// strings - valores alfanumericos (letras, palavras, texto, frases)..
$nome = "Lucas";
$apelido = "Lucao";
$letra_escolhida = "A";
$frase_do_dia = "Acredite em si mesmo e você será imparável.";


// Imprimir na tela os resultados declarado nas variaveis acima.
echo $aprensentar_dados . "<br>";
echo '----------------------' . "<br>";
echo $valor . "<br>";
echo $valor1 . "<br>";
echo $valor2 . "<br>";
echo '----------------------' . "<br>";
echo $float  . "<br>";
echo $float1 . "<br>";
echo $float2 . "<br>";
echo $float3 . "<br>";
echo '----------------------' . "<br>";
echo $nome . "<br>";
echo $apelido . "<br>";
echo $letra_escolhida . "<br>";
echo $frase_do_dia . "<br>";
echo '----------------------' . "<br>";

// Apresentar os tipos de cada variável.
echo "Tipos de dados de cada variável declarada" . "<br>";   
echo gettype($aprensentar_dados) . "<br>";
echo gettype($valor) . "<br>";
echo gettype($float) . "<br>";
echo gettype($nome) . "<br>";
echo '----------------------' . "<br>";

// Apresentar informações da variável
echo "Apresentar informações da variável" . "<br>";   
var_dump($aprensentar_dados);
echo "<br>";
var_dump($valor1);
echo "<br>";
var_dump($float);
echo "<br>";
var_dump($nome);