<?php

// OPERADOR DE CONTROLE DE ERROS

// Existem várias formas de contornar erros no PHP.
// Este operador, quando aplicado a uma expresão que vai gerar um erro,
// permite que este erro seja ignorado.

$ficheiro = file('teste123.txt');

// este código vai gerar um aviso.
// se adicionarmos o operador de controle de erros
// a mensagem do aviso vai desaparecer, sendo a instrução ignorada.

$ficheiro = @file('teste123.txt');

echo 'fim';

// Não é aconselhavel usar este operador, execpto em situações
// muito especificas, uma vez que anulamos as mensagens de erro,
// pode impedir de encontrarmos os erros pelo código.