<?php

// STRINGS 
// ----------------------------------------------------

// um aspecto importante nas strings: o PHP contém um vasto conjunto de funções para efetuar operações com strings.
// vejamos apenas alguns exemplos.

$frase = "Lorem ipsun dolor sit, amet consectetur adipisicing elit.";

// apresentar número de caracteres de uma string.
echo strlen($frase) . '<br>';

// transformar todas as letras em maiúsculas
echo strtoupper($frase) . '<br>';

// apresentar apenas aprte da frase
echo substr($frase, 0, 20) . '<br>';

// verificar se uma palavra existe dentro da string.
echo str_contains($frase, 'consectetur');

// Existem várias dezenas de funções para string.